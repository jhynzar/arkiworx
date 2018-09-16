@extends('layouts.master-admin')
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                <img class="img-fluid logo" src="../assets/images/NYETA.png" alt="Theme-logo">
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
                    <a href="/Admin/Account-Settings">
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
                            <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G"
                                alt="Sara Soueidan" />
                            <h3>Sara Soueidan</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                            <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G"
                                alt="Shaun Dona" />
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
                <span>
                    <h6 class="text-center"><b><span style="color:  #222d32">Hello</span><span class="text text-success">!</span>
                        </b><span class="text text-primary">Admin</span></h6>
                </span>
                <hr>
            </li>
            <li class="treeview">
                <a class="waves-effect waves-dark" href="/Admin/home">
                    <i class="icon-speedometer"></i>
                    <span> Dashboard</span>
                </a>
            </li>

            <li class="active treeview">
                <a class="waves-effect waves-dark" href="/Admin/Projects">
                    <i class="icon-book-open"></i>
                    <span> Project</span>
                </a>
            </li>








            <li class="treeview">
                <a class="waves-effect waves-dark" href="/Admin/Project-Progress">
                    <i class="icon-chart"></i>
                    <span> Project Plan</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="/Admin/Calendar">
                    <i class="icon-calendar"></i>
                    <span> Calendar</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="/Admin/Inbox">
                    <i class="icon-envelope-letter"></i>
                    <span> Inbox</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="/Admin/Accounts">
                    <i class="icon-people"></i>
                    <span> Accounts</span>
                </a>
            </li>


</aside>









<div class="content-wrapper" style="margin-top: 45px">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>
                    <i class="icon-book-open"></i> Project Details</h4>
                <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                    <li class="breadcrumb-item">
                        <a href="Admin/home"></a>
                    </li>
                    <li class="breadcrumb-item">Project
                    </li>

                    <li class="breadcrumb-item">
                        <span class="label label-info">
                            <b>Project Details</b>
                    </li>
                    <li class="breadcrumb-item" style="margin-left: 550px">
                        <a href="/Admin/Projects" class="text text-success"> Back to Project List</a>
                    </li>
                </ol>
            </div>
        </div>
        <!-- Header end -->


        <!-- end of card -->

        <!-- end of col-lg-3 -->

        <!-- start col-lg-9 -->
        <div class="col-lg-12">
            <!-- Nav tabs -->
            <div class="tab-header">
                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Project Information</a>
                        <div class="slide"></div>
                    </li>

                </ul>
            </div>
            <!-- end of tab-header -->

            <div class="tab-content">
                <div class="tab-pane active" id="personal" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">About Project</h5>
                            <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light f-right">
                                Edit Project
                                <i class="icofont icofont-edit"></i>
                            </button>
                        </div>
                        <div class="card-block " style="background-color: lightcyan">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-6">
                                                    <table class="table m-0">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" class="text text-primary">Project Name</th>
                                                                <td>{{$projectDetails->strProjectName}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text text-primary">Client</th>
                                                                <td>{{$projectDetails->strClientFName}}&nbsp;{{$projectDetails->strClientLName}}</td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row" class="text text-primary">Project
                                                                    Description</th>
                                                                <td>{{$projectDetails->txtProjectDesc}}</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->

                                                <div class="col-lg-12 col-xl-6">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" class="text text-primary">Location</th>
                                                                <td>{{$projectDetails->strProjectLocation}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text text-primary">Engineer</th>
                                                                <td>{{$projectDetails->strEmployeeFName}}&nbsp;{{$projectDetails->strEmployeeLName}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text text-primary">Date Added</th>
                                                                <td>August 07, 2018 (???)</td>
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

                            <div class="edit-info">
                                <form method="POST" action="/Admin/Projects/{{$projectDetails->intProjectId}}/Update">
                                    {{csrf_field()}}
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
                                                                                <i class="icon icon-direction"></i>
                                                                            </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input id="projectName" name="projectName" type="text" class="md-form-control"
                                                                                    value="{{$projectDetails->strProjectName}}">
                                                                                <label class="text text-primary">Project
                                                                                    Name</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>


                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                            <span class="md-add-on">
                                                                                <i class="icofont icofont-users-alt-4"></i>
                                                                            </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input disabled type="text" class="md-form-control"
                                                                                    value="{{$projectDetails->strClientFName}} {{$projectDetails->strClientLName}}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                            <span class="md-add-on">
                                                                                <i class="icon icon-note"></i>
                                                                            </span>
                                                                            <div class="md-input-wrapper">
                                                                                <textarea id="projectDesc" name="projectDesc" class="md-form-control" cols="2"
                                                                                    rows="4">{{$projectDetails->txtProjectDesc}}</textarea>
                                                                                <label class="text text-primary">Project
                                                                                    Description</label>

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
                                                                                <i class="icon icon-location-pin"></i>
                                                                            </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input disabled type="text" class="md-form-control"
                                                                                    value="{{$projectDetails->strProjectLocation}}">
                                                                                <label class="text text-primary">Location</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="md-group-add-on">
                                                                            <span class="md-add-on">
                                                                                <i class="icofont icofont-users-alt-4"></i>
                                                                            </span>
                                                                            <div class="md-input-wrapper">
                                                                                <input disabled type="text" class="md-form-control"
                                                                                    value="{{$projectDetails->strEmployeeFName}} {{$projectDetails->strEmployeeLName}}">
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
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20">Save</button>
                                                    <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                </div>
                                            </div>
                                            <!-- end of edit info -->
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </form>
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

@endsection
