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

                                                        $isOnlyProduct = false;
                                                        if ($validProducts && count($validProducts) > 0) {
                                                            if ($validProducts[0]['name'] == null) {
                                                                $isOnlyProduct = true;
                                                            } else {
                                                                $isOnlyProduct = false;
                                                            }
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
