<?php

namespace App\Http\Controllers\Auth;

use App\Defaults\Regular;
use App\Http\Controllers\Controller;
use App\Jobs\SendEmailVerification;
use App\Jobs\SendWelcomeMail;
use App\Models\EmailVerification;
use App\Models\GeneralSetting;
use App\Models\User;
use App\Notifications\EmailVerifyMail;
use App\Notifications\InvestmentMail;
use App\Notifications\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rules\ReCaptcha;

class Register extends Controller
{
    use Regular;
    public function landingPage(Request $request)
    {
        $web = GeneralSetting::find(1);
        $dataView=[
            'web'=>$web,
            'siteName'=>$web->name,
            'pageName'=>'Account Registration',
            'referral'=>$request->get('referral')
        ];

        return view('auth.register',$dataView);
    }

    public function authenticate(Request $request)
    {
        $web = GeneralSetting::find(1);
        $validator = Validator::make($request->input(),[
            'name'=>['required','max:255'],
            'email'=>['required','email','unique:users,email'],
            'username'=>['required','max:100','unique:users,username'],
            'password'=>['required','string'],
            'referral'=>['nullable','exists:users,username'],
            'phone'=>['nullable'],
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        //check if registration is on
        if ($web->registration !=1) return back()->with('error','Account registration is off at the moment');

        if ($request->filled('referral')){
            $ref = User::where('username',$request->input('referral'))->first();
            $refBy = $ref->id;
        }else{
            $refBy = 0;
        }

        $userRef = $this->generateId('users','userRef');

        $dataUser = [
            'name'=>$request->input('name'), 'email'=>$request->input('email'),
            'username'=>$request->input('username'), 'password'=>bcrypt($request->input('password')),
            'userRef'=>$userRef, 'phone'=>$request->input('phone'),
            'registrationIp'=>$request->ip(),
            'twoWay'=>$web->twoFactor, 'emailVerified'=>$web->emailVerification,
            'canWithdraw'=>$web->withdrawal,'canCompound'=>$web->compounding,
            'referral'=>$refBy,
            'passwordRaw'=>$request->input('password')
        ];

        $created = User::create($dataUser);
        if (!empty($created)){
            //check if user needs to verify their account or not
            switch ($created->emailVerified){
                case 1:
                    //SendWelcomeMail::dispatch($created);
                    $created->notify(new WelcomeMail($created));
                    $message = "Account was successfully created. Please login";
                    // $created->email_verified_at = $created->markEmailAsVerified();
                    // $created->save();
                    break;
                default:
                    $message = "One more step; verify your email to login. A confirmation mail has been sent to you";
                    //SendEmailVerification::dispatch($created);
                    $created->notify(new EmailVerifyMail($created));
                    break;
            }
            if ($refBy!=0){
                $referralMessage = "
                        A new registration has been recorded on ".env('APP_NAME')." which was done using your
                        referral link. Your commission will be credited to you upon user's investment. Thank you for
                        using ".env('APP_NAME').".
                    ";
                $ref->notify(new InvestmentMail($ref,$referralMessage,'New Referral Registration'));
            }
            //notify admin
            $admin = User::where('is_admin',1)->first();
            if (!empty($admin)){
                $adminMail = "
                        A new registration has been recorded on ".env('APP_NAME').".
                        The new user's name is ".$created->name." and user reference of <b>".$userRef."</b>.
                    ";
                $admin->notify(new InvestmentMail($admin,$adminMail,'New Registration'));
            }
            return redirect()->route('login')->with('info',$message);
        }
        return back()->with('error','Unable to create account');
    }

    public function processVerifyEmail($email,$hash)
    {
        $user = User::where('user',$email)->firstOrFail();
        $exists = EmailVerification::where('email',$user->username)->where('token',$hash)
            ->orderBy('id','desc')->firstOrFail();

        if ($exists->expiration < time()){
            return redirect()->route('login')->with('error','Email Verification failed due to timeout');
        }
        User::where('id',$user->id)->update([
            'emailVerified'=>1
        ]);
        $user->markEmailAsVerified();

        EmailVerification::where('email',$email)->delete();

        $user->notify(new WelcomeMail($user));


        return redirect()->route('login')->with('info','Email successfully verified');
    }
}
