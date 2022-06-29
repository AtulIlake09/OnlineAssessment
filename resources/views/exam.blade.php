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
    <link rel="stylesheet" href="{{url('codemirror/lib/codemirror.css')}}">
    <link rel="stylesheet" href="{{url('codemirror/theme/dracula.css')}}">
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <script>
        var count_timer = {{ $remain }};
        var minutes = parseInt(count_timer / 60);
        var seconds = parseInt(count_timer % 60);

        function countDownTimer() {
            if (seconds < 10) {
                seconds = "0" + seconds;
            }
            if (minutes < 10) {
                minutes = "0" + minutes;
            }

            document.getElementById("timer").innerHTML = minutes + " Min. " + seconds + " Sec.";

            if (count_timer <= 0) {
                document.getElementById('hidesubmitbtn').click();
            } else {
                count_timer = count_timer - 1;
                minutes = parseInt(count_timer / 60);
                seconds = parseInt(count_timer % 60);
                setTimeout("countDownTimer()", 1000);
            }
        }
        setTimeout("countDownTimer()", 1000);
    </script>
    {{-- <style>
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

    </style> --}}

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
                        {{-- <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="true"
                                aria-label="Toggle navigation">
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
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                                    <div class="full">
                                        <div class="center-desk">
                                            <div class="logo">
                                                <a href="#"><img src="{{ asset('images/Logo-2.png') }}" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </nav> --}}
                        <div class="time" style="text-align: end;">
                            <span class="yellow">Timer: </span>
                            <label class="font-weight-bold" id="timer"></label>
                        </div>
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
                    <form <?php if($qno==$count){?>action="{{ url('/submit') }}" method="POST"
                        <?php }else{ ?>action="{{ url('/next') }}" method="POST" <?php } ?> id="request"
                        class="main_form">
                        @csrf
                        @if($question['type']==1)
                            <div class="row">
                                <div class="col-md-12 " id="quediv">
                                    <label class="text-white-custom-colour" for="">Question: <b
                                            id="qno">{{ $qno == $count ? $qno . ' (Last question)' : $qno }}</b></label>
                                    <p name="question" id="question" class="text-white-custom-colour h3">
                                        {{ $question['question'] }}</p>
                                </div>
                                <div class="form-floating col-md-12" id="ansdiv">
                                    <label class="text-white-custom-colour" for="floatingTextarea2">Answer:-</label>
                                    <textarea id="txtInput1" class="txtInput form-control" placeholder="Leave a comment here" name="answer" id="answer"
                                        style="height: 200px" autofocus>{{ $answer }}</textarea>
                                </div>
                                <div class="col-sm-6 mt-4">
                                    <button type="submit" <?php if($qno==1){?> disabled <?php  }?> id="previous"
                                        name="previous" class="prev_btn"
                                        formaction="{{ url('/prev') }}">Previous</button>
                                </div>
                                <div class="col-sm-6 mt-4">
                                    <button type="submit" <?php if($qno==$count){?> id="submit" name="submit"
                                        class="submit_btn btn-success" <?php }else{ ?>id="next" name="next"
                                        class="send_btn" <?php } ?>><?php if ($qno == $count) {
                                            echo 'Submit';
                                        } else {
                                            echo 'Next';
                                        } ?></button>
                                    <button type="submit" hidden id="hidesubmitbtn"
                                        formaction="{{ url('/submit') }}">Submit</button>
                                </div>
                            </div>
                        @elseif($question['type']==2)
                            <div class="row">
                                <div class="col-md-12 " id="quediv">
                                    <label class="text-white-custom-colour" for="">Question: <b
                                            id="qno">{{ $qno == $count ? $qno . ' (Last question)' : $qno }}</b></label>
                                    <p name="question" id="question" class="text-white-custom-colour h3">
                                        {{ $question['question'] }}</p>
                                </div>
                                <div class="form-floating col-md-12" id="ansdiv">
                                    <label class="text-white-custom-colour" for="floatingTextarea2">Answer:-</label>
                                    <div class="input-group-text" style="text-align: left; font-size: 18px;"> 
                                        <ol>
                                        <?php
                                            $query = DB::table('question_options')
                                                ->where('ques_id', $question['id'])
                                                ->get();
                                            $options = $query->all();
                                            foreach($options as $option) { 
                                               
                                                if($answer==$option->option_id)
                                                {
                                                    echo "<li><input type='radio' checked name='answer' value='".$option->option_id."'/> ".$option->option."</li>";
                                                }
                                                else {
                                                    echo "<li><input type='radio' name='answer' value='".$option->option_id."'/> ".$option->option."</li>";
                                                }
                                                
                                            }
                                        ?>
                                        </ol>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-4">
                                    <button type="submit" <?php if($qno==1){?> disabled <?php  }?> id="previous"
                                        name="previous" class="prev_btn"
                                        formaction="{{ url('/prev') }}">Previous</button>
                                </div>
                                <div class="col-sm-6 mt-4">
                                    <button type="submit" <?php if($qno==$count){?> id="submit" name="submit"
                                        class="submit_btn btn-success" <?php }else{ ?>id="next" name="next"
                                        class="send_btn" <?php } ?>><?php if ($qno == $count) {
                                            echo 'Submit';
                                        } else {
                                            echo 'Next';
                                        } ?></button>
                                    <button type="submit" hidden id="hidesubmitbtn"
                                        formaction="{{ url('/submit') }}">Submit</button>
                                </div>
                            </div>
                        @elseif($question['type']==3)
                            <div class="row">
                                <div class="col-md-5 " id="quediv">
                                    <label class="text-white-custom-colour" for="">Question: <b
                                            id="qno">{{ $qno == $count ? $qno . ' (Last question)' : $qno }}</b></label>
                                    <p name="question" id="question" class="text-white-custom-colour h3">
                                        {{ $question['question'] }}</p>
                                        <div class="row" style="position: absolute;bottom: 0;width: 35vmax;">
                                            <div class="col-sm-6 mt-4">
                                                <button type="submit" <?php if($qno==1){?> disabled <?php  }?> id="previous"
                                                    name="previous" class="prev_btn"
                                                    formaction="{{ url('/prev') }}">Previous</button>
                                            </div>
                                            <div class="col-sm-6 mt-4">
                                                <button type="submit" <?php if($qno==$count){?> id="submit" name="submit"
                                                    class="submit_btn btn-success" <?php }else{ ?>id="next" name="next"
                                                    class="send_btn" <?php } ?>><?php if ($qno == $count) {
                                                        echo 'Submit';
                                                    } else {
                                                        echo 'Next';
                                                    } ?></button>
                                                <button type="submit" hidden id="hidesubmitbtn"
                                                    formaction="{{ url('/submit') }}">Submit</button>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-floating col-md-7" id="ansdiv">
                                    <label class="text-white-custom-colour" for="floatingTextarea2">Answer:-</label>
                                    <textarea id="txtInput" class="txtInput form-control" placeholder="Leave a comment here" name="answer" id="answer"
                                        style="height: 200px" autofocus>{{ $answer }}</textarea>
                                </div>
                            </div>
                        @endif
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
                            {{-- <p>© 2022 All Rights Reserved by <a href="https://metricoidtech.com/"><u> Metricoid
                                        Technology Solutions Private Limited</u></a></p> --}}
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
    <!-- codemirror -->
    <script src="{{url('codemirror/lib/codemirror.js')}}"></script>
    <script src="{{url('codemirror/mode/xml/xml.js')}}"></script>
    <script src="{{url('codemirror/addon/edit/closetag.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#submit").click(function(event) {
                // if (!confirm('Are you sure that you want to submit the test'))
                event.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Are you sure!",
                    text: "Do you really want to submit test!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willsubmit) => {
                    if (willsubmit) {
                        swal("Submitted successfully !", {
                            icon: "success",
                        });
                        // window.location.reload();
                        $('#hidesubmitbtn').click();
                    } else {
                        swal("Not Submitted!", {
                            icon: "error",
                        });
                    }
                });

            });

        });
    </script>
    
    @if($answer=="")
    <script>
        let  scratchpad=document.querySelector('.txtInput');
        scratchpad.value=localStorage.getItem("notes")
        let cancel
        scratchpad.addEventListener("keyup",event=>{
            if(cancel)clearTimeout(cancel)
            cancel=setTimeout(()=>{
                localStorage.setItem("notes",event.target.value)
            },1000)
        })

        $('#next').on('click',function(){
            localStorage.clear();
        })
     </script>
     @endif

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

    <script>
        var txtInput=CodeMirror.fromTextArea(document.getElementById('txtInput'),
        { 
            mode: "xml" , 
            theme: "dracula",
            lineWrapping: true,
            lineNumbers: true,
            autoCloseTags: true
        });
    </script>
    {{-- <script>
        $(document).bind("contextmenu", function(e) {
            return false;
             $('#txtInput').on("cut copy paste", function(e) {
                e.preventDefault();
            });
        });
    </script> --}}

</body>

</html>
