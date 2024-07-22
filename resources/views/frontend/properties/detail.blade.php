@extends('frontend.layouts.frontend')

@section('title', 'Property Listings')

@push('styles')

@endpush

@section('content')
            <!--Start Property Details Image Box-->
            <section class="property-details-img-box">
                <div class="container">
                    <div class="property-details-img-box-inner">
                        <div class="property-details-img-bg"
                            style="background-image: url(assets/images/properties/property-details-img-1.jpg);"></div>
                        <div class="icon">
                            <span class="icon-heart"></span>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Property Details Image Box-->

            <!--Start Property Details Area-->
            <section class="property-details-area">
                <div class="container">
                    <div class="property-details-top">
                        <div class="property-details-top__left">
                            <h2>Luxury Villa in Los Angeles</h2>
                            <p>Overgreen Road, Buffalo, New York</p>
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
                                    <h3>$529.60<del>/669.60</del></h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-details-top__right">
                            <a href="tel:123456789">
                                <span class="icon-telephone"></span> +444 000 777 66
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <!--Start Property Details Content-->
                        <div class="col-xl-8">
                            <div class="property-details-content">
                                <div class="text-box1">
                                    <p>Dignissim, et dictum nisl tempor. Sed eleifend justo eu metus fringilla posuere
                                        nec sit amet nunc. In at nibh velit. Sed congue malesuada nibh ut mattis.
                                        <span>Integer eu hendrerit magna.</span> Integer at lacinia leo. Aliquam varius
                                        dignissim urna.</p>
                                </div>
                                <div class="text-box2">
                                    <p><span>Massa nisl, sagittis a pharetra in,</span> vestibulum lobortis turpis.
                                        Proin aliquet convallis purus bibendum ultricies. Aenean sed lobortis diam.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        himenaeos. Maecenas commodo a leo in egestas.</p>
                                </div>
                                <div class="text-box3">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Vestibulum lobortis turpis. Proin aliquet convallis
                                                            purus bibendum ultricies. </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Vestibulum lobortis turpis. Proin aliquet convallis
                                                            purus bibendum ultricies. </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Vestibulum lobortis turpis. Proin aliquet convallis
                                                            purus bibendum ultricies. </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-6">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Vestibulum lobortis turpis. Proin aliquet convallis
                                                            purus bibendum ultricies. </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Vestibulum lobortis turpis. Proin aliquet convallis
                                                            purus bibendum ultricies. </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-mark"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Vestibulum lobortis turpis. Proin aliquet convallis
                                                            purus bibendum ultricies. </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="property-info">
                                    <div class="inner-title">
                                        <h5>Property Details</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <ul>
                                                <li>
                                                    <span>Property ID:</span> TA-9111
                                                </li>
                                                <li>
                                                    <span>Price:</span> $599.00
                                                </li>
                                                <li>
                                                    <span>Property type:</span> Apartment, House,Office
                                                </li>
                                                <li>
                                                    <span>Property status:</span> For Sale
                                                </li>
                                                <li>
                                                    <span>Total Rooms:</span> 5
                                                </li>
                                                <li>
                                                    <span>Bedrooms:</span> 3
                                                </li>
                                                <li>
                                                    <span>Bathrooms:</span> 2
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-6">
                                            <ul>
                                                <li>
                                                    <span>Kitchen:</span> 1
                                                </li>
                                                <li>
                                                    <span>Garage:</span> 1
                                                </li>
                                                <li>
                                                    <span>Store Room:</span> 1
                                                </li>
                                                <li>
                                                    <span>Size:</span> 1600SQFT
                                                </li>
                                                <li>
                                                    <span>Garage size:</span> 500SQFT
                                                </li>
                                                <li>
                                                    <span>Year build:</span> 2022
                                                </li>
                                                <li>
                                                    <span>Label:</span> 3
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-features-box">
                                    <div class="inner-title">
                                        <h5>Features</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="checkboxes">
                                                <input id="check-1" type="checkbox" name="check">
                                                <label for="check-1">Free parking</label>

                                                <input id="check-2" type="checkbox" name="check">
                                                <label for="check-2">Pool</label>

                                                <input id="check-3" type="checkbox" name="check">
                                                <label for="check-3">Free Internet (WiFi)</label>

                                                <input id="check-4" type="checkbox" name="check">
                                                <label for="check-4">Fitness Center Gym</label>

                                                <input id="check-5" type="checkbox" name="check">
                                                <label for="check-5">Evening entertainment</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="checkboxes">
                                                <input id="check-6" type="checkbox" name="check">
                                                <label for="check-6">Air conditioning</label>

                                                <input id="check-7" type="checkbox" name="check">
                                                <label for="check-7">Smoking rooms</label>

                                                <input id="check-8" type="checkbox" name="check" checked="">
                                                <label for="check-8">Bar</label>

                                                <input id="check-9" type="checkbox" name="check" checked="">
                                                <label for="check-9">Coffeeshop</label>

                                                <input id="check-10" type="checkbox" name="check">
                                                <label for="check-10">Barbershop</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="checkboxes">
                                                <input id="check-11" type="checkbox" name="check">
                                                <label for="check-11">TV Rooms</label>

                                                <input id="check-12" type="checkbox" name="check">
                                                <label for="check-12">Spa</label>

                                                <input id="check-13" type="checkbox" name="check">
                                                <label for="check-13">Laundry</label>

                                                <input id="check-14" type="checkbox" name="check">
                                                <label for="check-14">Suites</label>

                                                <input id="check-15" type="checkbox" name="check">
                                                <label for="check-15">VIP room facilities</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="property-details-video-gallery">
                                    <div class="property-details-video-gallery-bg"
                                        style="background-image: url(assets/images/resources/property-details-video-gallery-bg.jpg);">
                                    </div>
                                    <div class="video-gallery-style1">
                                        <div class="icon wow zoomIn animated" data-wow-delay="300ms"
                                            data-wow-duration="1500ms">
                                            <a class="video-popup" title="Video Gallery"
                                                href="https://www.youtube.com/watch?v=G88Eo46nPuA">
                                                <span class="icon-play-buttton"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="property-details-location-box">
                                    <div class="inner-title">
                                        <h5>Location</h5>
                                        <p>13/45 Green Road Panama City New York.</p>
                                    </div>
                                    <div class="map-box">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                            class="property-details-location-map" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="property-details-floor-plans">
                                    <div class="inner-title">
                                        <h5>Floor Plans</h5>
                                    </div>
                                    <div class="floor">
                                        <div class="title">
                                            <h6>1. First Floor</h6>
                                        </div>
                                        <div class="floor-info">
                                            <ul>
                                                <li>Size: <span>1600 Sqft</span></li>
                                                <li>Rooms: <span>700 Sqft</span></li>
                                                <li>Baths: <span>400 Sqft</span></li>
                                                <li>Price: <span>$550.00</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="floor-img-box">
                                        <img src="assets/images/resources/floor-img-box.jpg" alt="">
                                    </div>
                                    <div class="floor">
                                        <div class="title">
                                            <h6>2. Second Floor</h6>
                                        </div>
                                        <div class="floor-info">
                                            <ul>
                                                <li>Size: <span>1600 Sqft</span></li>
                                                <li>Rooms: <span>700 Sqft</span></li>
                                                <li>Baths: <span>400 Sqft</span></li>
                                                <li>Price: <span>$550.00</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!--Start Review Box Holder-->
                                <div class="review-box-holder">
                                    <div class="title">
                                        <h3>3 Reviews</h3>
                                    </div>
                                    <div class="outer-box">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <!--Start single Review-->
                                                <div class="single-review">
                                                    <div class="single-review-box">
                                                        <div class="img-holder">
                                                            <img src="assets/images/resources/review-1.jpg"
                                                                alt="Awesome Image">
                                                        </div>
                                                        <div class="text-holder">
                                                            <div class="top">
                                                                <div class="left">
                                                                    <h3>Kosmi Kotalia</h3>
                                                                    <p>
                                                                        <i class="far fa-clock"></i>
                                                                        39 minits ago
                                                                    </p>
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
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <p>
                                                                    There are many variations of passages of Lorem Ipsum
                                                                    available, site studies project hap jority available
                                                                    some form, by injected humour, or words which.
                                                                </p>
                                                                <div class="repost-reply">
                                                                    <a href="#">
                                                                        <span class="icon-retweet"></span>Repost
                                                                    </a>
                                                                    <a href="#">
                                                                        <span class="icon-reply"></span>Reply
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Review-->

                                                <!--Start single Review-->
                                                <div class="single-review">
                                                    <div class="single-review-box">
                                                        <div class="img-holder">
                                                            <img src="assets/images/resources/review-2.jpg"
                                                                alt="Awesome Image">
                                                        </div>
                                                        <div class="text-holder">
                                                            <div class="top">
                                                                <div class="left">
                                                                    <h3>Lisa Brown</h3>
                                                                    <p>
                                                                        <i class="far fa-clock"></i>
                                                                        39 minits ago
                                                                    </p>
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
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <p>
                                                                    There are many variations of passages of Lorem Ipsum
                                                                    available, site studies project hap jority available
                                                                    some form, by injected humour, or words which.
                                                                </p>
                                                                <div class="repost-reply">
                                                                    <a href="#">
                                                                        <span class="icon-retweet"></span>Repost
                                                                    </a>
                                                                    <a href="#">
                                                                        <span class="icon-reply"></span>Reply
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Review-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Review Box Holder-->

                                <!--Start Add Review Box-->
                                <div class="add-review-box">
                                    <div class="inner-title">
                                        <h3>Add Review</h3>
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
                                    </div>
                                    <form id="add-review-form" action="#">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-box">
                                                            <h5>Full Name</h5>
                                                            <input type="text" name="fname" value=""
                                                                placeholder="Enter Your name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-box">
                                                            <h5>Your Email</h5>
                                                            <input type="email" name="femail" value=""
                                                                placeholder="Email Address" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-box">
                                                            <h5>Discription</h5>
                                                            <textarea name="fcomments" placeholder="Write Your Discription"
                                                                required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="button-box">
                                                            <button class="btn-one" type="submit">
                                                                <span class="txt">
                                                                    Submit Now
                                                                    <i class="icon-plus-sign"></i>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--End Add Review Box-->
                            </div>
                        </div>
                        <!--End Property Details Content-->

                        <div class="col-xl-4">
                            <div class="property-details-sidebar">

                                <!--Start Sidebar Author Info Box-->
                                <div class="sidebar-author-info-box">
                                    <div class="sidebar-author-info-box__inner">
                                        <div class="img-box">
                                            <img src="assets/images/resources/sidebar-info-1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <h5>Alex sundrop lipson</h5>
                                            <p>Sales Manager</p>
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
                                            <ul>
                                                <li>Email: <a href="mailto:yourmail@email.com">alex.lipson@gmail.com</a>
                                                </li>
                                                <li>Phone: <a href="tel:123456789">+555 666 77 88 99</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-center btns-box">
                                        <a class="btn-one" href="#">
                                            <span class="txt">
                                                View Profile
                                                <i class="icon-plus-sign"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <!--End Sidebar Author Info Box-->

                                <!--Start Listed By Form-->
                                <div class="listed-by-form">
                                    <div class="inner-title">
                                        <h5>Listed By</h5>
                                    </div>
                                    <form id="listed-by-form" name="listed-by-form" action="index.html" method="post">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <div class="input-box">
                                                <input type="text" name="name" id="formName" placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <div class="input-box">
                                                <input type="text" name="phone" id="formPhone" placeholder="+880177975888">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="input-box">
                                                <input type="email" name="email" id="formEmail"
                                                    placeholder="Enter Your Mail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <div class="input-box">
                                                <textarea name="message" id="formMessage"
                                                    placeholder="Write a Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="button-box">
                                            <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                <span class="txt">
                                                    send a message
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!--End Listed By Form-->

                                <!--Start Advanced Search -->
                                <div class="advanced-search">
                                    <div class="inner-title">
                                        <h5>Advanced Search</h5>
                                    </div>
                                    <div class="advanced-search-box">
                                        <form action="index.html" method="post" class="clearfix advanced-search-form">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <!--Start Form Group -->
                                                    <div class="clearfix form-group">
                                                        <label>Keywords</label>
                                                        <div class="field-input">
                                                            <input type="text" name="keywords"
                                                                placeholder="What are you looking for?">
                                                        </div>
                                                    </div>
                                                    <!--End Form Group -->
                                                    <!--Start Form Group -->
                                                    <div class="clearfix form-group">
                                                        <label>Type</label>
                                                        <div class="field-input">
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                    <option data-display="Property Type">Property
                                                                        Type
                                                                    </option>
                                                                    <option value="1">Laxury</option>
                                                                    <option value="2">Classic</option>
                                                                    <option value="3">Modern</option>
                                                                    <option value="4">New</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Form Group -->
                                                    <!--Start Form Group -->
                                                    <div class="clearfix form-group">
                                                        <label>Status</label>
                                                        <div class="field-input">
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                    <option data-display="Select Status">
                                                                        Select Status
                                                                    </option>
                                                                    <option value="1">Select Status 01</option>
                                                                    <option value="2">Select Status 02</option>
                                                                    <option value="3">Select Status 03</option>
                                                                    <option value="4">Select Status 04</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Form Group -->
                                                    <!--Start Form Group -->
                                                    <div class="clearfix form-group">
                                                        <label>Bed/Bathrooms</label>
                                                        <div class="field-input">
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                    <option data-display="00 Bed / 00 Bathrooms">
                                                                        00 Bed / 00 Bathrooms
                                                                    </option>
                                                                    <option value="1">05 Bed / 02 Bathrooms</option>
                                                                    <option value="2">02 Bed / 01 Bathrooms</option>
                                                                    <option value="3">07 Bed / 03 Bathrooms</option>
                                                                    <option value="4">01 Bed / 01 Bathrooms</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Form Group -->
                                                    <!--Start Form Group -->
                                                    <div class="clearfix form-group">
                                                        <label>Floors</label>
                                                        <div class="field-input">
                                                            <input type="number" min="1" max="30" step="1" placeholder="1">
                                                        </div>
                                                    </div>
                                                    <!--End Form Group -->
                                                    <!--Start Form Group -->
                                                    <div class="clearfix form-group">
                                                        <label for="currency-field">Price</label>
                                                        <div class="field-input">
                                                            <input type="text" name="currency-field" id="currency-field"
                                                                pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value=""
                                                                data-type="currency" placeholder="$000,000.00">
                                                        </div>
                                                    </div>
                                                    <!--End Form Group -->

                                                    <!--Start Form Group -->
                                                    <div class="clearfix form-group">
                                                        <label>Square Feet</label>
                                                        <div class="field-input">
                                                            <input type="text" placeholder="1600 SQFT  -  2200 SQFT">
                                                        </div>
                                                    </div>
                                                    <!--End Form Group -->

                                                    <!--Start Form Group -->
                                                    <div class="clearfix form-group">
                                                        <label>Year Built</label>
                                                        <div class="field-input">
                                                            <input type="text" placeholder="2005  -  2022">
                                                        </div>
                                                    </div>
                                                    <!--End Form Group -->
                                                    <!--Start Form Group -->
                                                    <div class="clearfix form-group">
                                                        <label>Your Location</label>
                                                        <div class="field-input">
                                                            <div class="select-box">
                                                                <select class="wide">
                                                                    <option data-display="Your Location">
                                                                        Your Location
                                                                    </option>
                                                                    <option value="1">New York</option>
                                                                    <option value="2">California</option>
                                                                    <option value="3">London</option>
                                                                    <option value="4">Maxico</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Form Group -->
                                                    <!--Start Sidebar Features Box-->
                                                    <div class="sidebar-features-box">
                                                        <div class="inner-title">
                                                            <h5>Features</h5>
                                                        </div>
                                                        <div class="scrollbar" id="style-1">
                                                            <div class="force-overflow">
                                                                <div class="checkboxes">
                                                                    <input id="check-20" type="checkbox" name="check">
                                                                    <label for="check-20">Free parking</label>

                                                                    <input id="check-21" type="checkbox" name="check">
                                                                    <label for="check-21">Free Internet (WiFi)</label>

                                                                    <input id="check-22" type="checkbox" name="check"
                                                                        checked>
                                                                    <label for="check-22">Bar</label>

                                                                    <input id="check-23" type="checkbox" name="check"
                                                                        checked>
                                                                    <label for="check-23">Coffeeshop</label>

                                                                    <input id="check-24" type="checkbox" name="check">
                                                                    <label for="check-24">WiFi</label>

                                                                    <input id="check-25" type="checkbox" name="check">
                                                                    <label for="check-25">Refrigerator</label>

                                                                    <input id="check-26" type="checkbox" name="check">
                                                                    <label for="check-26">Outdoor Shower</label>

                                                                    <input id="check-27" type="checkbox" name="check">
                                                                    <label for="check-27">Refrigerator</label>

                                                                    <input id="check-28" type="checkbox" name="check">
                                                                    <label for="check-28">Outdoor Shower</label>

                                                                    <input id="check-29" type="checkbox" name="check">
                                                                    <label for="check-29">Microwave</label>

                                                                    <input id="check-30" type="checkbox" name="check">
                                                                    <label for="check-30">Laundry</label>

                                                                    <input id="check-31" type="checkbox" name="check">
                                                                    <label for="check-31">Smoking rooms</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Sidebar Features Box-->
                                                    <div class="btn-box">
                                                        <button class="btn-one" type="submit"
                                                            data-loading-text="Please wait...">
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
                                <!--End Advanced Search -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--End Property Details Area-->
@endsection
