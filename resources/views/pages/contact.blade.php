@extends('layout.base')
@section('content')

 <!-- about part here -->
    <section class="contact_section ft_font">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="contact_section_content pr_60 section_padding">
                        <h2 class="wow fadeInLeft" data-wow-delay=".3s">Bize Ulaşın</h2>
                        <p class="wow fadeInLeft" data-wow-delay=".5s">Her türlü dijital işleriniz için bize yazabilirsiniz.</p>
                        <form  class="contact_form" action="{{ route('contact.store') }}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-lg-12 wow fadeInLeft" data-wow-delay=".5s">
                                    <div class="single_contact_form">
                                        <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control cu_input"
                                            placeholder="İsim">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInLeft" data-wow-delay=".6s">
                                    <div class="single_contact_form">
                                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control cu_input"
                                            placeholder="E-Posta">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInLeft" data-wow-delay=".7s">
                                    <div class="single_contact_form">
                                        <textarea name="message" id="message" class="form-control cu_input"
                                            placeholder="Mesaj">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInLeft" data-wow-delay=".8s">
                                    <div class="single_contact_form">
                                        <button type="submit" class="cu_btn btn_3 text-uppercase button-contactForm">Mesaj Gönder</button>
                                    </div>
                                </div>
                                 <div class="col-md-12 mt-2">
                                @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                                @endif
                            </div>

                            <div class="col-md-12 mt-4">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                            </div>
                                @endif
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contactMap">
            <div id="contactMap" data-lat="40.90535182530962" data-lon="29.277743998189745" data-zoom="18"
                data-info="9 Road, Mirpur Dohs, Dhaka." data-marker="assets/img/map_icon.png" data-mlat="40.90535182530962"
                data-mlon="29.277743998189745">
            </div>
        </div>
        <div class="contact_shape_1 wow fadeInLeft" data-wow-delay=".3s">
            <img src="assets/img/icon/testimonial_icon_4.png" alt="#" data-parallax='{"x": 0, "y": -150, "rotateZ":0}'>
        </div>
    </section>
    <!-- about part end -->

    <!-- instructor list part here -->
    <section class="contact_info_section section_padding ft_font section_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h5 class="wow fadeInUp" data-wow-delay=".3s">Bize Ulaşın</h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".5s">İletişim Bilgileri</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single_contact_info">
                        <img src="assets/img/icon/map.png" alt="#">
                        <h4>Ofis Konumu</h4>
                        <p>Sülüntepe, Yunus Emre Cd., 34909 Pendik/İstanbul</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single_contact_info">
                        <img src="assets/img/icon/phn.png" alt="#">
                        <h4>İletişim Numarası</h4>
                        <p> <a href="href='tel:+4641468425'"> +90216 595 21 85</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="single_contact_info">
                        <img src="assets/img/icon/mail.png" alt="#">
                        <h4>E-Posta Adresi</h4>
                        <p> <a href="mailto:info@gedik.edu.tr" target="_blank">info@gedik.edu.tr</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instructor list part end -->

@endsection