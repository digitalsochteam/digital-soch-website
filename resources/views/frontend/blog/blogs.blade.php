@extends('frontend.layout.app')

@section('content')
    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-section-title headline text-center pera-content">
                <div class="subtitle tz-sub-tilte tz-sub-anim text-uppercase" style="color: #ffffff">
                    blog posts
                </div>
                <h2 class="sec_title tz-itm-title tz-itm-anim" style="color: #ffffff">Read our Blogs</h2>
                <p style="color: #ffffff">Our team is dedicated to delivering exceptional IT solutions tailored to meet the
                    unique needs of each
                    client.</p>
            </div>
        </div>
    </section>
    <section id="tz-blog-grid" class="tz-blog-grid-sec pt-80" style="background-color: #195d8d">
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
                                        <a href="{{ route('blog.show', str_replace(' ', '_', $blog->id)) }}">
                                            <i class="fa-regular fa-calendar"></i>
                                            {{ $blog->created_at?->format('d M, Y') }}
                                        </a>
                                    </div>
                                    <h3 class="blog_title">
                                        <a href="{{ route('blog.show', str_replace(' ', '_', $blog->id)) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>
                                    <a class="read_more" href="{{ route('blog.show', str_replace(' ', '_', $blog->id)) }}">
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
