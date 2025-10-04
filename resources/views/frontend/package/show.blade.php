@extends('frontend.layout.app')

@section('content')
    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">{{ $package->title }} Package</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>{{ $package->title }}</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
