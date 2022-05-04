

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
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <script>

         if(localStorage.getItem("count_timer")){
             var count_timer = localStorage.getItem("count_timer");
         } else {
             var count_timer = 60* 0.2;
         }
         var minutes = parseInt(count_timer/60);
         var seconds = parseInt(count_timer%60);
         function countDownTimer(){
             if(seconds < 10){
                 seconds= "0"+ seconds ;
             }if(minutes < 10){
                 minutes= "0"+ minutes ;
             }
             
             document.getElementById("timer").innerHTML = minutes+" Min. "+seconds+" Sec.";
             var next=document.getElementById('next');
             if(count_timer <= 0){
                  localStorage.clear("count_timer");
             }
             else {
                 count_timer = count_timer -1 ;
                 minutes = parseInt(count_timer/60);
                 seconds = parseInt(count_timer%60);
                 localStorage.setItem("count_timer",count_timer);
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
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                              <a href="{{url('/info')}}"><img src="images/Logo-2.png" alt="#" /></a>
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
                  @csrf
                  <div class="row">
                     <div class="col-md-12 ">
                        <label class="text-white" for="">Question</label>
                        <p class="text-white h3">{{$question}}</p> 
                     </div>
                     <div class="form-floating col-md-12">
                        <label class="text-white" for="floatingTextarea2">Answer:-</label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                     </div>
                     <div class="col-sm-6 mt-4">
                        <button class="send_btn">Previous</button>
                     </div>
                     <div class="col-sm-6 mt-4">
                        <button type="submit" id="next" class="send_btn">Next</button>
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
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      {{-- <script>
            setInterval(function() {
               var xmlhttp=new XMLHttpRequest();
               var time=document.getElementById("timer").innerText;
               xmlhttp.open("GET","http://127.0.0.1:8000/timer/"+ time,false);
               xmlhttp.send(null);
               var data = xmlhttp.responseText;
               console.log(data,'////');
               document.getElementById("timer").innerHTML=xmlhttp.responseText;
            }, 1000);
      </script> --}}
      {{-- <script>
         var startingminutes= ;
         let time=startingminutes*60;
         const countdown=document.getElementById('timer');
         setInterval(updateCountdown,1000);
         function updateCountdown(){
            const minutes=Math.floor(time/60);
            let seconds=time % 60;
            countdown.innerHTML=`${minutes}:${seconds}`;
            time--;
            time = time < 0 ? 0 : time; 
         }
      </script> --}}
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
    
    </body>
</html>

