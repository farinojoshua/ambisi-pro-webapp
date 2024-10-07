@extends('frontend.layouts.frontend')

@section('title', 'Home')

@section('content')
      <!--Main Slider Start-->
      <section class="main-slider main-slider-style1">
        <div
          class="swiper-container thm-swiper__slider"
          data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'
        >
          <div class="swiper-wrapper">
            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
              <div
                class="image-layer"
                style="
                  background-image: url(assets/images/slides/hero-1.jpg);
                "
              ></div>
              <div class="container">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="main-slider-content">
                      <div class="round-box"></div>
                      <div class="main-slider-content__inner">
                        <div class="big-title">
                            <h2>
                                Lebih Baik Terlambat <br />
                                <span>Daripada Tidak Sama Sekali</span>
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                Kami percaya bahwa setiap usaha yang dilakukan dengan kesabaran dan konsistensi akan membuahkan hasil. Ambisi Properti siap membantu Anda mewujudkan rumah impian, tak peduli seberapa panjang perjalanan Anda.
                            </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End Single Swiper Slide-->
            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
              <div
                class="image-layer"
                style="
                  background-image: url(assets/images/slides/hero-2.jpg);
                "
              ></div>
              <div class="container">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="main-slider-content">
                      <div class="round-box"></div>
                      <div class="main-slider-content__inner">
                        <div class="big-title">
                            <h2>
                                Mimpimu,<br />
                                Ambisi Kami
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                Setiap impian memiliki perjalanan, dan kami ada untuk mendampingi Anda. Bersama Ambisi Properti, wujudkan mimpi memiliki hunian ideal dengan layanan profesional dan berpengalaman.
                            </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End Single Swiper Slide-->
            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
              <div
                class="image-layer"
                style="
                  background-image: url(assets/images/slides/hero-3.jpg);
                "
              ></div>
              <div class="container">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="main-slider-content">
                      <div class="round-box"></div>
                      <div class="main-slider-content__inner">
                        <div class="big-title">
                            <h2>
                                Temukan Properti <br />
                                Impian Anda
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                Jelajahi berbagai pilihan properti terbaik yang sesuai dengan kebutuhan dan anggaran Anda. Kami akan memandu Anda dalam setiap langkah untuk menemukan tempat tinggal yang sempurna.
                            </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End Single Swiper Slide-->
          </div>

          <!-- If we need navigation buttons -->
          <div class="main-slider__nav">
            <div
              class="swiper-button-prev"
              id="main-slider__swiper-button-next"
            >
              <i class="icon-left-arrow"></i>
            </div>
            <div
              class="swiper-button-next"
              id="main-slider__swiper-button-prev"
            >
              <i class="icon-right-arrow-1"></i>
            </div>
          </div>
        </div>
      </section>
      <!--Main Slider End-->

        <!--Start Property Search Form Area-->
        <section class="property-search-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="search-form-tab-box">
                            <!-- Hanya Tab "Buy" yang diaktifkan -->
                            <div class="search-form-tab__button">
                                <ul class="clearfix tabs-button-box">
                                    <li data-tab="#buy" class="tab-btn-item active-btn-item">
                                        <h3>Buy</h3>
                                    </li>
                                </ul>
                            </div>

                            <div class="search-form-tabs-content-box-outer">
                                <div class="tabs-content-box">
                                    <!--Tab untuk Buy (Hanya yang ini diaktifkan)-->
                                    <div class="tab-content-box-item tab-content-box-item-active" id="buy">
                                        <div class="clearfix search-form-tab-content-box-item">
                                            <form action="{{ route('properties.index') }}" method="GET" class="clearfix search-form">
                                                <ul class="clearfix">
                                                    <!-- Lokasi -->
                                                    <li>
                                                        <div class="clearfix form-group">
                                                            <label>Your Location</label>
                                                            <div class="field-input">
                                                                <input type="text" name="location" placeholder="Enter Location">
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Kamar Tidur -->
                                                    <li>
                                                        <div class="clearfix form-group">
                                                            <label>Bed/Bathrooms</label>
                                                            <div class="field-input">
                                                                <div class="select-box">
                                                                    <select name="bedrooms" class="wide">
                                                                        <option value="">00 Bed / 00 Bathrooms</option>
                                                                        <option value="1">1 Bed / 1 Bath</option>
                                                                        <option value="2">2 Bed / 1 Bath</option>
                                                                        <option value="3">3 Bed / 2 Bath</option>
                                                                        <option value="4">4 Bed / 3 Bath</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Kata Kunci -->
                                                    <li>
                                                        <div class="clearfix form-group">
                                                            <label>Search</label>
                                                            <div class="field-input">
                                                                <input name="keywords" placeholder="Enter Keywords" type="text">
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Year Built -->
                                                    <li>
                                                        <div class="clearfix form-group">
                                                            <label>Year Built</label>
                                                            <div class="field-input">
                                                                <input type="text" name="year_built" placeholder="e.g. 2000 - 2020">
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Tombol Pencarian -->
                                                    <li>
                                                        <div class="btn-box">
                                                            <button class="btn-one" type="submit">
                                                                <span class="txt">Search Home <i class="icon-plus-sign"></i></span>
                                                            </button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <!--Tab lain (Rent & Sell) dihilangkan agar tidak terlihat-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Property Search Form Area-->


        <!--Start properties Style2 Area-->
        <section class="properties-style2-area">
            <div class="auto-container">
                <div class="text-center sec-title">
                    <div class="sub-title">
                        <h6>Browse Hot OFFERS</h6>
                    </div>
                    <h3>New Include Properties</h3>
                </div>
                <div class="row">
                    @foreach($properties as $property)
                    <!--Start Single Properties Box style1-->
                    <!--Start Single Properties Box style1-->
                    <!--Start Single Properties Box style1-->
                    <div class="col-xl-4">
                        <div class="single-properties-box-style1">
                            <!-- Carousel Container -->
                            <div class="img-holder swiper-container property-swiper-{{ $property->property_id }}">
                                <div class="swiper-wrapper">
                                    @foreach (json_decode($property->photos) as $photo)
                                        <div class="swiper-slide">
                                            <img src="{{ asset('storage/' . $photo) }}" alt="{{ $property->name }}" class="rounded img-fluid">
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Optional Navigation Buttons -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>

                            <div class="text-holder">
                                <div class="top">
                                    <div class="dot"></div>
                                    <p>By <a href="#">{{ $property->developer->name }}</a></p>
                                </div>
                                <h3>
                                    <a href="{{ route('properties.show', $property->property_id) }}">{{ $property->name }}</a>
                                </h3>
                                <p>{{ $property->location }}</p>
                                <div class="rating-value-box">
                                    <div class="rating-box">
                                        <ul>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star-1"></span></li>
                                        </ul>
                                        <span class="text">(5.4)</span>
                                    </div>
                                    <div class="value-box">
                                        <h4>Rp{{ number_format($property->price, 0, ',', '.') }}</h4>
                                    </div>
                                </div>
                                <div class="info-box">
                                    <ul>
                                        <li><span class="icon-bed"></span>{{ $property->bedrooms }} Bed</li>
                                        <li><span class="icon-bath-tub"></span>{{ $property->bathrooms }} Bath</li>
                                        <li><span class="icon-selection"></span>{{ $property->building_area }} sq ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Properties Box style1-->

                    <!--End Single Properties Box style1-->

                    <!--End Single Properties Box style1-->
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center properties-style2-area__btns-box">
                            <a class="btn-one" href="{{ route('properties.index') }}">
                                <span class="txt">
                                    View All Property
                                    <i class="icon-plus-sign"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End properties Style2 Area-->

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

        <!--Start Testimonial Style1 Area-->
        <section class="testimonial-style1-area testimonial-element-page-one">
            <div class="container">
                <div class="text-center sec-title">
                    <div class="sub-title">
                        <h6>Our Testimonials</h6>
                    </div>
                    <h3>What Client Says?</h3>
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
@endsection

@push('scripts')
<script>
    // Initialize Swiper for each property
// Initialize Swiper for each property
// Initialize Swiper for each property
document.addEventListener('DOMContentLoaded', function () {
    @foreach($properties as $property)
        new Swiper('.property-swiper-{{ $property->property_id }}', {
            loop: true,
            autoplay: {
                delay: 3000, // Set the delay in milliseconds (3000ms = 3 seconds)
                disableOnInteraction: false, // Autoplay will not be disabled after interaction
            },
            effect: 'coverflow',
            coverflowEffect: {
                rotate: 30, // Rotation angle of slides
                stretch: 10, // Space between slides
                depth: 100, // Slide depth effect
                modifier: 1, // Effect multiplier
                slideShadows: true, // Enables slide shadows
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    @endforeach
});


</script>


@endpush
