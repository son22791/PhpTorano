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
                    <a href="index.php?controller=users&action=loginUser">T??i kho???n</a>
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
                                    ????ng xu???t
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
                    <a href="#">Gi??? h??ng</a>
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
                    <a href="" class="">S???N PH???M</a>
                    <ul>
                        <li>
                            <a href="#">H??NG NAM</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">PH??? KI???N</a>
                    <ul>
                        <li>
                            <a href="#">TH???T L??NG</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">??O KHO??C 2 L???P</a>
                    <ul>
                        <li>
                            <a href="#">??O KHO??C GI??</a>
                        </li>
                        <li>
                            <a href="#">??O KHO??C DA L???N</a>
                        </li>
                        <li>
                            <a href="#">??O KHO??C KAKI</a>
                        </li>
                        <li>
                            <a href="#">??O KHO??C DA</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">??O KHO??C D??Y</a>
                    <ul>
                        <li>
                            <a href="#">??O PHAO B??NG</a>
                        </li>
                        <li>
                            <a href="#">??O KHO??C L??T L??NG</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">??O LEN</a>
                    <ul>
                        <li>
                            <a href="#">??O LEN H???A TI???T</a>
                        </li>
                        <li>
                            <a href="#">??O LEN TR??N</a>
                        </li>
                        <li>
                            <a href="#">??O LEN K???</a>
                        </li>
                        <li>
                            <a href="#">??O LEN MELANGE</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">N??? - PH??NG D??I TAY</a>
                    <ul class="big_product">
                        <li>
                            <a href="#">??O PH??NG D??I TAY MMELANGE</a>
                        </li>
                        <li>
                            <a href="#">??O PH??NG D??I TAY TR??N</a>
                        </li>
                        <li>
                            <a href="#">??O N???</a>
                        </li>
                        <li>
                            <a href="#">QU???N N???</a>
                        </li>
                        <li>
                            <a href="#">B??? N???</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">S?? MI D??I</a>
                    <ul>
                        <li>
                            <a href="#">S?? MI D??I TAY D???</a>
                        </li>
                        <li>
                            <a href="#">S?? MI D??I TAY H???A TI???T</a>
                        </li>
                        <li>
                            <a href="#">S?? MI D??I TAY K???</a>
                        </li>
                        <li>
                            <a href="#">S?? MI D??I TAY TR??N</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">QU???N D??I</a>
                    <ul>
                        <li>
                            <a href="#">QU???N ??U</a>
                        </li>
                        <li>
                            <a href="#">QU???N KAKI</a>
                        </li>
                        <li>
                            <a href="#">QU???N JEAN</a>
                        </li>
                        <li>
                            <a href="#">QU???N GI??</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="">H??NG H??</a>
                    <ul>
                        <li>
                            <a href="#">S?? MI NG???N TAY</a>
                        </li>
                        <li>
                            <a href="#">??O THUN</a>
                        </li>
                        <li>
                            <a href="#">QU???N SHORT</a>
                        </li>
                        <li>
                            <a href="#">??O POLO</a>
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
                        <input type="text" placeholder="T??m ki???m..." class="search">
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
                        H??? TH???NG C???A H??NG
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
                        G???I MUA H??NG ( 08:30-21:30 )
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
                                <p class="moreInfo_Footer">T???t c??? c??c ng??y trong tu???n</p>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 site-animation">
                    <h4>
                        G??P ??, KHI???U N???I (08:30-20:30 )
                    </h4>
                    <div class="infoContent">
                        <p class="info_block">
                            <span class="iconFooter"><i class="fa fa-phone fa-phone_footer "></i></span>
                            <span class="titleHotline"><a class="btnHL" href="#">
                                    0931733469
                                </a></span>
                            <span class="moreInfoFooter">
                                <p class="moreInfo_Footer">C??c ng??y trong tu???n( tr??? ng??y l??? )</p>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 site-animation block-newsletter">
                    <h4>
                        ????NG K?? NH???N TH??NG TIN M???I
                    </h4>
                    <div id="mc_embed_signup" class="newsletter-form">
                        <div class="signupemail">
                            <input type="text" class="inputemail" placeholder="Nh???p email c???a b???n t???i ????y...">
                            <a href="#" class="signup">
                                <p>????ng k??</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 site-animation">
                    <h4>
                        THEO D??I CH??NG T??I
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
                    <h4 class="footer-title">C??NG TY C??? PH???N ?????U T?? T&amp;L VI???T NAM</h4>
                    <div class="footer-content">
                        <p>M?? s??? thu???:0108597977</p>
                        <p>?????a ch???: Ph??ng 803-812, T???ng 8,T??a nh?? 315 Tr?????ng Chinh, Ph?????ng Kh????ng Mai, Qu???n Thanh Xu??n,
                            Th??nh ph??? H?? N???i.</p>
                        <p><img alt="" src="images/bocongthuong.png">
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 footer-div">
                    <h4 class="footer-title">V??? CH??NG T??I</h4>
                    <div class="footer-content">
                        <ul>
                            <li><a href="">Gi???i thi???u</a></li>
                            <li><a href="/lien-he">Li??n h???</a></li>
                            <li><a href="#" target="_blank" rel="noreferrer noopener">Tuy???n d???ng</a>
                            </li>
                            <li><a href="">T??m ?????i l??</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-3 footer-div">
                    <h4 class="footer-title">H??? TR??? KH??CH H??NG</h4>
                    <div class="footer-content">
                        <ul>
                            <li><a href="">H?????ng d???n ch???n size</a></li>
                            <li><a href="">Ch??nh s??ch kh??ch h??ng th??n thi???t</a></li>
                            <li><a href="">Ch??nh s??ch ?????i/Tr???</a></li>
                            <li><a href="">Ch??nh s??ch b???o m???t</a></li>
                            <li><a href="">Thanh to??n, Giao nh???n</a></li>
                            <li><a href="">C??u h???i th?????ng g???p</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-3 footer-div">
                    <h4 class="footer-title">FANPAGE CH??NG T??I</h4>
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