<?php 
    session_start();
?>
<DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VTC Academy, Web Programming">
    <meta name="keywords" content=" fashion, shop">
    <meta name="author" content="VTC Academy">
    <title>Torano</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0b0f61d42e.js" crossorigin="anonymous"></script>
    <link href="http://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0"
        nonce="2Ovm8rVE"></script>
    <!-- Custom styles for your website -->
    <!-- <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/registration.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--[if IE 6]>
<script> src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"</script>
    <![endif]-->
  </head>
  <body>
   <!--Top header start -->
   <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {echo $result;}?>
   <div id="topheader" class="top-header clearfix  tp_header">
    <div class="container">
        <div class="row">
            <div class="no-padding col-xs-12 col-sm-8 col-md-6 top_bar_left">
                <a href="0931733469">
                    <i class="fas fa-phone"></i>
                </a>
                <a class="font-weight-bold" href="0931733469">0931733469</a>
            </div>
            <div class="no-padding col-xs-12 col-sm-2 col-md-6 top_bar_right">
                <ul>
                    <?php
                    if (!isset($_SESSION['user_email'])) {
                    ?> 
                         <a  href="index.php?controller=users&action=loginUser">
                        <i class="icon_top fas fa-user"></i>
                    </a>
                    <a href="index.php?controller=users&action=loginUser">Tài khoản</a>
                    <?php
                        } else {
                    ?>
                        <a>
                        <i class="icon_top fas fa-user"></i>
                    </a>
                    <a href=""><?php echo $_SESSION['user_name']?></a>
                    <form class="form-logout" action="index.php?controller=users&action=logout" method="post">
                                <i class="fas logout_icon fa-sign-out-alt"></i>
                                <button type="submit" value="true" name="logout" class="logout">
                                    Đăng xuất
                                </button>
                    </form>
             <?php
             }
             ?>
                </ul>
                <ul>
                    <a href="#">
                        <i class=" icon_top fas fa-shopping-bag"></i>
                    </a>
                    <a href="#">Giỏ hàng</a>
                    <a class="count-product" href="#">(0)</a>
                </ul>
            </div>
        </div>
    </div>
</div>
    <!--Top header end -->
    <!-- =================================================== -->
    <!-- Navigation -->
    <nav class=" navbar navbar-expand-md sticky-top no-padding">
        <a class="logo_nav" href="index.php">
            <img height="23" src="assets/images/store_1584681428_275.png" alt="Nhanh" class="img-responsive">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav navbar-left navbar-right">
                <li class="nav-item">
                    <a href="" class="">SẢN PHẨM</a>
                    <ul>
                        <li>
                            <a href="#">HÀNG NAM</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">PHỤ KIỆN</a>
                    <ul>
                        <li>
                            <a href="#">THẮT LƯNG</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">ÁO KHOÁC 2 LỚP</a>
                    <ul>
                        <li>
                            <a href="#">ÁO KHOÁC GIÓ</a>
                        </li>
                        <li>
                            <a href="#">ÁO KHOÁC DA LỘN</a>
                        </li>
                        <li>
                            <a href="#">ÁO KHOÁC KAKI</a>
                        </li>
                        <li>
                            <a href="#">ÁO KHOÁC DA</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">ÁO KHOÁC DÀY</a>
                    <ul>
                        <li>
                            <a href="#">ÁO PHAO BÔNG</a>
                        </li>
                        <li>
                            <a href="#">ÁO KHOÁC LÓT LÔNG</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">ÁO LEN</a>
                    <ul>
                        <li>
                            <a href="#">ÁO LEN HỌA TIẾT</a>
                        </li>
                        <li>
                            <a href="#">ÁO LEN TRƠN</a>
                        </li>
                        <li>
                            <a href="#">ÁO LEN KẺ</a>
                        </li>
                        <li>
                            <a href="#">ÁO LEN MELANGE</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">NỈ - PHÔNG DÀI TAY</a>
                    <ul class="big_product">
                        <li>
                            <a href="#">ÁO PHÔNG DÀI TAY MMELANGE</a>
                        </li>
                        <li>
                            <a href="#">ÁO PHÔNG DÀI TAY TRƠN</a>
                        </li>
                        <li>
                            <a href="#">ÁO NỈ</a>
                        </li>
                        <li>
                            <a href="#">QUẦN NỈ</a>
                        </li>
                        <li>
                            <a href="#">BỘ NỈ</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">SƠ MI DÀI</a>
                    <ul>
                        <li>
                            <a href="#">SƠ MI DÀI TAY DẠ</a>
                        </li>
                        <li>
                            <a href="#">SƠ MI DÀI TAY HỌA TIẾT</a>
                        </li>
                        <li>
                            <a href="#">SƠ MI DÀI TAY KẺ</a>
                        </li>
                        <li>
                            <a href="#">SƠ MI DÀI TAY TRƠN</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">QUẦN DÀI</a>
                    <ul>
                        <li>
                            <a href="#">QUẦN ÂU</a>
                        </li>
                        <li>
                            <a href="#">QUẦN KAKI</a>
                        </li>
                        <li>
                            <a href="#">QUẦN JEAN</a>
                        </li>
                        <li>
                            <a href="#">QUẦN GIÓ</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">HÀNG HÈ</a>
                    <ul>
                        <li>
                            <a href="#">SƠ MI NGẮN TAY</a>
                        </li>
                        <li>
                            <a href="#">ÁO THUN</a>
                        </li>
                        <li>
                            <a href="#">QUẦN SHORT</a>
                        </li>
                        <li>
                            <a href="#">ÁO POLO</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">COLLECTION</a>
                    <ul class="normal_product">
                        <li>
                            <a href="#">CHOSEN BY KIM LY</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link-sale">SALE</a>
                </li>
            </ul>
        </div>
        <div class="searchFormHeader" itemscope="" itemtype="https://schema.org/WebSite">
            <table class="elementsContainer">
                <tr>
                    <td>
                        <input type="text" placeholder="Tìm kiếm..." class="search">
                    </td>
                    <td>
                        <a class="fa_search" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </nav>
    <!-- End of Navigation -->
    <!-- =================================================== -->
    <?= @$content ?>
      <!-- Start Banner Bottum -->

      <div class=" container-fluid container_banner">
        <div class="container__banner">
            <div class="banner_stores">
                <!-- <img class="img_Store" src="images/sb_1585018669_7.png" alt=""> -->
                <a class="store__list" href="#" target="_self">
                    <p>
                        HỆ THỐNG CỬA HÀNG
                    </p>
                </a>
            </div>
        </div>
    </div>
    <!-- End Banner Bottum  -->
    <section id="sectionInfoFooter" class="clearfix">
        <div class="wrapper-new clearfix">
            <div class="innerInfoFooter clearfix">
                <div class="col-12 col-sm-3 nth-1">
                    <h4>
                        GỌI MUA HÀNG ( 08:30-21:30 )
                    </h4>
                    <div class="infoContent">
                        <p class="info_block">
                            <span class="iconFooter ">
                                <i class="fa fa-phone fa-phone_footer ">
                                </i>
                            </span>
                            <span class="titleHotline">
                                <a class="btnHL" href="#">
                                    0964942121
                                </a>
                            </span>
                            <span class="moreInfoFooter">
                                <p class="moreInfo_Footer">Tất cả các ngày trong tuần</p>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 site-animation">
                    <h4>
                        GÓP Ý, KHIẾU NẠI (08:30-20:30 )
                    </h4>
                    <div class="infoContent">
                        <p class="info_block">
                            <span class="iconFooter"><i class="fa fa-phone fa-phone_footer "></i></span>
                            <span class="titleHotline"><a class="btnHL" href="#">
                                    0931733469
                                </a></span>
                            <span class="moreInfoFooter">
                                <p class="moreInfo_Footer">Các ngày trong tuần( trừ ngày lễ )</p>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 site-animation block-newsletter">
                    <h4>
                        ĐĂNG KÝ NHẬN THÔNG TIN MỚI
                    </h4>
                    <div id="mc_embed_signup" class="newsletter-form">
                        <div class="signupemail">
                            <input type="text" class="inputemail" placeholder="Nhập email của bạn tại đây...">
                            <a href="#" class="signup">
                                <p>Đăng ký</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 site-animation">
                    <h4>
                        THEO DÕI CHÚNG TÔI
                    </h4>
                    <ul class="navbar-social">
                        <li class="social">
                            <a href="#">
                                <i class="fab fa-facebook-f "></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer id="footerBottom" class="clearfix tp_footer">
        <div class="wrapper_new clearfix">
            <div class="innerInfoFooter">
                <div class="col-12 col-sm-3 footer-div footer-active">
                    <h4 class="footer-title">CÔNG TY CỔ PHẦN ĐẦU TƯ T&amp;L VIỆT NAM</h4>
                    <div class="footer-content">
                        <p>Mã số thuế:0108597977</p>
                        <p>Địa chỉ: Phòng 803-812, Tầng 8,Tòa nhà 315 Trường Chinh, Phường Khương Mai, Quận Thanh Xuân,
                            Thành phố Hà Nội.</p>
                        <p><img alt="" src="images/bocongthuong.png">
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 footer-div">
                    <h4 class="footer-title">VỀ CHÚNG TÔI</h4>
                    <div class="footer-content">
                        <ul>
                            <li><a href="">Giới thiệu</a></li>
                            <li><a href="/lien-he">Liên hệ</a></li>
                            <li><a href="#" target="_blank" rel="noreferrer noopener">Tuyển dụng</a>
                            </li>
                            <li><a href="">Tìm đại lý</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-3 footer-div">
                    <h4 class="footer-title">HỖ TRỢ KHÁCH HÀNG</h4>
                    <div class="footer-content">
                        <ul>
                            <li><a href="">Hướng dẫn chọn size</a></li>
                            <li><a href="">Chính sách khách hàng thân thiết</a></li>
                            <li><a href="">Chính sách đổi/Trả</a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                            <li><a href="">Thanh toán, Giao nhận</a></li>
                            <li><a href="">Câu hỏi thường gặp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-3 footer-div">
                    <h4 class="footer-title">FANPAGE CHÚNG TÔI</h4>
                    <div class="footer-content">
                        <div class="fb-page" data-href="https://www.facebook.com/Torano.vn/" data-tabs="timeline"
                            data-width="300" data-height="210px" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/Torano.vn/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/Torano.vn/">Torano</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="bottombar"></div>
    <!-- End of Footer -->

    <!-- Bootstrap core JavaScript -->
  </body>
</html>