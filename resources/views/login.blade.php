

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
      <title>MetricoidTech</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#" /></div>
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
                              <a href="{{url('/info')}}"><img src="{{asset('images/Logo-2.png')}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="#">About </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Contact</a>
                              </li>
                           </ul>
                           <div class="Call"><a href="#"> <span class="yellow">Call Us : </span></a></div>
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
               <form action="{{route('getinfo')}}" method="POST" id="request" class="main_form">
                  @csrf
                  <input type="hidden" name="category_id" value="{{$id?$id:old($id)}}">
                  <div class="row">
                     <div class="col-md-12 ">
                        <span style="color: rgb(230, 33, 33)"> 
                           @error('Name')
                           {{$message}}
                           @enderror
                        </span>
                        <input class="contactus" placeholder="Name" type="text" name="Name"> 
                       
                     </div>
                     <div class="col-md-12">
                        <span style="color: rgb(230, 33, 33)"> 
                           @error('Email')
                           {{$message}}
                           @enderror
                        </span>
                        <input class="contactus" placeholder=" Email" type="email" name="Email"> 
                     </div>
                     <div class="col-md-12">
                        <span style="color: rgb(230, 33, 33)"> 
                           @error('Phone_Number')
                           {{$message}}
                           @enderror
                        </span>
                        <input class="contactus" placeholder=" Phone_Number" type="text" name="Phone_Number">                          
                     </div>
                     <input hidden name="ip" type="text" id="ip">
                     <input hidden name="time" type="text" id="time">
                     <div class="col-sm-12">
                        <button type="submit" class="send_btn">Start Test</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-6">
               <div class="text-bg">
                  <h3>About test</h3>
                  <p> There are many variations of passages of Lorem Ipsum available, but the majorityomised words which don't look even slightly believable</p>
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
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"><u> Free Html Templates</u></a></p>
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
      <script>
         $.getJSON("https://api.ipify.org/?format=json", function(e) {
               console.log(e.ip);
               $('#ip').val(e.ip);
            });
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var dateTime = date+' '+time;
            $('#time').val(dateTime);
           
      </script>
      <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>

   </body>
</html>

