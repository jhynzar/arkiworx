@extends('layouts.master')
@section('css')


	<script src="/js/jspdf.js"></script>
	<script src="/js/jquery-2.1.3.js"></script>
	<script src="/js/pdfFromHTML.js"></script>
<style>

.scroll {
    max-height: 450px;
    overflow-y: auto;
}

</style>
@endsection

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


<li class="active treeview">
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







<!-- Add Custom Category Modal -->

<div class="modal fade" id="addCustom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content pull-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <span style="color: white">Custom Category</span>
                </h4>
            </div>
            <div class="modal-body" style="background: #e5e5f2 !important; ">




                <form action="/action_page.php">


                    <!-- current date -->
                    <br>
                    <div class="form-group">
                        <label class="text text-default">
                            <b>Work category:</b>
                        </label>
                        <select class="form-control" id="" placeholder="" style="width: 500px !important;">
                            <option>Form works </option>
                            <option>Scaffolding</option>
                            <option>Auxilary </option>
                            <option>Lumber </option>
                            <option>Furniture </option>
                        </select>
                    </div>
                    <hr>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success">
                            <i class="icon icon-check"> </i>Add </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 340px">
                            <i class="icon icon-close"> </i>Cancel</button>

                    </div>
                </form>


            </div>

        </div>
    </div>
</div>






<div class="content-wrapper" style="margin-top: 10px">
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

                <div style=" position: absolute; margin-top: -50; margin-left: 300px">
                    <label class="text text-muted">Project:</label>
                    <select class="form-control text text-primary" name="project" id="project" style="width: 400px; height: 40px !important;"
                        disabled>

                        <option selected> {{$project->strProjectName}} </option>



                    </select>
                </div>
            </div>





        </div>

        <br>
        <br>

        <form action="Cost-Estimation-Save" method="POST">
            <!-- Row start -->
            {{csrf_field()}}
                
          <div id="HTMLtoPDF">      
    <!-- Row start -->
    <div class="row">
      <!-- Multiple Open Accordion start -->
      <div class="col-lg-12">
        <div class="card" style="height: 3500px">
          <div class="card-header" style="background-color: #778899">
            <h5 class="card-header-text">1 - Storey Project</h5>
            
          </div>
            
            
            
            
            
            
           
            
            
            
            
          <div class="card-block accordion-block">
            
                    <div class="col-lg-12"> <div style="margin-left: 800px; margin-top: 20px"> <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addCustom" >Add Custom Category</button>
                            </div>
                        <div class="card" style="margin-top: 30px" >
                            
                            
                            <div class="card-block accordion-block">
                                
                                
                                
                                
                                <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingTwenty">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                      General Requirements
                    </a>
                  </h3>
                </div>
                <div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwenty">
                  <div class="accordion-content accordion-desc">
                    <!-- Column-->
                      
                      <br> 
                       <div class="card"  >
                        
        <div class="row ">
        
       
            
          <div class="col-sm-12 col-xs-12 ">
                <div>
              
              <div class="card" style="background-color: #A7FDCB">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="form-group form-inline">
                           
                            
    
                                <label class="text text-default"><b>Permit</b> </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label class="text text-default"><b>Miscellaneous</b> </label> <br><br>
                                    <label> Building Permit</label>
                                <input type="number" class="form-control" value="50000" id="BuildingPermit" name="BuildingPermit" style="width: 180px !important;" placeholder="">
                                    
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label> Temporary Facilities</label>
                                <input type="number" class="form-control" value="10000" id="TemporaryFacilities" name="TemporaryFacilities" style="width: 180px !important;" placeholder="">
                                     <label> Workers' Barracks</label>
                                <input type="number" class="form-control" value="10000" id="WorkersBarracks" name="WorkersBarracks" style="width: 180px !important;" placeholder="">

                                 
                                 <br> <br>
                                 
                               <label class="text text-default"><b>Earthworks</b> </label>  <br><br>
                                    <label> Excavation</label>
                                <input type="number" class="form-control" value="225" id="Excavation" name="Excavation" style="width: 150px !important;" placeholder="">
                                    
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label> Backfill</label>
                                <input type="number" class="form-control" value="225" id="Backfill" name="Backfill" style="width: 150px !important;" placeholder="">
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                     <label> Lastillas</label>
                                <input type="number" class="form-control" value="800" id="Lastillas" name="Lastillas" style="width: 150px !important;" placeholder="Optional">
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                     <label> Soil Poisoning</label>
                                <input type="number" class="form-control" value="56000" id="SoilPoisoning" name="SoilPoisoning" style="width: 150px !important;" placeholder="Optional">
                                 
                                    <br> <br> <br> <br>
                         
                                
                                 <label class="text text-default"><b>Labor Cost</b> </label>  
                                <input type="number" class="form-control"  value="1122872.60"  id="LaborCost" name="LaborCost" style="width: 180px !important;" placeholder="">
                                    
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label class="text text-default"><b>Tools and Equipments</b> </label>  
                                <input type="number" class="form-control" value="50000" id="ToolsEquipments" name="ToolsEquipments" style="width: 180px !important;" placeholder="">
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                     <label class="text text-default"><b>Transportation</b> </label>  
                                <input type="number" class="form-control"  value="50000"  id="Transportation" name="Transportation" style="width: 180px !important;" placeholder="">
                                 
                                     <br> <br> <br> <br>
                                    <label class="text text-default"><b>Contingency</b> </label> 
                                <input type="number" class="form-control" value="104453.28" id="Contigency" name="Contigency" style="width: 300px !important;" placeholder="">
                                 &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label class="text text-default"><b>Overhead Profit</b> </label> 
                                <input type="number" class="form-control" value="261133.18" id="OverheadProfit" name="OverheadProfit" style="width: 300px !important;" placeholder="">
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <button type="button" class="btn btn-success" id="ComputeGeneralReq" >Compute</button>
                                    
                                    
                       
                                    
                                 
                         
                                
                        </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                  
                         <!-- TOTALS TABLE -->

                                    <div class="card-block">
                                            <div class="table-responsive">
                                            <input type=hidden id="totalGeneralReq1" name="totalGeneralReq" value="1715709.06">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                         
                                                            <th class="text-center text-primary" id="totalGeneralReq"> 1715709.06 </th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>       
              </div>
          </div>
          
          
           
            
            
        </div>
      
    </div>
                      
     <!-- Column ends -->
                  </div>
                </div>
              </div>
                                
                                
                                
                                
                                
              <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingOne">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Column
                    </a>
                  </h3>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="accordion-content accordion-desc">
                      
                      
                     <!-- Column-->
                      
                     <br> 
                       <div class="card">
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                        <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="ColumnCC" style="width: 160px !important;">
                                    <option value="1" selected>Class AA </option>
                                    <option value="2">Class A </option>
                                    <option value="3">Class B </option>
                                    <option value="4">Class C </option>
                                </select>
                            </div>
                             
                          <div >
                                <label for="">Volume:</label> <br>
                            
                                <input type="number" id="ColumnVolume" style="width: 160px !important;"> <label class="text text-default"> cu.m </label>
                            
                            </div>   
                             <br> 
                             <div class="form-group form-inline">
                           
                            <label >Thickness:</label>
                            <input type="" class="form-control" id="ColumnThickness" style="width: 90px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="ColumnWidth" style="width: 90px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="ColumnLength" style="width: 90px !important;" >
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 <div class="form-group">
                                <label> Number of bars per Column:</label>
                                <input type="number" id="ColumnNoOfBars" class="form-control"style="width: 100px !important;" >
                            </div> <br> <br>
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Length:</label>
                                <select class="form-control" id="ColumnsBarLeng" style="width: 136px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="ColumnsBarSize" style="width: 170px !important;">
                                    <option value=6 selected>6 mm</option>
                                    <option value=10>10 mm </option>
                                    <option value=12>12 mm </option>
                                    <option value=16>16 mm </option>
                                    <option value=20>20 mm </option>
                                    <option value=22>22 mm </option>
                                    <option value=25>25 mm </option>
                                </select>
                            </div> <br> <br>
                                 
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Tie Bar Size:</label>
                                <select class="form-control" id="ColumnsTieBarSize" style="width: 150px !important;">
                                    <option value=6 selected>6 mm</option>
                                    <option value=10>10 mm </option>
                                    <option value=12>12 mm </option>
                                    <option value=16>16 mm </option>
                                    <option value=20>20 mm </option>
                                    <option value=22>22 mm </option>
                                    <option value=25>25 mm </option>
                                </select>
                                     <label for="">Tie wire:</label>
                                <select class="form-control" id="ColumnsTieWire" style="width: 140px !important;">
                                    <option value=30 selected>30 cm </option>
                                    <option value=40>40 cm </option>
                                    
                                </select>
                            </div> 
                   
                                 <br> <br>
                                 <hr>
                                 <div class="form-group form-inline">
                                <label class="text text-default"><b>Column(s): </b> </label>&nbsp; <input type="number" class="form-control" id="HowManyColumns" style="width: 100px !important;">
                                <button type="button" id="computeColumn" class="btn" style="margin-left: 90px" >Compute</button>
                                 </div>
                        </div>
                             
                             
                             
                        </div>
                    </div>
          </div>
            
          <div class="col-sm-6 col-xs-12 "><br>
                <div>
              
              <div class="card">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Material</th>
                                            <th>Estimated Qty</th>
                                            <th>Estimated Cost</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="table-success">
                                            <td id="ColumnCement">cement 40kg</td>
                                            <td id="ColumnCementBag">14</td>
                                            <td id="ColumnCementCost">3290</td>
                                           
                                        </tr>
                                        <tr>
                                            <td id="ColumnS">sand</td>
                                            <td id="ColumnSand">.80</td>
                                            <td id="ColumnSandCost">640</td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id="ColumnG">gravel</td>
                                            <td id="ColumnGravel">1.50</td>
                                            <td id="ColumnGravelCost">2250</td>
                                           
                                        </tr>
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="ColumnSteelBar">Main bars-12mmØ</td>
                                            <td id="ColumnSteelBarQty">36</td>
                                            <td id="ColumnSteelBarCost">6552</td>
                                           
                                        </tr>
                                            <tr>
                                            <td id="ColumnTieBar">ties/stirrups bars-10mmØ</td>
                                            <td id="ColumnTieBarQty">24</td>
                                            <td id="ColumnTieBarCost">2928</td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id="ColumnTieWire">Tie wire</td>
                                            <td id="ColumnTieWireKg">6</td>
                                            <td id="ColumnTieWireCost">360</td>
                                           
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                    <input type="hidden" id="ColumnCement1"             name="ColumnCement" value='1'>
                                    <input type="hidden" id="ColumnCementBag1"          name="ColumnCementBag" value='14.00'>
                                    <input type="hidden" id="ColumnCementCost1"         name="ColumnCementCost" value='3290'>
                                    <input type="hidden" id="ColumnS1"                  name="ColumnS" value='2'>
                                    <input type="hidden" id="ColumnSand1"               name="ColumnSand" value='0.80'>
                                    <input type="hidden" id="ColumnSandCost1"           name="ColumnSandCost" value='640'>
                                    <input type="hidden" id="ColumnG1"                  name="ColumnG" value='3'>
                                    <input type="hidden" id="ColumnGravel1"             name="ColumnGravel" value='1.50'>
                                    <input type="hidden" id="ColumnGravelCost1"         name="ColumnGravelCost" value='2250'>
                                    <input type="hidden" id="ColumnSteelBar1"           name="ColumnSteelBar" value='4'>
                                    <input type="hidden" id="ColumnSteelBarQty1"        name="ColumnSteelBarQty" value='26'>
                                    <input type="hidden" id="ColumnSteelBarCost1"       name="ColumnSteelBarCost" value='6652'>
                                    <input type="hidden" id="ColumnTieBar1"             name="ColumnTieBar" value='5'>
                                    <input type="hidden" id="ColumnTieBarQty1"          name="ColumnTieBarQty" value='24'>
                                    <input type="hidden" id="ColumnTieBarCost1"         name="ColumnTieBarCost" value='2928'>
                                    <input type="hidden" id="ColumnTieWire1"            name="ColumnTieWire" value='6'>
                                    <input type="hidden" id="ColumnTieWireKg1"          name="ColumnTieWireKg" value='6'>
                                    <input type="hidden" id="ColumnTieWireCost1"        name="ColumnTieWireCost" value='360'>
                                    <input type="hidden" id="ColumnTotalCost1"          name="ColumnTotalCost" value='16020'>
                                </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                                  <!-- TOTALS TABLE -->

                                    <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                            <th class="text-center"></th>
                                                            <th class="text-center text-primary" id="ColumnTotalCost"> 16020 </th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>       
              </div>
          </div>
          
          
           
            
            
        </div>
      
    </div>
                      
     <!-- Column ends -->
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
                    <!-- Column-->
                      
                      <br> 
                       <div class="card">
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                         <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="FootingCC" style="width: 160px !important;">
                                    <option value="1" selected>Class AA </option>
                                    <option value="2">Class A </option>
                                    <option value="3">Class B </option>
                                    <option value="4">Class C </option>
                                </select>
                            </div>
                             
                          <div >
                                <label for="">Volume:</label> <br>
                            
                                <input type="number" id="FootingVolume" style="width: 160px !important;"> <label class="text text-default"> cu.m </label>
                            
                            </div>   
                             <br> 
                             <div class="form-group form-inline">
                           
                            <label >Thickness:</label>
                            <input type="" class="form-control" id="FootingThickness" style="width: 90px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="FootingWidth" style="width: 90px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="FootingLength" style="width: 90px !important;" >
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Length:</label>
                                <select class="form-control" id="footingBarLength" style="width: 136px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="footingBarSize" style="width: 170px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                            </div> <br> <br>
                                 
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Tie Bar Size:</label>
                                <select class="form-control" id="footingTirebarSize" style="width: 150px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                                     <label for="">Tie wire:</label>
                                <select class="form-control" id="footingTiewire" style="width: 140px !important;">
                                    <option value="30" selected>30 cm </option>
                                    <option value="40" >40 cm </option>
                                    
                                </select>
                            </div> 
                   
                                 <br> <br>
                                 <hr>
                                 <div class="form-group form-inline">
                                <label class="text text-default"><b>Footing(s): </b> </label>&nbsp; <input type="number" class="form-control" id="HowManyFootings" style="width: 100px !important;">
                                <button type="button" id="computeFooting" class="btn btn-primary" style="margin-left: 90px" >Compute</button>
                                 </div>
                        </div>
                             
                             
                             
                        </div>
                    </div>
          </div>
            
          <div class="col-sm-6 col-xs-12 "><br>
                <div>
              
              <div class="card">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="table-responsive">
                                <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Material</th>
                                            <th>Estimated Qty</th>
                                            <th>Estimated Cost</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="table-success">
                                            <td id="FootingCement">cement 40kg</td>
                                            <td id="FootingCementBag">6.50</td>
                                            <td id="FootingCementCost">1527.5</td>
                                           
                                        </tr>
                                        <tr>
                                            <td id="FootingS">sand</td>
                                            <td id="FootingSand">0.50</td>
                                            <td id="FootingSandCost">400</td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id="FootingG">gravel</td>
                                            <td id="FootingGravel">0.80</td>
                                            <td id="FootingGravelCost">1200</td>
                                           
                                        </tr>
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="FootingSteelBar">Main bars-12mmØ</td>
                                            <td id="FootingSteelBarQty">13</td>
                                            <td id="FootingSteelBarCost">2366</td>
                                           
                                        </tr>
                                        <tr class="table-warning">
                                            <td id="FootingTieWire">Tie wire</td>
                                            <td id="FootingTieWireKg">2.50</td>
                                            <td id="FootingTieWireCost">150</td>
                                           
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                    <input type="hidden" id="FootingCement1"             name="FootingCement" value='1'>
                                    <input type="hidden" id="FootingCementBag1"          name="FootingCementBag" value='6.50'>
                                    <input type="hidden" id="FootingCementCost1"         name="FootingCementCost" value='1527.5'>
                                    <input type="hidden" id="FootingS1"                  name="FootingS" value='2'>
                                    <input type="hidden" id="FootingSand1"               name="FootingSand" value='0.50'>
                                    <input type="hidden" id="FootingSandCost1"           name="FootingSandCost" value='400'>
                                    <input type="hidden" id="FootingG1"                  name="FootingG" value='3'>
                                    <input type="hidden" id="FootingGravel1"             name="FootingGravel" value='0.80'>
                                    <input type="hidden" id="FootingGravelCost1"         name="FootingGravelCost" value='1200'>

                                    <input type="hidden" id="FootingSteelBar1"           name="FootingSteelBar" value='4'>
                                    <input type="hidden" id="FootingSteelBarQty1"        name="FootingSteelBarQty" value='13'>
                                    <input type="hidden" id="FootingSteelBarCost1"       name="FootingSteelBarCost" value='2366'>
                                    <input type="hidden" id="FootingTieWire1"            name="FootingTieWire" value='6'>
                                    <input type="hidden" id="FootingTieWireKg1"          name="FootingTieWireKg" value='2.50'>
                                    <input type="hidden" id="FootingTieWireCost1"        name="FootingTieWireCost" value='150'>
                                    <input type="hidden" id="FootingTotalCost1"        name="FootingTotalCost" value='5643.50'>
                                </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                    
                    <!-- TOTALS TABLE -->

                                    <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                            <th class="text-center"></th>
                                                            <th class="text-center text-primary" id="FootingTotalCost"> 5643.50 </th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>
                                
              </div>
          </div>
          
          
           
            
            
        </div>
      
    </div>
                      
     <!-- Column ends -->
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
                    <!-- Column-->
                      
                      <br> 
                       <div class="card">
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12"> <br>
                    <div class="card" style="background-color: #A7FDCB">
                         <div class="card-block">
                             
                   
                         <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="SlabCC" style="width: 160px !important;">
                                    <option value="1" selected>Class AA </option>
                                    <option value="2">Class A </option>
                                    <option value="3">Class B </option>
                                    <option value="4">Class C </option>
                                </select>
                            </div>
                             
                          <div >
                                <label for="">Volume:</label> <br>
                            
                                <input type="number" id="SlabVolume" style="width: 160px !important;"> <label class="text text-default"> cu.m </label>
                            
                            </div>   
                             <br> 
                             <div class="form-group form-inline">
                           
                            <label >Thickness:</label>
                            <input type="" class="form-control" id="SlabThickness" style="width: 90px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="SlabWidth" style="width: 90px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="SlabLength" style="width: 90px !important;" >
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Spacing:</label>
                                <select class="form-control" id="slabBarSpacing" style="width: 130px !important;">
                                    <option value="10.0" selected>10.0 cm </option>
                                    <option value="12.5" >12.5 cm </option>
                                    <option value="15.0" >15.0 cm </option>
                                    <option value="17.5" >17.5 cm </option>
                                    <option value="20.0" >20.0 cm </option>
                                    <option value="22.5" >22.5 cm </option>
                                    <option value="25.0" >25.0 cm </option>
                                </select>
                                     <label for="">Bar Length:</label>
                                <select class="form-control" id="slabBarLength" style="width: 130px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                            </div> <br> <br>
                                 
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Size:</label>
                                <select class="form-control" id="slabBarSize" style="width: 155px !important;">
                                    <option value="A" selected>Class A </option>
                                    <option value="B" >Class B </option>
                                    <option value="C" >Class C </option>
                                </select>
                                     <label for="">Tie wire:</label>
                                <select class="form-control" id="slabTiewire" style="width: 140px !important;">
                                    <option value="30" selected>30 cm </option>
                                    <option value="40" >40 cm </option>
                                    
                                </select>
                            </div> 
                                 
                                 
                                 <br> <br>
                                 <div class="form-group">
                                 <label for="">Tie Bar Size:</label>
                                <select class="form-control" id="slabTireBarSize" style="width: 120px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                            </div>
                                 
                            
                   
                                 <br> <br>
                                 <hr>
                                 <div class="form-group form-inline">
                                <label class="text text-default"><b>Slab(s): </b> </label>&nbsp; <input type="number" class="form-control" id="HowManySlabs" style="width: 100px !important;">
                                <button type="button" class="btn btn-success" id="computeSlab" style="margin-left: 90px" >Compute</button>
                                 </div>
                        </div>
                             
                             
                             
                        </div>
                    </div>
          </div>
            
          <div class="col-sm-6 col-xs-12 "><br> 
                <div>
              
              <div class="card">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="table-responsive">
                                <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Material</th>
                                            <th>Estimated Qty</th>
                                            <th>Estimated Cost</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="table-success">
                                            <td id="SlabCement">cement 40kg</td>
                                            <td id="SlabCementBag">25</td>
                                            <td id="SlabCementCost">5875</td>
                                           
                                        </tr>
                                        <tr>
                                            <td id="SlabS">sand</td>
                                            <td id="SlabSand">3</td>
                                            <td id="SlabSandCost">2400</td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id="SlabG">gravel</td>
                                            <td id="SlabGravel">6</td>
                                            <td id="SlabGravelCost">9000</td>
                                           
                                        </tr>
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="SlabSteelBar">Main bars-12mmØ</td>
                                            <td id="SlabSteelBarQty">40</td>
                                            <td id="SlabSteelBarCost">7280</td>
                                           
                                        </tr>
                                        <tr class="table-warning">
                                            <td id="SlabTieWire">Tie wire</td>
                                            <td id="SlabTieWireKg">2</td>
                                            <td id="SlabTieWireCost">120</td>
                                           
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                    <input type="hidden" id="SlabCement1"             name="SlabCement" value='1'>
                                    <input type="hidden" id="SlabCementBag1"          name="SlabCementBag" value='25'>
                                    <input type="hidden" id="SlabCementCost1"         name="SlabCementCost" value='5875'>
                                    <input type="hidden" id="SlabS1"                  name="SlabS" value='2'>
                                    <input type="hidden" id="SlabSand1"               name="SlabSand" value='3'>
                                    <input type="hidden" id="SlabSandCost1"           name="SlabSandCost" value='2400'>
                                    <input type="hidden" id="SlabG1"                  name="SlabG" value='3'>
                                    <input type="hidden" id="SlabGravel1"             name="SlabGravel" value='6'>
                                    <input type="hidden" id="SlabGravelCost1"         name="SlabGravelCost" value='9000'>
                                    <input type="hidden" id="SlabSteelBar1"           name="SlabSteelBar" value='4'>
                                    <input type="hidden" id="SlabSteelBarQty1"        name="SlabSteelBarQty" value='40'>
                                    <input type="hidden" id="SlabSteelBarCost1"       name="SlabSteelBarCost" value='7280'>
                                    <input type="hidden" id="SlabTieWire1"            name="SlabTieWire" value='6'>
                                    <input type="hidden" id="SlabTieWireKg1"          name="SlabTieWireKg" value='2'>
                                    <input type="hidden" id="SlabTieWireCost1"        name="SlabTieWireCost" value='120'>
                                    <input type="hidden" id="SlabTotalCost1"          name="SlabTotalCost" value='24675'>
                                </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                    <!-- TOTALS TABLE -->

                                    <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                            <th class="text-center"></th>
                                                            <th class="text-center text-primary" id="SlabTotalCost"> 24675 </th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>
                                
              </div>
          </div>
          
          
           
            
            
        </div>
      
    </div>
                      
                           
                      
                      
                      
     <!-- Column ends -->
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
                    <!-- Column-->
                      
                      <br> 
                       <div class="card">
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                         <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="BeamCC" style="width: 160px !important;">
                                    <option value="1" selected>Class AA </option>
                                    <option value="2">Class A </option>
                                    <option value="3">Class B </option>
                                    <option value="4">Class C </option>
                                </select>
                            </div>
                             
                          <div >
                                <label for="">Volume:</label> <br>
                            
                                <input type="number" id="BeamVolume" style="width: 160px !important;"> <label class="text text-default"> cu.m </label>
                            
                            </div>   
                             <br> 
                             <div class="form-group form-inline">
                           
                            <label >Thickness:</label>
                            <input type="" class="form-control" id="BeamThickness" style="width: 90px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="BeamWidth" style="width: 90px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="BeamLength" style="width: 90px !important;" >
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 <div class="form-group">
                                <label> Direct Counting:</label>
                                <input type="number" class="form-control" id="" style="width: 100px !important;" >
                            </div> <br> <br>
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Length:</label>
                                <select class="form-control" id="beamsBarLength" style="width: 136px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="beamsBarSize" style="width: 170px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                            </div> <br> <br>
                                 
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Tie Bar Size:</label>
                                <select class="form-control" id="beamsTieBarSize" style="width: 150px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                                     <label for="">Tie wire:</label>
                                <select class="form-control" id="beamsTiewire" style="width: 140px !important;">
                                    <option value="30" selected>30 cm </option>
                                    <option value="40" >40 cm </option>
                                    
                                </select>
                            </div> 
                   
                                 <br> <br>
                                 <hr>
                                 <div class="form-group form-inline">
                                <label class="text text-default"><b>Beam(s): </b> </label>&nbsp; <input type="number" class="form-control" id="HowManyBeams" style="width: 100px !important;">
                                <button type="button" class="btn" id="computeBeam" style="margin-left: 90px" >Compute</button>
                                 </div>
                        </div>
                             
                             
                             
                        </div>
                    </div>
          </div>
            
          <div class="col-sm-6 col-xs-12 "><br>
                <div>
              
              <div class="card">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="table-responsive">
                                <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Material</th>
                                            <th>Estimated Qty</th>
                                            <th>Estimated Cost</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="table-success">
                                            <td id="BeamCement">cement 40kg</td>
                                            <td id="BeamCementBag">13</td>
                                            <td id="BeamCementCost">3055</td>
                                           
                                        </tr>
                                        <tr>
                                            <td id="BeamS">sand</td>
                                            <td id="BeamSand">.80</td>
                                            <td id="BeamSandCost">640</td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id="BeamG">gravel</td>
                                            <td id="BeamGravel">1.60</td>
                                            <td id="BeamGravelCost">2400</td>
                                           
                                        </tr>
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="BeamSteelBar">Main bars-12mmØ</td>
                                            <td id="BeamSteelBarQty">37</td>
                                            <td id="BeamSteelBarCost">6734</td>
                                           
                                        </tr>
                                            <tr>
                                            <td id="BeamTieBar">ties/stirrups bars-10mmØ</td>
                                            <td id="BeamTieBarQty">36</td>
                                            <td id="BeamTieBarCost">4392</td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id="BeamTieWire">Tie wire</td>
                                            <td id="BeamTieWireKg">7</td>
                                            <td id="BeamTieWireCost">420</td>
                                           
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                    <input type="hidden" id="BeamCement1"             name="BeamCement" value='1'>
                                    <input type="hidden" id="BeamCementBag1"          name="BeamCementBag" value='13.00'>
                                    <input type="hidden" id="BeamCementCost1"         name="BeamCementCost" value='3055'>
                                    <input type="hidden" id="BeamS1"                  name="BeamS" value='2'>
                                    <input type="hidden" id="BeamSand1"               name="BeamSand" value='0.80'>
                                    <input type="hidden" id="BeamSandCost1"           name="BeamSandCost" value='640'>
                                    <input type="hidden" id="BeamG1"                  name="BeamG" value='3'>
                                    <input type="hidden" id="BeamGravel1"             name="BeamGravel" value='1.60'>
                                    <input type="hidden" id="BeamGravelCost1"         name="BeamGravelCost" value='2400'>
                                    <input type="hidden" id="BeamSteelBar1"           name="BeamSteelBar" value='4'>
                                    <input type="hidden" id="BeamSteelBarQty1"        name="BeamSteelBarQty" value='37'>
                                    <input type="hidden" id="BeamSteelBarCost1"       name="BeamSteelBarCost" value='6734'>
                                    <input type="hidden" id="BeamTieBar1"             name="BeamTieBar" value='5'>
                                    <input type="hidden" id="BeamTieBarQty1"          name="BeamTieBarQty" value='36'>
                                    <input type="hidden" id="BeamTieBarCost1"         name="BeamTieBarCost" value='4392'>
                                    <input type="hidden" id="BeamTieWire1"            name="BeamTieWire" value='6'>
                                    <input type="hidden" id="BeamTieWireKg1"          name="BeamTieWireKg" value='7'>
                                    <input type="hidden" id="BeamTieWireCost1"        name="BeamTieWireCost" value='420'>
                                    <input type="hidden" id="BeamTotalCost1"          name="BeamTotalCost" value='17641'>
                                </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                    <!-- TOTALS TABLE -->

                                    <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                            <th class="text-center"></th>
                                                            <th class="text-center text-primary" id="BeamTotalCost"> 17641 </th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>
                                
              </div>
          </div>
          
          
           
            
            
        </div>
      
    </div>
                      
     <!-- Column ends -->
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
                    <!-- Column-->
                      
                      <br> 
                       <div class="card">
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                        <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="wallFootingCementClassMixture" style="width: 160px !important;">
                                    <option value="AA" selected>Class AA </option>
                                     <option value="A" >Class A </option>
                                    <option value="B" >Class B </option>
                                    <option value="C" >Class C </option>
                                </select>
                            </div>
                             
                          <div >
                                <label for="">Volume:</label> <br>
                            
                                <input type="number" id="" style="width: 160px !important;"> <label class="text text-default"> cu.m </label>
                            
                            </div>   
                             <br> 
                             <div class="form-group form-inline">
                           
                            <label >Thickness:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Length:</label>
                                <select class="form-control" id="wallFootingBarLength" style="width: 136px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="wallFootingBarSize" style="width: 170px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                            </div> <br> <br>
                                 
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Tie Bar Size:</label>
                                <select class="form-control" id="wallFootingTieBarSize" style="width: 150px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                                     <label for="">Tie wire:</label>
                                <select class="form-control" id="wallFootigTiewire" style="width: 140px !important;">
                                    <option value="30" selected>30 cm </option>
                                    <option value="40" >40 cm </option>
                                    
                                </select>
                            </div> 
                   
                                 <br> <br>
                                 <hr>
                                 <div class="form-group form-inline">
                                <label class="text text-default"><b>Wall Footing(s): </b> </label>&nbsp; <input type="number" class="form-control" id="" style="width: 100px !important;">
                                <button type="button" class="btn btn-primary" style="margin-left: 90px" >Compute</button>
                                 </div>
                        </div>
                             
                             
                             
                        </div>
                    </div>
          </div>
            
          <div class="col-sm-6 col-xs-12 "><br>
                <div>
              
              <div class="card">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Material</th>
                                            <th>Estimated Qty</th>
                                            <th>Estimated Cost</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="table-success">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                        <tr>
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                            <tr>
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                    
                    <!-- TOTALS TABLE -->

                                    <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                            <th class="text-center"></th>
                                                            <th class="text-center text-primary"> </th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>
                                
              </div>
          </div>
          
          
           
            
            
        </div>
      
    </div>
                      
     <!-- Column ends -->
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
                    <!-- Column-->
                      
                      <br> 
                       <div class="card">
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                        <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="floorBeamsCementClassMixture" style="width: 160px !important;">
                                    <option value="AA" selected>Class AA </option>
                                    <option value="A" >Class A </option>
                                    <option value="B" >Class B </option>
                                    <option value="C" >Class C </option>
                                </select>
                            </div>
                             
                          <div >
                                <label for="">Volume:</label> <br>
                            
                                <input type="number" id="" style="width: 160px !important;"> <label class="text text-default"> cu.m </label>
                            
                            </div>   
                             <br> 
                             <div class="form-group form-inline">
                           
                            <label >Thickness:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 <div class="form-group">
                                <label> Direct Counting:</label>
                                <input type="number" class="form-control" id="" style="width: 100px !important;" >
                            </div> <br> <br>
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Length:</label>
                                <select class="form-control" id="floorBeamsBarLength" style="width: 136px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="floorBeamsBarSize" style="width: 170px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                            </div> <br> <br>
                                 
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Tie Bar Size:</label>
                                <select class="form-control" id="floorBeamsTieBarSize" style="width: 150px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                                     <label for="">Tie wire:</label>
                                <select class="form-control" id="floorBeamsTiewire" style="width: 140px !important;">
                                    <option value="30" selected>30 cm </option>
                                    <option value="40" >40 cm </option>
                                    
                                </select>
                            </div> 
                   
                                 <br> <br>
                                 <hr>
                                 <div class="form-group form-inline">
                                <label class="text text-default"><b>Floor Beam(s): </b> </label>&nbsp; <input type="number" class="form-control" id="" style="width: 100px !important;">
                                <button type="button" class="btn btn-success" style="margin-left: 90px" >Compute</button>
                                 </div>
                        </div>
                             
                             
                             
                        </div>
                    </div>
          </div>
            
          <div class="col-sm-6 col-xs-12 "><br>
                <div>
              
              <div class="card">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Material</th>
                                            <th>Estimated Qty</th>
                                            <th>Estimated Cost</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="table-success">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                        <tr>
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                            <tr>
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                    
                    <!-- TOTALS TABLE -->

                                    <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                            <th class="text-center"></th>
                                                            <th class="text-center text-primary"> </th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>
                                
              </div>
          </div>
          
          
           
            
            
        </div>
      
    </div>
                      
     <!-- Column ends -->
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
                    <!-- Column-->
                      
                      <br> 
                       <div class="card">
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                        <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="roofBeamsCementClassMixture" style="width: 160px !important;">
                                    <option value="AA" selected>Class A </option>
                                    <option value="A" >Class A </option>
                                    <option value="B" >Class B </option>
                                    <option value="C" >Class C </option>
                                </select>
                            </div>
                             
                          <div >
                                <label for="">Volume:</label> <br>
                            
                                <input type="number" id="" style="width: 160px !important;"> <label class="text text-default"> cu.m </label>
                            
                            </div>   
                             <br> 
                             <div class="form-group form-inline">
                           
                            <label >Thickness:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 <div class="form-group">
                                <label> Direct Counting:</label>
                                <input type="number" class="form-control" id="" style="width: 100px !important;" >
                            </div> <br> <br>
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Length:</label>
                                <select class="form-control" id="roofBeamsBarLength" style="width: 136px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="roofBeamsBarSize" style="width: 170px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                            </div> <br> <br>
                                 
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Tie Bar Size:</label>
                                <select class="form-control" id="roofBeamsTieBarSize" style="width: 150px !important;">
                                    <option value="6" selected>6 mm</option>
                                    <option value="10" >10 mm </option>
                                    <option value="12" >12 mm </option>
                                    <option value="16" >16 mm </option>
                                    <option value="20" >20 mm </option>
                                    <option value="22" >22 mm </option>
                                    <option value="25" >25 mm </option>
                                </select>
                                     <label for="">Tie wire:</label>
                                <select class="form-control" id="roofBeamsTiewire" style="width: 140px !important;">
                                    <option value="30" selected>30 cm </option>
                                    <option value="40" >40 cm </option>
                                    
                                </select>
                            </div> 
                   
                                 <br> <br>
                                 <hr>
                                 <div class="form-group form-inline">
                                <label class="text text-default"><b>Roof Beam(s): </b> </label>&nbsp; <input type="number" class="form-control" id="" style="width: 100px !important;">
                                <button type="button" class="btn" style="margin-left: 90px" >Compute</button>
                                 </div>
                        </div>
                             
                             
                             
                        </div>
                    </div>
          </div>
            
          <div class="col-sm-6 col-xs-12 "><br>
                <div>
              
              <div class="card">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Material</th>
                                            <th>Estimated Qty</th>
                                            <th>Estimated Cost</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="table-success">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                        <tr>
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                            <tr>
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                    
                    <!-- TOTALS TABLE -->

                                    <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                            <th class="text-center"></th>
                                                            <th class="text-center text-primary"> </th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>
                                
              </div>
          </div>
          
          
           
            
            
        </div>
      
    </div>
                      
     <!-- Column ends -->
                  </div>
                </div>
              </div>
                
               
                
                                 <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingNine">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg bg-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      Masonry
                    </a>
                  </h3>
                </div>
                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                  <div class="accordion-content accordion-desc">
                    <!-- Column-->
                      
                      <br> 
                       <div class="card">
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12 scroll"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                        <div class="form-group pull-center">
                                <label for=""><b>Concrete HollowBlocks:</b></label><br>
                               
                            </div>
                             
                          
                             
                             
                    
                             <div class="form-group form-inline">
                           
                            <label >Area:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" placeholder="Optional" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="" style="width: 90px !important;" >
                                 <br> <br>
                                 
                                 
                                 
                                 
                                 
                                    <div class="form-group pull-center">
                                <label for=""><b>Mortar:</b></label>
                               
                            </div><br>
                                 
                                 <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="masonryCementClassMixture" style="width: 160px !important;">
                                    <option value="AA" selected>Class AA </option>
                                    <option value="A" >Class A </option>
                                    <option value="B" >Class B </option>
                                    <option value="B" >Class C </option>
                                </select>
                            </div><br><br>
                                 
                             <div class="form-group form-inline">
                                <label for="">Volume:</label>
                                <input type="number" class="form-control" style="width: 140px" id="" placeholder="Optional">
                                  <label for="">Thickness:</label>
                                <input type="number" style="width: 140px" class="form-control" id="" >
                            </div>  
                                 <br> <br>
                                 <div class="form-group">
                                <label for="">Area:</label>
                                <input type="number" class="form-control" style="width: 160px" id="" placeholder="Optional">
                            </div> 
                                 
                                 <br> <br>
                                 <div class="form-group form-inline">
                                <label for="">Width:</label>
                                <input type="number" style="width: 150px" class="form-control" id="" >
                                     <label for="">Length:</label>
                                <input type="number" style="width: 160px" class="form-control" id="" >
                            </div> 
                                 
                                 
                                 
                                 <br><br>
                                 
                                   <div class="form-group pull-center">
                                <label for=""><b>Hollow Cores:</b></label>
                               
                            </div><br><br>
                                 
                                 
                             <div class="form-group form-inline">
                                <label for="">Volume:</label>
                                <input type="number" class="form-control" style="width: 140px" id="" placeholder="Optional">
                                  <label for="">Thickness:</label>
                                <input type="number" style="width: 140px" class="form-control" id="" >
                            </div>  
                                 <br> <br>
                                 <div class="form-group">
                                <label for="">Area:</label>
                                <input type="number" class="form-control" style="width: 160px" id="" placeholder="Optional">
                            </div> 
                                 
                                 <br> <br>
                                 <div class="form-group form-inline">
                                <label for="">Width:</label>
                                <input type="number" style="width: 150px" class="form-control" id="" >
                                     <label for="">Length:</label>
                                <input type="number" style="width: 160px" class="form-control" id="" >
                            </div> 
                                 
                                  <br><br>
                                 
                                   <div class="form-group pull-center">
                                <label for=""><b>Plaster:</b></label>
                               
                             </div><br>
                                 
                                 <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="masonryCementClassMixture" style="width: 160px !important;">
                                    <option value="AA" selected>Class AA </option>
                                    <option value="A" >Class A </option>
                                    <option value="B" >Class B </option>
                                    <option value="C" >Class C </option>
                                </select>
                            </div><br><br>
                                 
                             <div class="form-group form-inline">
                                <label for="">Volume:</label>
                                <input type="number" class="form-control" style="width: 140px" id="" placeholder="Optional">
                                  <label for="">Thickness:</label>
                                <input type="number" style="width: 140px" class="form-control" id="" >
                            </div>  
                                 <br> <br>
                                 <div class="form-group">
                                <label for="">Area:</label>
                                <input type="number" class="form-control" style="width: 160px" id="" placeholder="Optional">
                            </div> 
                                 
                                 <br> <br>
                                 <div class="form-group form-inline">
                                <label for="">Width:</label>
                                <input type="number" style="width: 150px" class="form-control" id="" >
                                     <label for="">Length:</label>
                                <input type="number" style="width: 160px" class="form-control" id="" >
                            </div> 
                                 
                                 
                                 <br> <br>
                                 
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Size:</label>
                                <select class="form-control" id="masonryBarSize" style="width: 136px !important;">
                                    <option value="40" selected>40 cm</option>
                                    <option value="60" >60 cm</option>
                                    <option value="80" >80 cm</option>
                                
                                </select>
                                     <label for="">Bar Layer:</label>
                                <select class="form-control" id="masonryBarLayer" style="width: 150px !important;">
                                    <option value="2" selected>2</option>
                                    <option value="3" >3 </option>
                                    <option value="4" >4</option>
                                   
                                </select>
                            </div> 
                   
                                 <br> <br>
                                 <hr>
                                 <div class="form-group form-inline">
                                <label class="text text-danger"><b>How Many of these?</b> </label>&nbsp; <input type="number" class="form-control" id="" style="width: 100px !important;">
                                <button type="button" class="btn btn-success" style="margin-left: 50px" >Compute</button>
                                 </div>
                        </div>
                             
                             
                             
                        </div>
                    </div>
          </div>
            
          <div class="col-sm-6 col-xs-12 "><br>
                <div>
              
              <div class="card">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Material</th>
                                            <th>Estimated Qty</th>
                                            <th>Estimated Cost</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="table-success">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                        <tr>
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                            <tr>
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                       
                                        </tr>
                                        <tr class="table-warning">
                                            <td id=""></td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                               
                    
                   
                                                                                </div>


                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <!-- TOTALS TABLE -->

                                                                    <div class="card-block">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-b-0 photo-table">
                                                                                <thead>
                                                                                    <tr class="text-uppercase">
                                                                                        <th class="text-left text-primary">Total Cost:</th>
                                                                                        <th class="text-center"></th>
                                                                                        <th class="text-center text-primary"> 22345.0</th>


                                                                                    </tr>
                                                                                </thead>

                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>





                                                        </div>

                                                    </div>

                                                    <!-- Column ends -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingTen">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false"
                                                        aria-controls="collapseTen">
                                                        Roofing
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                                <div class="accordion-content accordion-desc">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has survived
                                                        not only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was popularised in the 1960s
                                                        with the release of Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software like Aldus PageMaker
                                                        including versions of Lorem Ipsum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingEleven">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false"
                                                        aria-controls="collapseEleven">
                                                        Windows
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                                <div class="accordion-content accordion-desc">
                                                    <!-- Column-->

                                                    <br>
                                                    <div class="card">

                                                        <div class="row ">

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div class="card" style="background-color: #A7FDCB">

                                                                    <div class="card-block">








                                                                        <div class="form-group form-inline">


                                                                            <label>Analoc: </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> 1.2 x 1.2 </option>
                                                                                <option> 1.6 x 1.2 </option>
                                                                                <option> 0.6 x 1.2</option>

                                                                            </select>

                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">


                                                                            <br>
                                                                            <br>

                                                                            <label>Steel casement: </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> 0.8 x 1.2 </option>
                                                                                <option> 0.7 x 1 </option>
                                                                                <option> 0.6 x 2.1</option>
                                                                            </select>
                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">








                                                                            <br>
                                                                            <br>
                                                                            <hr>
                                                                            <div class="form-group form-inline">
                                                                                <label class="text text-default">
                                                                                    <b>Window(s): </b>
                                                                                </label>&nbsp;
                                                                                <input type="number" class="form-control"
                                                                                    id="" style="width: 100px !important;">
                                                                                <button type="button" class="btn btn-primary" style="margin-left: 300px">Compute</button>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div>

                                                                    <div class="card">

                                                                        <div class="card-block">
                                                                            <div class="row">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Material</th>
                                                                                                <th>Estimated Qty</th>
                                                                                                <th>Estimated Cost</th>

                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="table-success">
                                                                                                <td>Panel Door:</td>
                                                                                                <td>2 Set</td>
                                                                                                <td>4000.0</td>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Door Knob:</td>
                                                                                                <td>2 set</td>
                                                                                                <td>600.0</td>

                                                                                            </tr>
                                                                                            <tr class="table-warning">
                                                                                                <td>Lock Set:</td>
                                                                                                <td>2 set</td>
                                                                                                <td>800.0</td>

                                                                                            </tr>

                                                                                            <tr class="table-success">
                                                                                                <td>Door Stopper:</td>
                                                                                                <td>2 pcs</td>
                                                                                                <td>500.0</td>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Door Closer:</td>
                                                                                                <td>2 pcs</td>
                                                                                                <td>700.0</td>

                                                                                            </tr>




                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>


                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <!-- TOTALS TABLE -->

                                                                    <div class="card-block">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-b-0 photo-table">
                                                                                <thead>
                                                                                    <tr class="text-uppercase">
                                                                                        <th class="text-left text-primary">Total Cost:</th>
                                                                                        <th class="text-center"></th>
                                                                                        <th class="text-center text-primary"> 22345.0</th>


                                                                                    </tr>
                                                                                </thead>

                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>





                                                        </div>

                                                    </div>

                                                    <!-- Column ends -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingTwelve">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg bg-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false"
                                                        aria-controls="collapseTwelve">
                                                        Doors
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                                <div class="accordion-content accordion-desc">
                                                    <!-- Column-->

                                                    <br>
                                                    <div class="card">

                                                        <div class="row ">

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div class="card" style="background-color: #A7FDCB">

                                                                    <div class="card-block">








                                                                        <div class="form-group form-inline">


                                                                            <label>Door Type: </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> Panel Door </option>
                                                                                <option> Analoc </option>
                                                                                <option> Flush Door</option>
                                                                                <option> Poly Door</option>
                                                                            </select>

                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">


                                                                            <br>
                                                                            <br>

                                                                            <label>Door Type:
                                                                                <span class="text text-default">
                                                                                    <b>Optional</b>
                                                                                </span>
                                                                            </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> Panel Door </option>
                                                                                <option> Analoc </option>
                                                                                <option> Flush Door</option>
                                                                                <option> Poly Door</option>
                                                                            </select>
                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">
                                                                            <br>
                                                                            <br>

                                                                            <label>Door Type:
                                                                                <label>Door Type:
                                                                                    <span class="text text-default">
                                                                                        <b>Optional</b>
                                                                                    </span>
                                                                                </label>
                                                                            </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> Panel Door </option>
                                                                                <option> Analoc </option>
                                                                                <option> Flush Door</option>
                                                                                <option> Poly Door</option>
                                                                            </select>
                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">
                                                                            <br>
                                                                            <br>
                                                                            <label>Door Knob: </label>
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1"> &nbsp; &nbsp;
                                                                            <label>Door Stopper:</label>
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1">

                                                                            <br>
                                                                            <br>
                                                                            <label>Lock Set:</label> &nbsp;&nbsp;&nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1"> &nbsp;&nbsp;
                                                                            <label>Door Closer:</label> &nbsp;&nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1">







                                                                            <br>
                                                                            <br>
                                                                            <hr>
                                                                            <div class="form-group form-inline">

                                                                                <button type="button" class="btn btn-primary" style="margin-left: 300px">Compute</button>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div>

                                                                    <div class="card">

                                                                        <div class="card-block">
                                                                            <div class="row">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Material</th>
                                                                                                <th>Estimated Qty</th>
                                                                                                <th>Estimated Cost</th>

                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="table-success">
                                                                                                <td>Panel Door:</td>
                                                                                                <td>2 Set</td>
                                                                                                <td>4000.0</td>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Door Knob:</td>
                                                                                                <td>2 set</td>
                                                                                                <td>600.0</td>

                                                                                            </tr>
                                                                                            <tr class="table-warning">
                                                                                                <td>Lock Set:</td>
                                                                                                <td>2 set</td>
                                                                                                <td>800.0</td>

                                                                                            </tr>

                                                                                            <tr class="table-success">
                                                                                                <td>Door Stopper:</td>
                                                                                                <td>2 pcs</td>
                                                                                                <td>500.0</td>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Door Closer:</td>
                                                                                                <td>2 pcs</td>
                                                                                                <td>700.0</td>

                                                                                            </tr>




                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>


                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <!-- TOTALS TABLE -->

                                                                    <div class="card-block">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-b-0 photo-table">
                                                                                <thead>
                                                                                    <tr class="text-uppercase">
                                                                                        <th class="text-left text-primary">Total Cost:</th>
                                                                                        <th class="text-center"></th>
                                                                                        <th class="text-center text-primary"> 22345.0</th>


                                                                                    </tr>
                                                                                </thead>

                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>





                                                        </div>

                                                    </div>

                                                    <!-- Column ends -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingThirteen">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false"
                                                        aria-controls="collapseThirteen">
                                                        Ceiling
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                                                <div class="accordion-content accordion-desc">
                                                    <!-- Column-->

                                                    <br>
                                                    <div class="card">

                                                        <div class="row ">

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <div class="card" style="background-color: #A7FDCB">

                                                                    <div class="card-block">








                                                                        <div class="form-group form-inline">



                                                                            <label class="text text-default">
                                                                                <span>
                                                                                    <b>Joist</b>
                                                                                </span>
                                                                            </label>
                                                                            <br>
                                                                            <br>
                                                                            <label>Lumber: </label>
                                                                            <select class="form-control" id="" style="width: 130px !important;">
                                                                                <option selected> 1 x 2 </option>
                                                                                <option>2 x 2 </option>
                                                                                <option>2 x 3 </option>
                                                                                <option>2 x 4 </option>

                                                                            </select>



                                                                            <label>Spacing: </label>
                                                                            <select class="form-control" id="" style="width: 130px !important;">
                                                                                <option selected> 30 x 30 </option>
                                                                                <option>30 x 60 </option>
                                                                                <option>40 x 40 </option>
                                                                                <option>40 x 60 </option>
                                                                                <option>60 x 60 </option>

                                                                            </select>
                                                                            <br>
                                                                            <br>

                                                                            <label class="text text-default">
                                                                                <span>
                                                                                    <b>Area</b>
                                                                                </span>
                                                                            </label>
                                                                            <br>
                                                                            <br>
                                                                            <label>Width: </label>
                                                                            <input type="number" class="form-control" id="" style="width: 140px !important;" placeholder="">



                                                                            <label>Length: </label>
                                                                            <input type="number" class="form-control" id="" style="width: 140px !important;" placeholder="">


                                                                            <br>
                                                                            <br>
                                                                            <label>Board Size: </label>
                                                                            <select class="form-control" id="" style="width: 310px !important;">
                                                                                <option selected> 30 x 30 </option>
                                                                                <option>40 x 40 </option>
                                                                                <option>40 x 60 </option>
                                                                                <option>60 x 60 </option>
                                                                                <option>60 x 120 </option>
                                                                                <option>90 x 180 </option>
                                                                                <option>120 x 240 </option>

                                                                            </select>


                                                                            <br>
                                                                            <br>


                                                                            <hr>
                                                                            <div class="form-group form-inline">
                                                                                <label class="text text-default">
                                                                                    <b>Celing(s): </b>
                                                                                </label>&nbsp;
                                                                                <input type="number" class="form-control"
                                                                                    id="" style="width: 100px !important;"
                                                                                    placeholder="1">
                                                                                <button type="button" class="btn" style="margin-left: 300px">Compute</button>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div>

                                                                    <div class="card">

                                                                        <div class="card-block">
                                                                            <div class="row">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Material</th>
                                                                                                <th>Estimated Qty</th>
                                                                                                <th>Estimated Cost</th>

                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="table-success">
                                                                                                <td>Ceiling Board:</td>
                                                                                                <td>5 pcsbags</td>
                                                                                                <td>1200.0</td>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Ceiling Joist:</td>
                                                                                                <td>5 pcs</td>
                                                                                                <td>1350.0</td>

                                                                                            </tr>
                                                                                            <tr class="table-warning">
                                                                                                <td>Nails and Accessories:</td>
                                                                                                <td>1 lot</td>
                                                                                                <td>700.0</td>

                                                                                            </tr>



                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>


                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <!-- TOTALS TABLE -->

                                                                    <div class="card-block">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-b-0 photo-table">
                                                                                <thead>
                                                                                    <tr class="text-uppercase">
                                                                                        <th class="text-left text-primary">Total Cost:</th>
                                                                                        <th class="text-center"></th>
                                                                                        <th class="text-center text-primary"> 22345.0</th>


                                                                                    </tr>
                                                                                </thead>

                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>





                                                        </div>

                                                    </div>

                                                    <!-- Column ends -->
                                                </div>
                                            </div>
                                        </div>
                                        <!--  
                 <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingFourteen">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                     Staircase
                    </a>
                  </h3>
                </div>
                <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                  <div class="accordion-content accordion-desc">
                    
                      
                      <br> 
                       <div class="card">
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12 "> <br>
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                        
                             
                          
                             
                             
                    
                             <div class="form-group form-inline">
                           
                            
                             <br> 
                            <label >Rise:</label>
                            <input type="number" class="form-control" id="" style="width: 150px !important;" placeholder="Height" > &nbsp; &nbsp;
                                 <label >Riser: </label>
                                 <select class="form-control" id="" style="width: 170px !important;">
                                    <option selected> 17 cm </option>
                                    <option > 18 cm </option>
                                    <option >20 cm </option>
                                    
                                </select>
                                 <br> <br>
                                 <label >Tread: </label>
                                  <input type="number" class="form-control" id="" style="width: 120px !important;" placeholder="Length" >
                                  <input type="number" class="form-control" id="" style="width: 120px !important;" placeholder="Width" >
                                  <input type="number" class="form-control" id="" style="width: 120px !important;" placeholder="Tread" >
                                 <br> <br>
                                 <label >Run:</label>
                            <input type="number" class="form-control" id="" style="width: 150px !important;" placeholder="Height" > &nbsp; &nbsp;
                                 <label >Nosing: </label>
                                 <input type="number" class="form-control" id="" style="width: 160px !important;"  >
                                 
                                 
                                 <br> <br>
                                
                           
                                 <hr>
                                 <div class="form-group form-inline">
                                 
                                <button type="button" class="btn" style="margin-left: 300px" >Compute</button>
                                 </div>
                        </div>
                             
                             
                             
                        </div>
                    </div>
          </div>
            
          <div class="col-sm-6 col-xs-12 "><br>
                <div>
              
              <div class="card">
                        
                        <div class="card-block">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Material</th>
                                            <th>Estimated Qty</th>
                                            <th>Estimated Cost</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="table-success">
                                            <td>Cement:</td>
                                            <td>5 bags</td>
                                            <td>1200.0</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Sand:</td>
                                            <td>4 cubic meters</td>
                                            <td>1350.0</td>
                                       
                                        </tr>
                                            <tr class="table-warning">
                                            <td>Gravel:</td>
                                            <td>4 cubic meters</td>
                                            <td>1300.0</td>
                                       
                                        </tr>
                                            
                                            <tr class="table-success">
                                            <td>Steelbar:</td>
                                            <td>6 pcs</td>
                                            <td>3500.0</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Tie Wire:</td>
                                            <td>3 kg</td>
                                            <td>500.0</td>
                                       
                                        </tr>
                                            <tr class="table-warning">
                                            <td>Handrail:</td>
                                            <td>5 linear meter</td>
                                            <td>3800.0</td>
                                       
                                        </tr>
                                        
                                            
                                      
                                        </tbody>
                                    </table>
                                </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                    
             

                                    <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                            <th class="text-center"></th>
                                                            <th class="text-center text-primary"> 22345.0</th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>
                                
              </div>
          </div>
          
          
           
            
            
        </div>
      
    </div>
                      
     <!-- Column ends
                  </div>
                </div>
              </div>
                                
                                -->


                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingFifteen">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false"
                                                        aria-controls="collapseFifteen">
                                                        Paint Ceiling
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                                                <div class="accordion-content accordion-desc">
                                                    <!-- Column-->

                                                    <br>
                                                    <div class="card">

                                                        <div class="row ">

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div class="card" style="background-color: #A7FDCB">

                                                                    <div class="card-block">








                                                                        <div class="form-group form-inline">

                                                                            <label class="text text-default">
                                                                                <b>Area</b>
                                                                            </label>
                                                                            <br>
                                                                            <label>Width:</label>
                                                                            <input type="" class="form-control" id="" style="width: 130px !important;">
                                                                            <label>Length:</label>
                                                                            <input type="" class="form-control" id="" style="width: 130px !important;">
                                                                            <br>
                                                                            <br>





                                                                            <div class="form-group pull-center">
                                                                                <label class="text text-default">
                                                                                    <b>Paint Type</b>
                                                                                </label>

                                                                            </div>
                                                                            <br>



                                                                            <div class="form-group form-inline">

                                                                                <select class="form-control" id="" style="width: 450px !important;">
                                                                                    <option selected> Primer </option>
                                                                                    <option> Enamel </option>
                                                                                    <option>Roof </option>
                                                                                    <option>Varnishing </option>
                                                                                </select>

                                                                            </div>
                                                                            <br>
                                                                            <br>


                                                                            <hr>
                                                                            <div class="form-group form-inline">
                                                                                <label class="text text-danger">
                                                                                    <b>How Many of these?</b>
                                                                                </label>&nbsp;
                                                                                <input type="number" class="form-control"
                                                                                    id="" style="width: 100px !important;">
                                                                                <button type="button" class="btn btn-primary" style="margin-left: 90px">Compute</button>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div>

                                                                    <div class="card">

                                                                        <div class="card-block">
                                                                            <div class="row">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Material</th>
                                                                                                <th>Estimated Qty</th>
                                                                                                <th>Estimated Cost</th>

                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="table-success">
                                                                                                <td>Enamel:</td>
                                                                                                <td>2.5 gallons</td>
                                                                                                <td>3500.0</td>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Neutrilizer:</td>
                                                                                                <td>1 gallon</td>
                                                                                                <td>50.0</td>

                                                                                            </tr>



                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>


                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <!-- TOTALS TABLE -->

                                                                    <div class="card-block">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-b-0 photo-table">
                                                                                <thead>
                                                                                    <tr class="text-uppercase">
                                                                                        <th class="text-left text-primary">Total Cost:</th>
                                                                                        <th class="text-center"></th>
                                                                                        <th class="text-center text-primary"> 22345.0</th>


                                                                                    </tr>
                                                                                </thead>

                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>





                                                        </div>

                                                    </div>

                                                    <!-- Column ends -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingSixteen">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg bg-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false"
                                                        aria-controls="collapseSixteen">
                                                        Paint Walls
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
                                                <div class="accordion-content accordion-desc">
                                                    <!-- Column-->

                                                    <br>
                                                    <div class="card">

                                                        <div class="row ">

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div class="card" style="background-color: #A7FDCB">

                                                                    <div class="card-block">








                                                                        <div class="form-group form-inline">

                                                                            <label class="text text-default">
                                                                                <b>Area</b>
                                                                            </label>
                                                                            <br>
                                                                            <label>Width:</label>
                                                                            <input type="" class="form-control" id="" style="width: 130px !important;">
                                                                            <label>Length:</label>
                                                                            <input type="" class="form-control" id="" style="width: 130px !important;">
                                                                            <br>
                                                                            <br>





                                                                            <div class="form-group pull-center">
                                                                                <label class="text text-default">
                                                                                    <b>Paint Type</b>
                                                                                </label>

                                                                            </div>
                                                                            <br>



                                                                            <div class="form-group form-inline">

                                                                                <select class="form-control" id="" style="width: 450px !important;">
                                                                                    <option selected> Primer </option>
                                                                                    <option> Enamel </option>
                                                                                    <option>Roof </option>
                                                                                    <option>Varnishing </option>
                                                                                </select>

                                                                            </div>
                                                                            <br>
                                                                            <br>


                                                                            <hr>
                                                                            <div class="form-group form-inline">
                                                                                <label class="text text-danger">
                                                                                    <b>How Many of these?</b>
                                                                                </label>&nbsp;
                                                                                <input type="number" class="form-control"
                                                                                    id="" style="width: 100px !important;">
                                                                                <button type="button" class="btn btn-success" style="margin-left: 90px">Compute</button>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div>

                                                                    <div class="card">

                                                                        <div class="card-block">
                                                                            <div class="row">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Material</th>
                                                                                                <th>Estimated Qty</th>
                                                                                                <th>Estimated Cost</th>

                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="table-success">
                                                                                                <td>Enamel:</td>
                                                                                                <td>2.5 gallons</td>
                                                                                                <td>3500.0</td>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Neutrilizer:</td>
                                                                                                <td>1 gallon</td>
                                                                                                <td>50.0</td>

                                                                                            </tr>



                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>


                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <!-- TOTALS TABLE -->

                                                                    <div class="card-block">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-b-0 photo-table">
                                                                                <thead>
                                                                                    <tr class="text-uppercase">
                                                                                        <th class="text-left text-primary">Total Cost:</th>
                                                                                        <th class="text-center"></th>
                                                                                        <th class="text-center text-primary"> 22345.0</th>


                                                                                    </tr>
                                                                                </thead>

                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>





                                                        </div>

                                                    </div>

                                                    <!-- Column ends -->
                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingSeventeen">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg bg-success" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false"
                                                        aria-controls="collapseSeventeen">
                                                        Electrical Works
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
                                                <div class="accordion-content accordion-desc">
                                                    <!-- Column-->

                                                    <br>
                                                    <div class="card">

                                                        <div class="row ">

                                                            <div class="col-sm-6 col-xs-12 scroll">
                                                                <br>
                                                                <div class="card" style="background-color: #A7FDCB">

                                                                    <div class="card-block">








                                                                        <div class="form-group form-inline">


                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> #14 THHN</option>
                                                                                <option> #12 THHN </option>
                                                                                <option> #10 THHN</option>
                                                                                <option> #8 THHN</option>
                                                                            </select>

                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">


                                                                            <br>
                                                                            <br>

                                                                            <label>
                                                                                <span class="text text-primary">Optional</span>
                                                                            </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> #14 THHN</option>
                                                                                <option> #12 THHN </option>
                                                                                <option> #10 THHN</option>
                                                                                <option> #8 THHN</option>
                                                                            </select>

                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">


                                                                            <br>
                                                                            <br>

                                                                            <label>
                                                                                <span class="text text-primary">Optional</span>
                                                                            </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> #14 THHN</option>
                                                                                <option> #12 THHN </option>
                                                                                <option> #10 THHN</option>
                                                                                <option> #8 THHN</option>
                                                                            </select>

                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">


                                                                            <br>
                                                                            <br>
                                                                            <label>
                                                                                <span class="text text-primary">Optional</span>
                                                                            </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> #14 THHN</option>
                                                                                <option> #12 THHN </option>
                                                                                <option> #10 THHN</option>
                                                                                <option> #8 THHN</option>
                                                                            </select>

                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">


                                                                            <br>
                                                                            <br>

                                                                            <label>
                                                                                <b> Circuit Breaker </b>
                                                                            </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> 15a</option>
                                                                                <option> 20a </option>
                                                                                <option> 30a</option>
                                                                                <option> 60a</option>
                                                                            </select>

                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">


                                                                            <br>
                                                                            <br>


                                                                            <label class="label label-primary"> Accessories</label>
                                                                            <br>
                                                                            <br>


                                                                            <label>Panel Board: </label> &nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1"> &nbsp; &nbsp;
                                                                            <label>PVC Clips:</label> &nbsp; &nbsp; &nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1">

                                                                            <br>
                                                                            <br>
                                                                            <label>Lights:</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            &nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1"> &nbsp;&nbsp;
                                                                            <label>Junction Box:</label> &nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1">

                                                                            <br>
                                                                            <br>
                                                                            <label>Light Switch:</label> &nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1"> &nbsp;&nbsp;
                                                                            <label>Utility Box:</label> &nbsp;&nbsp; &nbsp; &nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1">
                                                                            <br>
                                                                            <br>
                                                                            <label>Square Box:</label> &nbsp;&nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1"> &nbsp;&nbsp;
                                                                            <label>Motor Pump:</label> &nbsp;&nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1">
                                                                            <br>
                                                                            <br>
                                                                            <label class="text text-primary">Optional</label>
                                                                            <br>
                                                                            <label>Doorbell Buzzer:</label> &nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1"> &nbsp;&nbsp;
                                                                            <br>
                                                                            <br>
                                                                            <label>Smoke Alarm:</label> &nbsp;&nbsp; &nbsp; &nbsp;
                                                                            <input type="number" class="form-control" id="" style="width: 100px !important;" placeholder="1">







                                                                            <br>
                                                                            <br>
                                                                            <hr>
                                                                            <div class="form-group form-inline">

                                                                                <button type="button" class="btn" style="margin-left: 300px">Compute</button>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12 scroll ">
                                                                <br>


                                                                <div class="card">

                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="table-responsive">
                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Material</th>
                                                                                            <th>Estimated Qty</th>
                                                                                            <th>Estimated Cost</th>

                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr class="table-success">
                                                                                            <td>Panel Board:</td>
                                                                                            <td>1 pc</td>
                                                                                            <td>400.0</td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>PVC Clips:</td>
                                                                                            <td>128 pcs</td>
                                                                                            <td>1200.0</td>

                                                                                        </tr>
                                                                                        <tr class="table-warning">
                                                                                            <td>Lights:</td>
                                                                                            <td>5 pcs</td>
                                                                                            <td>1500.0</td>

                                                                                        </tr>

                                                                                        <tr class="table-success">
                                                                                            <td>Junction Box:</td>
                                                                                            <td>2 pcs</td>
                                                                                            <td>500.0</td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Light Switch:</td>
                                                                                            <td>8 pcs</td>
                                                                                            <td>1300.0</td>

                                                                                        </tr>

                                                                                        <tr class="table-success">
                                                                                            <td>Utility Box:</td>
                                                                                            <td>3 pc</td>
                                                                                            <td>300.0</td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Square Box:</td>
                                                                                            <td>2 pcs</td>
                                                                                            <td>600.0</td>

                                                                                        </tr>
                                                                                        <tr class="table-warning">
                                                                                            <td>Doorbell Buzzer:</td>
                                                                                            <td>1 lot</td>
                                                                                            <td>1300.0</td>

                                                                                        </tr>

                                                                                        <tr class="table-success">
                                                                                            <td>Smoke Alarm:</td>
                                                                                            <td>1 lot</td>
                                                                                            <td>4000.0</td>

                                                                                        </tr>





                                                                                    </tbody>
                                                                                </table>
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <!-- TOTALS TABLE -->

                                                                <div class="card-block">
                                                                    <div class="table-responsive">
                                                                        <table class="table m-b-0 photo-table">
                                                                            <thead>
                                                                                <tr class="text-uppercase">
                                                                                    <th class="text-left text-primary">Total Cost:</th>
                                                                                    <th class="text-center"></th>
                                                                                    <th class="text-center text-primary"> 22345.0</th>


                                                                                </tr>
                                                                            </thead>

                                                                        </table>
                                                                    </div>
                                                                </div>


                                                            </div>





                                                        </div>

                                                    </div>

                                                    <!-- Column ends -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingEighteen">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen" aria-expanded="false"
                                                        aria-controls="collapseEighteen">
                                                        Plumbing Works
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEighteen">
                                                <div class="accordion-content accordion-desc">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has survived
                                                        not only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was popularised in the 1960s
                                                        with the release of Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software like Aldus PageMaker
                                                        including versions of Lorem Ipsum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingNineteen">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg bg-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen" aria-expanded="false"
                                                        aria-controls="collapseNineteen">
                                                        Tiles
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseNineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNineteen">
                                                <div class="accordion-content accordion-desc">
                                                    <!-- Column-->

                                                    <br>
                                                    <div class="card">

                                                        <div class="row ">

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div class="card" style="background-color: #A7FDCB">

                                                                    <div class="card-block">








                                                                        <div class="form-group form-inline">

                                                                            <label class="text text-default">
                                                                                <b>Area</b>
                                                                            </label>
                                                                            <br>
                                                                            <label>Width:</label>
                                                                            <input type="" class="form-control" id="" style="width: 130px !important;">
                                                                            <label>Length:</label>
                                                                            <input type="" class="form-control" id="" style="width: 130px !important;">
                                                                            <br>
                                                                            <br>





                                                                            <div class="form-group pull-center">
                                                                                <label class="text text-default">
                                                                                    <b>Tile Size</b>
                                                                                </label>

                                                                            </div>
                                                                            <br>



                                                                            <div class="form-group form-inline">
                                                                                <label for="">Width:</label>
                                                                                <select class="form-control" id="" style="width: 130px !important;">
                                                                                    <option selected> 30 </option>
                                                                                    <option> 60 </option>
                                                                                    <option>45 </option>
                                                                                    <option>60 </option>
                                                                                </select>
                                                                                &nbsp;
                                                                                <label>
                                                                                    <b>x</b>
                                                                                </label> &nbsp; &nbsp;
                                                                                <label for="">Length:</label>
                                                                                <select class="form-control" id="" style="width: 130px !important;">
                                                                                    <option selected> 60 </option>
                                                                                    <option> 60 </option>
                                                                                    <option>90</option>
                                                                                    <option>120 </option>
                                                                                </select>
                                                                            </div>
                                                                            <br>
                                                                            <br>


                                                                            <hr>
                                                                            <div class="form-group form-inline">
                                                                                <button type="button" class="btn btn-success" style="margin-left: 300px">Compute</button>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12 ">
                                                                <br>
                                                                <div>

                                                                    <div class="card">

                                                                        <div class="card-block">
                                                                            <div class="row">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Material</th>
                                                                                                <th>Estimated Qty</th>
                                                                                                <th>Estimated Cost</th>

                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="table-success">
                                                                                                <td>60x60 Tiles</td>
                                                                                                <td>600 pcs</td>
                                                                                                <td>5300.0</td>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Tile Grout Cement:</td>
                                                                                                <td>2 bags</td>
                                                                                                <td>350.0</td>

                                                                                            </tr>
                                                                                            <tr class="table-warning">
                                                                                                <td>Tile Grout Sand:</td>
                                                                                                <td>2 cubic meters</td>
                                                                                                <td>400.0</td>

                                                                                            </tr>

                                                                                            <tr class="table-success">
                                                                                                <td>Tile Adhesive:</td>
                                                                                                <td>2 cans</td>
                                                                                                <td>600.0</td>

                                                                                            </tr>


                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>


                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <!-- TOTALS TABLE -->

                                                                    <div class="card-block">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-b-0 photo-table">
                                                                                <thead>
                                                                                    <tr class="text-uppercase">
                                                                                        <th class="text-left text-primary">Total Cost:</th>
                                                                                        <th class="text-center"></th>
                                                                                        <th class="text-center text-primary"> 22345.0</th>


                                                                                    </tr>
                                                                                </thead>

                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>





                                                        </div>

                                                    </div>

                                                    <!-- Column ends -->
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
            
          </div>
          
          
          
          
           
          <div class="card-block">
                                            <div class="table-responsive">
                                            <input type=hidden id="OverallTotalCost1" name="OverallTotalCost" value="">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Overall Total Cost:</th>
                                                         
                                                            <th class="text-center text-primary" id="OverallTotalCost">  </th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                            </div>
                                        </div>  
          
          
          
          
          
          
                        <div class="form-group form-inline">
                            <a type="button" class="btn btn-outline-success" style="margin-left: 800px" href="#" onclick="HTMLtoPDF()">Save as pdf</a>
                           
                            <button type="submit" class="btn btn-primary ">Save Estimation</button>
                        </div>

                    </div>

                </div>

            </div>
            <!-- Multiple Open Accordion ends -->

            </div>
   
    <!-- Row end -->

    </form>

    <!--////////////////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////////////////-->


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
                                <img class="img-fluid img-sm" src="/assets/images/social/profile.jpg" alt="">
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



@endsection @section('script')


<script>

    function computeAndDisplayOverallTotal(){
        var overAllTotal = parseFloat($("#totalGeneralReq1").val()) + parseFloat($("#ColumnTotalCost1").val());

        $("#OverallTotalCost").html(overAllTotal);
    }

    var searchValues = function (X1,Y1,Work1){
        var AnswersArray = {!!json_encode($AnswersArray)!!};
        for ( var column in AnswersArray ) {
            var values = AnswersArray[column];
            var X2 = values['X'];
            var Y2 = values['Y'];
            var Work2 = values['Work'];
            if(X1 == X2 && Y1 == Y2 && Work1 == Work2 ){
               var answer = values['Values'];
            }
        }
        return { Answer: answer }; 
    }

    var searchPrice = function (materialid){
        var MaterialArray = {!!json_encode($MaterialArray)!!};
        var date1 = '';
        for( var column in MaterialArray){
            var materialindex = MaterialArray[column];
            var date2 = materialindex['date'];
            var materialid2 = materialindex['MaterialId'];
            if(date1 < date2 && materialid == materialid2){
                date1 = date2;
                var materyales = materialindex['materialName'];
                var presyo = materialindex['price'];
            }
        }
        return {
        materialname: materyales,
        materialprice: presyo
        };
    }

    var ConcreteEsti = function(Q,volume,X,Y,W){
        var formulas = searchValues(X,Y,W);
        var formula = formulas.Answer;

        var CementQty = volume * formula * Q;
        var SandQty = volume * 0.5 * Q;
        var GravelQty = volume * 1.0 * Q;

        var prices1 = searchPrice(1);
        var price1 = prices1.materialprice;
        var Cement = prices1.materialname;
        var CementCost = CementQty * price1;
        var prices2 = searchPrice(2);
        var price2 = prices2.materialprice;
        var Sand = prices2.materialname;
        var SandCost = SandQty * price2;
        var prices3 = searchPrice(3);
        var price3 = prices3.materialprice;
        var Gravel = prices3.materialname;
        var GravelCost = GravelQty * price3;

        return {
            cement: Cement,
            cementqty: CementQty,
            cementcost: CementCost,
            sand: Sand,
            sandqty: SandQty,
            sandcost: SandCost,
            gravel: Gravel,
            gravelqty: GravelQty,
            gravelcost: GravelCost
        };
    }

    $("#ComputeGeneralReq").click(function() {
        var totalGeneralReq = 0;
        totalGeneralReq  += parseFloat($("#BuildingPermit").val()) ;
        totalGeneralReq  += parseFloat($("#TemporaryFacilities").val()) ;
        totalGeneralReq  += parseFloat($("#WorkersBarracks").val()) ;
        totalGeneralReq  += parseFloat($("#Excavation").val()) ;
        totalGeneralReq  += parseFloat($("#Backfill").val()) ;
        totalGeneralReq  += parseFloat($("#Lastillas").val()) ;
        totalGeneralReq  += parseFloat($("#SoilPoisoning").val()) ;
        totalGeneralReq  += parseFloat($("#LaborCost").val()) ;
        totalGeneralReq  += parseFloat($("#ToolsEquipments").val()) ;
        totalGeneralReq  += parseFloat($("#Transportation").val()) ;
        totalGeneralReq  += parseFloat($("#Contigency").val()) ;
        totalGeneralReq  += parseFloat($("#OverheadProfit").val()) ;
        $("#totalGeneralReq").html(parseFloat(totalGeneralReq));
        $("#totalGeneralReq1").val(parseFloat(totalGeneralReq));

        computeAndDisplayOverallTotal();
    });

   $("#computeColumn").click(function () {
        var X1 = 1; //horizontal
        var Work1 = 1; //work
        $("#ColumnsBarLeng").val();
        $("#ColumnsBarSize").val();

        var A = $("#ColumnWidth").val() * $("#ColumnLength").val();
        var V = $("#ColumnThickness").val() * A;
        $("#ColumnVolume").val(V);

            var EstiConcretes = ConcreteEsti($("#HowManyColumns").val(),V,X1,$("#ColumnCC").val(),Work1);

        $("#ColumnCement").html(EstiConcretes.cement);
        $("#ColumnCementBag").html(parseFloat(EstiConcretes.cementqty) + parseFloat($("#ColumnCementBag1").val()));
        $("#ColumnCementCost").html(parseFloat(EstiConcretes.cementcost) + parseFloat($("#ColumnCementCost1").val()));
        $("#ColumnCement1").val(1);
        $("#ColumnCementBag1").val(parseFloat(EstiConcretes.cementqty) + parseFloat($("#ColumnCementBag1").val()));
        $("#ColumnCementCost1").val(parseFloat(EstiConcretes.cementcost) + parseFloat($("#ColumnCementCost1").val()));

        $("#ColumnS").html(EstiConcretes.sand);
        $("#ColumnSand").html(parseFloat(EstiConcretes.sandqty) + parseFloat($("#ColumnSand1").val()));
        $("#ColumnSandCost").html(parseFloat(EstiConcretes.sandcost) + parseFloat($("#ColumnSandCost1").val()));
        $("#ColumnS1").val(2);
        $("#ColumnSand1").val(parseFloat(EstiConcretes.sandqty) + parseFloat($("#ColumnSand1").val()));
        $("#ColumnSandCost1").val(parseFloat(EstiConcretes.sandcost) + parseFloat($("#ColumnSandCost1").val()));

        $("#ColumnG").html(EstiConcretes.gravel);
        $("#ColumnGravel").html(parseFloat(EstiConcretes.gravelqty) + parseFloat($("#ColumnGravel1").val()));
        $("#ColumnGravelCost").html(parseFloat(EstiConcretes.gravelcost) + parseFloat($("#ColumnGravelCost1").val()));
        $("#ColumnG1").val(3);
        $("#ColumnGravel1").val(parseFloat(EstiConcretes.gravelqty) + parseFloat($("#ColumnGravel1").val()));
        $("#ColumnGravelCost1").val(parseFloat(EstiConcretes.gravelcost) + parseFloat($("#ColumnGravelCost1").val()));

        //metals
            var search = searchPrice(4);
            var price = search.materialprice;
            var BarPcs = (parseFloat($("#ColumnNoOfBars").val()) * parseFloat($("#HowManyColumns").val())) + parseFloat($("#ColumnSteelBarQty1").val());
            var price = BarPcs * price;
        $("#ColumnSteelBar").html(search.materialname);
        $("#ColumnSteelBarQty").html(BarPcs);
        $("#ColumnSteelBarCost").html(price);
        $("#ColumnSteelBar1").val(4);
        $("#ColumnSteelBarQty1").val(BarPcs);
        $("#ColumnSteelBarCost1").val(price);

            var search = searchPrice(5);
            var price = search.materialprice;
            var TieBarPcs = (Math.ceil(parseFloat($("#ColumnLength").val()) / (parseFloat($("#ColumnsBarSize").val()) * 16))) + parseFloat($("#ColumnTieBarQty1").val());
            var price = TieBarPcs * price;
        $("#ColumnTieBar").html(search.materialname);
        $("#ColumnTieBarQty").html(TieBarPcs);
        $("#ColumnTieBarCost").html(price);
        $("#ColumnTieBar1").val(5);
        $("#ColumnTieBarQty1").val(TieBarPcs);
        $("#ColumnTieBarCost1").val(price);
        
            var search = searchPrice(6);
            var price = search.materialprice;
            var TieWires = (((parseFloat($("#ColumnNoOfBars").val()) * TieBarPcs) * parseFloat($("#ColumnsTieWire").val())) / 53) + parseFloat($("#ColumnTieWireKg1").val());
            var price = TieWires * price;
        $("#ColumnTieWire").html(search.materialname);
        $("#ColumnTieWireKg").html(parseFloat(TieWires).toFixed(2));
        $("#ColumnTieWireCost").html(parseFloat(price).toFixed(2));
        $("#ColumnTieWire1").val(6);
        $("#ColumnTieWireKg1").val(TieWires);
        $("#ColumnTieWireCost1").val(price);

    $("#ColumnTotalCost1").val( parseFloat($("#ColumnCementCost1").val()) + parseFloat($("#ColumnSandCost1").val()) + parseFloat($("#ColumnGravelCost1").val()) + parseFloat($("#ColumnSteelBarCost1").val()) + parseFloat($("#ColumnTieBarCost1").val()) + parseFloat($("#ColumnTieWireCost1").val()) );
    $("#ColumnTotalCost").html( parseFloat($("#ColumnTotalCost1").val()).toFixed(2) );

        computeAndDisplayOverallTotal();
    });

//#########################################################################################################################################################################################
$("#computeFooting").click(function () {
    
        var X1 = 1; //horizontal
        var Work1 = 1; //work
        var A = $("#FootingWidth").val() * $("#FootingLength").val();
        var V = $("#FootingThickness").val() * A;
        $("#FootingVolume").val(V);

            var EstiConcretes = ConcreteEsti($("#HowManyFootings").val(),V,X1,$("#FootingCC").val(),Work1);

        $("#FootingCement").html(EstiConcretes.cement);
        $("#FootingCementBag").html(parseFloat(EstiConcretes.cementqty) + parseFloat($("#FootingCementBag1").val()));
        $("#FootingCementCost").html(parseFloat(EstiConcretes.cementcost) + parseFloat($("#FootingCementCost1").val()));
        $("#FootingCement1").val(1);
        $("#FootingCementBag1").val(parseFloat(EstiConcretes.cementqty) + parseFloat($("#FootingCementBag1").val()));
        $("#FootingCementCost1").val(parseFloat(EstiConcretes.cementcost) + parseFloat($("#FootingCementCost1").val()));

        $("#FootingS").html(EstiConcretes.sand);
        $("#FootingSand").html(parseFloat(EstiConcretes.sandqty) + parseFloat($("#FootingSand1").val()));
        $("#FootingSandCost").html(parseFloat(EstiConcretes.sandcost) + parseFloat($("#FootingSandCost1").val()));
        $("#FootingS1").val(2);
        $("#FootingSand1").val(parseFloat(EstiConcretes.sandqty) + parseFloat($("#FootingSand1").val()));
        $("#FootingSandCost1").val(parseFloat(EstiConcretes.sandcost) + parseFloat($("#FootingSandCost1").val()));

        $("#FootingG").html(EstiConcretes.gravel);
        $("#FootingGravel").html(parseFloat(EstiConcretes.gravelqty) + parseFloat($("#FootingGravel1").val()));
        $("#FootingGravelCost").html(parseFloat(EstiConcretes.gravelcost) + parseFloat($("#FootingGravelCost1").val()));
        $("#FootingG1").val(3);
        $("#FootingGravel1").val(parseFloat(EstiConcretes.gravelqty) + parseFloat($("#FootingGravel1").val()));
        $("#FootingGravelCost1").val(parseFloat(EstiConcretes.gravelcost) + parseFloat($("#FootingGravelCost1").val()));

    $("#FootingTotalCost1").val( parseFloat($("#FootingCementCost1").val()) + parseFloat($("#FootingSandCost1").val()) + parseFloat($("#FootingGravelCost1").val()) /*+ parseFloat($("#FootingSteelBarCost1").val()) + parseFloat($("#FootingTieBarCost1").val()) + parseFloat($("#FootingTieWireCost1").val()) */);
    $("#FootingTotalCost").html( $("#FootingTotalCost1").val() );
        computeAndDisplayOverallTotal();
});

$("#computeSlab").click(function () {
    
    var X1 = 1; //horizontal
    var Work1 = 1; //work
    var A = $("#SlabWidth").val() * $("#SlabLength").val();
    var V = $("#SlabThickness").val() * A;
    $("#SlabVolume").val(V);

        var EstiConcretes = ConcreteEsti($("#HowManySlabs").val(),V,X1,$("#SlabCC").val(),Work1);

    $("#SlabCement").html(EstiConcretes.cement);
    $("#SlabCementBag").html(parseFloat(EstiConcretes.cementqty) + parseFloat($("#SlabCementBag1").val()));
    $("#SlabCementCost").html(parseFloat(EstiConcretes.cementcost) + parseFloat($("#SlabCementCost1").val()));
    $("#SlabCement1").val(1);
    $("#SlabCementBag1").val(parseFloat(EstiConcretes.cementqty) + parseFloat($("#SlabCementBag1").val()));
    $("#SlabCementCost1").val(parseFloat(EstiConcretes.cementcost) + parseFloat($("#SlabCementCost1").val()));

    $("#SlabS").html(EstiConcretes.sand);
    $("#SlabSand").html(parseFloat(EstiConcretes.sandqty) + parseFloat($("#SlabSand1").val()));
    $("#SlabSandCost").html(parseFloat(EstiConcretes.sandcost) + parseFloat($("#SlabSandCost1").val()));
    $("#SlabS1").val(2);
    $("#SlabSand1").val(parseFloat(EstiConcretes.sandqty) + parseFloat($("#SlabSand1").val()));
    $("#SlabSandCost1").val(parseFloat(EstiConcretes.sandcost) + parseFloat($("#SlabSandCost1").val()));

    $("#SlabG").html(EstiConcretes.gravel);
    $("#SlabGravel").html(parseFloat(EstiConcretes.gravelqty) + parseFloat($("#SlabGravel1").val()));
    $("#SlabGravelCost").html(parseFloat(EstiConcretes.gravelcost) + parseFloat($("#SlabGravelCost1").val()));
    $("#SlabG1").val(3);
    $("#SlabGravel1").val(parseFloat(EstiConcretes.gravelqty) + parseFloat($("#SlabGravel1").val()));
    $("#SlabGravelCost1").val(parseFloat(EstiConcretes.gravelcost) + parseFloat($("#SlabGravelCost1").val()));

    $("#SlabTotalCost1").val( parseFloat($("#SlabCementCost1").val()) + parseFloat($("#SlabSandCost1").val()) + parseFloat($("#SlabGravelCost1").val()) /*+ parseFloat($("#SlabSteelBarCost1").val()) + parseFloat($("#SlabTieBarCost1").val()) + parseFloat($("#SlabTieWireCost1").val()) */);
    $("#SlabTotalCost").html( $("#SlabTotalCost1").val() );
        computeAndDisplayOverallTotal();
});

$("#computeBeam").click(function () {
    
    var X1 = 1; //horizontal
    var Work1 = 1; //work
    var A = $("#BeamWidth").val() * $("#BeamLength").val();
    var V = $("#BeamThickness").val() * A;
    $("#BeamVolume").val(V);

        var EstiConcretes = ConcreteEsti($("#HowManyBeams").val(),V,X1,$("#BeamCC").val(),Work1);

    $("#BeamCement").html(EstiConcretes.cement);
    $("#BeamCementBag").html(parseFloat(EstiConcretes.cementqty) + parseFloat($("#BeamCementBag1").val()));
    $("#BeamCementCost").html(parseFloat(EstiConcretes.cementcost) + parseFloat($("#BeamCementCost1").val()));
    $("#BeamCement1").val(1);
    $("#BeamCementBag1").val(parseFloat(EstiConcretes.cementqty) + parseFloat($("#BeamCementBag1").val()));
    $("#BeamCementCost1").val(parseFloat(EstiConcretes.cementcost) + parseFloat($("#BeamCementCost1").val()));

    $("#BeamS").html(EstiConcretes.sand);
    $("#BeamSand").html(parseFloat(EstiConcretes.sandqty) + parseFloat($("#BeamSand1").val()));
    $("#BeamSandCost").html(parseFloat(EstiConcretes.sandcost) + parseFloat($("#BeamSandCost1").val()));
    $("#BeamS1").val(2);
    $("#BeamSand1").val(parseFloat(EstiConcretes.sandqty) + parseFloat($("#BeamSand1").val()));
    $("#BeamSandCost1").val(parseFloat(EstiConcretes.sandcost) + parseFloat($("#BeamSandCost1").val()));

    $("#BeamG").html(EstiConcretes.gravel);
    $("#BeamGravel").html(parseFloat(EstiConcretes.gravelqty) + parseFloat($("#BeamGravel1").val()));
    $("#BeamGravelCost").html(parseFloat(EstiConcretes.gravelcost) + parseFloat($("#BeamGravelCost1").val()));
    $("#BeamG1").val(3);
    $("#BeamGravel1").val(parseFloat(EstiConcretes.gravelqty) + parseFloat($("#BeamGravel1").val()));
    $("#BeamGravelCost1").val(parseFloat(EstiConcretes.gravelcost) + parseFloat($("#BeamGravelCost1").val()));

    $("#BeamTotalCost1").val( parseFloat($("#BeamCementCost1").val()) + parseFloat($("#BeamSandCost1").val()) + parseFloat($("#BeamGravelCost1").val()) /*+ parseFloat($("#BeamSteelBarCost1").val()) + parseFloat($("#BeamTieBarCost1").val()) + parseFloat($("#BeamTieWireCost1").val()) */);
    $("#BeamTotalCost").html( $("#BeamTotalCost1").val() );
        computeAndDisplayOverallTotal();
});

$("#OverallTotalCost1").val( parseFloat($("#totalGeneralReq1").val()) + parseFloat($("#ColumnTotalCost1").val()) + parseFloat($("#FootingTotalCost1").val()) + parseFloat($("#SlabTotalCost1").val()) + parseFloat($("#BeamTotalCost1").val()) );
$("#OverallTotalCost").html($("#OverallTotalCost1").val());

</script>

@endsection -->
