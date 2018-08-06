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
                <li class=" treeview">
                    <a class="waves-effect waves-dark" href="index">
                        <i class="icon-speedometer"></i>
                        <span> Dashboard</span>
                    </a>
                </li>






                <li class="active treeview">
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
                            <a class="waves-effect waves-dark" href="cost%20estimation">
                                <i class="icon-arrow-right"></i> Cost Estimation</a>
                        </li>
                        <li class="active">
                            <a class="waves-effect waves-dark" href="actuals">
                                <i class="icon-arrow-right"></i> Actuals</a>
                        </li>
                    </ul>
                </li>




                <li class=" treeview">
                    <a class="waves-effect waves-dark" href="materials%20pricelist">
                        <i class="icon-notebook"></i>
                        <span> Materials PriceList</span>
                    </a>
                </li>







                <li class="treeview">
                    <a class="waves-effect waves-dark" href="projectprogress">
                        <i class="icon-chart"></i>
                        <span> Project Plan</span>
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

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="accountsettings">
                        <i class="icon-people"></i>
                        <span> Account Setting</span>
                    </a>
                </li>


    </aside>

    <!--tabs-->

    <div class="container" style="position: absolute; margin-top: 43px; margin-left: 220px">

        <ul class="nav nav-tabs" style="background-color: #f2f2f2">



            <li>
                <a href="index">Dashboard</a>
            </li>

            <li class="active">
                <a href="#">Cost</a>
            </li>
            <li>
                <a href="materials%20pricelist">PriceList</a>
            </li>
            <li>
                <a href="projectprogress">Project Plan</a>
            </li>
            <li>
                <a href="calendar">Calendar</a>
            </li>
            <li>
                <a href="inbox">Inbox</a>
            </li>
            <li>
                <a href="accountsettings">Account Settings</a>
            </li>

        </ul>
    </div>







    <!-- Add material Modal -->

    <div class="modal fade" id="addMaterial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span class="label label-info">Add Material</span>
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
                            <label for="materialDesc">Description:</label>
                            <input type="text" class="form-control" id="materialDesc">
                        </div>
                        <br>
                        <div class="form-group form-inline">
                            <label for="materialQty">Quantity:</label>
                            <input type="number" class="form-control" id="materialQty" style="width: 150px !important;" placeholder="Select quantity">
                            <label for="materialUnit" placeholder="Enter Unit">Unit:</label>
                            <input type="type" class="form-control" id="materialUnit" style="width: 130px !important;" placeholder="Enter Unit">
                            <label for="materialPrice">Price:</label>
                            <input type="type" class="form-control" id="materialPrice" style="width: 130px !important;" placeholder="Enter Price">
                        </div>



                        <div class="modal-footer">
                            <hr>
                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                <i class="icon icon-check"> </i>Add Material</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                <i class="icon icon-close"> </i>Cancel</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>





    <!-- Add Actuals Modal -->

    <div class="modal fade" id="addActuals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span class="label label-info">Actuals Entry</span>
                    </h4>
                </div>
                <div class="modal-body" style="background: #e5e5f2 !important; ">




                    <form action="/action_page.php">

                        <label class="text text-muted" style="margin-left: 450px">
                            <i>07 August 2018</i>
                        </label>
                        <!-- current date -->
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="actualDesc">Description:</label>
                            <input type="text" class="form-control" id="actualDesc" style="width: 550px !important;">
                        </div>
                        <div class="form-group form-inline">
                            <label for="ActualPrice">Price:</label>
                            <input type="text" class="form-control" id="actualPrice" style="width: 200px !important;" placeholder="₱">



                            <label for="ActualPrice">Quantity:</label>
                            <input type="number" class="form-control" id="actualQuantity" style="width: 100px !important;">
                        </div>

                        <div class="form-group form-inline">
                            <label for="usertype">
                                <i>As of</i>:</label>
                            <br>
                            <select class="form-control" name="month" id="month" style="width: 150px !important;">
                                <option>January </option>
                                <option>February </option>
                                <option>March </option>
                                <option>April </option>
                                <option>May </option>
                                <option>June </option>
                                <option>July </option>
                                <option selected>August </option>
                                <option>September </option>
                                <option>October</option>
                                <option>November </option>
                                <option>December </option>

                            </select>

                            <select class="form-control" name="day" id="day" style="width: 80px !important;">
                                <option>1 </option>
                                <option>2 </option>
                                <option>3 </option>
                                <option>4 </option>
                                <option>5 </option>
                                <option>6 </option>
                                <option selected>7 </option>
                                <option>8 </option>
                                <option>9 </option>
                                <option>10 </option>
                                <option>11 </option>
                                <option>12 </option>
                                <option>13 </option>
                                <option>14 </option>
                                <option>15 </option>
                                <option>16 </option>
                                <option>17 </option>
                                <option>18 </option>
                                <option>19 </option>
                                <option>20 </option>
                                <option>21 </option>
                                <option>22 </option>
                                <option>23 </option>
                                <option>24 </option>
                                <option>25 </option>
                                <option>26 </option>
                                <option>27 </option>
                                <option>28 </option>
                                <option>29 </option>
                                <option>30 </option>
                                <option>31 </option>
                            </select>

                            <select class="form-control" name="year" id="year" style="width: 80px !important;">
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018" selected>2018</option>
                            </select>



                        </div>


                        <hr>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                <i class="icon icon-check"> </i>Add Entry</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                <i class="icon icon-close"> </i>Cancel</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>




            
            
    <!-- Add Custom Actual Modal -->

    <div class="modal fade" id="addCustomActual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span class="label label-info">Custom Actual Entry</span>
                    </h4>
                </div>
                <div class="modal-body" style="background: #e5e5f2 !important; ">




                    <form action="/action_page.php">

                        <label class="text text-muted" style="margin-left: 450px">
                            <i>07 August 2018</i>
                        </label>
                        <!-- current date -->
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="actualDesc">Description:</label>
                            <input type="text" class="form-control" id="actualDesc" style="width: 550px !important;">
                        </div>
                        <div class="form-group form-inline">
                            <label for="ActualPrice">Price:</label>
                            <input type="text" class="form-control" id="actualPrice" style="width: 200px !important;" placeholder="₱">


                        </div>



                        <hr>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                <i class="icon icon-check"> </i>Add Entry</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                <i class="icon icon-close"> </i>Cancel</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
        
            
            
            
            
        
            
            
        <!-- Add From Materials Actuals Modal -->

    <div class="modal fade" id="addMaterialActual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span class="label label-info">Material Actual Entry</span>
                    </h4>
                </div>
                <div class="modal-body" style="background: #e5e5f2 !important; ">




                    <form action="/action_page.php">

                        <label class="text text-muted" style="margin-left: 450px">
                            <i>07 August 2018</i>
                        </label>
                        <!-- current date -->
                   
                        <br>
                        <br>
                        
                        
                       <div> 
                           <label>Category: </label>
                           <select class="form-control" name="category" id="category" placeholder="Category" style="width: 300px !important;">
                                <option>Concrete Slab </option>
                                <option>Tiles </option>
                                <option>Walls </option>
                                <option>Paint </option>
                                <option>Footing </option>
                                <option>Column </option>
                                <option>Footing Tie Beam </option>
                                <option>Floor Beam </option>
                                <option>Roof Beam </option>
                                <option>Conrete Slab 2nd floor</option>
                                <option>Ceiling works </option>
                                <option>Roof</option>
                                <option>Door and Windows </option>
                                <option>Footing Tie Beam </option>
                                <option>Septic Tank </option>
                           
                            </select>
                     </div>     
                        
                         <br>
                        <div> 
                           <label>Material: </label>

                            <select class="form-control" name="material" id="material" placeholder="Material/s" style="width: 300px !important;">
                                <option>Cement</option>
                                <option>Sand</option>
                                <option>Gravel</option>
                                <option>10 mm bars</option>
                                <option>Tie Wire </option>
                                <option>Gravel Bedding </option>
                          
                            </select>
                     </div> 
                            
                          <br> <br>  
                        
                        <div class="form-group form-inline">
                            <label>Qty:</label>
                            <input type="number" class="form-control" id="" style="width: 90px !important;">
                     
                            <label>Unit:</label>
                            <input type="text" class="form-control" id="" style="width: 130px !important;">



                            <label for="ActualPrice">Unit Cost:</label>
                            <input type="text" class="form-control" id="" style="width: 130px !important;" placeholder="₱">
                            
                            
                        </div>

                        
                        <div class="form-group" > 
                        
                        <label for="ActualPrice">Total Unit Cost:</label>
                            <input type="text" class="form-control" id="" style="width: 500px !important;"  placeholder="₱">
                        </div> 


                        <hr>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                <i class="icon icon-check"> </i>Add Entry</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                <i class="icon icon-close"> </i>Cancel</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
    
            
            
            
            
            
            
        <!-- Add New Material Actuals Modal -->

    <div class="modal fade" id="addNewMaterialActual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span class="label label-info">Add Material Actual Entry</span>
                    </h4>
                </div>
                <div class="modal-body" style="background: #e5e5f2 !important; ">




                    <form action="/action_page.php">

                        <label class="text text-muted" style="margin-left: 450px">
                            <i>07 August 2018</i>
                        </label>
                        <!-- current date -->
                        <br>
                
                        <div> 
                           <label>Material: </label>

                            <select class="form-control" name="material" id="material" placeholder="Material/s" style="width: 300px !important;">
                                <option>Cement</option>
                                <option>Sand</option>
                                <option>Gravel</option>
                                <option>10 mm bars</option>
                                <option>Tie Wire </option>
                                <option>Gravel Bedding </option>
                          
                            </select>
                     </div> 
                            
                          <br> <br>  
                        
                        <div class="form-group form-inline">
                            <label>Qty:</label>
                            <input type="number" class="form-control" id="" style="width: 90px !important;">
                     
                            <label>Unit:</label>
                            <input type="text" class="form-control" id="" style="width: 130px !important;">



                            <label for="ActualPrice">Unit Cost:</label>
                            <input type="text" class="form-control" id="" style="width: 130px !important;" placeholder="₱">
                            
                            
                        </div>

                        
                        <div class="form-group" > 
                        
                        <label for="ActualPrice">Total Unit Cost:</label>
                            <input type="text" class="form-control" id="" style="width: 500px !important;"  placeholder="₱">
                        </div>
                       


                        <hr>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                <i class="icon icon-check"> </i>Add Entry</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                <i class="icon icon-close"> </i>Cancel</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
            
            
            
            
            
            
            
            
            
            
            <!-- Update Actuals Modal -->

    <div class="modal fade" id="updateActuals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span class="label label-info">Update Actual Entry</span>
                    </h4>
                </div>
                <div class="modal-body" style="background: #e5e5f2 !important; ">




                    <form action="/action_page.php">

                        <label class="text text-muted" style="margin-left: 450px">
                            <i>07 August 2018</i>
                        </label>
                        <!-- current date -->
                        <br>
                
                        <div> 
                           <label>Material: </label>

                            <select class="form-control" name="material" id="material" placeholder="Material/s" style="width: 300px !important;">
                                <option>Cement</option>
                                <option>Sand</option>
                                <option>Gravel</option>
                                <option>10 mm bars</option>
                                <option>Tie Wire </option>
                                <option>Gravel Bedding </option>
                          
                            </select>
                     </div> 
                            
                          <br> <br>  
                        
                        <div class="form-group form-inline">
                            <label>Qty:</label>
                            <input type="number" class="form-control" id="" style="width: 90px !important;">
                     
                            <label>Unit:</label>
                            <input type="text" class="form-control" id="" style="width: 130px !important;">



                            <label for="ActualPrice">Unit Cost:</label>
                            <input type="text" class="form-control" id="" style="width: 130px !important;" placeholder="₱">
                            
                            
                        </div>

                        
                        <div class="form-group" > 
                        
                        <label for="ActualPrice">Total Unit Cost:</label>
                            <input type="text" class="form-control" id="" style="width: 500px !important;"  placeholder="₱">
                        </div>
                       


                        <hr>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                <i class="icon icon-check"> </i>Add Entry</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                <i class="icon icon-close"> </i>Cancel</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
         
            
            
            
            






    <!-- Update material price Modal -->

    <div class="modal fade" id="updatePrice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span class="label label-info">Update Price</span>
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
                            <label for="updatePrice">Price:</label>
                            <input type="text" class="form-control" id="materialDesc" style="width: 300px !important;">
                        </div>

                        <div class="form-group form-inline">
                            <label for="usertype">
                                <i>As of</i>:</label>
                            <br>
                            <select class="form-control" name="month" id="month" style="width: 150px !important;">
                                <option>January </option>
                                <option>February </option>
                                <option>March </option>
                                <option>April </option>
                                <option>May </option>
                                <option>June </option>
                                <option>July </option>
                                <option selected>August </option>
                                <option>September </option>
                                <option>October</option>
                                <option>November </option>
                                <option>December </option>

                            </select>

                            <select class="form-control" name="day" id="day" style="width: 80px !important;">
                                <option>1 </option>
                                <option>2 </option>
                                <option>3 </option>
                                <option>4 </option>
                                <option>5 </option>
                                <option>6 </option>
                                <option selected>7 </option>
                                <option>8 </option>
                                <option>9 </option>
                                <option>10 </option>
                                <option>11 </option>
                                <option>12 </option>
                                <option>13 </option>
                                <option>14 </option>
                                <option>15 </option>
                                <option>16 </option>
                                <option>17 </option>
                                <option>18 </option>
                                <option>19 </option>
                                <option>20 </option>
                                <option>21 </option>
                                <option>22 </option>
                                <option>23 </option>
                                <option>24 </option>
                                <option>25 </option>
                                <option>26 </option>
                                <option>27 </option>
                                <option>28 </option>
                                <option>29 </option>
                                <option>30 </option>
                                <option>31 </option>
                            </select>

                            <select class="form-control" name="year" id="year" style="width: 80px !important;">
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018" selected>2018</option>
                            </select>



                        </div>


                        <hr>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                <i class="icon icon-check"> </i>Update Price</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                <i class="icon icon-close"> </i>Cancel</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>





    <!-- View Audit Trail Modal -->

    <div class="modal fade" id="viewAudit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span style="color: white">
                            <b>Audit Trail</b>
                        </span>
                    </h4>
                </div>
                <div class="modal-body" style="background: #e5e5f2 !important; ">




                    <form action="/action_page.php">


                        <br>
                        <div class="form-group">
                            <label for="materialDesc">Description:</label>
                            <input type="text" class="form-control" id="materialDesc" style="width: 300px !important;" value="Cement" disabled>

                        </div>

                        <div class="form-group form-inline">





                            <label for="usertype">
                                <i>As of</i>:</label>
                            <br>
                            <select class="form-control pull-center text-center" name="month" id="month" style="width: 500px !important;">
                                <option>January-07-2018 </option>
                                <option>January-20-2018</option>
                                <option>February-26-2018 </option>
                                <option>March-23-2018 </option>
                                <option>April-4-2018 </option>
                                <option>April-27-2018 </option>
                                <option>May-14-2018</option>
                                <option>June-8-2018 </option>
                                <option>July-22-2018 </option>
                                <option selected>Aug-7-2018 </option>

                            </select>


                            &nbsp; &nbsp;

                        
                        </div>

                              <div class="form-group form-inline">
                            <label>Qty:</label>
                            <input type="number" class="form-control" id="" style="width: 90px !important;" placeholder="2" disabled>
                     
                            <label>Unit:</label>
                            <input type="text" class="form-control" id="" style="width: 130px !important;" placeholder="Bags" disabled>



                            <label for="ActualPrice">Unit Cost:</label>
                            <input type="text" class="form-control" id="" style="width: 130px !important;" placeholder="₱250.0" disabled>
                            
                            
                        </div>

                        
                        <div class="form-group" > 
                        
                        <label for="ActualPrice">Total Unit Cost:</label>
                            <input type="text" class="form-control" id="" style="width: 500px !important;"  placeholder="₱500.0" disabled>
                        </div>

                        <div class="modal-footer">
                            <hr>

                            <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left: 280px" >
                                <i class="icon icon-close"> </i>Close</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>























    <!-- View Price History Modal -->

    <div class="modal fade" id="viewPriceHistory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span style="color: white">
                            <b>Price History</b>
                        </span>
                    </h4>
                </div>
                <div class="modal-body" style="background: #e5e5f2 !important; ">




                    <form action="/action_page.php">


                        <br>
                        <div class="form-group">
                            <label for="materialDesc">Description:</label>
                            <input type="text" class="form-control" id="materialDesc" style="width: 300px !important;" value="Cement" disabled>

                        </div>

                        <div class="form-group form-inline">





                            <label for="usertype">
                                <i>As of</i>:</label>
                            <br>
                            <select class="form-control pull-center text-center" name="month" id="month" style="width: 300px !important;">
                                <option>January-07-2018 </option>
                                <option>January-20-2018</option>
                                <option>February-26-2018 </option>
                                <option>March-23-2018 </option>
                                <option>April-4-2018 </option>
                                <option>April-27-2018 </option>
                                <option>May-14-2018</option>
                                <option>June-8-2018 </option>
                                <option>July-22-2018 </option>
                                <option selected>Aug-7-2018 </option>

                            </select>


                            &nbsp; &nbsp;

                            <label for="materialPrice">Price:</label>
                            <input type="text" class="form-control" id="materialPrice" style="width: 120px !important;" value="150" disabled>
                        </div>



                        <div class="modal-footer">
                            <hr>
                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                <i class="icon icon-check"> </i>Add Material</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                <i class="icon icon-close"> </i>Cancel</button>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>






    <div class="content-wrapper" style="margin-top: 90px">
        <!-- Container-fluid starts -->
        <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row" style="margin-top: -10px">
                <div class="col-sm-9 p-0">
                    <div class="main-header">
                        <h4>
                            <i class="icon icon-note"></i> Actuals</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index"></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Actuals List</a>
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

                            <div class="form-group" style="margin-left: 10px">
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















                <!-- Add 3 Actuals Modal Button trigger-->
                <div class="col-sm-3 pull-right">
                    <br>
                    <br>
                    <button type="button" data-toggle="modal" data-target="#addCustomActual" class="btn btn-success waves-effect waves-light"
                        style=" margin-top: -30px"> 
                        <i class="icon-plus"> </i>Add Custom Actual </button> <br> <br> 
                    <button type="button" data-toggle="modal" data-target="#addMaterialActual" class="btn btn-primary waves-effect waves-light"
                        style=" margin-top: -20px">
                        <i class="icon-plus"> </i>Add from Materials  Actual</button> <br> <br> 
                    <button type="button" data-toggle="modal" data-target="#addNewMaterialActual" class="btn btn-danger waves-effect waves-light"
                        style=" margin-top: -10px">
                        <i class="icon-plus"> </i>Add New Material Actual</button><br> <br> 
                </div>




            </div>
            <!-- Header end -->

            <!-- Tables start -->
            <!-- Row start -->
            <div class="row">
                <div class="col-sm-12 ">


                    <!-- Contextual classes table starts -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Actuals List</h5>

                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr class="table-active">
                                                <th style="color: black">#</th>
                                                <th style="color: black">Description</th>
                                                <th style="color: black">Quantity</th>
                                                <th style="color: black">Unit</th>
                                                <th style="color: black">Unit Cost</th>
                                                <th style="color: black">Total Unit Cost</th>
                                                <th class="text-center">
                                                    <span class="text text-danger"> Action</span>
                                                </th>
                                                <th></th>





                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-info">
                                                <td class="text-center">01</td>
                                                <td class="text-center">Cement
                                                    <p>
                                                        <i class="icofont icofont-clock-time"></i>Updated</p>
                                                </td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">bags</td>
                                                <td class="text-center">250.0</td>
                                                <td class="text-center">500.0</td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#updateActuals" class="btn label label-warning">Update Entry</button>
                                                </td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#viewAudit" class="btn label label-light ">
                                                        <span style="color: dimgray">Audit Trail</span>
                                                    </button>
                                                </td>
                                            </tr>

                                           <tr>
                                                <td class="text-center">02</td>
                                                <td class="text-center">Metal Pipe
                                                    <p>
                                                        <i class="icofont icofont-clock-time"></i>Updated</p>
                                                </td>
                                                <td class="text-center">4</td>
                                                <td class="text-center">pcs</td>
                                                <td class="text-center">350.0</td>
                                                <td class="text-center">1400.0</td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#updateActuals" class="btn label label-warning">Update Entry</button>
                                                </td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#viewAudit" class="btn label label-light ">
                                                        <span style="color: dimgray">Audit Trail</span>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr class="table-info">
                                                <td class="text-center">03</td>
                                                <td class="text-center">Steel Bar
                                                    <p>
                                                        <i class="icofont icofont-clock-time"></i>Updated</p>
                                                </td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">pcs</td>
                                                <td class="text-center">800</td>
                                                <td class="text-center">1600.0</td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#updateActuals" class="btn label label-warning">Update Entry</button>
                                                </td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#viewAudit" class="btn label label-light ">
                                                        <span style="color: dimgray">Audit Trail</span>
                                                    </button>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-center">04</td>
                                                <td class="text-center">Gravel
                                                    <p>
                                                        <i class="icofont icofont-clock-time"></i>Updated</p>
                                                </td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">bags</td>
                                                <td class="text-center">450</td>
                                                <td class="text-center">900.0</td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#updateActuals" class="btn label label-warning">Update Entry</button>
                                                </td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#viewAudit" class="btn label label-light ">
                                                        <span style="color: dimgray">Audit Trail</span>
                                                    </button>
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
