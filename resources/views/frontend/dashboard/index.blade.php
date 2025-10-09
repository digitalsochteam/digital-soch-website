@extends('frontend.layout.app')
@section(section: 'content')
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 35px;
            padding: 20px 0;
        }

        .product-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            animation: fadeInUp 0.6s ease backwards;
        }

        .product-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .product-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .product-card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .product-card:nth-child(4) {
            animation-delay: 0.4s;
        }

        .product-card:nth-child(5) {
            animation-delay: 0.5s;
        }

        .product-card:nth-child(6) {
            animation-delay: 0.6s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .product-card .inner-img-unique {
            width: 100%;
            height: 280px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .product-card .inner-img-unique::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
        }

        .product-card:hover .inner-img-unique::before {
            opacity: 1;
        }

        .product-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .product-card:hover img {
            transform: scale(1.1);
        }

        /* Quick view button overlay */
        .quick-view-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.5);
            background: white;
            color: #333;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            z-index: 2;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .product-card:hover .quick-view-btn {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .quick-view-btn:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .quick-view-btn svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
        }


        .item-text-unique {
            padding: 25px;
        }

        .ser_title_unique {
            margin-bottom: 12px;
            min-height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ser_title_unique a {
            color: #1a1a1a;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 20px;
            line-height: 1.4;
            display: block;
        }

        .ser_title_unique a:hover {
            color: #764ba2;
            transform: translateX(3px);
        }

        .item-text-unique p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin: 15px 0;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 63px;
        }

        /* Enhanced button */
        .tz-btn-1-unique {
            margin-top: 20px;
        }

        .tz-btn-1-unique a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(118, 75, 162, 0.3);
        }

        .tz-btn-1-unique a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transition: left 0.4s ease;
        }

        .tz-btn-1-unique a:hover::before {
            left: 0;
        }

        .tz-btn-1-unique a span {
            position: relative;
            z-index: 1;
        }

        .tz-btn-1-unique a:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(118, 75, 162, 0.4);
        }

        .tz-btn-1-unique a svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
            transition: transform 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .tz-btn-1-unique a:hover svg {
            transform: translateX(4px);
        }


        /* Responsive design */
        @media (max-width: 1024px) {
            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 25px;
            }
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: 1fr;
                gap: 25px;
                padding: 15px 0;
            }

            .product-card .inner-img-unique {
                height: 240px;
            }

            .ser_title_unique a {
                font-size: 18px;
            }

            .item-text-unique {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .product-card .inner-img-unique {
                height: 220px;
            }

            .quick-view-btn {
                padding: 10px 24px;
                font-size: 13px;
            }
        }

        /* Loading skeleton (optional) */
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite;
        }
    </style>

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
                                            <a href="{{ route('contact') }}"><span>Get Started</span></a>
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
                                            <a href="{{ route('contact') }}"><span>Get Started</span></a>
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
                                            <a href="{{ route('contact') }}"><span>Get Started</span></a>
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
    <section id="tz-service" class="tz-service-sec pt-115 pb-115"
        style="background-image: url('{{ asset('assets/img/bg/sig.jpg') }}'); background-size: cover; background-position: center;">
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

            {{-- <div class="tz-service-content mt-60">
                @foreach ($selectedProducts as $i => $product)
                    <div class="tz-ser1-item top_view_2 d-flex align-items-center">
                        <div class="item-img-text headline pera-content d-flex align-items-center">
                            <div class="item-img position-relative">
                                <div class="inner-img">
                                    <img src="{{ Storage::url($product->product_image) }}" />
                                </div>
                            </div>

                            <div class="item-text headline pera-content">
                                <h3 class="ser_title">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        {{ $product->product ?? $product->subcategory }}
                                    </a>
                                </h3>

                                <p>{{ $product->product_subheading }}</p>
                                <div class="tz-btn-1">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            {{-- <div class="tz-service-content mt-60">
                <div class="product-grid">
                    @foreach ($selectedProducts as $product)
                        <div class="product-card">
                            <div class="inner-img">
                                <img src="{{ Storage::url($product->product_image) }}" alt="{{ $product->product }}" />
                            </div>

                            <div class="item-text headline pera-content text-center mt-3">
                                <h3 class="ser_title_unique" style="font-weight: 600;">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        {{ $product->product ?? $product->subcategory }}
                                    </a>
                                </h3>

                                <p class="mt-20">{{ $product->product_subheading }}</p>

                                <div class="tz-btn-1 mt-20">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> --}}


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


    <section id="tz-sponsor" class="tz-sponsor-sec pb-105">
        <div class="tz-sponsor-content marquee-right">
            @foreach ($companyLogo as $logo)
                <div class="tz-sponsor-item">
                    <div class="item-img d-flex justify-content-center align-items-center">
                        <img src="{{ asset('storage/' . $logo->image) }}" alt="{{ $logo->title ?? 'Sponsor Logo' }}">
                    </div>
                </div>
            @endforeach
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


    <!-- End of Blog section
@endsection
