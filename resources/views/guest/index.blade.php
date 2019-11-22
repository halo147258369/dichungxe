<!doctype html>
<html lang="en">

<head>
    <title>Dichungxe Project</title>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="source/css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="source/css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="source/css/style.css">
    <link rel="stylesheet" id="cpswitch" href="source/css/orange.css">
    <link rel="stylesheet" href="source/css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="source/css/owl.carousel.css">
    <link rel="stylesheet" href="source/css/owl.theme.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="source/css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="source/css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="source/css/magnific-popup.css">
    <style>
        body {
            font-family: "Roboto";
        }
    </style>
</head>


<body id="main-homepage">

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." required />
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                        </div><!-- end input-group -->
                    </div><!-- end form-group -->
                </form>
            </div><!-- end form-center -->
        </div><!-- end overlay-content -->
    </div><!-- end overlay -->


    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>3/2 Ninh Kiều , Cần Thơ City</li>
                            <li><span><i class="fa fa-phone"></i></span>+0373765400</li>
                        </ul>
                    </div><!-- end info -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            @if(Auth::guard('member')->check())
                            <li><span style="color: #fff">Xin chào {{Auth::guard('member')->user()->name}}, </span><a href="{{route('member.logout.get')}}"><span><i class="fa fa-lock"></i></span>Đăng xuất</a></li>
                            @else
                            <li><a href="{{route('guest.login.get')}}"><span><i class="fa fa-lock"></i></span>Đăng Nhập</a></li>
                            <li><a href="{{route('guest.register.get')}}"><span><i class="fa fa-plus"></i></span>Đăng Ký</a></li>
                            @endif
                        </ul>
                    </div><!-- end links -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end top-bar -->

    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-search hidden-lg">
                    <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </div>
                <a href="#" class="navbar-brand"><span><i class="fa fa-car"></i>Di</span>chungxe</a>
            </div><!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trợ Giúp<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="test1">Cách Thức Hoạt Động</a></li>
                            <li><a href="test2">Hướng Dẫn Sử Dụng</a></li>
                            <li><a href="test">Hướng Dẫn An Toàn</a></li>
                            <!--  <li><a href="tour-homepage.html">Tour Homepage</a></li>
                                <li><a href="cruise-homepage.html">Cruise Homepage</a></li>
                                <li><a href="car-homepage.html">Car Homepage</a></li>
                                <li><a href="landing-page.html">Landing Page</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a href="news" class="dropdown-toggle" data-toggle="dropdown">Tin Tức<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="news">Tin</a></li>
                            <!-- <li><a href="flight-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="flight-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="flight-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="flight-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="flight-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="flight-detail-right-sidebar.html">Detail Right Sidebar</a></li> -->
                        </ul>
                    </li>
                    <!--       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="tour-homepage.html">Tour Homepage</a></li> -->
                    <!-- <li><a href="tour-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="tour-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="tour-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="tour-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="tour-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="tour-detail-right-sidebar.html">Detail Right Sidebar</a></li> -->
                    <!--     </ul>
                    </li> -->
                    <!--  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cruise<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cruise-homepage.html">Cruise Homepage</a></li>
                            <li><a href="cruise-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="cruise-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="cruise-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="cruise-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="cruise-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="cruise-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                        </ul>
                    </li> -->
                    <!--  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cars<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="car-homepage.html">Car Homepage</a></li>
                            <li><a href="car-listing-left-sidebar.html">List View Left Sidebar</a></li>
                            <li><a href="car-listing-right-sidebar.html">List View Right Sidebar</a></li>
                            <li><a href="car-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                            <li><a href="car-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                            <li><a href="car-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            <li><a href="car-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                        </ul>
                    </li> -->
                    <!--  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-header">Standard <span>Pages</span></li> -->
                    <!-- <li><a href="about-us.html">About Us</a></li>
                                				<li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="blog-listing-left-sidebar.html">Blog Listing Left Sidebar</a></li>
                                                <li><a href="blog-listing-right-sidebar.html">Blog Listing Right Sidebar</a></li>
                                                <li><a href="blog-detail-left-sidebar.html">Blog Detail Left Sidebar</a></li>
                                                <li><a href="blog-detail-right-sidebar.html">Blog Detail Right Sidebar</a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <ul class="list-unstyled">	
                                                <li class="dropdown-header">User <span>Dashboard</span></li>
                                                <li><a href="dashboard.html">Dashboard</a></li>
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="booking.html">Booking</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cards.html">Cards</a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-header">Special <span>Pages</span></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="registration.html">Registration</a></li>
                                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                                <li><a href="error-page.html">404 Page</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>   
                                            </ul>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-header">Extra <span>Pages</span></li>
                                                <li><a href="before-you-fly.html">Before Fly</a></li>
                                                <li><a href="travel-insurance.html">Travel Insurance</a></li>
                                                <li><a href="holidays.html">Holidays</a></li>
                                                <li><a href="thank-you.html">Thank You</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>			
                        </li> -->
                    <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                </ul>
            </div><!-- end navbar collapse -->
        </div><!-- end container -->
    </nav><!-- end navbar -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div><!-- end close-btn -->

                <div class="list-group panel">

                    <a href="#home-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="home-links">
                        <a href="#" class="list-group-item active">Main Homepage</a>
                        <a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>
                        <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                        <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                        <a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                        <a href="car-homepage.html" class="list-group-item">Car Homepage</a>
                        <a href="landing-page.html" class="list-group-item">Landing Page</a>
                    </div><!-- end sub-menu -->

                    <a href="#flights-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-plane link-icon"></i></span>Flights<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="flights-links">
                        <a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>
                        <a href="flight-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                        <a href="flight-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="flight-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="flight-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="flight-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="flight-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div><!-- end sub-menu -->

                    <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="hotels-links">
                        <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                        <a href="hotel-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                        <a href="hotel-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="hotel-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="hotel-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="hotel-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="hotel-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div><!-- end sub-menu -->

                    <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="tours-links">
                        <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                        <a href="tour-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                        <a href="tour-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="tour-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="tour-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="tour-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="tour-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div><!-- end sub-menu -->

                    <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cruise-links">
                        <a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                        <a href="cruise-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                        <a href="cruise-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="cruise-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="cruise-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="cruise-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="cruise-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div><!-- end sub-menu -->

                    <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="cars-links">
                        <a href="car-homepage.html" class="list-group-item">Car Homepage</a>
                        <a href="car-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                        <a href="car-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                        <a href="car-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                        <a href="car-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                        <a href="car-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                        <a href="car-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                    </div><!-- end sub-menu -->

                    <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="pages-links">
                        <div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                        <a href="about-us.html" class="list-group-item">About Us</a>
                        <a href="contact-us.html" class="list-group-item">Contact Us</a>
                        <a href="blog-listing-left-sidebar.html" class="list-group-item">Blog Listing Left Sidebar</a>
                        <a href="blog-listing-right-sidebar.html" class="list-group-item">Blog Listing Right Sidebar</a>
                        <a href="blog-detail-left-sidebar.html" class="list-group-item">Blog Detail Left Sidebar</a>
                        <a href="blog-detail-right-sidebar.html" class="list-group-item">Blog Detail Right Sidebar</a>
                        <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                        <a href="dashboard.html" class="list-group-item">Dashboard</a>
                        <a href="user-profile.html" class="list-group-item">User Profile</a>
                        <a href="booking.html" class="list-group-item">Booking</a>
                        <a href="wishlist.html" class="list-group-item">Wishlist</a>
                        <a href="cards.html" class="list-group-item">Cards</a>
                        <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                        <a href="login.html" class="list-group-item">Login</a>
                        <a href="registration.html" class="list-group-item">Registration</a>
                        <a href="forgot-password.html" class="list-group-item">Forgot Password</a>
                        <a href="error-page.html" class="list-group-item">404 Page</a>
                        <a href="coming-soon.html" class="list-group-item">Coming Soon</a>
                        <div class="list-group-heading list-group-item">Extra <span>Pages</span></div>
                        <a href="before-you-fly.html" class="list-group-item">Before Fly</a>
                        <a href="travel-insurance.html" class="list-group-item">Travel Insurance</a>
                        <a href="holidays.html" class="list-group-item">Holidays</a>
                        <a href="thank-you.html" class="list-group-item">Thank You</a>
                    </div><!-- end sub-menu -->
                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div><!-- end sidenav-content -->


    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-1">

        <div class="flexslider slider" id="slider-1">
            <ul class="slides">

                <li class="item-1" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(source/images/dat.jpg) 50% 0%;
	background-size:cover;
	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>Chuyến Đi</h2>
                            <h1>Cùng Nhau</h1>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-1 -->

                <li class="item-2" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(source/images/datkim.jpg) 50% 0%;
	background-size:cover;
	height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>Chuyến Đi</h2>
                            <h1>Cùng Nhau</h1>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end slider -->

        <div class="search-tabs" id="search-tabs-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="nav nav-tabs center-tabs">
                            <li class="active"><a href="#flights" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="st-text">Xe</span></a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="flights" class="tab-pane in active">
                                <form action="{{route('guest.index.search.post')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group form-group-sm">
                                            <div class="col-xs-12 col-md-4"><label for="citie_id[]">Điểm Đi (*)</label>
                                                <select class="form-control" name="city_id[]" id="from_city" placeholder="Thành Phố" type="select" onchange="getDistricts('from_city', 'from_district')">
                                                    <option value="0">Chọn thành phố</option>
                                                    @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-md-4"><label for="district_id[]">Quận Huyên:</label>
                                                <select class="form-control" name="district_id[]" id="from_district" placeholder="Quận Huyên" required="" type="select" onchange="getWards('from_district', 'from_ward')">
                                                    <option value="0">Chọn quận/huyện</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-md-4"><label for="ward_id[]">Phường Xã:</label>
                                                <select class="form-control" name="from_ward" id="from_ward" placeholder="Phường Xã" required="" type="select">
                                                    <option value="0">Chọn xã/phường/thị trấn</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-group-sm">
                                            <div class="col-xs-12 col-md-4"><label for="citie_id[]">Điểm Đến (*)</label>
                                                <select class="form-control" name="city_id[]" id="to_city" placeholder="Thành Phố" type="select" onchange="getDistricts('to_city', 'to_district')">
                                                    <option value="0">Chọn thành phố</option>
                                                    @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-md-4"><label for="district_id[]">Quận Huyên:</label>
                                                <select class="form-control" name="district_id[]" id="to_district" placeholder="Quận Huyên" required="" type="select" onchange="getWards('to_district', 'to_ward')">
                                                    <option value="0">Chọn quận/huyện</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-md-4"><label for="ward_id[]">Phường Xã:</label>
                                                <select class="form-control" name="to_ward" id="to_ward" placeholder="Phường Xã" required="" type="select">
                                                    <option value="0">Chọn xã/phường/thị trấn</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <br>
                                        <div class="col-md-12">
                                            <button class="btn btn-orange">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- end row -->
                        </div><!-- end flights -->

                        <!--them code-->

                    </div><!-- end tab-content -->

                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
        </div><!-- end search-tabs -->

    </section><!-- end flexslider-container -->


    <script>
        function getDistricts(id_form, id_to) {
            var matp = document.getElementById(id_form).value;
            $.ajax({
                url: '/api/getdistricts/' + matp
            }).done(function(data) {
                $("#" + id_to).html('<option value="0">Chọn quận/huyện</option>');
                data.forEach(function(element) {
                    $("#" + id_to).append('<option value="' + element['id'] + '">' + element['name'] + '</option>');
                });
            });;
        }

        function getWards(id_form, id_to) {
            var maqh = document.getElementById(id_form).value;
            $.ajax({
                url: '/api/getwards/' + maqh
            }).done(function(data) {
                $("#" + id_to).html('<option value="0">Chọn xã/phường/thị trấn</option>');
                data.forEach(function(element) {
                    $("#" + id_to).append('<option value="' + element['id'] + '">' + element['name'] + '</option>');
                });
            });;
        }
    </script>


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Tiết kiệm chi phí</h3>
                        <p>Với thao tác đơn giản,bạn dễ dàng mua và bán chỗ trống và tiết kiệm được đến 70% chi phí đi lại hoặc kiếm thêm thu nhập.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>An toàn,thuận tiện</h3>
                        <p>Với những tiện ích hỗ trợ, bạn sẽ có những chuyến đi tiết kiệm và an toàn với người bạn đường đáng tin cậy cho dù mới gặp nhau lần đầu.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Bảo vệ môi trường</h3>
                        <p>Đi chung tiết kiệm chi phí,còn góp phần giảm tắc đường và bảo vệ môi trường.Tốt cho bạn và cho cả mọi người.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Tại sao nên sử dụng dịch vụ</h3>
                        <p>Đảm bảo giá tôt,cam kết chất lượng,vừa tiết kiệm vừa sống xanh,tiêu dùng thông minh và bền vững.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end best-features -->


    <!--=============== TOUR OFFERS ===============-->


    <!--=============== CRUISE OFFERS ===============-->
    <section id="cruise-offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>CHUYẾN ĐI</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="row">
                        @foreach($trips as $trip)
                        <div class="col-sm-6 col-md-6">
                            <div class="main-block cruise-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img cruise-img">
                                            <a href="{{route('guest.trip.view.get', ['id' => $trip->id])}}">
                                                <img src="{{asset('upload/Vehicle/'.$trip->vehicle->image)}}" class="img-responsive" alt="cruise-img" />
                                                <div class="cruise-mask">
                                                    <p></p>
                                                </div><!-- end cruise-mask -->
                                            </a>
                                        </div><!-- end cruise-img -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class=" main-info cruise-info">
                                            <div class="main-title cruise-title">
                                                <a href="{{route('guest.trip.view.get', ['id' => $trip->id])}}">{{$trip->title}}</a>
                                                <p>Từ {{$trip->from->city->name}} đến {{$trip->to->city->name}}</p>
                                                <div class="rating">
                                                    @for($i=0;$i<$trip->member->rate;$i++)
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        @endfor
                                                        @for($i=0;$i<5-$trip->member->rate;$i++)
                                                            <span><i class="fa fa-star grey"></i></span>
                                                            @endfor
                                                </div><!-- end rating -->
                                                <span class="cruise-price">{{$trip->price}}</span>
                                            </div><!-- end cruise-title -->
                                        </div><!-- end cruise-info -->
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end cruise-block -->
                        </div><!-- end columns -->
                        @endforeach
                    </div><!-- end row -->

                    <div class="view-all text-center">
                        <a href="#" class="btn btn-orange">View All</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cruise-offers -->
    <!--=============== TOUR OFFERS ===============-->
    <section id="flight-offers" class="section-padding">
        <div class="container">

            <div class="row">

                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>Tuyến Bus</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->


                    <div class="row">
                        @foreach($busroutes as $b)

                        <div class="col-sm-6 col-md-4">
                            <div class="main-block flight-block">

                                <a href="#">

                                    <div class="flight-img">
                                        <img src="/upload/Vehicle/{{
                                                $b->image}}" />
                                    </div><!-- end flight-img -->

                                    <div class="flight-info">
                                        <div class="flight-title">
                                            <h4>
                                                <span class="flight-destination">{{$b->name}} | {{$b->company->name}}</span> 
                                                
                                        </div><!-- end flight-title -->

                                        <div class=" flight-timing">
                                            <ul class="list-unstyled">
                                                <li><span><i class="fa fa-bus"></i></span><span class="date">
                                                    </span></li>
                                                <li><span><i class=""></i></span>
                                                @foreach($b->hours as $h)
                                                        <h3>{{$h->day->name}}</h3>
                                                <h3>{{$h->time}}</h3>khởi hành<span class="date"> </span>
                                                @endforeach
                                                    
                                                </li>
                                            </ul>
                                        </div><!-- end flight-timing -->

                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">
                                                <h5>Cách 30p có chuyến</h5><span class="pkg"></span>
                                            </li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end flight-info -->
                                </a>
                            </div><!-- end flight-block -->
                        </div><!-- end columns -->
                        @endforeach
                    </div><!-- end row -->

                    <div class="view-all text-center">
                        <a href="#" class="btn btn-orange">View All</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end flight-offers -->
    <!--======================================-->

    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">Thông Tin</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>3/2, Thành Phố Cần Thơ, CT</li>
                            <li><span><i class="fa fa-phone"></i></span>+0373765400</li>
                            <li><span><i class="fa fa-envelope"></i></span>datb1505712@student.ctu.edu.vn</li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                        <h3 class="footer-heading">Tham Gia</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Phương Trang</a></li>
                            <li><a href="#">Lộc Phát</a></li>
                            <li><a href="#">Mai Linh</a></li>
                            <li><a href="#">Đại Thăng</a></li>

                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">Hướng Dẫn</h3>
                        <ul class="list-unstyled">
                            <li><a href="test1">Cách Thức Hoạt Động</a></li>
                            <li><a href="test2">Hướng Dẫn Sử Dụng</a></li>
                            <li><a href="test">Hướng Dẫn An Toàn</a></li>
                            <li><a href="#">Đăng ký</a></li>

                        </ul>
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">Dichung</h3>
                        <p> Dichung được thiết kế với định hướng hỗ trợ tối đa việc chia sẻ/ mua bán chỗ trống. Bạn hãy khai thác các tính năng các tính năng dưới đây để có thể đi chung một cách dễ dàng.</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
    </section><!-- end best-features -->


    <!--=============== TOUR OFFERS ===============-->


    <!--=============== CRUISE OFFERS ===============-->



    <!-- Page Scripts Starts -->
    <script src="source/js/jquery.min.js"></script>
    <script src="source/js/jquery.magnific-popup.min.js"></script>
    <script src="source/js/bootstrap.min.js"></script>
    <script src="source/js/jquery.flexslider.js"></script>
    <script src="source/js/bootstrap-datepicker.js"></script>
    <script src="source/js/owl.carousel.min.js"></script>
    <script src="source/js/custom-navigation.js"></script>
    <script src="source/js/custom-flex.js"></script>
    <script src="source/js/custom-owl.js"></script>
    <script src="source/js/custom-date-picker.js"></script>
    <script src="source/js/custom-video.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>