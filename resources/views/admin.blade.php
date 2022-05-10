<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/adminicon.ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <a class="navbar-brand brand-logo" href="#">
                    <img src="images/Logo-2.png" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="#">
                    <img src="images/logo-mini.svg" alt="logo" />
                </a>
               
                <ul class="navbar-nav ms-auto">
                    <li>
                        <div>
                            <form id="frm-logout" action="#" method="POST">
                                @csrf
                                <button class="btn btn-sm text-white me-0" type="submit" data-bs-toggle="offcanvas" style="background-color: #002d7c;">
                                    <span class="mdi mdi-power">Logout</span>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="padding-right:0px; padding-left:0px;margin-top: -17px;">
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li id="dash" class="nav-item">
                        <a class="nav-link" href="adminpage">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li id="candid" class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-account-outline menu-icon"></i>
                            <span class="menu-title">Manage Candidates</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                  <div id="data_cards" class="row">
                     <div class="card card-rounded mx-auto"
                         style="width: 16rem; height: 8rem; margin-bottom: 7px;align-item:center">
                         <div style="margin: auto">
                             <a href="{{url('/category')}}" class="card-link"><p class="statistics-title card-title card-title-dash">
                                Categories</p>
                             <h3 class="rate-percentage"
                                 style="text-align: center">
                                 {{ empty($ct) ? '00' : $ct }}
                             </h3></a>
                         </div>
                     </div>
                     <div class="card card-rounded mx-auto"
                         style="width: 16rem; height: 8rem; margin-bottom: 7px;align-item:center">
                         <div style="margin: auto">
                             <p class="statistics-title card-title card-title-dash">
                                 Candidates</p>
                             <h3 class="rate-percentage"
                                 style="text-align: center">
                                 {{ empty($cd) ? '00' : $cd }}
                             </h3>
                         </div>
                     </div>
                 </div>
                 <div class="table-responsive">
                     @if(!empty($ctdata))
                     <table class="table">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Category</th>
                              <th>Time</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($ctdata as $val)
                           <tr>
                              <td>{{$val->id}}</td>
                              <td>{{$val->category}}</td>
                              <td>{{$val->time_period}}</td>
                              <td>{{($val->active==1)?"Active":"Inactive"}}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                     @endif
                  </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="footer">
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p style="margin-top: 10px;">© 2022 All Rights Reserved by  <a href="https://metricoidtech.com/"><u> Metricoid Technology Solutions Private Limited</u></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </footer>
    <!-- partial -->
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
      $(function(){
         var current_page_URL = location.href;
         $( "a" ).each(function() {
            if ($(this).attr("href") !== "#") {
               var target_URL = $(this).prop("href");
               if (target_URL == current_page_URL) {
                  $('nav a').parents('li, ul').removeClass('active');
                  $(this).parent('li').addClass('active');
                  return false;
               }
            }
         });
      });
    </script>
</body>

</html>
