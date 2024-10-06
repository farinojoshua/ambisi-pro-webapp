@extends('frontend.layouts.frontend')

@section('title', 'About')

@section('content')
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                                <h3>About Us</h3>
                            </div>
                            <div class="breadcrumb-menu" data-aos="fade-left" data-aos-easing="linear"
                                data-aos-duration="500">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="active">About</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start About Style1 Area-->
        <section class="about-style1-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="about-style1-img-box">
                            <div class="shape1 float-bob">
                                <img src="assets/images/shapes/shape-1.png" alt="">
                            </div>
                            <div class="shape2 float-bob-y">
                                <img src="assets/images/shapes/shape-1.png" alt="">
                            </div>
                            <div class="round-box rotate-me"></div>
                            <div class="experience-box">
                                <div class="counting">
                                    <h2 class="odometer" data-count="17">00</h2>
                                    <span class="icon-plus-sign plus"></span>
                                </div>
                                <h4>over Experience</h4>
                            </div>
                            <div class="about-style1-img-box__top">
                                <img src="assets/images/about/about-style1-img-1.jpg" alt="">
                            </div>
                            <div class="about-style1-img-box__bottom">
                                <div class="about-style1-img-box__bottom--inner">
                                    <img src="assets/images/about/about-style1-img-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-style1-text-box">
                            <div class="title-box">
                                <div class="sub-title">
                                    <h6>About Us</h6>
                                </div>
                                <h2>Ambisi Properti <br> Rumah Idaman <br> Impian Anda <br> Prioritas Kami.</h2>
                            </div>
                            <div class="inner-text">
                                <p>Ambisi Properti berdiri sejak 2020 dan resmi berbadan hukum pada tahun 2023 dengan nama PT. Ambisi Mandiri Perkasa. Fokus kami adalah menyediakan rumah idaman bagi pencari hunian baru dengan mengutamakan kualitas dan kepuasan pelanggan.</p>
                                <p><strong>Visi:</strong> <br> "Better Late Than Never" <br> Ambisi Properti percaya bahwa usaha yang konsisten akan selalu membuahkan hasil, walaupun terlambat sekalipun. Kami berkomitmen untuk terus berupaya mewujudkan Rumah Impian dengan harga yang terjangkau.</p>
                                <p><strong>Motto:</strong> <br> "Your Dreams, Our Ambitions" <br> Kami menjadikan mimpi Anda sebagai ambisi kami untuk membantu mewujudkan rumah impian Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Style1 Area-->

        <!--Start Achievements Section-->
        <section class="achievements-area">
            <div class="container">
                <div class="text-center sec-title">
                    <div class="sub-title">
                        <h6>Achievements</h6>
                    </div>
                    <h3>Pencapaian Kami</h3>
                </div>
                <div class="row">
                    <!--Start Single Achievement Box-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-achievement-box">
                            <div class="icon">
                                <span class="icon-house"></span> <!-- Bisa diganti dengan ikon lain yang sesuai -->
                            </div>
                            <div class="text">
                                <h4>Sukses Menjual 102 Unit</h4>
                                <p>Cluster The Awa Jagorawi Golf Estate 2021</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Achievement Box-->

                    <!--Start Single Achievement Box-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-achievement-box">
                            <div class="icon">
                                <span class="icon-trophy"></span>
                            </div>
                            <div class="text">
                                <h4>Top 1 Property Broker</h4>
                                <p>2023 di Sentul City, Bogor</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Achievement Box-->

                    <!--Start Single Achievement Box-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-achievement-box">
                            <div class="icon">
                                <span class="icon-money"></span>
                            </div>
                            <div class="text">
                                <h4>Penjualan Puluhan Miliar</h4>
                                <p>Dalam 1 bulan</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Achievement Box-->

                    <!--Start Single Achievement Box-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-achievement-box">
                            <div class="icon">
                                <span class="icon-handshake"></span>
                            </div>
                            <div class="text">
                                <h4>50+ Partner Developer</h4>
                                <p>Dan bank yang bekerjasama dengan kami</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Achievement Box-->
                </div>
            </div>
        </section>
        <!--End Achievements Section-->

        <!--Start Choose Style3 Area-->
        <section class="choose-style3-area">
            <div class="container">
                <div class="text-center sec-title">
                    <div class="sub-title">
                        <h6>Temukan Alasan Memilih Kami</h6>
                    </div>
                    <h3>Mengapa Memilih Properti Kami?</h3>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="owl-carousel owl-theme thm-owl__carousel choose-carousel-one owl-dot-style1"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 30,
                            "nav": false,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 3
                                    },
                                    "1200": {
                                        "items": 4
                                    }
                                }
                            }'>

                            <!--Start Single Choose Style1 Box-->
                            <div class="text-center single-choose-style1-box">
                                <div class="icon">
                                    <span class="icon-trust"></span>
                                </div>
                                <div class="text">
                                    <h3><a href="#">Dipercaya Ribuan Klien</a></h3>
                                    <p>Kami dipercaya oleh ribuan klien untuk membantu mereka mewujudkan rumah impian mereka.</p>
                                </div>
                            </div>
                            <!--End Single Choose Style1 Box-->
                            <!--Start Single Choose Style1 Box-->
                            <div class="text-center single-choose-style1-box">
                                <div class="icon">
                                    <span class="icon-house"></span>
                                </div>
                                <div class="text">
                                    <h3><a href="#">Evaluasi Properti yang Transparan</a></h3>
                                    <p>Kami menyediakan evaluasi properti yang jujur dan menyeluruh, membantu Anda membuat keputusan yang tepat.</p>
                                </div>
                            </div>
                            <!--End Single Choose Style1 Box-->
                            <!--Start Single Choose Style1 Box-->
                            <div class="text-center single-choose-style1-box">
                                <div class="icon">
                                    <span class="icon-payment-method"></span>
                                </div>
                                <div class="text">
                                    <h3><a href="#">Pilihan Properti Beragam</a></h3>
                                    <p>Kami menawarkan berbagai pilihan properti yang sesuai dengan kebutuhan dan anggaran Anda.</p>
                                </div>
                            </div>
                            <!--End Single Choose Style1 Box-->
                            <!--Start Single Choose Style1 Box-->
                            <div class="text-center single-choose-style1-box">
                                <div class="icon">
                                    <span class="icon-contract"></span>
                                </div>
                                <div class="text">
                                    <h3><a href="#">Lokasi yang Strategis</a></h3>
                                    <p>Kami menawarkan properti di lokasi-lokasi terbaik yang sesuai dengan gaya hidup dan kebutuhan Anda.</p>
                                </div>
                            </div>
                            <!--End Single Choose Style1 Box-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Choose Style3 Area-->


        <!--Start Video Gallery Style1 Area-->
        <section class="video-gallery-style1-area">
            <div class="video-gallery-style1__bg"
                style="background-image: url(assets/images/backgrounds/video-gallery-style1-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-gallery-style1">
                            <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <a class="video-popup" title="Video Gallery"
                                    href="https://www.youtube.com/watch?v=G88Eo46nPuA">
                                    <span class="icon-play-buttton"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Video Gallery Style1 Area-->

        <!--Start Testimonial Style1 Area-->
        <section class="testimonial-style1-area pdtop120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-style1__title">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6>Our Testimonials</h6>
                                </div>
                                <h3>What Client Says?</h3>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="#">
                                    <span class="txt">More Reviews</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-style1-content">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-carousel-one owl-dot-style1"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": true,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 2
                                        },
                                        "1200": {
                                            "items": 2
                                        }
                                    }
                                }'>

                                <!--Start Single Testimonial Style1-->
                                <div class="single-testimonial-style1">
                                    <div class="border-box"></div>
                                    <div class="top-box">
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="assets/images/testimonial/testimonial-v1-1.jpg" alt="">
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star-1"></span>
                                                    </li>
                                                </ul>
                                                <span class="text">(5.4)</span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>
                                                Hendr placiera.In Pelle tesque Donec ac quasm nouon elit hendr
                                                placiera.In Pelle tesque a est dm lacinia convkalli. Etiam non quam
                                                sitti amet odio phare.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="client-name">
                                        <h3>Nora Penelope</h3>
                                        <span>B.Tech (CSE) , 2017-2022</span>
                                    </div>
                                </div>
                                <!--End Single Testimonial Style1-->
                                <!--Start Single Testimonial Style1-->
                                <div class="single-testimonial-style1">
                                    <div class="border-box"></div>
                                    <div class="top-box">
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="assets/images/testimonial/testimonial-v1-2.jpg" alt="">
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star-1"></span>
                                                    </li>
                                                </ul>
                                                <span class="text">(5.4)</span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>
                                                Etiam non quam sitti amet Donec ac quasm nouon elit hendr placiera.In
                                                Pelle tesque a est dm lacinia convkalli. Etiam non quam sitti amet odio
                                                phare.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="client-name">
                                        <h3>Silverster Scott</h3>
                                        <span>B.Tech-IT , 2017-2022</span>
                                    </div>
                                </div>
                                <!--End Single Testimonial Style1-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial Style1 Area-->

        <!--Start Partner Area-->
        <section class="partner-area">
            <div class="container">
                <div class="brand-content">
                    <div class="owl-carousel owl-theme thm-owl__carousel partner-carousel" data-owl-options='{
                        "loop": false,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 3
                                },
                                "992": {
                                    "items": 4
                                },
                                "1200": {
                                    "items": 5
                                }
                            }
                        }'>

                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-1-1.png" alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-1-2.png" alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-1-3.png" alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-1-4.png" alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="assets/images/brand/brand-1-5.png" alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Partner Area-->
@endsection
