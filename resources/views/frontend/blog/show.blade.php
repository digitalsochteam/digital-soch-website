@extends('frontend.layout.app')

@section('content')
    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-section-title headline text-center">
                <h2 class="sec_title tz-itm-title tz-itm-anim " style="color:white;">Blog Post</h2>
                <p style="color:white;">
                    Our team is dedicated to delivering exceptional IT solutions tailored to meet the unique needs of each
                    client.
                </p>
            </div>
        </div>
    </section>

    <!-- Start of Service Details section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ============================================= -->
    <section id="tz-blog-details" class="tz-blog-details-sec pt-110 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tz-blog-details-text headline pera-content">
                        {{-- <div class="tz-thumb mb-30">
                            <img src="{{ asset('assets/img/blog/blgd.jpg') }}" alt="">
                        </div> --}}
                        <div class="tz-thumb mb-30">
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/img/blog/blg1.jpg') }}"
                                alt="{{ $blog->title }}">
                        </div>
                        <div class="item-meta">
                            <a href="#"><i class="fa-regular fa-calendar"></i>
                                {{ $blog->created_at?->format('d M, Y') }}</a>
                        </div>
                        <h3>{{ $blog->title }}</h3>
                        <p>{{ $blog->description }}</p>
                    </div>
                    <div class="tz-blog-tag">
                        <span>Tag:</span>

                        @if (!empty($blog->tags) && is_array($blog->tags))
                            @foreach ($blog->tags as $tag)
                                <a href="#">
                                    {{ $tag }}
                                </a>
                            @endforeach
                        @else
                            <span>No tags</span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    {{-- <div class="tz-ser-sidebar">
                        <div class="tz-sidebar-widget headline">
                            <div class="recent-post-widget">
                                <h3 class="widget-title">Recent Posts</h3>
                                <div class="tz-rcw-wrap">
                                    <div class="tz-rcw-item">
                                        <div class="item-img">
                                            <img src="{{ asset('assets/img/blog/rc1.jpg') }}" alt="">
                                        </div>
                                        <div class="item-text headline">
                                            <div class="item-meta">
                                                <a href="#"><i class="fa-regular fa-calendar"></i> 24 Feb, 2025</a>
                                                <a href="#"><i class="fa-regular fa-user"></i> by admin</a>
                                            </div>
                                            <h3><a href="#">How Businesses Can Leverage Data for Growth</a></h3>
                                        </div>
                                    </div>
                                    <div class="tz-rcw-item">
                                        <div class="item-img">
                                            <img src="{{ asset('assets/img/blog/rc2.jpg') }}" alt="">
                                        </div>
                                        <div class="item-text headline">
                                            <div class="item-meta">
                                                <a href="#"><i class="fa-regular fa-calendar"></i> 24 Feb, 2025</a>
                                                <a href="#"><i class="fa-regular fa-user"></i> by admin</a>
                                            </div>
                                            <h3><a href="#">How Businesses Can Leverage Data for Growth</a></h3>
                                        </div>
                                    </div>
                                    <div class="tz-rcw-item">
                                        <div class="item-img">
                                            <img src="{{ asset('assets/img/blog/rc3.jpg') }}" alt="">
                                        </div>
                                        <div class="item-text headline">
                                            <div class="item-meta">
                                                <a href="#"><i class="fa-regular fa-calendar"></i> 24 Feb, 2025</a>
                                                <a href="#"><i class="fa-regular fa-user"></i> by admin</a>
                                            </div>
                                            <h3><a href="#">How Businesses Can Leverage Data for Growth</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="tz-ser-sidebar">
                        <div class="tz-sidebar-widget headline">
                            <div class="recent-post-widget">
                                <h3 class="widget-title">Recent Posts</h3>
                                <div class="tz-rcw-wrap">
                                    @forelse ($recentPosts as $post)
                                        <div class="tz-rcw-item">
                                            <div class="item-img">
                                                <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('assets/img/blog/default-thumb.jpg') }}"
                                                    alt="{{ $post->title }}">
                                            </div>

                                            <div class="item-text headline">
                                                <div class="item-meta">
                                                    <a href="#"><i class="fa-regular fa-calendar"></i>
                                                        {{ $post->created_at?->format('d M, Y') }}</a>

                                                </div>
                                                <h3>
                                                    <a href="{{ route('blog.show', str_replace(' ', '_', $post->id)) }}">
                                                        {{ Str::limit($post->title, 60) }}
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>

                                    @empty
                                        <p class="text-muted">No recent posts available.</p>
                                    @endforelse

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End of Service Details section
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ============================================= -->
@endsection
