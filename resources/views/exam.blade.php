

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

      <script>
         var count_timer ={{$remain}};
         var minutes = parseInt(count_timer/60);
         var seconds = parseInt(count_timer%60);
         function countDownTimer(){
             if(seconds < 10){
                 seconds= "0"+ seconds ;
             }if(minutes < 10){
                 minutes= "0"+ minutes ;
             }
             
             document.getElementById("timer").innerHTML = minutes+" Min. "+seconds+" Sec.";
       
             if(count_timer <= 0){
               document.getElementById('next').click();
             }
             else {
                 count_timer = count_timer -1 ;
                 minutes = parseInt(count_timer/60);
                 seconds = parseInt(count_timer%60);
                 setTimeout("countDownTimer()",1000);
             }
         }
         setTimeout("countDownTimer()",1000);
         
         </script>

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
                           <div class="time"><span class="yellow">Timer: </span>
                           <label class="font-weight-bold" id="timer"></label>
                           </div>
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
            <div class="col-md-12">
               <form action="{{url('/submit')}}" method="POST" id="request" class="main_form">
               {{-- <form id="request" class="main_form"> --}}
                  @csrf
                  <div class="row" >
                     <div class="col-md-12 " id="quediv">
                        <label class="text-white" for="">Question: <b id="qno">{{$qno}}</b></label>
                        <p name="question" id="question" class="text-white h3">{{$question }}</p> 
                     </div>
                     <div class="form-floating col-md-12" id="ansdiv">
                        <label class="text-white" for="floatingTextarea2">Answer:-</label>
                        <textarea class="form-control" placeholder="Leave a comment here" name="answer" id="answer" style="height: 100px"></textarea>
                     </div>
                     <div class="col-sm-6 mt-4">
                        <a href="{{url('/previous')}}" <?php if($qno==1){?> style='pointer-events: none' <?php  }?>
                           id="previous" name="previous" class="send_btn text-center link-light">Previous</a>
                        {{-- <button type="submit" id="previous" class="send_btn">Previous</button> --}}
                        
                     </div>
                     <div class="col-sm-6 mt-4">
                        <button type="submit" id="next" name="next" class="send_btn">Next</button>
                     </div>
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
      {{-- <script>
         $(document).ready(function () {
            $('#previous').on("click", function(e){
               e.preventDefault();
               window.history.back();
            });
                     
         });
      </script> --}}
    </body>
</html>

