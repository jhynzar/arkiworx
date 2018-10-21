<!DOCTYPE html>
<html lang="en">

<head>
    <title>ArkiWorx | Cost Management and Progress Monitoring System</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Weather css -->
    <link href="../assets/css/svg-weather.css" rel="stylesheet">

    <!-- Echart js -->
    <script src="../assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/color/color-1.min.css" id="color" />
    <!-- fullCalendar -->

    <link rel="stylesheet" href="../Admin/bower_components/fullcalendar/dist/fullcalendar.min.css" media="print">
    <link rel="stylesheet" href="../Admin/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



    <style>
        .sidebar .user-panel {
            background-image: url('/assets/images/ff.jpg') !important;
        }

        .morphsearch-content {
            background-color: #222d32 !important;
            color: white !important;
        }



        



        .col-sm-3 {
            background-color: white !important;

        }

        .col-sm-9 {
            margin-top: -68px !important;
        }



        .panel-teal .panel-heading {

            border: none !important;
        }



        .main-header {
            margin-top: -5px !important;
        }


        .col-sm-3 {
            position: relative;
            margin-left: 10px;
            float: left;
            width: 20%;
        }


        .col-sm-9 {
            float: left;

            width: 79%;
        }



        .form-control,
        .form-group label {
            margin-right: 10px !important;
            font-size: 14px;
        }




        .nav-email li {
            line-height: 40px !important;
        }




        .btn-compose {
            color: white !important;
        }





        .modal-header {
            background-color: #293952 !important;
            color: white !important;
        }

        .modal-body {
            background-color: #e5e5f2 !important;
        }

        .modal-header {
            background-color: #778899 !important;
            color: white !important;
        }

    </style>



</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
</div> -->



        <!--log out modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log out</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text text-muted" style="font-size: 15px"> Are you sure you want to log-out?</p>
                    </div>
                    <div class="modal-footer">
                        <div class="actionsBtns">
                            <form action="/logout" method="post">
                                <a href="Login" class="btn btn-primary"> LOG OUT
                                </a>
                                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!-- Navbar-->
        <header class="main-header-top hidden-print">

            <a href="Admin/home" class="nav-brand">
                <img class="img-fluid logo" src="../assets/images/NYETA.png" alt="Theme-logo">
            </a>




            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
                <!-- Navbar Right Menu-->

                <ul class="top-nav">
                    <!--Notification Menu-->

                    <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                        <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                            <i class="icofont icofont-search-alt-1"></i>
                        </a>
                    </li>





                    <!-- User Menu-->
                   <li class="dropdown">
                        <a href="/Admin/Account-Settings">
                            <span>
                                <img class="img-circle " src="../assets/images/avatar-1.jpg" style="width:40px;" alt="User Image">
                            </span>
                            <span>
                                <b>Juliamar</b>Soriano</span>

                        </a>

                    </li>


                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>

                    </li>

                    <!-- log out trigger -->
                    <li>


                        <a href="Login" data-toggle="modal" data-target="#logoutModal">
                            <i class="icon-logout"></i> LOG
                            <b>OUT</b>
                        </a>

                    </li>
                </ul>

                <!-- search -->
                <div id="morphsearch" class="morphsearch">
                    <form class="morphsearch-form">

                        <input class="morphsearch-input" type="search" placeholder="Search..." />

                        <button class="morphsearch-submit" type="submit">Search</button>

                    </form>
                    <div class="morphsearch-content">
                        <div class="dummy-column">
                            <h2>People</h2>
                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"
                                />
                                <h3>Sara Soueidan</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"
                                />
                                <h3>Shaun Dona</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Popular</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/avatar-1.jpg" alt="PagePreloadingEffect" />
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/avatar-1.jpg" alt="DraggableDualViewSlideshow" />
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/avatar-1.jpg" alt="TooltipStylesInspiration" />
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/avatar-1.jpg" alt="NotificationStyles" />
                                <h3>Notification Styles Inspiration</h3>
                            </a>
                        </div>
                    </div>
                    <!-- /morphsearch-content -->
                    <span class="morphsearch-close">
                        <i class="icofont icofont-search-alt-1"></i>
                    </span>
                </div>
                <!-- search end -->
    </div>
    </nav>
    </header>

    <!-- end of nav bar -->




    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print ">
        <section class="sidebar" id="sidebar-scroll">

            <div class="user-panel">
                <br>
                <br>
                <br>
                <div class="f-left image">
                    <img src="../assets/images/avatar-1.jpg" alt="User Image" class="img-circle">
                </div>
                <div class="f-left info">
                    <br>
                    <br>
                    <p>Juliamar Soriano</p>
                    <p class="designation">
                        <span class="text-info">
                            <span style="color: white">More</span>
                        </span>
                        <i class="icofont icofont-caret-down m-l-5" style="color: white"></i>
                    </p>
                </div>
            </div>
            <!-- sidebar profile Menu-->
            <ul class="nav sidebar-menu extra-profile-list">
                <li>
                    <a class="waves-effect waves-dark" href="Admin/profile">
                        <i class="icon-user"></i>
                        <span class="menu-text">View Profile</span>
                        <span class="selected"></span>
                    </a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="Login">
                        <i class="icon-logout"></i>
                        <span class="menu-text">Logout</span>

                        <span class="selected"></span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">
                    <span >
                        <h4 class="text-center" ><b><span style="color:  #222d32" >Hello</span><span class="text text-success">!</span> </b><span class="text text-primary">Admin</span></h4>
                    </span>
                    <hr> 
                </li>
                <li class=" treeview">
                    <a class="waves-effect waves-dark" href="/Admin/Home">
                        <i class="icon-speedometer"></i>
                        <span> Dashboard</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Admin/Projects">
                        <i class="icon-book-open"></i>
                        <span> Project</span>
                    </a>
                </li>


                






                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Admin/Project-Progress">
                        <i class="icon-chart"></i>
                        <span> Project Plan</span>
                    </a>
                </li>

                <li class=" active treeview">
                    <a class="waves-effect waves-dark" href="/Admin/Reports">
                        <i class="icon-note"></i>
                        <span> Reports</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Admin/Accounts">
                        <i class="icon-people"></i>
                        <span> Accounts</span>
                    </a>
                </li>


    </aside>


    




    <div class="content-wrapper" style="margin-top: 120px; width: 1400px" >
        
       
              <div class="col-sm-9 p-0">
                    <div class="main-header">
                        <h3>
                            <i class="icon-note"></i> Reports</h3>
                        <ol class="breadcrumb breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="Admin/Reports"></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">List</a>
                            </li>

                        </ol>

                    </div>

            
   <!-- Hover effect table starts -->
                    <div class="card" style="margin-left: 20px">
                      
                        <div class="card-block ">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover text-center ">
                                        <thead>
                                        <tr class="text text-primary "  >
                                            <th style="width: 400px">Report Name</th>
                                            <th class="text-center text text-success">Project</th>
                                            <th class="text-center text text-danger ">Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="" style="height: 50px">
                                            <td class="text-left text-secondary " ><h4><span class="bg bg-primary">&nbsp;&nbsp;</span> &nbsp; Project Reports</h4></td>
                                            <td></td>
                                            <td> 
                                                <button id="projectReportsBtn" type="button"  class="btn btn-outline-warning waves-effect waves-light pull-center" style="width: 130px" >
                                                    <i class="fa fa-print" ></i>Print</button>
                
                                            </td>
                                            
                                        </tr>
                                            
                                              <tr style="height: 50px">
                                            <td class="text-left text-secondary" ><h4><span class="bg bg-warning">&nbsp;&nbsp;</span> &nbsp; Cost Summary Report</h4></td>
                                                    <td>
                                                        <select class="form-group form-control text text-primary" style="height: 40px"
                                                        onchange="{
                                                            var link = '/Admin/Reports/Cost-Summary/'+this.value;
                                                            //$('#reports').prop('href',link);
                                                            $('#costSummaryReportBtn').printPage({
                                                                url: link,
                                                                attr: 'href',
                                                                message: 'Your document is being created'
                                                            });
                                                        }">
                                                            <option disabled selected>Select project</option>
                                                            @foreach($costSummaryReportProjectChoices as $project)
                                                            <option value="{{$project->intProjectId}}">{{$project->strProjectName}}</option>
                                                            @endforeach
                                                        </select>
                                                  </td>
                                            <td> 
                                                <button id="costSummaryReportBtn" type="button"  class="btn btn-outline-warning waves-effect waves-light pull-center" style="width: 130px" >
                                                    <i class="fa fa-print" ></i>Print</button>
                
                                            </td>
                                            
                                        </tr>
                                            
                                            
                                            
                                             <tr class="" style="height: 50px">
                                            <td class="text-left text-secondary " ><h4><span class="bg bg-success">&nbsp;&nbsp;</span> &nbsp; Project Plan Reports</h4></td>
                                            <td></td>
                                            <td> 
                                                <button type="button"  class="btn btn-outline-warning waves-effect waves-light pull-center" style="width: 130px" >
                                                    <i class="fa fa-print" ></i>Print</button>
                
                                            </td>
                                            
                                        </tr>
                                            
                                            
                                            
                                              <tr style="height: 50px">
                                            <td class="text-left text-secondary" ><h4><span class="bg bg-primary">&nbsp;&nbsp;</span> &nbsp; Project Schedule Report</h4></td>
                                                    <td> <select class="form-group form-control text text-primary" style="height: 40px">
                                                        <option value="" disabled selected>Select project </option>
                                                        <option value=""> Project 1</option>
                                                        <option value=""> Project 2</option>
                                                        </select>
                                                        
                                                  </td>
                                            <td> 
                                                <button type="button"  class="btn btn-outline-warning waves-effect waves-light pull-center" style="width: 130px" >
                                                    <i class="fa fa-print" ></i>Print</button>
                
                                            </td>
                                            
                                        </tr>
                                            
                                            
                                             <tr style="height: 50px">
                                            <td class="text-left text-secondary" ><h4><span class="bg bg-warning">&nbsp;&nbsp;</span> &nbsp; Materials Pricelist Report</h4></td>
                                                    <td>
                                                    <input onchange="{
                                                        //console.log(this.value);
                                                        var link = '/Admin/Reports/Materials-Pricelist/'+this.value;
                                                        //$('#reports').prop('href',link);
                                                        $('#materialsPricelistReportBtn').printPage({
                                                            url: link,
                                                            attr: 'href',
                                                            message: 'Your document is being created'
                                                        });
                                                    }" type="date" required name="date" class="form-control" style="width: 200px">
                                                    </td>
                                            <td> 
                                                <button id='materialsPricelistReportBtn' type="button"  class="btn btn-outline-warning waves-effect waves-light pull-center" style="width: 130px" >
                                                    <i class="fa fa-print" ></i>Print</button>
                
                                            </td>
                                            
                                        </tr>
                                            
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hover effect table ends -->
                  
                  
                  
                  

       
</div>

    </div>
    <!-- content wrapper end-->





    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="../assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="../assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="../assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="../assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="../assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jqurey -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="../assets/plugins/Waves/waves.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="../assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="../assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Rickshaw Chart js -->
    <script src="../assets/plugins/d3/d3.js"></script>
    <script src="../assets/plugins/rickshaw/rickshaw.js"></script>

    <!-- Sparkline charts -->
    <script src="../assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="../assets/js/main.min.js"></script>
    <!-- welcome admin able -->
    <script type="text/javascript" src="../assets/pages/dashboard.js"></script>
    <script type="text/javascript" src="../assets/pages/elements.js"></script>
    <script src="../assets/js/menu.min.js"></script>

    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function () {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });

    </script>

    <!-- printPage -->
    <script src="/js/jQuery-printPage/jquery.printPage.js"></script>

    <script>
        $("#projectReportsBtn").printPage({
            url: "/Admin/Reports/Project",
            attr: "href",
            message: "Your document is being created"
        });
    </script>
    
</body>

</html>
