<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ArkiWorx | Cost Management and Progress Monitoring System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <!-- Google font-->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

     <!-- iconfont -->
     <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">

     <!-- simple line icon -->
     <link rel="stylesheet" type="text/css" href="../assets/icon/simple-line-icons/css/simple-line-icons.css">

     <!-- Required Fremwork -->
     <link rel="stylesheet" type="text/css" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

     <!-- Weather css -->
     <link href="../assets/css/svg-weather.css" rel="stylesheet">

     <!-- Echart js -->
     <script src="../assets/plugins/charts/echarts/js/echarts-all.js"></script>

     <!-- Style.css -->
     <link rel="stylesheet" type="text/css" href="../assets/css/main.css">

     <!-- Responsive.css-->
     <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

     <!--color css-->
     <link rel="stylesheet" type="text/css" href="../assets/css/color/color-1.min.css" id="color"/>
    
    <!-- fullCalendar -->
    <link rel="stylesheet" href="../Admin/bower_components/fullcalendar/dist/fullcalendar.min.css" media="print">
    <link rel="stylesheet" href="../Admin/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
    
    <style>
        .sidebar .user-panel {
            background-image: url('assets/images/ff.jpg') !important;
        }
        
        .morphsearch-content {
            background-color: #222d32 !important;
                    color: white !important; 
        }
            
           .main-header-top > .navbar {
            background: #222d32  !important; 
        } 
        
        
        .sidebar-menu > li.active > a {
            background: #222d32 !important;
        }
        
         .main-header-top {
            background-color: #222d32 !important; 
        }    
        
        
        .card-header {
            background-color: #778899  !important; 
            color: white !important; 
        }
      
        .modal-header {
            background-color: #778899 !important; 
        }
        
        
        .modal-header {
            background-color: #778899 !important; 
            color: white !important; 
        }        
    </style>

    @yield('css')
</head>
<body class="sidebar-mini fixed">
    @yield('body')

    @yield('scripts')
</body>
</html>