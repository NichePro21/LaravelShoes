
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
    <title>Admin Layout</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('public/backend/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- This is Sidebar menu CSS -->
    <link href="{{URL::to('public/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- This is a Animation CSS -->
    <link href="{{URL::to('public/backend/css/animate.css')}}" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="{{URL::to('public/backend/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('public/backend/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
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
                            <li><a href="{{URL::to('/admin/add-brand')}}"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Thêm Thương Hiệu</span></a></li>
                            <li><a href="{{URL::to('/admin/all-brand')}}"><i class="fa-fw">S</i><span class="hide-menu"> Hiển Thị</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Categories<span class="fa arrow"></span>
                        <span class="label label-rouded label-purple pull-right">2</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{URL::to('/admin/add-category')}}"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Thêm Categories</span></a></li>
                            <li><a href="{{URL::to('/admin/all-category')}}"><i class="fa-fw">S</i><span class="hide-menu"> Hiển Thị Categories</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Product<span class="fa arrow"></span>
                        <span class="label label-rouded label-purple pull-right">3</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{URL::to('/admin/add-product')}}"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Add New Product</span></a></li>
                            <li><a href="{{URL::to('/admin/all-product')}}"><i class="fa-fw">S</i><span class="hide-menu"> All Product</span></a></li>
                            {{-- <li><a href="{{URL::to('/add-color')}}"><i class="fa-fw">S</i><span class="hide-menu"> Add Color</span></a></li>
                            <li><a href="{{URL::to('/all-color')}}"><i class="fa-fw">S</i><span class="hide-menu"> All Color</span></a></li>
                       --}} </ul> 
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Orders<span class="fa arrow"></span>
                        <span class="label label-rouded label-purple pull-right">2</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{URL::to('/admin/all-order')}}"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">View Orders</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('admin_content')
            </div>
            <footer class="footer text-center"> 2021 &copy; </footer>
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
    <script type="text/javascript">
 
        function ChangeToSlug()
            {
                var slug;
             
                //Lấy text từ thẻ input title 
                slug = document.getElementById("slug").value;
                slug = slug.toLowerCase();
                //Đổi ký tự có dấu thành không dấu
                    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                    slug = slug.replace(/đ/gi, 'd');
                    //Xóa các ký tự đặt biệt
                    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                    //Đổi khoảng trắng thành ký tự gạch ngang
                    slug = slug.replace(/ /gi, "-");
                    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                    slug = slug.replace(/\-\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-/gi, '-');
                    //Xóa các ký tự gạch ngang ở đầu và cuối
                    slug = '@' + slug + '@';
                    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                    //In slug ra textbox có id “slug”
                document.getElementById('convert_slug').value = slug;
            }
             
        $('.selectpicker').change(function() {
            var order_status = $(this).val();
            var order_id = $(this).children(":selected").attr("id");
            var _token = $('input[name="_token"]').val();
           // alert(order_id);
            //lay ra so luong
            quantity = [];
            $("input[name='product_sales_quantity']").each(function() {
                quantity.push($(this).val());
            });
            //lay ra product id
            order_product_id = [];
            $("input[name='order_product_id']").each(function() {
                order_product_id.push($(this).val());
            });
            j = 0;
            for (i = 0; i < order_product_id.length; i++) {
                //so luong khach dat
                var order_qty = $('.order_qty_' + order_product_id[i]).val();
                //so luong ton kho
                var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

                if (parseInt(order_qty) > parseInt(order_qty_storage)) {
                    j = j + 1;
                    if (j == 1) {
                        alert('Số lượng bán trong kho không đủ');
                    }
                    $('.color_qty_' + order_product_id[i]).css('background', '#000');
                }
            }

            if (j == 0) {

                $.ajax({
                    url: '/update-order',
                    method: 'POST',
                    data: {
                        _token: _token,
                        order_status: order_status,
                        order_id: order_id,
                        quantity: quantity,
                        order_product_id: order_product_id
                    },
                    success: function() {
                        alert('Success');
                        location.reload();
                        //alert(data);
                    }
                });

            }

        });
       
       
    </script>
</body>

</html>