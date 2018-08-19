@extends('layouts.master')

@section('css')
<style>

.scroll {
    max-height: 450px;
    overflow-y: auto;
    
   
}

</style>
@endsection
@section ('body')
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

            <a href="Admin/home" class="nav-brand">
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
<div style="position: absolute; margin-top: 90px; margin-left: 850px">

                        <div class="form-inline" >
                            <br>

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
            <!-- Header Starts -->
            <div class="row" style="margin-top: -10px">
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







                    </div>

                </div>
















            </div>
            <!-- Header end -->

            <!-- Tables start -->
            <!-- Row start -->


            <div class="row">
                <div class="col-sm-12">


                    <!-- Contextual classes table starts -->







                    <div class="row">


                        <!-- start col-lg-9 -->
                        <div class="col-xl-12 col-lg-12">
                            <!-- Nav tabs -->
                            <div class="tab-header">
                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Pending </a>
                                        <div class="slide" style="color: #009900 !important"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#project" role="tab">Project Plans</a>
                                        <div class="slide"></div>
                                    </li>


                                </ul>
                            </div>
                            <!-- end of tab-header -->

                            <div class="tab-content">
                                <div class="tab-pane active" id="personal" role="tabpanel">




                                    <div class="card">
                                        <div class="card-header" style="background-color: #4CAF50 !important">
                                            <h5 class="card-header-text">Project Schedule</h5>

                                        </div>
                                        <!-- end of card-header  -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="project-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center txt-primary pro-pic">Line Item</th>
                                                                    <th class="text-center txt-primary">Client</th>
                                                                    <th class="text-center txt-primary pro-pic">Project Name</th>
                                                                   
                                                                    
                                                                    <th class="text-center txt-primary">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">

                                                              
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <img src="/assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                                    </td>
                                                                    <td>Project 5</td>
                                                                   
                                                                    
                                                                       
                                                                        <td class="faq-table-btn">




                                               



                                                                            <button type="button" data-toggle="modal" data-target="#createProjectSchedule" class="btn btn-success waves-effect waves-light"
                                                                                data-toggle="tooltip" data-placement="top" title="Create">
                                                                                 <i class="icon-note"> </i>Create Project Schedule
                                                                            </button>



                                                                         

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
                                        <div class="card-header" style="background-color: #4CAF50 !important">
                                            <h5 class="card-header-text">Project List</h5>

                                        </div>
                                        <!-- end of card-header  -->
                                        <!-- Row start -->
                                         <div class="row">
                                            <div class="col-lg-12">
                                                <div class="project-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center txt-primary pro-pic">Line Item</th>
                                                                    <th class="text-center txt-primary">Client</th>
                                                                    <th class="text-center txt-primary pro-pic">Project Name</th>
                                                                  
                                                                    
                                                                    <th class="text-center txt-primary">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">

                                                              
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <img src="/assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                                    </td>
                                                                    <td>Project 6</td>
                                                               
                                                                    
                                                                       
                                                                        <td class="faq-table-btn">




                                               



                                                                             <button type="button" data-toggle="modal" data-target="#createProjectSchedule" class="btn btn-primary waves-effect waves-light"
                                                                                data-toggle="tooltip" data-placement="top" title="Create">
                                                                                 <i class="icon-map"> </i>Project Schedule
                                                                            </button>
                                                                            <button type="button" data-toggle="modal" data-target="#createProjectSchedule" class="btn btn-warning waves-effect waves-light"
                                                                                data-toggle="tooltip" data-placement="top" title="Create">
                                                                                 <i class="icon-graph"> </i>Material Usage
                                                                            </button>



                                                                         

                                                                        </td>

                                                                </tr>
                                                                
                                                                     <tr>
                                                                    <td>2</td>
                                                                    <td>
                                                                        <img src="/assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                                    </td>
                                                                    <td>Project 7</td>
                                                                
                                                                    
                                                                       
                                                                        <td class="faq-table-btn">




                                               



                                                                           <button type="button" data-toggle="modal" data-target="#createProjectSchedule" class="btn btn-primary waves-effect waves-light"
                                                                                data-toggle="tooltip" data-placement="top" title="Create">
                                                                                 <i class="icon-map"> </i>Project Schedule
                                                                            </button>
                                                                            <button type="button" data-toggle="modal" data-target="#createProjectSchedule" class="btn btn-warning waves-effect waves-light"
                                                                                data-toggle="tooltip" data-placement="top" title="Create">
                                                                                 <i class="icon-graph"> </i>Material Usage
                                                                            </button>



                                                                         

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
                                        </div>
                                        <!-- end of card-main -->
                                    </div>
                                    <!-- end of project pane -->


                                </div>
                                <!-- end of main tab content -->
                            </div>
                        </div>































                        <!-- Tables end -->



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
                                        <button type="button" class="btn btn-danger">Deactivate</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- delete pending project modal -->
                        <div class="modal fade" id="deletePendingProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: indianred !important">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <span style="color: white">Delete Project</span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this project?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                    </div>
                                </div>
                            </div>
                        </div>






                        <!-- view progress project Modal -->
                        <div class="modal fade" id="viewProgress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: green !important">
                                        <h5 class="modal-title" id="exampleModalLabel">Progress</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

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





                      
                    </div>
                </div>


                <!-- Container-fluid ends -->
            </div>
        </div>






<!-- create project schedule modal -->

                <div class="modal fade" id="createProjectSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #4CAF50   !important" >
                                <h4 class="modal-title" id="exampleModalLabel">
                                    <span  style="color: white" >Estimated Project Schedule</span>
                                </h4>
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

@endsection



@section('script')
@endsection