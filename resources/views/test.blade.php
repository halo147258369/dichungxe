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
                        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Huong Dan<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                               <li class="active"><a href="test1">Cách Thức Hoạt Động</a></li>
                            <li><a href="test2">Hướng Dẫn Sử Dụng</a></li>
                              
                                <!-- <li><a href="flight-homepage.html">Flight Homepage</a></li>
                                <li><a href="hotel-homepage.html">Hotel Homepage</a></li>
                                <li><a href="tour-homepage.html">Tour Homepage</a></li>
                                <li><a href="cruise-homepage.html">Cruise Homepage</a></li>
                                <li><a href="car-homepage.html">Car Homepage</a></li>
                                <li><a href="landing-page.html">Landing Page</a></li> -->
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
                            <li><a href="#">Dichungxe</a></li>
                            <li class="active">Và lại bảo vệ môi trường</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        <br>
<br>
<br>
        <!--==== INNERPAGE-WRAPPER =====-->
        <div id="content_wrapper" class="new_style">
    <div id="content_container" class="clearfix" style="background:#e1e1e1">
            <div id="content">
<!-- <h1 style="color:#29598E; background:url(../assets/images/safety-banner.png) 50% 30% no-repeat !important">An toàn và tin cậy</h1>
 -->

<!--
<div class="splash">
    <p> Trước khi đồng ý cho ai đi chung, bạn cần phải cảm thấy thoải mái và tin tưởng vào uy tín của người bạn đường.
    Hãy thực hiện 3 thủ tục đơn giản sau để có thể thực sự an tâm.
    </p>
</div>
<div class="checklist">
<ul style="padding-bottom:0px; margin-bottom:0px; background:none">
    <li class="before">
        <div style="background:url(/assets/images/3step_safety_checklist_icons.png) 1% 50% no-repeat !important">&nbsp;</div>
        <h3>Tìm hiểu trước khi đồng<br />
ý đặt chỗ</h3>
        <h4>Thông tin do người bạn đường cung cấp:</h4>
        <p>
          Mỗi người dùng có một Hồ sơ cá nhân bao gồm các thông tin có sẵn: ảnh nhận dạng, độ tuổi, giới tính, nơi học tập và làm việc…Bạn có thể nhắn tin qua website để yêu cầu cung cấp thêm các thông tin mà bạn cần trong khi không phải tiết lộ thông tin liên lạc như điện thoại, email để tránh bị làm phiền.
        </p>
        <h4>Các thông tin từ mạng xã hội mà người đó tham gia</h4>
        <p>
          Khi người dùng đăng tin bằng các tài khoản mạng xã hội, bạn có thể truy cập vào tài khoản của họ để tìm hiểu. Các thông tin từ mạng xã hội của một người là rất quan trọng nếu như họ chưa thực hiện một chuyến đi chung nào ( không có phản hồi từ cộng đồng).
    </p>
        <h4>Phản hồi của cộng đồng</h4>
        <p>
          Đối với những người đã đã có giao dịch đi chung, phản hồi của những người cùng đi, bao gồm cả tích cực và tiêu cực sẽ được lưu trên hệ thống và được hệ thống hóa bằng điểm uy tín. Bạn hãy chọn người có điểm uy tín cao để đi chung.
        </p>
    </li>
    <li class="during">
        <div style="background:url(/assets/images/3step_safety_checklist_icons.png) 43% 50% no-repeat !important">&nbsp;</div>
        <h3>Tiếp tục tìm hiểu trước khi<br /> đồng ý đi chung</h3>
        <h4>Gọi điện thoại</h4>
        <p>Sau khi bạn đồng ý cho đi chung, bạn sẽ được cung cấp thông tin liên lạc bao gồm email và điện thoại di động của người bạn đường để chuẩn bị cho chuyến đi. Lúc này bạn có thể gọi điện trực tiếp để tiếp tục tìm hiểu. Thông thường, việc giao tiếp qua điện thoại sẽ giúp bạn đánh giá thêm được rất nhiều về đặc điểm cá nhân của người bạn đường. 
        </p>
        <h4>Gặp trực tiếp</h4>
        <p>Việc chuẩn bị cho chuyến đi thông thường là điện thoại. Tuy nhiên một người cẩn thận có thể hẹn gặp trực tiếp bạn đường để đảm bảo là thực sự cảm thấy thoải mái khi cho người đó đi chung. </p>
        <h4>Hủy nếu muốn</h4>
        <p>Sau một quá trình tìm hiểu, nếu bạn thấy vẫn có gì đó không thoải mái và an tâm về người bạn đường. Bạn hoàn toàn có lựa chọn hủy chỗ hoặc chuyến đi với họ mà không phải chịu sự ràng buộc nào (miễn là ngoài 24h trước giờ khởi hành theo qui định <a href="/home/cancel">Hủy đặt chỗ</a>) </p>
    </li>
    <li class="after">
        <div style="background:url(/assets/images/3step_safety_checklist_icons.png) 93% 50% no-repeat !important">&nbsp;</div>
        <h3>Xác thực trước khi cho<br /> lên xe</h3>
        <h4>Xác thực bằng điện thoại</h4>
        <p>
        Thông qua việc giao tiếp với nhau vài lần để chuẩn bị trước khi đi và liên lạc để hẹn ngày giờ, điểm đón,  bước xác thực bằng điện thoại hầu như đã đảm bảo rằng người sẽ lên xe đi cùng bạn là người bạn đã chọn chứ không phải là một kẻ xấu nào đó. 
        </p>
        <h4>Xác thực bằng mã số</h4>
        <p>
         Tuy nhiên, nếu bạn cảm thấy nghi ngờ người sắp đi cùng bạn không phải là người bạn chọn (ví dụ bị mất điện thoại), thì bạn có thể yêu cầu cung cấp mã số chuyến đi. Việc xác thực thêm lần nữa bằng phương pháp này sẽ loại bỏ hoàn toàn rủi ro kể trên vì mã số chuyến đi được cung cấp qua email.
        </p>
        <h4>Từ chối cho lên xe</h4>
        <p>
         Cho đến thời điểm này, việc hủy chỗ theo <a href="/home/cancel">qui định</a> là không được phép. Tuy nhiên nếu cảm thấy không an toàn và thoải mái, bạn có quyền từ chối vì đó là quyền của bạn. Bạn sẽ chỉ bị phản hồi tiêu cực nếu lý do từ chối là hoàn toàn chủ quan. <a href="#help1">Những lý do khách quan được chấp nhận.</a> <br />
<div id="help1" style="display:none;" title="Những lý do khách quan">- Phương tiện không an toàn hoặc không có bảo hiểm theo qui định của nhà nước.<br /><br />

- Bạn đường không có giấy phép lái xe hoặc có giấy phép lái xe nhưng có biểu hiện hành vi không đảm bảo an toàn như: sử dụng chất kích thích, không có kinh nghiệm lái xe…<br /><br />

- Bạn đường không tuân thủ các thỏa thuận đã thống nhất từ trước như: đồ đạc, vật nuôi...<br /></div>
        </p>
    </li>
</ul>

    </div>
<div class="contact">
    Chúng tôi liên tục làm việc với sự giúp đỡ của bạn để xây dựng một mạng cộng đồng đi chung an toàn và đáng tin cậy. <br>Nếu bạn có bất kỳ câu hỏi, góp ý về vấn đề an toàn khi đi chung. Hãy email về <a href="mailto:support@dichung.vn">support@dichung.vn</a> hoặc gọi điện tới số Hotline: 043 200.2566
    </div>
  -->
    <p> </p><div> </div><div><div class="splash" style="margin: 0px; padding: 0px; color: rgb(64, 64, 64); font-family: Arial; font-size: 13px;"><p style="margin: 0px auto; padding: 0px; color: rgb(119, 119, 119); font-size: 17px; line-height: 21px; text-align: center; width: 480px; position: relative; top: -42px;">Một chuyến đi an toàn và dễ chịu cùng người bạn đường là</p><p style="margin: 0px auto; padding: 0px; color: rgb(119, 119, 119); font-size: 17px; line-height: 21px; text-align: center; width: 480px; position: relative; top: -42px;">mục đích cuối cùng của những chuyến đi chung. </p><p style="margin: 0px auto; padding: 0px; color: rgb(119, 119, 119); font-size: 17px; line-height: 21px; text-align: center; width: 480px; position: relative; top: -42px;"><span style="font-size: 17px;">Dưới đây là một số hướng dẫn và kinh nghiệm để có một chuyến đi chung an toàn và thoải mái.</span>.</p></div><div class="checklist" style="background:white;margin: 0px; padding: 0px; color: rgb(64, 64, 64); font-family: Arial; font-size: 13px;"><ul style="margin: 0px; padding: 0px; overflow: hidden; background: none;">    <li class="before" style="margin: 20px 0px 30px 84px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 210px;">    <div style="margin: 0px auto; padding: 0px; width: 50px; height: 53px; position: relative; left: -20px; background-image: url(assets/images/3step_safety_checklist_icons.png) !important; background-attachment: initial !important; background-color: initial !important; background-size: initial !important; background-origin: initial !important; background-clip: initial !important; background-position: 1% 50%; background-repeat: no-repeat !important;"> </div>    <h3 style="margin: 0px 0px 20px; padding: 0px; font-size: 20px; font-weight: normal; line-height: 24px; width: 300px;">Tìm hiểu trước khi đồng<br />    ý đặt chỗ</h3>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Thông tin cá nhân </h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Mỗi người dùng có Hồ sơ cá nhân bao gồm: ảnh nhận dạng, độ tuổi, giới tính, nơi học tập/ làm việc, giới thiệu bản thân…Bạn có thể nhắn tin qua website hoặc chat để có thêm thông tin mà bạn cần trong khi không phải tiết lộ điện thoại, email để tránh bị làm phiền.</p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Thông tin quan trọng khác</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Bạn có thể lấy thông tin mạng xã hội, tình trạng xác thực giấy tờ tùy thân của bạn đường hoặc tham khảo hệ thống chấm điểm tự động của chúng tôi. Những thông tin này rất quan trọng nếu như họ chưa thực hiện một chuyến đi chung nào.</p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Phản hồi của cộng đồng</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Đối với những người đã đã có giao dịch đi chung, phản hồi của những người cùng đi, bao gồm cả tích cực và tiêu cực sẽ được lưu trên hệ thống. Đây là hệ thống rất khách quan để bạn có thể lựa chọn một người bạn đường đáng tin cậy.</p>    </li>    <li class="during" style="margin: 20px 0px 30px 84px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 210px;">    <div style="margin: 0px auto; padding: 0px; width: 50px; height: 53px; position: relative; left: -20px; background-image: url(assets/images/3step_safety_checklist_icons.png) !important; background-attachment: initial !important; background-color: initial !important; background-size: initial !important; background-origin: initial !important; background-clip: initial !important; background-position: 43% 50%; background-repeat: no-repeat !important;"> </div>    <h3 style="margin: 0px 0px 20px; padding: 0px; font-size: 20px; font-weight: normal; line-height: 24px; width: 300px;">Tiếp tục tìm hiểu trước khi<br />    đồng ý đi chung</h3>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Gọi điện thoại</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Sau khi bạn đồng ý cho đi chung, bạn sẽ được cung cấp email và điện thoại di động của người bạn đường để chuẩn bị cho chuyến đi. Lúc này bạn có thể gọi điện trực tiếp để tiếp tục tìm hiểu. Giao tiếp qua điện thoại sẽ giúp bạn đánh giá thêm được rất nhiều về bạn đường</p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Gặp trực tiếp nếu cần thiết</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Việc chuẩn bị cho chuyến đi thông thường là điện thoại. Tuy nhiên, nếu bạn có thời gian thì có thể hẹn gặp trực tiếp bạn đường để đảm bảo là thực sự cảm thấy thoải mái khi cho người đó đi chung đồng thời trao đỏi và lên kế hoạch cho chuyến đi</p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Hủy nếu muốn</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Sau một quá trình tìm hiểu, nếu bạn thấy vẫn có gì đó không thoải mái hoặc  người bạn đường. Bạn hoàn toàn có lựa chọn hủy chỗ hoặc chuyến đi với họ mà không phải chịu sự ràng buộc nào (miễn là tuân thủ qui định <a href="cancel.html" style="color: rgb(13, 119, 182); text-decoration: none;">Hủy đặt chỗ</a>)</p>    </li>    <li class="after" style="margin: 20px 0px 30px 84px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 210px;">    <div style="margin: 0px auto; padding: 0px; width: 50px; height: 53px; position: relative; left: -20px; background-image: url(assets/images/3step_safety_checklist_icons.png) !important; background-attachment: initial !important; background-color: initial !important; background-size: initial !important; background-origin: initial !important; background-clip: initial !important; background-position: 93% 50%; background-repeat: no-repeat !important;"> </div>    <h3 style="margin: 0px 0px 20px; padding: 0px; font-size: 20px; font-weight: normal; line-height: 24px; width: 300px;">Xác thực trước khi cho<br />    lên xe</h3>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Xác thực bằng điện thoại</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Thông qua việc giao tiếp với nhau một (vài) lần để chuẩn bị trước khi đi và liên lạc để hẹn ngày giờ, điểm đón, bước xác thực bằng số điện thoại được cung cấp hầu như đã đảm bảo rằng người sẽ lên xe đi cùng bạn là người bạn đã chọn chứ không phải là một kẻ xấu nào đó.</p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Xác thực bằng mã số</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Nếu bạn nghi ngờ người sắp đi cùng bạn không phải là người bạn chọn (ví dụ bị mất điện thoại), bạn có thể yêu cầu cung cấp mã số chuyến đi. Việc xác thực thêm lần nữa sẽ loại bỏ rủi ro kể trên vì mã số được cung cấp qua email.</p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Từ chối cho lên xe</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Cho đến thời điểm này, việc hủy chỗ theo <a href="cancel.html" style="color: rgb(13, 119, 182); text-decoration: none;">qui định</a> là không hợp lệ nhưng bạn vẫn có quyền hủy nếu có lý do chính đáng liên quan đến sự an toàn tính mạng hoặc tài sản. Bạn không phải chịu chi phí Hủy giao dịch trong trường hợp này</p>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;"> </p>    </li></ul></div><div class="quotes" style="margin: 5px auto 0px; padding: 28px 32px 16px; border: 1px solid rgb(212, 212, 212); border-radius: 17px; -webkit-box-shadow: rgb(221, 221, 221) 0px 3px 7px; box-shadow: rgb(221, 221, 221) 0px 3px 7px; width: 750px; color: rgb(98, 98, 98); overflow: hidden; font-family: Arial; font-size: 13px;"><span class="user" style="float: left; width: 73px;"><div class="pic" style="margin: 0px 0px 4px; padding: 0px; border: 2px solid rgb(17, 153, 234); border-radius: 2px; width: 69px; height: 69px;"><a href="#" style="color: rgb(13, 119, 182); text-decoration: none;"><img src="uploads/avatar/avatar.png" width="69" height="69" style="border: 0px;" alt="" /></a></div><em style="font-weight: inherit; display: block; width: 73px; text-align: center; font-size: 12px;">Heo ú</em></span><p style="margin: 0px 0px 0px 25px; padding: 0px; color: rgb(85, 85, 85); font-size: 16px; line-height: 28px; text-align: justify; float: left; vertical-align: top; width: 645px;"><span style="display: inline-block; width: 25px;"><span style="position: absolute;"><span style="font-family: georgia, serif; font-size: 60px; line-height: 0px; position: relative; top: 9px;">“</span></span></span> Trước đây, tôi không sẵn sàng chia sẻ các ghế trống trên xe của tôi cho những người mà tôi không biết. Kể từ khi có Dichungxe, mọi việc thật là dễ dàng khi tìm hiểu về một người bạn đường trước khi cho đi chung. Nhờ có Web, tôi đã thực hiện nhiều chuyến đi suôn sẻ, tiết kiệm được nhiều chi phí xăng xe và có thêm những người bạn thú vị. Tôi vẫn giữ liên lạc thường xuyên với họ cho đến tận bây giờ. <span style="display: inline-block; width: 25px;"><span style="position: absolute;"><span style="font-family: georgia, serif; font-size: 60px; line-height: 0px; position: relative; top: 9px;">”</span></span></span> </p><h4 align="right" style="margin: 0px 0px 10px; padding: 0px; font-size: 16px; font-weight: 500;"><a href="#" style="color: rgb(13, 119, 182); text-decoration: none;">Xem thêm những trải nghiệm khác!</a></h4><p style="margin: 0px 0px 0px 25px; padding: 0px; color: rgb(85, 85, 85); font-size: 16px; line-height: 28px; text-align: justify; float: left; vertical-align: top; width: 645px;"> </p></div><div class="tips" style="background:white;margin: 0px 0px 50px; padding: 0px; overflow: hidden; color: rgb(64, 64, 64); font-family: Arial; font-size: 13px;"><h2 style="margin: 10px 0px 0px; padding: 0px 0px 20px; font-size: 28px; font-weight: normal; text-align: center; color: rgb(64, 64, 64); font-family: Arial;">Một số kinh nghiệm khi Đi chung:</h2><div class="drivers" style="margin: 0px 0px 0px 160px; padding: 0px; float: left; width: 280px;"><h3 style="margin: 0px 0px 15px; padding: 0px; font-size: 20px; font-weight: normal; line-height: 24px; width: 300px; position: relative; left: -30px;"><span style="display: inline-block; width: 24px; height: 24px; background: url(assets/images/driver_passenger_small.png) 0px 0px no-repeat;"> </span> Kinh nghiệm cho chủ xe</h3><ul style="margin: 0px; padding: 0px;background:white">    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /> Hãy tỏ ra chuyên nghiệp và đúng giờ cho dù với bất kỳ mục đích nào: có thêm thu nhập, tiết kiệm xăng xe hay bảo vệ môi trường </p>    </li>    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /><span style="font-size: 12.7272720336914px;">  Kiểm tra bảo hiểm xe và giấy phép lái xe còn hiệu lực. Sẵn sàng cho phép người đi nhờ kiểm tra các thông tin này</span></p>    </li>    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;"><span style="color: rgb(119, 119, 119); font-size: 12.7272720336914px; line-height: 18px; text-align: justify;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><span style="font-size: 12.7272720336914px;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /><span style="font-size: 12.7272720336914px;"> </span>Hãy chuẩn bị xe kỹ lưỡng và giữ cho xe sạch sẽ để có chuyến đi xuôn xẻ và dễ chịu cho các hành khách</span></p>    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"> </p>    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /><span style="font-size: 12.7272720336914px;"> Bạn có quyền từ chối những phát sinh không có thỏa thuận từ trước với hành khách. Nhưng hãy linh hoạt chấp nhận nếu có thể được.</span></p>    </span></li>    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /> Chủ động giao tiếp một cách thân mật sẽ làm cho chuyến đi thú vị hơn nhưng hãy tôn trọng hành khách nếu họ không thích nói chuyện.</p>    </li>    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /> Ngay sau khi chuyến đi kết thúc, hãy yêu cầu người bạn đường thực hiện đánh giá  chuyến đi để được tăng nhiều quyền lợi cho bạn. Việc này rất quan trọng, vì quyền lợi của bạn sẽ chỉ có đầy đủ sau khi thủ tục này kết thúc. Nếu họ quên, có thể bạn cần gọi điện hoặc email nhắc nhở.</p>    </li></ul></div><div class="passengers" style="margin: 0px 0px 0px 100px; padding: 0px; float: left; width: 280px;"><h3 style="margin: 0px 0px 15px; padding: 0px; font-size: 20px; font-weight: normal; line-height: 24px; width: 300px; position: relative; left: -30px;"><span style="display: inline-block; width: 24px; height: 24px; background: url(assets/images/driver_passenger_small.png) -25px 0px no-repeat;"> </span> Kinh nghiệm cho hành khách</h3><ul style="margin: 0px; padding: 0px;background:white">    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /> S<span style="font-size: 12.7272720336914px;">ẵn sàng có mặt đúng giờ tại điểm đón đã thống nhất. Đảm bảo</span><span style="font-size: 12.7272720336914px;"> về hành lý và số người đi cùng bạn đúng thông tin đã cung cấp khi đặt chỗ.</span></p>    </li>    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="../../dichung.vn/assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /><span style="font-size: 12.7272720336914px;"> </span><span style="font-size: 12.7272720336914px;">Nếu bạn cảm thấy xe không an toàn hoặc không được chủ xe cung cấp giấy phép lái xe khi yêu cầu, bạn có quyền từ chối tham gia đi chung</span></p>    </li>    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /><span style="font-size: 12.7272720336914px;">Tôn trọng tài sản của người chủ xe. Không ăn uống, hút thuốc nếu không được phép và lưu ý kiểm soát hoạt động của trẻ em đi cùng.</span></p>    </li>    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /><span style="font-size: 12.7272720336914px;"> Hãy tôn trọng thời gian và lịch trình đã thống nhất và thông báo sớm những thay đổi so với kế hoạch nếu có.</span></p>    </li>    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /><span style="font-size: 12.7272720336914px;"> </span><span style="font-size: 12.7272720336914px;">Chủ động giao tiếp một cách thân mật sẽ làm cho chuyến đi thú vị hơn nhưng hãy tôn trọng người chủ xe nếu họ không thích nói chuyện.</span></p>    </li>    <li style="margin: 0px 0px 5px; padding: 2px 0px; list-style: disc inside; display: block; color: rgb(88, 83, 164); font-size: 9px;">    <p style="margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-size: 13px; line-height: 18px; text-align: justify;"><img src="assets/images/li_partner_b.html" alt="" style="border: 0px; color: rgb(64, 64, 64); font-size: 14px; text-align: center; background-color: rgb(225, 225, 225);" /> Hãy thực hiện xác nhận chuyến đi đã hoàn tất sau khi chuyến đi kết thúc. Đừng quên thủ tục này vì lợi ích của bạn cũng như người bạn đường. Bạn có thể thực hiện ngay bằng cách gửi tin nhắn SMS hoặc truy cập vào Website sau đó.</p>    </li></ul></div></div><div class="contact" style="margin: 0px 0px 40px; padding: 0px; color: rgb(153, 153, 153); text-align: center; font-family: Arial;">Chúng tôi liên tục làm việc với sự giúp đỡ của bạn để xây dựng một mạng cộng đồng đi chung an toàn và đáng tin cậy. <br />Nếu bạn có bất kỳ câu hỏi, góp ý về vấn đề an toàn khi đi chung. Hãy email về <a href="mailto:support@tiendat" style="color: rgb(13, 119, 182); text-decoration: none;">Heou@gmail.com</a> hoặc gọi điện tới số Hotline: 037 376.5400</div></div><p> </p></div>       </div>
    </div>
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
