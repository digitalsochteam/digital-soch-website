@extends('frontend.layout.app')



@section(section: 'content')


    {{-- Backdrop Overlay --}}
    @if (session('success') || session('info') || session('warning') || session('error'))
        <div class="home-alert-backdrop" id="homeAlertBackdrop"></div>
    @endif

    {{-- Enhanced Success Popup --}}
    @if (session('success'))
        <div class="home-alert-popup home-custom-alert home-custom-alert-success" role="alert" id="homeAlertPopup">
            <button type="button" class="btn-close home-custom-btn-close" onclick="closeHomeAlert()"
                aria-label="Close"></button>
            <div class="home-alert-content">
                <div class="home-alert-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <h5 class="home-alert-title">Success!</h5>
                <p class="home-alert-message">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    {{-- Enhanced Info Popup --}}
    @if (session('info'))
        <div class="home-alert-popup home-custom-alert home-custom-alert-info" role="alert" id="homeAlertPopup">
            <button type="button" class="btn-close home-custom-btn-close" onclick="closeHomeAlert()"
                aria-label="Close"></button>
            <div class="home-alert-content">
                <div class="home-alert-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                </div>
                <h5 class="home-alert-title">Information</h5>
                <p class="home-alert-message">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    {{-- Enhanced Warning Popup --}}
    @if (session('warning'))
        <div class="home-alert-popup home-custom-alert home-custom-alert-warning" role="alert" id="homeAlertPopup">
            <button type="button" class="btn-close home-custom-btn-close" onclick="closeHomeAlert()"
                aria-label="Close"></button>
            <div class="home-alert-content">
                <div class="home-alert-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                        </path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                </div>
                <h5 class="home-alert-title">Warning</h5>
                <p class="home-alert-message">{{ session('warning') }}</p>
            </div>
        </div>
    @endif

    {{-- Enhanced Error Popup --}}
    @if (session('error'))
        <div class="home-alert-popup home-custom-alert home-custom-alert-error" role="alert" id="homeAlertPopup">
            <button type="button" class="btn-close home-custom-btn-close" onclick="closeHomeAlert()"
                aria-label="Close"></button>
            <div class="home-alert-content">
                <div class="home-alert-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                </div>
                <h5 class="home-alert-title">Error!</h5>
                <p class="home-alert-message">{{ session('error') }}</p>
            </div>
        </div>
    @endif

    <section id="tz-hero-slider" class="tz-hero-slider-sec">
        <div class="tz-hero-slider-area swiper-container">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
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

                            {{-- Background Shapes --}}
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
                                            <i class="fa-solid fa-bolt"></i>
                                            <span>Welcome to Digital Soch Private Limited</span>
                                        </div>
                                        <h1 class="hero_title tz-split-1">{{ $slider->title }}</h1>
                                        <p>{{ $slider->description }}</p>

                                        <div class="btn-cta-wrap mt-35 d-flex align-items-center">
                                            <div class="hs-btn">
                                                <a
                                                    href="{{ $slider->tablename == 'product' ? route('product.show', $slider->slug) : route('package.show', $slider->slug) }}"><span>Get
                                                        Started</span></a>
                                            </div>
                                            {{-- <div class="btn-cta">
                                                <a href="tel:2240030857">Hotline: +9122-4003 0857</a>
                                            </div> --}}
                                        </div>
                                    </div>

                                    {{-- Hero Images --}}
                                    <div class="tz-hs-img-wrap d-flex justify-content-end position-relative">
                                        {{-- <div class="item-img1">
                                            <img src="{{ $slide['image1'] }}" alt="">
                                        </div>
                                        <div class="item-img2">
                                            <img src="{{ $slide['image2'] }}" alt="">
                                        </div>
                                        <div class="item-img3">
                                            <img src="{{ $slide['image3'] }}" alt="">
                                        </div> --}}
                                        @if ($slider->image_one)
                                            <div class="item-img1">
                                                <img src="{{ $slider->image_one ? asset('storage/' . $slider->image_one) : asset('assets/img/default.jpg') }}"
                                                    alt="{{ $slider->title }}">
                                            </div>
                                        @endif
                                        @if ($slider->image_two)
                                            <div class="item-img2">
                                                <img src="{{ Storage::url($slider->image_two) }}" alt="">
                                            </div>
                                        @endif
                                        @if ($slider->image_symbol)
                                            <div class="item-img3">
                                                <img src="{{ Storage::url($slider->image_symbol) }}" alt="">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Slider Navigation --}}
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
                    <img src="{{ asset('assets/img/icon/1.jpg') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3>Adword</h3>
                    <p>We manage and optimize your advertising campaigns across Google, Meta, and LinkedIn — ensuring every
                        click counts. Get higher conversions, lower costs, and detailed performance insights.
                    </p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/2.jpg') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3>SEO</h3>
                    <p>Enhance your website's visibility with tailored SEO strategies. We focus on quality content, site
                        performance, and authority building to drive sustainable, long-term growth.</p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/3.jpg') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3>ERP Solutions</h3>
                    <p>As a reliable ERP application development company in Mumbai, We offers the best quality enterprise
                        resourcing planning (ERP) software and application development bespoke to your businesses at
                        reasonable prices.</p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/4.jpg') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3>Ecommerce Website</h3>
                    <p>Driven by an intense desire to attain maximum client satisfaction, our team of ecommerce website
                        designers design these website to make it a point that the online shopping becomes a rich exalted
                        experience for the end-user.</p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/5.jpg') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3>Domain & Hosting Service</h3>
                    <p>Our hosting services also guarantee optimized performance of your website , we provide hosting
                        services for linux, Amazon and windows servers</p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/6.jpg') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3>SMS Marketing</h3>
                    <p>We work on various popular web development platforms , Systems developed at Digital Soch are fully
                        responsive and tailored to specific and different business needs and innovation</p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/7.jpg') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3>Email Marketing</h3>
                    <p>Email marketing has the power to speak instantly and directly to your customers and can form a vital
                        part in your online marketing strategy, it is cost effective and ensures.your business stands out
                    </p>

                </div>
            </div>
            <div class="tz-ft1-item">
                <div class="item-icon">
                    <img src="{{ asset('assets/img/icon/8.jpg') }}" alt="">
                </div>
                <div class="item-text headline pera-content">
                    <h3>Whatsapp Marketing</h3>
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
                        <a class="video_box" href="https://www.youtube.com/watch?v=fhxJcuDtCBU">
                            <span>Watch
                                Full Video</span>
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                    <div class="item-img top_view">
                        <img src="{{ asset('assets/img/bg/ab1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="tz-ab-text">
                    <div class="tz-section-title headline pera-content">
                        <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase">
                            About Us
                        </div>
                        <h2 class="sec_title  tz-itm-title tz-itm-anim">Choose Digital Soch as your Digital Partner</h2>
                        <h4 style="margin-top: 15px;font-weight: 500;font-style: italic;">Experience the difference with
                            Digital Soch — a trusted name among digital marketing agencies in Mumbai.</h4>
                        <p><strong>Specialised & Customised Service:</strong> At
                            Digital Soch, we focus on helping businesses expand their customer base through highly targeted
                            and cost-efficient campaigns. Our digital marketing expertise in Mumbai is widely recognized,
                            and our growing portfolio of satisfied clients reflects our ability to design strategies that
                            deliver measurable results and enhance customer engagement.</p>
                        <p><strong>Comprehensive Digital Marketing
                                Solutions:</strong>
                            Coordinating multiple marketing agencies can be complex and time-consuming. Digital Soch
                            simplifies this process by offering a complete range of digital marketing services under one
                            roof. From strategy and execution to analysis and optimization, we ensure that every aspect of
                            your online presence works seamlessly to achieve your business objectives.</p>
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
                        <a href="{{ route('about') }}"><span>Learn More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ============================================= -->
    <!-- Start of Service section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ============================================= -->
    <section id="tz-service" class="tz-service-sec pt-115 pb-115" {{-- style="background-image: url('{{ asset('assets/img/bg/sig.jpg') }}'); background-size: cover; background-position: center;"> --}}
        style="background-color: var(--tz-prime-c);">
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
                <div class="product-grid">
                    @foreach ($selectedProducts as $product)
                        <div class="product-card">
                            <div class="inner-img-unique">

                                <img src="{{ Storage::url($product->product_image) }}" alt="{{ $product->product }}"
                                    loading="lazy" />

                                <!-- Quick View Button -->
                                <a href="{{ route('product.show', $product->slug) }}" class="quick-view-btn">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 5C7 5 2.73 8.11 1 12.5 2.73 16.89 7 20 12 20s9.27-3.11 11-7.5C21.27 8.11 17 5 12 5zm0 12.5c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                                    </svg>
                                    Quick View
                                </a>
                            </div>

                            <div class="item-text-unique headline pera-content text-center">
                                <h3 class="ser_title_unique" style="font-weight: 600;">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        {{ $product->product ?? $product->subcategory }}
                                    </a>
                                </h3>

                                <p>{{ Str::limit($product->product_subheading, 120) }}</p>

                                <div class="tz-btn-1-unique">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        <span>Read More</span>
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



    <!-- End of Service section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ============================================= -->

    <!-- Start of Cta section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ============================================= -->
    <section id="tz-cta" class="tz-cta-sec" style="padding-top: 80px;">
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
                    <a href="{{ route('contact') }}"><span>Book a Service</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Cta section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ============================================= -->

    <!-- Start of Testimonial section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ============================================= -->
    <section id="tz-testimonial" class="tz-testimonial-sec pt-115 position-relative">
        <span class="tz-testi-shape position-absolute"><img src="assets/img/shape/bottom-shape.svg"
                alt="bottom shape"></span>
        <span class="tz-testi-bg zoom_view position-absolute"><img src="assets/img/bg/tst-bg.jpg"
                alt="background image"></span>
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

                        @forelse ($testimonials as $t)
                            <div class="swiper-slide">
                                <div class="tz-testi-item">
                                    <div class="inner-item-wrap">
                                        <div class="item-icon-text d-flex">
                                            <div class="item-icon d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-quote-right"></i>
                                            </div>
                                            <div class="item-text">
                                                “{{ $t->review }}”
                                            </div>
                                        </div>
                                        <div class="item-author d-flex align-items-center justify-content-between">
                                            <div class="author-img-text d-flex align-items-center">
                                                <div class="item-img">
                                                    <img src="{{ $t->image ? asset('storage/' . $t->image) : asset('assets/img/testimonial/default.jpg') }}"
                                                        alt="{{ $t->name }}">
                                                </div>
                                                <div class="item-text headline">
                                                    <h3>{{ $t->name }}</h3>
                                                    <span>{{ $t->designation }}</span>
                                                </div>
                                            </div>
                                            <div class="author-rate ul-li">
                                                <ul>
                                                    @for ($i = 1; $i <= $t->star; $i++)
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <div class="tz-testi-item">
                                    <div class="inner-item-wrap text-center p-4">
                                        <p class="mb-0 text-muted">
                                            No testimonials available at the moment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
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


    <section id="tz-sponsor" class="tz-sponsor-sec pb-80 mt-80">
        <div class="tz-sponsor-content marquee-right">
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/1.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/2.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/3.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/4.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/5.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/6.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/7.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/8.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/9.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/10.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
            <div class="tz-sponsor-item">
                <div class="item-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/company/11.jpg') }}" alt="Sponsor Logo">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Sponsor section============================================= -->

    <!-- Start of Blog section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ============================================= -->
    <section id="tz-blog3" class="tz-blog3-sec pt-115 pb-80 position-relative">
        <span class="tz-blog3-shape1 slide_view_1 position-absolute">
            <img src="{{ asset('assets/img/shape/box-1.svg') }}" alt="">
        </span>
        <span class="tz-blog3-shape2 slide_view_2 position-absolute">
            <img src="{{ asset('assets/img/shape/tri-1.svg') }}" alt="">
        </span>
        <span class="tz-blog3-shape3 top_view position-absolute">
            <img src="{{ asset('assets/img/shape/circle8.svg') }}" alt="">
        </span>

        <div class="container">
            <div class="tz-section-title headline text-center pera-content">
                <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase">
                    recent blog post
                </div>
                <h2 class="sec_title tz-itm-title tz-itm-anim">Read our latest blog</h2>
                <p>Our team is dedicated to delivering exceptional IT solutions tailored to meet the unique needs of each
                    client.</p>
            </div>

            <div class="tz-blog3-content mt-65">
                <div class="row justify-content-center">
                    @forelse ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="tz-blog3-item">
                                <div class="item-img">
                                    <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/img/blog/blg1.jpg') }}"
                                        alt="{{ $blog->title }}">
                                </div>
                                <div class="item-text headline">
                                    <div class="item-meta">
                                        <a href="{{ route('blog.show', $blog->slug) }}">
                                            <i class="fa-regular fa-calendar"></i>
                                            {{ $blog->created_at?->format('d M, Y') }}
                                        </a>
                                    </div>
                                    <h3 class="blog_title">
                                        <a href="{{ route('blog.show', $blog->slug) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>
                                    <a class="read_more" href="{{ route('blog.show', $blog->slug) }}">
                                        Read Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>No blog posts available right now. Please check back soon.</p>
                        </div>
                    @endforelse
                </div>

                {{-- ✅ “See All” button --}}
                @if ($blogs->count() > 0)
                    <div class="tz-btn-1" style="text-align: center">
                        <a style="background-color: #f5f5f5; color: #252525; ;" href="{{ route('blog.seeallblogs') }}">
                            <span>Read More</span>
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </section>


    <!-- End of Blog section============================================= -->


    <script>
        function closeHomeAlert() {
            const popup = document.getElementById('homeAlertPopup');
            const backdrop = document.getElementById('homeAlertBackdrop');

            if (popup) {
                popup.classList.add('home-closing');
                backdrop.classList.add('home-closing');

                setTimeout(() => {
                    popup.remove();
                    backdrop.remove();
                }, 300);
            }
        }

        // Auto-dismiss after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.getElementById('homeAlertPopup');

            if (popup) {
                setTimeout(() => {
                    closeHomeAlert();
                }, 5000);
            }

            // Close on backdrop click
            const backdrop = document.getElementById('homeAlertBackdrop');
            if (backdrop) {
                backdrop.addEventListener('click', closeHomeAlert);
            }

            // Close on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && popup) {
                    closeHomeAlert();
                }
            });
        });
    </script>
@endsection
