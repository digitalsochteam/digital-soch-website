@extends('frontend.layout.app')

@section('title', 'About Our Agency (Call:07208909232) | Digital Soch Private Limited')

@push('extra-head')
    <meta name="description"
        content=" Learn more about our Mumbai-based digital marketing agency (Call:07208909232) — experts in SEO, social media, PPC, and branding strategies that drive measurable growth and online success." />
    <link rel="canonical" href="https://www.digitalsochmedia.com/about-our-agency/" />
    <meta http-equiv="content-language" content="en-us" />
    <meta name="robots" content="index, follow" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About Our Agency (Call:07208909232) | Digital Soch Private Limited" />
    <meta property="og:description"
        content="Learn more about our Mumbai-based digital marketing agency (Call:07208909232) — experts in SEO, social media, PPC, and branding strategies that drive measurable growth and online success." />
    <meta property="og:url" content="https://www.digitalsochmedia.com/about-our-agency/" />
    <meta property="og:site_name" content="Digital Soch Private Limited">
    <meta name="geo.position" content="Mumbai">
    <meta name="geo.placename" content="Andheri">
    <meta name="geo.region" content="400053">
    <meta name="revisit-after" content="7 days">
@endpush

@section(section: 'content')
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">About Us</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section
                                                                                                                                                                                                                                                 ============================================= -->
    <div class="tz-ab3-bottom-marque">
        <div class="tz-ab3-btm-1 marquee-left">
            @php
                $categories = getCategoryList();
                $expertiseSubcategories = [];

                foreach ($categories as $category) {
                    if ($category['category'] === 'Expertise') {
                        foreach ($category['subcategories'] as $subcat) {
                            $expertiseSubcategories[] = $subcat['subcategory'];
                        }
                    }
                }
            @endphp
            @foreach ($expertiseSubcategories as $subcategory)
                <div class="tz-ab3-btm-text">
                    <div class="item-text text-uppercase">{{ $subcategory }}</div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Start of About section
                                                                                                                                                                 ============================================= -->
    <section id="tz-about5" class="tz-about5-sec pt-120 pb-120">
        <div class="container">
            <div class="tz-about5-content d-flex">
                <!-- <div class="tz-about5-img-wrap position-relative">
                                                                                                                                                                          <div class="item-img img-zoom">
                                                                                                                                                                          <img src="assets/img/about/ab7.jpg" alt="">
                                                                                                                                                                          </div>
                                                                                                                                                                          <div class="item-exp right_view d-flex align-items-center justify-content-center text-uppercase headline pera-content">
                                                                                                                                                                          <div class="item-inner text-center">
                                                                                                                                                                          <h4><span class="counter">25</span></h4>
                                                                                                                                                                          <p>Years Of
                                                                                                                                                                          Experience</p>
                                                                                                                                                                          </div>
                                                                                                                                                                          </div>
                                                                                                                                                                          <div class="item-play left_view">
                                                                                                                                                                          <a class="video_box" href="#"><i class="fa-solid fa-play"></i></a>
                                                                                                                                                                          </div>
                                                                                                                                                                          </div> -->
                <div class>
                    <div class="tz-section-title headline pera-content">
                        <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase">
                            About Us
                        </div>
                        <h2 class="sec_title tz-itm-title tz-itm-anim">
                            Welcome To Digital Soch
                        </h2>
                        <p>
                            DIGITAL SOCH is equipped with a team of trained
                            professionals
                            and latest technology for digital marketing and website
                            designing services in Mumbai.
                        </p>
                        <p style="text-align: justify">
                            We have a team of experienced and trained professionals
                            whose
                            digital marketing and web designing services in Mumbai
                            are best
                            in the industries such as IT, Hospitality, tour &
                            travel, media,
                            real estate and many more. We focus on providing digital
                            marketing solutions to enhance your online presence,
                            brand
                            awareness and generate a high return on investment.
                        </p>
                        <p style="text-align: justify">
                            Our panel of experts has helped a number of customers to
                            achieve
                            good search engine ranking by creating and implementing
                            right
                            digital marketing strategies that best suits the
                            specific needs
                            and demands of the customers. DIGITAL SOCH has a right
                            solution
                            for you whether you are looking for SEO, PPC, Social
                            Media
                            Marketing, or Website Designing services that best suit
                            the
                            specific needs and demands of our businesses in Mumbai
                            and other
                            parts of Maharashtra.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End of About section
                                                                                                                                                                 ============================================= -->
    <section id="tz-ser2" class="tz-ser2-sec position-relative pt-115 pb-90">
        <span class="tz-ser2-shape1 position-absolute"><img src="{{ asset('assets/img/shape/s-shape.png') }}" alt /></span>
        <span class="tz-ser2-shape2 position-absolute"><img src="{{ asset('assets/img/shape/s-shape.png') }}" alt /></span>
        <span class="tz-ser2-circle1 left_view position-absolute"
            style="
          transform-origin: 50% 50%;
          translate: none;
          rotate: none;
          scale: none;
          transform: translate(0px, 0px);
          opacity: 1;
        "></span>
        <span class="tz-ser2-circle2 right_view_2 position-absolute"
            style="
          transform-origin: 50% 50%;
          translate: none;
          rotate: none;
          scale: none;
          transform: translate(0px, 0px);
          opacity: 1;
        "></span>
        <span class="tz-ser2-circle3 right_view_2 position-absolute"
            style="
          transform-origin: 50% 50%;
          translate: none;
          rotate: none;
          scale: none;
          transform: translate(200px, 0px) scale(0.5, 0.5);
          opacity: 1;
        "></span>
        <span class="tz-ser2-circle4 right_view_2 position-absolute"
            style="
          transform-origin: 50% 50%;
          translate: none;
          rotate: none;
          scale: none;
          transform: translate(200px, 0px) scale(0.5, 0.5);
          opacity: 1;
        "></span>
        <div class="container">
            <div class="tz-ser2-content mt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms"
                        style="
                visibility: visible;
                animation-duration: 1000ms;
                animation-delay: 300ms;
                animation-name: fadeInUp;
              ">
                        <div class="tz-ser2-item text-center position-relative">
                            <span class="ser-itm-bg position-absolute"><img
                                    src="{{ asset('assets/img/bg/ser-item-bg.svg') }}" alt /></span>
                            <span class="ser-itm-bg2 position-absolute"><img
                                    src="{{ asset('assets/img/bg/ser-item-bg2.svg') }}" alt /></span>
                            <div class="item-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/ic12.svg') }}" alt />
                            </div>
                            <div class="item-text headline pera-content">
                                <h3>
                                    <a href="#.">Our Values</a>
                                </h3>
                                <p>
                                    We emphasize and strive hard to create a best
                                    Website
                                    Development, Mobile Application, Ecommerce, SEO
                                    solutions
                                    with of best quality.
                                </p>
                                <!-- <a class="read_more" href="#."
                                                                                                                                                                        >Read More <i class="fa-solid fa-arrow-right-long"></i
                                                                                                                                                                      ></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms"
                        style="
                visibility: visible;
                animation-duration: 1000ms;
                animation-delay: 500ms;
                animation-name: fadeInUp;
              ">
                        <div class="tz-ser2-item text-center position-relative">
                            <span class="ser-itm-bg position-absolute"><img
                                    src="{{ asset('assets/img/bg/ser-item-bg.svg') }}" alt /></span>
                            <span class="ser-itm-bg2 position-absolute"><img
                                    src="{{ asset('assets/img/bg/ser-item-bg2.svg') }}" alt /></span>
                            <div class="item-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/ic13.svg') }}" alt class />
                            </div>
                            <div class="item-text headline pera-content">
                                <h3><a href="#.">Our Mission</a></h3>
                                <p>
                                    To endeavour a quality and best IT Solution for
                                    diverse
                                    range of business industries from small to big
                                    corporation.
                                </p>
                                <!-- <a class="read_more" href="#."
                                                                                                                                                                        >Read More <i class="fa-solid fa-arrow-right-long"></i
                                                                                                                                                                      ></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms"
                        style="
                visibility: visible;
                animation-duration: 1000ms;
                animation-delay: 700ms;
                animation-name: fadeInUp;
              ">
                        <div class="tz-ser2-item text-center position-relative">
                            <span class="ser-itm-bg position-absolute"><img
                                    src="{{ asset('assets/img/bg/ser-item-bg.svg') }}" alt /></span>
                            <span class="ser-itm-bg2 position-absolute"><img
                                    src="{{ asset('assets/img/bg/ser-item-bg2.svg') }}" alt /></span>
                            <div class="item-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/ic14.svg') }}" alt />
                            </div>
                            <div class="item-text headline pera-content">
                                <h3><a href="#.">Our Vision</a></h3>
                                <p>
                                    To expand our comprehensive service seamlessly to
                                    wide range
                                    of customers globally
                                </p>
                                <!-- <a class="read_more" href="#."
                                                                                                                                                                        >Read More <i class="fa-solid fa-arrow-right-long"></i
                                                                                                                                                                      ></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start of About Counter section
                                                                                                                                                             ============================================= -->
    <section id="tz-abp-counter" class="tz-abp-counter-sec pt-120 pb-100">
        <div class="tz-abp-counter-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="tz-abp-count-item text-center">
                            <div class="item-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/ic45.svg') }}" alt />
                            </div>
                            <div class="item-text headline pera-content">
                                <h3><span class="counter">86</span>%</h3>
                                <p>Client retention</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tz-abp-count-item text-center">
                            <div class="item-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/ic46.svg') }}" alt />
                            </div>
                            <div class="item-text headline pera-content">
                                <h3><span class="counter">15</span>+</h3>
                                <p>Years of service</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tz-abp-count-item text-center">
                            <div class="item-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/ic47.svg') }}" alt />
                            </div>
                            <div class="item-text headline pera-content">
                                <h3><span class="counter">40</span>+</h3>
                                <p>Professionals</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tz-abp-count-item text-center">
                            <div class="item-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/ic48.svg') }}" alt />
                            </div>
                            <div class="item-text headline pera-content">
                                <h3><span class="counter">5000</span>+</h3>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- End of About Counter section
                                                                                                                                             ============================================= -->
    <!-- Start of About section
                                                                                                                                     ============================================= -->
    <section id="tz-about-2" class="tz-about-section-2 pb-120">
        <div class="container">
            <div class="tz-ab2-content position-relative">
                <span class="ab2-shape1 left_view position-absolute">
                    <svg width="219" height="190" viewBox="0 0 219 190" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M54.7122 0H164.11L218.796 94.692L164.11 189.41H54.7122L0 94.692L54.7122 0Z"
                            fill="#003c66" />
                    </svg>
                </span>
                <span class="ab2-shape2 right_view position-absolute">
                    <svg width="372" height="322" viewBox="0 0 372 322" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M278.221 1L185.805 160.96L278.221 320.947L370.61 160.96L278.221 1Z" stroke="#3A3C50"
                            stroke-miterlimit="10" stroke-linejoin="round" />
                        <path d="M185.805 160.96H1L93.4157 320.947H278.221L185.805 160.96Z" stroke="#3A3C50"
                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <div class="ab-bg2 img-parallax position-absolute">
                    <img src="{{ asset('assets/img/bg/ab-bg2.jpg') }}" alt />
                </div>
                <!-- <div class="ab_video_play_btn text-center">
                                                                                                                                              <a
                                                                                                                                                 class="d-flex justify-content-center align-items-center video_box"
                                                                                                                                                 href="https://www.youtube.com/watch?v=3eDQgM73CQM">
                                                                                                                                                 <i class="fas fa-play"></i>
                                                                                                                                                 <span class="video_btn_border border_wrap-1"></span>
                                                                                                                                                 <span class="video_btn_border border_wrap-2"></span>
                                                                                                                                                 <span class="video_btn_border border_wrap-3"></span>
                                                                                                                                              </a>
                                                                                                                                           </div> -->
                <div class="tz-section-title headline">
                    <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase" style="color: white;">
                        About Us
                    </div>
                    <h2 class="sec_title tz-itm-title tz-itm-anim">
                        Assisting Clients Get New Customer Everyday
                    </h2>
                    <p style="color: white;">Digital Soch, one of the foremost Digital Marketing Company in Mumbai, started
                        to offer professional digital marketing services. From setting new quality standards then to
                        creating new landmarks now, we are trusted for our experience and expertise.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About section
                                                                                                                     ============================================= -->
    <!-- Start of About why choose section
                                                                                                                             ============================================= -->
    <section id="tz-abwh" class="tz-abwh-sec pt-120 pb-120 position-relative">
        <span class="tz-abwh-shape position-absolute"><img src="{{ asset('assets/img/shape/circle.png') }}" alt /></span>
        <div class="container">
            <div class="tz-abwh-content">
                <div class="tz-abwh-item-wrap">
                    <div class="tz-abwh-item d-flex align-items-center headline pera-content">
                        <div class="item-icon d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/img/icon/ic50.svg') }}" alt />
                        </div>
                        <div class="item-text">
                            <h3>Expertise & Experience</h3>
                            <p>
                                Decades of proven expertise delivering reliable,
                                professional,
                                and trusted services.
                            </p>
                        </div>
                    </div>
                    <div class="tz-abwh-item d-flex align-items-center headline pera-content">
                        <div class="item-icon d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/img/icon/ic51.svg') }}" alt />
                        </div>
                        <div class="item-text">
                            <h3>Custom IT Solutions</h3>
                            <p>
                                Tailored IT solutions boosting efficiency, security,
                                and
                                business growth seamlessly.
                            </p>
                        </div>
                    </div>
                    {{-- <div class="tz-abwh-item d-flex align-items-center headline pera-content">
                        <div class="item-icon d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/img/icon/ic52.svg') }}" alt />
                        </div>
                        <div class="item-text">
                            <h3>24/7 IT Support</h3>
                            <p>
                                Reliable 24/7 IT support ensuring seamless operations
                                and
                                quick solutions.
                            </p>
                        </div>
                    </div> --}}
                </div>
                <div class="tz-abwh-text-wrap">
                    <div class="tz-section-title headline">
                        <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase">
                            Why Choose Us
                        </div>
                        <h2 class="sec_title tz-itm-title tz-itm-anim">
                            Increasing Business Success
                        </h2>
                        <p style="text-align: justify">
                            Choose us for our round-the-clock IT support, expert
                            technicians, fast response times, and commitment to
                            customer
                            satisfaction. We deliver tailored solutions that keep
                            your
                            systems running smoothly and securely. With proactive
                            monitoring, reliable service, and years of industry
                            experience,
                            we ensure minimal downtime and maximum efficiency for
                            your
                            business operations.
                        </p>
                    </div>
                    <div class="tz-btn-1 mt-40">
                        <a href="{{ route('contact') }}"><span>Get Started</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Counter section
                                                                                                                             ============================================= -->
@endsection
