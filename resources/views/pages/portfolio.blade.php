@extends('layout.base')
@section('content')

    <!-- portfolio content part -->
    <section class="portfolio_details_content style_1 padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="portfolio_content_iner">
                        <h3>Projelerimiz</h3>
                        <p style="font-size: 24px !important;">Bugüne kadar başarı ile tamamladığımız ve çalışmaktan büyük keyif aldığımız projelerden bazıları şunlardır.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio_details_shape" data-parallax='{"x": 0, "y": 50}'>
            <img src="assets/img/icon/testimonial_icon_3.png" alt="#" class="wow fadeInRight" data-wow-delay=".3s">
        </div>
    </section>
    <!-- portfolio content part end -->

    <!-- portfolio list here -->
    <section class="portfolio_grid_style grid_style_1 overflow-hidden section_padding" id="portfolio_grid_style">
        <div class="container-fluid no-gutters p-lg-0">
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".3s">
                    <a class="single_portfolio_part">
                        <img src="assets/img/yazilim-teknoloji.png" alt="#" class="img-fluid">
                        <div class="hover_content">
                            <p> <span>Web Yazılımı</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <a class="single_portfolio_part">
                        <img src="assets/img/yazilim-teknoloji.png" alt="#" class="img-fluid">
                        <div class="hover_content">
                            <p> <span> Web Yazılımı</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".7s">
                    <a class="single_portfolio_part">
                        <img src="assets/img/video-fotograf.png" alt="#" class="img-fluid ">
                        <div class="hover_content">
                            <p> <span>Video Fotoğraf</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".9s">
                    <a class="single_portfolio_part">
                        <img src="assets/img/video-fotograf.png" alt="#" class="img-fluid ">
                        <div class="hover_content">
                            <p> <span> Video Fotoğraf</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".3s">
                    <a class="single_portfolio_part">
                        <img src="assets/img/internet-reklamciligi.png" alt="#" class="img-fluid ">
                        <div class="hover_content">
                            <p> <span> İnternet Programcılığı</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <a class="single_portfolio_part">
                        <img src="assets/img/internet-reklamciligi.png" alt="#" class="img-fluid ">
                        <div class="hover_content">
                            <p> <span> İnternet Programcılığı</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".7s">
                    <a class="single_portfolio_part">
                        <img src="assets/img/grafik-tasarim.png" alt="#" class="img-fluid ">
                        <div class="hover_content">
                            <p> <span> Grafik Tasarım</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInDown" data-wow-delay=".9s">
                    <a class="single_portfolio_part">
                        <img src="assets/img/grafik-tasarim.png" alt="#" class="img-fluid ">
                        <div class="hover_content">
                            <p> <span> Grafik Tasarım</span></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio list end -->
    @endsection