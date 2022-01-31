@extends('layout.base')
@section('content')

    <!-- banner part here -->
    <section class="center_portfolio_tittle" id="center_portfolio_tittle">
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide single_portfolio_slider">
                                <a class="swiper_slide_iner bg_1"></a>
                                <h2><a>Video Fotoğraf</a> </h2>
                            </div>
                            <div class="swiper-slide single_portfolio_slider">
                                <a class="swiper_slide_iner bg_2"></a>
                                <h2> <a>Web Yazılımı</a> </h2>
                            </div>
                            <div class="swiper-slide single_portfolio_slider">
                                <a class="swiper_slide_iner bg_3"></a>
                                <h2> <a>Grafik Tasarım</a> </h2>
                            </div>
                            <div class="swiper-slide single_portfolio_slider">
                                <a class="swiper_slide_iner bg_4"></a>
                                <h2><a>İnternet Reklamcılığı</a> </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper_next"></div>
        <div class="swiper_prev"></div>
    </section>
    <!-- about part here -->
<section class="about_us_section padding_top dark_version">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="about_section_img">
                    <div class="about_us_img wow fadeInDown" data-wow-delay=".5s">
                        <img src="assets/img/homebanner1.png" alt="#" class="img-fluid"
                            data-parallax='{"x": 0, "y": -20}'>
                        <img src="assets/img/about_us_img_1_shape.png" alt="#" class="img-fluid about_img_shape"
                            data-parallax='{"x": 0, "y": -50}'>
                    </div>
                    <div class="about_us_img wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/img/homebanner1.png" alt="#" class="img-fluid"
                            data-parallax='{"x": 0, "y": 40}'>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="about_section_content pl_45">
                  {{--  <h5 class="wow fadeInLeft gradient_color text-uppercase" data-wow-delay=">Hakkımızda</h5> --}}
                  
                    <h2 class="wow fadeInLeft" data-wow-delay=".4s">Hayalleriniz için en iyi çözüm</h2>
                    <p class="wow fadeInLeft" data-wow-delay=".5s"> Dijital gücün farkına yıllar önce varmış, her kesim ve sektörün ihtiyaç
                        duyduğu kıymetli bilgileri ve hizmetleri bünyesinde barındırarak, 360 derece
                        hizmet veriyoruz.</p>
                    {{-- <a class="cu_btn animate_btn wow fadeInLeft" data-wow-delay=".6s">Detaylı Bilgi</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end -->

<!-- services part here -->
<section class="services_section dark_version section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay=".3s">
                <div class="single_service_section">
                    <a><img src="assets/img/icon/service_icon_7.svg" alt="#" class="service_icon"></a>
                    <h4 class="horizontal_effect">
                        <a class="tittle_animation" data-hover="GRAFİK TASARIM">GRAFİK TASARIM</a>
                    </h4>
                    <p>Kurumsal kimlik,logo,banner ve reklamlarınızı profesyonel olarak tasarlayalım. </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay=".5s">
                <div class="single_service_section">
                    <a><img src="assets/img/icon/service_icon_8.svg" alt="#" class="service_icon"></a>
                    <h4 class="horizontal_effect">
                        <a class="tittle_animation" data-hover="İNTERNET REKLAMCILIĞI">İNTERNET REKLAMCILIĞI</a>
                    </h4>
                    <p>Google ve sosyal medya hesaplarınızı en verimli şekilde yönetelim.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay=".7s">
                <div class="single_service_section">
                    <a><img src="assets/img/icon/service_icon_6.svg" alt="#" class="service_icon"></a>
                    <h4 class="horizontal_effect">
                        <a class="tittle_animation" data-hover="YAZILIM & TEKNOLOJİ">YAZILIM & TEKNOLOJİ</a>
                    </h4>
                    <p>Hayal ettiğiniz özel projelerinizi ve web sitenizi hayata geçirelim.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-5 wow fadeInLeft" data-wow-delay=".7s">
                <div class="single_service_section">
                    <a><img src="assets/img/icon/play.svg" alt="#" class="service_icon"></a>
                    <h4 class="horizontal_effect">
                        <a class="tittle_animation" data-hover="VİDEO & FOTOĞRAF">VİDEO & FOTOĞRAF</a>
                    </h4>
                    <p>Firmanızın tanıtım videosunu,özel günlere özel içeriklerini çekelim.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-5 wow fadeInLeft" data-wow-delay=".7s">
                <div class="single_service_section">
                    <a><img src="assets/img/icon/service_icon_5.svg" alt="#" class="service_icon"></a>
                    <h4 class="horizontal_effect">
                        <a class="tittle_animation" data-hover="SES & MÜZİK">SES & MÜZİK</a>
                    </h4>
                    <p>Seslendirme ve Mix & Mastering işlerinizi yapalım.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4  mt-5 wow fadeInLeft" data-wow-delay=".7s">
                <div class="single_service_section">
                    <a><img src="assets/img/icon/service_icon_9.svg" alt="#" class="service_icon"></a>
                    <h4 class="horizontal_effect">
                        <a class="tittle_animation" data-hover="YAZI & ÇEVİRİ">YAZI & ÇEVİRİ</a>
                    </h4>
                    <p>Web sitenize özgün içerik üretelim ve çeviri işlerinizi profesyonel olarak gerçekleştirelim.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services part end -->


<!-- cta part part -->
<section class="cta_part dark_version">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="cta_part_content">
                    <h2>Hizmetlerimizden yararlanmak için iletişime geçebilirsiniz.</h2>
                    <a href="https://api.whatsapp.com/send?phone=905432044845" target="_blank" class="cu_btn white_bg"><i class="fab fa-whatsapp"></i> İletişime Geç</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection