<!DOCTYPE html>
<html>

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

       .card-header {
            background-color: #4CAF50 !important;
             color: white; 
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

            /* -- BAR COLORS -- */
            /* -- color of main bar -- */
            /* normal */
            .gantt .bar-normal .bar {
                fill: grey;
            }

            /* overdue */
            .gantt .bar-overdue .bar-overdue {
                fill: #df5c3b;
            }
            /* delay */
            .gantt .bar-delay .bar-delay {
                fill: blue;
            }

            /* -- color of progress bar -- */
            /* work in progress */
            .gantt .progress-wip .bar-progress {
                fill: skyblue;
            }

            /* completed */
            .gantt .progress-completed .bar-progress {
                fill: lawngreen;
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
                <img class="img-fluid logo" src="/assets/images/NYETA.png" alt="Theme-logo">
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


                        <a href="#" data-toggle="modal" data-target="#logoutModal">
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
                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                <h3>Sara Soueidan</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
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
                    <a class="waves-effect waves-dark" href="profile">
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
                    <span>
                        <h6 class="text-center"><b><span style="color:  #222d32">Hello</span><span class="text text-success">!</span> </b><span class="text text-primary">Admin</span></h6>
                    </span>
                    <hr>
                </li>
                <li class="treeview">
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










                <li class=" active treeview">
                    <a class="waves-effect waves-dark" href="/Admin/Project-Progress">
                        <i class="icon-chart"></i>
                        <span> Project Plan</span>
                    </a>
                </li>

                <li class=" treeview">
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
    <!-- end of sidebar-->



    <!-- end of sidebar-->
    <div class="content-wrapper" style="background-color: white; ">

<div class="container form-group form-inline" style="background-color: white; margin-top: -70px; margin-left: 250px"> <br><br> <br>


    <div style="margin-left: -200px; margin-top: -3px">
        <h4>
            <i class="icon-graph"></i> Gantt</h4>
        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
            <li class="breadcrumb-item">
                <a href="/Engineer/Project-Progress"></a>
            </li>
            <li class="breadcrumb-item">
                <a href="/Engineer/Project-Progress" data-toggle="tooltip" data-placement="right" title="back">Projects List</a>

            </li>

        </ol>

        <div class="form-group form-inline text text-primary" style="position:absolute; margin-left: 250px; margin-top: -70px "> <label> <span class="text text-primary"><b>Project:</b></span> </label> <input class="form-control" type="text" value="{{$projectDetails->strProjectName}}" disabled>

        </div>
        <br>

        <div style="margin-left: 200px; margin-top: -20px">
            <label class="text text-primary"> <span class="label label-primary form-control"> &nbsp;</span> <b>- Delayed</b></label> &nbsp;&nbsp;
            <label class="text text-danger"> <span class="label label-danger form-control"> &nbsp;</span> <b>- Overdue</b></label> &nbsp;&nbsp;
            <label class="text text-info"> <span class="label label-info form-control"> &nbsp;</span> <b>- In progress</b></label> &nbsp;&nbsp;
            <label class="text text-success"> <span class="label label-success form-control"> &nbsp;</span> <b>- Complete</b></label> &nbsp;&nbsp;
        </div>
    </div>





    <br>



    <button type="button" class="form-control btn btn-outline-danger" name="" id="" onclick="gantt_chart.change_view_mode('Quarter Day')">Quarter Day</button> &nbsp;
    <button type="button" class="form-control btn btn-outline-info" name="" id="" onclick="gantt_chart.change_view_mode('Half Day')">Half Day</button> &nbsp;
    <button type="button" class="form-control btn btn-outline-warning" name="" id="" onclick="gantt_chart.change_view_mode('Day')">Day</button> &nbsp;
    <button type="button" class="form-control btn btn-outline-success" name="" id="" onclick="gantt_chart.change_view_mode('Week')">Week</button> &nbsp;
    <button type="button" class="form-control btn btn-outline-primary" name="" id="" onclick="gantt_chart.change_view_mode('Month')">Month</button> &nbsp;
</div>


<div class="" style="margin-top: 60px; margin-left: -80px">

    <!-- start col-lg-9 -->
    <div class="pull-center align-center text-center" style="margin-top: -40px; margin-left: 110px">
        <div class="col-xl-10 col-lg-12">
            <!-- Nav tabs -->
            <div class="tab-header">
                <ul class="nav nav-tabs md-tabs tab-timeline" style="width: 1010px"  role="tablist">
                    <li class="nav-item">
                        <a id="estimatedSchedulesTabButton" class="nav-link active" data-toggle="tab" href="#estimated" role="tab">Estimated Schedule </a>
                        <div class="slide" style="color: #009900 !important"></div>
                    </li>
                    <li class="nav-item">
                        <a id="actualSchedulesTabButton" class="nav-link" data-toggle="tab" href="#actual" role="tab">Actual Schedule</a>
                        <div class="slide"></div>
                    </li>


                </ul>
            </div>
            <!-- end of tab-header -->

            <div class="tab-content">
                <div class="tab-pane active" id="estimated" role="tabpanel">







                </div>
                <!-- end of tab-pane -->
                <!-- end of about us tab-pane -->

                <!-- start tab-pane of project tab -->
                <div class="tab-pane" id="actual" role="tabpanel">

                    <!-- end of card-main -->
                </div>
                <!-- end of project pane -->


            </div>
            <!-- end of main tab content -->
        </div>
    </div>
    <!-- FRAPPE START -->
    <div class="container " style="background-color: white; ">



        <br>
        <div class="container-fluid gantt-target my-5" style="margin-left: -30px"></div>
    </div>
    <!-- FRAPPE END -->






    <!-- Task Details Modal -->
    @foreach ($allProjectSchedulesWithPhases as $projectSchedule)
    <div class="modal fade" id="scheduleDetailsModal{{$projectSchedule->scheduleDetails->intScheduleId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="/Engineer/Project-Progress/{{$projectSchedule->scheduleDetails->intProjectId}}/Schedule/Save">
                    {{csrf_field()}}

                    <!-- input type hidden -->
                    <input type="hidden" name="scheduleId" value="{{$projectSchedule->scheduleDetails->intScheduleId}}">

                    <div class="modal-header" style="background-color: #4CAF50 !important">
                        <h5 class="modal-title" id="exampleModalLabel">{{$projectSchedule->scheduleDetails->strWorkSubCategoryDesc}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body scroll" style="height: 450px !important">
                        <!-- input type hidden -->
                        <input type="hidden" name="phasesCount" value="{{count($projectSchedule->schedulePhases)}}">
                        @foreach ($projectSchedule->schedulePhases as $phaseKey=>$phase)

                        <!-- input type hidden -->
                        <input type="hidden" name="schedulePhase{{$phaseKey}}id" value="{{$phase->intSchedulePhasesId}}">

                        <br>
                        <div class="form-group form-inline">

                            @if ($phaseKey % 2 != 0)
                            <label class="label label-primary"> Phase {{$phaseKey+1}}</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            @else
                            <label class="label label-success"> Phase {{$phaseKey+1}}</label> &nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                            <input type="text" name="" class="form-control" style="width:160px" value="{{$phase->strName}}" readonly>
                            &nbsp;&nbsp;&nbsp; <label class="text text-primary"> Progress</label>&nbsp;&nbsp;
                            <input type="number" name="schedulePhase{{$phaseKey}}progress" value="{{$phase->intProgress}}" min="{{$phase->intProgress}}" max="100" class="form-control" style="width:165px"> <br> <br>


                            <label for="sex">Estimated Dates <i class="icon-calendar text text-primary"></i>&nbsp;:</label>
                            <input type="date" name="schedulePhase{{$phaseKey}}estimatedStartDate" value="{{$phase->dtmEstimatedStart}}" class="form-control" style="width:160px" readonly>
                            <label for="sex">To</label>
                            <input type="date" name="schedulePhase{{$phaseKey}}estimatedEndDate" value="{{$phase->dtmEstimatedEnd}}" class="form-control" style="width:160px" readonly>

                            <label for="sex">Actual Dates <i class="icon-calendar text text-primary"></i>&nbsp;:</label>
                            <input type="date" name="schedulePhase{{$phaseKey}}actualStartDate" value="{{$phase->dtmActualStart}}" class="form-control" style="width:160px" readonly>
                            <label for="sex">To</label>
                            <input type="date" name="schedulePhase{{$phaseKey}}actualEndDate" value="{{$phase->dtmActualEnd}}" class="form-control" style="width:160px" readonly>



                        </div>
                        <hr>
                        @endforeach
                    </div>
                    <div class="modal-footer" style="background-color: #E3FAD4">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach




</div>
</div>
    <!-- content wrapper end-->




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

    <!-- pie chart.js -->
    <script type="text/javascript" src="/assets/plugins/bower-jquery-easyPieChart/dist/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="/assets/pages/counter.js"></script>

    <!-- Date picker.js -->
    <script type="text/javascript" src="/assets/plugins/moment/moment.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

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
    <script type="text/javascript" src="/assets/pages/profile.js"></script>
    <script type="text/javascript" src="/assets/pages/elements.js"></script>
    <script type="text/javascript" src="/assets/js/menu.min.js"></script>
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

    <script>
        function dateDifference(date1, date2) {
            var timeDiff = Math.abs(date2.getTime() - date1.getTime());
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
            return diffDays;
        }

        function addDate(date, daysToAdd) {
            var returnDate = date;
            returnDate.setDate(returnDate.getDate() + daysToAdd);
            return returnDate;
        }

        function formatDate(date) {
            var month = '' + (date.getMonth() + 1);
            var day = '' + date.getDate();
            var year = date.getFullYear();

            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;

            return [year, month, day].join('-');
        }

    </script>
    <!-- FRAPPE START -->
    <script>
        var allProjectSchedules = {!!json_encode($allProjectSchedulesWithPhases) !!};
        

        //==============================ACTUAL TASK SCHEDULES END
        var actualTaskSchedules = [];

        for (var x = 0; x < allProjectSchedules.length; x++) {
            //--Logic for computing progress of category
            var projectProgress = 0;

            for (i = 0; i < allProjectSchedules[x].schedulePhases.length; i++) {
                projectProgress += allProjectSchedules[x].schedulePhases[i].intProgress;
            }
            projectProgress = projectProgress / allProjectSchedules[x].schedulePhases.length;

            //--Logic for adding classes
            projectCustomClasses = 'bar-normal bar-overdue bar-delay ';
            //WIP OR COMPLETED
            projectCustomClasses += (projectProgress == 100 ? 'progress-completed ' : 'progress-wip ');

            //--For displaying
            //If task is dependent to other tasks or not

            //========IF INDEPENDENT
            if (allProjectSchedules[x].scheduleDetails['intDependencyScheduleId'] == null) {

                //logic
                //estimated start
                var estimatedStart = allProjectSchedules[x].scheduleDetails['dtmEstimatedStart'];
                //estimated end
                var estimatedEnd = allProjectSchedules[x].scheduleDetails['dtmEstimatedEnd'];

                //the actual start
                var actualStart = allProjectSchedules[x].scheduleDetails['dtmActualStart'];
                //the actual end
                var actualEnd = allProjectSchedules[x].scheduleDetails['dtmActualEnd'];

                var start;
                var end;
                var delay;
                var overdue_start;
                var overdue_end;

                /* ===[GETTING DETAILS]=== */

                /* ===[GETTING DETAILS] END=== */


                /* ===[DELAY]=== */
                delay = new Date(estimatedStart); //fixed, don't change
                /* ===[DELAY] END=== */

                /* ===[START]=== */

                //if there is no set actualStart where should I be?
                if (actualStart == null) {
                    //IM FREE. actual Start is today!
                    start = new Date();
                    //today is actual start
                } else {
                    //if there is, set it.
                    start = new Date(actualStart);
                }

                /* ===[START] END=== */


                /* ===[END]=== */

                supposedEnd = addDate(new Date(start), dateDifference(new Date(estimatedEnd), new Date(estimatedStart)));

                //if actualEnd is alreadySet and is earlier than my supposedEnd, cut it
                if (
                    (actualEnd != null) &&
                    ((new Date(actualEnd)).getTime() < supposedEnd.getTime())
                ) {
                    end = new Date(actualEnd);
                } else {
                    end = supposedEnd;
                }

                /* ===[END] END=== */

                /* ===[OVERDUE_start]=== */
                overdue_start = new Date(estimatedEnd);
                if (overdue_start.getTime() > end.getTime()) {
                    overdue_start = new Date(end);
                }
                /* ===[OVERDUE_start] END=== */


                /* ===[OVERDUE_end]=== */

                //if overdue is null, where should I be?
                if (actualEnd == null) {
                    //if today is less than end of task, overdue will be at the end
                    if ((new Date()).getTime() < end.getTime()) {
                        overdue_end = new Date(end);
                    } else {
                        //else overdue is today
                        overdue_end = new Date();
                    }
                } else {
                    //else if there is an actual end, set it
                    overdue_end = new Date(actualEnd);
                }

                /* ===[OVERDUE_end] END=== */




                //overdue = actualEnd == null ? new Date() : new Date(actualEnd);

                //format date
                start = formatDate(start);
                end = formatDate(end);
                delay = formatDate(delay);
                overdue_start = formatDate(overdue_start);
                overdue_end = formatDate(overdue_end);

                task = {
                    start: start,
                    end: end,
                    name: allProjectSchedules[x].scheduleDetails['strWorkSubCategoryDesc'],
                    id: allProjectSchedules[x].scheduleDetails['intScheduleId'],
                    custom_class: projectCustomClasses,
                    progress: projectProgress,
                    delay: delay,
                    overdue_start: overdue_start,
                    overdue_end: overdue_end, //code: if first is null/undefined, then assign second value
                };
            } //========IF DEPENDENT
            else {
                //logic
                //estimated start
                var estimatedStart = allProjectSchedules[x].scheduleDetails['dtmEstimatedStart'];
                //estimated end
                var estimatedEnd = allProjectSchedules[x].scheduleDetails['dtmEstimatedEnd'];

                //the actual start
                var actualStart = allProjectSchedules[x].scheduleDetails['dtmActualStart'];
                //the actual end
                var actualEnd = allProjectSchedules[x].scheduleDetails['dtmActualEnd'];

                var start;
                var end;
                var delay;
                var overdue_start;
                var overdue_end;

                /* ===[GETTING DETAILS]=== */

                //is before me already done?
                var dependencyId = allProjectSchedules[x].scheduleDetails['intDependencyScheduleId'];

                //get parentSchedule
                var parentSchedule;
                for (i = 0; i < allProjectSchedules.length; i++) {
                    if (allProjectSchedules[i].scheduleDetails['intScheduleId'] == dependencyId) {
                        parentSchedule = allProjectSchedules[i];
                        break;
                    }
                }

                //get parentTask
                var parentTask;
                for (i = 0; i < actualTaskSchedules.length; i++) {
                    if (actualTaskSchedules[i].id == dependencyId) {
                        parentTask = actualTaskSchedules[i];
                        break;
                    }
                }

                /* ===[GETTING DETAILS] END=== */


                /* ===[DELAY]=== */
                delay = new Date(estimatedStart); //fixed, don't change
                /* ===[DELAY] END=== */

                /* ===[START]=== */

                //if there is no set actualStart where should I be?
                if (actualStart == null) {

                    //if not yet done, I'm locked to following it.
                    if (parentSchedule.scheduleDetails['dtmActualEnd'] == null) {
                        //My temporary ActualStartDate is my dependency Overdue
                        //set the start to the overdue of the parent
                        start = addDate(new Date(parentTask.overdue_end), dateDifference(new Date(parentSchedule.scheduleDetails['dtmEstimatedEnd']), new Date(estimatedStart)));
                    } else {
                        //if already done, IM FREE. actual Start is today!
                        start = new Date();
                    }
                } else {
                    //if there is, set it.
                    start = new Date(actualStart);
                }

                /* ===[START] END=== */


                /* ===[END]=== */

                supposedEnd = addDate(new Date(start), dateDifference(new Date(estimatedEnd), new Date(estimatedStart)));

                //if actualEnd is alreadySet and is earlier than my supposedEnd, cut it
                if (
                    (actualEnd != null) &&
                    ((new Date(actualEnd)).getTime() < supposedEnd.getTime())
                ) {
                    end = new Date(actualEnd);
                } else {
                    end = supposedEnd;
                }

                /* ===[END] END=== */

                /* ===[OVERDUE_start]=== */
                overdue_start = new Date(estimatedEnd);
                if (overdue_start.getTime() > end.getTime()) {
                    overdue_start = new Date(end);
                }
                /* ===[OVERDUE_start] END=== */

                /* ===[OVERDUE_end]=== */

                //if overdue is null, where should I be?
                if (actualEnd == null) {
                    //if today is less than end of task, overdue will be at the end
                    if ((new Date()).getTime() < end.getTime()) {
                        overdue_end = new Date(end);
                    } else {
                        //else overdue is today
                        overdue_end = new Date();
                    }
                } else {
                    //else if there is an actual end, set it
                    overdue_end = new Date(actualEnd);
                }

                /* ===[OVERDUE_end] END=== */




                //overdue = actualEnd == null ? new Date() : new Date(actualEnd);

                //format date
                start = formatDate(start);
                end = formatDate(end);
                delay = formatDate(delay);
                overdue_start = formatDate(overdue_start);
                overdue_end = formatDate(overdue_end);

                task = {
                    start: start, //code: if first is null/undefined, then assign second value ; For Delay
                    end: end,
                    name: allProjectSchedules[x].scheduleDetails['strWorkSubCategoryDesc'],
                    id: allProjectSchedules[x].scheduleDetails['intScheduleId'],
                    custom_class: projectCustomClasses,
                    progress: projectProgress,
                    delay: delay,
                    overdue_start: overdue_start,
                    overdue_end: overdue_end, //code: if first is null/undefined, then assign second value
                    dependencies: [allProjectSchedules[x].scheduleDetails['intDependencyScheduleId']]
                };
            }

            actualTaskSchedules.push(task);

        }

        //==============================ACTUAL TASK SCHEDULES END

        

        //==============================ESTIMATED TASK SCHEDULES
        var estimatedTaskSchedules = [];

        for(var x = 0; x < allProjectSchedules.length; x++){
            var projectProgress = 0;

            //--Logic for adding classes
            projectCustomClasses = 'bar-normal bar-overdue bar-delay ';

            //--For displaying
            //If task is dependent to other tasks or not

            //========IF INDEPENDENT
            if (allProjectSchedules[x].scheduleDetails['intDependencyScheduleId'] == null) {

                //logic
                //estimated start
                var estimatedStart = allProjectSchedules[x].scheduleDetails['dtmEstimatedStart'];
                //estimated end
                var estimatedEnd = allProjectSchedules[x].scheduleDetails['dtmEstimatedEnd'];

                //the actual start
                var actualStart = allProjectSchedules[x].scheduleDetails['dtmActualStart'];
                //the actual end
                var actualEnd = allProjectSchedules[x].scheduleDetails['dtmActualEnd'];

                var start;
                var end;
                var delay;
                var overdue_start;
                var overdue_end;

                //setting up
                start = new Date(estimatedStart);
                end = new Date(estimatedEnd);
                delay = new Date(estimatedStart);
                overdue_start = new Date(estimatedEnd);
                overdue_end = new Date(estimatedEnd);

                //format date
                start = formatDate(start);
                end = formatDate(end);
                delay = formatDate(delay);
                overdue_start = formatDate(overdue_start);
                overdue_end = formatDate(overdue_end);

                task = {
                    start: start,
                    end: end,
                    name: allProjectSchedules[x].scheduleDetails['strWorkSubCategoryDesc'],
                    id: allProjectSchedules[x].scheduleDetails['intScheduleId'],
                    custom_class: projectCustomClasses,
                    progress: projectProgress,
                    delay: delay,
                    overdue_start: overdue_start,
                    overdue_end: overdue_end, //code: if first is null/undefined, then assign second value
                };
            } //========IF DEPENDENT
            else {
                //logic
                //estimated start
                var estimatedStart = allProjectSchedules[x].scheduleDetails['dtmEstimatedStart'];
                //estimated end
                var estimatedEnd = allProjectSchedules[x].scheduleDetails['dtmEstimatedEnd'];

                //the actual start
                var actualStart = allProjectSchedules[x].scheduleDetails['dtmActualStart'];
                //the actual end
                var actualEnd = allProjectSchedules[x].scheduleDetails['dtmActualEnd'];

                var start;
                var end;
                var delay;
                var overdue_start;
                var overdue_end;

                //setting up
                start = new Date(estimatedStart);
                end = new Date(estimatedEnd);
                delay = new Date(estimatedStart);
                overdue_start = new Date(estimatedEnd);
                overdue_end = new Date(estimatedEnd);

                //format date
                start = formatDate(start);
                end = formatDate(end);
                delay = formatDate(delay);
                overdue_start = formatDate(overdue_start);
                overdue_end = formatDate(overdue_end);

                task = {
                    start: start, //code: if first is null/undefined, then assign second value ; For Delay
                    end: end,
                    name: allProjectSchedules[x].scheduleDetails['strWorkSubCategoryDesc'],
                    id: allProjectSchedules[x].scheduleDetails['intScheduleId'],
                    custom_class: projectCustomClasses,
                    progress: projectProgress,
                    delay: delay,
                    overdue_start: overdue_start,
                    overdue_end: overdue_end, //code: if first is null/undefined, then assign second value
                    dependencies: [allProjectSchedules[x].scheduleDetails['intDependencyScheduleId']]
                };
            }

            estimatedTaskSchedules.push(task);
        }

        //==============================ESTIMATED TASK SCHEDULES END


        //gantt chart declaration
        var gantt_chart;

        //assigning onclicks on tabs
        $('#estimatedSchedulesTabButton').on('click',function(){


        console.log('click');
            $('.gantt-target').html(''); //clear the existing gantt first


            gantt_chart = new Gantt(".gantt-target", estimatedTaskSchedules, {
                on_click: function (task) {
                    console.log(task.id);
                },
                on_date_change: function (task, start, end) {
                    console.log(task, start, end);
                },
                on_progress_change: function (task, progress) {
                    console.log(task, progress);
                },
                on_view_change: function (mode) {
                    console.log(mode);
                },
                view_mode: 'Day',
                /* custom options */
                bar_progress_height_percentage: 40,
            });
            console.log(gantt_chart);
        });

        $('#actualSchedulesTabButton').on('click',function(){


            $('.gantt-target').html(''); //clear the existing gantt first


            gantt_chart = new Gantt(".gantt-target", actualTaskSchedules, {
                on_click: function (task) {
                    console.log(task.id);
                    //$("#scheduleDetailsModal" + task.id).modal("show");
                },
                on_date_change: function (task, start, end) {
                    console.log(task, start, end);
                },
                on_progress_change: function (task, progress) {
                    console.log(task, progress);
                },
                on_view_change: function (mode) {
                    console.log(mode);
                },
                view_mode: 'Day',
                /* custom options */
                bar_progress_height_percentage: 40,
            });
            console.log(gantt_chart);
        });

        //INITIALIZE ESTIMATED SCHEDULES FIRST
        $('#estimatedSchedulesTabButton').trigger('click');


        

    </script>
    <!-- FRAPPE END -->
</body>

</html>
