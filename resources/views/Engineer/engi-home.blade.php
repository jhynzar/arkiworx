@extends('layouts.master-engineer')
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
                                <img class="img-circle " src="../assets/images/avatar-2.png" style="width:40px;" alt="User Image">
                            </span>
                            <span>
                                <b>{{session("fname")}}</b>&nbsp;{{session("lname")}}</span>

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
                    <img src="/assets/images/avatar-2.png" alt="User Image" class="img-circle">
                </div>
                <div class="f-left info">
                    <br>
                    <br>
                    <p>
                        <b>{{session("fname")}}&nbsp;{{session("lname")}}</b> </p>
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
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="/Engineer/Home">
                        <i class="icon-speedometer"></i>
                        <span> Dashboard</span>
                    </a>
                </li>


                <li class="treeview">
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
                    <a class="waves-effect waves-dark" href="/Engineer/Accounts-Settings">
                        <i class="icon-people"></i>
                        <span> Account Setting</span>
                    </a>
                </li>




    </aside>
    <!-- end of sidebar-->



    <!--tabs-->

   





    <div class="content-wrapper" style="margin-top: 30px">


        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            
                <div class="main-header">
                    <h4>
                        <i class="icon icon-speedometer"></i> Dashboard</h4>
                </div>
         
             <hr class="bg bg-primary">
            <!-- 4-blocks row start -->
            <div class="row m-b-30 dashboard-header">
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                            <i class="icon-bubbles"></i>
                            <div class="f-right">
                                <h2 class="counter">4500</h2>
                                <span>Total Sales</span>
                            </div>
                        </div>
                        <div class="bg-dark-primary">
                            <p class="week-sales">Total SALES</p>
                            <p class="total-sales">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-success dashboard-success">
                        <div class="sales-success">
                            <i class="icon-speedometer"></i>
                            <div class="f-right">
                                <h2 class="counter">3521</h2>
                                <span>Last Week's Sale</span>
                            </div>
                        </div>
                        <div class="bg-dark-success">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales ">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <i class="icon-basket-loaded"></i>
                            <div class="f-right">
                                <h2 class="counter">1085</h2>
                                <span>New Orders</span>
                            </div>
                        </div>
                        <div class="bg-dark-warning">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales">84</p>
                        </div>
                    </div>
                </div> -->
         






                
                

            </div>
         
            
            
            
            <div class="card" >
               <div class="col-sm-6 col-xs-12">
            <table class="table">
                <div class="card-header" style="background-color: #222d32; color: white !important">
                    <h5>Pending Cost project Estimations</h5>
                </div>
  <thead style="background-color: white" >
    <tr class="text text-primary">
      <th scope="col">Project Name</th>
      <th scope="col">Client</th>
    
    </tr>
  </thead>
  <tbody style="background-color:white">
    <tr >
      <th >Project 1</th>
      <td>Rebecca Santos</td>
    
    </tr>
 
  </tbody>
</table>
                
               </div>
            
            </div>
            
            
            
                <div class="col-sm-6 col-xs-12">
            <table class="table">
                <div class="card-header" style="background-color: #222d32; color: white !important">
                    <h5>On going Projects</h5>
                </div>
  <thead style="background-color: white" >
    <tr class="text text-primary">
      <th scope="col">Project Name</th>
      <th scope="col">Client</th>
    
    </tr>
  </thead>
  <tbody style="background-color:white">
    <tr >
      <th >Project 1</th>
      <td>Rebecca Santos</td>
    
    </tr>
 
  </tbody>
</table>
                
               </div>
            
            
            
         <div class="card" >
               <div class="col-sm-9 col-xs-12">
            <table class="table">
                <div class="card-header" style="background-color: #222d32; color: white !important">
                   <h5> Project Plans</h5>
                </div>
  <thead style="background-color: white" >
    <tr>
      <th scope="col">Project Name</th>
      <th scope="col">Client</th>
         <th scope="col">Status</th>
    
    </tr>
  </thead>
  <tbody style="background-color:white">
    <tr >
      <th >Project 3</th>
      <td>William Santos</td>
        <td > <span class="label label-warning">Pending</span></td>
    
    </tr>
      <tr >
      <th >Project 3</th>
      <td>William Santos</td>
          <td ><span class="label label-success">Finished</span></td>
    
    </tr>
 
  </tbody>
</table>
                
               </div>
            
            </div>    
            
            
            
            
            
             <div class="col-sm-3 col-xs-12">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Materials Price Update</span>
                        <h2 class="dashboard-total-products counter">{{number_format($counts->updatedMaterialPricesCount)}}</h2>
                        <span class="label label-warning">Updates</span>This week
                        <div class="side-box bg-warning">
                            <i class="icon-note"></i>
                        </div>
                    </div>
                </div>
            
            
            
            
            
            

            <!-- 3-1-block end -->

            <!-- 2-1 block start -->

            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->
        <!-- Container-fluid ends -->

    </div>

    
@endsection