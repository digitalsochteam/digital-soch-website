@extends('frontend.layout.app')

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
