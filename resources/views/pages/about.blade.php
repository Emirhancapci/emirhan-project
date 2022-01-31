@extends('layout.base')
@section('content')

<section class="breadcrumb_part bg_6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_iner breadcrumb_iner_tittle">
                    <h2>Hakkımızda</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_us_section padding_top pb-0">
    <div class="container">
        <div class="row">
           <div class="col-sm-6">
                    <div class="faq_content collaps_style">
                        <div class="faq_arrordion_content">
                            <div class="accordion" id="faq_arrordion2">
                                <div class="card wow fadeInLeft" data-wow-delay=".4s">
                                    <div class="card-header" id="faq_tittle_6">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#faq_6" aria-expanded="false" aria-controls="faq_6">
                                            Biz Kimiz
                                        </button>
                                    </div>
                                    <div id="faq_6" class="collapse" aria-labelledby="faq_tittle_6"
                                        data-parent="#faq_arrordion2">
                                        <div class="card-body" style="#5f5555 !important">
                                            Dijital gücün farkına yıllar önce varmış, her kesim ve sektörün ihtiyaç
                                            duyduğu kıymetli bilgileri ve hizmetleri bünyesinde barındırarak,
                                            360 derece hizmet veriyoruz.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="card-header" id="faq_tittle_7">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#faq_7" aria-expanded="true" aria-controls="faq_7">
                                            Neler Yapıyoruz
                                        </button>
                                    </div>

                                    <div id="faq_7" class="collapse show" aria-labelledby="faq_tittle_7"
                                        data-parent="#faq_arrordion2">
                                        <div class="card-body" style="#5f5555 !important">
                                            <div>
                                            <b> Grafik Tasarım Ekibimiz </b> ile birlikte şahane işler çıkarıyoruz. Sosyal medya içerikleri, Video kurgu-montaj, Ürün çekimleri ve düzenlenmesi , Afişler ve posterler, Kurumsal kimlik tasarımları ve Logolar gibi tasarıma dair hemen hemen tüm hizmetleri veriyoruz.
                                            </div><br>
                                            <div>
                                            <b>  Dijital Pazarlama Ekibimiz </b>  ile birlikte Google Ads, Instagram, Facebook, Linkedin, Youtube, Mobil uygulama reklamlarınızı kuruyor ve bütçenizi en doğru şekilde kullanıyoruz. Kurduğumuz reklamların takibini yine bizler yapıyoruz, optimizasyonlar ile birlikte hatasız yürütülmesini sağlıyoruz.
                                            </div><br>
                                            <div>
                                            <b> Yazılım & Teknoloji Ekibimiz </b>  ile birlikte sahip olduğumuz yeteneklerimizi ve tecrübelerimizi sizler için en iyi konsepti yaratmak için kullanıyoruz. Web site ve Mobil uygulama yazılımlarına dair ulaşılabilecek en üst noktaya bizimle birlikte yükselin.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card wow fadeInLeft" data-wow-delay=".5s">
                                    <div class="card-header" id="faq_tittle_8">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#faq_8" aria-expanded="false" aria-controls="faq_8">
                                            How we works
                                        </button>
                                    </div>
                                    <div id="faq_8" class="collapse" aria-labelledby="faq_tittle_8"
                                        data-parent="#faq_arrordion2">
                                        <div class="card-body">
                                            I transform thorny problems into elegant solutions using visuals design.
                                            Use this pack off illustrations for any kind of projects from websites and
                                            Lorem ipsum dolor sit amet
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6">
                <div class="about_img pl_45">
                    <img src="assets/img/about.png" alt="#" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end -->

<!-- services part here -->
<section class="services_section padding_top corporate_services_section mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <h5 class="wow fadeInDown" data-wow-delay=".3s">Hizmetlerimiz</h5>
                    <h2 class="wow fadeInDown" data-wow-delay=".5s">Tek Bir Dokunuş ile 360 Etkisi</h2>
                </div>
            </div>
        </div>
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

@endsection