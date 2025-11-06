@extends('frontend.layout.app')

@section('title',
    'Logo Design Company in Mumbai (Call:07208909232)| Custom Brand Identity | Digital Soch Private
    Limited')

    @push('extra-head')
        <meta name="description"
            content="Creative logo design company in Mumbai. Digital Soch crafts unique, professional logos that define your brand identity and make a lasting impression. (Call:07208909232)" />
        <link rel="canonical" href="https://www.digitalsochmedia.com/logos/" />
        <meta http-equiv="content-language" content="en-us" />
        <meta name="robots" content="index, follow" />
        <meta property="og:locale" content="en_IN" />
        <meta property="og:type" content="website" />
        <meta property="og:title"
            content="Logo Design Company in Mumbai (Call:07208909232)| Custom Brand Identity |Digital Soch Private Limited" />
        <meta property="og:description"
            content="Enhance your brand identity with Digital Soch — expert designers creating modern, memorable logos tailored for your business. (Call:07208909232)" />
        <meta property="og:url" content="https://www.digitalsochmedia.com/logos/" />
        <meta property="og:site_name" content="Digital Soch Private Limited">
        <meta name="geo.position" content="Mumbai">
        <meta name="geo.placename" content="Andheri">
        <meta name="geo.region" content="400053">
        <meta name="revisit-after" content="7 days">
    @endpush

@section('content')
    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">Portfolio Logos</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Logos</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Portfolio Image Grid -->
    <section id="tz-portfolio-feed1" class="tz-portfolio-feed1-sec pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                @forelse ($logos as $logo)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                        <div class="item-img">
                            <img src="{{ $logo->image ? asset('storage/' . $logo->image) : asset('assets/img/default.jpg') }}"
                                alt="{{ $logo->name }}" class="img-fluid rounded shadow-sm" style="object-fit : fill;">
                        </div>

                    </div>
                @empty
                    <p class="text-center text-muted">No images available yet.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
