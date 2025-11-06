@extends('frontend.layout.app')

@section('title',
    'Digital Marketing Blogs & Insights (Call:07208909232)| Digital Soch Private
    Limited')

    @push('extra-head')
        <meta name="description"
            content="Explore the latest blogs from Digital Soch Private Limited — expert insights on digital marketing, SEO, social media, branding, and online growth strategies that help your business succeed. (Call:07208909232)" />
        <link rel="canonical" href="https://digitalsochmedia.com/blogs" />
        <meta http-equiv="content-language" content="en-us" />
        <meta name="robots" content="index, follow" />
        <meta property="og:locale" content="en_IN" />
        <meta property="og:type" content="website" />
        <meta property="og:title"
            content="Digital Marketing Blogs & Insights (Call:07208909232)| Digital Soch Private
    Limited" />
        <meta property="og:description"
            content="Explore the latest blogs from Digital Soch Private Limited — expert insights on digital marketing, SEO, social media, branding, and online growth strategies that help your business succeed. (Call:07208909232)" />
        <meta property="og:url" content="https://digitalsochmedia.com/blogs" />
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
            <div class="tz-section-title headline text-center pera-content">
                <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase" style="color: #ffffff">
                    blog posts
                </div>
                <h2 class="sec_title tz-itm-title tz-itm-anim" style="color: #ffffff">Read Our Blogs</h2>
                <p style="color: #ffffff">Our team is dedicated to delivering exceptional IT solutions tailored to meet the
                    unique needs of each
                    client.</p>
            </div>
        </div>
    </section>
    <section id="tz-blog-grid" class="tz-blog-grid-sec pt-80"
        style="background-image: url('{{ asset('assets/img/bg/cn.jpg') }}');">

        <div class="container">
            <div class="tz-blog3-content">
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
            </div>
        </div>
    </section>
@endsection
