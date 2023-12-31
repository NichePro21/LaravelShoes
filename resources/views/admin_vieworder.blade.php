
<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::to('public/backend/plugins/images/favicon.png')}}">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('public/backend/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- This is Sidebar menu CSS -->
    <link href="{{URL::to('public/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- This is a Animation CSS -->
    <link href="{{URL::to('public/backend/css/animate.css')}}" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="{{URL::to('public/backend/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('public/backend/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    <style>
        .page-wrapper>.page-content {
    padding: 30px;
    min-height: calc(100vh - 167px);
    max-width: 1300px;
    padding-top: 0;
}
.container-fluid {
    padding-left: 25px;
    padding-right: 25px;
    padding-bottom: 15px;
}
    </style>
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view -->
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="/dashboard">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="{{URL::to('public/backend/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{URL::to('public/backend/plugins/images/admin-logo-dark.png')}}" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="{{URL::to('public/backend/plugins/images/admin-text.png')}}" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{URL::to('public/backend/plugins/images/admin-text-dark.png')}}" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
                   
                    <!-- .Megamenu -->
                    <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Pages</li>
                                    <li><a href="/" target="_blank">Home</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                </ul>
                <!-- This is the message dropdown -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- /.Task dropdown -->
                    <!-- /.dropdown -->
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{URL::to('public/backend/plugins/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="{{URL::to('public/backend/plugins/images/users/varun.jpg')}}" alt="user" /></div>
                                    <div class="u-text"><h4>Steave Jobs</h4><p class="text-muted">varun@gmail.com</p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{URL::to('/logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li><a href="/dashboard" class="waves-effect active"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Home </span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Brand<span class="fa arrow"></span>
                        <span class="label label-rouded label-purple pull-right">2</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{URL::to('/add-brand')}}"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Thêm Thương Hiệu</span></a></li>
                            <li><a href="{{URL::to('/all-brand')}}"><i class="fa-fw">S</i><span class="hide-menu"> Hiển Thị</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Categories<span class="fa arrow"></span>
                        <span class="label label-rouded label-purple pull-right">2</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{URL::to('/add-category')}}"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Thêm Categories</span></a></li>
                            <li><a href="{{URL::to('/all-category')}}"><i class="fa-fw">S</i><span class="hide-menu"> Hiển Thị Categories</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Product<span class="fa arrow"></span>
                        <span class="label label-rouded label-purple pull-right">2</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{URL::to('/add-product')}}"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Add New Product</span></a></li>
                            <li><a href="{{URL::to('/all-product')}}"><i class="fa-fw">S</i><span class="hide-menu"> All Product</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Orders<span class="fa arrow"></span>
                        <span class="label label-rouded label-purple pull-right">2</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{URL::to('/admin-view-order')}}"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">View Orders</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="main-wrapper">
            <div class="container-fluid page-content">
                @yield('admin_content')
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2023 </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{URL::to('public/backend/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::to('public/backend/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Sidebar menu plugin JavaScript -->
    <script src="{{URL::to('public/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="{{URL::to('public/backend/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{URL::to('public/backend/js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{URL::to('public/backend/js/custom.js')}}"></script>
</body>

</html>