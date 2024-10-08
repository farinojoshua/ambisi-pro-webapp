@extends('frontend.layouts.frontend')

@section('title', 'Daftar Properti')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                            <h3>Properti</h3>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-left" data-aos-easing="linear"
                            data-aos-duration="500">
                            <ul>
                                <li><a href="{{ route('home') }}">Beranda</a></li>
                                <li class="active">Properti</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Property five-->
    <section class="property-grid">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="property-sidebar-content">
                        <div class="inner-title">
                            <h5>Pencarian Lanjutan</h5>
                        </div>

                        <div class="advanced-search-box">
                            <form action="{{ route('properties.index') }}" method="GET" class="clearfix advanced-search-form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!-- Kata kunci -->
                                        <div class="clearfix form-group">
                                            <label>Kata Kunci</label>
                                            <div class="field-input">
                                                <input type="text" name="keywords" value="{{ request('keywords') }}" placeholder="Apa yang Anda cari?">
                                            </div>
                                        </div>

                                        <!-- Kamar Tidur -->
                                        <div class="clearfix form-group">
                                            <label>Kamar Tidur</label>
                                            <div class="field-input">
                                                <div class="select-box">
                                                    <select name="bedrooms" class="wide">
                                                        <option value="">Pilih Kamar Tidur</option>
                                                        <option value="1" {{ request('bedrooms') == 1 ? 'selected' : '' }}>1 Kamar Tidur</option>
                                                        <option value="2" {{ request('bedrooms') == 2 ? 'selected' : '' }}>2 Kamar Tidur</option>
                                                        <option value="3" {{ request('bedrooms') == 3 ? 'selected' : '' }}>3 Kamar Tidur</option>
                                                        <option value="4" {{ request('bedrooms') == 4 ? 'selected' : '' }}>4 Kamar Tidur</option>
                                                        <option value="5" {{ request('bedrooms') == 5 ? 'selected' : '' }}>5 Kamar Tidur</option>
                                                        <option value="6+" {{ request('bedrooms') == '6+' ? 'selected' : '' }}>6+ Kamar Tidur</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Rentang Harga -->
                                        <div class="clearfix form-group">
                                            <label for="price_range">Rentang Harga</label>
                                            <div class="field-input">
                                                <input type="text" name="price_range" id="price_range" value="{{ request('price_range') }}" placeholder="Rp000.000.000 - Rp000.000.000">
                                            </div>
                                        </div>

                                        <!-- Luas Bangunan -->
                                        <div class="clearfix form-group">
                                            <label>Luas Bangunan</label>
                                            <div class="field-input">
                                                <input type="text" name="square_feet" value="{{ request('square_feet') }}" placeholder="1600 SQFT  -  2200 SQFT">
                                            </div>
                                        </div>

                                        <!-- Tahun Dibangun -->
                                        <div class="clearfix form-group">
                                            <label>Tahun Dibangun</label>
                                            <div class="field-input">
                                                <input type="text" name="year_built" value="{{ request('year_built') }}" placeholder="2005  -  2022">
                                            </div>
                                        </div>

                                        <div class="btn-box">
                                            <button class="btn-one" type="submit">
                                                <span class="txt">
                                                    Cari Sekarang
                                                    <i class="icon-plus-sign"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="property-grid-content-box">
                        <div class="property-item-shorting">
                            <!--Start Left Column-->
                            <div class="left-column">
                                <div class="short-box">
                                    <div class="inner-title">
                                        <h6>Urutkan berdasarkan:</h6>
                                    </div>
                                    <div class="select-box">
                                        <select name="sort" class="wide" onchange="this.form.submit()">
                                            <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Terbaru</option>
                                            <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Harga Terendah</option>
                                            <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Harga Tertinggi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--End Left Column-->
                            <!--Start Right Column-->
                            <div class="right-column">
                                <p><span>{{ $properties->total() }}</span> Properti Ditemukan</p>
                            </div>
                            <!--End Right Column-->
                        </div>

                        <div class="row">
                            @if($properties->isEmpty())
                                <div class="col-xl-12">
                                    <div class="no-properties-message">
                                        <p>Tidak ada properti yang sesuai dengan kriteria pencarian Anda. Silakan coba filter yang berbeda.</p>
                                    </div>
                                </div>
                            @else
                                @foreach($properties as $property)
                                <div class="col-xl-6 col-lg-6">
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
                                            <!-- Navigation Buttons -->
                                            <div class="swiper-button-next swiper-button-next-{{ $property->property_id }}"></div>
                                            <div class="swiper-button-prev swiper-button-prev-{{ $property->property_id }}"></div>
                                        </div>

                                        <!-- Property Details -->
                                        <div class="text-holder">
                                            <div class="top">
                                                <div class="dot"></div>
                                                <p>Oleh <a href="#">{{ $property->developer->name }}</a></p>
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
                                                    <li><span class="icon-bed"></span>{{ $property->bedrooms }} Kamar</li>
                                                    <li><span class="icon-bath-tub"></span>{{ $property->bathrooms }} Kamar Mandi</li>
                                                    <li><span class="icon-selection"></span>{{ $property->building_area }} m²</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                {{ $properties->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Property five-->
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @foreach($properties as $property)
            new Swiper('.property-swiper-{{ $property->property_id }}', {
                loop: true,
                autoplay: {
                    delay: 3000, // Set the delay in milliseconds (3000ms = 3 seconds)
                    disableOnInteraction: false, // Autoplay will not berhenti setelah interaksi
                },
                effect: 'coverflow',
                coverflowEffect: {
                    rotate: 30, // Sudut rotasi slide
                    stretch: 10, // Jarak antar slide
                    depth: 100, // Efek kedalaman slide
                    modifier: 1, // Pengali efek
                    slideShadows: true, // Aktifkan bayangan slide
                },
                navigation: {
                    nextEl: '.swiper-button-next-{{ $property->property_id }}', // Tombol next unik untuk setiap slider
                    prevEl: '.swiper-button-prev-{{ $property->property_id }}', // Tombol prev unik untuk setiap slider
                },
            });
        @endforeach
    });
</script>
@endpush
