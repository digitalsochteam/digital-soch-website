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

    <!-- Package Details Section -->
    <section class="pricing-section">
        <div class="pricing-container">
            @foreach ($subscriptions as $plan)
                <div class="pricing-card {{ $plan['ispopular'] ? 'popular-card' : '' }}"
                    style="--card-color: {{ $plan->color ?? '#000000' }};">

                    @if ($plan['ispopular'])
                        <div class="popular-badge">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"
                                    fill="currentColor" />
                            </svg>
                            MOST POPULAR
                        </div>
                    @endif

                    <div class="card-inner">
                        @if (!empty($plan->image))
                            <div class="plan-image">
                                <img src="{{ Storage::url($plan->image) }}" alt="{{ $plan->title ?? 'Package' }} image" />
                            </div>
                        @endif

                        <div class="plan-header">
                            <h3 class="plan-title">{{ $plan['title'] }}</h3>
                        </div>
                        @if (!empty($plan->description))
                            <div class="plan-header">
                                <h6 style="color: #ffffff">{{ $plan['description'] }}</h3>
                            </div>
                        @endif
                        @php
                            $features = is_array($plan->head) ? $plan->head : json_decode($plan->head, true) ?? [];
                        @endphp

                        <ul class="feature-list">
                            @foreach ($features as $index => $feature)
                                <li class="feature-item">
                                    <svg class="check-icon" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none">
                                        <circle cx="12" cy="12" r="10" fill="rgba(255,255,255,0.2)" />
                                        <path d="M9 12L11 14L15 10" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <div class="feature-content">
                                        <span class="feature-name">{{ $feature['key'] }}</span>
                                        <span class="feature-value">{{ $feature['value'] }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <button class="cta-button">
                            Get Started
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="plan-header" style="text-align: center; margin-top: 60px; font-weight: 600; ">
            <h5>Note: An Additional GST Of 18% Will Be Applicable On All Services.</h5>
        </div>
    </section>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .pricing-section {
            padding: 80px 20px;
            min-height: 100vh;
        }

        .pricing-container {
            display: flex;
            gap: 40px;
            max-width: 1300px;
            margin: 0 auto;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch;
        }

        .pricing-card {
            background: var(--card-color, #000000);
            border-radius: 24px;
            padding: 0;
            width: 380px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        .pricing-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg,
                    rgba(255, 255, 255, 0.1) 0%,
                    rgba(255, 255, 255, 0) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
        }

        .pricing-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .pricing-card:hover::before {
            opacity: 1;
        }

        .popular-card {
            /* border: 2px solid #ffd700; */
            /* box-shadow: 0 10px 40px rgba(255, 215, 0, 0.4); */
        }

        .popular-card:hover {
            /* box-shadow: 0 20px 60px rgba(255, 215, 0, 0.6); */
        }

        .popular-badge {
            position: absolute;
            top: 40px;
            right: -45px;
            background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
            color: #000;
            padding: 8px 45px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transform: rotate(45deg);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            gap: 6px;
            z-index: 10;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                box-shadow: 0 4px 12px rgba(255, 215, 0, 0.3);
            }

            50% {
                box-shadow: 0 4px 20px rgba(255, 215, 0, 0.6);
            }
        }

        .card-inner {
            padding: 50px 35px;
            position: relative;
            z-index: 1;
        }

        .plan-image {
            overflow: hidden;
            border-radius: 22px 22px 0 0;
            position: relative;
            text-align: center;
            padding-bottom: 30px;
        }

        .plan-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 20%;
            background: linear-gradient(to top, var(--card-color), transparent);
        }

        .plan-image img {
            width: 40%;
            height: 40%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .pricing-card:hover .plan-image img {
            transform: scale(0.8);
        }

        .plan-header {
            text-align: center;
            margin-bottom: 35px;
            position: relative;
        }

        .plan-header::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            border-radius: 2px;
        }

        .plan-title {
            font-size: 25px;
            font-weight: 800;
            color: white;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .feature-list {
            list-style: none;
            margin-bottom: 35px;
        }

        .feature-item {
            padding: 16px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: flex-start;
            gap: 15px;
            opacity: 0;
            animation: fadeInUp 0.5s ease forwards;
        }

        .feature-item:nth-child(1) {
            animation-delay: 0.1s;
        }

        .feature-item:nth-child(2) {
            animation-delay: 0.2s;
        }

        .feature-item:nth-child(3) {
            animation-delay: 0.3s;
        }

        .feature-item:nth-child(4) {
            animation-delay: 0.4s;
        }

        .feature-item:nth-child(5) {
            animation-delay: 0.5s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .feature-item:last-child {
            border-bottom: none;
        }

        .check-icon {
            flex-shrink: 0;
            margin-top: 2px;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        .feature-content {
            flex: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .feature-name {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
            font-size: 15px;
        }

        .feature-value {
            font-weight: 700;
            color: white;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.15);
            padding: 4px 12px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            white-space: nowrap;
        }

        .cta-button {
            width: 100%;
            padding: 16px 28px;
            background: rgba(255, 255, 255, 0.95);
            color: var(--card-color, #000);
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .cta-button:hover {
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .cta-button:active {
            transform: translateY(0);
        }

        .cta-button svg {
            transition: transform 0.3s ease;
        }

        .cta-button:hover svg {
            transform: translateX(5px);
        }

        /* Responsive Design */
        @media (max-width: 1100px) {
            .pricing-container {
                flex-direction: column;
                align-items: center;
            }

            .pricing-card {
                width: 100%;
                max-width: 450px;
            }
        }

        @media (max-width: 480px) {
            .pricing-section {
                padding: 60px 15px;
            }

            .pricing-card {
                width: 100%;
            }

            .card-inner {
                padding: 40px 25px;
            }

            .plan-image {
                margin: -7px -25px 25px -25px;

                text-align: center;
                padding-bottom: 27px;
            }

            .plan-title {
                font-size: 28px;
            }

            .popular-badge {
                font-size: 9px;
                padding: 6px 40px;
            }
        }
    </style>
@endsection
