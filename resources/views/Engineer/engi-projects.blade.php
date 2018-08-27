@extends('layouts.master') @section('body')
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
            <img class="img-fluid logo" src="../assets/images/GG.jpg" alt="Theme-logo">
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
<!-- End of navbar -->



  <div class="form-inline">
                            <br>
                        <div style="position: absolute; margin-top: 110px; margin-left: 1100 !important">
                            <div class="form-group pull-center">
                                <label for="showProject" class="text text-muted">Show</label>
                                <select class="form-control" name="sex" id="userType" style="width: 70px; height: 35px !important;">
                                    <option selected> 10 </option>
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
                                <label class="text text-muted"> Projects</label>
                            </div>
                        </div>
            </div>

<div class="content-wrapper" style="margin-top: 0px">
    <!-- Container-fluid starts -->
   
    <div class="container-fluid">
 
        <!-- Header Starts -->
        <div class="row" style="margin-top: -10px">
            <br> 
            <div class="col-sm-9 p-0">
                     <div class="main-header">
                        <h4>
                            <i class="icon-book-open"></i> Projects</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="Admin/home"></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Projects List</a>
                            </li>

                        </ol>







                        <div class="input-group stylish-input-group" style="position: absolute; margin-top: -60px; margin-left: 300px">
                            <input type="text" class="form-control" placeholder="Search project" style="width: 400px">
                            <button type="submit" class="btn btn-primary">
                                <span class="icon-magnifier"></span>
                            </button>

                        </div>

                      


                    </div>
             
            </div>




















        </div>
        <!-- Header end -->

        <!-- Tables start -->
        <!-- Row start -->

<br> <br>
        <div class="row">


            <!-- start col-lg-9 -->
            <div class="col-xl-12 col-lg-12">
                
                
                <!-- Nav tabs -->

                <!-- end of tab-header -->

                <div class="tab-content">
                    <div class="tab-pane active" id="personal" role="tabpanel">




                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Engineer Project List</h5>

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
                                                    @foreach($onGoingProjects as $key=>$project)
                                                    <tr class=@if($key%2==1) "table-info" @endif>
                                                        <td>{{$key+1}}</td>
                                                        <td>
                                                            <img src="/assets/images/avatar-2.png" class="img-circle" alt="tbl"> 
                                                            &nbsp; &nbsp; {{$project->strClientFName}}&nbsp;{{$project->strClientLName}}
                                                        </td>
                                                        <td>{{$project->strProjectName}}</td>



                                                        <td class="faq-table-btn">

                                                            <a href="/Engineer/Engineer-Projects/{{$project->intProjectId}}/Cost-Summary" class="btn btn-success waves-effect waves-light"
                                                                data-toggle="tooltip" data-placement="top" title="View">
                                                                <i style="font-size: 20px"class="icofont icofont-calculator"></i> 
                                                                Cost Summary
                                                            </a>
                                                            <a href="/Engineer/Engineer-Projects/{{$project->intProjectId}}/Actuals" class="btn btn-primary waves-effect waves-light"
                                                                 data-toggle="tooltip" data-placement="top" title="View">
                                                                <i style="font-size: 20px"class="icofont icofont-file-document"></i> 
                                                                Actuals
                                                            </a>

                                                        </td>

                                                    </tr>
                                                    @endforeach

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
@endsection @section('script') @endsection
