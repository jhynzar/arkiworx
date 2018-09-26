@extends('layouts.master-engineer')

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
                        <a href="/Admin/Account-Settings">
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
                                <img src="../assets/images/erwin.jpg" alt="PagePreloadingEffect" />
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/erwin.jpg" alt="DraggableDualViewSlideshow" />
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/erwin.jpg" alt="TooltipStylesInspiration" />
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="../assets/images/erwin.jpg" alt="NotificationStyles" />
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
                    <p>Erwin Andres</p>
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



                <li class="treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Engineer-Projects">
                        <i class="icon-briefcase"></i>
                        <span> Projects</span>
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





    <div class="content-wrapper" style="margin-top: 35px">
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
                                                                    <th class="text-center txt-success pro-pic">Project Name</th>
                                                                   
                                                                    
                                                                    <th class="text-center txt-danger">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">

                                                                @foreach ($pendingProjectSchedules as $projectKey=>$project)
                                                                    <tr>
                                                                        <td>{{$projectKey+1}}</td>
                                                                        <td>
                                                                            <img src="/assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                                            &nbsp; &nbsp; {{$project->projectDetails->strClientFName}}&nbsp;{{$project->projectDetails->strClientLName}}
                                                                        </td>
                                                                        <td>{{$project->projectDetails->strProjectName}}</td>
                                                                    
                                                                        
                                                                        
                                                                            <td class="faq-table-btn">




                                                



                                                                                <button type="button" data-toggle="modal" data-target="#createProjectScheduleOld{{$projectKey}}" class="btn btn-primary waves-effect waves-light"
                                                                                    data-toggle="tooltip" data-placement="top" title="Create">
                                                                                    <i class="icon-note"> </i>Create Project Schedule
                                                                                </button>
                                                                                    <!-- Button trigger modal -->
                                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProjectSchedule{{$projectKey}}">
                                                                                    New
                                                                                    </button>



                                                                            

                                                                            </td>

                                                                    </tr>

                                                                                                                                    
                                                                <!-- New schedule modal -->

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="createProjectSchedule{{$projectKey}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <form method="POST" action="Project-Progress/{{$project->projectDetails->intProjectId}}">
                                                                                {{csrf_field()}}

                                                                                

                                                                                <div class="modal-header" style="background-color: #546d77  !important">
                                                                                    <h4 class="modal-title" id="exampleModalLabel">
                                                                                        <span style="color: white"><b>Estimated Project Schedule 2</b></span>
                                                                                    </h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body scroll">
                                                                                    <h6 class="text text-default" style="margin-left: 380px">ACTIVITIES:</h6>


                                                                                    <!-- input type hidden -->
                                                                                    <input type="hidden" name="subCategoriesCount" value="{{count($project->projectWorkSubCategories)}}">

                                                                                    @foreach ($project->projectWorkSubCategories as $subCategoryKey=>$subCategory)

                                                                                        <!-- input type hidden -->
                                                                                        <input type="hidden" name="subCategory{{$subCategoryKey}}id" value="{{$subCategory->workSubCategoryDetails->intWorkSubCategoryId}}">

                                                                                            <div class="panel panel-default">
                                                                                                <div class="panel-heading " style="background-color: #059CF9; color: white">
                                                                                                    <h3 class="panel-title panel-primary">{{$subCategory->workSubCategoryDetails->strWorkSubCategoryDesc}}</h3>
                                                                                                    <div class="form-group form-inline" style="position: absolute; margin-top: -40px; margin-left: 600px">
                                                                                                        <label style="color:white"><span class="label label-default">DEPENDENCIES</span> <i class="icon-organization text text-light"></i>&nbsp;:&nbsp;</label>
                                                                                                        <select onchange="{
                                                                                                            if(this.value != -1){
                                                                                                                fromDate = $('#createProjectSchedule'+{{$projectKey}}+' #subCategory'+this.value+'endDate');
                                                                                                                thisDate = $('#createProjectSchedule'+{{$projectKey}}+' #subCategory'+{{$subCategoryKey}}+'startDate');
                                                                                                                firstPhaseDate = $('#createProjectSchedule'+{{$projectKey}}+' #subCategory'+{{$subCategoryKey}}+'phase'+'0'+'startDate'); //first phase startdate

                                                                                                                thisDate.val(fromDate.val());
                                                                                                                firstPhaseDate.val(fromDate.val());
                                                                                                                thisDate.prop('readonly',true);
                                                                                                                firstPhaseDate.prop('readonly',true);
                                                                                                            }else{
                                                                                                                thisDate.val('');
                                                                                                                firstPhaseDate.val('');
                                                                                                                //thisDate.prop('readonly',false); //don't remove readonly
                                                                                                                firstPhaseDate.prop('readonly',false);
                                                                                                            }
                                                                                                        }" id="subCategory{{$subCategoryKey}}dependency" name="subCategory{{$subCategoryKey}}dependency" class="form-control" style="width: 80px">
                                                                                                            <option value="-1">None</option>
                                                                                                            @if ($subCategoryKey != 0)
                                                                                                                @foreach ($project->projectWorkSubCategories as $optionsSubCategoryKey=>$optionsSubCategory)
                                                                                                                    @if ($optionsSubCategoryKey < $subCategoryKey)
                                                                                                                        <option value="{{$optionsSubCategoryKey}}">{{$optionsSubCategory->workSubCategoryDetails->strWorkSubCategoryDesc}}</option>
                                                                                                                    @endif
                                                                                                                @endforeach
                                                                                                            @endif
            
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="panel-body" style="background-color: #C7E9FE">
                                                                                                    <div class="form-group form-inline">

                                                                                                        <input type="date" id="subCategory{{$subCategoryKey}}startDate" name="subCategory{{$subCategoryKey}}startDate" class="form-control" style="width:180px" readonly>
                                                                                                        <input type="date" id="subCategory{{$subCategoryKey}}endDate" name="subCategory{{$subCategoryKey}}endDate" class="form-control" style="width:180px" readonly>
                                                                                                        
                                                                                                        <!-- input type hidden -->
                                                                                                        <input type="hidden" name="subCategory{{$subCategoryKey}}phasesCount" value="{{count($subCategory->workSubCategoryPhases)}}">
                                                                                                        
                                                                                                        @foreach($subCategory->workSubCategoryPhases as $phaseKey=>$phase)

                                                                                                        <!-- input type hidden -->
                                                                                                        <input type="hidden" name="subCategory{{$subCategoryKey}}phase{{$phaseKey}}id" value="{{$phase->intWorkSubCategoryPhasesId}}">
            
                                                                                                        <br>
                                                                                                        &nbsp;&nbsp; <label class="text text-primary"> Phase {{$phaseKey+1}}</label> &nbsp;&nbsp;&nbsp;
            
                                                                                                        &nbsp;&nbsp;&nbsp; <input type="text" name="" class="form-control" style="width:300px"
                                                                                                            value="{{$phase->strName}}" disabled>
                                                                                                        <!--  &nbsp;&nbsp;   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <label class="text text-primary"> Progress</label> &nbsp;&nbsp;&nbsp; 
                                                                                                                                                                                
                                                                                                                                                                                <input type="text" name="" class="form-control text-center" style="width:200px" placeholder="20%" disabled> <br> <br> -->
                                                                                                        <br> <br>

                                                                                                        <!-- checker if phase is first or last (for category start and end)-->
                                                                                                        @if ($phaseKey == 0)
                                                                                                            &nbsp;&nbsp; <label for="sex">Start Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                                                                                            <input onchange="{
                                                                                                                fromDate = $(this);
                                                                                                                toDate = $('#createProjectSchedule'+{{$projectKey}}+' #subCategory'+{{$subCategoryKey}}+'startDate');
                                                                                                                toDate.val(fromDate.val());
                                                                                                            }" 
                                                                                                            type="date" id="subCategory{{$subCategoryKey}}phase{{$phaseKey}}startDate" name="subCategory{{$subCategoryKey}}phase{{$phaseKey}}startDate" class="form-control" style="width:180px">
                                                                                                            &nbsp; &nbsp; <label for="sex">End Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                                                                                            <input type="date" id="subCategory{{$subCategoryKey}}phase{{$phaseKey}}endDate" name="subCategory{{$subCategoryKey}}phase{{$phaseKey}}endDate" class="form-control" style="width:180px">
                                                                                                        @elseif ($phaseKey == sizeOf($subCategory->workSubCategoryPhases) - 1)
                                                                                                            &nbsp;&nbsp; <label for="sex">Start Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                                                                                            <input type="date" id="subCategory{{$subCategoryKey}}phase{{$phaseKey}}startDate" name="subCategory{{$subCategoryKey}}phase{{$phaseKey}}startDate" class="form-control" style="width:180px">
                                                                                                            &nbsp; &nbsp; <label for="sex">End Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                                                                                            <input onchange="{
                                                                                                                fromDate = $(this);
                                                                                                                toDate = $('#createProjectSchedule'+{{$projectKey}}+' #subCategory'+{{$subCategoryKey}}+'endDate');
                                                                                                                toDate.val(fromDate.val());
                                                                                                            }" type="date" id="subCategory{{$subCategoryKey}}phase{{$phaseKey}}endDate" name="subCategory{{$subCategoryKey}}phase{{$phaseKey}}endDate" class="form-control" style="width:180px">
                                                                                                        @else
                                                                                                            &nbsp;&nbsp; <label for="sex">Start Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                                                                                            <input type="date" id="subCategory{{$subCategoryKey}}phase{{$phaseKey}}startDate" name="subCategory{{$subCategoryKey}}phase{{$phaseKey}}startDate" class="form-control" style="width:180px">
                                                                                                            &nbsp; &nbsp; <label for="sex">End Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                                                                                            <input type="date" id="subCategory{{$subCategoryKey}}phase{{$phaseKey}}endDate" name="subCategory{{$subCategoryKey}}phase{{$phaseKey}}endDate" class="form-control" style="width:180px">
                                                                                                        @endif
                                                                                                        
            
                                                                                                        <hr>
                                                                                                        @endforeach
                                                                                                    </div>
            
                                                                                                </div>
                                                                                            </div>
                                                                                        <br> <br>
                                                                                    @endforeach




                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                    <!-- create project schedule modal -->

                                                                    <div class="modal fade" id="createProjectScheduleOld{{$projectKey}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <form action="Project-Progress/{{$project->projectDetails->intProjectId}}" method="POST">
                                                                                    {{csrf_field()}}

                                                                                    <input type="hidden" name="activitiesCount" value="{{count($project->projectWorkSubCategories)}}">
                                                                                    <div class="modal-header" style="background-color: #4CAF50   !important" >
                                                                                        <h4 class="modal-title" id="exampleModalLabel">
                                                                                            <span  style="color: white" >Estimated Project Schedule</span>
                                                                                        </h4>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body scroll" >
                                                                                        <h6 class="text text-default" style="margin-left: 380px">ACTIVITIES:</h6> <br> <br>
                                                                                        @foreach ($project->projectWorkSubCategories as $subCategoryKey=>$subCategory)
                                                                                        <div class="form-group form-inline">
                                                                                            
                                                                                                    
                                                                                                <label class="text text-primary"> Task {{$subCategoryKey + 1}}</label> &nbsp;&nbsp;&nbsp;
                                                                                                <input type="text" name="" class="form-control" style="width:400px" placeholder="{{$subCategory->workSubCategoryDetails->strWorkSubCategoryDesc}}" disabled> <br> <br>
                                                                                                <input type="hidden" id="subCategoryId{{$subCategoryKey}}" name="subCategoryId{{$subCategoryKey}}" value="{{$subCategory->workSubCategoryDetails->intWorkSubCategoryId}}">
                                                                                                <label for="sex">Start Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label> 
                                                                                                <input type="date" id="startDate{{$subCategoryKey}}" name="startDate{{$subCategoryKey}}" class="form-control" style="width:180px" >
                                                                                                &nbsp; &nbsp;  <label for="sex">End Date <i class="icon-calendar text text-primary"></i>&nbsp;:&nbsp;</label>
                                                                                                <input type="date" id="endDate{{$subCategoryKey}}" name="endDate{{$subCategoryKey}}" class="form-control" style="width:180px" >
                                                                                                &nbsp; &nbsp;  <label for="sex">Dependencies <i class="icon-organization text text-primary"></i>&nbsp;: &nbsp;</label>
                                                                                                <select id="dependency{{$subCategoryKey}}" name="dependency{{$subCategoryKey}}" onchange="onDependencyChangeOld(this,{{$projectKey}},{{$subCategoryKey}})" class="form-control" style="width: 100px"> 
                                                                                                    <option value="-1">None</option>
                                                                                                    @if ($subCategoryKey != 0)
                                                                                                        @foreach ($project->projectWorkSubCategories as $optionsSubCategoryKey=>$optionsSubCategory)
                                                                                                            @if ($optionsSubCategoryKey < $subCategoryKey)
                                                                                                                <option value="{{$optionsSubCategoryKey}}">Task {{$optionsSubCategoryKey + 1}}</option>

                                                                                                            @endif
                                                                                                        @endforeach
                                                                                                    @endif
                                                                                                </select>
                                                                                        </div>
                                                                                        <br> <br>

                                                                                        @endforeach
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="modal-footer" >
                                                                                        <button type="submit" class="btn btn-success"  >Save</button>
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                                    
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- CREATE PROJECT SCHEDULE MODAL END -->


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
                                                                    <th class="text-center txt-success pro-pic">Project Name</th>
                                                                  
                                                                    
                                                                    <th class="text-center txt-danger">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">

                                                                @foreach ($finishedProjectSchedules as $projectKey=>$project)
                                                                    <tr>
                                                                        <td>{{$projectKey + 1}}</td>
                                                                        <td>
                                                                            <img src="/assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                                            &nbsp; &nbsp; {{$project->strClientFName}}&nbsp;{{$project->strClientLName}}
                                                                        </td>
                                                                        <td>{{$project->strProjectName}}</td>
                                                                
                                                                        
                                                                        
                                                                            <td class="faq-table-btn">







                                                                                <a href="/Engineer/Project-Progress/{{$project->intProjectId}}/Schedule"  type="button"  class="btn btn-primary waves-effect waves-light"
                                                                                    data-toggle="tooltip" data-placement="top" title="View">
                                                                                    <i class="icon-map"> </i>Project Schedule
                                                                                </a>
                                                                                <a href="/Engineer/Project-Progress/Materials-Usage"  type="button"  class="btn btn-warning waves-effect waves-light"
                                                                                    data-toggle="tooltip" data-placement="top" title="View">
                                                                                    <i class="icon-graph"> </i>Material Usage
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
                                        </div>
                                        <!-- end of card-main -->
                                    </div>
                                    <!-- end of project pane -->


                                </div>
                                <!-- end of main tab content -->
                            </div>
                        </div>

                        <!-- Tables end -->


            
            
            
            
           


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
                                <input type="text" class="form-control" id="user" placeholder="User name">
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
    <script>

        function onDependencyChangeOld(selectTag,projectKey,subCategoryKey){

            if(selectTag.value != -1){
                fromDate = $('#createProjectScheduleOld'+projectKey+' #endDate'+selectTag.value);
                thisDate = $('#createProjectScheduleOld'+projectKey+' #startDate'+subCategoryKey);

                thisDate.val(fromDate.val());
                thisDate.prop("readonly",true);
            }else{
                thisDate.val("");
                thisDate.prop("readonly",false);
            }
        }
    </script>
@endsection