@extends('layouts.master')

@section('body')
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
                    <a class="waves-effect waves-dark" href="/Engineer/Home">
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
                            <a class="waves-effect waves-dark" href="/Engineer/Cost-Summary">
                                <i class="icon-arrow-right"></i> Cost Summary</a>
                        </li>
                        <li class="active">
                            <a class="waves-effect waves-dark" href="/Engineer/Cost-Estimation">
                                <i class="icon-arrow-right"></i> Cost Estimation</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="/Engineer/Actuals">
                                <i class="icon-arrow-right"></i> Actuals</a>
                        </li>
                    </ul>
                </li>




                <li class=" treeview">
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
                            <input type="text" class="form-control" id="actualDesc" style="width: 300px !important;">
                        </div>
                        <div class="form-group">
                            <label for="ActualPrice">Price:</label>
                            <input type="text" class="form-control" id="actualPrice" style="width: 200px !important;">
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





    <!-- Update Actuals Modal -->

    <div class="modal fade" id="updateActuals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content pull-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <span class="label label-info">Update Actuals</span>
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
                            <input type="text" class="form-control" id="actualDesc" style="width: 300px !important;">
                        </div>
                        <div class="form-group">
                            <label for="ActualPrice">Price:</label>
                            <input type="text" class="form-control" id="actualPrice" style="width: 200px !important;">
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
                                <i class="icon icon-check"> </i>Update Entry</button>
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

                            <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left: 280px">
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






    <div class="content-wrapper" style="margin-top: 30px">
        <!-- Container-fluid starts -->
        <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row" style="margin-top: -10px">
                <div class="col-sm-9 p-0">
                    <div class="main-header">
                        <h4>
                            <i class="icon-calculator"> </i> Cost </h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index"></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Cost Estimation</a>
                            </li>

                        </ol>

                    </div>
                    
                    <!--
                    <div class="form-group form-inline" style="width: 600px; margin-left: 380px; margin-top: -50px !important;" >
                                                                <h5 for="" class="text text-primary" >Estimation for Project:</h5> 
                                                                <input type="text" style="width: 300px" class="form-control text-center" id=""  value="Project 2" disabled>
                                                               
                                                            </div>  -->
                    
                     <div style=" position: absolute; margin-top: -50; margin-left: 300px" >
                            <label class="text text-muted">Project:</label>
                            <select class="form-control text text-primary" name="project" id="project" style="width: 400px; height: 40px !important;" disabled>

                                <option> Soriano Residence </option>
                                <option> Andres Residence </option>
                                <option> Dela Pena Residence </option>
                                <option> Alpasar Residence </option>
                                <option> Reodica Residence </option>
                                <option> Ascano Residence </option>
                                <option> Macaya Residence </option>
                                <option> Santos Residence </option>
                                <option> Moina Residence </option>
                                <option selected> Javier Residence </option>



                            </select>
                        </div>
                </div>
                
                
                
                                                          

                        </div>
                
                <br> <br>
                
                
    <!-- Row start -->
    <div class="row">
      <!-- Multiple Open Accordion start -->
      <div class="col-lg-12">
        <div class="card" style="height: 3200px">
          <div class="card-header" style="background-color: #778899">
            <h5 class="card-header-text">2 - Storey Project</h5>
          </div>
            
          <div class="card-block accordion-block">
              
                    <div class="col-lg-11">
                        <div class="card" style="margin-left: 80px; margin-top: 20px" >
                            <div class="card-block accordion-block">
              
            <div id="accordion" role="tablist" aria-multiselectable="true">
              <div class="accordion-panel">
                <div class="accordion-heading" role="tab" id="headingOne">
                  <h3 class="card-title accordion-title">
                    <a  class="accordion-msg table-active"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Column
                    </a>
                  </h3>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-panel">
                <div class="accordion-heading" role="tab" id="headingTwo">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-primary"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Footing
                    </a>
                  </h3>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingThree">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Slab
                    </a>
                  </h3>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingFour">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Beams
                    </a>
                  </h3>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                 <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingFive">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Wall Footing
                    </a>
                  </h3>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingSix">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Floor Beams
                    </a>
                  </h3>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingSeven">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      Roof Beams
                    </a>
                  </h3>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingEight">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Mouldings
                    </a>
                  </h3>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingNine">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      Roofing
                    </a>
                  </h3>
                </div>
                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                 <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingTen">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      Windows
                    </a>
                  </h3>
                </div>
                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                    <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingEleven">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                     Doors
                    </a>
                  </h3>
                </div>
                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingTwelve">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                     Ceiling
                    </a>
                  </h3>
                </div>
                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                 <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingThirteen">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                     Staircase
                    </a>
                  </h3>
                </div>
                <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                
                 <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingFourteen">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                     Paint Ceiling
                    </a>
                  </h3>
                </div>
                <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                 <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingFifteen">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                     Paint Walls
                    </a>
                  </h3>
                </div>
                <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                
                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingSixteen">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                     Electrical Works
                    </a>
                  </h3>
                </div>
                <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingSeventeen">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                     Plumbing Works
                    </a>
                  </h3>
                </div>
                <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                
                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingEighteen">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                     Tiles
                    </a>
                  </h3>
                </div>
                <div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEighteen">
                  <div class="accordion-content accordion-desc">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                  </div>
                </div>
              </div>
                 
                
            </div>
          </div>
        </div>
      </div>
            </div>
          </div> 
        </div> 
      <!-- Multiple Open Accordion ends -->

   
    </div>
    <!-- Row end -->
                
                
                
                
                


            </div>
            
            
            
            
            <!-- Header end -->

          


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



@endsection('body')

@section('script')

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

@endsection('script')
