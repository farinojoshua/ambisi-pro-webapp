@extends('frontend.layouts.frontend')

@section('title', $property->name)

@section('content')
    <section class="property-details-img-box">
        <div class="container">
            <div class="property-details-img-box-inner">
                @php
                    $photos = json_decode($property->photos);
                @endphp
                @if ($photos && count($photos) > 0)
                    <!-- Display Main Photo -->
                    <div id="main-photo" class="mb-4">
                        <img src="{{ asset('storage/' . $photos[0]) }}" alt="{{ $property->name }}" class="rounded img-fluid w-100" id="largeImage">
                    </div>

                    <!-- Display Thumbnails -->
                    <div class="row">
                        @foreach ($photos as $photo)
                            <div class="col-3">
                                <img
                                    src="{{ asset('storage/' . $photo) }}"
                                    alt="{{ $property->name }}"
                                    class="rounded img-fluid thumbnail-img"
                                    style="cursor: pointer;"
                                    onclick="changeMainPhoto('{{ asset('storage/' . $photo) }}')">
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No photos available.</p>
                @endif
            </div>
        </div>
    </section>

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
                <div class="btn-box">
                    <a href="https://wa.me/628138523432?text={{ urlencode('Halo, saya tertarik dengan properti ' . $property->name . ' yang berlokasi di ' . $property->location . ' dengan harga Rp' . number_format($property->price, 0, ',', '.') . '. Apakah masih tersedia?') }}"
                       class="btn-one btn-whatsapp" target="_blank">
                        <span class="txt">
                            Chat di WhatsApp
                            <i class="icon-plus-sign"></i>
                        </span>
                    </a>
                </div>
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

                        <!-- Facilities Section -->
                        @if($property->facilities)
                        <div class="mt-5 mb-5 sidebar-facilities-box">
                            <div class="inner-title">
                                <h5>Facilities</h5>
                            </div>
                            <div class="mt-3 row">
                                @foreach($property->facilities as $facility)
                                <div class="col-xl-4">
                                    <div class="gap-2 facility-item d-flex align-items-center">
                                        <!-- Font Awesome Check Icon -->
                                        <i class="mr-2 fas fa-check-circle text-success"></i>
                                        <span>{{ $facility }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Nearby Locations Section -->
                        @if($property->nearby_locations)
                        <div class="mb-5 sidebar-nearby-box">
                            <div class="inner-title">
                                <h5>Nearby Locations</h5>
                            </div>
                            <div class="mt-3 row">
                                @foreach($property->nearby_locations as $location)
                                <div class="col-xl-4">
                                    <div class="nearby-item">
                                        <span>{{ $location }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Video Section -->
                        @if($property->video_url)
                        <div class="mt-4 property-video">
                            <h5>Video</h5>
                            <div class="mt-4 map-box">
                                <iframe class="property-details-location-map"
                                        src="{{ str_replace('watch?v=', 'embed/', $property->video_url) }}"
                                        allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        @endif


                        <div class="mt-5 property-details-location-box">
                            <div class="inner-title">
                                <h5>Location</h5>
                                <p>{{ $property->location }}</p>
                            </div>
                            <div class="map-box">
                                @if($property->map_url)
                                    <iframe
                                        src="{{ $property->map_url }}"
                                        class="property-details-location-map" allowfullscreen>
                                    </iframe>
                                @else
                                    <p>No map available.</p>
                                @endif
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

@push('scripts')
    <script>
    function changeMainPhoto(newSrc) {
        document.getElementById('largeImage').src = newSrc;
    }
    </script>
@endpush
