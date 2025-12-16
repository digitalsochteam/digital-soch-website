@extends('frontend.layout.app')

@section('title', 'Contact Us 07208909232 | Digital Soch Private Limited')

@push('extra-head')
    <meta name="description"
        content="Get in touch with Digital Soch Private Limited — your trusted digital marketing partner in Mumbai. (Call 07208909232) or email us to discuss your business goals." />
    <link rel="canonical" href="https://www.digitalsochmedia.com/contact-information" />
    <meta http-equiv="content-language" content="en-us" />
    <meta name="robots" content="index, follow" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="Contact Digital Soch | Digital Marketing Agency in Mumbai (Call:07208909232) | Digital Soch Private
    Limited" />
    <meta property="og:description"
        content="Get in touch with Digital Soch Private Limited — your trusted digital marketing partner in Mumbai. (Call 07208909232) or email us to discuss your business goals." />
    <meta property="og:url" content="https://www.digitalsochmedia.com/contact-information" />
    <meta property="og:site_name" content="Digital Soch Private Limited">
    <meta name="geo.position" content="Mumbai">
    <meta name="geo.placename" content="Andheri">
    <meta name="geo.region" content="400053">
    <meta name="revisit-after" content="7 days">
@endpush

@section(section: 'content')
    <!-- Start of Header section
                                                                                                                                                        ============================================= -->

    <!-- Start of Breadcrumb section
                                                                                                                                                        ============================================= -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">Contact us</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section
                                                                                                                                                        ============================================= -->

    <!-- Start of Contact page section
                                                                                                                                                        ============================================= -->
    <section id="tz-cnt-map" class="tz-cnt-map-sec pt-110 pb-120">
        <div class="container">
            <div class="tz-cnt-map-content">
                <div class="tz-cnt-map-cta">
                    <div class="tz-cnt-cta-item d-flex align-items-center">
                        <div class="item-icon d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="item-text headline pera-content">
                            <h3>Mumbai (Head Office)</h3>
                            <p> 105,Ackruti Star, Midc central road, Andheri east, Mumbai- 400093</p>
                        </div>
                    </div>
                    <div class="tz-cnt-cta-item d-flex align-items-center">
                        <div class="item-icon d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="item-text headline pera-content">
                            <h3>Pune</h3>
                            <p> Balaji Complex, Office Number 301A, Opp Salave Garden Iskon Temple - Gangadham
                                Rd, Pune, Maharashtra 411048</p>
                        </div>
                    </div>
                    <div class="tz-cnt-cta-item d-flex align-items-center">
                        <div class="item-icon d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="item-text headline pera-content">
                            <h3>Email Address:</h3>
                            <p> info@digitalsochmedia.com
                                support@digitalsochmedia.com
                            </p>
                        </div>
                    </div>
                    <div class="tz-cnt-cta-item d-flex align-items-center">
                        <div class="item-icon d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="item-text headline pera-content">
                            <h3>Business Hours:</h3>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM (PST)- Saturday - Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="tz-cnt-map-frame">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.754275298654!2d72.86789617618025!3d19.118432882094897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b60f18b0cd%3A0xd709987cd37f659!2sDigital%20Soch%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1759219228130!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact page section
                                                                                                                                                        ============================================= -->

    <!-- Start of Contact page section
                                                                                                                                                        ============================================= -->
    <section id="tz-cnt-form" class="tz-cnt-form-sec pt-110 pb-120 position-relative"
        data-background="{{ asset('assets/img/bg/cn-bg.jpg') }}">
        <span class="tz-cnt-img top_view position-absolute"><img src="{{ asset('assets/img/about/cn2.png') }}"
                alt=""></span>
        <div class="container">
            <div class="tz-cnt-form-content">
                <div class="tz-section-title headline">
                    <div class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase">
                        Contact Us
                    </div>
                    <h2 class="sec_title  tz-itm-title tz-itm-anim">Let's Start Creating Together!</h2>
                    <div class="tz-cnt-content mt-30">
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <input type="text" name="first_name" placeholder="First Name*" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input type="text" name="last_name" placeholder="Last Name*" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input type="email" name="email" placeholder="Your Email*" required>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input type="text" name="phone" placeholder="Phone Number*" required>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <input type="text" name="subject" placeholder="Your Subject*" required>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <textarea name="message" placeholder="Write your message*" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact page section
                                                                                                                                                        ============================================= -->
@endsection
