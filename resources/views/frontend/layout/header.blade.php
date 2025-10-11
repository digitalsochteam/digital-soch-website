<header id="tz-header" class="tz-header-section header_style_one txa_sticky_header">
    <div class="tz-header-top">
        <div class="container">
            <div class="tz-top-info-wrap d-flex justify-content-between align-items-center">
                <div class="tz-top-cta">
                    <a href="#"><i class="fa-solid fa-location-dot"></i> Andheri East, Mumbai - 400093</a>
                    <a href="mailto:info@digitalsochmedia.com"><i class="fa-solid fa-envelope"></i>
                        info@digitalsochmedia.com</a>
                </div>
                <div class="tz-top-social">
                    <span>Follow Us:</span>
                    <a href="https://www.facebook.com/Digital.Soch.Pvt.Ltd/" target="_blank"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/digitalsochpvtltd/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://x.com/digital_Soch_M" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCLnmfBKs2zEWqEYJdvU1jKQ" target="_blank"><i
                            class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="tz-main-navigation-wrap">
        <div class="container">
            <div class="tz-main-navigation-area d-flex justify-content-between align-items-center">
                <div class="brand-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo.png') }}"
                            style="width: 230px;" alt="logo"></a>
                </div>
                <div class="main-navigation-cta d-flex align-items-center ">
                    <nav class="main-navigation clearfix ul-li">
                        <ul id="main-nav" class="nav navbar-nav clearfix">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>

                            @foreach (getCategoryList() as $category)
                                <li class="dropdown">
                                    {{-- <a href="{{ url('/category/' . urlencode($category['category'])) }}"> --}}
                                    <a href="#">
                                        {{ $category['category'] }}
                                    </a>

                                    {{-- Only show subcategories menu if exists and not empty --}}
                                    @if (!empty($category['subcategories']))
                                        <ul class="dropdown-menu clearfix">
                                            @foreach ($category['subcategories'] as $subcategory)
                                                {{-- Show subcategory only if it has products --}}
                                                @if (count($subcategory['products']) > 0)
                                                    @php
                                                        $validProducts = array_filter(
                                                            $subcategory['products'] ?? [],
                                                            function ($p) {
                                                                return !empty($p); // removes null, "", 0, false
                                                            },
                                                        );

                                                        Log::info('Valid Products:', $validProducts);
                                                        $isOnlyProduct = false;
                                                        if ($validProducts && count($validProducts) > 0) {
                                                            if ($validProducts[0]['name'] == null) {
                                                                $isOnlyProduct = true;
                                                            } else {
                                                                $isOnlyProduct = false;
                                                            }

                                                            Log::info('Is Only Product:', [
                                                                'isOnlyProduct' => $isOnlyProduct,
                                                            ]);
                                                        }

                                                    @endphp

                                                    <li
                                                        class="{{ count($validProducts) > 0 && $isOnlyProduct === false ? 'dropdown' : '' }}">

                                                        <a
                                                            href="{{ count($validProducts) > 0 && $isOnlyProduct === false ? '#' : route('product.show', $validProducts[0]['slug']) }}">
                                                            {{ $subcategory['subcategory'] }}
                                                        </a>

                                                        @if (count($validProducts) > 0 && $isOnlyProduct === false)
                                                            <ul class="dropdown-menu clearfix">
                                                                @foreach ($subcategory['products'] as $product)
                                                                    @php
                                                                        $productSlug = $product['slug'];
                                                                    @endphp
                                                                    <li>
                                                                        <a
                                                                            href="{{ route('product.show', $productSlug) }}">
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
                            <li class="dropdown"><a href="#">Portfolio</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{ route('website.seeallwebsites') }}">Websites
                                        </a>
                                    </li>
                                    <li><a href="{{ route('logo.seealllogos') }}">Logos
                                        </a></li>
                                    <li><a href="{{ route('video.seeallvideos') }}">Videos
                                        </a></li>
                                    <li><a href="{{ route('post.seeallposts') }}">Posts
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">
                                    Packages
                                </a>

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



                            <li><a href="{{ route('contact') }}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-action d-flex align-items-center">
                    <!-- <div class="header-cta d-flex align-items-center">
                        <div class="item-icon d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="item-text headline pera-content">
                        <span>Hotline 24/7</span>
                        <a href="tel:+(733)-860-2906">+(733)-860-2906</a>
                        </div>
                        </div> -->
                    <div class="header-cta-btn btn-spin">
                        <a href="https://client.digitalsochmedia.com/login"><span>Login</span> <i
                                class="fa-solid fa-lock"></i></a>
                    </div>
                    <button class="tz-mobile-btn-trigger mobile-menu-btn mobile_menu_button open_mobile_menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</header>


<a href="https://api.whatsapp.com/send?phone=917208909232" class="btn-whatsapp-pulse" target="_blank">
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
            <div class="m-brand-logo">
                <a href="#"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
            </div>
            <div class="mobile-search-bar position-relative">
                <form action="#">
                    <input type="text" name="search" placeholder="Keywords">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <nav class="mobile-main-navigation  clearfix ul-li">
                <ul id="m-main-nav" class="nav navbar-nav clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>

                    @foreach (getCategoryList() as $category)
                        <li class="dropdown">
                            <a href="#">
                                {{ $category['category'] }}
                            </a>

                            {{-- Only show subcategories menu if exists and not empty --}}
                            @if (!empty($category['subcategories']))
                                <ul class="dropdown-menu clearfix">
                                    @foreach ($category['subcategories'] as $subcategory)
                                        {{-- Show subcategory only if it has products --}}
                                        @if (count($subcategory['products']) > 0)
                                            @php
                                                $validProducts = array_filter($subcategory['products'] ?? [], function (
                                                    $p,
                                                ) {
                                                    return !empty($p); // removes null, "", 0, false
                                                });

                                                Log::info('Valid Products:', $validProducts);
                                                $isOnlyProduct = false;
                                                if ($validProducts && count($validProducts) > 0) {
                                                    if ($validProducts[0]['name'] == null) {
                                                        $isOnlyProduct = true;
                                                    } else {
                                                        $isOnlyProduct = false;
                                                    }

                                                    Log::info('Is Only Product:', [
                                                        'isOnlyProduct' => $isOnlyProduct,
                                                    ]);
                                                }

                                            @endphp

                                            <li
                                                class="{{ count($validProducts) > 0 && $isOnlyProduct === false ? 'dropdown' : '' }}">

                                                <a
                                                    href="{{ count($validProducts) > 0 && $isOnlyProduct === false ? '#' : route('product.show', $validProducts[0]['slug']) }}">
                                                    {{ $subcategory['subcategory'] }}
                                                </a>

                                                @if (count($validProducts) > 0 && $isOnlyProduct === false)
                                                    <ul class="dropdown-menu clearfix">
                                                        @foreach ($subcategory['products'] as $product)
                                                            @php
                                                                $productSlug = $product['slug'];
                                                            @endphp
                                                            <li>
                                                                <a href="{{ route('product.show', $productSlug) }}">
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
                    <li class="dropdown"><a href="#">Portfolio</a>
                        <ul class="dropdown-menu clearfix">
                            <li><a href="{{ route('website.seeallwebsites') }}">Websites
                                </a>
                            </li>
                            <li><a href="{{ route('logo.seealllogos') }}">Logos
                                </a></li>
                            <li><a href="{{ route('video.seeallvideos') }}">Videos
                                </a></li>
                            <li><a href="{{ route('post.seeallposts') }}">Posts
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            Packages
                        </a>

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

                    <li><a href="{{ route('contact') }}">Contacts</a></li>
                </ul>
            </nav>
            <div class="ptx-mobile-header-social text-center">
                <a href="#"> <i class="fab fa-instagram"></i></a>
                <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                <a href="#"> <i class="fab fa-facebook"></i></a>
                <a href="#"> <i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- /Mobile-Menu -->
    <!-- mobile menu code here -->
</div>


<div id="mybutton">
    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" class="feedback show-modal">
        <i class="fa-solid fa-message"></i> Get a Quote
    </a>
</div>


<div class="container mt-5">
    <h2>Bootstrap 5.2.3 Modal Example</h2>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-header">
                    <h2 class="popup-title">Get a Quote</h2>
                    <button class="popup-close-btn" type="button" data-bs-dismiss="modal"
                        aria-label="Close">&times;</button>
                </div>

                <div class="popup-body">
                    <form class="popup-form" action="" method="POST" onsubmit="handleQuoteSubmit(event)">
                        @csrf

                        <div class="popup-form-group">

                            <input type="text" name="full_name" id="fullName" class="popup-input" required
                                value="{{ old('full_name') }}" placeholder="Full Name">
                            @error('full_name')
                                <span class="popup-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="popup-form-group">

                            <input type="text" name="address" id="address" class="popup-input" required
                                value="{{ old('address') }}" placeholder="Address">
                            @error('address')
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

                        <div class="popup-form-group">

                            <input type="tel" name="mobile" id="mobile" class="popup-input" required
                                value="{{ old('mobile') }}" placeholder="Mobile">
                            @error('mobile')
                                <span class="popup-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="popup-form-group">

                            <input type="email" name="email" id="email" class="popup-input" required
                                value="{{ old('email') }}"placeholder="Email">
                            @error('email')
                                <span class="popup-error">{{ $message }}</span>
                            @enderror
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
<script>
    // Optional: manual trigger example
    const btn = document.getElementById("cust_btn");
    if (btn) {
        btn.addEventListener("click", function() {
            const myModal = new bootstrap.Modal(document.getElementById("myModal"));
            myModal.toggle();
        });
    }

    // Auto-open modal after 10 seconds on page load
    window.addEventListener("load", function() {
        setTimeout(() => {
            const modalEl = document.getElementById("myModal");

            // ✅ Check if modal is already open
            if (!modalEl.classList.contains("show")) {
                const myModal = new bootstrap.Modal(modalEl);
                myModal.show();
            }
        }, 10000); // 10 seconds = 10000 ms
    });
</script>
