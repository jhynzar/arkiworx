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

        .modal-header {
            background-color: deepskyblue !important;
            opacity: 2 !important;
        }

        .card-header {
            background-color: #778899 !important;
            color: white !important;
        }

        .modal-header {
            background-color: #778899 !important;
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
        <!-- Navbar-->
        <header class="main-header-top hidden-print">

            <a href="index" class="nav-brand">
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
                    <li class="dropdown notification-menu">
                        <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                            <i class="icon-bell"></i>
                            <span class="badge badge-success header-badge">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="not-head">You have
                                <b class="text-primary">4</b> new notifications.</li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                                    <span class="media-left media-icon">
                                        <img class="img-circle" src="../assets/images/avatar-1.jpg" alt="User Image">
                                    </span>
                                    <div class="media-body">
                                        <span class="block">Lisa sent you a mail</span>
                                        <span class="text-muted block-time">2min ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                                    <span class="media-left media-icon">
                                        <img class="img-circle" src="../assets/images/avatar-2.png" alt="User Image">
                                    </span>
                                    <div class="media-body">
                                        <span class="block">Server Not Working</span>
                                        <span class="text-muted block-time">20min ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                                    <span class="media-left media-icon">
                                        <img class="img-circle" src="../assets/images/avatar-3.png" alt="User Image">
                                    </span>
                                    <div class="media-body">
                                        <span class="block">Transaction xyz complete</span>
                                        <span class="text-muted block-time">3 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="not-footer">
                                <a href="#!">See all notifications.</a>
                            </li>
                        </ul>
                    </li>
                    <!-- chat dropdown -->
                    <li class="pc-rheader-submenu ">
                        <a href="#!" class="drop icon-circle displayChatbox">
                            <i class="icon-bubbles"></i>
                            <span class="badge badge-warning header-badge blink">5</span>
                        </a>

                    </li>
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>

                    </li>
                    <!-- User Menu-->
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                            <span>
                                <img class="img-circle " src="../assets/images/avatar-1.jpg" style="width:40px;" alt="User Image">
                            </span>
                            <span>
                                <b>Juliamar</b>Soriano
                                <i class=" icofont icofont-simple-down"></i>
                            </span>

                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li>
                                <a href="#!">
                                    <i class="icon-settings"></i> Settings</a>
                            </li>
                            <li>
                                <a href="profile">
                                    <i class="icon-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="message">
                                    <i class="icon-envelope-open"></i> My Messages</a>
                            </li>
                            <li class="p-0">
                                <div class="dropdown-divider m-0"></div>
                            </li>
                            <li>
                                <a href="lock-screen">
                                    <i class="icon-lock"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a href="../login">
                                    <i class="icon-logout"></i> Logout</a>
                            </li>

                        </ul>
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
                    <a class="waves-effect waves-dark" href="../login">
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
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="index">
                        <i class="icon-speedometer"></i>
                        <span> Dashboard</span>
                    </a>
                </li>



                <li class="treeview">
                    <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-briefcase"></i>
                        <span> Cost</span>
                        <i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="cost%20summary">
                                <i class="icon-arrow-right"></i> Cost Summary</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="actuals">
                                <i class="icon-arrow-right"></i> Actuals</a>
                        </li>

                    </ul>
                </li>




                <li class="treeview">
                    <a class="waves-effect waves-dark" href="projectprogress">
                        <i class="icon-chart"></i>
                        <span> Project Progress</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="calendar">
                        <i class="icon-calendar"></i>
                        <span> Calendar</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="inbox">
                        <i class="icon-envelope-letter"></i>
                        <span> Inbox</span>
                    </a>
                </li>

                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="accounts">
                        <i class="icon-people"></i>
                        <span> Accounts</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-briefcase"></i>
                        <span> UI Elements</span>
                        <i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="accordion">
                                <i class="icon-arrow-right"></i> Accordion</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="button">
                                <i class="icon-arrow-right"></i> Button</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="label-badge">
                                <i class="icon-arrow-right"></i> Label Badge</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="bootstrap-ui">
                                <i class="icon-arrow-right"></i> Grid system</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="box-shadow">
                                <i class="icon-arrow-right"></i> Box Shadow</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="color">
                                <i class="icon-arrow-right"></i> Color</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="light-box">
                                <i class="icon-arrow-right"></i> Light Box</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="notification">
                                <i class="icon-arrow-right"></i> Notification</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="panels-wells">
                                <i class="icon-arrow-right"></i> Panels-Wells</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="tabs">
                                <i class="icon-arrow-right"></i> Tabs</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="tooltips">
                                <i class="icon-arrow-right"></i> Tooltips</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="typography">
                                <i class="icon-arrow-right"></i> Typography</a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-chart"></i>
                        <span> Charts &amp; Maps</span>
                        <span class="label label-danger menu-caption">New</span>
                        <i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="float-chart">
                                <i class="icon-arrow-right"></i> Float Charts</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="morris-chart">
                                <i class="icon-arrow-right"></i> Morris Charts</a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-book-open"></i>
                        <span> Forms</span>
                        <i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="form-elements-bootstrap">
                                <i class="icon-arrow-right"></i> Form Elements Bootstrap</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="form-elements-materialize">
                                <i class="icon-arrow-right"></i> Form Elements Material</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="form-elements-advance">
                                <i class="icon-arrow-right"></i> Form Elements Advance</a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="basic-table">
                        <i class="icon-list"></i>
                        <span> Table</span>
                    </a>
                </li>


                <li class="nav-level">More</li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-docs"></i>
                        <span>Pages</span>
                        <i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="#!">
                                <i class="icon-arrow-right"></i>
                                <span> Authentication</span>
                                <i class="icon-arrow-down"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="waves-effect waves-dark" href="register1" target="_blank">
                                        <i class="icon-arrow-right"></i> Register 1</a>
                                </li>

                                <li>
                                    <a class="waves-effect waves-dark" href="../login" target="_blank">
                                        <i class="icon-arrow-right"></i>
                                        <span> Login 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="forgot-password" target="_blank">
                                        <i class="icon-arrow-right"></i>
                                        <span> Forgot Password</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="profile">
                                        <i class="icon-arrow-right"></i> Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="lock-screen" target="_blank">
                                <i class="icon-arrow-right"></i> Lock Screen</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="404" target="_blank">
                                <i class="icon-arrow-right"></i> Error 404</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="sample-page">
                                <i class="icon-arrow-right"></i> Sample Page</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="search-result">
                                <i class="icon-arrow-right"></i> Search Result</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-level">Menu Level</li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="#!">
                        <i class="icofont icofont-company"></i>
                        <span>Menu Level 1</span>
                        <i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                Level Two
                            </a>
                        </li>
                        <li class="treeview">
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                <span>Level Two</span>
                                <i class="icon-arrow-down"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        Level Three
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        <span>Level Three</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
    <!-- Sidebar chat start -->
    <div id="sidebar" class="p-fixed header-users showChat">
        <div class="had-container">
            <div class="card card_main header-users-main">
                <div class="card-content user-box">

                    <div class="md-group-add-on p-20">
                        <span class="md-add-on">
                            <i class="icofont icofont-search-alt-2 chat-search"></i>
                        </span>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control" name="username" id="search-friends">
                            <label>Search</label>
                        </div>

                    </div>
                    <div class="media friendlist-main">

                        <h6>Friend List</h6>

                    </div>
                    <div class="main-friend-list">
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../Admin/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Juliamar Soriano</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left"
                            title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip"
                            data-placement="left" title="Michael Scofield">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-3.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Michael Scofield</div>
                                <span>3 hours ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left"
                            title="Irina Shayk">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-4.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Irina Shayk</div>
                                <span>1 day ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left"
                            title="Sara Tancredi">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-5.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Sara Tancredi</div>
                                <span>2 days ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../Admin/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left"
                            title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left"
                            title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left"
                            title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="showChat_inner">
        <div class="media chat-inner-header">
            <a class="back_chatBox">
                <i class="icofont icofont-rounded-left"></i> Josephin Doe
            </a>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle m-t-5" src="../assets/images/avatar-1.png" alt="Generic placeholder image">
                <div class="live-status bg-success"></div>
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
            <div class="media-right photo-table">
                <a href="#!">
                    <img class="media-object img-circle m-t-5" src="../assets/images/avatar-2.png" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                </a>
            </div>
        </div>
        <div class="media chat-reply-box">
            <div class="md-input-wrapper">
                <input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
                <label>Share your thoughts</label>
                <span class="highlight"></span>
                <span class="bar"></span>
                <button type="button" class="chat-send waves-effect waves-light">
                    <i class="icofont icofont-location-arrow f-20 "></i>
                </button>

                <button type="button" class="chat-send waves-effect waves-light">
                    <i class="icofont icofont-location-arrow f-20 "></i>
                </button>
            </div>

        </div>
    </div>
    <!-- Sidebar chat end-->

    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row" style="margin-top: -10px">
                <div class="col-sm-9 p-0">
                    <div class="main-header">
                        <h4>Account</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index">
                                    <i class="icon-people"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Users</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="label label-info">
                                    <b>Users Table</b>
                            </li>
                        </ol>







                        <div class="input-group stylish-input-group" style="position: absolute; margin-top: -60px; margin-left: 300px">
                            <input type="text" class="form-control" placeholder="Search user" style="width: 400px">
                            <button type="submit" class="btn btn-primary">
                                <span class="icon-magnifier"></span>
                            </button>

                        </div>

                        <div class="form-inline">
                            <br>

                            <div class="form-group pull-center">
                                <label for="showProject" class="text text-muted">Show</label>
                                <select class="form-control" name="sex" id="userType" style="width: 70px; height: 35px !important;">
                                    <option selected> 10 </option>
                                    <option> 1 </option>
                                    <option> 2 </option>
                                    <option> 3 </option>
                                    <option> 4 </option>
                                    <option> 5 </option>
                                    <option> 6 </option>
                                    <option> 7 </option>
                                    <option> 8 </option>
                                    <option> 9 </option>
                                </select>
                                <label class="text text-muted"> Users</label>
                            </div>
                        </div>


                    </div>

                </div>











                <!-- Add User Modal Button trigger-->
                <div class="col-sm-3 pull-right">
                    <br>
                    <br>
                    <button type="button" data-toggle="modal" data-target="#addUser" class="btn btn-success waves-effect waves-light"
                        style="margin-left: 45px">
                        <i class="icon-user-follow"> </i>Add User</button>
                </div>


            </div>
            <!-- Header end -->

            <!-- Tables start -->
            <!-- Row start -->
            <div class="row">
                <div class="col-sm-12">


                    <!-- Contextual classes table starts -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">User Accounts</h5>

                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="color: black">#</th>
                                                <th style="color: black">First Name</th>
                                                <th style="color: black">Last Name</th>
                                                <th style="color: black">Username</th>
                                                <th>
                                                    <span class="text text-danger">User Type</span>
                                                </th>
                                                <th></th>
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-warning">
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Rivera</td>
                                                <td>@mdo</td>
                                                <td>Engineer</td>

                                                <td>
                                                    <a href="profile" class="btn btn-warning label label-warning" role="button">
                                                    View </a>
                                                </td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#deactivateUser" class="btn label label-danger">Deactivate</button>
                                                </td>




                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Reyes</td>
                                                <td>@fat</td>
                                                <td>Engineer</td>
                                                <td>
                                                    <a href="profile" class="btn btn-warning label label-warning" role="button">
                                                    View </a>
                                                </td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#deactivateUser" class="btn label label-danger">Deactivate</button>
                                                </td>

                                                <tr class="table-info">
                                                    <td>3</td>
                                                    <td>Juliamar</td>
                                                    <td>Soriano</td>
                                                    <td>@chu</td>
                                                    <td>Engineer</td>
                                                    <td>
                                                        <a href="profile" class="btn btn-warning label label-warning" role="button">
                                                        View </a>
                                                    </td>
                                                    <td>
                                                        <button data-toggle="modal" data-target="#deactivateUser" class="btn label label-danger">Deactivate</button>
                                                    </td>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Erwin</td>
                                                        <td>Andres</td>>
                                                        <td>@qwe</td>
                                                        <td>Client</td>
                                                        <td>
                                                            <a href="profile" class="btn btn-warning label label-warning" role="button">
                                                            View </a>
                                                        </td>
                                                        <td>
                                                            <button data-toggle="modal" data-target="#deactivateUser" class="btn label label-danger">Deactivate</button>
                                                        </td>

                                                        <tr class="table-danger">
                                                            <td>5</td>
                                                            <td>Roscelline</td>
                                                            <td>Dela Pena</td>
                                                            <td>@uwu</td>
                                                            <td>Client</td>
                                                            <td>
                                                                <a href="profile" class="btn btn-warning label label-warning"
                                                                    role="button"> View </a>
                                                            </td>
                                                            <td>
                                                                <button data-toggle="modal" data-target="#deactivateUser" class="btn label label-danger">Deactivate</button>
                                                            </td>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Dustin</td>
                                                                <td>Alpasar</td>
                                                                <td>@twitter</td>
                                                                <td>Client</td>
                                                                <td>
                                                                    <a href="profile" class="btn btn-warning label label-warning"
                                                                        role="button"> View </a>
                                                                </td>
                                                                <td>
                                                                    <button data-toggle="modal" data-target="#deactivateUser"
                                                                        class="btn label label-danger">Deactivate</button>
                                                                </td>

                                                            </tr>
                                                            <tr class="table-warning">
                                                                <td>7</td>
                                                                <td>Jacob</td>
                                                                <td>Reyes</td>
                                                                <td>@meme</td>
                                                                <td>Architect</td>
                                                                <td>
                                                                    <a href="profile" class="btn btn-warning label label-warning"
                                                                        role="button"> View </a>
                                                                </td>
                                                                <td>
                                                                    <button data-toggle="modal" data-target="#deactivateUser"
                                                                        class="btn label label-danger">Deactivate</button>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>Jacob</td>
                                                                <td>Reyes</td>
                                                                <td>@miming</td>
                                                                <td>Architect</td>
                                                                <td>
                                                                    <a href="profile" class="btn btn-warning label label-warning"
                                                                        role="button"> View </a>
                                                                </td>
                                                                <td>
                                                                    <button data-toggle="modal" data-target="#deactivateUser"
                                                                        class="btn label label-danger">Deactivate</button>
                                                                </td>

                                                            </tr>
                                                            <tr class="table-info">
                                                                <td>9</td>
                                                                <td>Jacob</td>
                                                                <td>Reyes</td>
                                                                <td>@chuchay</td>
                                                                <td>Architect</td>
                                                                <td>
                                                                    <a href="profile" class="btn btn-warning label label-warning"
                                                                        role="button"> View </a>
                                                                </td>
                                                                <td>
                                                                    <button data-toggle="modal" data-target="#deactivateUser"
                                                                        class="btn label label-danger">Deactivate</button>
                                                                </td>
                                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contextual classes table ends -->


                </div>
            </div>
            <!-- Row end -->
            <!-- Tables end -->
        </div>


        <!-- deactivate user modal -->

        <div class="modal fade" id="deactivateUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: indianred !important">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <span style="color: white">Deactivate User</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to deactivate this user's account?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Deactivate</button>
                    </div>
                </div>
            </div>
        </div>

























        <!-- Add user Modal -->

        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content pull-center">
                    <div class="modal-header color color-info">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            <span class="label label-info">Add User Account</span>
                        </h4>
                    </div>
                    <div class="modal-body" style="background: #e5e5f2 !important; ">

                        <div class="row">
                            <div class="col-sm-4" style="margin-left: 210px !important;">
                                <div class="card faq-left">
                                    <div class="social-profile">
                                        <img class="img-fluid img-sm" src="../assets/images/social/profile.jpg" alt="">
                                        <div class="profile-hvr m-t-15">
                                            <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                                            <i class="icofont icofont-ui-delete c-pointer"></i>
                                        </div>
                                    </div>
                                    <div class="card-block">


                                        <div class="faq-profile-btn">
                                            <p class="text-muted"> Add image</p>
                                            <div style="font-size: 10px !important;">
                                                <form action="/action_page.php">
                                                    <input type="file" name="pic" accept="image/*">
                                                    <br>
                                                    <br>
                                                    <input type="submit" class="btn btn-info">
                                                </form>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- end of card-block -->
                            </div>
                        </div>



                        <form class="form-inline" action="/action_page.php">
                            <div class="form-group">
                                <label for="fname">First Name: </label>
                                <input type="text" class="form-control" id="fname" placeholder="First name">
                            </div>

                            <div class="form-group">
                                <label for="lname">Last Name:</label>
                                <input type="text" class="form-control" id="lname" placeholder="Last name">
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="user">User Name:</label>
                                <input type="text" class="form-control" id="lname" placeholder="User name">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Password">
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="contact">Contact Number:</label>
                                <input type="number" class="form-control" id="contact" style="width: 230px !important;" placeholder="09..">
                            </div>

                            <div class="form-group pull-center">
                                <label for="sex">Sex:</label>
                                <select class="form-control" name="sex" id="userType" style="width: 160px !important;">
                                    <option>Female </option>
                                    <option selected>Male </option>
                                </select>
                            </div>

                            <br>
                            <br>
                            <div class="form-group form-inline">
                                <label for="email">Email Address:</label>
                                <input type="email" class="form-control" id="email" style="width: 300px !important;" placeholder="Email Address">
                            </div>

                            <hr>
                            <p class="text text-muted">Address</p>
                            <div class="form-group form-inline">
                                <label for="houseNo">House No.</label>
                                <input type="text" class="form-control" id="houseNo" style="width: 230px !important;" placeholder="House Number">
                            </div>

                            <div class="form-group form-inline">
                                <label for="streetNo">St. Name</label>
                                <input type="text" class="form-control" id="streetNo" style="width: 160px !important;" placeholder="Street Name">
                            </div>

                            <br>
                            <br>
                            <div class="form-group form-inline">
                                <label for="brgy">Brgy/ Subdivision</label>
                                <input type="text" class="form-control" id="brgy" style="width: 230px !important;" placeholder="Brgy/ Subdivision">
                            </div>

                            <div class="form-group form-inline">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" style="width: 150px !important;" placeholder="City">
                            </div>
                            <br>
                            <br>
                            <div class="form-group pull-center">
                                <label for="usertype">User Type:</label>
                                <select class="form-control" name="usertype" id="userType" style="width: 150px !important;">
                                    <option>Admin </option>
                                    <option>Client </option>
                                    <option>Engineer </option>
                                    <option>Architect </option>
                                </select>
                            </div>


                            <div class="modal-footer">
                                <hr>
                                <button type="submit" class="btn btn-success" data-dismiss="modal">
                                    <i class="icon icon-check"> </i>Add User</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 290px">
                                    <i class="icon icon-close"> </i>Cancel</button>

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Container-fluid ends -->
    </div>
    </div>


    <!-- Add user Modal -->

    <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header color color-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span class="label label-danger">Edit User Account</span>
                    </h4>
                </div>
                <div class="modal-body" style="background: #e5e5f2 !important; ">

                    <div class="row">
                        <div class="col-sm-4" style="margin-left: 210px !important;">
                            <div class="card faq-left">
                                <div class="social-profile">
                                    <img class="img-fluid img-sm" src="../assets/images/social/profile.jpg" alt="">
                                    <div class="profile-hvr m-t-15">
                                        <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                                        <i class="icofont icofont-ui-delete c-pointer"></i>
                                    </div>
                                </div>
                                <div class="card-block">


                                    <div class="faq-profile-btn">
                                        <p class="text-muted"> Add image</p>
                                        <div style="font-size: 10px !important;">
                                            <form action="/action_page.php">
                                                <input type="file" name="pic" accept="image/*">
                                                <br>
                                                <br>
                                                <input type="submit" class="btn btn-info">
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- end of card-block -->
                        </div>
                    </div>



                    <form class="form-inline" action="/action_page.php">
                        <div class="form-group">
                            <label for="fname">First Name: </label>
                            <input type="text" class="form-control" id="fname" placeholder="First name">
                        </div>

                        <div class="form-group">
                            <label for="lname">Last Name:</label>
                            <input type="text" class="form-control" id="lname" placeholder="Last name">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="user">User Name:</label>
                            <input type="text" class="form-control" id="lname" placeholder="User name">
                        </div>

                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Password">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="email" style="width: 200px !important;" placeholder="Email Address">
                        </div>

                        <div class="form-group pull-center">
                            <label for="usertype">User Type:</label>
                            <select class="form-control" name="usertype" id="userType" style="width: 150px !important;">
                                <option>Admin </option>
                                <option>Client </option>
                                <option>Engineer </option>
                                <option>Architect </option>
                            </select>
                        </div>



                        <div class="modal-footer">
                            <hr>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal">Update User</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    </div>
    </div>


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
