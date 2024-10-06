@extends('frontend.layouts.frontend')

@section('title', $property->name)

@section('content')
    <!--Start Property Details Image Box-->
    <section class="property-details-img-box">
        <div class="container">
            <div class="property-details-img-box-inner">
                <div class="property-details-img-bg" style="background-image: url({{ asset('storage/' . $property->photo_url) }});"></div>
            </div>
        </div>
    </section>
    <!--End Property Details Image Box-->

    <!--Start Property Details Area-->
    <section class="property-details-area">
        <div class="container">
            <div class="property-details-top">
                <div class="property-details-top__left">
                    <h2>{{ $property->name }}</h2>
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
                    </div>
                    <div class="mt-4 value-box">
                        <h3><strong>Rp{{ number_format($property->price, 0, ',', '.') }}</strong></h3>
                    </div>
                </div>
                <a href="https://wa.me/628138523432?text={{ urlencode('Halo, saya tertarik dengan properti ' . $property->name . ' yang berlokasi di ' . $property->location . ' dengan harga Rp' . number_format($property->price, 0, ',', '.') . '. Apakah masih tersedia?') }}"
                   class="btn-one btn-whatsapp" target="_blank">
                    <span class="txt">Chat di WhatsApp<i class="icon-plus-sign"></i></span>
                </a>
            </div>
            <div class="row">
                <!--Start Property Details Content-->
                <div class="col-xl-8">
                    <div class="property-details-content">
                        <div class="text-box1">
                            <p>{{ $property->description }}</p>
                        </div>

                        <div class="property-info">
                            <div class="inner-title">
                                <h5>Property Details</h5>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <ul>
                                        <li><span>Price:</span> Rp{{ number_format($property->price, 0, ',', '.') }}</li>
                                        <li><span>Property Type:</span> {{ $property->developer->name }}</li>
                                        <li><span>Total Rooms:</span> {{ $property->bedrooms + $property->bathrooms }}</li>
                                        <li><span>Bedrooms:</span> {{ $property->bedrooms }}</li>
                                        <li><span>Bathrooms:</span> {{ $property->bathrooms }}</li>
                                        <li><span>Dining Room:</span> {{ $property->dining_room ?? 'N/A' }}</li>
                                        <li><span>Living Room:</span> {{ $property->living_room ?? 'N/A' }}</li>
                                        <li><span>Garage:</span> {{ $property->garage ? 'Yes' : 'No' }}</li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <ul>
                                        <li><span>Year Built:</span> {{ $property->year_built ?? 'N/A' }}</li>
                                        <li><span>Property Size:</span> {{ $property->building_area }} SQFT</li>
                                        <li><span>Land Size:</span> {{ $property->land_area }} SQFT</li>
                                        <li><span>Electricity:</span> {{ $property->electricity ?? 'N/A' }}</li>
                                        <li><span>Water:</span> {{ $property->water ?? 'N/A' }}</li>
                                        <li><span>Certificate:</span> {{ $property->certificate ?? 'N/A' }}</li>
                                        <li><span>Material (Building):</span> {{ $property->material_building ?? 'N/A' }}</li>
                                        <li><span>Material (Floor):</span> {{ $property->material_floor ?? 'N/A' }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @if($property->facilities)
                        <div class="mb-5 sidebar-features-box">
                            <div class="inner-title">
                                <h5>Features</h5>
                            </div>
                            <div class="row">
                                @foreach(json_decode($property->facilities) as $facility)
                                <div class="col-xl-4">
                                    <div class="checkboxes">
                                        <input id="check-{{ $loop->index }}" type="checkbox" name="check" checked>
                                        <label for="check-{{ $loop->index }}">{{ $facility }}</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <div class="property-details-location-box">
                            <div class="inner-title">
                                <h5>Location</h5>
                                <p>{{ $property->location }}</p>
                            </div>
                            <div class="map-box">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                    class="property-details-location-map" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Property Details Content-->

                <div class="col-xl-4">
                    <div class="property-details-sidebar">
                        <!--Start Sidebar Author Info Box-->
                        <div class="sidebar-author-info-box">
                            <div class="sidebar-author-info-box__inner">
                                <div class="img-box">
                                    <img src="{{ asset('storage/' . $property->developer->logo_url) }}" alt="{{ $property->developer->name }}">
                                </div>
                                <div class="text-box">
                                    <h5>{{ $property->developer->name }}</h5>
                                    <p>Developer</p>
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
                                </div>
                            </div>
                        </div>
                        <!--End Sidebar Author Info Box-->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Property Details Area-->
@endsection
