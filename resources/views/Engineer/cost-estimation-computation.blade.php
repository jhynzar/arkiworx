@extends('layouts.master-engineer')
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
        <img class="img-fluid logo" src="/assets/images/NYETA2.png" alt="Theme-logo">
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
                        <img class="img-circle " src="/assets/images/erwin.jpg" style="width:40px;" alt="User Image">
                    </span>
                    <span>
                        <b>Erwin</b>Andres</span>

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
                        <img src="/assets/images/erwin.jpg" alt="PagePreloadingEffect" />
                        <h3>Page Preloading Effect</h3>
                    </a>

                    <a class="dummy-media-object" href="#!">
                        <img src="/assets/images/erwin.jpg" alt="DraggableDualViewSlideshow" />
                        <h3>Draggable Dual-View Slideshow</h3>
                    </a>
                </div>
                <div class="dummy-column">
                    <h2>Recent</h2>
                    <a class="dummy-media-object" href="#!">
                        <img src="/assets/images/erwin.jpg" alt="TooltipStylesInspiration" />
                        <h3>Tooltip Styles Inspiration</h3>
                    </a>
                    <a class="dummy-media-object" href="#!">
                        <img src="/assets/images/erwin.jpg" alt="NotificationStyles" />
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
                <img src="/assets/images/erwin.jpg" alt="User Image" class="img-circle">
            </div>
            <div class="f-left info">
                <br>
                <br>
                <p>
                    <b>Erwin</b>
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
        <div class="card" >
          <div class="card-header" style="background-color: #778899">
            <h5 class="card-header-text">1 - Storey Project</h5>
            
          </div>
            
          <div class="card-block accordion-block ">
            
                    <div class="col-lg-12"> 
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
                           
                                <label class="text text-default"><b>Permit</b> </label>  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label class="text text-default"><b>Miscellaneous</b> </label> <br><br>
                                    <label> Building Permit</label>
                                    @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 1)<input type="number" class="form-control" value="{{ $record -> cost }}" id="BuildingPermit" name="BuildingPermit" style="width: 100px !important;" placeholder="">@endif @endforeach
                                     &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label> DENR <span class="text text-primary"><i>Optional</i></span></label>  &nbsp; 
                                    @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 2)<input type="number" class="form-control" value="{{ $record -> cost }}" id="DENR" name="DENR" style="width: 100px !important;" placeholder="">@endif @endforeach
                                 
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label> Temporary Facilities</label>
                                    @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 3)<input type="number" class="form-control" value="{{ $record -> cost }}" id="TemporaryFacilities" name="TemporaryFacilities" style="width: 100px !important;" placeholder="">@endif @endforeach
                                     &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label> Workers' Barracks</label>
                                    @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 4)<input type="number" class="form-control" value="{{ $record -> cost }}" id="WorkersBarracks" name="WorkersBarracks" style="width: 100px !important;" placeholder="">@endif @endforeach
 &nbsp; &nbsp; &nbsp; &nbsp; 
                                 <br> <br>
                                 
                               <label class="text text-default"><b>Earthworks</b> </label>  <br><br>
                                    <label> Excavation</label>
                                    @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 5)<input type="number" class="form-control" value="{{ $record -> cost }}" id="Excavation" name="Excavation" style="width: 150px !important;" placeholder="">@endif @endforeach
                                    
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label> Backfill</label>
                                    @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 6)<input type="number" class="form-control" value="{{ $record -> cost }}" id="Backfill" name="Backfill" style="width: 150px !important;" placeholder="">@endif @endforeach
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                     <label> Lastillas</label>
                                     @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 7)<input type="number" class="form-control" value="{{ $record -> cost }}" id="Lastillas" name="Lastillas" style="width: 150px !important;" placeholder="Optional">@endif @endforeach
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                     <label> Soil Poisoning</label>
                                     @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 8)<input type="number" class="form-control" value="{{ $record -> cost }}" id="SoilPoisoning" name="SoilPoisoning" style="width: 150px !important;" placeholder="Optional">@endif @endforeach
                                 
                                    <br> <br> <br> <br>
                                 <label class="text text-default"><b>Labor Cost</b> </label>  
                                 @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 9)<input type="number" class="form-control"  value="{{ $record -> cost }}"  id="LaborCost" name="LaborCost" style="width: 180px !important;" placeholder="">@endif @endforeach
                                    
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <label class="text text-default"><b>Tools and Equipments</b> </label>  
                                    @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 10)<input type="number" class="form-control" value="{{ $record -> cost }}" id="ToolsEquipments" name="ToolsEquipments" style="width: 180px !important;" placeholder="">@endif @endforeach
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                     <label class="text text-default"><b>Transportation</b> </label>  
                                     @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 11)<input type="number" class="form-control"  value="{{ $record -> cost }}"  id="Transportation" name="Transportation" style="width: 180px !important;" placeholder="">@endif @endforeach
                                 
                                     <br> <br> <br> <br>
                                    <label class="text text-default"><b>Contingency</b> </label> 
                                    @foreach ( $TemplateArray1 as $key=>$record ) @if($record -> id == 12)<input type="number" class="form-control" value="{{ $record -> cost }}" id="Contigency" name="Contigency" style="width: 200px !important;" placeholder="">@endif @endforeach
                                 &nbsp; &nbsp; &nbsp; &nbsp; 
                                   
                                    &nbsp; &nbsp; &nbsp;
                                    <button type="button" class="btn btn-success" id="ComputeGeneralReq" >Compute</button>
                                    
                                    
                       
                                    
                                 
                         
                                
                        </div>
                                
                               
                            </div>
                             
                        </div>
                  
                    </div>
                  
                         <!-- TOTALS TABLE -->

                                    <div class="card-block">
                                            <div class="table-responsive">
                                            <input type=hidden id="totalGeneralReq1" name="totalGeneralReq" value="0">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-primary">Total Cost:</th>
                                                         
                                                            <th class="text-center text-primary" id="totalGeneralReq">  </th>
                                                            

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
              
              @foreach ( $TemplateArray2 as $key=>$record )
            <input type="hidden" id="CategoryId{{ $record -> id }}"             name="CategoryId{{ $record -> id }}"    value='{{ $record -> category }}'>
            <input type="hidden" id="MaterialId{{ $record -> id }}"             name="MaterialId{{ $record -> id }}"    value='{{ $record -> material }}'>
            <input type="hidden" id="Quantity{{ $record -> id }}"               name="Quantity{{ $record -> id }}"      value='{{ $record -> qty }}'>
            <input type="hidden" id="Cost{{ $record -> id }}"                   name="Cost{{ $record -> id }}"          value='{{ $record -> cost }}'>
            @endforeach
                                
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
                   
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                        <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="ColumnCC" style="width: 160px !important;">
                                    <option value="1">Class AA </option>
                                    <option value="2" selected>Class A </option>
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
                            <input type="" class="form-control" id="ColumnThickness" style="width: 90px !important;" value=>
                            <label >Width:</label>
                            <input type="" class="form-control" id="ColumnWidth" style="width: 90px !important;" value=>
                            <label >Length:</label>
                            <input type="" class="form-control" id="ColumnLength" style="width: 90px !important;" value=>
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 <div class="form-group">
                                <label> Number of bars per Column:</label>
                                <input type="number" id="ColumnNoOfBars" class="form-control"style="width: 100px !important;" value=4>
                            </div> <br> <br>
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Length:</label>
                                <select class="form-control" id="ColumnsBarLeng" style="width: 150px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <!--<option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12">12 meters </option>-->
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="ColumnsBarSize" style="width: 170px !important;">
                                    <!--<option value=6 >6 mm</option>
                                    <option value=10>10 mm </option>-->
                                    <option value=12 selected>12 mm </option>
                                </select>
                            </div> <br> <br>
                                 
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Tie Bar Size:</label>
                                <select class="form-control" id="ColumnsTieBarSize" style="width: 150px !important;">
                                    <!--<option value=6 >6 mm</option>-->
                                    <option value=10 selected>10 mm </option>
                                    <!--<option value=12>12 mm </option>-->
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
                                <label class="text text-default"><b>Column(s): </b> </label>&nbsp; <input type="number" class="form-control" id="HowManyColumns" style="width: 100px !important;" value=1>
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
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 1)    
                                        <tr class="table-success">
                                            <td id="ColumnCement"> {{ $record -> materialName }} </td> 
                                            <td id="ColumnCementBag"> {{ $record -> qty }} </td>
                                            <td id="ColumnCementCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 2)    
                                        <tr>
                                            <td id="ColumnS"> {{ $record -> materialName }} </td>
                                            <td id="ColumnSand"> {{ $record -> qty }} </td>
                                            <td id="ColumnSandCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 3)    
                                        <tr class="table-warning">
                                            <td id="ColumnG"> {{ $record -> materialName }} </td>
                                            <td id="ColumnGravel"> {{ $record -> qty }} </td>
                                            <td id="ColumnGravelCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 4)    
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="ColumnSteelBar"> {{ $record -> materialName }} </td>
                                            <td id="ColumnSteelBarQty"> {{ $record -> qty }} </td>
                                            <td id="ColumnSteelBarCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 5)    
                                            <tr>
                                            <td id="ColumnTieBar"> {{ $record -> materialName }} </td>
                                            <td id="ColumnTieBarQty"> {{ $record -> qty }} </td>
                                            <td id="ColumnTieBarCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 6)    
                                        <tr class="table-warning">
                                            <td id="ColumnTieWire"> {{ $record -> materialName }} </td>
                                            <td id="ColumnTieWireKg"> {{ $record -> qty }} </td>
                                            <td id="ColumnTieWireCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                      
                                        </tbody>
                                    </table>
                                    <!---
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
                                    --->
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
                            <input type="" class="form-control" id="FootingThickness" style="width: 80px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="FootingWidth" style="width: 80px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="FootingLength" style="width: 80px !important;" >
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Length:</label>
                                <select class="form-control" id="footingBarLength" style="width: 150px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="footingBarSize" style="width: 150px !important;">
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
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 7)    
                                        <tr class="table-success">
                                            <td id="FootingCement"> {{ $record -> materialName }} </td> 
                                            <td id="FootingCementBag"> {{ $record -> qty }} </td>
                                            <td id="FootingCementCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 8)    
                                        <tr>
                                            <td id="FootingS"> {{ $record -> materialName }} </td>
                                            <td id="FootingSand"> {{ $record -> qty }} </td>
                                            <td id="FootingSandCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 9)    
                                        <tr class="table-warning">
                                            <td id="FootingG"> {{ $record -> materialName }} </td>
                                            <td id="FootingGravel"> {{ $record -> qty }} </td>
                                            <td id="FootingGravelCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 10)    
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="FootingSteelBar"> {{ $record -> materialName }} </td>
                                            <td id="FootingSteelBarQty"> {{ $record -> qty }} </td>
                                            <td id="FootingSteelBarCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 11)    
                                        <tr class="table-warning">
                                            <td id="FootingTieWire"> {{ $record -> materialName }} </td>
                                            <td id="FootingTieWireKg"> {{ $record -> qty }} </td>
                                            <td id="FootingTieWireCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                      
                                        </tbody>
                                    </table>
                                    <!---
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
                                    --->
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
                            <input type="" class="form-control" id="SlabThickness" style="width: 80px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="SlabWidth" style="width: 80px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="SlabLength" style="width: 80px !important;" >
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
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 12)    
                                        <tr class="table-success">
                                            <td id="SlabCement"> {{ $record -> materialName }} </td> 
                                            <td id="SlabCementBag"> {{ $record -> qty }} </td>
                                            <td id="SlabCementCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 13)    
                                        <tr>
                                            <td id="SlabS"> {{ $record -> materialName }} </td>
                                            <td id="SlabSand"> {{ $record -> qty }} </td>
                                            <td id="SlabSandCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 14)    
                                        <tr class="table-warning">
                                            <td id="SlabG"> {{ $record -> materialName }} </td>
                                            <td id="SlabGravel"> {{ $record -> qty }} </td>
                                            <td id="SlabGravelCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 15)    
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="SlabSteelBar"> {{ $record -> materialName }} </td>
                                            <td id="SlabSteelBarQty"> {{ $record -> qty }} </td>
                                            <td id="SlabSteelBarCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 16)    
                                        <tr class="table-warning">
                                            <td id="SlabTieWire"> {{ $record -> materialName }} </td>
                                            <td id="SlabTieWireKg"> {{ $record -> qty }} </td>
                                            <td id="SlabTieWireCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                      
                                        </tbody>
                                    </table>
                                    <!--
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
                                    -->
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
                            <input type="" class="form-control" id="BeamThickness" style="width: 80px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="BeamWidth" style="width: 80px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="BeamLength" style="width: 80px !important;" >
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
                                <select class="form-control" id="beamsBarLength" style="width: 150px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="beamsBarSize" style="width: 150px !important;">
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
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 23)    
                                        <tr class="table-success">
                                            <td id="BeamCement"> {{ $record -> materialName }} </td> 
                                            <td id="BeamCementBag"> {{ $record -> qty }} </td>
                                            <td id="BeamCementCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 24)    
                                        <tr>
                                            <td id="BeamS"> {{ $record -> materialName }} </td>
                                            <td id="BeamSand"> {{ $record -> qty }} </td>
                                            <td id="BeamSandCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 25)    
                                        <tr class="table-warning">
                                            <td id="BeamG"> {{ $record -> materialName }} </td>
                                            <td id="BeamGravel"> {{ $record -> qty }} </td>
                                            <td id="BeamGravelCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 26)    
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="BeamSteelBar"> {{ $record -> materialName }} </td>
                                            <td id="BeamSteelBarQty"> {{ $record -> qty }} </td>
                                            <td id="BeamSteelBarCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 27)    
                                            <tr>
                                            <td id="BeamTieBar"> {{ $record -> materialName }} </td>
                                            <td id="BeamTieBarQty"> {{ $record -> qty }} </td>
                                            <td id="BeamTieBarCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 28)    
                                        <tr class="table-warning">
                                            <td id="BeamTieWire"> {{ $record -> materialName }} </td>
                                            <td id="BeamTieWireKg"> {{ $record -> qty }} </td>
                                            <td id="BeamTieWireCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                      
                                        </tbody>
                                      
                                        </tbody>
                                    </table>
                                    <!--
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
                                    -->
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
                            <input type="" class="form-control" id="" style="width: 80px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="" style="width: 80px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="" style="width: 80px !important;" >
                                 <br> <br>
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Length:</label>
                                <select class="form-control" id="wallFootingBarLength" style="width: 150px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="wallFootingBarSize" style="width: 150px !important;">
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
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 35)    
                                        <tr class="table-success">
                                            <td id="WallFootingCement"> {{ $record -> materialName }} </td> 
                                            <td id="WallFootingCementBag"> {{ $record -> qty }} </td>
                                            <td id="WallFootingCementCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 36)    
                                        <tr>
                                            <td id="WallFootingS"> {{ $record -> materialName }} </td>
                                            <td id="WallFootingSand"> {{ $record -> qty }} </td>
                                            <td id="WallFootingSandCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 37)    
                                        <tr class="table-warning">
                                            <td id="WallFootingG"> {{ $record -> materialName }} </td>
                                            <td id="WallFootingGravel"> {{ $record -> qty }} </td>
                                            <td id="WallFootingGravelCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 38)    
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="WallFootingSteelBar"> {{ $record -> materialName }} </td>
                                            <td id="WallFootingSteelBarQty"> {{ $record -> qty }} </td>
                                            <td id="WallFootingSteelBarCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 39)    
                                            <tr>
                                            <td id="WallFootingTieWire"> {{ $record -> materialName }} </td>
                                            <td id="WallFootingTieWireKg"> {{ $record -> qty }} </td>
                                            <td id="WallFootingTieWireCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                      
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
  
                      
     <!-- Column ends -->
                  </div>
                </div>
              </div>
                
                                <!--
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
                      
     
                  </div>
                </div>
              </div>
                                
                                
                                -->
                
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
                            <input type="" class="form-control" id="" style="width: 80px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="" style="width: 80px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="" style="width: 80px !important;" >
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
                                <select class="form-control" id="roofBeamsBarLength" style="width: 150px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="roofBeamsBarSize" style="width: 150px !important;">
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
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 17)    
                                        <tr class="table-success">
                                            <td id="RoofBeamCement"> {{ $record -> materialName }} </td> 
                                            <td id="RoofBeamCementBag"> {{ $record -> qty }} </td>
                                            <td id="RoofBeamCementCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 18)    
                                        <tr>
                                            <td id="RoofBeamS"> {{ $record -> materialName }} </td>
                                            <td id="RoofBeamSand"> {{ $record -> qty }} </td>
                                            <td id="RoofBeamSandCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 19)    
                                        <tr class="table-warning">
                                            <td id="RoofBeamG"> {{ $record -> materialName }} </td>
                                            <td id="RoofBeamGravel"> {{ $record -> qty }} </td>
                                            <td id="RoofBeamGravelCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 20)    
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="RoofBeamSteelBar"> {{ $record -> materialName }} </td>
                                            <td id="RoofBeamSteelBarQty"> {{ $record -> qty }} </td>
                                            <td id="RoofBeamSteelBarCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 21)    
                                            <tr>
                                            <td id="RoofBeamTieBar"> {{ $record -> materialName }} </td>
                                            <td id="RoofBeamTieBarQty"> {{ $record -> qty }} </td>
                                            <td id="RoofBeamTieBarCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 22)    
                                        <tr class="table-warning">
                                            <td id="RoofBeamTieWire"> {{ $record -> materialName }} </td>
                                            <td id="RoofBeamTieWireKg"> {{ $record -> qty }} </td>
                                            <td id="RoofBeamTieWireCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                      
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
                    
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12 scroll"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                        <div class="form-group pull-center">
                                <label for=""><b>Concrete HollowBlocks:</b></label><br>
                               
                            </div>
                             
                          
                             
                             
                    
                             <div class="form-group form-inline">
                             <label for="">CHB Size:</label>
                                <select class="form-control" id="CHBSize" style="width: 140px !important;">
                                    <option value=16>4"</option>
                                    <option value=15 selected>5"</option>
                                    
                                </select>
                             </div>
                           <br>
                             <div class="form-group form-inline">
                            <label >Area:</label>
                            <input type="number" class="form-control" id="CHBArea" style="width: 100px !important;" placeholder="Optional" >
                            <label >Width:</label>
                            <input type="number" class="form-control" id="CHBWidth" style="width: 80px !important;" >
                            <label >Length:</label>
                            <input type="number" class="form-control" id="CHBLength" style="width: 80px !important;" >
                                 </div>
                                 <br> 
                                 
                                 
                                 
                                 
                                 
                                    <div class="form-group form-inline pull-center">
                                <label for=""><b>Mortar:</b></label>
                               
                            <br>
                                 
                                 <div class="form-group pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="CHBMortarMixture" style="width: 160px !important;">
                                    <option value="1">Class AA </option>
                                    <option value="2" >Class A </option>
                                    <option value="3" selected>Class B </option>
                                    <option value="4" >Class C </option>
                                </select>
                            </div><br><br>
                                  <label for="">Thickness:</label>
                                <input type="number" style="width: 140px" class="form-control" id="CHBMortarThickness" >
                            </div>
                               
                                   <div class="form-group pull-center">
                                <label for=""><b>Plaster:</b></label>
                               
                             </div>
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Cement Class Mixture:</label>
                                <select class="form-control" id="CHBPlasterMixture" style="width: 160px !important;">
                                    <option value="1">Class AA </option>
                                    <option value="2" >Class A </option>
                                    <option value="3" selected>Class B </option>
                                    <option value="4" >Class C </option>
                                </select>
                            <br><br>
                                  <label for="">Thickness:</label>
                                <input type="number" style="width: 140px" class="form-control" id="CHBPlasterThickness" >
                            </div>
                                 <br> <br>
                                 
                                      <div class="container" style="margin-left: -20px !important">
                                        <H6 class="text text-primary">Metal Reinforcement</H6>
                                    </div>
                                 <br>
                                 
                                 <div class="form-group form-inline pull-center">
                                <label for="">Bar Spacing:</label>
                                <select class="form-control" id="masonryBarSize" style="width: 200px !important;">
                                    <option value="40" selected>40 cm</option>
                                    <option value="60" >60 cm</option>
                                    <option value="80" >80 cm</option>
                                
                                </select>
                                <br><br>
                                     <label for="">Bar Layer:</label>
                                <select class="form-control" id="masonryBarLayer" style="width: 210px !important;">
                                    <option value="2" selected>2</option>
                                    <option value="3" >3 </option>
                                    <option value="4" >4</option>
                                   
                                </select>
                                <br><br>
                                <label for="">Tie wire:</label>
                                <select class="form-control" id="masonryTieWire" style="width: 220px !important;">
                                    <option value=30 selected>30 cm </option>
                                    <option value=40>40 cm </option>
                                    
                                </select>
                            </div> 
                   
                                 <br> <br>
                                 <hr>
                                 <div class="form-group form-inline">
                                <label class="text text-danger"><b>How Many of these?</b> </label>&nbsp; <input type="number" class="form-control" id="CHBWallNo" style="width: 100px !important;">
                                <button type="button" id="CHBCompute" class="btn btn-primary" style="margin-left: 50px" >Compute</button>
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
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 40)    
                                        <tr class="table-success">
                                            <td id="MasonryCement"> {{ $record -> materialName }} </td> 
                                            <td id="TQty{{$record -> id}}"> {{ $record -> qty }} </td>
                                            <td id="TCost{{$record -> id}}"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 41)    
                                        <tr>
                                            <td id="MasonryS"> {{ $record -> materialName }} </td>
                                            <td id="TQty{{$record -> id}}"> {{ $record -> qty }} </td>
                                            <td id="TCost{{$record -> id}}"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 43)    
                                        <tr class="table-warning">
                                            <td id="MasonryCHB1"> {{ $record -> materialName }} </td>
                                            <td id="TQty{{$record -> id}}"> {{ $record -> qty }} </td>
                                            <td id="TCost{{$record -> id}}"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 44)    
                                            <tr class="table-success">
                                            <td id="MasonryCHB2"> {{ $record -> materialName }} </td>
                                            <td id="TQty{{$record -> id}}"> {{ $record -> qty }} </td>
                                            <td id="TCost{{$record -> id}}"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 42)    
                                            <tr>
                                            <td id="MasonrySteelBar"> {{ $record -> materialName }} </td>
                                            <td id="TQty{{$record -> id}}"> {{ $record -> qty }} </td>
                                            <td id="TCost{{$record -> id}}"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 45)    
                                        <tr class="table-warning">
                                            <td id="MasonryTieWire"> {{ $record -> materialName }} </td>
                                            <td id="TQty{{$record -> id}}"> {{ $record -> qty }} </td>
                                            <td id="TCost{{$record -> id}}"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                      
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
                      
                      
                     <!-- Column-->
                      
                     <br> 
                   
                        
        <div class="row ">
        
          <div class="col-sm-6 col-xs-12"> <br> 
                    <div class="card" style="background-color: #A7FDCB">
                        
                         <div class="card-block">
                             
                   
                             
                          <div >
                                <label for="">Volume:</label> <br>
                            
                                <input type="number" id="ColumnVolume" style="width: 160px !important;"> <label class="text text-default"> cu.m </label>
                            
                            </div>   
                             <br> 
                             <div class="form-group form-inline">
                           
                            <label >Thickness:</label>
                            <input type="" class="form-control" id="ColumnThickness" style="width: 80px !important;" >
                            <label >Width:</label>
                            <input type="" class="form-control" id="ColumnWidth" style="width: 80px !important;" >
                            <label >Length:</label>
                            <input type="" class="form-control" id="ColumnLength" style="width: 80px !important;" >
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
                                <select class="form-control" id="ColumnsBarLeng" style="width: 150px !important;">
                                    <option value="6" selected>6 meters </option>
                                    <option value="7.5" >7.5 meters </option>
                                    <option value="9" >9 meters </option>
                                    <option value="12" >12 meters </option>
                                </select>
                                     <label for="">Bar Size:</label>
                                <select class="form-control" id="ColumnsBarSize" style="width: 150px !important;">
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
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 29)    
                                        <tr class="table-success">
                                            <td id="RoofingCement"> {{ $record -> materialName }} </td> 
                                            <td id="RoofingCementBag"> {{ $record -> qty }} </td>
                                            <td id="RoofingCementCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 30)    
                                        <tr>
                                            <td id="RoofingS"> {{ $record -> materialName }} </td>
                                            <td id="RoofingSand"> {{ $record -> qty }} </td>
                                            <td id="RoofingSandCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 31)    
                                        <tr class="table-warning">
                                            <td id="RoofingG"> {{ $record -> materialName }} </td>
                                            <td id="RoofingGravel"> {{ $record -> qty }} </td>
                                            <td id="RoofingGravelCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 32)    
                                            <tr>
                                            <td id="RoofingTieBar"> {{ $record -> materialName }} </td>
                                            <td id="RoofingTieBarQty"> {{ $record -> qty }} </td>
                                            <td id="RoofingTieBarCost"> {{ $record -> cost }} </td>
                                       
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 33)    
                                            <tr class="text text-primary"> <td><b>Metal Reinforcement</b></td></tr>
                                            <tr class="table-success">
                                            <td id="RoofingSteelBar"> {{ $record -> materialName }} </td>
                                            <td id="RoofingSteelBarQty"> {{ $record -> qty }} </td>
                                            <td id="RoofingSteelBarCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 34)    
                                        <tr class="table-warning">
                                            <td id="RoofingTieWire"> {{ $record -> materialName }} </td>
                                            <td id="RoofingTieWireKg"> {{ $record -> qty }} </td>
                                            <td id="RoofingTieWireCost"> {{ $record -> cost }} </td>
                                           
                                        </tr>@endif @endforeach
                                        
                                        </tbody>
                                    </table>
                                    <!--
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
                                    -->
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
                                                                                <button type="button" class="btn " style="margin-left: 300px">Compute</button>
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

                                                                          
                                                                          
                                                                            
                                                                            
                                                                            <label>Door Accessories: </label>
                                                                            <br>
                                                                            <select class="form-control" id="" style="width: 300px !important;">
                                                                                <option selected> Door Knob </option>
                                                                                <option> Door Stopper </option>
                                                                                <option> Lock Set</option>
                                                                                <option> Door Closer</option>
                                                                            </select>

                                                                            <input type="number" class="form-control" id="" style="width: 60px !important;" placeholder="+">


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
                                                                                <button type="button" class="btn" style="margin-left: 90px">Compute</button>
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
                                                  

                                                        <div class="row ">

                                                            <div class="col-sm-6 col-xs-12 scroll">
                                                                
                                                                <div class="card" style="background-color: #A7FDCB">

                                                                    <div class="card-block">








                                                                        <div class="form-group form-inline">


                                                                            <select class="form-control" id="ElectricalWorksMaterials" style="width: 350px !important;">
                                                                                <option value=43 selected> #14 THHN </option>
                                                                                <option value=44> #12 THHN </option>
                                                                                <option value=45> #10 THHN </option>
                                                                                <option value=46> 3/4" Electrical Pipe PVC Conduit </option>
                                                                                <option value=47> PVC Clips</option>
                                                                                <option value=48> Bushing </option>
                                                                                <option value=49> Lights </option>
                                                                                <option value=50> Junction Box</option>
                                                                                <option value=51> Light Switch + Utility Box</option>
                                                                                <option value=52> Current Outlets + Cover + Utility box</option>
                                                                                <option value=> Light Switch </option>
                                                                                <option value=> Utility Box</option>
                                                                                <option value=> Sqaure Box</option>
                                                                                <option value=> Motor Pump</option>
                                                                                <option value=> Doorbell Buzzer</option>
                                                                                <option value=> Smoke Alarm   </option>
                                                                                <option value=> Circuit Breaker 15a</option>
                                                                                <option value=> Circuit Breaker 20a </option>
                                                                                <option value=> Circuit Breaker 30a</option>
                                                                                <option value=> Circuit Breaker 60a</option>
                                                                            </select>

                                                                         
                                                                      
                                                                           

                                                                         <input type="number" class="form-control" id="ElectricalWorksMaterialQ" style="width: 60px !important;" placeholder="+">

                                                                           

                                                                            <br>
                                                                            <br>
                                                                            <hr>
                                                                            <div class="form-group form-inline">

                                                                                <button type="button" class="btn btn-success" style="margin-left: 300px" id="ComputeElectricalWorks">Compute</button>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12 scroll ">
                                                                


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
                                                                                    @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 58)
                                                                                        <tr class="table-success">
                                                                                            <td id="thhn14"> {{ $record -> materialName }} </td>
                                                                                            <td id="thhn14Q"> {{ $record -> qty }} </td>
                                                                                            <td id="thhn14P"> {{ $record -> cost }} </td>

                                                                                        </tr>@endif @endforeach
                                                                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 59)
                                                                                        <tr>
                                                                                            <td id="thhn12"> {{ $record -> materialName }} </td>
                                                                                            <td id="thhn12Q"> {{ $record -> qty }} </td>
                                                                                            <td id="thhn12P"> {{ $record -> cost }} </td>

                                                                                        </tr>@endif @endforeach
                                                                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 60)
                                                                                        <tr class="table-warning">
                                                                                            <td id="thhn10"> {{ $record -> materialName }} </td>
                                                                                            <td id="thhn10Q"> {{ $record -> qty }} </td>
                                                                                            <td id="thhn10P"> {{ $record -> cost }} </td>
                                                                                        </tr>@endif @endforeach
                                                                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 61)

                                                                                        <tr class="table-success">
                                                                                            <td id="pvcconduit"> {{ $record -> materialName }} </td>
                                                                                            <td id="pvcconduitQ"> {{ $record -> qty }} </td>
                                                                                            <td id="pvcconduitP"> {{ $record -> cost }} </td>

                                                                                        </tr>@endif @endforeach
                                                                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 62)
                                                                                        <tr>
                                                                                            <td id="pvcclip"> {{ $record -> materialName }} </td>
                                                                                            <td id="pvcclipQ"> {{ $record -> qty }} </td>
                                                                                            <td id="pvcclipP"> {{ $record -> cost }} </td>

                                                                                        </tr>@endif @endforeach
                                                                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 63)

                                                                                        <tr class="table-success">
                                                                                            <td id="bushing"> {{ $record -> materialName }} </td>
                                                                                            <td id="bushingQ"> {{ $record -> qty }} </td>
                                                                                            <td id="bushingP"> {{ $record -> cost }} </td>

                                                                                        </tr>@endif @endforeach
                                                                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 64)
                                                                                        <tr>
                                                                                            <td id="lights"> {{ $record -> materialName }} </td>
                                                                                            <td id="lightsQ"> {{ $record -> qty }} </td>
                                                                                            <td id="lightsP"> {{ $record -> cost }} </td>

                                                                                        </tr>@endif @endforeach
                                                                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 65)
                                                                                        <tr class="table-warning">
                                                                                            <td id="junctionbox"> {{ $record -> materialName }} </td>
                                                                                            <td id="junctionboxQ"> {{ $record -> qty }} </td>
                                                                                            <td id="junctionboxP"> {{ $record -> cost }} </td>

                                                                                        </tr>@endif @endforeach
                                                                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 66)

                                                                                        <tr class="table-success">
                                                                                            <td id="switchnbox"> {{ $record -> materialName }} </td>
                                                                                            <td id="switchnboxQ"> {{ $record -> qty }} </td>
                                                                                            <td id="witchnboxP"> {{ $record -> cost }} </td>

                                                                                        </tr>@endif @endforeach
                                                                                        @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 67)
                                                                                        <tr>
                                                                                            <td id="outletsncovernbox"> {{ $record -> materialName }} </td>
                                                                                            <td id="outletsncovernboxQ"> {{ $record -> qty }} </td>
                                                                                            <td id="outletsncovernboxP"> {{ $record -> cost }} </td>

                                                                                        </tr>@endif @endforeach

                                                                                    </tbody>
                                                                                </table>
                                                                                <input type="hidden" id="Electrical14thhn1"                                    name="Electrical14thhn" value='1050'>
                                                                                <input type="hidden" id="Electrical14thhnQ1"                                    name="Electrical14thhnQ" value='0.5'>
                                                                                <input type="hidden" id="Electrical12thhn1"                                    name="Electrical12thhn" value='1550'>
                                                                                <input type="hidden" id="Electrical12thhnQ1"                                    name="Electrical12thhnQ" value='0.5'>
                                                                                <input type="hidden" id="Electrical10thhn1"                                    name="Electrical10thhn" value='1410'>
                                                                                <input type="hidden" id="Electrical10thhnQ1"                                    name="Electrical10thhnQ" value='0.3'>
                                                                                <input type="hidden" id="Electricalconduit1"                                   name="Electricalconduit" value='1600'>
                                                                                <input type="hidden" id="ElectricalconduitQ1"                                   name="ElectricalconduitQ" value='16'>
                                                                                <input type="hidden" id="Electricalpvcclips1"                                  name="Electricalpvcclips" value='75'>
                                                                                <input type="hidden" id="ElectricalpvcclipsQ1"                                  name="ElectricalpvcclipsQ" value='25'>
                                                                                <input type="hidden" id="Electricalbushing1"                                   name="Electricalbushing" value='180'>
                                                                                <input type="hidden" id="ElectricalbushingQ1"                                   name="ElectricalbushingQ" value='18'>
                                                                                <input type="hidden" id="Electricallights1"                                    name="Electricallights" value='500'>
                                                                                <input type="hidden" id="ElectricallightsQ1"                                    name="ElectricallightsQ" value='8'>
                                                                                <input type="hidden" id="Electricaljunctionbox1"                               name="Electricaljunctionbox" value='200'>
                                                                                <input type="hidden" id="ElectricaljunctionboxQ1"                               name="ElectricaljunctionboxQ" value='8'>
                                                                                <input type="hidden" id="Electricallightswitchnutilitybox1"                    name="Electricallightswitchnutilitybox" value='800'>
                                                                                <input type="hidden" id="ElectricallightswitchnutilityboxQ1"                    name="ElectricallightswitchnutilityboxQ" value='4'>
                                                                                <input type="hidden" id="Electricalcurrentoutletsncovernutilitybox1"           name="Electricalcurrentoutletsncovernutilitybox" value='1800'>
                                                                                <input type="hidden" id="ElectricalcurrentoutletsncovernutilityboxQ1"           name="ElectricalcurrentoutletsncovernutilityboxQ" value='9'>
                                                                                <input type="hidden" id="ElectricalTotalCost1"                                 name="ElectricalTotalCost" value='9165'>
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
                                                                                    <th class="text-center text-primary"  id="ElectricalTotalCost2"> 9165.00</th>


                                                                                </tr>
                                                                            </thead>

                                                                        </table>
                                                                    </div>
                                                                </div>


                                                            </div>





                                                        </div>

                                              

                                                    <!-- Column ends -->
                                                </div>
                                            </div>
                                        </div>

                                     

                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingNineteen">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg table-active" data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen" aria-expanded="false"
                                                        aria-controls="collapseNineteen">
                                                        Tiles
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseNineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNineteen">
                                                <div class="accordion-content accordion-desc">
                                                    <!-- Column-->

                                                    <br>
                                                  

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
                                                                                    <option selected> 30 </option>
                                                                                    <option> 60 </option>
                                                                                    <option>90</option>
                                                                                    <option>120 </option>
                                                                                </select>
                                                                            </div>
                                                                            <br>
                                                                            <br>


                                                                            <hr>
                                                                            <div class="form-group form-inline">
                                                                                 
                                <label class="text text-danger"><b>How Many of these?</b> </label>&nbsp; <input type="number" class="form-control" id="" style="width: 100px !important;">
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
                                                                                            @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 85)
                                                                                            <tr class="table-success">
                                                                                                <td> {{ $record -> materialName }} </td>
                                                                                                <td> {{ $record -> qty }} </td>
                                                                                                <td> {{ $record -> cost }} </td>

                                                                                            </tr>@endif @endforeach
                                                                                            @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 86)
                                                                                            <tr>
                                                                                                <td> {{ $record -> materialName }} </td>
                                                                                                <td> {{ $record -> qty }} </td>
                                                                                                <td> {{ $record -> cost }} </td>

                                                                                            </tr>@endif @endforeach
                                                                                            @foreach ( $TemplateArray2 as $key=>$record ) @if($record -> id == 87)
                                                                                            <tr class="table-warning">
                                                                                                <td> {{ $record -> materialName }} </td>
                                                                                                <td> {{ $record -> qty }} </td>
                                                                                                <td> {{ $record -> cost }} </td>

                                                                                            </tr>@endif @endforeach


                                                                                        </tbody>
                                                                                    </table>

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


                                    </div>
                                </div>
                            </div>
                        </div>
            
          </div>
          
          
          
          
           
          <div class="card-block">
                                            <div class="table-responsive">
                                            @foreach ( $TemplateArray4 as $key=>$record ) @if($record -> id == 1)  
                                                <input type=hidden id="OverallTotalCost1" name="OverallTotalCost1" value=" {{ $record -> OverallTotal }} ">
                                            @endif @endforeach
                                            @foreach ( $TemplateArray3 as $key1=>$record1 ) @if($record1 -> Id == 1)
                                                <input type=hidden id="OverallTotalCost2" name="OverallTotalCost2" value=" {{ $record1 -> Cost }} ">
                                            @endif @endforeach
                                                <table class="table m-b-0 photo-table">
                                                    
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-secondary">Overall Total Cost:</th>
                                                         
                                                            <th class="text-center text-primary" id="OverallTotalCost"></th>
                                                            

                                                        </tr>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-secondary">Overhead Profit %:</th>
                                                         
                                                            <th class="text-center text-primary" id="OverheadProfit"></th>
                                                            

                                                        </tr>
                                                        <tr class="text-uppercase">
                                                            <th class="text-left text-secondary">Overhead Profit Amount:</th>
                                                         
                                                            <th class="text-center text-primary" id="OverheadTotalCost"></th>
                                                            

                                                        </tr>
                                                        <hr>
                                                        <tr class="text-uppercase " style="background-color: #ffc551">
                                                            <th class="text-left text-secondary">Grand Total Cost:</th>
                                                         
                                                            <th class="text-center text-default"     id="GrandTotalCost"></th>
                                                            

                                                        </tr>
                                                    </thead>
                                                  
                                                </table>
                                                <input type=hidden id=OverallTotalCost1 value=>
                                            </div>
                                        </div>  
          
          
          
          
          
          
                        <div class="form-group form-inline">
                            <a type="button" class="btn btn-outline-success" style="margin-left: 700px" href="#" onclick="HTMLtoPDF()">Save as pdf</a>
                           &nbsp;
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

    var currencyInputs = $('.currencyInput');

    //parse set values to currency
    currencyInputs.each(function(){
        this.value = parseFloat(this.value).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    });

    //set on blur
    currencyInputs.blur(function(){
        if(parseFloat(this.value) || 0){
            this.value = parseFloat(this.value).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        }else{
            this.value = parseFloat('0.00').toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); //default to 0 if error
        }
    });

    //set on focus
    currencyInputs.focus(function(){
        this.value = this.value.replace(/,/g, '');
    });

    //helper function for getting the value
    function currencyInputToFloat(value){
        return parseFloat(value.replace(/,/g, ''));
    }

    //checker if it code ran
    console.log('----------CURRENCY INPUT - RUN END-----------');

</script>


<script>
    //from template????

    $("#TQty1").html( parseFloat( $("#Quantity1").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost1").html( parseFloat( $("#Cost1").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty2").html( parseFloat( $("#Quantity2").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost2").html( parseFloat( $("#Cost2").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty3").html( parseFloat( $("#Quantity3").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost3").html( parseFloat( $("#Cost3").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty4").html( parseFloat( $("#Quantity4").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost4").html( parseFloat( $("#Cost4").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty5").html( parseFloat( $("#Quantity5").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost5").html( parseFloat( $("#Cost5").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty6").html( parseFloat( $("#Quantity6").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost6").html( parseFloat( $("#Cost6").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty7").html( parseFloat( $("#Quantity7").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost7").html( parseFloat( $("#Cost7").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty8").html( parseFloat( $("#Quantity8").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost8").html( parseFloat( $("#Cost8").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty9").html( parseFloat( $("#Quantity9").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost9").html( parseFloat( $("#Cost9").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty10").html( parseFloat( $("#Quantity10").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost10").html( parseFloat( $("#Cost10").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty11").html( parseFloat( $("#Quantity11").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost11").html( parseFloat( $("#Cost11").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty12").html( parseFloat( $("#Quantity12").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost12").html( parseFloat( $("#Cost12").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty13").html( parseFloat( $("#Quantity13").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost13").html( parseFloat( $("#Cost13").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty14").html( parseFloat( $("#Quantity14").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost14").html( parseFloat( $("#Cost14").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty15").html( parseFloat( $("#Quantity15").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost15").html( parseFloat( $("#Cost15").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty16").html( parseFloat( $("#Quantity16").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost16").html( parseFloat( $("#Cost16").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty17").html( parseFloat( $("#Quantity17").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost17").html( parseFloat( $("#Cost17").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty18").html( parseFloat( $("#Quantity18").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost18").html( parseFloat( $("#Cost18").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty19").html( parseFloat( $("#Quantity19").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost19").html( parseFloat( $("#Cost19").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty20").html( parseFloat( $("#Quantity20").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost20").html( parseFloat( $("#Cost20").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty21").html( parseFloat( $("#Quantity21").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost21").html( parseFloat( $("#Cost21").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty22").html( parseFloat( $("#Quantity22").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost22").html( parseFloat( $("#Cost22").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty23").html( parseFloat( $("#Quantity23").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost23").html( parseFloat( $("#Cost23").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty24").html( parseFloat( $("#Quantity24").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost24").html( parseFloat( $("#Cost24").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty25").html( parseFloat( $("#Quantity25").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost25").html( parseFloat( $("#Cost25").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty26").html( parseFloat( $("#Quantity26").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost26").html( parseFloat( $("#Cost26").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty27").html( parseFloat( $("#Quantity27").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost27").html( parseFloat( $("#Cost27").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty28").html( parseFloat( $("#Quantity28").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost28").html( parseFloat( $("#Cost28").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty29").html( parseFloat( $("#Quantity29").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost29").html( parseFloat( $("#Cost29").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty30").html( parseFloat( $("#Quantity30").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost30").html( parseFloat( $("#Cost30").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty31").html( parseFloat( $("#Quantity31").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost31").html( parseFloat( $("#Cost31").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty32").html( parseFloat( $("#Quantity32").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost32").html( parseFloat( $("#Cost32").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty33").html( parseFloat( $("#Quantity33").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost33").html( parseFloat( $("#Cost33").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty34").html( parseFloat( $("#Quantity34").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost34").html( parseFloat( $("#Cost34").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty35").html( parseFloat( $("#Quantity35").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost35").html( parseFloat( $("#Cost35").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty36").html( parseFloat( $("#Quantity36").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost36").html( parseFloat( $("#Cost36").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty37").html( parseFloat( $("#Quantity37").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost37").html( parseFloat( $("#Cost37").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty38").html( parseFloat( $("#Quantity38").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost38").html( parseFloat( $("#Cost38").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty39").html( parseFloat( $("#Quantity39").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost39").html( parseFloat( $("#Cost39").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty40").html( parseFloat( $("#Quantity40").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost40").html( parseFloat( $("#Cost40").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty41").html( parseFloat( $("#Quantity41").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost41").html( parseFloat( $("#Cost41").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty42").html( parseFloat( $("#Quantity42").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost42").html( parseFloat( $("#Cost42").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty43").html( parseFloat( $("#Quantity43").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost43").html( parseFloat( $("#Cost43").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty44").html( parseFloat( $("#Quantity44").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost44").html( parseFloat( $("#Cost44").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty45").html( parseFloat( $("#Quantity45").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost45").html( parseFloat( $("#Cost45").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty46").html( parseFloat( $("#Quantity46").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost46").html( parseFloat( $("#Cost46").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty47").html( parseFloat( $("#Quantity47").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost47").html( parseFloat( $("#Cost47").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty48").html( parseFloat( $("#Quantity48").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost48").html( parseFloat( $("#Cost48").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty49").html( parseFloat( $("#Quantity49").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost49").html( parseFloat( $("#Cost49").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty50").html( parseFloat( $("#Quantity50").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost50").html( parseFloat( $("#Cost50").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty51").html( parseFloat( $("#Quantity51").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost51").html( parseFloat( $("#Cost51").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty52").html( parseFloat( $("#Quantity52").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost52").html( parseFloat( $("#Cost52").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty53").html( parseFloat( $("#Quantity53").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost53").html( parseFloat( $("#Cost53").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty54").html( parseFloat( $("#Quantity54").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost54").html( parseFloat( $("#Cost54").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty55").html( parseFloat( $("#Quantity55").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost55").html( parseFloat( $("#Cost55").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty56").html( parseFloat( $("#Quantity56").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost56").html( parseFloat( $("#Cost56").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty57").html( parseFloat( $("#Quantity57").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost57").html( parseFloat( $("#Cost57").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty58").html( parseFloat( $("#Quantity58").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost58").html( parseFloat( $("#Cost58").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty59").html( parseFloat( $("#Quantity59").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost59").html( parseFloat( $("#Cost59").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty60").html( parseFloat( $("#Quantity60").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost60").html( parseFloat( $("#Cost60").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty61").html( parseFloat( $("#Quantity61").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost61").html( parseFloat( $("#Cost61").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty62").html( parseFloat( $("#Quantity62").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost62").html( parseFloat( $("#Cost62").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty63").html( parseFloat( $("#Quantity63").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost63").html( parseFloat( $("#Cost63").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty64").html( parseFloat( $("#Quantity64").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost64").html( parseFloat( $("#Cost64").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty65").html( parseFloat( $("#Quantity65").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost65").html( parseFloat( $("#Cost65").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty66").html( parseFloat( $("#Quantity66").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost66").html( parseFloat( $("#Cost66").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty67").html( parseFloat( $("#Quantity67").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost67").html( parseFloat( $("#Cost67").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty68").html( parseFloat( $("#Quantity68").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost68").html( parseFloat( $("#Cost68").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty69").html( parseFloat( $("#Quantity69").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost69").html( parseFloat( $("#Cost69").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty70").html( parseFloat( $("#Quantity70").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost70").html( parseFloat( $("#Cost70").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty71").html( parseFloat( $("#Quantity71").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost71").html( parseFloat( $("#Cost71").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty72").html( parseFloat( $("#Quantity72").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost72").html( parseFloat( $("#Cost72").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty73").html( parseFloat( $("#Quantity73").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost73").html( parseFloat( $("#Cost73").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty74").html( parseFloat( $("#Quantity74").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost74").html( parseFloat( $("#Cost74").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty75").html( parseFloat( $("#Quantity75").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost75").html( parseFloat( $("#Cost75").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty76").html( parseFloat( $("#Quantity76").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost76").html( parseFloat( $("#Cost76").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty77").html( parseFloat( $("#Quantity77").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost77").html( parseFloat( $("#Cost77").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty78").html( parseFloat( $("#Quantity78").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost78").html( parseFloat( $("#Cost78").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty79").html( parseFloat( $("#Quantity79").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost79").html( parseFloat( $("#Cost79").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty80").html( parseFloat( $("#Quantity80").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost80").html( parseFloat( $("#Cost80").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty81").html( parseFloat( $("#Quantity81").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost81").html( parseFloat( $("#Cost81").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty82").html( parseFloat( $("#Quantity82").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost82").html( parseFloat( $("#Cost82").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty83").html( parseFloat( $("#Quantity83").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost83").html( parseFloat( $("#Cost83").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty84").html( parseFloat( $("#Quantity84").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost84").html( parseFloat( $("#Cost84").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty85").html( parseFloat( $("#Quantity85").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost85").html( parseFloat( $("#Cost85").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty86").html( parseFloat( $("#Quantity86").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost86").html( parseFloat( $("#Cost86").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );

    $("#TQty87").html( parseFloat( $("#Quantity87").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );
    $("#TCost87").html( parseFloat( $("#Cost87").val() ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') );



    var OverallTotalCost = parseFloat($("#OverallTotalCost1").val()) + parseFloat($("#OverallTotalCost2").val());
    $("#OverallTotalCost").html(parseFloat( OverallTotalCost ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
    if( OverallTotalCost < 1000000){
        OverheadCost = OverallTotalCost * 0.20;
        $("#OverheadProfit").html('20%');
    }
    else{
        OverheadCost = OverallTotalCost * 0.10;
        $("#OverheadProfit").html('10%');
    }
    $("#OverheadTotalCost").html(parseFloat( OverheadCost ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
    $("#GrandTotalCost").html(parseFloat( OverallTotalCost + OverheadCost ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));


    function computeAndDisplayOverallTotal(){
        var overAllTotal = parseFloat($("#totalGeneralReq1").val()) ; // + parseFloat($("#ColumnTotalCost1").val()) + parseFloat($("#FootingTotalCost1").val()) + parseFloat($("#SlabTotalCost1").val()) + parseFloat($("#BeamTotalCost1").val())  );
        var OverheadProfit;
        if(overAllTotal < 1000000){
            OverheadProfit = 0.20;
            var OverheadCost = overAllTotal * OverheadProfit;
            $("#OverheadProfit").html('20%');
        }
        else{
            OverheadProfit = 0.10;
            var OverheadCost = overAllTotal * OverheadProfit;
            $("#OverheadProfit").html('10%');
        }

        $("#OverallTotalCost").html(parseFloat( overAllTotal ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
        $("#OverheadTotalCost").html(parseFloat( OverheadCost ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
        $("#GrandTotalCost").html(parseFloat( overAllTotal + OverheadCost ).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
        
        $("#OverallTotalCost1").val( overAllTotal );
        $("#OverheadTotalCost1").val( OverheadCost );
        $("#GrandTotalCost1").val( overAllTotal + OverheadCost );
        //parseFloat(overAllTotal).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
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
    var DirectCountingEsti = function(Q,mId){
        var search = searchPrice(mId);
        var price = search.materialprice;
        var total = parseFloat(Q)*parseFloat(mId);
        return{
            totals: total
        };
    }
    $("#ComputeGeneralReq").click(function() {
        var totalGeneralReq = 0;
        totalGeneralReq  += parseFloat($("#BuildingPermit").val()) ;
        totalGeneralReq  += parseFloat($("#DENR").val()) ;
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

        //$("#OverheadProfit").val( totalGeneralReq * $("#OverheadProfit").val()); //computation of overheadProfit

        $("#totalGeneralReq").html(parseFloat(totalGeneralReq).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
        $("#totalGeneralReq1").val(parseFloat(totalGeneralReq));

        computeAndDisplayOverallTotal();
    });

    $("#CHBCompute").click(function() {
        var totalPcs4;
        var total4;
        var totalPcs5;
        var total5;
        $("#CHBArea").val( parseFloat($("#CHBWidth").val()) + parseFloat($("#CHBLength").val()) );
        var CHBLayers = parseFloat($("#CHBWidth").val()) / 0.20;
        var CHBLength = parseFloat($("#CHBLength").val()) / 0.40;
        var CHBPcs = CHBLayers * CHBLength;
        var EstiCHB = DirectCountingEsti( CHBPcs , $("#CHBSize").val() );
        var total = EstiCHB.totals;
        if($("#CHBSize").val() == 15){
            totalPcs5 += CHBPcs;
            totalCost5 += total;
            $("#CHBMortarWidth").val(0.15);
            $("#CHBMortarVolume").val( parseFloat($("#CHBArea").val()) * 0.15 );
            $("#MasonryCHB1Qty").html( parseFloat(totalPcs5).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
            $("#MasonryCHB1Cost").html( parseFloat(total5).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
        }
        else if($("#CHBSize").val() == 16){
            totalPcs4 += CHBPcs;
            total4 += total;
            $("#CHBMortarWidth").val(0.10);
            $("#CHBMortarVolume").val( parseFloat($("#CHBArea").val()) * 0.10 );
            $("#MasonryCHB2Qty").html( parseFloat(totalPcs4) .toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
            $("#MasonryCHB2Cost").html( parseFloat(total4) .toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
        }
        $("#CHBPlasterVolume").val( parseFloat($("#CHBPlasterThickness").val()) * parseFloat($("#CHBArea").val()) );
            
        var EstiConcretes1 = ConcreteEsti($("#CHBWallNo").val(),$("#CHBMortarVolume").val(),1,$("#CHBMortarMixture").val(),1);
        var EstiConcretes2 = ConcreteEsti($("#CHBWallNo").val(),0.003,1,$("#CHBMortarMixture").val(),1);
        var EstiConcretes3 = ConcreteEsti($("#CHBWallNo").val(),$("#CHBPlasterVolume").val(),1,$("#CHBPlasterMixture").val(),1);
        
        
    });

/*
    $("#ComputeElectricalWorks").click(function(){
        if($("#ElectricalWorksMaterial").val()==43){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            $("Electrical14thhn1").val( parseFloat($("Electrical14thhn1").val()) + parseFloat(total) );
            $("Electrical14thhnQ1").val( parseFloat($("Electrical14thhnQ1").val()) + parseFloat($("#ElectricalWorksMaterialQ").val()) );
            $("ElectricalTotalCost1").val( parseFloat($("ElectricalTotalCost1").val()) + parseFloat(total) );
            $("thhn10P").val( parseFloat($("Electrical14thhn1").val()) + parseFloat(total) );
            $("thhn10Q").val( parseFloat($("Electrical14thhnQ1").val()) + parseFloat($("#ElectricalWorksMaterialQ").val()) );
            $("ElectricalTotalCost2").val( parseFloat($("ElectricalTotalCost1").val()) + parseFloat(total) );
        }
        if($("#ElectricalWorksMaterial").val()==44){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            
        }
        if($("#ElectricalWorksMaterial").val()==45){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            
        }
        if($("#ElectricalWorksMaterial").val()==46){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            
        }
        if($("#ElectricalWorksMaterial").val()==47){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            
        }
        if($("#ElectricalWorksMaterial").val()==48){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            
        }
        if($("#ElectricalWorksMaterial").val()==49){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            
        }
        if($("#ElectricalWorksMaterial").val()==50){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            
        }
        if($("#ElectricalWorksMaterial").val()==51){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            
        }
        if($("#ElectricalWorksMaterial").val()==52){
            var product = DirectCountingEsti($("#ElectricalWorksMaterialQ").val(),$("#ElectricalWorksMaterial").val());
            var total = product.totals;
            
        }

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

    $("#FootingTotalCost1").val( parseFloat($("#FootingCementCost1").val()) + parseFloat($("#FootingSandCost1").val()) + parseFloat($("#FootingGravelCost1").val()) + parseFloat($("#FootingSteelBarCost1").val()) + parseFloat($("#FootingTieWireCost1").val()) );
    $("#FootingTotalCost").html( parseFloat($("#FootingTotalCost1").val()).toFixed(2) );
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

    $("#SlabTotalCost1").val( parseFloat($("#SlabCementCost1").val()) + parseFloat($("#SlabSandCost1").val()) + parseFloat($("#SlabGravelCost1").val()) + parseFloat($("#SlabSteelBarCost1").val()) + parseFloat($("#SlabTieWireCost1").val()) );
    $("#SlabTotalCost").html( parseFloat($("#SlabTotalCost1").val()).toFixed(2) );
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

    $("#BeamTotalCost1").val( parseFloat($("#BeamCementCost1").val()) + parseFloat($("#BeamSandCost1").val()) + parseFloat($("#BeamGravelCost1").val()) + parseFloat($("#BeamSteelBarCost1").val()) + parseFloat($("#BeamTieBarCost1").val()) + parseFloat($("#BeamTieWireCost1").val()) );
    $("#BeamTotalCost").html( parseFloat($("#BeamTotalCost1").val()).toFixed(2) );
        computeAndDisplayOverallTotal();
});
*/

</script>

@endsection -->
