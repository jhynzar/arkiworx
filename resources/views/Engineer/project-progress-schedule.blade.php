<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ArkiWorx | Cost Management and Progress Monitoring System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
        <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

        <!--tabs-->
        <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> 
     <script src="/js/jquery.min.js"></script>
     <script src="/js/bootstrap.min.js"></script> -->

        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <!-- iconfont -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/icofont/css/icofont.css">

        <!-- simple line icon -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/simple-line-icons/css/simple-line-icons.css">

        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap/css/bootstrap.min.css">

        <!-- Weather css -->
        <link href="/assets/css/svg-weather.css" rel="stylesheet">

        <!-- Echart js -->
        <script src="/assets/plugins/charts/echarts/js/echarts-all.js"></script>

        <!-- Style.css [REPLACED FOR FRAPPE]-->
        <link rel="stylesheet" type="text/css" href="/assets/css/mainForFrappe.css"> 

        <!-- Responsive.css-->
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

        <!--color css-->
        <link rel="stylesheet" type="text/css" href="/assets/css/color/color-1.min.css" id="color" />

        <!-- fullCalendar -->
        <link rel="stylesheet" href="../Admin/bower_components/fullcalendar/dist/fullcalendar.min.css" media="print">
        <link rel="stylesheet" href="../Admin/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">



    <style>
        .sidebar .user-panel {
            background-image: url('/assets/images/ff.jpg') !important;
        }

        .morphsearch-content {
            background-color: #222d32 !important;
            color: white !important;
        }

        .main-header-top>.navbar {
            background: #222d32 !important;
        }


        .sidebar-menu>li.active>a {
            background: #222d32 !important;
        }

        .main-header-top {
            background-color: #222d32 !important;
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

    <!-- FRAPPE START -->
    <link rel="stylesheet" href="/frappe/dist/frappe-gantt.css" />
	<script src="/frappe/dist/frappe-gantt.js"></script>

    <style>
		body {
			font-family: sans-serif;
			
		}
		.container {
			width: 80%;
			margin: 0 auto;
		}
		/* custom class */
		.gantt .bar-milestone .bar {
			fill: tomato;
		}
             
        /* CUSTOM CSS JULIA ADDED */
        .scroll {
            max-height: 500px;
            max-width:  1000px;
            overflow-y: auto;
            overflow-x: scroll;
        }


	</style>
    <!-- FRAPPE END -->

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
                                <a href="/" class="btn btn-primary"> LOG OUT
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
                <img class="img-fluid logo" src="/assets/images/GG.jpg" alt="Theme-logo">
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
                        <a href="/Engineer/Accounts-Settings">
                            <span>
                                <img class="img-circle " src="/assets/images/avatar-1.jpg" style="width:40px;" alt="User Image">
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
                                <img src="/assets/images/avatar-1.jpg" alt="PagePreloadingEffect" />
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="/assets/images/avatar-1.jpg" alt="DraggableDualViewSlideshow" />
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="/assets/images/avatar-1.jpg" alt="TooltipStylesInspiration" />
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="/assets/images/avatar-1.jpg" alt="NotificationStyles" />
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
                    <img src="/assets/images/avatar-1.jpg" alt="User Image" class="img-circle">
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
                        <h6 class="text-center" ><b><span style="color:  #222d32" ><b>Hello</b></span><span class="text text-success">!</span> </b><span class="text text-primary">Engineer</span></h6>
                    </span>
                    <hr> 
                </li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Home">
                        <i class="icon-speedometer"></i>
                        <span> Dashboard</span>
                    </a>
                </li>
                
                
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Materials-Pricelist">
                        <i class="icon-notebook"></i>
                        <span> Materials PriceList</span>
                    </a>
                </li>


                
                 <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Cost-Estimation">
                        <i class="icon-calculator"></i>
                        <span> Estimation</span>
                    </a>
                </li>

               <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Engineer-Projects">
                        <i class="icon-briefcase"></i>
                        <span> Projects</span>
                    </a>
                </li>
                



                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Materials-Pricelist">
                        <i class="icon-notebook"></i>
                        <span> Materials PriceList</span>
                    </a>
                </li>







                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Project-Progress">
                        <i class="icon-chart"></i>
                        <span> Project Plan</span>
                    </a>
                </li>

                <li class=" treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Calendar">
                        <i class="icon-calendar"></i>
                        <span> Calendar</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Inbox">
                        <i class="icon-envelope-letter"></i>
                        <span> Inbox</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Accounts-Settings">
                        <i class="icon-people"></i>
                        <span> Account Setting</span>
                    </a>
                </li>



    </aside>
    <!-- end of sidebar-->
    


    <!-- end of sidebar-->
    <div class="content-wrapper" style="background-color: white; ">
      

    <div class="" style="margin-top: 45px; margin-left: -80px">
        <!-- FRAPPE START -->
        <div class="container " style="background-color: white; ">
           
            <div class="container form-group form-inline" style="background-color: white; margin-top: -80px; margin-left: 180px"> <br><br> <br>
             
               
                    <div style="margin-left: -200px; margin-top: -3px">
                        <h4>
                            <i class="icon-graph"></i> Gantt </h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="/Engineer/Project-Progress"></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/Engineer/Project-Progress" data-toggle="tooltip" data-placement="right" title="back" >Projects List</a>
                            </li>

                        </ol>

                    </div>





                 

               
            <button type="button" class="form-control btn btn-outline-danger" name="" id="" onclick="gantt_chart.change_view_mode('Quarter Day')">Quarter Day</button> &nbsp;
            <button type="button" class="form-control btn btn-outline-info" name="" id="" onclick="gantt_chart.change_view_mode('Half Day')" >Half Day</button> &nbsp;
            <button type="button" class="form-control btn btn-outline-warning" name="" id="" onclick="gantt_chart.change_view_mode('Day')" >Day</button> &nbsp;
            <button type="button" class="form-control btn btn-outline-success" name="" id="" onclick="gantt_chart.change_view_mode('Week')" >Week</button> &nbsp;
            <button type="button" class="form-control btn btn-outline-primary" name="" id="" onclick="gantt_chart.change_view_mode('Month')" >Month</button> &nbsp;
        </div>
            <div class="gantt-target scroll" style="width: 1100px; height 900px !important"></div>
        </div>
        <!-- FRAPPE END -->


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
    <script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="/assets/plugins/Waves/waves.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="/assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="/assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Rickshaw Chart js -->
    <script src="/assets/plugins/d3/d3.js"></script>
    <script src="/assets/plugins/rickshaw/rickshaw.js"></script>

    <!-- Sparkline charts -->
    <script src="/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="/assets/js/main.min.js"></script>
    <!-- welcome admin able -->
    <script type="text/javascript" src="/assets/pages/dashboard.js"></script>
    <script type="text/javascript" src="/assets/pages/elements.js"></script>
    <script src="/assets/js/menu.min.js"></script>

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
    <!-- FRAPPE START -->
    <script>
		var tasks = [
			{
                
				start: '2018-10-01',
				end: '2018-10-03',
				name: 'Building Permit',
				id: "Task 0",
				progress: 100
			},
			{
				start: '2018-10-03',
				end: '2018-10-06',
				name: 'Planning',
				id: "Task 1",
				progress: 100,
				dependencies: 'Task 0'
			},
			{
				start: '2018-10-04',
				end: '2018-10-08',
				name: 'Excavation',
				id: "Task 2",
				progress: 80,
				dependencies: 'Task 1'
			},
			{
				start: '2018-10-08',
				end: '2018-10-09',
				name: 'Back Fill',
				id: "Task 3",
				progress: 0,
				dependencies: 'Task 2'
			},
			{
				start: '2018-10-10',
				end: '2018-10-11',
				name: 'Lastillas',
				id: "Task 4",
				progress: 0,
				dependencies: 'Task 3'
			},
			{
				start: '2018-10-12',
				end: '2018-10-15',
				name: 'Soil Posoining',
				id: "Task 5",
				progress: 0,
				dependencies: 'Task 4'
			},
            
            {
				start: '2018-10-15',
				end: '2019-01-24',
				name: 'General Construction',
				id: "Task 6",
				progress: 0,
				dependencies: 'Task 5'
			},
            
            {
				start: '2018-10-15',
				end: '2018-10-22',
				name: 'Column',
				id: "Task 7",
				progress: 0,
				dependencies: 'Task 6'
			},
            {
				start: '2018-10-15',
				end: '2018-10-19',
				name: 'Footing',
				id: "Task 8",
				progress: 0,
				dependencies: 'Task 6'
			},
            {
				start: '2018-10-19',
				end: '2018-10-29',
				name: 'Slab',
				id: "Task 9",
				progress: 0,
				dependencies: 'Task 8'
			},
            
            {
				start: '2018-10-29',
				end: '2018-11-04',
				name: 'Beams',
				id: "Task 10",
				progress: 0,
				dependencies: 'Task 9'
			},
            
             {
				start: '2018-11-04',
				end: '2018-11-08',
				name: 'Wall Footing',
				id: "Task 11",
				progress: 0,
				dependencies: 'Task 10'
			},
            
             {
				start: '2018-11-04',
				end: '2018-11-11',
				name: 'Floor Beams',
				id: "Task 12",
				progress: 0,
				dependencies: 'Task 10'
			},
            
            {
				start: '2018-11-11',
				end: '2018-11-29',
				name: 'Masonry',
				id: "Task 13",
				progress: 0,
				dependencies: 'Task 12'
			},
            
            {
				start: '2018-11-29',
				end: '2018-12-08',
				name: 'Roofing',
				id: "Task 14",
				progress: 0,
				dependencies: 'Task 13'
			},
            
            {
				start: '2018-12-08',
				end: '2018-12-15',
				name: 'Windows',
				id: "Task 15",
				progress: 0,
				dependencies: 'Task 14'
			},
            
            {
				start: '2018-12-08',
				end: '2018-12-18',
				name: 'Doors',
				id: "Task 16",
				progress: 0,
				dependencies: 'Task 14'
			},
            
             {
				start: '2018-12-08',
				end: '2018-12-20',
				name: 'Ceiling',
				id: "Task 17",
				progress: 0,
				dependencies: 'Task 14'
			},
            
            {
				start: '2018-12-20',
				end: '2018-12-25',
				name: 'Paint Ceiling',
				id: "Task 18",
				progress: 0,
				dependencies: 'Task 17'
			},
            
            {
				start: '2018-12-20',
				end: '2018-12-26',
				name: 'Paint Walls',
				id: "Task 19",
				progress: 0,
				dependencies: 'Task 17'
			},
            
            {
				start: '2018-12-26',
				end: '2019-01-02',
				name: 'Staircase',
				id: "Task 20",
				progress: 0,
				dependencies: 'Task 19'
			},
            
            {
				start: '2019-01-02',
				end: '2019-01-10',
				name: 'Plumbing Works',
				id: "Task 21",
				progress: 0,
				dependencies: 'Task 20'
			},
            
            {
				start: '2019-01-10',
				end: '2019-01-15',
				name: 'Electrical Works',
				id: "Task 22",
				progress: 0,
				dependencies: 'Task 21'
			},
            
            {
				start: '2019-01-15',
				end: '2019-01-24',
				name: 'Tiles',
				id: "Task 23",
				progress: 0,
				dependencies: 'Task 22'
			},
            
            {
				start: '2019-01-24',
				end: '2019-01-26',
				name: 'Inspection',
				id: "Task 24",
				progress: 0,
				dependencies: 'Task 23'
			},
            
             {
				start: '2019-01-26',
				end: '2019-01-27',
				name: 'Turn Over',
				id: "Task 25",
				progress: 0,
				dependencies: 'Task 24'
			},
            
            
            
            
            
            
            
            
            
		]
        
        
        
     
        
       // var gantt = new Gantt("#gantt", tasks, {
   // header_height: 50,
   // column_width: 30,
   // step: 24,
   // view_modes: ['Quarter Day', 'Half Day', 'Day', 'Week', 'Month'],
   // bar_height: 20,
   // bar_corner_radius: 3,
   // arrow_curve: 5,
   // padding: 18,
   // view_mode: 'Day',   
   // date_format: 'YYYY-MM-DD',
//custom_popup_html: null
//});
    
        
        
        
        
        
        
        
        
            
        
        
        
        
        
        
        
        
        
		var gantt_chart = new Gantt(".gantt-target", tasks, {
			on_click: function (task) {
				console.log(task);
			},
			on_date_change: function(task, start, end) {
				console.log(task, start, end);
			},
			on_progress_change: function(task, progress) {
				console.log(task, progress);
			},
			on_view_change: function(mode) {
				console.log(mode);
			},
            view_mode:'Day'
		});
		console.log(gantt_chart);
	</script>
    <!-- FRAPPE END -->
</body>

</html>
