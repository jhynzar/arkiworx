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

    <style>
        .sidebar .user-panel {
            background-image: url('assets/images/ff.jpg') !important;
        }

        .morphsearch-content {
            background-color: #222d32 !important;


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
                        <p class="text-center text text-mutedf" style="font-size: 15px"> Are you sure you want to log-out?</p>
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

            <a href="#" class="nav-brand">
                <img class="img-fluid logo" src="../assets/images/cat.jpg" alt="Theme-logo">
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
                        <a href="accountsettings">
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


                        <a href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="icon-logout"></i> LOG
                            <b>OUT</b>
                        </a>

                    </li>


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
                    <span style="color: #939393">
                        <i>Navigation</i>
                    </span>
                </li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="#">
                        <i class="icon-speedometer"></i>
                        <span> Dashboard</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="Project">
                        <i class="icon-book-open"></i>
                        <span> Project</span>
                    </a>
                </li>


                <li class="treeview">
                    <a class="waves-effect waves-dark" href="Cost-Summary">
                        <i class="icon-briefcase"></i>
                        <span> Cost Summary</span>
                    </a>
                </li>







                <li class="treeview">
                    <a class="waves-effect waves-dark" href="Project-Progress">
                        <i class="icon-chart"></i>
                        <span> Project Plan</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="Calendar">
                        <i class="icon-calendar"></i>
                        <span> Calendar</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="Inbox">
                        <i class="icon-envelope-letter"></i>
                        <span> Inbox</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="Accounts">
                        <i class="icon-people"></i>
                        <span> Accounts</span>
                    </a>
                </li>


    </aside>


    <!--tabs-->

    <div class="container" style="position: absolute; margin-top: 43px; margin-left: 220px">

        <ul class="nav nav-tabs" style="background-color: #f2f2f2">



            <li class="active">
                <a href="#">Dashboard</a>
            </li>

            <li>
                <a href="Project">Project</a>
            </li>
            <li>
                <a href="Cost-Summary">Cost</a>
            </li>
            <li>
                <a href="Project-Progress">Project Plan</a>
            </li>
            <li>
                <a href="Calendar">Calendar</a>
            </li>
            <li>
                <a href="Inbox">Inbox</a>
            </li>
            <li>
                <a href="Accounts">Accounts</a>
            </li>

        </ul>
    </div>





    <div class="content-wrapper" style="margin-top: 90px">


        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>
                        <i class="icon icon-speedometer"></i> Dashboard</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row m-b-30 dashboard-header">
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                            <i class="icon-bubbles"></i>
                            <div class="f-right">
                                <h2 class="counter">4500</h2>
                                <span>Total Sales</span>
                            </div>
                        </div>
                        <div class="bg-dark-primary">
                            <p class="week-sales">Total SALES</p>
                            <p class="total-sales">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-success dashboard-success">
                        <div class="sales-success">
                            <i class="icon-speedometer"></i>
                            <div class="f-right">
                                <h2 class="counter">3521</h2>
                                <span>Last Week's Sale</span>
                            </div>
                        </div>
                        <div class="bg-dark-success">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales ">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <i class="icon-basket-loaded"></i>
                            <div class="f-right">
                                <h2 class="counter">1085</h2>
                                <span>New Orders</span>
                            </div>
                        </div>
                        <div class="bg-dark-warning">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales">84</p>
                        </div>
                    </div>
                </div> -->





                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Projects Completed</span>
                        <h2 class="dashboard-total-products">
                            <span class="counter">238</span>
                        </h2>
                        <span class="label label-success">Completed</span>
                        <div class="side-box bg-success">
                            <i class="icon-chart"></i>
                        </div>
                    </div>
                </div>






                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Profit</span>
                        <h2 class="dashboard-total-products">₱
                            <span class="counter">1,864,284.0</span>
                        </h2>
                        <i class="icon-arrow-up-circle"></i> This year
                        <div class="side-box bg-danger">
                            <i class="icon-briefcase"></i>
                        </div>
                    </div>
                </div>











                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>On-going Projects</span>
                        <h2 class="dashboard-total-products counter">3</h2>
                        <span class="label label-primary">Updates</span>
                        <div class="side-box bg-primary">
                            <i class="icon-organization"></i>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Materials Price Update</span>
                        <h2 class="dashboard-total-products counter">38</h2>
                        <span class="label label-warning">Updates</span>This week
                        <div class="side-box bg-warning">
                            <i class="icon-note"></i>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 4-blocks row end -->
            <!-- 1-3-block row start -->

            <label class="text text-muted" style="position: absolute; margin-top: -30px; margin-left: 40px">Quick View</label>
            <!-- 1-3-block row end -->

            <!-- 3-1-block start -->
            <div class="row">
                <!-- Recent Items start -->
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="user-block-2">
                            <img class="img-fluid" src="../assets/images/avatar-1.png" alt="user-header">
                            <h5>Juliamar Soriano</h5>
                            <h6>My Profile</h6>
                        </div>
                        <div class="card-block">
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-clock-time"></i> Recent Activities
                                    <label class="label label-primary">480</label>
                                </div>
                            </div>
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-users"></i> Current Employees
                                    <label class="label label-primary">390</label>
                                </div>
                            </div>



                        </div>

                        <div class="text-center">
                            <button type="button" class="btn btn-warning waves-effect waves-light text-uppercase m-r-30" style="margin-top: -50px">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Recent Items end -->
                <div class="col-lg-8 col-md-12 grid-item">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-7 p-r-0 txt-white climacon-left">
                                <div class="card-block bg-primary">
                                    <div class="m-b-5">
                                        <h4 class="dashboard-city">Sta. Mesa Manila, Philippines</h4>
                                        <h5 class="city-cloud">Hot &amp; Sunny</h5>
                                    </div>
                                    <div>
                                        <h6 class="cloud-date">Today, 7th Aug 2018</h6>
                                        <div class="cloud-speed">
                                            <i class="icofont icofont-social-cloudapp"></i>
                                            <span>57
                                                <sup>MPH</sup>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="svg-cloud">
                                        <svg version="1.1" id="sun" class="climacon climacon_sun" viewBox="15 15 70 70">
                                            <clipPath id="sunFillClip">
                                                <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z"
                                                />
                                            </clipPath>
                                            <g class="climacon_iconWrap climacon_iconWrap-sun">
                                                <g class="climacon_componentWrap climacon_componentWrap-sun">
                                                    <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east"
                                                            d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast"
                                                            d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                            d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest"
                                                            d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west"
                                                            d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest"
                                                            d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south"
                                                            d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast"
                                                            d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"
                                                        />
                                                    </g>
                                                    <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                                                        <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999"
                                                        />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="cloud-temp">
                                            <h5 class="">Currently</h5>
                                            <h2>24°</h2>
                                        </div>

                                    </div>
                                    <ul class="weather-temp">
                                        <li>
                                            <h6 class="txt-white">14:00</h6>
                                            <svg version="1.1" id="cloudLightning2" class="climacon climacon_cloudLightning" viewBox="15 15 70 70">
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudLightning">
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                                        <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "
                                                        />
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"
                                                        />
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>24°</h4>
                                        </li>
                                        <li>
                                            <h6 class="txt-white">22:00</h6>
                                            <svg version="1.1" id="cloudDrizzleAlt" class="climacon climacon_cloudDrizzleAlt" viewBox="15 15 70 70">
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleAlt">
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                            id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                            d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                            d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"
                                                        />
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"
                                                        />
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>20°</h4>

                                        </li>
                                        <li>
                                            <h6 class="txt-white">17:00</h6>
                                            <svg version="1.1" id="cloudRainAlt" class="climacon climacon_cloudRainAlt" viewBox="15 15 70 70">
                                                <clipPath id="cloudFillClip">
                                                    <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"
                                                    />
                                                </clipPath>
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudRainAlt">
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt"
                                                            d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt"
                                                            d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"
                                                        />
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.267,0-0.614,0-1,0c0-1.373-0.319-2.742-0.942-4c0.776,0,1.45,0,1.942,0c4.418,0,7.999-3.58,7.999-7.998c0-4.418-3.581-8-7.999-8c-1.601,0-3.083,0.481-4.334,1.29c-1.231-5.316-5.973-9.289-11.664-9.289c-6.627,0-11.998,5.372-11.998,11.998c0,5.953,4.339,10.879,10.023,11.822c-0.637,1.218-0.969,2.55-1.012,3.888c-7.406-1.399-13.012-7.896-13.012-15.709c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.337-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.996,60.27,66.626,65.641,59.999,65.641z"
                                                        />
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>22°</h4>

                                        </li>
                                        <li>
                                            <h6 class="txt-white">16:00</h6>
                                            <svg version="1.1" id="cloudDrizzle" class="climacon climacon_cloudDrizzle" viewBox="15 15 70 70">
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                            d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                            d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"
                                                        />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                            d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"
                                                        />
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"
                                                        />
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>23°</h4>

                                        </li>
                                        <li>
                                            <h6 class="txt-white">18:00</h6>
                                            <svg version="1.1" id="cloudSnowSunAlt" class="climacon climacon_cloudSnowSunAlt" viewBox="15 15 70 70">
                                                <clipPath id="cloudFillClip1">
                                                    <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"
                                                    />
                                                </clipPath>
                                                <clipPath id="sunCloudFillClip2">
                                                    <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"
                                                    />
                                                </clipPath>
                                                <clipPath id="cloudSunFillClip12">
                                                    <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"
                                                    />
                                                </clipPath>
                                                <clipPath id="snowFillClip">
                                                    <path d="M15,15v70h70V15H15z M50,65.641c-1.104,0-2-0.896-2-2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2S51.104,65.641,50,65.641z"
                                                    />
                                                </clipPath>
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudSnowSunAlt">
                                                    <g clip-path="url(#cloudSunFillClip)">
                                                        <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                            <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                    d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                                                                />
                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                    d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                                                                />
                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                    d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                                                                />
                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                    d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                                                                />
                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                    d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                                                                />
                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                    d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                                                                />
                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                    d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                                                                />
                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                    d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                                                                />
                                                            </g>
                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                                                        <g class="climacon_component climacon_component climacon_component-snowAlt" clip-path="url(#snowFillClip)">
                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt" d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"
                                                            />
                                                        </g>
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M61.998,65.461v-4.082c3.447-0.891,6-4.012,6-7.738c0-4.417-3.582-7.999-7.999-7.999c-1.601,0-3.084,0.48-4.334,1.291c-1.231-5.317-5.973-9.291-11.664-9.291c-6.627,0-11.999,5.373-11.999,12c0,4.438,2.417,8.305,5.999,10.379v4.444c-5.86-2.375-9.998-8.112-9.998-14.825c0-8.835,7.162-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.373,11.998,11.998C71.997,59.586,67.671,64.506,61.998,65.461z"
                                                        />
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>25°</h4>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 p-l-0 climacon-right">
                                <div class="p-10">

                                    <div class="table-responsive">

                                        <table class="table weather-table m-t-15">
                                            <tbody>
                                                <tr class="svg-icon">
                                                    <td>Sunday</td>
                                                    <td>
                                                        <svg version="1.1" id="cloudDrizzleSun1" class="climacon climacon_cloudDrizzleSun"
                                                            viewBox="15 15 70 70">
                                                            <clipPath id="cloudFillClip3">
                                                                <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"
                                                                />
                                                            </clipPath>
                                                            <clipPath id="sunCloudFillClip4">
                                                                <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"
                                                                />
                                                            </clipPath>
                                                            <clipPath id="cloudSunFillClip2">
                                                                <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"
                                                                />
                                                            </clipPath>
                                                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSun">
                                                                <g clip-path="url(#cloudSunFillClip)">
                                                                    <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                                        <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                                                                            />
                                                                        </g>
                                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                            <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"
                                                                            />
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                        d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"
                                                                    />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                        d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"
                                                                    />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                        d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"
                                                                    />
                                                                </g>

                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </td>
                                                    <td>27°-30°</td>

                                                </tr>
                                                <tr class="svg-icon">
                                                    <td>Monday</td>
                                                    <td>
                                                        <svg version="1.1" id="cloudDrizzleAlt1" class="climacon climacon_cloudDrizzleAlt"
                                                            viewBox="15 15 70 70">
                                                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleAlt">
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                        id="Drizzle-Left_11_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"
                                                                    />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                        d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"
                                                                    />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                        d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"
                                                                    />
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </td>
                                                    <td>27°-30°</td>

                                                </tr>
                                                <tr class="svg-icon">
                                                    <td>Tuesday</td>
                                                    <td>
                                                        <svg version="1.1" id="cloudRainAlt1" class="climacon climacon_cloudRainAlt"
                                                            viewBox="15 15 70 70">
                                                            <clipPath id="cloudFillClip5">
                                                                <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"
                                                                />
                                                            </clipPath>
                                                            <g class="climacon_iconWrap climacon_iconWrap-cloudRainAlt">
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt"
                                                                        d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"
                                                                    />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt"
                                                                        d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"
                                                                    />
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.267,0-0.614,0-1,0c0-1.373-0.319-2.742-0.942-4c0.776,0,1.45,0,1.942,0c4.418,0,7.999-3.58,7.999-7.998c0-4.418-3.581-8-7.999-8c-1.601,0-3.083,0.481-4.334,1.29c-1.231-5.316-5.973-9.289-11.664-9.289c-6.627,0-11.998,5.372-11.998,11.998c0,5.953,4.339,10.879,10.023,11.822c-0.637,1.218-0.969,2.55-1.012,3.888c-7.406-1.399-13.012-7.896-13.012-15.709c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.337-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.996,60.27,66.626,65.641,59.999,65.641z"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </td>
                                                    <td>27°-30°</td>

                                                </tr>
                                                <tr class="svg-icon">
                                                    <td>Wednesday</td>
                                                    <td>
                                                        <svg version="1.1" id="cloudDrizzleSun" class="climacon climacon_cloudDrizzleSun"
                                                            viewBox="15 15 70 70">
                                                            <clipPath id="cloudFillClip6">
                                                                <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"
                                                                />
                                                            </clipPath>
                                                            <clipPath id="sunCloudFillClip7">
                                                                <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"
                                                                />
                                                            </clipPath>
                                                            <clipPath id="cloudSunFillClip8">
                                                                <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"
                                                                />
                                                            </clipPath>
                                                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSun">
                                                                <g clip-path="url(#cloudSunFillClip)">
                                                                    <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                                        <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                                                                            />
                                                                        </g>
                                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                            <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"
                                                                            />
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                        d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"
                                                                    />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                        d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"
                                                                    />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                        d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"
                                                                    />
                                                                </g>

                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </td>
                                                    <td>27°-30°</td>

                                                </tr>
                                                <tr class="svg-icon">
                                                    <td>Thursday</td>
                                                    <td>
                                                        <svg version="1.1" id="cloudDrizzleMoonAlt" class="climacon climacon_cloudDrizzleMoonAlt"
                                                            viewBox="15 15 70 70">
                                                            <clipPath id="cloudFillClip9">
                                                                <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"
                                                                />
                                                            </clipPath>
                                                            <clipPath id="moonCloudFillClip10">
                                                                <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"
                                                                />
                                                            </clipPath>
                                                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonAlt">
                                                                <g clip-path="url(#cloudFillClip)">
                                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"
                                                                        />
                                                                    </g>
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                        id="Drizzle-Left_111_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"
                                                                    />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                        d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"
                                                                    />
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                        d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"
                                                                    />
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </td>
                                                    <td>27°-30°</td>

                                                </tr>
                                                <tr class="svg-icon">
                                                    <td>Friday</td>
                                                    <td>
                                                        <svg version="1.1" id="cloudSnowSunAlt1" class="climacon climacon_cloudSnowSunAlt"
                                                            viewBox="15 15 70 70">
                                                            <clipPath id="cloudFillClip11">
                                                                <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"
                                                                />
                                                            </clipPath>
                                                            <clipPath id="sunCloudFillClip12">
                                                                <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"
                                                                />
                                                            </clipPath>
                                                            <clipPath id="cloudSunFillClip11">
                                                                <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"
                                                                />
                                                            </clipPath>
                                                            <clipPath id="snowFillClip2">
                                                                <path d="M15,15v70h70V15H15z M50,65.641c-1.104,0-2-0.896-2-2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2S51.104,65.641,50,65.641z"
                                                                />
                                                            </clipPath>
                                                            <g class="climacon_iconWrap climacon_iconWrap-cloudSnowSunAlt">
                                                                <g clip-path="url(#cloudSunFillClip)">
                                                                    <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                                        <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                                                                            />
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                                d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                                                                            />
                                                                        </g>
                                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                            <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"
                                                                            />
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                                                                    <g class="climacon_component climacon_component climacon_component-snowAlt" clip-path="url(#snowFillClip)">
                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt" d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"
                                                                        />
                                                                    </g>
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M61.998,65.461v-4.082c3.447-0.891,6-4.012,6-7.738c0-4.417-3.582-7.999-7.999-7.999c-1.601,0-3.084,0.48-4.334,1.291c-1.231-5.317-5.973-9.291-11.664-9.291c-6.627,0-11.999,5.373-11.999,12c0,4.438,2.417,8.305,5.999,10.379v4.444c-5.86-2.375-9.998-8.112-9.998-14.825c0-8.835,7.162-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.373,11.998,11.998C71.997,59.586,67.671,64.506,61.998,65.461z"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </td>
                                                    <td>27°-30°</td>

                                                </tr>
                                                <tr class="svg-icon">
                                                    <td>Saturday</td>
                                                    <td>
                                                        <svg version="1.1" id="cloudLightning" class="climacon climacon_cloudLightning"
                                                            viewBox="15 15 70 70">
                                                            <g class="climacon_iconWrap climacon_iconWrap-cloudLightning">
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                                                    <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "
                                                                    />
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"
                                                                    />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </td>
                                                    <td>27°-30°</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- 3-1-block end -->

            <!-- 2-1 block start -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table m-b-0 photo-table">
                                    <thead>
                                        <tr class="text-uppercase">
                                            <th>Photo</th>
                                            <th>Project</th>
                                            <th>Completed</th>
                                            <th>Status</th>
                                            <th>Start Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <img class="img-fluid img-circle" src="../assets/images/avatar-2.png" alt="User">
                                            </th>
                                            <td>Appestia Project
                                                <p>
                                                    <i class="icofont icofont-clock-time"></i>Created 14.6.2018</p>
                                            </td>
                                            <td>
                                                <span class="pie" style="display: none;">226,134</span>
                                                <svg class="peity" height="30" width="30">
                                                    <path d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15"
                                                        fill="#2196F3"></path>
                                                    <path d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15"
                                                        fill="#ccc"></path>
                                                </svg>
                                            </td>
                                            <td>70%</td>
                                            <td>June 10, 2018</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <img class="img-fluid img-circle" src="../assets/images/avatar-4.png" alt="User">
                                            </th>
                                            <td>Contract with belife Company
                                                <p>
                                                    <i class="icofont icofont-clock-time"></i>Created 20.5.2018</p>
                                            </td>
                                            <td>
                                                <span class="pie" style="display: none;">0.52/1.561</span>
                                                <svg class="peity" height="30" width="30">
                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                        fill="#2196F3"></path>
                                                    <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                        fill="#ccc"></path>
                                                </svg>
                                            </td>
                                            <td>40%</td>
                                            <td>May 25, 2018</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <img class="img-fluid img-circle" src="../assets/images/avatar-1.png" alt="User">
                                            </th>
                                            <td>Web Consultancy project
                                                <p>
                                                    <i class="icofont icofont-clock-time"></i>Created 10.4.2018</p>
                                            </td>
                                            <td>
                                                <span class="pie" style="display: none;">1,4</span>
                                                <svg class="peity" height="30" width="30">
                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 29.265847744427305 10.36474508437579 L 15 15"
                                                        fill="#2196F3"></path>
                                                    <path d="M 29.265847744427305 10.36474508437579 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                        fill="#ccc"></path>
                                                </svg>
                                            </td>
                                            <td>20%</td>
                                            <td>April 12, 2018</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <img class="img-fluid img-circle" src="../assets/images/avatar-3.png" alt="User">
                                            </th>
                                            <td>Contract with belife Company
                                                <p>
                                                    <i class="icofont icofont-clock-time"></i>Created 18.3.2018</p>
                                            </td>
                                            <td>
                                                <span class="pie" style="display: none;">0.52/1.561</span>
                                                <svg class="peity" height="30" width="30">
                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                        fill="#2196F3"></path>
                                                    <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                        fill="#ccc"></path>
                                                </svg>
                                            </td>
                                            <td>40%</td>
                                            <td>March 20, 2018</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <img class="img-fluid img-circle" src="../assets/images/avatar-1.png" alt="User">
                                            </th>
                                            <td>Contract with belife Company
                                                <p>
                                                    <i class="icofont icofont-clock-time"></i>Created 13.2.2018</p>
                                            </td>
                                            <td>
                                                <span class="pie" style="display: none;">0.52/1.561</span>
                                                <svg class="peity" height="30" width="30">
                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                        fill="#2196F3"></path>
                                                    <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                        fill="#ccc"></path>
                                                </svg>
                                            </td>
                                            <td>40%</td>
                                            <td>February 5, 2018</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <img class="img-fluid img-circle" src="../assets/images/avatar-2.png" alt="User">
                                            </th>
                                            <td>Contract with belife Company
                                                <p>
                                                    <i class="icofont icofont-clock-time"></i>Created 28.1.2018</p>
                                            </td>
                                            <td>
                                                <span class="pie" style="display: none;">0.52/1.561</span>
                                                <svg class="peity" height="30" width="30">
                                                    <path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                        fill="#2196F3"></path>
                                                    <path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                        fill="#ccc"></path>
                                                </svg>
                                            </td>
                                            <td>40%</td>
                                            <td>January 30, 2018</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>





















            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->
        <!-- Container-fluid ends -->

    </div>
    </div>


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
</body>

</html>
