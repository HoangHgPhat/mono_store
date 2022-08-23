<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- //assets/vendor CSS-->
    <link href="/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.html">
                                <i href="{{url('/home')}}" class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                        <li>
                            <a href="{{url('listad')}}">
                                <i class="fas fa-chart-bar"></i>Admin</a>
                        </li>
                        <li>
                            <a href="{{url('list')}}">
                                <i class="fas fa-chart-bar"></i>Products</a>
                                <!-- link vao phan public/list -->
                        </li>
                        <li>
                            <a href="{{url('list-producers  ')}}">
                                <i  class="fas fa-table"></i>Type of Product</a> 
                                <!-- tao ra 1 trang giong list, xong hien thi producers --> 
                        </li>
                        <li>
                            <a href="{{url('cusList')}}">
                                <i class="far fa-check-square"></i>Customer</a>
                                <!-- show ra so luong account nhu phan list products -->
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap" style="flex-flow: row-reverse;">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                             
                                             <a class="js-acc-btn" href="#">{{Session::get('adminName')}}</a>
                                             <a class="js-acc-btn" href="{{url('editAd/'. Session::get('loginID') )}}" class="nav__link">Edit Profile</a> 
                                             <a class="js-acc-btn" href="{{url('logoutAdmin')}}" class="nav__link">Logout</a> 
                                            
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button  class="au-btn au-btn-icon au-btn--blue">
                                        <!-- <a href="{{ url('editAd') }}"><i  class="zmdi zmdi-plus"></i>Reset Password</button></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                                <!-- count  -->
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                        
                        
            
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/assets/vendor/slick/slick.min.js">
    </script>
    <script src="/assets/vendor/wow/wow.min.js"></script>
    <script src="/assets/vendor/animsition/animsition.min.js"></script>
    <script src="/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
