<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.head')


<body>

    <a href="https://api.whatsapp.com/send?phone=917208909232" class="btn-whatsapp-pulse" target="_blank" rel="noopener"
        aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Mobile Menu -->
    <div class="mobile_menu lenis lenis-smooth position-relative">
        <div class="mobile_menu_wrap">
            <div class="mobile_menu_overlay open_mobile_menu"></div>
            <div class="mobile_menu_content">
                <div class="mobile_menu_close open_mobile_menu">
                    <i class="fas fa-times"></i>
                </div>

                {{-- <div class="m-brand-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
            </div> --}}

                <nav class="mobile-main-navigation clearfix ul-li">
                    <ul id="m-main-nav" class="nav navbar-nav clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about') }}" aria-label="About our company">About Us</a></li>

                        @foreach (getCategoryList() as $category)
                            <li class="dropdown">
                                <a>{{ $category['category'] }}</a>

                                @if (!empty($category['subcategories']))
                                    <ul class="dropdown-menu clearfix">
                                        @foreach ($category['subcategories'] as $subcategory)
                                            @if (count($subcategory['products']) > 0)
                                                @php
                                                    $validProducts = array_filter(
                                                        $subcategory['products'] ?? [],
                                                        fn($p) => !empty($p),
                                                    );
                                                    $isOnlyProduct = false;
                                                    if ($validProducts && count($validProducts) > 0) {
                                                        $isOnlyProduct =
                                                            $validProducts[0]['name'] == null ? true : false;
                                                    }
                                                @endphp

                                                <li
                                                    class="{{ count($validProducts) > 0 && !$isOnlyProduct ? 'dropdown' : '' }}">
                                                    <a href="{{ count($validProducts) > 0 && !$isOnlyProduct ? '#' : route('product.show', $validProducts[0]['slug']) }}"
                                                        aria-label="Product">
                                                        {{ $subcategory['subcategory'] }}
                                                    </a>

                                                    @if (count($validProducts) > 0 && !$isOnlyProduct)
                                                        <ul class="dropdown-menu clearfix">
                                                            @foreach ($subcategory['products'] as $product)
                                                                @php
                                                                    $productSlug = $product['slug'];
                                                                @endphp
                                                                <li>
                                                                    <a href="{{ route('product.show', $productSlug) }}"
                                                                        aria-label="Product">
                                                                        {{ $product['name'] }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach

                        <li class="dropdown"><a>Portfolio</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a href="{{ route('website.seeallwebsites') }}">Websites</a></li>
                                <li><a href="{{ route('logo.seealllogos') }}">Logos</a></li>
                                <li><a href="{{ route('video.seeallvideos') }}">Videos</a></li>
                                <li><a href="{{ route('post.seeallposts') }}">Posts</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a>Packages</a>
                            @if (getPackages()->count() > 0)
                                <ul class="dropdown-menu clearfix">
                                    @foreach (getPackages() as $package)
                                        @php
                                            $productSlug = strtolower(str_replace(' ', '-', $package->slug));
                                        @endphp
                                        <li>
                                            <a href="{{ route('package.show', $productSlug) }}">
                                                {{ $package->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>

                        <li><a href="{{ route('blog.seeallblogs') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contacts</a></li>
                    </ul>
                </nav>

                <!-- ✅ CRM Login Button -->
                <div class="text-center mt-3 mb-3">
                    <a href="https://client.digitalsochmedia.com/login" target="_blank" class="tz-btn-1"
                        style="display: inline-block; background-color: #df1b25; color: #fff; padding: 8px 20px; border-radius: 5px; text-decoration: none;">
                        <i class="fa-solid fa-lock mr-2"></i>
                        <span style="font-size: 14px;">Login</span>
                    </a>
                </div>

                <!-- Social Icons -->
                <div class="ptx-mobile-header-social text-center">
                    <a href="https://www.facebook.com/Digital.Soch.Pvt.Ltd/" target="_blank" rel="noopener noreferrer"
                        aria-label="Visit our Facebook page">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/digitalsochpvtltd/" target="_blank" rel="noopener noreferrer"
                        aria-label="Visit our Instagram profile">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://x.com/digital_Soch_M" target="_blank" rel="noopener noreferrer"
                        aria-label="Visit our Twitter profile">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCLnmfBKs2zEWqEYJdvU1jKQ" target="_blank"
                        rel="noopener noreferrer" aria-label="Visit our YouTube channel">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>



    <div id="mybutton">
        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" class="feedback show-modal">
            <i class="fa-solid fa-message"></i> Get a Quote
        </a>
    </div>


    <div class="container mt-5">
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content popup-container">
                    <div class="popup-header">
                        <h2 class="popup-title">Get a Quote</h2>
                        <button class="popup-close-btn" type="button" data-bs-dismiss="modal"
                            aria-label="Close">&times;</button>
                    </div>
                    <div class="popup-body">
                        <form class="popup-form" action="{{ route('quote-lead-details.store') }}" method="POST"
                            onsubmit="return handleQuoteSubmit(event)">
                            @csrf
                            <div class="popup-form-group">
                                <input type="text" name="fullname" id="fullName" class="popup-input" required
                                    value="{{ old('fullname') }}" placeholder="Full Name">
                                @error('fullname')
                                    <span class="popup-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="popup-form-group">
                                <input type="text" name="city" id="city" class="popup-input" required
                                    value="{{ old('city') }}" placeholder="City">
                                @error('city')
                                    <span class="popup-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Mobile & Email in same row -->
                            <div class="popup-form-row">
                                <div class="popup-form-group half-width">
                                    <input type="tel" name="mobile" id="mobile" class="popup-input" required
                                        value="{{ old('mobile') }}" placeholder="Mobile" pattern="[0-9]{10}"
                                        title="Enter 10 digit mobile number">
                                    @error('mobile')
                                        <span class="popup-error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="popup-form-group half-width">
                                    <input type="email" name="email" id="email" class="popup-input" required
                                        value="{{ old('email') }}" placeholder="Email">
                                    @error('email')
                                        <span class="popup-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="popup-form-group">
                                <input type="text" name="subject" id="subject" class="popup-input" required
                                    value="{{ old('subject') }}" placeholder="Subject">
                                @error('subject')
                                    <span class="popup-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="popup-form-group">
                                <textarea name="message" id="message" class="popup-textarea" placeholder="Message" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="popup-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="popup-submit-btn">Submit Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('frontend.layout.header')

    <main>
        @yield('content')
    </main>

    @include('frontend.layout.footer')
    @include('frontend.layout.script')
</body>

</html>
