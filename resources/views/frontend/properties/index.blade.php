@extends('frontend.layouts.frontend')

@section('title', 'Property Listings')

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                            <h3>Property</h3>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-left" data-aos-easing="linear"
                            data-aos-duration="500">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Property</li>
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
                            <h5>Advanced Search</h5>
                        </div>

                        <div class="advanced-search-box">
                            <form action="{{ route('properties.index') }}" method="GET" class="clearfix advanced-search-form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!-- Kata kunci -->
                                        <div class="clearfix form-group">
                                            <label>Keywords</label>
                                            <div class="field-input">
                                                <input type="text" name="keywords" value="{{ request('keywords') }}" placeholder="What are you looking for?">
                                            </div>
                                        </div>

                                        <!-- Tipe Properti -->
                                        <div class="clearfix form-group">
                                            <label>Type</label>
                                            <div class="field-input">
                                                <div class="select-box">
                                                    <select name="property_type" class="wide">
                                                        <option value="">Property Type</option>
                                                        <option value="Apartment" {{ request('property_type') == 'Apartment' ? 'selected' : '' }}>Apartment</option>
                                                        <option value="House" {{ request('property_type') == 'House' ? 'selected' : '' }}>House</option>
                                                        <option value="Office" {{ request('property_type') == 'Office' ? 'selected' : '' }}>Office</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Status Properti -->
                                        <div class="clearfix form-group">
                                            <label>Status</label>
                                            <div class="field-input">
                                                <div class="select-box">
                                                    <select name="status" class="wide">
                                                        <option value="">Select Status</option>
                                                        <option value="FOR_RENT" {{ request('status') == 'FOR_RENT' ? 'selected' : '' }}>For Rent</option>
                                                        <option value="FOR_SALE" {{ request('status') == 'FOR_SALE' ? 'selected' : '' }}>For Sale</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Kamar Tidur -->
                                        <div class="clearfix form-group">
                                            <label>Bedrooms</label>
                                            <div class="field-input">
                                                <div class="select-box">
                                                    <select name="bedrooms" class="wide">
                                                        <option value="">Select Bedrooms</option>
                                                        <option value="1" {{ request('bedrooms') == 1 ? 'selected' : '' }}>1 Bedroom</option>
                                                        <option value="2" {{ request('bedrooms') == 2 ? 'selected' : '' }}>2 Bedrooms</option>
                                                        <option value="3" {{ request('bedrooms') == 3 ? 'selected' : '' }}>3 Bedrooms</option>
                                                        <option value="4" {{ request('bedrooms') == 4 ? 'selected' : '' }}>4 Bedrooms</option>
                                                        <option value="5" {{ request('bedrooms') == 5 ? 'selected' : '' }}>5 Bedrooms</option>
                                                        <option value="6+" {{ request('bedrooms') == '6+' ? 'selected' : '' }}>6+ Bedrooms</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Rentang Harga -->
                                        <div class="clearfix form-group">
                                            <label for="price_range">Price Range</label>
                                            <div class="field-input">
                                                <input type="text" name="price_range" id="price_range" value="{{ request('price_range') }}" placeholder="Rp000.000.000 - Rp000.000.000">
                                            </div>
                                        </div>

                                        <!-- Luas Bangunan -->
                                        <div class="clearfix form-group">
                                            <label>Square Feet</label>
                                            <div class="field-input">
                                                <input type="text" name="square_feet" value="{{ request('square_feet') }}" placeholder="1600 SQFT  -  2200 SQFT">
                                            </div>
                                        </div>

                                        <!-- Tahun Dibangun -->
                                        <div class="clearfix form-group">
                                            <label>Year Built</label>
                                            <div class="field-input">
                                                <input type="text" name="year_built" value="{{ request('year_built') }}" placeholder="2005  -  2022">
                                            </div>
                                        </div>

                                        <!-- Fitur Properti -->
                                        <div class="sidebar-features-box">
                                            <div class="inner-title">
                                                <h5>Features</h5>
                                            </div>
                                            <div class="features-list">
                                                @php
                                                    $features = ['Free parking', 'Pool', 'Free Internet', 'Fitness Center', 'Air conditioning', 'Bar'];
                                                @endphp
                                                @foreach($features as $index => $feature)
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="feature-{{ $index }}" name="features[]"
                                                               value="{{ $feature }}" {{ in_array($feature, request('features', [])) ? 'checked' : '' }}>
                                                        <label for="feature-{{ $index }}">{{ $feature }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="btn-box">
                                            <button class="btn-one" type="submit">
                                                <span class="txt">
                                                    Search Now
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
                            <!--Start Left Colum-->
                            <div class="left-column">
                                <div class="short-menu">
                                    <div class="inner-title">
                                        <h6>View as:</h6>
                                    </div>
                                    <div class="btn-box">
                                        <button class="grid-view on"><i class="icon-squares"></i></button>
                                        <button class="list-view"><i class="icon-list"></i></button>
                                    </div>
                                </div>
                                <div class="short-box">
                                    <div class="inner-title">
                                        <h6>Sort by:</h6>
                                    </div>
                                    <div class="select-box">
                                        <select name="sort" class="wide" onchange="this.form.submit()">
                                            <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Most Recent</option>
                                            <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price Low to High</option>
                                            <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price High to Low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--End Left Colum-->
                            <!--Start Right Colum-->
                            <div class="right-column">
                                <p><span>{{ $properties->total() }}</span> Properties Found</p>
                            </div>
                            <!--End Right Colum-->
                        </div>

                        <div class="row">
                            @if($properties->isEmpty())
                                <div class="col-xl-12">
                                    <div class="no-properties-message">
                                        <p>No properties found that match your search criteria. Please try different filters.</p>
                                    </div>
                                </div>
                            @else
                                @foreach($properties as $property)
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-properties-box-style1">
                                            <div class="img-holder">
                                                <img src="{{ asset('storage/' . $property->photo_url) }}" alt="{{ $property->name }}">
                                                <div class="overlay-content">
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li class="bg1">For {{ $property->status }}</li>
                                                    </ul>
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-heart"></span>
                                                </div>
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
