<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">

    <!-- Title  -->
    <title>CoinSupportPage - Chat with our live agents. We are always available to help you.</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('home/img/favicon.png')}}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <style>
        /* Modal Background */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none; /* Hidden by default */
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        /* Modal Content */
        .popup-modal {
            background: white;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .popup-modal img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<!-- Popup Modal -->
<div class="popup-overlay" id="imagePopup">
    <div class="popup-modal">
        <a href="https://widget-page.smartsupp.com/widget/5c91e0e1fdfaa1c9877ecf99fc2fd5407aa5603a" target="_blank">
            <img src="{{ asset('home/chat-support.png') }}" alt="Chat Support">
        </a>
    </div>
</div>
<div class="main">
    <!-- ***** Preloader Start ***** -->
    <div class="preloader-main">
        <div class="preloader-wapper">
            <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                <defs>
                    <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                    </filter>
                </defs>
                <g filter="url(#goo)">
                    <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
                    <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
                </g>
            </svg>
            <div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Start ***** -->
    <header id="header">
        <!-- Navbar -->
        <nav data-aos="zoom-out" data-aos-delay="800" class="navbar gameon-navbar navbar-expand">
            <div class="container header">

                <!-- Logo -->
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('home/img/logo/logo.png')}}" alt="Brand Logo" />
                </a>

                <div class="ms-auto"></div>





            </div>
        </nav>
    </header>
    <!-- ***** Header End ***** -->

    <!-- ***** Hero Section Start ***** -->
    <section id="home" class="hero-section layout-1 has-overlay overlay-gradient">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-7 col-lg-6">
                    <!-- Hero Content -->
                    <div class="hero-content">
                        <h1 class="text-white">Chat with a live official agent below</h1>
                        <p class="sub-heading text-white my-4">We want to make sure that our users will get 100% customer service experiences. </p>

                        <!-- Download Button -->
                        <div class="button-group download-button">
                            <a href="#">
                                <img src="{{asset('home/img/content/google-play.png')}}" alt="">
                            </a>
                            <a href="mailto:{{$web->email}}">
                                <img src="{{asset('home/img/content/app-store.png')}}" alt="">
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6">
                    <!-- Hero Thumb -->
                    <div class="hero-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                        <img src="{{asset('home/img/content/hero-thumb.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Shape Bottom -->
        <div class="shape-bottom">
            <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
                <title>sApp Shape</title>
                <desc>Created with Sketch</desc>
                <defs></defs>
                <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                        <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
                    </g>
                </g>
            </svg>
        </div>
    </section>
    <!-- ***** Hero Section End ***** -->

    <!-- ***** Counter Area Start ***** -->
    <section class="counter-area">
        <div class="container">
            <div class="row items justify-content-center">
                <div class="col-6 col-md-3 item">
                    <div class="counter-item text-center">
                        <span class="counter">10</span><span>M</span>
                        <h5 class="mt-1 mb-0">Users</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3 item">
                    <div class="counter-item text-center">
                        <span class="counter">23</span><span>B</span>
                        <h5 class="mt-1 mb-0">Net Transactions</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3 item">
                    <div class="counter-item text-center">
                        <span class="counter">9</span><span>M</span>
                        <h5 class="mt-1 mb-0">Daily Transactions</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3 item">
                    <div class="counter-item text-center">
                        <span class="counter">12</span><span>K</span>
                        <h5 class="mt-1 mb-0">Support Agents</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <!-- Intro -->
                    <div class="intro text-center mb-4">
							<span class="badge rounded-pill text-bg-light">
								<i class="fa-regular fa-lightbulb"></i>
								<span>Premium</span>
								<span>Support</span>
							</span>
                        <h2 class="title">What Makes Us Different?</h2>
                        <p>We employ the best customer support agent that will definitely help you in all kind of issues relating to your usage of our services .</p>
                    </div>
                </div>
            </div>

            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <!-- Image Box -->
                    <div class="image-box text-center wow fadeInLeft" data-wow-delay="0.4s">
                        <img class="avatar-sm" src="{{asset('home/img/content/icon-1.png')}}" alt="">
                        <!-- Content -->
                        <div class="content">
                            <h4 class="mb-3">Fully Active</h4>
                            <p class="mt-3">Enjoy Complete and Best Quality Response From Best Trained Support Agents. Contact us today for the best services </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <!-- Image Box -->
                    <div class="image-box text-center wow fadeInUp" data-wow-delay="0.2s">
                        <img class="avatar-sm" src="{{asset('home/img/content/icon-2.png')}}" alt="">
                        <!-- Content -->
                        <div class="content">
                            <h4 class="mb-3">Live Chat</h4>
                            <p class="mt-3">Connect with us in real-time for instant support and engagement. Just send us a message and you will get and instant response</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <!-- Image Box -->
                    <div class="image-box text-center wow fadeInRight" data-wow-delay="0.4s">
                        <img class="avatar-sm" src="{{asset('home/img/content/icon-3.png')}}" alt="">
                        <!-- Content -->
                        <div class="content">
                            <h4 class="mb-3">Secure Data</h4>
                            <p class="mt-3">All your data and information are processed instantly without being stored to make sure you are safe all the time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Area End ***** -->

    <!-- ***** Content Section Start ***** -->
    <section class="content-section primary-bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="content">
                        <h2 class="mt-0">Easily Chat With Web or Mobile</h2>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center border-0">
                                <!-- Icon Box -->
                                <div class="icon-box me-3">
                                    <div class="icon shadow-sm">
                                        <span class="material-symbols-outlined">tab_inactive</span>
                                    </div>
                                </div>
                                <span>On our website with either your phone or laptop, you can always contact us and be rest assured that your misunderstanding will be cleared.</span>
                            </li>

                            <li class="list-group-item d-flex align-items-center border-0">
                                <!-- Icon Box -->
                                <div class="icon-box me-3">
                                    <div class="icon shadow-sm">
                                        <span class="material-symbols-outlined">verified</span>
                                    </div>
                                </div>
                                <span>We maintain a professional working scheme. This means that we go straight to solving your problem once we understood it.</span>
                            </li>

                            <li class="list-group-item d-flex align-items-center border-0">
                                <!-- Icon Box -->
                                <div class="icon-box me-3">
                                    <div class="icon shadow-sm">
                                        <span class="material-symbols-outlined">swap_calls</span>
                                    </div>
                                </div>
                                <span>We can refer you to our call support agent in some cases that will need you to speak to us</span>
                            </li>

                            <li class="list-group-item d-flex align-items-center border-0">
                                <!-- Icon Box -->
                                <div class="icon-box me-3">
                                    <div class="icon shadow-sm">
                                        <span class="material-symbols-outlined">schedule</span>
                                    </div>
                                </div>
                                <span>You can always schedule when is best to talk or chat with us. This is to make sure that you are not stressed about telling us your issues on using our services.</span>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-12 col-lg-4 d-none d-md-block">
                    <img src="https://images.pexels.com/photos/7709235/pexels-photo-77092359245.jpg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=2" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Content Section End ***** -->


    <!--====== Contact Area End ======-->

    <!--====== Height Emulator Area Start ======-->
    <div class="height-emulator d-none d-lg-block"></div>
    <!--====== Height Emulator Area End ======-->

    <!--====== Footer Area Start ======-->
    <footer class="footer-area footer-fixed p-0">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row items">
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Logo -->
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img class="logo" src="{{asset('home/img/logo/logo.png')}}" alt="">
                            </a>
                            <p class="slug mt-3">The Next-Level Solutions for Providing The Best Support To Our Users</p>

                            <hr>


                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copyright Area -->
                        <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between align-items-center text-center py-4">
                            <span>&copy; {{ date('Y') }} | All rights reserved.</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer Area End ======-->

</div>

    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="{{asset('home/js/vendor/jquery.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('home/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('home/js/vendor/bootstrap.min.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{asset('home/js/vendor/slider.min.js')}}"></script>
    <script src="{{asset('home/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/js/vendor/counterup.js')}}"></script>
    <script src="{{asset('home/js/vendor/waypoint.js')}}"></script>
    <script src="{{asset('home/js/vendor/aos.js')}}"></script>
    <script src="{{asset('home/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('home/js/vendor/countdown.min.js')}}"></script>
    <script src="{{asset('home/js/vendor/gallery.min.js')}}"></script>

    <!-- Main js -->
    <script src="{{asset('home/js/main.js')}}"></script>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '5c91e0e1fdfaa1c9877ecf99fc2fd5407aa5603a';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
    <script>
        // Show the modal after 10 seconds
        setTimeout(() => {
            const popup = document.getElementById('imagePopup');
            popup.style.display = 'flex';
            // Automatically close the popup after 10 seconds
            setTimeout(() => {
                popup.style.display = 'none';
            }, 10000);
        }, 10000);
    </script>
</body>
</html>
