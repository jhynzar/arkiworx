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
                                <a href="../login" class="btn btn-primary"> LOG OUT
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
                    <p><b>Juliamar</b></p>
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
                    <a class="waves-effect waves-dark" href="/Engineer/Home">
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
                            <a class="waves-effect waves-dark" href="/Engineer/Cost-Summary">
                                <i class="icon-arrow-right"></i> Cost Summary</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="/Engineer/Cost-Estimation">
                                <i class="icon-arrow-right"></i> Cost Estimation</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="/Engineer/Actuals">
                                <i class="icon-arrow-right"></i> Actuals</a>
                        </li>
                    </ul>
                </li>




                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Materials-Pricelist">
                        <i class="icon-notebook"></i>
                        <span> Materials PriceList</span>
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

                <li class=" treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Inbox">
                        <i class="icon-envelope-letter"></i>
                        <span> Inbox</span>
                    </a>
                </li>

                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Accounts-Settings">
                        <i class="icon-people"></i>
                        <span> Account Setting</span>
                    </a>
                </li>




    </aside>
    <!-- end of sidebar-->
    

  




    <div class="content-wrapper" style="margin-top: 45px">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Account Settings</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="icon-people"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">User
                        </li>

                        <li class="breadcrumb-item">
                            <span class="label label-info">
                                <b>My Account</b>
                        </li>

                    </ol>
                </div>
            </div>
            <!-- Header end -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card faq-left">
                        <div class="social-profile">
                            <img class="img-fluid" src="../assets/images/social/profile.jpg" alt="">
                            <div class="profile-hvr m-t-15">
                                <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                                <i class="icofont icofont-ui-delete c-pointer"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <h4 class="f-18 f-normal m-b-10 txt-primary">Mark Rivera</h4>
                            <h5 class="f-14">Engineer</h5>
                            <p class="m-b-15">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt
                                ut labore et.Lorem ipsum dolor sit amet, consecte</p>
                            <ul>
                                <li class="faq-contact-card">
                                    <i class="icofont icofont-telephone"></i>
                                    0908 - 785 - 9132
                                </li>

                                <li class="faq-contact-card">
                                    <i class="icofont icofont-email"></i>
                                    <a href="#">juju@gmail.com</a>
                                </li>
                            </ul>




                            <!-- Modal -->
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="sendMessageModal" class="modal fade"
                                style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                            <h4 class="modal-title">Send Message</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">To</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" placeholder="" id="cc" class="form-control">
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Subject</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Message</label>
                                                    <div class="col-lg-10">
                                                        <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <br>
                                                        <span class="btn green fileinput-button">
                                                            <i class="fa fa-plus fa fa-white"></i>
                                                            <span>Attachment</span>
                                                            <input type="file" name="files[]" multiple="">
                                                        </span>
                                                        <button class="btn btn-success btn-send" type="submit">Send</button>
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
                    </div>
                    <!-- end of card-block -->
                    <div class="card">

                        <!-- end of technical skill -->
                    </div>
                    <!-- end of card-block -->
                </div>

                <!-- end of card -->

                <!-- end of col-lg-3 -->

                <!-- start col-lg-9 -->
                <div class="col-lg-9">
                    <!-- Nav tabs -->
                    <div class="tab-header">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Profile Information</a>
                                <div class="slide"></div>
                            </li>

                        </ul>
                    </div>
                    <!-- end of tab-header -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">About</h5>
                                    <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light f-right">
                                        Edit Profile
                                        <i class="icofont icofont-edit"></i>
                                    </button>
                                </div>


                                <div class="card-block" style="background-color: lightcyan">
                                    <div class="view-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-6">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" class="text text-primary">Full Name</th>
                                                                        <td>Mark Rivera</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text text-primary">Sex</th>
                                                                        <td>Male</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text text-primary">User Name</th>
                                                                        <td>@chu</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text text-primary">Address</th>
                                                                        <td>Block 32 Lot 5, Palmera Homes, Dahlia St., San Jose
                                                                            del Monte City</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->

                                                        <div class="col-lg-12 col-xl-6">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" class="text text-primary">Email</th>
                                                                        <td>
                                                                            <a href="#!">juju@gmail.com</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text text-primary">Contact Number</th>
                                                                        <td>(0908) 785 9132</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text text-primary">User Type</th>
                                                                        <td>Engineer</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of general info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of view-info -->
                                    <!-- form cool -->
                                    <div class="edit-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="md-group-add-on">
                                                                                <span class="md-add-on">
                                                                                    <i class="icofont icofont-ui-user"></i>
                                                                                </span>
                                                                                <div class="md-input-wrapper">
                                                                                    <input type="text" class="md-form-control">
                                                                                    <label>Full Name</label>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>

                                                                            <div class="form-radio">
                                                                                <form>
                                                                                    <div class="md-group-add-on">
                                                                                        <span class="md-add-on">
                                                                                            <i class="icofont icofont-group-students"></i>
                                                                                        </span>
                                                                                        <div class="radio radiofill radio-inline">
                                                                                            <label>
                                                                                                <input type="radio" name="radio">
                                                                                                <i class="helper"></i> Male
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill radio-inline">
                                                                                            <label>
                                                                                                <input type="radio" name="radio">
                                                                                                <i class="helper"></i> Female
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </td>

                                                                    </tr>


                                                                    <tr>
                                                                        <td>
                                                                            <div class="md-group-add-on">
                                                                                <span class="md-add-on">
                                                                                    <i class="icofont icofont-location-pin"></i>
                                                                                </span>
                                                                                <div class="md-input-wrapper">
                                                                                    <textarea class="md-form-control" cols="2" rows="4"></textarea>
                                                                                    <label>Address</label>

                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->

                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="md-group-add-on">
                                                                                <span class="md-add-on">
                                                                                    <i class="icofont icofont-email"></i>
                                                                                </span>
                                                                                <div class="md-input-wrapper">
                                                                                    <input type="email" class="md-form-control">
                                                                                    <label>Email</label>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>
                                                                            <div class="md-group-add-on">
                                                                                <span class="md-add-on">
                                                                                    <i class="icon-lock"></i>
                                                                                </span>
                                                                                <div class="md-input-wrapper">
                                                                                    <input type="password" class="md-form-control">
                                                                                    <label>Password</label>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="md-group-add-on">
                                                                                <span class="md-add-on">
                                                                                    <i class="icofont icofont-mobile-phone"></i>
                                                                                </span>
                                                                                <div class="md-input-wrapper">
                                                                                    <input type="number" class="md-form-control">
                                                                                    <label>Contact Number</label>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                        </div>

                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                    <div class="text-center">
                                                        <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                        <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                    </div>
                                                </div>
                                                <!-- end of edit info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->

                                    </div>
                                    <!-- end of view-info -->
                                </div>
                                <!-- end of card-block -->
                            </div>
                            <!-- end of card-->


                            <!-- end of row -->
                        </div>
                        <!-- end of card block -->
                    </div>
                    <!-- end of card -->
                </div>
                <!-- end of col-lg-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of tab-pane -->
        <!-- end of about us tab-pane -->

    </div>
    <!-- end of main tab content -->
    </div>


    <!-- Container-fluid ends -->





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

    <!-- pie chart.js -->
    <script type="text/javascript" src="../assets/plugins/bower-jquery-easyPieChart/dist/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../assets/pages/counter.js"></script>

    <!-- Date picker.js -->
    <script type="text/javascript" src="../assets/plugins/moment/moment.js"></script>
    <script type="text/javascript" src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="../assets/js/main.min.js"></script>
    <script type="text/javascript" src="../assets/pages/profile.js"></script>
    <script type="text/javascript" src="../assets/pages/elements.js"></script>
    <script type="text/javascript" src="../assets/js/menu.min.js"></script>

</body>

</html>
