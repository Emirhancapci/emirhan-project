<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Niro</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- themify icon CSS -->
    <link rel="stylesheet" href="assets/vendors/themify_icons/themify-icons.css" />
    <!-- nice select CSS -->
    <link rel="stylesheet" href="assets/vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="assets/vendors/owl_carousel/css/owl.carousel.css" />
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="assets/vendors/magnify_popup/magnific-popup.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
      <!-- flaticon CSS -->
    <link rel="stylesheet" href="assets/vendors/icomoon/style.css" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="assets/vendors/flatIcon/flaticon.css" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>

    <!-- style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    

    <!-- preloader -->
    <div class="preloader-wrapper" id="preloader-wrapper">
        <div class="percentage-wrapper">
            <div class="loadbar-percent"></div>
            <div id="percent"></div>
        </div>
    </div>
    <!-- preloader end -->
    
    <!-- header part -->
    <div class="offcanvas_overlay"></div>
   
     <!-- header part -->
     <div class="offcanvas_overlay"></div>
     <header class="header_part classic_header menu_padding">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-12">
                     <nav class="navbar navbar-expand-lg justify-content-between align-items-center">
                         <a class="navbar-brand main_logo" href="{{  route('front.index') }}"><img src="assets/img/logo.png"
                                 srcset="assets/img/logo.png 2x"  style="width:50px !important;" alt="logo">
                         </a>
                         
                         <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown menu_list">
                                    <a class="nav-link dropdown-toggle" href="{{  route('front.index') }}" aria-haspopup="true" aria-expanded="false">
                                        Anasayfa
                                    </a>
                                </li>
                                <li class="nav-item dropdown menu_list">
                                    <a class="nav-link dropdown-toggle" href="{{  route('front.about') }}" aria-haspopup="true" aria-expanded="false">
                                        Hakkımızda
                                    </a>
                                </li>
                                <li class="nav-item dropdown menu_list">
                                    <a class="nav-link dropdown-toggle" href="{{  route('front.portfolio') }}" aria-haspopup="true" aria-expanded="false">
                                        Galeri
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{  route('front.contact') }}" aria-haspopup="true" aria-expanded="false">
                                        İletişim
                                    </a>
                                </li>
                            </ul>
                         </div>
                     </nav>
                 </div>
             </div>
         </div>
     </header>

  @yield('content')
    <!-- banner part end -->
 <!-- footer part here -->
    <footer class="footer_section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".3s">
                    <div class="single_footer_widget">
                        <a href="{{  route('front.index') }}"><img src="assets/img/logo.png"  srcset="assets/img/logo.png 2x"  style="width:50px !important;" alt="#"></a>
                        <p>Dijital Çözüm Ortağınız</p>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-sm-6 wow fadeInDown" data-wow-delay=".4s">
                    <div class="single_footer_widget footer_nav">
                        <h4>İletişim Bilgileri</h4>
                        <ul>
                            <li><a>E-Posta : emirhancapci@hotmail.com</a></li>
                            <li><a>Telefon : 543 204 48 45 </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <div class="single_footer_widget footer_nav">
                        <h4>Galeri</h4>
                        <ul>
                            <li><a>Video Fotoğraf</a></li>
                            <li><a>Yazılım</a></li>
                            <li><a>Edit</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInDown" data-wow-delay=".6s">
                    <div class="single_footer_widget footer_nav">
                        <h4>Konum</h4>
                        <ul>
                            <li><a>Pendik</a></li>
                            <li><a>İstanbul</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="border_top wow fadeInDown" data-wow-delay=".7s"></div>
        <div class="container wow fadeInDown" data-wow-delay=".8s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-8">
                                <p>© Copyright 2022 Design by <a href="#" class="text_underline">Emirhan ÇAPCI</a> </p>
                            </div>
                            <div class="col-lg-6 col-md-4">
                                <div class="social_icon">
                                    <a href="#"><i class="ti-dribbble"></i></a>
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jquery slim -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="assets/vendors/owl_carousel/js/owl.carousel.min.js"></script>
    <!--magnific popup js -->
    <script src="assets/vendors/magnify_popup/jquery.magnific-popup.js"></script>
    <!-- parallax js -->
    <script src="assets/vendors/parallax/jquery.parallax-scroll.js"></script>
    <script src="assets/vendors/parallax/parallax.js"></script>
    <script src="assets/vendors/parallax/breadctumb_parallax.js"></script>
    <!-- wow js -->
    <script src="assets/vendors/wow/wow.min.js"></script>
    <!--gmaps Js-->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDs3mrTgrYd6_hJS50x4Sha1lPtS2T-_JA">
    </script>
    <script src="assets/vendors/gmp3/map.js"></script>
      <!-- owl carousel js -->
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <!-- imagesloaded js -->
    <script src="assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
      <!-- contact js -->
    <script src="assets/vendors/contact/jquery.form.js"></script>
    <script src="assets/vendors/contact/jquery.validate.min.js"></script>
    <script src="assets/vendors/contact/contact.js"></script>
    <!-- custom js -->
    <script src="assets/js/custom.js"></script>
    
</body>

</html>