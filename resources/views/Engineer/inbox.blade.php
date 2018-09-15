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
                <img class="img-fluid logo" src="../assets/images/.jpg" alt="Theme-logo">
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
                        <h4 class="text-center" ><b><span style="color:  #222d32" ><b>Hello</b></span><span class="text text-success">!</span> </b><span class="text text-primary">Engineer</span></h4>
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
                    <a class="waves-effect waves-dark" href="/Engineer/Project-Progress">
                        <i class="icon-chart"></i>
                        <span> Project Plan</span>
                    </a>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Calendar">
                        <i class="icon-calendar"></i>
                        <span> Calendar</span>
                    </a>
                </li>

                <li class="active treeview">
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
    




    <div class="content-wrapper" style="margin-top: 45px">

        <!-- Container-fluid starts -->
        <!-- Main content starts -->

        <div class="container">
            <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
            <div class="mail-box">
                <aside class="sm-side">

                    <div class="inbox-body">
                        <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose">
                            Compose
                        </a>
                        <!-- Modal -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Compose a Message</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">To</label>
                                                <div class="col-lg-10">
                                                    <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                <div class="col-lg-10">
                                                    <input type="text" placeholder="" id="cc" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Subject</label>
                                                <div class="col-lg-10">
                                                    <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Message</label>
                                                <div class="col-lg-10">
                                                    <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10" style="margin-left: -10px">
                                                    <br>
                                                    <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Attachment</span>
                                                        <input type="file" name="files[]" multiple="">
                                                    </span>
                                                    <button class="btn btn-success btn-send" type="submit">
                                                        <i class="icon icon-check"> Send</i>
                                                    </button>
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 430px; margin-top: -60px">
                                                        <i class="icon icon-close"> </i>Cancel</button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <ul class="inbox-nav inbox-divider">
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-inbox"></i> Inbox
                                <span class="label label-danger pull-right">2</span>
                            </a>

                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope-o"></i> Sent Mail</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bookmark-o"></i> Important</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class=" fa fa-external-link"></i> Drafts
                                <span class="label label-info pull-right">30</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class=" fa fa-trash-o"></i> Trash</a>
                        </li>
                    </ul>



                    <div class="inbox-body text-center">
                        <div class="btn-group">
                            <a class="btn mini btn-primary" href="javascript:;">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn mini btn-success" href="javascript:;">
                                <i class="fa fa-phone"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn mini btn-info" href="javascript:;">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>

                </aside>
                <aside class="lg-side">
                    <div class="inbox-head" style="background-color: #4caf50">
                        <h3>Inbox</h3>
                        <form action="#" class="pull-right position">
                            <div class="input-append">
                                <input type="text" class="sr-input" placeholder="Search Mail">
                                <button class="btn sr-btn" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="inbox-body">
                        <div class="mail-option">
                            <div class="chk-all">
                                <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                        All
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#"> None</a>
                                        </li>
                                        <li>
                                            <a href="#"> Read</a>
                                        </li>
                                        <li>
                                            <a href="#"> Unread</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                    More
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pencil"></i> Mark as Read</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-ban"></i> Spam</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-trash-o"></i> Delete</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    Move to
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pencil"></i> Mark as Read</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-ban"></i> Spam</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-trash-o"></i> Delete</a>
                                    </li>
                                </ul>
                            </div>

                            <ul class="unstyled inbox-pagination">
                                <li>
                                    <span>1-50 of 234</span>
                                </li>
                                <li>
                                    <a class="np-btn" href="#">
                                        <i class="fa fa-angle-left  pagination-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="np-btn" href="#">
                                        <i class="fa fa-angle-right pagination-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <table class="table table-inbox table-hover">
                            <tbody>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message  dont-show">PHPClass</td>
                                    <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                    <td class="view-message  inbox-small-cells">
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="view-message  text-right">9:27 AM</td>
                                </tr>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">Google Webmaster </td>
                                    <td class="view-message">Improve the search presence of WebSite</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 15</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">JW Player</td>
                                    <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 15</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">Tim Reid, S P N</td>
                                    <td class="view-message">Boost Your Website Traffic</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">April 01</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star inbox-started"></i>
                                    </td>
                                    <td class="view-message dont-show">Freelancer.com
                                        <span class="label label-danger pull-right">urgent</span>
                                    </td>
                                    <td class="view-message">Stop wasting your visitors </td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">May 23</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star inbox-started"></i>
                                    </td>
                                    <td class="view-message dont-show">WOW Slider </td>
                                    <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                    <td class="view-message inbox-small-cells">
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="view-message text-right">March 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star inbox-started"></i>
                                    </td>
                                    <td class="view-message dont-show">LinkedIn Pulse</td>
                                    <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                    <td class="view-message inbox-small-cells">
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="view-message text-right">Feb 19</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">Drupal Community
                                        <span class="label label-success pull-right">megazine</span>
                                    </td>
                                    <td class="view-message view-message">Welcome to the Drupal Community</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 04</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Somebody requested a new password </td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">June 13</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">Skype
                                        <span class="label label-info pull-right">family</span>
                                    </td>
                                    <td class="view-message view-message">Password successfully changed</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 24</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star inbox-started"></i>
                                    </td>
                                    <td class="view-message dont-show">Google+</td>
                                    <td class="view-message">alireza, do you know</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 09</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star inbox-started"></i>
                                    </td>
                                    <td class="dont-show">Zoosk </td>
                                    <td class="view-message">7 new singles we think you'll like</td>
                                    <td class="view-message inbox-small-cells">
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="view-message text-right">May 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">LinkedIn </td>
                                    <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                    <td class="view-message inbox-small-cells">
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="view-message text-right">February 25</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="dont-show">Facebook</td>
                                    <td class="view-message view-message">Your account was recently logged into</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">Twitter</td>
                                    <td class="view-message">Your Twitter password has been changed</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">April 07</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                    <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">July 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star inbox-started"></i>
                                    </td>
                                    <td class="view-message dont-show">AddMe.com</td>
                                    <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">August 10</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">Terri Rexer, S P N</td>
                                    <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
                                    <td class="view-message inbox-small-cells">
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="view-message text-right">April 14</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">Bertina </td>
                                    <td class="view-message">IMPORTANT: Don't lose your domains!</td>
                                    <td class="view-message inbox-small-cells">
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="view-message text-right">June 16</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star inbox-started"></i>
                                    </td>
                                    <td class="view-message dont-show">Laura Gaffin, S P N </td>
                                    <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">August 10</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells">
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show">Facebook</td>
                                    <td class="view-message view-message">Alireza Zare Login faild</td>
                                    <td class="view-message inbox-small-cells">
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="view-message text-right">feb 14</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </aside>
            </div>
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
</body>

</html>
