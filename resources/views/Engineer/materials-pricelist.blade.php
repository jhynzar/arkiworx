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

    tbody {
        overflow-y: scroll;
        height: 500px;

        position: absolute;
    }

</style>

@endsection @section ('body')
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
            <img class="img-fluid logo" src="../assets/images/NYETA2.png" alt="Theme-logo">
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
                            <img class="img-circle " src="../assets/images/erwin.jpg" style="width:40px;" alt="User Image">
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
            
            <li class="active treeview">
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
<!-- end of sidebar-->



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




                <form action="Materials-Pricelist/Create" method="POST">
                    {{ csrf_field() }}
                    <label class="text text-muted" style="margin-left: 450px">
                        <i>07 August 2018</i>
                    </label>
                    <!-- current date -->
                    <br>
                    <div class="form-group">
                        <label for="materialDesc">Description:</label>
                        <input type="text" class="form-control" id="materialDesc" name="materialDesc" required/>
                    </div>
                    <br>
                    <div class="form-group form-inline">
                        <label for="materialUnit" placeholder="Enter Unit">Unit:</label>
                        <input type="type" class="form-control" id="materialUnit" name="materialUnit" style="width: 130px !important;" placeholder="Enter Unit"
                            required/>
                        <label for="materialPrice">Price:</label>
                        <input type="type" class="form-control" id="materialPrice" name="materialPrice" style="width: 130px !important;" placeholder="Enter Price"
                            required/>
                    </div>



                    <div class="modal-footer">
                        <hr>
                        <button type="submit" class="btn btn-success">
                            <i class="icon icon-check"> </i>Add Material</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 265px">
                            <i class="icon icon-close"> </i>Cancel</button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>















<div class="content-wrapper" style="margin-top: 35px">
    <!-- Container-fluid starts -->
    <div class="container-fluid">

        <!-- Header Starts -->
        <div class="row" style="margin-top: -10px">
            <div class="col-sm-9 p-0">
                <div class="main-header">
                    <h4>
                        <i class="icon-notebook"></i> Materials</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                            <a href="index"></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">PriceList</a>
                        </li>

                    </ol>







                    <div class="input-group stylish-input-group" style="position: absolute; margin-top: -40px; margin-left: 200px">
                        <input type="text" class="form-control" placeholder="Search material" style="width: 300px">
                        <button type="submit" class="btn btn-info" style=" color: WHITE ">
                            <span >Search</span>
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
                            <label class="text text-muted"> Materials</label>
                        </div>
                    </div>


                </div>

            </div>















            <!-- Add User Modal Button trigger-->
            <div class="col-sm-3 pull-right">
                <br>
                <br>
                <button type="button" data-toggle="modal" data-target="#addMaterial" class="btn btn-success waves-effect waves-light" style="margin-left: 10px; margin-top: 50px">
                    <i class="icon-plus"> </i>Add Material</button>
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
                        <h5 class="card-header-text">Materials PriceList</h5>

                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th style="color: black">#</th>
                                            <th style="color: black">Description</th>

                                            <th style="color: black">Unit</th>
                                            <th style="color: black">Price</th>
                                            <th>

                                            </th>
                                            <th>
                                                <span class="text text-info">&nbsp; &nbsp; Action</span>
                                            </th>
                                            <th></th>





                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($materials as $key=>$material)
                                        <tr class=@if (($key+1)%2==0) "table-active" @endif>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $material->strMaterialName}}</td>

                                            <td>{{ $material->strUnit}}</td>
                                            <td>{{ $material->latestPrice}}</td>
                                            <td>
                                                <button data-toggle="modal" data-target="#update{{$key}}" class="btn btn-warning " style="color: white !important">Update Price</button>
                                            </td>
                                            <td>
                                                <button data-toggle="modal" data-target="#viewPriceHistory{{$key}}" class="btn btn btn-light pull-left text-left" style="color:  gray !important">
                                                    Price History</button>
                                            </td>

                                            <td>

                                                <button data-toggle="modal" data-target="#deleteMaterial" class="btn btn-danger pull-right text-right " title="Delete">
                                                    <i class="icofont icofont-ui-delete"> </i>
                                                </button>


                                            </td>
                                        </tr>


                                        <!-- Update material price Modal -->

                                        <div class="modal fade" id="update{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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







                                                        <form action="Materials-Pricelist/{{$material->intMaterialId}}" method="POST">
                                                            <input type="hidden" name="_method" value="PATCH"> {{ csrf_field() }}
                                                            <!-- key for updating -->
                                                            <input id="materialIdToUpdateInput" name="materialIdToUpdate" type="hidden" value={{$material->intMaterialId}}>
                                                            
                                                          
                                                            <div class="form-group form-inline">
                                                                <label for="updatePrice">Current Price:</label>
                                                                <input type="text" class="form-control" id="" name="" value="{{ $material->latestPrice}}" style="width: 130px !important;" disabled> 
                                                               &nbsp; &nbsp;  <label for="updatePrice">New Price:</label> 
                                                                <input type="text" class="form-control" id="materialPriceUpdate" name="materialPriceUpdate" style="width: 130px !important;">
                                                            </div>


                                                            <hr>
                                                            <div class="modal-footer">

                                                                <button type="submit" class="btn btn-success">
                                                                    <i class="icon icon-check"> </i>Update Price</button>
                                                                <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left: 260px">
                                                                    <i class="icon icon-close"> </i>Cancel</button>

                                                            </div>
                                                        </form>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                        <!-- View Price History Modal -->

                                        <div class="modal fade" id="viewPriceHistory{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                                                <input type="text" class="form-control" id="materialDesc" style="width: 300px !important;" value="{{$material->strMaterialName}}" disabled>

                                                            </div>

                                                            <div class="form-group form-inline">





                                                                <label for="usertype">
                                                                    <i>As of</i>:</label>
                                                                <br>
                                                                <select onchange="changePriceHistoryPriceInputValue(this,{{$key}})"class="form-control pull-center text-center" name="priceHistoryDatetimeSelect{{$key}}" style="width: 500px !important;">
                                                                    <option selected>Pick date</option>
                                                                    @foreach ($material->priceHistory as $priceHistoryKey=>$priceHistory)
                                                                        <option value={{$priceHistory->decPrice}}
                                                                        >{{$priceHistory->formattedDate}}</option>
                                                                    @endforeach

                                                                </select>


                                                                &nbsp; &nbsp;
                                                                <br>
                                                                <br>


                                                            </div>



                                                            <div class="form-group form-inline">
                                                                <label for="materialPrice">Unit:</label>
                                                                <input type="text" class="form-control" id="" style="width: 120px !important;" value="{{$material->strUnit}}" disabled>
                                                                <label for="materialPrice">Price:</label>
                                                                <input type="text" class="form-control" id="priceHistoryPriceInput{{$key}}" style="width: 120px !important;" value="" placeholder="₱" disabled>
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


    <!-- delete material modal -->

    <div class="modal fade" id="deleteMaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: indianred !important">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <span style="color: white">Delete Material</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h6>ARE YOU SURE YOU WANT TO DELETE THIS MATERIAL?</h6>
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


@endsection @section('script')
<script>
    $('#updatePrice').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var idToUpdate = button.data('idToUpdate') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-body #materialIdToUpdate').val(idToUpdate)
    })

/*  //pricehistoryDatetimeSelect onChange Listener
    $('#priceHistoryDatetimeSelect').on('change',function(){
        alert(this.value);
    })
*/
    function changePriceHistoryPriceInputValue(sel,key){
        console.log(key);
        $('#priceHistoryPriceInput'+key).val(sel.value);
    }


</script>
@endsection
