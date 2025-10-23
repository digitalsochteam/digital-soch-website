@extends('frontend.layout.app')

@section('content')
    <!-- Breadcrumb Section -->
    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">Portfolio Website</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Website</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="tz-portfolio-feed1" class="tz-portfolio-feed1-sec pt-115 pb-120">
        <div class="container">

            <H3 style="color: #000000; text-align: center; margin-bottom: 50px;"> We Serve 690+ Clients Around The Globe
            </H3>

            <div class="row justify-content-center">
                @forelse ($websites as $website)
                    @php
                        // Log me file
                        Log::info('Website File: ' . $website->file);
                    @endphp
                    <div class="col-lg-6">
                        <div class="tz-pro2-item position-relative">
                            <div class="item-img">
                                <img src="{{ $website->iamge ? asset('storage/' . $website->iamge) : asset('assets/img/default.jpg') }}"
                                    alt="{{ $website->name }}">
                            </div>
                            <div class="item-arrow">
                                <a class="d-flex justify-content-center align-items-center"
                                    href="{{ asset('storage/' . $website->file) }}" target="_blank">
                                    <i class="fa-solid fa-file-pdf"></i>
                                </a>
                            </div>
                            <div class="item-text-wrap">
                                <div class="inner-title headline pera-content">
                                    <h3>
                                        <a href="{{ asset('storage/' . $website->file) }} " target="_blank"
                                            rel="noopener noreferrer">
                                            {{ $website->name }}
                                        </a>
                                    </h3>
                                    <p>{{ Str::limit($website->description, 120, '...') }}</p>
                                </div>
                                <div class="item-btn">
                                    <a href="{{ $website->website_link }}" target="_blank" rel="noopener noreferrer">
                                        <span>Explore Website</span> <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">No websites available yet.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
