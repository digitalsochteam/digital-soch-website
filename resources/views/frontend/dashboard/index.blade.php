@extends('frontend.layout.app')
@section(section: 'content')
    <section id="tz-hero-slider" class="tz-hero-slider-sec">
        <div class="tz-hero-slider-area swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tz-hero-slide-item position-relative">
                        <div class="tz-circle-anim">
                            <svg width="1040" height="1040" viewBox="0 0 1040 1040" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle id="line_path" cx="520" cy="520" r="518.5"
                                    stroke="url(#paint0_linear_753_63)" stroke-width="3" />
                                <defs>
                                    <linearGradient id="paint0_linear_753_63" x1="925" y1="227.5" x2="194.5"
                                        y2="945.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#CBBAFF" />
                                        <stop offset="0.259607" stop-color="#7A7099" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <g id="paper-plane">
                                    <circle cx="12.5" cy="12.5" r="12" fill="#003c66" stroke="#003c66" />
                                    <circle cx="12.5" cy="12.5" r="8.5" fill="white" />
                                </g>
                            </svg>
                        </div>
                        <div class="tz-vect-shape1 position-absolute">
                            <img src="{{ asset('assets/img/shape/s-shape1.png') }}" alt="">
                        </div>
                        <div class="tz-vect-shape2 position-absolute">
                            <img src="{{ asset('assets/img/shape/s-shape2.png') }}" alt="">
                        </div>
                        <div class="tz-vect-shape3 position-absolute">
                            <img src="{{ asset('assets/img/shape/s-shape3.png') }}" alt="">
                        </div>
                        <span class="tz-hs-shape position-absolute"></span>
                        <div class="container">
                            <div class="tz-hs-content d-flex align-items-center justify-content-between">
                                <div class="tz-hs-text headline pera-content">
                                    <div class="tz-hs-slug d-flex align-items-center flex-wrap text-uppercase">
                                        <i class="fa-solid fa-bolt"></i> <span> Welcome to Digital Soch Private
                                            Limited</span>
                                    </div>
                                    <h1 class="hero_title tz-split-1">We Build Ideas Driven
                                        by the Future.
                                    </h1>
                                    <p>we understand the importance of financial planning for individuals and businesses
                                        alike.</p>
                                    <div class="btn-cta-wrap mt-35 d-flex align-items-center">
                                        <div class="hs-btn">
                                            <a href="contact.html"><span>Get Started</span></a>
                                        </div>
                                        <div class="btn-cta">
                                            <a href="tel:2240030857">Hotline: +9122-4003 0857</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz-hs-img-wrap d-flex justify-content-end position-relative">
                                    <div class="item-img1">
                                        <img src="{{ asset('assets/img/hero/hs3.jpg') }}" alt="">
                                    </div>
                                    <div class="item-img2">
                                        <img src="{{ asset('assets/img/hero/hs2.jpg') }}" alt="">
                                    </div>
                                    <div class="item-img3">
                                        <img src="{{ asset('assets/img/hero/hs1.png') }}" alt="">
                                    </div>
                                    <!-- <div class="tz-hs-user d-flex align-items-center justify-content-center ul-li">
                                                                                                                                                                                                                                                                                                                 <ul>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst1.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst2.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst3.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst4.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst5.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst6.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><span>+</span></li>
                                                                                                                                                                                                                                                                                                                 </ul>
                                                                                                                                                                                                                                                                                                              </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tz-hero-slide-item position-relative">
                        <div class="tz-circle-anim">
                            <svg width="1040" height="1040" viewBox="0 0 1040 1040" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle id="line_path" cx="520" cy="520" r="518.5"
                                    stroke="url(#paint0_linear_753_63)" stroke-width="3" />
                                <defs>
                                    <linearGradient id="paint0_linear_753_63" x1="925" y1="227.5" x2="194.5"
                                        y2="945.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#CBBAFF" />
                                        <stop offset="0.259607" stop-color="#7A7099" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <g id="paper-plane">
                                    <circle cx="12.5" cy="12.5" r="12" fill="#003c66" stroke="#003c66" />
                                    <circle cx="12.5" cy="12.5" r="8.5" fill="white" />
                                </g>
                            </svg>
                        </div>
                        <div class="tz-vect-shape1 position-absolute">
                            <img src="assets/img/shape/s-shape1.png" alt="">
                        </div>
                        <div class="tz-vect-shape2 position-absolute">
                            <img src="assets/img/shape/s-shape2.png" alt="">
                        </div>
                        <div class="tz-vect-shape3 position-absolute">
                            <img src="assets/img/shape/s-shape3.png" alt="">
                        </div>
                        <span class="tz-hs-shape position-absolute"></span>
                        <div class="container">
                            <div class="tz-hs-content d-flex align-items-center justify-content-between">
                                <div class="tz-hs-text headline pera-content">
                                    <div class="tz-hs-slug d-flex align-items-center flex-wrap text-uppercase">
                                        <i class="fa-solid fa-bolt"></i> <span> Welcome to Digital Soch Private
                                            Limited</span>
                                    </div>
                                    <h1 class="hero_title tz-split-1">We Build Ideas Driven
                                        by the Future.
                                    </h1>
                                    <p>we understand the importance of financial planning for individuals and businesses
                                        alike.</p>
                                    <div class="btn-cta-wrap mt-35 d-flex align-items-center">
                                        <div class="hs-btn">
                                            <a href="contact.html"><span>Get Started</span></a>
                                        </div>
                                        <div class="btn-cta">
                                            <a href="tel:2240030857">Hotline: +9122-4003 0857</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz-hs-img-wrap d-flex justify-content-end position-relative">
                                    <div class="item-img1">
                                        <img src="{{ asset('assets/img/hero/hs3.jpg') }}" alt="">
                                    </div>
                                    <div class="item-img2">
                                        <img src="{{ asset('assets/img/hero/hs2.jpg') }}" alt="">
                                    </div>
                                    <div class="item-img3">
                                        <img src="{{ asset('assets/img/hero/hs1.png') }}" alt="">
                                    </div>
                                    <!-- <div class="tz-hs-user d-flex align-items-center justify-content-center ul-li">
                                                                                                                                                                                                                                                                                                                 <ul>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst1.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst2.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst3.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst4.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst5.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst6.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><span>+</span></li>
                                                                                                                                                                                                                                                                                                                 </ul>
                                                                                                                                                                                                                                                                                                              </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tz-hero-slide-item position-relative">
                        <div class="tz-circle-anim">
                            <svg width="1040" height="1040" viewBox="0 0 1040 1040" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle id="line_path" cx="520" cy="520" r="518.5"
                                    stroke="url(#paint0_linear_753_63)" stroke-width="3" />
                                <defs>
                                    <linearGradient id="paint0_linear_753_63" x1="925" y1="227.5"
                                        x2="194.5" y2="945.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#CBBAFF" />
                                        <stop offset="0.259607" stop-color="#7A7099" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <g id="paper-plane">
                                    <circle cx="12.5" cy="12.5" r="12" fill="#003c66" stroke="#003c66" />
                                    <circle cx="12.5" cy="12.5" r="8.5" fill="white" />
                                </g>
                            </svg>
                        </div>
                        <div class="tz-vect-shape1 position-absolute">
                            <img src="{{ asset('assets/img/shape/s-shape1.png') }}" alt="">
                        </div>
                        <div class="tz-vect-shape2 position-absolute">
                            <img src="{{ asset('assets/img/shape/s-shape2.png') }}" alt="">
                        </div>
                        <div class="tz-vect-shape3 position-absolute">
                            <img src="{{ asset('assets/img/shape/s-shape3.png') }}" alt="">
                        </div>
                        <span class="tz-hs-shape position-absolute"></span>
                        <div class="container">
                            <div class="tz-hs-content d-flex align-items-center justify-content-between">
                                <div class="tz-hs-text headline pera-content">
                                    <div class="tz-hs-slug d-flex align-items-center flex-wrap text-uppercase">
                                        <i class="fa-solid fa-bolt"></i> <span> Welcome to Digital Soch Private
                                            Limited</span>
                                    </div>
                                    <h1 class="hero_title tz-split-1">We Build Ideas Driven
                                        by the Future.
                                    </h1>
                                    <p>we understand the importance of financial planning for individuals and businesses
                                        alike.</p>
                                    <div class="btn-cta-wrap mt-35 d-flex align-items-center">
                                        <div class="hs-btn">
                                            <a href="contact.html"><span>Get Started</span></a>
                                        </div>
                                        <div class="btn-cta">
                                            <a href="tel:2240030857">Hotline: +9122-4003 0857</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz-hs-img-wrap d-flex justify-content-end position-relative">
                                    <div class="item-img1">
                                        <img src="{{ asset('assets/img/hero/hs3.jpg') }}" alt="">
                                    </div>
                                    <div class="item-img2">
                                        <img src="{{ asset('assets/img/hero/hs2.jpg') }}" alt="">
                                    </div>
                                    <div class="item-img3">
                                        <img src="{{ asset('assets/img/hero/hs1.png') }}" alt="">
                                    </div>
                                    <!-- <div class="tz-hs-user d-flex align-items-center justify-content-center ul-li">
                                                                                                                                                                                                                                                                                                                 <ul>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst1.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst2.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst3.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst4.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst5.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><img src="assets/img/testimonial/tst6.jpg" alt=""></li>
                                                                                                                                                                                                                                                                                                                    <li><span>+</span></li>
                                                                                                                                                                                                                                                                                                                 </ul>
                                                                                                                                                                                                                                                                                                              </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tz-hs-nav">
                <div class="tz-hs-next arrow-nav d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-arrow-up"></i>
                </div>
                <div class="tz-hs-pagi"></div>
                <div class="tz-hs-prev arrow-nav d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-arrow-down"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Hero Slider section
                                                                                                                                                                                                                                                 ============================================= -->
    <!-- Start of Feature section
                                                                                                                                                                                                                                                 ============================================= -->
    <section id="tz-feature" class="tz-feature-sec pt-115 pb-115">
        <div class="tz-section-title headline text-center">
            <div class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase">
                Our Unique Features
            </div>
            <h2 class="sec_title  tz-itm-title tz-itm-anim">Discover Our Unique Features</h2>
        </div>
        <div class="tz-feature-content mt-55 marquee-left">
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/ic1.png') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3><a href="service-single.html">ERP Solutions</a></h3>
                    <p>As a reliable ERP application development company in Mumbai, We offers the best quality enterprise
                        resourcing planning (ERP) software and application development bespoke to your businesses at
                        reasonable prices.</p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/ic2.png') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3><a href="service-single.html">Ecommerce Website</a></h3>
                    <p>Driven by an intense desire to attain maximum client satisfaction, our team of ecommerce website
                        designers design these website to make it a point that the online shopping becomes a rich exalted
                        experience for the end-user.</p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/ic3.png') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3><a href="service-single.html">Domain & Hosting Service</a></h3>
                    <p>Our hosting services also guarantee optimized performance of your website , we provide hosting
                        services for linux, Amazon and windows servers</p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/ic4.png') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3><a href="service-single.html">SMS Marketing</a></h3>
                    <p>We work on various popular web development platforms , Systems developed at Digital Soch are fully
                        responsive and tailored to specific and different business needs and innovation</p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/ic1.png') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3><a href="service-single.html">Email Marketing</a></h3>
                    <p>Email marketing has the power to speak instantly and directly to your customers and can form a vital
                        part in your online marketing strategy, it is cost effective and ensures.your business stands out
                    </p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/ic1.png') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3><a href="service-single.html">Whatsapp Marketing</a></h3>
                    <p>It allows businesses to easily interact with customers by using tools to automate , sort and quickly
                        respond to messages, you can save and reuse messages to answer common question more effectively</p>

                </div>
            </div>
        </div>
    </section>
    <!-- End of Feature section
                                                                                                                                                                                                                             ============================================= -->
    <!-- Start of About section
                                                                                                                                                                                                                             ============================================= -->
    <section id="tz-about" class="tz-about-section pt-120 pb-120">
        <div class="container">
            <div class="tz-about-content d-flex justify-content-between">
                <div class="tz-ab-img-wrap position-relative">
                    <div class="item-play left_view text-uppercase"
                        data-background="{{ asset('assets/img/about/ab1.jpg') }}">
                        <a class="video_box" href="https://www.youtube.com/results?search_query=hp+deskjet+2300+">
                            <span>Watch
                                Full Video</span>
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                    <div class="item-img top_view">
                        <img src="{{ asset('assets/img/about/ab1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="tz-ab-text">
                    <div class="tz-section-title headline pera-content">
                        <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase">
                            About Us
                        </div>
                        <h2 class="sec_title  tz-itm-title tz-itm-anim">Choose Digital Soch as your Digital Partner</h2>
                        <h4 style="margin-top: 15px;font-weight: 500;font-style: italic;">Lets have a look how Digital Soch
                            Stands out from other digital marketing services in mumbai</h4>
                        <p><i class="fa-solid fa-arrow-right"></i> <strong>Specialised & Customised Service:</strong> We
                            help you widen your customer base with targeted and cost effective campaigns. Our digital
                            marketing services in mumbai are highly acclaimed and our long list of clients prove our ability
                            to craft the right experiences for your customers</p>
                        <p><i class="fa-solid fa-arrow-right"></i> <strong>Complete Digital Marketing Plan:</strong>
                            Splitting your marketing needs accross the different digital marketing firms in mumbai is not
                            only tedious and time consuming , We at digital soch , offers a wide range of services designed
                            to cater each and every aspect of your online presence</p>
                    </div>
                    <!-- <div class="tz-ab-ft-wrap  d-flex align-items-center">
                                                                                                                                                                                                                                         <div class="item-icon d-flex align-items-center justify-content-center">
                                                                                                                                                                                                                                            <img src="assets/img/icon/ic5.svg" alt="">
                                                                                                                                                                                                                                         </div>
                                                                                                                                                                                                                                         <div class="item-text headline pera-content">
                                                                                                                                                                                                                                            <h3>Best Technical Solution</h3>
                                                                                                                                                                                                                                            <p>Nanotechnology immersion along the information high will close the loop on focusing solely</p>
                                                                                                                                                                                                                                         </div>
                                                                                                                                                                                                                                      </div> -->
                    <div class="tz-btn-1 mt-40">
                        <a href="#."><span>Learn More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About section
                                                                                                                                                                                                                 ============================================= -->
    <!-- Start of Service section
                                                                                                                                                                                                          ============================================= -->
    <section id="tz-service" class="tz-service-sec pt-115 pb-115">
        <div class="container">
            <div class="tz-section-title headline text-center">
                <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase" style="color:white;">
                    Our Services
                </div>
                <h2 class="sec_title tz-itm-title tz-itm-anim">Our Unique Services</h2>
                <p>
                    Our team is dedicated to delivering exceptional IT solutions tailored to meet the unique needs of each
                    client.
                </p>
            </div>

            <div class="tz-service-content mt-60">
                @foreach (getRandomProductWithUniqueSubcategory(count: 4) as $i => $product)
                    <div class="tz-ser1-item top_view_2 d-flex align-items-center">
                        <div class="item-serial">
                            {{ sprintf('%02d.', $i + 1) }}
                        </div>

                        <div class="item-img-text headline pera-content d-flex align-items-center">
                            <div class="item-img position-relative">
                                <div class="inner-img">
                                    <img src="{{ Storage::url($product->product_image) }}" />
                                </div>
                            </div>

                            <div class="item-text headline pera-content">
                                <h3 class="ser_title">
                                    <a href="{{ route('product.show', str_replace(' ', '_', $product->product)) }}">
                                        {{ $product->product }}
                                    </a>
                                </h3>

                                <p>{{ $product->product_subheading }}</p>
                                <div class="tz-btn-1">
                                    <a href="{{ route('product.show', str_replace(' ', '_', $product->product)) }}">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>







    <!-- End of Service section
                                                                                                                                                                                                             ============================================= -->

    <!-- Start of Cta section
                                                                                                                                                                                                             ============================================= -->
    <section id="tz-cta" class="tz-cta-sec">
        <div class="tz-cta-content  position-relative pt-120 pb-120 ">
            <span class="tz-cta-shape1 position-absolute"><img src="{{ asset('assets/img/shape/c-shape1.png') }}"
                    alt=""></span>
            <span class="tz-cta-shape2 position-absolute"><img src="{{ asset('assets/img/shape/c-shape2.png') }}"
                    alt=""></span>
            <span class="tz-cta-shape3 top_view_3 position-absolute"><img
                    src="{{ asset('assets/img/shape/c-shape3.png') }}" alt=""></span>
            <div class="tz-cta-img-wrap d-flex">
                <div class="img-wrap1 slide_view_1">
                    <div class="tz-cta-img1"><img src="{{ asset('assets/img/about/cta1.jpg') }}" alt=""></div>
                    <div class="tz-cta-img1"><img src="{{ asset('assets/img/about/cta3.jpg') }}" alt=""></div>
                </div>
                <div class="img-wrap2 slide_view_2">
                    <div class="tz-cta-img1"><img src="{{ asset('assets/img/about/cta2.jpg') }}" alt=""></div>
                    <div class="tz-cta-img1"><img src="{{ asset('assets/img/about/cta4.jpg') }}" alt=""></div>
                </div>
            </div>
            <div class="container">
                <div class="tz-section-title headline pera-content">
                    <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase">
                        Book A Consultancy
                    </div>
                    <h2 class="sec_title  tz-itm-title tz-itm-anim">Our mission is to look after
                        the financial best interests
                        with automation
                    </h2>
                </div>
                <div class="tz-btn-1 mt-40">
                    <a href="contact.html"><span>Book a Service</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Cta section
                                                                                                                                                                                             ============================================= -->

    <!-- Start of Testimonial section
                                                                                                                                                                                             ============================================= -->
    <section id="tz-testimonial" class="tz-testimonial-sec pt-115 position-relative">
        <span class="tz-testi-shape position-absolute"><img src="assets/img/shape/bottom-shape.svg"></span>
        <span class="tz-testi-bg zoom_view position-absolute"><img src="assets/img/bg/tst-bg.jpg"></span>
        <div class="container">
            <div class="tz-section-title headline text-center pera-content">
                <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase">
                    Testimonial
                </div>
                <h2 class="sec_title  tz-itm-title tz-itm-anim">Our Clients Share Their
                    Success Stories.
                </h2>
            </div>
            <div class="tz-testi-content position-relative">
                <div class="tz-testi-slide swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tz-testi-item">
                                <div class="inner-item-wrap">
                                    <div class="item-icon-text d-flex">
                                        <div class="item-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                        <div class="item-text">
                                            “Digital Soch is very knowledgeable in the digital marketing Services. I would
                                            like to recommend Digital Soch to my friends and business networks.”
                                        </div>
                                    </div>
                                    <div class="item-author d-flex align-items-center justify-content-between">
                                        <div class="author-img-text d-flex align-items-center">
                                            <div class="item-img">
                                                <img src="{{ asset('assets/img/testimonial/tst1.jpg') }}" alt="">
                                            </div>
                                            <div class="item-text headline">
                                                <h3>Ms. Swati</h3>
                                                <span>Mktg Manager, Safal Institute</span>
                                            </div>
                                        </div>
                                        <div class="author-rate ul-li">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tz-testi-item">
                                <div class="inner-item-wrap">
                                    <div class="item-icon-text d-flex">
                                        <div class="item-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                        <div class="item-text">
                                            “Digital Soch were great to work with on our new website. Any time I had a
                                            question or adjustment to the site team was quick to respond...”
                                        </div>
                                    </div>
                                    <div class="item-author d-flex align-items-center justify-content-between">
                                        <div class="author-img-text d-flex align-items-center">
                                            <div class="item-img">
                                                <img src="{{ asset('assets/img/testimonial/tst2.jpg') }}" alt="">
                                            </div>
                                            <div class="item-text headline">
                                                <h3>Mr. Victor Sable</h3>
                                                <span>CEO, Incorporated Pride</span>
                                            </div>
                                        </div>
                                        <div class="author-rate ul-li">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tz-testi-item">
                                <div class="inner-item-wrap">
                                    <div class="item-icon-text d-flex">
                                        <div class="item-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                        <div class="item-text">
                                            “A reputed company needs a reputed digital marketing firm to increase their
                                            Brand Value and We’re quite satisfied with Digital Soch involvement in our SEO
                                            process.”
                                        </div>
                                    </div>
                                    <div class="item-author d-flex align-items-center justify-content-between">
                                        <div class="author-img-text d-flex align-items-center">
                                            <div class="item-img">
                                                <img src="{{ asset('assets/img/testimonial/tst3.jpg') }}" alt="">
                                            </div>
                                            <div class="item-text headline">
                                                <h3>Mr. Rahul Pathak</h3>
                                                <span>MD, KRP Infrastructure</span>
                                            </div>
                                        </div>
                                        <div class="author-rate ul-li">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="tz-testi-item">
                                <div class="inner-item-wrap">
                                    <div class="item-icon-text d-flex">
                                        <div class="item-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                        <div class="item-text">
                                            “We would like to express our appreciation for the SEO services rendered to us.
                                            We would like to continue the same with Digital Soch. Thanks”
                                        </div>
                                    </div>
                                    <div class="item-author d-flex align-items-center justify-content-between">
                                        <div class="author-img-text d-flex align-items-center">
                                            <div class="item-img">
                                                <img src="{{ asset('assets/img/testimonial/tst3.jpg') }}" alt="">
                                            </div>
                                            <div class="item-text headline">
                                                <h3>Capt. Sandeep Sharma</h3>
                                                <span>RSM Ships Pvt. Ltd.</span>
                                            </div>
                                        </div>
                                        <div class="author-rate ul-li">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="tz-testi-item">
                                <div class="inner-item-wrap">
                                    <div class="item-icon-text d-flex">
                                        <div class="item-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                        <div class="item-text">
                                            “DIGITAL SOCH has a great team of developers! They complied with every one of my
                                            (specific) requests and were patient, helpful and cooperative.”
                                        </div>
                                    </div>
                                    <div class="item-author d-flex align-items-center justify-content-between">
                                        <div class="author-img-text d-flex align-items-center">
                                            <div class="item-img">
                                                <img src="{{ asset('assets/img/testimonial/tst3.jpg') }}" alt="">
                                            </div>
                                            <div class="item-text headline">
                                                <h3>Mr. Rakesh Joshi</h3>
                                                <span>Owner, Turning Point Gems</span>
                                            </div>
                                        </div>
                                        <div class="author-rate ul-li">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="tz-testi-item">
                                <div class="inner-item-wrap">
                                    <div class="item-icon-text d-flex">
                                        <div class="item-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                        <div class="item-text">
                                            “I had a very pleasant experience and would hire them again. My site is now easy
                                            for me to manage and mobile-friendly. Super stoked and am a happy customer!!”
                                        </div>
                                    </div>
                                    <div class="item-author d-flex align-items-center justify-content-between">
                                        <div class="author-img-text d-flex align-items-center">
                                            <div class="item-img">
                                                <img src="{{ asset('assets/img/testimonial/tst3.jpg') }}" alt="">
                                            </div>
                                            <div class="item-text headline">
                                                <h3>Mr. Kulin Sampat</h3>
                                                <span>Trustee, Shyam Kunj Banquet Hall</span>
                                            </div>
                                        </div>
                                        <div class="author-rate ul-li">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="tz-testi-item">
                                <div class="inner-item-wrap">
                                    <div class="item-icon-text d-flex">
                                        <div class="item-icon d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                        <div class="item-text">
                                            “DIGITAL SOCH, never hesitated to go an extra mile to assist even when the
                                            request was beyond the scope of the project. Will favourably consider their
                                            service in future.”
                                        </div>
                                    </div>
                                    <div class="item-author d-flex align-items-center justify-content-between">
                                        <div class="author-img-text d-flex align-items-center">
                                            <div class="item-img">
                                                <img src="{{ asset('assets/img/testimonial/tst3.jpg') }}" alt="">
                                            </div>
                                            <div class="item-text headline">
                                                <h3>Mr. Paresh Gor</h3>
                                                <span>Owner, Maxcom</span>
                                            </div>
                                        </div>
                                        <div class="author-rate ul-li">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tz-testi-nav">
                    <div class="tz-tst-next arrow-nav d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="tz-tst-prev arrow-nav d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonial section
                                                                                                                                                                                 ============================================= -->

    <!-- Start of Sponsor section
                                                                                                                                                                                 ============================================= -->
    <section id="tz-sponsor" class="tz-sponsor-sec pb-105">
        <div class="tz-sponsor-content marquee-right">
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/sponsor/sp1.svg') }}" alt="">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/sponsor/sp2.svg') }}" alt="">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/sponsor/sp3.svg') }}" alt="">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/sponsor/sp4.svg') }}" alt="">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/sponsor/sp5.svg') }}" alt="">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/sponsor/sp6.svg') }}" alt="">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/sponsor/sp6.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Sponsor section
                                                                                                                                                     ============================================= -->
@endsection
