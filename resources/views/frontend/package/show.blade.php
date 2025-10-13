@extends('frontend.layout.app')

@section('title', $package->meta_title)

@push('extra-head')
    @if (!empty($package->meta_description))
        {!! $package->meta_description !!}
    @endif
@endpush


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



    <section id="tz-price" class="tz-price-sec pt-115 pb-90 position-relative">
        <span class="tz-price-shape img-zoom position-absolute">
            <img src="{{ asset('assets/img/shape/circle4.svg') }}" alt="">
        </span>
        <div class="container">
            <div class="tz-section-title text-center headline">
                <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase">
                    Our Pricing Plan
                </div>
                <h2 class="sec_title tz-itm-title tz-itm-anim">Affordable Pricing Packages</h2>
            </div>

            <div class="tz-price-content mt-60">
                <div class="row justify-content-center">
                    @foreach ($subscriptions as $plan)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 300 + $loop->index * 200 }}ms"
                            data-wow-duration="1000ms">
                            <div class="tz-price-item headline position-relative">
                                @if ($plan['ispopular'])
                                    <div class="tz-price-tag">Popular</div>
                                @endif

                                <div class="tz-price-wrap">
                                    <div class="item-icon d-flex justify-content-center align-items-center"
                                        style="padding: 13px">
                                        {{-- <img src="{{ asset($plan->icon) }}" alt="{{ $plan->plan_name }}"> --}}
                                        <img src="{{ Storage::url($plan->image) }}"
                                            alt="{{ $plan->title ?? 'Package' }} image" />
                                    </div>
                                    <div class="item-top">
                                        <span>{{ $plan->title }}</span>
                                    </div>
                                    @if (!empty($plan->description))
                                        <div class="item-top">
                                            <span>{{ $plan->description }}</span>
                                        </div>
                                    @endif
                                    @php
                                        $features = is_array($plan->head)
                                            ? $plan->head
                                            : json_decode($plan->head, true) ?? [];
                                    @endphp
                                    @if (!empty($features))
                                        <div class="item-list ul-li-block">
                                            <h4>Feature Option:</h4>
                                            <ul>
                                                @foreach ($features as $index => $feature)
                                                    <li style="font-weight: 600">{{ $feature['key'] }} : <span
                                                            style="font-weight: 400; float: right;">
                                                            {{ $feature['value'] }} </span></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="tz-price-btn">
                                        <a href="{{ route('contact') }}">Get Started</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
