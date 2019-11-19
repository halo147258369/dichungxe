<!doctype html>
<html lang="en">
    <head>
        <title>Car Detail Left Sidebar</title>
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
        
        <!-- Date-Picker Stylesheet -->
        <link rel="stylesheet" href="source/css/datepicker.css">
        
        <!-- Slick Stylesheet -->
        <link rel="stylesheet" href="source/css/slick.css">
        <link rel="stylesheet" href="source/css/slick-theme.css">

<!-- -->
<!-- <script type="text/javascript" src="assets/js/preparea00e.html?2007"></script>
    <script type="text/javascript" src="assets/js/jquery.lazy.min.html"></script>
    <script type="text/javascript" src="assets/facebox/facebox.html')}}">
    </script> -->
   <!--  <script type="text/javascript" src="assets/tipsy/tipsy.html"></script> -->
    <!-- <script type="text/javascript" src="assets/jalert/js/jquery.alerts.html"></script> -->
  <!--   <link rel="stylesheet" type="text/css" media="screen" href="assets/css/yui-reset-min3860.css?v=1" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style3860.css?v=1" />
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="assets/css/more.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="assets/css/master3860.css?v=1" /> -->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="assets/facebox/facebox.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui-timepicker-addon.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/andy.css" />
    <link rel="stylesheet" type="text/css" media="screen"
        href="../../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-uiffaf.css?v=1.4" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/tipsy/tipsy.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/shlx.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/jalert/css/jquery.alerts.css" /> -->

 


    </head>
    
    
    <body>
    
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
                            <li><a href="#"><span><i class="fa fa-plus"></i></span>Đăng Ký</a></li>
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
                        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">TRỢ GIÚP<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                               
                            <li><a href="test2">Hướng Dẫn Sử Dụng</a></li>
                                <li><a href="test">Hướng Dẫn An Toàn</a></li>
                            </ul>           
                        </li>
                       
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">XE<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="car-homepage.html">Car Homepage</a></li>
                                <li><a href="car-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="car-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="car-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="car-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="car-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="car-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                            </ul>           
                        </li>
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
            <div id="mySidenav" class="sidenav" >
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

                <div id="main-menu">
                    <div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->
                    
                    <div class="list-group panel">
                    
                        <a href="#home-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="home-links">
                            <a href="index.html" class="list-group-item">Main Homepage</a>
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
                        
                        <a href="#cars-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cars-links">
                            <a href="car-homepage.html" class="list-group-item">Car Homepage</a>
                            <a href="car-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="car-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="car-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="car-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="#" class="list-group-item active">Detail Left Sidebar</a>
                            <a href="car-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                        </div><!-- end sub-menu -->
                        
                        <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="pages-links">
                            <div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                            <a href="about-us.html"  class="list-group-item">About Us</a>
                            <a href="contact-us.html"  class="list-group-item">Contact Us</a>
                            <a href="blog-listing-left-sidebar.html"  class="list-group-item">Blog Listing Left Sidebar</a>
                            <a href="blog-listing-right-sidebar.html"  class="list-group-item">Blog Listing Right Sidebar</a>
                            <a href="blog-detail-left-sidebar.html"  class="list-group-item">Blog Detail Left Sidebar</a>
                            <a href="blog-detail-right-sidebar.html"  class="list-group-item">Blog Detail Right Sidebar</a>
                            <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                            <a href="dashboard.html"  class="list-group-item">Dashboard</a>
                            <a href="user-profile.html"  class="list-group-item">User Profile</a>
                            <a href="booking.html"  class="list-group-item">Booking</a>
                            <a href="wishlist.html"  class="list-group-item">Wishlist</a>
                            <a href="cards.html"  class="list-group-item">Cards</a>
                            <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                            <a href="login.html"  class="list-group-item">Login</a>
                            <a href="registration.html"  class="list-group-item">Registration</a>
                            <a href="forgot-password.html"  class="list-group-item">Forgot Password</a>
                            <a href="error-page.html"  class="list-group-item">404 Page</a>
                            <a href="coming-soon.html"  class="list-group-item">Coming Soon</a>
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
        
        
        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-car-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">Đi cùng nhau giảm chi phí</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Dinhoxe</a></li>
                            <li class="active">Và lại bảo vệ môi trường</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--==== INNERPAGE-WRAPPER =====-->
        <center>
        <div id="content_wrapper" class="new_style">
        <div id="content_container" class="clearfix" style="background:#e1e1e1">
            <style type="text/css">
            .dangchuyendi {
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;
                padding: 7px 20px;
                margin: auto;
                min-width: 140px;
                border: 1px solid #f7931d;
                color: #fff;
                background-image: -moz-linear-gradient(bottom, #f69031 0%, #f9a01b 100%);
                background-image: -o-linear-gradient(bottom, #f69031 0%, #f9a01b 100%);
                background-image: -webkit-linear-gradient(bottom, #f69031 0%, #f9a01b 100%);
                background-image: linear-gradient(bottom, #f69031 0%, #f9a01b 100%);
            }
            </style>
            <div id="content">
                <h1>Hệ thống vận hành như thế nào?</h1>
                <p>&nbsp;</p>
                <div class="splash"
                    style="margin: -40px 0px 0px; padding: 14px 10px; text-align: justify; overflow: hidden; color: rgb(64, 64, 64); font-family: Arial; font-size: 13px; background-image: url(assets/images/shadow.png); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 50% 320px; background-repeat: no-repeat;">
                    <div class="video"
                        style="margin: 0px auto 40px; padding: 0px; overflow: hidden; width: 450px; height: 320px; border: 3px solid rgb(255, 255, 255); border-radius: 3px; -webkit-box-shadow: rgba(0, 0, 0, 0.4) 0px 4px 12px; box-shadow: rgba(0, 0, 0, 0.4) 0px 4px 12px;">
                        <iframe width="450" height="310"
                            src="http://www.youtube.com/embed/aSrYLmXAHS0?list=PLhR7q3OgG_4aT2C-13r_OQBLblKoio5Se"
                            frameborder="0" allowfullscreen=""></iframe></div>
                    <p class="p_"
                        style="margin: 30px auto 0px; padding: 0px; font-size: 14px; width: 900px; line-height: 21px !important; position: relative !important; color: rgb(119, 119, 119) !important;">
                        <span style="font-size: 17px; text-align: center; background-color: rgb(225, 225, 225);">Dichung
                            xe đem đến cho mọi ngươi cơ hội cung cấp v&agrave; lựa chọn dịch vụ vận chuyển văn minh
                            v&agrave; tiết kiệm. Chỉ cần thực hiện những thao t&aacute;c đơn giản dưới đ&acirc;y để thực
                            hiện đi chung một cách dễ dàng và an toàn</span></p>
                    <p class="p_">&nbsp;</p>
                </div>
                <div class="roles"
                    style="background:white;margin: 2px 0px 0px; padding: 0px; overflow: hidden; color: rgb(64, 64, 64); font-family: Arial; font-size: 13px;">
                    <p class="p_"> </p>
                    <p class="p_"> </p>
                    <div class="role drivers" style="margin: 0px; padding: 0px; float: left; width: 470px;">
                        <div class="icon"
                            style="margin: 5px auto 5px 250px; padding: 0px; width: 50px; height: 50px; background: url(assets/images/driver_passenger_big.png) 0% 50% no-repeat;">
                             </div>
                        <h3
                            style="margin: 0px; padding: 0px 0px 0px 80px; font-size: 20px; height: 50px; line-height: 35px; text-align: center; width: 390px; background: url(assets/images/driverpassenger_flags.png) no-repeat;">
                            Chủ xe</h3>
                        <ul style="margin: 30px 0px 0px; padding: 0px;">
                            <li class="d3"
                                style="margin: 10px 0px 10px 100px; padding: 2px 0px; list-style: none inside; display: block; width: 325px;">
                                <div
                                    style="margin: -10px 0px 0px; padding: 0px; width: 75px; height: 80px; position: absolute; background: url(assets/images/blue_icons.png) -440px 50% no-repeat;">
                                     </div>
                                <h4 style="margin: 0px 0px 10px; padding: 0px 0px 0px 80px; font-size: 16px;">Đăng
                                    thông tin về chuyến đi còn chỗ trống</h4>
                                <p
                                    style="margin: 0px; padding: 0px 0px 0px 80px; font-size: 12px; line-height: 1.4em; color: rgb(98, 98, 98); text-align: justify;">
                                    Thật là dễ dàng để đăng các vị trí còn trống
                                    trên xe của bạn hướng dẫn rất chi tiết trên trang web Đichungxe. Hoàn
                                    toàn miễn phí để bản dễ dàng chia sẻ chuyến đi</p>
                            </li>
                            <li class="d1"
                                style="margin: 10px 0px 10px 100px; padding: 2px 0px; list-style: none inside; display: block; width: 325px;">
                                <div
                                    style="margin: -10px 0px 0px; padding: 0px; width: 75px; height: 80px; position: absolute; background: url(assets/images/blue_icons.png) -170px 50% no-repeat;">
                                     </div>
                                <h4 style="margin: 0px 0px 10px; padding: 0px 0px 0px 80px; font-size: 16px;">Chọn bạn
                                    đường phù hợp từ những yêu cầu đặt chỗ</h4>
                                <p
                                    style="margin: 0px; padding: 0px 0px 0px 80px; font-size: 12px; line-height: 1.4em; color: rgb(98, 98, 98); text-align: justify;">
                                    <span style="line-height: 16.7999992370605px;">Các yêu cầu đi chung xe
                                        sẽ được gửi đến hòm thư và điện thoại của bạn. Bạn hãy kiểm
                                        tra hồ sơ cá nhân của những người đăng ký, xem các
                                        thông tin cá nhân của họ, lịch sử đi lại, xếp hạng uy
                                        tín… và chọn người mà bạn thấy phù hợp nhất
                                        làm bạn đường.</span></p>
                            </li>
                            <li class="d2"
                                style="margin: 10px 0px 10px 100px; padding: 2px 0px; list-style: none inside; display: block; width: 325px;">
                                <div
                                    style="margin: -10px 0px 0px; padding: 0px; width: 75px; height: 80px; position: absolute; background: url(assets/images/blue_icons.png) no-repeat;">
                                     </div>
                                <h4 style="margin: 0px 0px 10px; padding: 0px 0px 0px 80px; font-size: 16px;">Nhận tiền
                                    sau khi hoàn tất chuyến đi</h4>
                                <p
                                    style="margin: 0px; padding: 0px 0px 0px 80px; font-size: 12px; line-height: 1.4em; color: rgb(98, 98, 98); text-align: justify;">
                                    Bạn sẽ nhận được khoản thanh toán sau khi chuyến đi đã hoàn tất.Thanh toán trực tiếp với
                                    hành khách để an toàn cho cả 2 bên .sau khi đã thỏa thuận giá cá phù hợp trước chuyến đi sẽ giúp bạn an toàn trong giao dịch.bạn biết đấy chuyến đi vui lên và được nhiều bạn mới. </p>
                                    <br>
                                    <br>
                                    <br>

                            </li>
                        </ul>
                        <p style="text-align:center;margin: 0px 0px 0px 100px;"><a href="function.html">Tìm hiểu
                                thêm</a><br /><a href="function.html"><button class="dangchuyendi"
                                    style="margin-top:10px">Hướng dẫn sử dụng</button></a></p>
                    </div>
                    <div class="role passengers"
                        style="margin: 0px; padding: 0px 60px 0px 0px; float: left; width: 390px;">
                        <div class="icon"
                            style="margin: 5px auto; padding: 0px; width: 50px; height: 50px; background: url(assets/images/driver_passenger_big.png) 100% 50% no-repeat;">
                             </div>
                        <h3
                            style="margin: 0px; padding: 0px 80px 0px 0px; font-size: 20px; height: 50px; line-height: 35px; text-align: center; width: 390px; background: url(assets/images/driverpassenger_flags.png) 100% 100% no-repeat;">
                            Hành khách</h3>
                        <ul style="margin: 30px 0px 0px; padding: 0px;">
                            <li class="p1"
                                style="margin: 10px 0px 10px 20px; padding: 2px 0px; list-style: none inside; display: block; width: 325px;">
                                <div
                                    style="margin: -10px 0px 0px; padding: 0px; width: 75px; height: 80px; position: absolute; background: url(assets/images/blue_icons.png) -254px 50% no-repeat;">
                                     </div>
                                <h4 style="margin: 0px 0px 10px; padding: 0px 0px 0px 80px; font-size: 16px;">Tìm
                                    kiếm một chuyến đi chung khi cần đi lại</h4>
                                <p
                                    style="margin: 0px; padding: 0px 0px 0px 80px; font-size: 12px; line-height: 1.4em; color: rgb(98, 98, 98); text-align: justify;">
                                    Chỉ cần chọn đi, điểm đến và chọn ngày đi mong muốn. Chúng
                                    tôi sẽ lọc và gợi ý cho bạn những chuyến đi phù hợp với những gì bạn tìm kiếm</p>
                            </li>
                            <li class="p2"
                                style="margin: 10px 0px 10px 20px; padding: 2px 0px; list-style: none inside; display: block; width: 325px;">
                                <div
                                    style="margin: -10px 0px 0px; padding: 0px; width: 75px; height: 80px; position: absolute; background: url(assets/images/blue_icons.png) -84px 50% no-repeat;">
                                     </div>
                                <h4 style="margin: 0px 0px 10px; padding: 0px 0px 0px 80px; font-size: 16px;">Đặt chỗ
                                    trên chuyến đi mà bạn đã chọn</h4>
                                <p
                                    style="margin: 0px; padding: 0px 0px 0px 80px; font-size: 12px; line-height: 1.4em; color: rgb(98, 98, 98); text-align: justify;">
                                    <span style="line-height: 16.7999992370605px;">Sau khi đã tìm hiểu
                                        thông tin về chủ xe, hãy chọn chuyến đi mà bạn muốn, bấm
                                        vào "Đặt chỗ" và làm theo các bước đơn
                                        giản để xác nhận yêu cầu của bạn.Sau đó 
                                        bạn nên liên lạc của chủ xe khi họ đồng ý  để bạn
                                        liên hệ trước khi đi chung or họ có thể liên hệ vs bạn.</span></p>
                            </li>
                            <li class="p3"
                                style="margin: 10px 0px 10px 20px; padding: 2px 0px; list-style: none inside; display: block; width: 325px;">
                                <div
                                    style="margin: -10px 0px 0px; padding: 0px; width: 75px; height: 80px; position: absolute; background: url(assets/images/blue_icons.png) -340px 50% no-repeat;">
                                     </div>
                                <h4 style="margin: 0px 0px 10px; padding: 0px 0px 0px 80px; font-size: 16px;">Tận hưởng
                                    chuyến đi an toàn và tiết kiệm</h4>
                                <p
                                    style="margin: 0px; padding: 0px 0px 0px 80px; font-size: 12px; line-height: 1.4em; color: rgb(98, 98, 98); text-align: justify;">
                                    Hãy yên tâm với số tiền mà bạn bỏ ra để mua chỗ trống
                                    vì đã có chúng tôi đảm bảo việc thanh toán.
                                    Bạn có hai lựa chọn: (1) thanh toán trực tiếp với chủ xe, (2) Thanh
                                    toán đảm bảo qua Đi chung. Trong trường hợp này, chúng
                                    tôi sẽ tạm thời phong tỏa số tiền bạn đã thanh toán
                                     và chỉ thanh toán cho chủ xe sau khi bạn đã hoàn
                                    tất chuyến đi và khẳng định giao dịch hoàn tất với chúng
                                    tôi. Dịch vụ này hoàn toàn miễn phí cho
                                    hành khách.</p>
                            </li>
                        </ul>
                        <p style="text-align:center;margin: 0px 0px 0px 40px;"><a href="3step.html">Tìm hiểu
                                thêm</a><br /><a href="3step.html"><button class="dangchuyendi"
                                    style="margin-top:10px">Hướng dẫn an toàn</button></a></p>
                    </div>
                </div>
                <br>
                <br>
                <div class="quotes"
                    style="margin: 5px auto 60px; padding: 3px 32px 16px; border: 1px solid rgb(212, 212, 212); border-radius: 17px; -webkit-box-shadow: rgb(221, 221, 221) 0px 3px 7px; box-shadow: rgb(221, 221, 221) 0px 3px 7px; width: 750px; color: rgb(98, 98, 98); overflow: hidden; text-align: center; height: 200px; font-family: Arial; font-size: 13px; background-image: url(assets/images/car_road_quote.png); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 50% 100%; background-repeat: no-repeat;">
                    <ul class="quote_list" style="margin: 0px; padding: 0px;">
                        <li class="shown"
                            style="margin: 0px; padding: 0px 190px 0px; list-style: none inside; display: table-cell; vertical-align: middle; height: 97px;">
                              Nhờ đi chung, tôi đã tiết kiệm được rất nhiều tiền.  <span
                                class="bigquote right"
                                style="font-family: georgia, serif; margin-left: -15px; font-size: 30px; line-height: 6px; position: relative; top: 8px; left: 14px;">”</span>
                            <p style="margin: 0px; padding: 0px; font-style: italic; line-height: 30px;">— Tiến
                                Đạt</p> <a href="#" style="color: rgb(13, 119, 182); text-decoration: none;">Và biết
                                được nhiều bạn mới!</a> 
                        </li>
                    </ul>
                </div>
                <h2 style="margin: 30px 0px 0px; padding: 0px; font-size: 19px; text-align: left;">Vai trò của
                    chúng tôi</h2>
                <h2
                    style="margin: 30px 0px 0px; padding: 0px; font-size: 19px; text-align: left; background-color: rgb(225, 225, 225);">
                    <div class="splash"
                        style="background:none; padding: 14px 10px; text-align: justify; overflow: hidden; font-size: 13px; font-weight: normal; ">
                        <p><img src="assets/images/li_partner_b.html" alt=""
                                style="border: 0px; color: rgb(64, 64, 64); font-family: Arial; font-size: 14px; text-align: center; background-color: initial;" /> Chúng
                            tôi tạo ra một thị trường trực tuyến để kết nối những cá nhân/ đơn vị
                            còn thừa chỗ trống với những hành khách có nhu cầu đi lại đồng
                            thời cung cấp với dịch vụ giá trị gia tăng như xác thực uy tín, đảm bảo
                            thanh toán để giúp người dùng vượt qua những khó khăn về
                            tâm lý cũng như những phiền toán không đáng có khi
                            mua bán/ chia sẻ chỗ trống. Đây là mô hình người
                            dùng tự tương tác ( peer to peer) </p>
                        <p><img src="assets/images/li_partner_b.html" alt=""
                                style="border: 0px; color: rgb(64, 64, 64); font-family: Arial; font-size: 14px; text-align: center;" /> Ngoài
                            ra, chúng tôi cũng phối hợp với các hãng vận tải ( hãng
                            taxi, xe khách, công ty du lịch..)  để cung cấp các dịch vụ đi
                            chung theo yêu cầu như đi chung taxi/ minibus đi sân bay, đi về quê, đi du
                            lịch, đi học, <span style="background-color: initial;">đi làm..</span><span
                                style="background-color: initial;">. Đây là các dịch vụ chuyên
                                nghiệp được bảo đảm  bởi hãng vận chuyển và rất dễ dàng để
                                đăng ký sử dụng. Nếu ban không tự tìm được người đi chung với
                                mình thì có thể sử dụng các dịch vụ tiện ích
                                này.</span></p>
                        <p><img src="assets/images/li_partner_b.html" alt=""
                                style="border: 0px; color: rgb(64, 64, 64); font-family: Arial; font-size: 14px; text-align: center; background-color: initial;" /> Trong
                            tất cả dịch vụ, chúng tôi cung cấp công nghệ giúp mọi người kết
                            nối và giao dịch thuận lợi chứ không cung cấp dịch vụ vận tải. Các vấn
                            đề liên quan đến chất lượng dịch vụ do các cá nhân, đơn vị cung
                            cấp dịch vụ chịu trách nhiệm. Chúng tôi cam kết sẽ cải thiện không
                            ngừng các tiện ích công nghệ để đem đến cho mọi người một lựa chọn mới
                            để di chuyển một cách văn minh, tiết kiệm ngoài các lựa chọn truyền
                            thống như đi xe cá nhân hoặc  phương tiện công cộng.</p>
                    </div>
                </h2>
                <div class="call_to_action"
                    style="margin: 10px 0px 0px; padding: 0px; text-align: center; font-weight: bold; font-size: 20px; color: rgb(64, 64, 64); font-family: Arial;">
                    Bạn đã sẵn sàng chưa? <a href="dk"
                        class="button confirm signup_link"
                        style="text-decoration: none; display: inline-block; position: relative; height: 30px; line-height: 30px; font-size: 16px; font-weight: 500; padding: 0px 25px; border: 1px solid rgba(0, 0, 0, 0.4); border-radius: 4px; text-shadow: rgba(0, 0, 0, 0.498039) 0px -1px 0px; -webkit-box-shadow: rgba(255, 255, 255, 0.498039) 0px 1px 0px inset, rgba(0, 0, 0, 0.6) 0px 1px 0px; box-shadow: rgba(255, 255, 255, 0.498039) 0px 1px 0px inset, rgba(0, 0, 0, 0.6) 0px 1px 0px; color: rgb(255, 255, 255) !important; background-image: linear-gradient(rgb(138, 188, 107), rgb(87, 149, 68)); background-color: rgb(91, 165, 60);">Đăng
                        ký ngay!</a></div>
                <p> </p>
            </div>

            <div id="cancellation_policy" style="display: none;">

                <div id="cancellation-refund-policy">
                    <!--<h2>Full refunds will be issued to passengers for any booking cancelled at least <em>one day prior to the date of the trip</em>. You can cancel your ride by going to the <a href="https://www.zimride.com/booking/history" class="requires_reauth">Manage Transactions</a> page.
          </h2>-->
                    <ul style="text-align:justify">
                        <li>Việc hủy một chỗ hoặc chuyến đi đã đặt phải được thực hiện ít nhất 24 giờ trước giờ khởi
                            hành. </li>
                        <li>Nếu bạn hủy bỏ chỗ hoặc chuyến đi ít hơn 24 giờ trước giờ khởi hành, yêu cầu hủy bỏ của bạn
                            sẽ bị coi là không hợp lệ trừ phi bạn thuyết phục được người bạn đường đồng ý hủy. Bạn sẽ
                            phải bồi thường cho người bạn đường trong trường hợp thuyết phục thất bại. Ngoài ra, chúng
                            tôi cũng qui định trong vòng 30 phút tại địa điểm và thời gian đã được thống nhất để khởi
                            hành, nếu chủ xe hoặc hành khách không có mặt cũng bị tính là hủy giao dịch đơn phương. Nếu
                            không đàm phán được hủy giao dịch hoặc sắp xếp lại thời gian thì bạn sẽ phải bồi thường cho
                            người bạn đường.</li>
                        <li>Trách nhiệm bồi thường của bạn tương đương với số tiền mua/bán chỗ trống đã đặt. Nếu bạn
                            không thực hiện trách nhiệm bồi thường bằng tài chính, bạn sẽ chịu trách nhiệm bằng uy tín
                            đối với cộng đồng (phản hồi tiêu cực từ người bạn đường hoặc chúng tôi ). Việc này sẽ ảnh
                            hưởng nghiêm trọng đến cơ hôi đi chung trong những chuyến đi tương lai của bạn vì những phản
                            hồi tiêu cực sẽ được lưu trên hệ thống.</li>
                        <li>Việc báo hủy trước 24 giờ và thời gian trễ cho phép là 30 phút là áp dụng mặc định cho tất
                            cả các chuyến đi thông thường. Có thể sẽ những trường hợp ngoại lệ khi đơn vi cung cấp dịch
                            vận tải chuyên nghiệp qui định khác. Bạn sẽ được thông báo khi đăng ký những chuyến đi như
                            vậy.</li>
                        <li>Bạn có thể hủy đặt chỗ/chuyến đi đơn giản bằng cách vào trang Quản lý giao dịch và thực hiện
                            hủy. Việc hủy bỏ chỉ được coi là hoàn tất khi bạn nhận được một email xác nhận hủy bỏ của
                            chúng tôi. Nếu không nhận được email hủy bỏ, hãy gọi cho chúng tôi bằng số hỗ trợ Hotline:
                            043 200.2566 hoặc email về <a href="mailto:support@dichung.vn">support@dichung.vn</a>.</li>
                </div>

            </div>
        </div>
    </div>
    </center>
    <div itemscope itemtype="http://schema.org/SoftwareApplication"
        itemref="_image3 _image4 _image5 _url7 _applicationCategory9 _applicationCategory10 _applicationCategory11 _applicationCategory12 _applicationCategory13 _applicationCategory14 _applicationCategory15 _aggregateRating16"
        id="footer">
        <div class="content">
            
            <script>
            var logged = 0;
            </script>
            <script type="text/javascript">
            $(document).ready(function() {
                $('#post_ride').click(function() {
                    mixpanel.track(
                        "Clicked Ad", {
                            "Banner Color": "Blue"
                        }
                    );
                })
            });
            </script>
</body>
        
        
        <!--======================= FOOTER =======================-->
        
        
        
        <!-- Page Scripts Starts -->
        <script src="source/js/jquery.min.js"></script>
        <script src="source/js/bootstrap.min.js"></script>
        <script src="source/js/bootstrap-datepicker.js"></script>
        <script src="source/js/slick.min.js"></script>
        <script src="source/js/custom-navigation.js"></script>
        <script src="source/js/custom-date-picker.js"></script>
        <script src="source/js/custom-slick.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
