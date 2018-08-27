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
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/color/color-1.min.css" id="color" />
    <!-- fullCalendar -->

    <link rel="stylesheet" href="/Admin/bower_components/fullcalendar/dist/fullcalendar.min.css" media="print">
    <link rel="stylesheet" href="/Admin/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

    <style>
        .sidebar .user-panel {
            background-image: url('/assets/images/ff.jpg') !important;
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

        .sidebar-menu .treeview-menu>li.active>a {
            color: #222d32 !important;
        }



        .card-header {

            background-color: #778899 !important;
            color: white !important;

        }


        .modal-header {
            background-color: #778899 !important;
            color: white !important;
        }


        tr {
            width: 100%;
            display: inline-table;
            table-layout: fixed;
        }

        table {
            height: 300px;
            display: -moz-groupbox;
        }

        tbody {
            overflow-y: scroll;
            height: 250px;
            width: 100%;
            position: absolute;
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

            <a href="index" class="nav-brand">
                <img class="img-fluid logo" src="/assets/images/cat.jpg" alt="Theme-logo">
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
                    <p>
                        <b>Juliamar</b>
                    </p>
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
                    <span >
                        <h6 class="text-center" ><b><span style="color:  #222d32" >Hello</span><span class="text text-success">!</span> </b><span class="text text-primary">Engineer</span></h6>
                    </span>
                    <hr> 
                </li>
                <li class=" treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Home">
                        <i class="icon-speedometer"></i>
                        <span> Dashboard</span>
                    </a>
                </li>
                
                <li class=" treeview">
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
                



                







                <li class="active treeview">
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





    <div class="content-wrapper" style="margin-top: 30px">
        <!-- Container-fluid starts -->
        <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row" style="margin-top: -10px">
                <div class="col-sm-9 p-0">
                    <div class="main-header">
                        <h4>
                            <i class="icon-graph"></i> Materials Usage </h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index"></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/Engineer/Engineer-Projects" data-toggle="tooltip" data-placement="top" title="Back">
                                    <span class="text text-primary">Materials Table</span>
                                </a>
                            </li>

                        </ol>






                    </div>

                </div>











                <br>



                <!-- Show Report Button trigger-->
              
                <br>
            </div>
            <!-- Header end -->

            <!-- Tables start -->
            <br>
            <!-- Row start -->
            <div class="row">
                <div class="col-sm-12">


                    <!-- Contextual classes table starts -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Materials Usage</h5>

                        </div>
                        <div class="card-block">
                            <!-- Row start -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="table-responsive ">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Line Item</th>
                                                            <th>Description</th>
                                                            <th class="text-center" style="background-color: coral;  color: black !important">Estimated Qty</th>
                                                            <th class=" text-center" style="background-color: coral;  color: black !important">Unit</th>
                                                            
                                                            <th class=" text-center" style="background-color: lightgreen; color: black !important">Qty Used</th>
                                                            <th style="background-color: lightgreen; color: black !important">Unit</th>
                                                            


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- DYNAMIC DATA -->
                                                        <!-- For Category -->
                                                     
                                                            
                                                          

                                                            <!-- For SubCategory -->
                                                                
                                                                <tr class="table-active">
                                                                    <td>
                                                                        <b style="padding-left: 30px;"> >&nbsp;Slab</b>
                                                                    </td>
                                                                </tr>
                                                                

                                                                            <tr>
                                                                                <td class="text-center">1</td>

                                                                                <td>Cement</td>
                                                                                <td class="text-center " style="background-color: coral;  color: black !important">10</td>
                                                                                <th class="text-center" style="background-color: coral;   !important">Bag</th>
                                                                               
                                                                                <th class="text-center " style="background-color: lightgreen; color: black !important">
                                                                                    <b>3</b>
                                                                                </th>
                                                                                <th style="background-color: lightgreen;color: black !important">
                                                                                    <b>Bag</b>
                                                                                </th>
                                                                               
                                                                            </tr>
                                                                      
                                                                            <tr>

                                                                                <td class="text-center">2</td>

                                                                                <td>Sand</td>
                                                                                <td class="text-center " style="background-color: coral;  color: black !important">10</td>
                                                                                <th class="text-center" style="background-color: coral;   !important">Cu.M</th>
                                                                               
                                                                                <th class="text-center " style="background-color: lightgreen; color: black !important">
                                                                                    <b>5</b>
                                                                                </th>
                                                                                <th style="background-color: lightgreen;color: black !important">
                                                                                    <b>Cu.M</b>
                                                                                </th>
                                                                               
                                                                            </tr>
                                                                         <tr class="table-active">
                                                                    <td>
                                                                        <b style="padding-left: 30px;"> >&nbsp;Column</b>
                                                                    </td>
                                                                </tr>
                                                                        <tr>

                                                                            <td class="text-center">1</td>

                                                                            <td>Cement</td>
                                                                            <td class="text-center " style="background-color: coral;  color: black !important">8</td>
                                                                            <th class="text-center" style="background-color: coral;   !important">Bag</th>
                                                                           
                                                                            <th class="text-center " style="background-color: lightgreen; color: black !important">
                                                                                <b>3</b>
                                                                            </th>
                                                                            <th style="background-color: lightgreen;color: black !important">
                                                                                <b>Cu.M</b>
                                                                            </th>
                                                                           
                                                                        </tr>
                                                                     
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>













                                    </div>
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





                        <!-- view project details modal -->

                        <div class="modal fade" id="viewProjectDetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            <span class="label label-info">Project Details</span>
                                        </h4>
                                    </div>
                                    <div class="modal-body">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <!-- Add project Modal -->

                        <div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content pull-center">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            <span class="label label-info">Add Project</span>
                                        </h4>
                                    </div>
                                    <div class="modal-body" style="background: #e5e5f2 !important; ">




                                        <form action="/action_page.php">

                                            <label class="text text-muted" style="margin-left: 450px">
                                                <i>07 August 2018</i>
                                            </label>
                                            <!-- current date -->
                                            <br>
                                            <div class="form-group">
                                                <label for="addProjectName">Project Name:</label>
                                                <input type="text" class="form-control" id="projectName">
                                            </div>

                                            <label class="text text-muted">
                                                <i>Assign</i>
                                            </label>

                                            <div class="form-group form-inline">
                                                <label for="projectClient">Client:</label>
                                                <select class="form-control" name="projectClient" id="projectClient" style="width: 200px !important;">
                                                    <option selected>Julia </option>
                                                    <!-- sample -->
                                                    <option>Erwin </option>
                                                    <option>Dustin </option>
                                                    <option>Ros </option>
                                                </select>

                                                <label for="projectEngineer">Engineer:</label>
                                                <select class="form-control" name="projectEngineer" id="projectEngineer" style="width: 200px !important;">
                                                    <option selected>Erwin </option>
                                                    <!-- sample -->
                                                    <option>Julia </option>
                                                    <option>Dustin </option>
                                                    <option>Ros </option>
                                                </select>
                                            </div>




                                            <div class="form-group">
                                                <label> Project Description: </label>
                                                <br>
                                                <textarea rows="4" cols="68" placeholder="Project Details...">

                                                </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="addProjectlocation">Location:</label>
                                                <input type="text" class="form-control" id="projectLocation">
                                            </div>
                                            <hr>
                                            <div class="modal-footer">

                                                <button type="submit" class="btn btn-success" data-dismiss="modal">
                                                    <i class="icon icon-check"> </i>Add Project</button>
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
</body>

</html>
