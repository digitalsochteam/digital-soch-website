@extends('frontend.layout.app')

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
                    <li>Portfolio Videos</li>
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
                                alt="">
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
                            <h2 class="sec_title tz-itm-title tz-itm-anim">{{ $video->description }}</h2>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
