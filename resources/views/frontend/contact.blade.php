@extends('frontend.layouts.frontend')

@section('title', 'Contact')

@section('content')
        <!--Google Map Start-->
        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-form">
                            <div class="inner-title">
                                <h5>Write A Comments</h5>
                            </div>
                            <form id="contact-form" name="contact_form" class="default-form2"
                                action="assets/inc/sendmail.php" method="post">

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <div class="input-box">
                                                <input type="text" name="form_name" id="formName"
                                                    placeholder="Full Name" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <div class="input-box">
                                                <input type="email" name="form_email" id="formEmail"
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" id="formPhone"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <div class="input-box">
                                                <input type="text" name="form_subject" value="" id="formSubject"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Discription</label>
                                            <div class="input-box">
                                                <textarea name="form_message" id="formMessage"
                                                    placeholder="Write a Message" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                <span class="txt">
                                                    send a message
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>


                    <div class="col-xl-4">
                        <div class="contact-info-box-style1">
                            <div class="title">
                                <h4>Write A Comments</h4>
                            </div>
                            <div class="contact-info-box-style1__single">
                                <div class="contact-info-box-style1__single-title">
                                    <h5>Email:</h5>
                                </div>
                                <div class="contact-info-box-style1__single-text">
                                    <p class="email1"><a href="mailto:yourmail@email.com">alex.lipson@gmail.com</a></p>
                                    <p class="email2"><a href="mailto:yourmail@email.com">prolan.lipson@gmail.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-box-style1__single">
                                <div class="contact-info-box-style1__single-title">
                                    <h5>Phone:</h5>
                                </div>
                                <div class="contact-info-box-style1__single-text">
                                    <p class="number1"><a href="tel:123456789">+555 666 77 88 99</a></p>
                                    <p class="number2"><a href="tel:123456789">+555 666 77 88 66</a></p>
                                </div>
                            </div>

                            <div class="contact-info-box-style1__single">
                                <div class="contact-info-box-style1__single-title">
                                    <h5>Website:</h5>
                                </div>
                                <div class="contact-info-box-style1__single-text">
                                    <p><a href="https://www.alvi.com">www.alvi.com</a> </p>
                                </div>
                            </div>

                            <div class="contact-info-box-style1__single">
                                <div class="contact-info-box-style1__single-title">
                                    <h5>Address:</h5>
                                </div>
                                <div class="contact-info-box-style1__single-text">
                                    <p class="text1">Overgreen Road, pikasa</p>
                                    <p class="text2">CA/1320 United Kingdom.</p>
                                </div>
                            </div>

                            <div class="contact-info-box-style1__single">
                                <div class="contact-info-box-style1__single-title">
                                    <h5>Follow Us: </h5>
                                </div>
                                <ul class="social-link">
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-facebook-app-symbol"></span></a></li>
                                    <li><a href="#"><span class="icon-google-plus-logo"></span></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Main Contact Form Area-->
@endsection
