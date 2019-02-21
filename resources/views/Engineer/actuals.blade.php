@extends('layouts.master-engineer') @section('css')
<style>
    tr {
        width: 100%;
        display: inline-table;
        table-layout: fixed;
    }

    table {
        height: 550px;
        display: -moz-groupbox;
    }

    tbody.mainTable {
        overflow-y: scroll;
        height: 500px;

        position: absolute;
    }
    
    .modal-dialog {
 
          height: 300px;
 
        }

</style>
@endsection @section('body')
<!-- <div class="loader-bg">
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
                            <img class="img-circle " src="/assets/images/avatar-2.png" style="width:40px;" alt="User Image">
                        </span>
                        <span>
                            <b> {{session("fname")}}</b> {{session("lname")}}</span>

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
                <img src="/assets/images/avatar-2.png" alt="User Image" class="img-circle">
            </div>
            <div class="f-left info">
                <br>
                <br>
                <p>
                    <b> {{session("fname")}}</b>
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


            <li class="active treeview">
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




                <form action="Actuals/updateProjectRequirementActual" method="POST">
                    {{csrf_field()}}
                    <label class="text text-muted" style="margin-left: 450px">
                        <i>07 August 2018</i>
                    </label>
                    <!-- current date -->
                    <br>
                    <br>
                    <div class="form-group">
                        <select class="form-control" name="projectRequirementId" id="projectRequirementId" placeholder="" style="width: 500px !important;">
                            <option disabled selected>Pick a project requirement</option>
                            @foreach ($allProjectRequirementsWithNoActuals as $projectRequirement)
                                <option value="{{$projectRequirement->intRequirementId}}">{{$projectRequirement->strDesc}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group form-inline">
                    
                        <label for="ActualPrice">Price:</label>
                        <input type="text" class="form-control" id="actualPrice" name="actualPrice" style="width: 200px !important;" placeholder="₱" required/>


                    </div>



                    <hr>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success">
                            <a>
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
                        <label>Estimated Material: </label>
                        <!-- Estimated Materials for a specific category -->

                        <select class="form-control" name="material" id="material" placeholder="Material/s" style="width: 300px !important;">
                            <option>Cement</option>
                            <option>Sand</option>
                            <option>Gravel</option>
                            <option>10 mm bars</option>
                            <option>Tie Wire </option>
                            <option>Gravel Bedding </option>

                        </select>
                    </div>

                    <br>
                    <br>

                    <div class="form-group form-inline">
                        <label>Qty:</label>
                        <input type="number" class="form-control" id="" style="width: 90px !important;" required/>

                        <label>Unit:</label>
                        <input type="text" class="form-control" id="" style="width: 130px !important;" required/>



                        <label for="ActualPrice">Unit Cost:</label>
                        <input type="text" class="form-control" id="" style="width: 130px !important;" placeholder="₱" required/>


                    </div>


                    <div class="form-group">

                        <label for="ActualPrice">Total Unit Cost:</label>
                        <input type="text" class="form-control" id="" style="width: 500px !important;" placeholder="₱" required/>
                    </div>


                    <hr>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success">
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




                <form action="Actuals/createMaterialActualNew" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="POST">
                    <label class="text text-muted" style="margin-left: 450px">
                        <i>07 August 2018</i>
                    </label>
                    <!-- current date -->
                    <br>


                    <div>
                        <label>Category: </label>
                        <select onchange="addNewMaterialActualCategoryOnChange(this)" class="form-control" name="category" id="category" placeholder="Category" style="width: 300px !important;">
                            <option disabled selected>Pick a Category</option>
                            @foreach ($allCategoriesWithSub as $key=>$category)
                                <option value="{{$category->intWorkCategoryId}}">{{$category->strWorkCategoryDesc}}</option>

                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label>Sub Category: </label>
                        <select onchange="addNewMaterialActualSubCategoryOnChange(this)" class="form-control" name="newMaterialActualSubCategory" id="newMaterialActualSubCategory" placeholder="Category" style="width: 300px !important;">
                            <option disabled selected>Pick a Category first</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <label>Materials List: </label>
                        <!-- Selects materials that are not from estimated -->

                        <select class="form-control" name="newMaterialActualMaterialId" id="newMaterialActualMaterialId" placeholder="Material/s" style="width: 300px !important;">
                            <option disabled selected>Pick a Sub Category first</option>
                        </select>
                    </div>

                    <br>
                    <br>

                    <div class="form-group form-inline">
                        <label>Qty:</label>
                        <input type="number" class="form-control" id="newMaterialActualQty" name="newMaterialActualQty" style="width: 90px !important;" required/>


                    </div>



                    <hr>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success">
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
@foreach ($projectWithDetails->materialActuals as $keyActual=>$materialActual)
<div class="modal fade" id="viewAudit{{$materialActual->materialActualsDetails->intMaterialActualsId}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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



                    <div class="card">


                        <table class="table" style="height: 300px !important">
                            <thead style="background-color: #354444A">
                                <tr>
                                    <th scope="col" style="background-color: #354444A">Date</th>
                                    <th scope="col" style="background-color: #354444A">Qty</th>
                                    <th scope="col" style="background-color: #354444A">Unit Cost</th>
                                    <th scope="col" style="background-color: #354444A">Total Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($materialActual->materialActualsHistory as $history)
                                <tr>
                                    <th scope="row">{{$history->dtmDate}}</th>
                                    <td>{{number_format($history->decQty)}}</td>
                                    <td>{{number_format(($history->decCost / $history->decQty),2)}}</td>
                                    <td>{{number_format($history->decCost,2)}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>







                    <div class="modal-footer">

                    </div>
                </form>


            </div>

        </div>
    </div>
</div>
@endforeach






<!-- View Custom Audit Trail Modal -->

<div class="modal fade" id="viewCustomAudit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <input type="text" class="form-control" id="materialDesc" style="width: 300px !important;" value="General Requirements" disabled>

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




                    <div class="form-group">

                        <label for="ActualPrice">Price:</label>
                        <input type="text" class="form-control" id="" style="width: 500px !important;" placeholder="₱500.0" disabled>
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






<div class="content-wrapper" style="margin-top: 60px">
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
                          <a href="/Engineer/Engineer-Projects" data-toggle="tooltip" data-placement="top" title="Back"><span class="text text-primary">Projects Table</span></a>
                        </li>

                    </ol>








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
                <button type="button" data-toggle="modal" data-target="#addCustomActual" class="btn btn-primary waves-effect waves-light"
                    style="position: absolute; margin-left: -210px;  margin-top: 55px; ">
                    <i class="icon-plus"> </i>Add Custom Actual </button>
                <br>
                <br>
               
                <br>
                <button type="button" data-toggle="modal" data-target="#addNewMaterialActual" class="btn  waves-effect waves-light" style="background-color: #2F4F4F; color: white; margin-top: -13px">
                    <i class="icon-plus"> </i>Add Material Actual</button>
                <br>
                <br>
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
                        <h5 class="card-header-text">Actuals List</h5>

                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th style="color: black" class="text-center">Line Item</th>
                                            <th style="color: black" class="text-right">Description</th>
                                            <th style="color: black" class="text-right">Quantity</th>
                                            <th style="color: black" class="text-right">Unit</th>
                                            <th>

                                            </th>
                                            <th class="text-left pull-center" style="color: black">Total
                                                <br>Unit Cost</th>
                                            
                                            <th class="text-center">
                                                <span class="text text-info"> Action</span>
                                            </th>
                                            <th></th>





                                        </tr>
                                    </thead>
                                    <tbody class="mainTable">
                                        <!-- HERE -->

                                        @foreach ($projectRequirementsWorkCategories as $workCategory)
                                            <tr style="background-color: #1e242d">
                                                <td>
                                                    <h5 style="color: white;padding-left: 10px;">
                                                        <b>{{$workCategory->strWorkCategoryDesc}}</b>
                                                    </h5>
                                                </td>
                                            </tr>
                                            @foreach ($projectRequirementsWorkSubCategories as $workSubCategory)

                                            <!-- For SubCategory -->
                                                @if ($workSubCategory->intWorkCategoryId == $workCategory->intWorkCategoryId)
                                                <tr class="table-active">
                                                    <td>
                                                        <b style="padding-left: 30px;"> >&nbsp;{{$workSubCategory->strWorkSubCategoryDesc}}</b>
                                                    </td>
                                                </tr>
                                                    @foreach ($allProjectRequirements as $keyProjectRequirement=>$projectRequirement)
                                                            @if (
                                                                ($projectRequirement->decActualPrice != null) &&
                                                                ($projectRequirement->intWorkSubCategoryId == $workSubCategory->intWorkSubCategoryId) &&
                                                                ($projectRequirement->intWorkCategoryId == $workCategory->intWorkCategoryId)
                                                            )
                                                            <tr class="table-info">
                                                                    <td class="text-center">{{$keyProjectRequirement+1}}</td>
                                                                    <td class="text-left">{{$projectRequirement->strDesc}}

                                                                    </td>
                                                                    <td class="text-center">-</td>
                                                                <td class="text-left">-</td>
                                                              
                                                                   
                                                                    <td class="text-left">{{number_format($projectRequirement->decActualPrice,2)}}</td>
                                                               
                                                                    <td class="pull-center text-center">
                                                                        <button data-toggle="modal" data-target="#updateCustomActual{{$projectRequirement->intRequirementId}}" class="btn btn btn-dark pull-right" style="background-color: #2F4F4F; color: white !important">Update</button>

                                                                    </td>

                                                                  <td class="text-left"></td>


                                                                  
                                                                </tr>


                                                                <!-- Update Custom Actual -->

                                                                <div class="modal fade" id="updateCustomActual{{$projectRequirement->intRequirementId}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content pull-center">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                                <h4 class="modal-title" id="myModalLabel">
                                                                                    <span class="label label-info">Update Custom Actual</span>
                                                                                </h4>
                                                                            </div>
                                                                            <div class="modal-body" style="background: #e5e5f2 !important; ">




                                                                                <form action="Actuals/updateProjectRequirementActual" method="POST">
                                                                                    {{csrf_field()}}
                                                                                    <input type="hidden" name="projectRequirementId" value={{$projectRequirement->intRequirementId}}>

                                                                                    <label class="text text-muted" style="margin-left: 450px">
                                                                                        <i>07 August 2018</i>
                                                                                    </label>
                                                                                    <!-- current date -->
                                                                                    <br>


                                                                                    <div class="form-group">

                                                                                        <label for="ActualPrice">New Price:</label>
                                                                                        <input name="actualPrice" type="text" class="form-control" style="width: 550px !important;" placeholder="₱" required>
                                                                                    </div>



                                                                                    <hr>
                                                                                    <div class="modal-footer">

                                                                                        <button type="submit" class="btn btn-success">
                                                                                            <i class="icon icon-check"> </i>Update</button>
                                                                                        <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                                                                            <i class="icon icon-close"> </i>Cancel</button>

                                                                                    </div>
                                                                                </form>


                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif

                                                    @endforeach

                                                @endif 
                                            @endforeach
                                        @endforeach

                                        <!-- For displaying material actuals -->
                                        

                                            <!-- For Category -->
                                            @foreach ($projectWorkCategories as $workCategory)
                                                <tr style="background-color: #1e242d">
                                                    <td>
                                                        <h5 style="color: white;padding-left: 10px;"><b>{{$workCategory->strWorkCategoryDesc}}</b></h5>
                                                    </td>
                                                </tr>
                                                @foreach ($projectWorkSubCategories as $workSubCategory)

                                                    <!-- For SubCategory -->
                                                    @if ($workSubCategory->intWorkCategoryId == $workCategory->intWorkCategoryId)
                                                    <tr class="table-active">
                                                        <td>
                                                            <b style="padding-left: 30px;"> >&nbsp;{{$workSubCategory->strWorkSubCategoryDesc}}</b>
                                                        </td>
                                                    </tr>


                                                        @foreach ($projectWithDetails->materialActuals as $keyActual=>$materialActual)
                                                            <!-- For Displaying Actuals -->
                                                            @if (($materialActual->materialActualsDetails->intWorkCategoryId == $workCategory->intWorkCategoryId) && ($materialActual->materialActualsDetails->intWorkSubCategoryId == $workSubCategory->intWorkSubCategoryId))
                                                                <tr class="table-info">
                                                                    <td class="text-center">{{$keyActual+1}}</td>
                                                                    <td class="text-center">{{$materialActual->materialActualsDetails->strMaterialName}}

                                                                    </td>
                                                                    <td class="text-center">{{number_format($materialActual->materialActualsTotals->totalQty,2)}}</td>
                                                                    <td class="text-center">{{$materialActual->materialActualsDetails->strUnit}}</td>
                                                                    <td class="text-center">{{number_format($materialActual->materialActualsTotals->totalCost,2)}}</td>
                                                                    <td>
                                                                        <button data-toggle="modal" data-target="#updateMaterialActual{{$materialActual->materialActualsDetails->intMaterialActualsId}}" class="btn btn btn-dark pull-right" style="background-color: #2F4F4F; color: white !important">Update</button>

                                                                    </td>

                                                                    <td>

                                                                        <button data-toggle="modal" data-target="#viewAudit{{$materialActual->materialActualsDetails->intMaterialActualsId}}" class="btn " style="background-color: #DCDCDC">
                                                                            <span style="color: dimgray" title="Audit Trail">Audit Trail</span>
                                                                        </button>


                                                                    </td>


                                                                
                                                                </tr>

                                                                
                                                                <!-- Update Material Actual-->

                                                                <div class="modal fade" id="updateMaterialActual{{$materialActual->materialActualsDetails->intMaterialActualsId}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content pull-center">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                                <h4 class="modal-title" id="myModalLabel">
                                                                                    <span class="label label-info">Add {{$materialActual->materialActualsDetails->strMaterialName}}</span>
                                                                                </h4>
                                                                            </div>
                                                                            <div class="modal-body" style="background: #e5e5f2 !important; ">




                                                                                <form action="Actuals/updateMaterialActual" method="POST">
                                                                                    {{csrf_field()}}
                                                                                    <input type="hidden" name="materialActualsId" value="{{$materialActual->materialActualsDetails->intMaterialActualsId}}">
                                                                                    <input type="hidden" name="materialActualLatestPrice" value="{{$materialActual->materialActualsDetails->latestPrice->decPrice}}">

                                                                                    <label class="text text-muted" style="margin-left: 450px">
                                                                                        <i>07 August 2018</i>
                                                                                    </label>
                                                                                    <!-- current date -->
                                                                                    <br>



                                                                                    <div class="form-group form-inline">
                                                                                        <label>Qty:</label>
                                                                                        <input 
                                                                                        onkeyup="updateMaterialActualQtyOnChange(this,{{$materialActual->materialActualsDetails->intMaterialActualsId}},{{$materialActual->materialActualsDetails->latestPrice->decPrice}})"
                                                                                        onchange="updateMaterialActualQtyOnChange(this,{{$materialActual->materialActualsDetails->intMaterialActualsId}},{{$materialActual->materialActualsDetails->latestPrice->decPrice}})"
                                                                                        type="number" min="1" name="materialActualQty" class="form-control" style="width: 90px !important;">

                                                                                        <label>Unit:</label>
                                                                                        <input readonly type="text" value="{{$materialActual->materialActualsDetails->strUnit}}"class="form-control" id="" style="width: 130px !important;">



                                                                                        <label for="ActualPrice">Unit Cost:</label>
                                                                                        <input readonly type="text" value="{{number_format($materialActual->materialActualsDetails->latestPrice->decPrice,2)}}" class="form-control" id="" style="width: 130px !important;" placeholder="₱">


                                                                                    </div>


                                                                                    <div class="form-group">

                                                                                        <label for="ActualPrice">Total Cost:</label>
                                                                                        <input readonly type="text" id="updateMaterialActualTotalCost{{$materialActual->materialActualsDetails->intMaterialActualsId}}" class="form-control" style="width: 500px !important;" placeholder="₱">
                                                                                    </div>



                                                                                    <hr>
                                                                                    <div class="modal-footer">

                                                                                        <button type="submit" class="btn btn-success">
                                                                                            <i class="icon icon-check"> </i>Add Entry</button>
                                                                                        <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 280px">
                                                                                            <i class="icon icon-close"> </i>Cancel</button>

                                                                                    </div>
                                                                                </form>


                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        
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


    <!-- delete actuals modal -->

    <div class="modal fade" id="deleteActuals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: indianred !important">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <span style="color: white">Delete Actual Entry</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h6>ARE YOU SURE YOU WANT TO DELETE THIS ENTRY?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
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
</div>
</div>
















</div>
</div>


<!-- Container-fluid ends -->
</div>
</div>



@endsection @section('script')
<script>
    function updateMaterialActualQtyOnChange(input,materialActualsId,price){
        $('#updateMaterialActualTotalCost'+materialActualsId).val(parseFloat(input.value * price).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
    }

    function addNewMaterialActualCategoryOnChange(e){

        var allCategoriesWithSub = {!! json_encode($allCategoriesWithSub) !!};

        //selected Category finder

        var subCategories;
        for(var i = 0; i < allCategoriesWithSub.length; i++){
            if(allCategoriesWithSub[i].intWorkCategoryId == e.value){
                subCategories = allCategoriesWithSub[i].subCategories;
                break; 
            }
        }

        //selected Category finder end

        $('#newMaterialActualSubCategory').empty();
        
        
        var htmlString = "";
        //first option
        htmlString += "<option value='-1' selected disabled>Pick a Sub Category</option>"
        for(var key in subCategories){
            console.log(subCategories[key].strWorkSubCategoryDesc);

            htmlString += "<option value=" +subCategories[key].intWorkSubCategoryId+ " >"
            htmlString += subCategories[key].strWorkSubCategoryDesc
            htmlString += "</option>"


        }
        $('#newMaterialActualSubCategory').html(htmlString);
        
        /*
        $('#addNewMaterialActualSubCategory').empty();

        for(var subCategory in subCategories){
            console.log(subCategory);
            new Element('option')
                .set(subCategory.strWorkSubCategoryDesc,subCategory.intWorkSubCategoryId)
                .inject($('#addNewMaterialActualSubCategory'));
        }
        */
    }
    function addNewMaterialActualSubCategoryOnChange(e){
        var projectMaterialActuals = {!! json_encode($projectWithDetails->materialActuals) !!};
        var allMaterials = {!! json_encode($allMaterials) !!};

        $('#newMaterialActualMaterialId').empty();

        var htmlString = "";
        for(var keyMaterial in allMaterials){
            
            //checker if material already exists in actuals with the same subcategory
            var doesExist = false;
            for(var keyProjectActual in projectMaterialActuals){
                if(
                    projectMaterialActuals[keyProjectActual].materialActualsDetails.intMaterialId == allMaterials[keyMaterial].intMaterialId &&
                    projectMaterialActuals[keyProjectActual].materialActualsDetails.intWorkSubCategoryId == e.value
                ){
                    doesExist = true;    
                    break;
                }
            }

            if(!doesExist){
                htmlString += "<option value=' " +allMaterials[keyMaterial].intMaterialId+ " ' >"
                htmlString += allMaterials[keyMaterial].strMaterialName
                htmlString += "</option>"
            }

        }
        $('#newMaterialActualMaterialId').html(htmlString);

    }
</script>
@endsection
