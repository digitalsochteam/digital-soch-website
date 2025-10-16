@extends('frontend.layout.app')


@section('title', $product->meta_title)

@push('extra-head')
    @if (!empty($product->meta_description))
        {!! $product->meta_description !!}
    @endif
@endpush

@section('content')


    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">{{ $product->product ?? $product->subcategory }}</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>{{ $product->product ?? $product->subcategory }}</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Start of Service Details section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ============================================= -->
    <section id="tz-ser-details" class="tz-ser-details-sec pt-120 pb-120">
        <div class="container">
            <div class="tz-ser-details-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tz-ser-details-text-wrap headline pera-content">

                            <div class="ser-details-text">
                                <h3>{{ $product->product ?? $product->subcategory }}</h3>
                                <p style="font-weight: 600; ">
                                    {{ $product->product_subheading }}
                                </p>
                                <p>
                                    {!! $product->product_detail !!}
                                </p>
                                @php
                                    $faqs = is_array($product->faqs)
                                        ? $product->faqs
                                        : json_decode($product->faqs, true) ?? [];

                                @endphp
                                @if (!empty($faqs) || count($faqs) > 0)
                                    <div class="tz-faq-accordion mt-60">
                                        <div class="accordion" id="accordionExample_{{ $product->id }}">
                                            @foreach ($faqs as $index => $faq)
                                                @php
                                                    $headingId = 'heading' . $index;
                                                    $collapseId = 'collapse' . $index;
                                                @endphp

                                                <div class="accordion-item wow fadeInUp"
                                                    data-wow-delay="{{ 300 + $index * 100 }}ms" data-wow-duration="1000ms">
                                                    <h2 class="accordion-header" id="{{ $headingId }}">
                                                        <button
                                                            class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#{{ $collapseId }}"
                                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                                            aria-controls="{{ $collapseId }}">
                                                            <span>{{ $faq['question'] ?? '' }}</span>
                                                        </button>
                                                    </h2>

                                                    <div id="{{ $collapseId }}"
                                                        class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                                        aria-labelledby="{{ $headingId }}"
                                                        data-bs-parent="#accordionExample_{{ $product->id }}">
                                                        <div class="accordion-body">
                                                            <div class="bi-faq-text">
                                                                {{ $faq['answer'] ?? '' }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                            </div>
                            @if (!empty($product->product_image))
                                <div class="ser-details-thumb">
                                    <img src="{{ Storage::url($product->product_image) }}"
                                        alt="{{ $product->product ?? 'Product' }} image"
                                        style="max-width:100%; height:auto;" />
                                </div>
                            @endif
                            <div style="background-color: #ffffff; ">
                                {!! $product->product_details !!}
                            </div>

                        </div>
                    </div>

                    @if ($otherProducts->isNotEmpty())
                        <div class="col-lg-4">
                            <div class="tz-ser-sidebar">
                                <div class="tz-sidebar-widget headline">
                                    <div class="category-widget ul-li-block">
                                        <h3 class="widget-title">Other Products</h3>
                                        <ul>
                                            @foreach ($otherProducts as $otherProduct)
                                                @php
                                                    $productSlug = $otherProduct['slug'];
                                                @endphp
                                                <li>
                                                    <a href="{{ route('product.show', $productSlug) }}">
                                                        <span>{{ $otherProduct['name'] }}</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service Details section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ============================================= -->
@endsection
