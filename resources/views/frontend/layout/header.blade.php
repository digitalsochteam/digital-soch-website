<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>
<header id="tz-header" class="tz-header-section header_style_one txa_sticky_header">
    <div class="tz-header-top">
        <div class="container">
            <div class="tz-top-info-wrap d-flex justify-content-between align-items-center">
                <div class="tz-top-cta">
                    <a href="#"><i class="fa-solid fa-location-dot"></i> 105,Ackruti Star, Midc central road</a>
                    <a href="mailto:info@digitalsochmedia.com"><i class="fa-solid fa-envelope"></i>
                        info@digitalsochmedia.com</a>
                </div>
                <div class="tz-top-social">
                    <span>Follow Us:</span>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-behance"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="tz-main-navigation-wrap">
        <div class="container">
            <div class="tz-main-navigation-area d-flex justify-content-between align-items-center">
                <div class="brand-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
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
                        <a href="{{ route('contact') }}"><span>Contact Now</span> <i class="fa-solid fa-plus"></i></a>
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

< <a href="https://api.whatsapp.com/send?phone=917208909232" class="float" target="_blank">
    <i class="fa-brands fa-whatsapp my-float"></i>
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
                                <a href="{{ url('/category/' . urlencode($category['category'])) }}">
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
                                                @endphp

                                                <li class="{{ count($validProducts) > 0 ? 'dropdown' : '' }}">

                                                    <a
                                                        href="{{ url('/subcategory/' . urlencode($subcategory['subcategory'])) }}">
                                                        {{ $subcategory['subcategory'] }}
                                                    </a>

                                                    @if (count($validProducts) > 0)
                                                        <ul class="dropdown-menu clearfix">
                                                            @foreach ($subcategory['products'] as $product)
                                                                <li>
                                                                    <a href="#">
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
