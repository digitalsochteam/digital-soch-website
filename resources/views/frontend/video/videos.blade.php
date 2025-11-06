@extends('frontend.layout.app')

@section('title',
    'Corporate & Promotional Video Production in Mumbai (Call:07208909232)| Digital Soch Private
    Limited')

    @push('extra-head')
        <meta name="description"
            content="Professional video production company in Mumbai. We create corporate, branding, and social media videos that tell your story and boost engagement. (Call:07208909232)" />
        <link rel="canonical" href="https://www.digitalsochmedia.com/videos" />
        <meta http-equiv="content-language" content="en-us" />
        <meta name="robots" content="index, follow" />
        <meta property="og:locale" content="en_IN" />
        <meta property="og:type" content="website" />
        <meta property="og:title"
            content="Corporate & Promotional Video Production in Mumbai (Call:07208909232)| Digital Soch Private
    Limited" />
        <meta property="og:description"
            content="Professional video production company in Mumbai. We create corporate, branding, and social media videos that tell your story and boost engagement. (Call:07208909232)" />
        <meta property="og:url" content="https://www.digitalsochmedia.com/videos" />
        <meta property="og:site_name" content="Digital Soch Private Limited">
        <meta name="geo.position" content="Mumbai">
        <meta name="geo.placename" content="Andheri">
        <meta name="geo.region" content="400053">
        <meta name="revisit-after" content="7 days">
    @endpush

@section('content')
    <!-- Breadcrumb Section -->
    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">Portfolio Videos</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Videos</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: 40px; margin-bottom: 40px;">
        @foreach ($videos as $video)
            <section id="tz-about-2" class="tz-about-section-2 pb-40">
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
                                <path d="M278.221 1L185.805 160.96L278.221 320.947L370.61 160.96L278.221 1Z"
                                    stroke="#3A3C50" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M185.805 160.96H1L93.4157 320.947H278.221L185.805 160.96Z" stroke="#3A3C50"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <div class="ab-bg2 img-parallax position-absolute">
                            <img src="{{ $video->thumbnail ? asset('storage/' . $video->thumbnail) : asset('assets/img/default.jpg') }} "
                                alt="Thumbnail Image" />
                        </div>
                        <div class="ab_video_play_btn text-center">
                            <a class="d-flex justify-content-center align-items-center video_box"
                                href="{{ $video->video_link }}">
                                <i class="fas fa-play"></i>
                                <span class="video_btn_border border_wrap-1"></span>
                                <span class="video_btn_border border_wrap-2"></span>
                                <span class="video_btn_border border_wrap-3"></span>
                            </a>
                        </div>
                        <div class="tz-section-title headline">
                            <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase" style="color: #ffffff;">
                                {{ $video->company_name }}
                            </div>
                            <h2 class="sec_title tz-itm-title tz-itm-anim" style="font-size: 30px">{{ $video->description }}
                            </h2>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
