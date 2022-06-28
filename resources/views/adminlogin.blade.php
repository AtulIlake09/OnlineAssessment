<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Metricoid Technology Solutions</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/logometricoid.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet"
        href="{{ asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}"
        media="screen">
    <!--other login-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         .Icon-inside {
      position:relative;
     }
	 
     .Icon-inside i {
      position:absolute;
      left:15px;
      top:25px;
      padding:10px 10px;
      color:#03045e;
     }
    </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>
<!-- body -->

<body class="main-layout">

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{ url('/adminlogin') }}"><img src="{{ asset('images/Logo-2.png') }}"
                                            alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://metricoidtech.com/about-metricoid/" target="_blank">About </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://metricoidtech.com/contact/" target="_blank">Contact</a>
                                    </li>
                                </ul>
                                {{-- <div class="Call"><a href="#"> <span class="yellow">Call Us :
                                        </span></a></div> --}}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if (session()->has('fail'))
        <div style="margin-bottom: 0px;" class="alert alert-danger alert-dismissible fade show border border-danger"
            role="alert">
            <strong style="margin-right: 4vmax;margin-left: 11px;">{{ $fail = session()->get('fail') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row d_flex justify-content-md-center">
                <div class="mx-auto">
                    <form action="{{ url('/adminlog') }}" method="POST" id="request" class="main_form"
                        style="width: 33vmax;">
                        <h2 style="color: #03045e; font-family: Poppins; font-weight: bold;text-align: center;">Admin Login</h2>
                        @csrf
                        <input type="hidden" name="category_id" value="">
                        <div class="row">
                            <div class="col-md-12 Icon-inside">
                                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                                <input class="contactus input100" placeholder="Email-ID" type="email" name="email"
                                    style="margin-top: 20px; margin-bottom: 0px;" required>
                                <span style="color: rgb(230, 33, 33)">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-12 Icon-inside">
                                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                <input class="contactus input100" placeholder=" Password" type="password" name="password"
                                    style="margin-top: 20px; margin-bottom: 0px;" required>
                                <span style="color: rgb(230, 33, 33)">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <input hidden name="ip" type="text" id="ip">
                            <input hidden name="time" type="text" id="time">
                            <div class="col-sm-12">
                                <button type="submit" class="send_btn" style="font-family: Poppins; margin-top: 20px;">Login</button>
                            </div>
                        </div>
                        <div class="txt1 text-center p-t-30 p-b-20">
                            <span style="color: #03045e;">
                                Or Sign Up Using
                            </span>
                        </div>
            
                        <div class="flex-c-m">
                            <a href="{{ route('login.google')}}" class="login100-social-item bg3">
                                <i class="fa fa-google"></i>
                            </a>
            
                            <a href="{{ route('login.github')}}" class="login100-social-item bg2">
                                <i class="fa fa-github"></i>
                            </a>
            
                            <a href="{{ route('login.facebook')}}" class="login100-social-item bg1">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>
                    </form>
                </div>
                
            </div>
            
    </section>
   
    <footer>
        <div class="footer">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© {{date('Y')}} All Rights Reserved by <a href="https://metricoidtech.com/" target="_blank"><u> Metricoid
                                        Technology Solutions Private Limited</u></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    {{-- <script src="{{ asset('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}"></script> --}}
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>

</body>

</html>
