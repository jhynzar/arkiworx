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

       .scroll {
    max-height: 400px;
    overflow-y: auto;
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
                    <a class="waves-effect waves-dark" href="/Engineer/Home">
                        <i class="icon-speedometer"></i>
                        <span> Dashboard</span>
                    </a>
                </li>



                   <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Engineer-Projects">
                        <i class="icon-briefcase"></i>
                        <span> Projects</span>
                    </a>
                </li>
                 <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Cost-Estimation">
                        <i class="icon-calculator"></i>
                        <span> Estimation</span>
                    </a>
                </li>


                <li class=" treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Materials-Pricelist">
                        <i class="icon-notebook"></i>
                        <span> Materials PriceList</span>
                    </a>
                </li>



                <li class="active   treeview">
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







    <div class="content-wrapper" style="margin-top: 45px">

         <!-- Container-fluid starts -->
        <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row" style="margin-top: -10px">
                <div class="col-sm-9 p-0">
                    <div class="main-header">
                        <h4>
                            <i class="icon-chart"> </i> Project Plan</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index"></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Project Schedule</a>
                            </li>

                        </ol>







                        <div class="input-group stylish-input-group" style="position: absolute; margin-top: -40px; margin-left: 300px">
                            <input type="text" class="form-control" placeholder="Search " style="width: 400px">
                            <button type="submit" class="btn btn-primary">
                                <span class="icon-magnifier"></span>
                            </button>

                        </div>

                        <div class="form-inline">
                            <br>

                            <div class="form-group" style="margin-left: 20px">
                                <label for="showProject" class="text text-muted">Show</label>
                                <select class="form-control" name="sex" id="userType" style="width: 70px; height: 35px !important;">
                                    <option selected> 50 </option>
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
                                <label class="text text-muted"> Item</label>
                            </div>
                        </div>


                    </div>

                </div>




















            </div>
            <!-- Header end -->

            <!-- Tables start -->
            <!-- Row start -->


            <div class="row">


                <!-- start col-lg-9 -->
                <div class="col-xl-12 col-lg-12">
                    <!-- Nav tabs -->

                    <!-- end of tab-header -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">




                            <div class="card">
                                <div class="card-header" style="background-color: #05D85C; color: white">
                                    <h5 class="card-header-text">On-going Projects</h5>

                                </div>
                                <!-- end of card-header  -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="project-table">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center txt-primary pro-pic">Line Item</th>
                                                            <th class="text-center txt-primary">Client</th>
                                                            <th class="text-center txt-primary pro-pic">Project Name</th>
                                                            <th class="text-center txt-primary">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                       
                                                        <tr class= "table-success">
                                                             
                                                      
                                                            <td>1</td>
                                                            <td>
                                                                <img src="/assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                            </td>
                                                            <td>Project 1</td>



                                                            <td class="faq-table-btn">

                                                                <a href="#" data-toggle="modal" data-target="#createProjectSchedule" class="btn btn-success waves-effect waves-light" data-toggle="tooltip"
                                                                    data-placement="top" title="Create">
                                                                    <i class="icofont icofont-ui-edit"></i> Create Project Schedule </a>


                                                            </td>

                                                        </tr>
                                                      

                                                    </tbody>
                                                </table>
                                                <!-- end of table -->
                                            </div>
                                            <!-- end of table responsive -->
                                        </div>
                                        <!-- end of project table -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>




                        </div>
                        <!-- end of tab-pane -->
                        <!-- end of about us tab-pane -->

                        <!-- start tab-pane of project tab -->
                        <div class="tab-pane" id="project" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Project List</h5>

                                </div>
                                <!-- end of card-header  -->

                                <!-- end of card-main -->
                            </div>
                            <!-- end of project pane -->


                        </div>
                        <!-- end of main tab content -->
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
                
                 <!-- create project schedule modal -->

                <div class="modal fade" id="createProjectSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-success" >
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <span style="color: white" >Estimated Project Schedule</span>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body scroll" >
                                 <div class="form-group form-inline">
                        <h6 class="text text-default" style="margin-left: 380px">ACTIVITIES:</h6> <br> <br>
                                   
                                     <label class="text text-primary"> Task 1</label> &nbsp;&nbsp;&nbsp;
                        <input type="text" name="" class="form-control" id="" style="width:400px" placeholder="General Requirements" disabled> <br> <br>
                                     <label for="sex">Start Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label> 
                                <input type="date" name="" class="form-control" id="" style="width:180px" >
                                    &nbsp; &nbsp;  <label for="sex">End Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                      <input type="date" name="" class="form-control" id="" style="width:180px" >
                                      &nbsp; &nbsp;  <label for="sex">Dependencies <i class="icon-organization text text-primary"></i>&nbsp;: &nbsp;</label>
                                      <select class="form-control" style="width: 100px" disabled> 
                                     <option></option>
                                          <option></option>
                                     </select>
                    </div>
                                
                                   <div class="form-group form-inline">
                        <br> <br>
                                       <label class="text text-primary"> Task 2</label> &nbsp;&nbsp;&nbsp;
                        <input type="text" name="" class="form-control" id="" style="width:400px" placeholder="Site Preparation" disabled> <br> <br>
                                      <label for="sex">Start Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label> 
                                <input type="date" name="" class="form-control" id="" style="width:180px" >
                                    &nbsp; &nbsp;  <label for="sex">End Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                      <input type="date" name="" class="form-control" id="" style="width:180px" >
                                      &nbsp; &nbsp;  <label for="sex">Dependencies <i class="icon-organization text text-primary"></i>&nbsp;: &nbsp;</label>
                                      <select class="form-control" style="width: 100px"> 
                                     <option>Task 1</option>
                                       
                                     </select>
                    </div>
                                
                                 <div class="form-group form-inline">
                        <br> <br>
                                     <label class="text text-primary"> Task 3</label> &nbsp;&nbsp;&nbsp;
                        <input type="text" name="" class="form-control" id="" style="width:400px" placeholder="Columns" disabled> <br> <br>
                                     <label for="sex">Start Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label> 
                                <input type="date" name="" class="form-control" id="" style="width:180px" >
                                    &nbsp; &nbsp;  <label for="sex">End Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                      <input type="date" name="" class="form-control" id="" style="width:180px" >
                                      &nbsp; &nbsp;  <label for="sex">Dependencies <i class="icon-organization text text-primary"></i>&nbsp;: &nbsp;</label>
                                      
                                      <select class="form-control" style="width: 100px" > 
                                     <option>Task 1 </option>
                                          <option> Task 2</option>
                                     </select>
                    </div>
                                
                                 <div class="form-group form-inline">
                        <br> <br>
                                     <label class="text text-primary"> Task 4</label> &nbsp;&nbsp;&nbsp;
                        <input type="text" name="" class="form-control" id="" style="width:400px" placeholder="Concrete Slab" disabled> <br> <br>
                                    <label for="sex">Start Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label> 
                                <input type="date" name="" class="form-control" id="" style="width:180px" >
                                    &nbsp; &nbsp;  <label for="sex">End Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                      <input type="date" name="" class="form-control" id="" style="width:180px" >
                                      &nbsp; &nbsp;  <label for="sex">Dependencies <i class="icon-organization text text-primary"></i>&nbsp;: &nbsp;</label>
                                      
                                      <select class="form-control" style="width: 100px" > 
                                     <option> Task 1</option>
                                          <option>Task 2</option>
                                          <option>Task 3</option>
                                     </select>
                    </div>
                                
                                
                                
                            </div>
                            <div class="modal-footer" >
                                <button type="button" class="btn btn-success"  >Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                               
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

                                    <div class="modal-footer">
                                        <hr>
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
        
        <script>
         $(function () {
   var bindDatePicker = function() {
		$(".date").datetimepicker({
        format:'YYYY-MM-DD',
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-arrow-up",
				down: "fa fa-arrow-down"
			}
		}).find('input:first').on("blur",function () {
			// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
			// update the format if it's yyyy-mm-dd
			var date = parseDate($(this).val());

			if (! isValidDate(date)) {
				//create date based on momentjs (we have that)
				date = moment().format('YYYY-MM-DD');
			}

			$(this).val(date);
		});
	}
   
   var isValidDate = function(value, format) {
		format = format || false;
		// lets parse the date to the best of our knowledge
		if (format) {
			value = parseDate(value);
		}

		var timestamp = Date.parse(value);

		return isNaN(timestamp) == false;
   }
   
   var parseDate = function(value) {
		var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
		if (m)
			value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

		return value;
   }
   
   bindDatePicker();
 });
        </script>
        
</body>

</html>
