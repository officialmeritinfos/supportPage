<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\ManageAccount;
use App\Models\ManageAccountDuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ManagedAccountDurations extends Controller
{
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'deposits'=>ManageAccountDuration::get(),
            'pageName'=>'Managed Account Durations',
            'siteName'=>$web->name
        ];

        return view('admin.managed_accounts_durations',$dataView);
    }

    public function delete($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        ManageAccountDuration::where('id',$id)->delete();

        return back()->with('success','successfully deleted');
    }

    public function addNew(Request  $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'title'=>['required','string','unique:manage_accounts_durations,title'],
            'amount'=>['required','numeric'],
            'duration'=>['required','string']
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        ManageAccountDuration::create([
            'title'=>$input['title'],
            'duration'=>$input['duration'],
            'amount'=>$input['amount']
        ]);

        return back()->with('success','Duration successfully added.');
    }
}
