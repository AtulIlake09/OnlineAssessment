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
    <title>Metricoid Technology Solution pvt.Ltd.</title>
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
                                    <a href="#"><img src="{{ asset('images/Logo-2.png') }}" alt="#" /></a>
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
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-6">
                    <form action="{{ route('getinfo') }}" method="POST" id="request" class="main_form"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="text" hidden name="link" id="link" value="{{ $link }}">
                        <input type="text" hidden name="company_id" id="company_id" value="{{ $company_id }}">
                        <input type="text" hidden name="cat_id" id="cat_id" value="{{ $cat }}">
                        <input type="text" hidden name="can_id" id="can_id" value="{{ $key }}">

                        <div class="row">
                            <div class="col-md-12 ">
                                <span style="color: rgb(230, 33, 33)">
                                    @error('Name')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input class="contactus" placeholder="Name" type="text" name="Name"
                                    value="{{ $name }}">

                            </div>
                            <div class="col-md-12">
                                <span style="color: rgb(230, 33, 33)">
                                    @error('Email')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input class="contactus" placeholder=" Email" type="email" name="Email"
                                    value="{{ $email }}">
                            </div>
                            <div class="col-md-12">
                                <span style="color: rgb(230, 33, 33)">
                                    @error('Phone_Number')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input class="contactus" placeholder=" Phone Number" type="text"
                                    name="Phone_Number" value="{{ $phone }}">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <span style="color: rgb(230, 33, 33)">
                                        @error('file')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <label for="formFile" class="form-label text-white-custom-colour">Upload
                                        Resume:</label>
                                    <input class="form-control" type="file" id="formFile" name='file'
                                        accept=".docx,.doc,.txt,.xlx,.xls,.pdf">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" id="btnstart" class="send_btn">Start Test</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="text-bg">
                        <h3>About test</h3>
                        <p>{{ $descrip }}</p>
                        <a class="read_more" href="#">Read More</a>
                    </div>
                </div>

            </div>
    </section>
    <footer>
        <div class="footer">
            {{-- <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="cont">
                        <h3> Free Multipurpose  <br> Responsive Landing Page 2019</h3>
                        <p>Modern lighting fast & easily Customizable</p>
                     </div>
                     <button class="sub_btn" href="#">Get A Quote</button>
                  </div>
               </div>
            </div> --}}
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2022 All Rights Reserved by <a href="https://metricoidtech.com/"><u> Metricoid
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
    <script src="{{ asset('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}"></script>
    {{-- <script>
         $.getJSON("https://api.ipify.org/?format=json", function(e) {
               console.log(e.ip);
               $('#ip').val(e.ip);
            });
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var dateTime = date+' '+time;
            $('#time').val(dateTime);
           
      </script> --}}
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
    <script>
        window.addEventListener("pageshow", function(event) {
            var historyTraversal = event.persisted ||
                (typeof window.performance != "undefined" &&
                    window.performance.navigation.type === 2);
            if (historyTraversal) {
                // Handle page restore.
                window.location.reload();
            }
        });
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btnstart").click(function(event) {
                // if (!confirm('Are you sure that you want to submit the test'))
                event.preventDefault();
                var form = $(this).parents('form');
                console.log(form);
                swal({
                    title: "Are you ready!",
                    text: "To start test click OK other wise click cancel!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willsubmit) => {
                    if (willsubmit) {
                        form.submit();
                    } else {
                        swal("Not Started!", {
                            icon: "error",
                        });
                    }
                });

            });

        });
    </script>

@if (session()->has('success_msg'))
@php $msg=session()->get('success_msg'); @endphp
<script>
    var success_msg = "<?php echo "$msg"; ?>";
    console.log(success_msg);
    swal(success_msg, {
        icon: "success",
    });
</script>
@elseif(session()->has('error_msg'))
@php $msg=session()->get('error_msg'); @endphp
<script>
    var error_msg = "<?php echo "$msg"; ?>";
    console.log(error_msg);
    swal(error_msg, {
        icon: "error",
    });
</script>
@endif

@error('Email')
<script>
    var error = "<?php echo "$message"; ?>";
    swal(error, {
        icon: "error",
    });
</script>
@enderror

@error('Name')
<script>
    var error = "<?php echo "$message"; ?>";
    swal(error, {
        icon: "error",
    });
</script>
@enderror

@error('Phone_Number')
<script>
    var error = "<?php echo "$message"; ?>";
    swal(error, {
        icon: "error",
    });
</script>
@enderror

</body>

</html>
