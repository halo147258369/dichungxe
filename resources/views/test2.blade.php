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

<link rel="stylesheet" type="text/css" media="screen" href="assets/css/style3860.css?v=1" />
 


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
                        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">trợ giúp<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="test1">Cách Thức Hoạt Động</a></li>
                         
                                <li><a href="test">Hướng Dẫn An Toàn</a></li>
                                <!-- <li><a href="hotel-homepage.html">Hotel Homepage</a></li>
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
                            <li><a href="#">Dinhoxe</a></li>
                            <li class="active">Và lại bảo vệ môi trường</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--==== INNERPAGE-WRAPPER =====-->
        <div id="content_wrapper" class="new_style">
        <div id="content_container" class="clearfix" style="background:#e1e1e1">
                        <div id="content">
    <!--<div class="features" style="background: url(/assets/images/safety_car_road.gif) no-repeat left bottom; padding-bottom:174px;">
        -->
        <div class="features">
        <!-- <h1 style="background: url(../assets/images/how-it-works-banner_easy.png) no-repeat center top;">
            DỄ DÀNG & THUẬN TIỆN
        </h1> -->
        <!--
        <p style="text-align: justify; font-size: 17px !important;
line-height: 21px !important;
width: 520px !important;
margin: -20px auto 20px auto !important;
text-align: center !important;
position: relative !important;
color: #777 !important;">Tại Dichung.vn, các tính năng được thiết kế với định hướng đơn giản hóa tối đa thao tác và thân thiện với người sử dụng. Đồng thời tích hợp các công nghệ phù hợp nhất với hoạt động đi chung.</p>
        <ul>
            <li class="facebook">
                <div>&nbsp;</div>
                <h4>Dễ dàng đăng ký và đăng nhập</h4>
                <p>
                    Để thuận tiện cho người dùng chúng tôi cho phép đăng nhập bằng các hình thức khác nhau và hoàn toàn miễn phí. Người dùng có thể tạo đăng ký mới hoặc đăng nhập bằng các tài khoản sẵn có và thông dụng ở Việt Nam như Yahoo, Google, Facebook…
Tuy nhiên nếu muốn sử dụng chức năng chính là mua/bán chỗ trống, người dùng phải xác thực bằng điện thoại.<br><br>

Chúng tôi khuyến khích người dùng kết nối với bằng các tài khoản mạng xã hội như Facebook, Google+, Zing... Điều này sẽ giúp bạn một phần trong việc xác thực uy tín trong cộng đồng và tăng khả năng được lựa chọn khi đi chung.

                </p>
            </li>
            <li class="privacy">
                <div>&nbsp;</div>
                <h4>Bảo mật thông tin riêng tư<br><br></h4>
                <p>
                                
                Bạn bắt buộc phải đăng ký một số điện thoại để dùng làm phương tiện liên lạc trong quá trình đi chung. Tuy nhiên số điện thoại của bạn sẽ được giữ kín cho đến khi việc đặt chỗ đã được chấp nhận để tránh bị làm phiền. <br><br>Người dùng có thể chọn ảnh đại diện nhưng chúng tôi khuyến khích dùng ảnh chân dung cũng như ảnh phương tiện thật của bạn. Việc này sẽ làm gia tăng khả năng được chấp nhận khi bạn yêu cầu đi nhờ hoặc cho đi nhờ. <br><br>Các thông tin mang tính chất cá nhân của bạn như: độ tuổi, giới tính, tình trạng hôn nhân, nơi sinh sống…  sẽ được ẩn trừ phi bạn muốn công bố.
                </p>
            </li>
            <li class="feedback">
                <div>&nbsp;</div>
                <h4>Sử dụng sức mạnh của cộng đồng</h4>
                <p>Đi chung là hệ thống tự tương tác, hoạt động dựa trên nền tàng cốt lõi là uy tín của người dùng để tránh những hiện tượng lừa đảo, phạm pháp. Chúng tôi thiết kết một hệ thống xác thực uy tín của thành viên trong đó quan trọng nhất là thống kê phản hồi và xếp hạng uy tín của những người đã từng đi cùng với thành viên đó. <br><br>

Bạn có thể sử dụng hệ thống này làm cơ sở để cân nhắc khi lựa chọn bạn đường cho những chuyến đi tương lai của mình. Và bạn cũng nhớ thực hiện trách nhiệm phản hồi của mình sau khi thực hiện những chuyến đi đó để làm tăng thêm nguồn tài nguyên thông tin cho cộng đồng

</p>
            </li>
            <li class="security">
                <div>&nbsp;</div>
                <h4>Đảm bảo thanh toán</h4>
                <p>
                Một trong những khó khăn lớn nhất cản trở việc đi chung là vấn đề không chắc chắn trong thanh toán của cả chủ xe và hành khách.  Chúng tôi thiết kế ra hình thức thanh toán trả trước nhưng thông qua trung gian thanh toán để giải quyết khó khăn này. Sự có mặt của trung gian thanh toán sẽ đảm bảo việc thanh toán được tiến hành cho một trong bên nếu đã thực hiện hoàn tất được vai trò của mình và giảm thiểu được những quan ngại về uy tín của các bên dẫn đến không thực hiện được những chuyến đi tiềm năng. <br><br>

Ngoài ra chúng tôi xây dựng qui định về <a id="fb_cplcy" href="#cancellation_policy">Chính sách Hủy đặt chỗ</a> để tránh xẩy ra tranh chấp không đáng có cho người dùng. Tuy nhiên chúng tôi khuyến khích sự tương tác của người dùng để đi đến thống nhất nếu có sự cố phát sinh và tôn trọng quyết định của họ. Mục đích sau cùng của chúng ta vẫn là đi được cùng nhau để tiết kiệm chi phí, có thêm bạn bè,  giảm khí thải vô ích và bảo vệ môi trường.

                </p>
            </li>
            <li class="messaging">
                <div>&nbsp;</div>
                <h4>Công cụ thanh toán đa dạng</h4>
                <p>Chúng tôi thiết kế nhiều lựa chọn và điều chỉnh cho phù hợp với thói quen thanh toán tại Việt Nam để hỗ trợ tối đa cho người dùng. Bạn có thể lựa chọn các phương án thanh toán rât linh hoạt như sau:<br><br>

+ Thanh toán trực tiếp với nhau (trả sau) hoặc qua trung gian (trả trước).<br>
+ Thanh toán bằng tiền mặt, chuyển khoản, tiền điện tử, thẻ tín dụng, thẻ trả trước…<br><br>

Trong thời gian đầu, các bạn sẽ dùng phương thức thanh toán trả sau với các phương tiện thanh toán tiền mặt hoặc chuyển khoản. Trong thời gian tới, bạn sẽ có thêm lựa chọn thanh toán trả trước với các phương tiện thanh toán đa dạng như: thẻ cào, tiền điện tử, thẻ tín dụng, internet banking, thẻ trả trước, thanh toán qua SMS…Các bạn sẽ có tài khoản riêng trên Dichung.vn để phục vụ thuận tiện cho việc thanh toán khi đi chung.
</p>
            </li>
            <li class="friends">
                <div>&nbsp;</div>
                <h4>Dễ dàng kết nối và trao đổi</h4>
                <p>Người dùng sử dụng hộp thư riêng tại Dichung.vn để dễ dàng theo dõi những giao dịch và lịch sử những chuyến đi của bạn. Những thông tin trong hòm thư của bạn sẽ được bảo mật tuyệt đối.<br><br>

Với việc tích hợp các chức năng mạng xã hội, bạn có thể chia sẻ các cơ hội đi chung với bạn bè dễ dàng. Hãy chia sẻ và cùng xây dựng một môi trường trong lành hơn cho tất cả mọi người.<br><br>

Đặc biệt tại Dichung.vn, chúng tôi chủ động tạo ra các công cụ và hỗ trợ người dùng tìm được các cơ hội kết bạn phù hợp. Phạm vi kết bạn sẽ bao trùm các lĩnh vực: lứa đôi, bạn bè, cơ hội giao thương.. Đó là tính năng hết sức thú vị mà các bạn sẽ được trải nghiệm. Để được phục vụ tốt nhất, chúng tôi khuyến khích các bạn cung cấp các thông tin cá nhân càng chi tiết càng tốt. Các thông tin sẽ được bảo mật tuyệt đối và không được sử dụng trừ phi bạn cho phép.
</p>
            </li>
        </ul>
    </div>
    
    <div class="call_to_action">Bạn đã sẵn sàng chưa? <a href="/user/register" class="button confirm signup_link">Đăng ký ngay!</a>
    -->
    <p> </p><div><div class="features" style="margin: 0px; padding: 0px 0px 174px; color: rgb(64, 64, 64); font-family: Arial; font-size: 13px; background: url(assets/images/safety_car_road.png) 0% 100% no-repeat;"><ul style="margin: 0px; padding: 0px; overflow: hidden; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">    <h2 style="margin: 10px 0px 0px; padding: 0px; font-size: 28px; font-weight: normal; text-align: center;">Ba bước đơn giản cần thực hiện khi Đi chung:</h2>    <li class="before" style="margin: 20px 0px 30px 84px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 210px;">    <div style="margin: 0px auto; padding: 0px; width: 50px; height: 53px; position: relative; left: -20px; background: url(assets/images/safety_checklist_icons.png) 0px 50% no-repeat;"> </div>    <h3 style="margin: 0px 0px 20px; padding: 0px; font-size: 20px; font-weight: normal; line-height: 24px; width: 300px;">Trước chuyến đi</h3>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Tìm hiểu bạn đường</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Chúng tôi cung cấp nhiều tiện ích giúp cho việc tìm hiểu nhau trước khi đi chung trở nên dễ dàng. Để có chuyến đi an toàn, hãy dành một ít thời gian để kiểm tra uy tín người bạn đường tiềm năng. <a href="http://dichung.vn/home/3step" class="safety" title="Tìm hiểu bạn đường" style="color: rgb(13, 119, 182); text-decoration: none;">Hướng dẫn</a></p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Liên lạc trực tiếp.</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Chúng tôi khuyên bạn nên liên lạc và nói chuyện với người bạn đường để có những hiểu biết thêm trước khi đi chung. Việc này sẽ cung cấp nhiều thông tin quan trọng để bạn chọn thực hiện giao dịch hoặc hủy.</p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Thống nhất các vấn đề liên quan đến chuyến đi </h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Để đảm bảo chuyến đi của bạn diễn ra một cách thuận lợi, chúng tôi khuyên bạn hãy thống nhất các vấn đề liên quan đến chuyến đi bao gồm thông tin người đi cùng, hành lý, trẻ em,điểm đón/trả và lộ trình dự kiến..</p>    </li>    <li class="during" style="margin: 20px 0px 30px 84px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 210px;">    <div style="margin: 0px auto; padding: 0px; width: 50px; height: 53px; position: relative; left: -20px; background: url(assets/images/safety_checklist_icons.png) -47px 50% no-repeat;"> </div>    <h3 style="margin: 0px 0px 20px; padding: 0px; font-size: 20px; font-weight: normal; line-height: 24px; width: 300px;">Trong chuyến đi</h3>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Đến đúng giờ</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Hãy thể hiện sự chuyên nghiệp bằng cách đến điểm đón thống nhất đúng giờ kể cả khi bạn tham gia đi chung không vì mục đích kiếm tiền. Một thái độ không tốt sẽ đến ảnh hưởng uy tín của bạn.</p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Đi đúng lịch trình</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Các bạn nên giữ nguyên lịch trình đã thống nhất trước khi đi. Nếu có sự thay đổi bất khả kháng trong kế hoạch, thì có thể đề xuất điều chỉnh nhưng cần tôn trọng quyết định của người đi cùng. </p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Cùng thư giãn trong suốt chuyến đi</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Hãy chủ động giao tiêp bằng một chủ đề, hoặc nghe loại âm nhạc mà tất cả đều quan tâm. Nếu các bạn đi một chuyến đi dài, hãy nhớ việc dừng lại một vài lần để nghỉ ngơi và đảm bảo an toàn.</p>    </li>    <li class="after" style="margin: 20px 0px 30px 84px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 210px;">    <div style="margin: 0px auto; padding: 0px; width: 50px; height: 53px; position: relative; left: -20px; background: url(assets/images/safety_checklist_icons.png) -100px 50% no-repeat;"> </div>    <h3 style="margin: 0px 0px 20px; padding: 0px; font-size: 20px; font-weight: normal; line-height: 24px; width: 300px;">Sau chuyến đi</h3>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Xác nhận hoàn tất</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Sau khi chuyến đi kết thúc, các bạn cần thực hiện việc xác nhận hoàn tất. Thủ tục này sẽ giúp chúng tôi ghi nhận được giao dịch đi chung các bạn đã hoàn tất và thực hiện chức năng trung gian thanh toán</p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Để lại phản hồi</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Hệ thống tham khảo đánh giá uy tín là hệ thống cốt lõi của Dichungxe. Vì vậy phản hồi và xếp hạng uy tín bạn đường sau khi đi xong là rất quan trọng và đem lại giá trị thông tin quí báu cho cộng đồng. <span style="background-color: initial;"> </span></p>    <h4 style="margin: 0px 0px 8px; padding: 0px 0px 0px 20px; font-size: 16px; font-weight: 500; position: relative; left: -20px; background: url(assets/images/check_purple.png) 0% 50% no-repeat;">Chia sẻ trải nghiệm chuyến đi cho bạn bè</h4>    <p style="margin: 0px; padding: 0px 0px 10px; color: rgb(119, 119, 119); line-height: 18px; text-align: justify;">Sau chuyến đi, nếu có thời gian bạn hãy viết lại những trải nghiệm thú vị trong chuyến đi và chia sẻ với người bạn đường và bạn bè của mình. Bạn có thể chọn chế độ riêng tư hoặc hiển thị ra công cộng</p>    <br />     </li></ul></div><div class="checklist" style="margin: 0px; padding: 0px; color: rgb(64, 64, 64); font-family: Arial; font-size: 13px;"><p style="padding: 0px; margin: -20px auto 20px !important; font-size: 17px !important; line-height: 21px !important; width: 520px !important; text-align: center !important; position: relative !important; color: rgb(119, 119, 119) !important;"> </p><p style="padding: 0px; margin: -20px auto 20px !important; font-size: 17px !important; line-height: 21px !important; width: 520px !important; text-align: center !important; position: relative !important; color: rgb(119, 119, 119) !important;"> </p><p style="padding: 0px; margin: -20px auto 20px !important; font-size: 17px !important; line-height: 21px !important; width: 520px !important; text-align: center !important; position: relative !important; color: rgb(119, 119, 119) !important;"> </p><p style="padding: 0px; margin: -20px auto 20px !important; font-size: 17px !important; line-height: 21px !important; width: 520px !important; text-align: center !important; position: relative !important; color: rgb(119, 119, 119) !important;"> Dichungxe được thiết kế với định hướng hỗ trợ tối đa việc chia sẻ/ mua bán chỗ trống. Bạn hãy khai thác các tính năng các tính năng dưới đây để có thể đi chung một cách dễ dàng.</p><p style="padding: 0px; margin: -20px auto 20px !important; font-size: 17px !important; line-height: 21px !important; width: 520px !important; text-align: center !important; position: relative !important; color: rgb(119, 119, 119) !important;"> </p><ul style="margin: 0px; padding: 0px; overflow: hidden; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">    <li class="facebook" style="margin: 10px 0px 10px 65px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 228px;">    <div style="margin: 0px auto; padding: 0px; height: 59px; position: relative; left: -20px; width: 55px; background: url(assets/images/safety_features_icons.png) 0px 50% no-repeat;"> </div>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;">Tham gia miễn phí</h4>    <p style="margin: 0px; padding: 0px; text-align: justify;">Để bắt đầu tham gia chia sẻ/ mua bán chỗ bạn chỉ cần mở một tài khoản. Chúng tôi cho phép đăng ký bằng các hình thức khác nhau và hoàn toàn miễn phí. Người dùng có thể tạo đăng ký mới bằng email hoặc đăng nhập nhanh bằng tài khoản mạng xã hội. Sau đó, bạn chỉ cần xác thực số điện thoại là có thể bắt đầu.</p>    </li>    <li class="privacy" style="margin: 10px 0px 10px 65px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 228px;">    <div style="margin: 0px auto; padding: 0px; height: 59px; position: relative; left: -20px; width: 54px; background: url(assets/images/safety_features_icons.png) -296px 50% no-repeat;"> </div>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;">Bán/ mua chỗ dễ dàng</h4>    <p style="margin: 0px; padding: 0px; text-align: justify;"><span style="font-size: 12.7272720336914px;">Chúng tôi sử dụng Google Maps để tự động tính toán và gợi ý chi phí mua bán chỗ cách khoa học. Tất nhiên bạn vẫn có thể tự tính toán và chọn mức giá bạn mong muốn. Khi tiến hành giao dịch, bạn có thể lựa chọn các phương án thanh toán rât linh hoạt: Bạn có thể chọn thanh toán trực tiếp với nhau hoặc thanh toán đảm bảo qua trung gian qua các kênh trực tuyến hoặc chuyển khoản</span></p>    </li>    <li class="feedback" style="margin: 10px 0px 10px 65px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 228px;">    <div style="margin: 0px auto; padding: 0px; height: 59px; position: relative; left: -20px; width: 120px; background: url(assets/images/safety_features_icons.png) -360px 50% no-repeat;"> </div>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;">Nhận thông báo tự động.</h4>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;">    <p style="font-size: 13px; margin: 0px; padding: 0px; text-align: justify;">Sau khi bạn đăng tin, chúng tôi sẽ tự động gửi đến bạn thông tin về các chuyến đi tiềm năng phù hợp với yêu cầu của bạn. Bạn cũng có thể để lại thông tin liên lạc và ngày đi mong muốn nếu là hành khách hoặc thông tin về chuyến đi còn chỗ muốn bán nếu là chủ xe, chúng tôi sẽ gửi cho bạn khi chuyến đi phù hợp mới xuất hiện </p>    </h4>    </li>    <li class="security" style="margin: 10px 0px 10px 65px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 228px; clear: left;">    <div style="margin: 0px auto; padding: 0px; height: 59px; position: relative; left: -20px; width: 55px; background: url(assets/images/safety_features_icons.png) -495px 50% no-repeat;"> </div>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;"><span style="font-size: 18.2px;">An tâm với xác thực uy tín</span></h4>    <p style="margin: 0px; padding: 0px; text-align: justify;"><span style="font-size: 12.7272720336914px;">Chúng tôi cung cấp rất nhiều tiện ích để hỗ trợ việc xác thực uy tín của thành viên. Từ những yêu cầu cơ bản như xác thực điện thoại, email đến các tiện ích xác thực bằng mạng xã hội, giới thiệu bạn bè, giầy tờ tùy thân.</span></p>    </li>    <li class="messaging" style="margin: 10px 0px 10px 65px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 228px;">    <div style="margin: 0px auto; padding: 0px; height: 59px; position: relative; left: -20px; width: 120px; background: url(assets/images/safety_features_icons.png) -105px 50% no-repeat;"> </div>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;"><span style="font-size: 18.2px;">Tham khảo đánh giá thực</span></h4>    <p style="margin: 0px; padding: 0px; text-align: justify;"><span style="font-size: 12.7272720336914px;">Đi chung là hệ thống tự tương tác. Chúng tôi thiết kết một hệ thống xác thực uy tín của thành viên trong đó quan trọng nhất là thống kê phản hồi và xếp hạng uy tín của những người đã từng đi cùng với thành viên đó.</span></p>    </li>    <li class="friends" style="margin: 10px 0px 10px 65px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 228px;">    <div style="margin: 0px auto; padding: 0px; height: 59px; position: relative; left: -20px; width: 55px; background: url(assets/images/safety_features_icons.png) -235px 50% no-repeat;"> </div>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;">Đảm bảo thanh toán</h4>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;">    <p style="font-size: 13px; margin: 0px; padding: 0px; text-align: justify;"><span style="font-size: 12.7272720336914px;">Để đảm bảo cho việc thanh toán khi mua/bán chỗ, chúng tôi cung cấp lựa chọn thanh toán đảm bảo. Với hình thức thanh toán này, chúng tôi tạm giữa tiền của hành khách và chỉ thanh toán cho chủ xe khi giao dịch hoàn tất</span></p>    </h4>    </li>    <br />    <li class="security" style="margin: 10px 0px 10px 65px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 228px; clear: left;">    <div style="margin: 0px auto; padding: 0px; height: 59px; position: relative; left: -20px; width: 70px; background: url(assets/images/safety_features_icons.png) -50px 50% no-repeat;"> </div>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;">Đảm bảo tính riêng tư</h4>    <p style="margin: 0px; padding: 0px; text-align: justify;"><span style="font-size: 12.7272720336914px;">Bạn vẫn có thể tương tác dễ dàng với người bạn đường tiềm năng bằng hệ thống nhắn tin nội bộ của chúng tôi hoặc qua chat mà không cần tiết lộ số điện thoại. Mỗi khi có yêu cầu đặt chỗ mới, bạn sẽ nhận được thông báo qua SMS và Email ngay lập tức. </span><br />     </p>    </li>    <li class="messaging" style="margin: 10px 0px 10px 65px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 228px;">    <div style="margin: 0px auto; padding: 0px; height: 59px; position: relative; left: -20px; width: 55px; background: url(assets/images/safety_features_icons.png) -560px 50% no-repeat;"> </div>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;">Đi chung theo nhóm </h4>    <p style="margin: 0px; padding: 0px; text-align: justify;"><span style="font-size: 12.7272720336914px;">Chúng tôi có phiên bản đi chung theo nhóm. Bạn có thể chọn các nhóm mà bạn quan tâm: trường học, công ty, nhóm phượt, hội đồng hương...Với một nhóm đi chung, sự tin tưởng giữa các thành viên sẽ cao hơn và từ đó tăng khả năng đi chung thành công.</span><br />    <br />     </p>    </li>    <li class="friends" style="margin: 10px 0px 10px 65px; padding: 2px 0px; list-style: none inside; display: block; float: left; width: 228px;">    <div style="margin: 0px auto; padding: 0px; height: 59px; position: relative; left: -20px; width: 55px; background: url(assets/images/safety_features_icons.png) -622px 50% no-repeat;"> </div>    <h4 style="margin: 0px 0px 10px; padding: 0px; font-size: 18.2px; font-weight: normal;">Mời bạn bè tham gia</h4>    <p style="margin: 0px; padding: 0px; text-align: justify;">Rắt dễ dàng để mời bạn bè tham gia vào hoạt động đi chung văn minh và tiết kiệm đồng thời nhận được phần thưởng là những chuyến đi miễn phí của chúng tôi. Có thể mời bạn bè qua mạng xã hội, email, tin nhăn. Hãy thể hiện phong cách sống xanh của bạn.</p>    </li></ul></div></div><div class="call_to_action" style="margin: 10px 0px 0px; padding: 0px; text-align: center; font-weight: bold; font-size: 20px; color: rgb(64, 64, 64); font-family: Arial;">Bạn đã sẵn sàng chưa? <a href="../user/register.html" class="button confirm signup_link" style="text-decoration: none; display: inline-block; position: relative; height: 30px; line-height: 30px; font-size: 16px; font-weight: 500; padding: 0px 25px; border: 1px solid rgba(0, 0, 0, 0.4); border-radius: 4px; text-shadow: rgba(0, 0, 0, 0.498039) 0px -1px 0px; -webkit-box-shadow: rgba(255, 255, 255, 0.498039) 0px 1px 0px inset, rgba(0, 0, 0, 0.6) 0px 1px 0px; box-shadow: rgba(255, 255, 255, 0.498039) 0px 1px 0px inset, rgba(0, 0, 0, 0.6) 0px 1px 0px; color: rgb(255, 255, 255) !important; background-image: linear-gradient(rgb(138, 188, 107), rgb(87, 149, 68)); background-color: rgb(91, 165, 60);">Đăng ký ngay!</a></div><p> </p>    </div>
</div>

<div id="cancellation_policy" style="display: none;">
            
            <div id="cancellation-refund-policy">
                    <!--<h2>Full refunds will be issued to passengers for any booking cancelled at least <em>one day prior to the date of the trip</em>. You can cancel your ride by going to the <a href="https://www.zimride.com/booking/history" class="requires_reauth">Manage Transactions</a> page.
                    </h2>-->
                    <ul style="text-align:justify">
                            <li>Việc hủy một chỗ hoặc chuyến đi đã đặt phải được thực hiện ít nhất 24 giờ trước giờ khởi hành. </li>
                            <li>Nếu bạn hủy bỏ chỗ hoặc chuyến đi ít hơn 24 giờ trước giờ khởi hành, yêu cầu hủy bỏ của bạn sẽ bị coi là không hợp lệ trừ phi bạn thuyết phục được người bạn đường đồng ý hủy. Bạn sẽ phải bồi thường cho người bạn đường trong trường hợp thuyết phục thất bại.  Ngoài ra, chúng tôi cũng qui định trong vòng 30 phút tại địa điểm và thời gian đã được thống nhất để khởi hành, nếu chủ xe hoặc hành khách không có mặt cũng bị tính là hủy giao dịch đơn phương. Nếu không đàm phán được hủy giao dịch hoặc sắp xếp lại thời gian thì bạn sẽ phải bồi thường cho người bạn đường.</li>
                            <li>Trách nhiệm bồi thường của bạn tương đương với số tiền mua/bán chỗ trống đã đặt. Nếu bạn không thực hiện trách nhiệm bồi thường bằng tài chính, bạn sẽ chịu trách nhiệm bằng uy tín đối với cộng đồng (phản hồi tiêu cực từ người bạn đường hoặc chúng tôi ). Việc này sẽ ảnh hưởng nghiêm trọng đến cơ hôi đi chung trong những chuyến đi tương lai của bạn vì những phản hồi tiêu cực sẽ được lưu trên hệ thống.</li>
                            <li>Việc báo hủy trước 24 giờ  và thời gian trễ cho phép là 30 phút là áp dụng mặc định cho tất cả các chuyến đi thông thường. Có thể sẽ những trường hợp ngoại lệ khi đơn vi cung cấp dịch vận tải chuyên nghiệp qui định khác. Bạn sẽ được thông báo khi đăng ký những chuyến đi như vậy.</li>
                            <li>Bạn có thể hủy đặt chỗ/chuyến đi đơn giản bằng cách vào trang Quản lý giao dịch và thực hiện hủy. Việc hủy bỏ chỉ được coi là hoàn tất khi bạn nhận được một email xác nhận hủy bỏ của chúng tôi. Nếu không nhận được email hủy bỏ, hãy gọi cho chúng tôi bằng số hỗ trợ Hotline: 043 200.2566 hoặc email về <a href="mailto:support@dichung.vn">support@dichung.vn</a>.</li>
    </div>
        
        
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
