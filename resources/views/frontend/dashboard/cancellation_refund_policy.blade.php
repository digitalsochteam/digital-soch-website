@extends('frontend.layout.app')

@section('content')
    <style>
        .policy-container {
            max-width: 100%;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .policy-container h2 {
            color: #000000;
            /* app primary color */
            margin-bottom: 15px;
        }

        .policy-container h3 {
            color: #000000;
            /* app secondary color */
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .policy-container ul {
            margin-left: 20px;
            padding-left: 15px;
        }

        .policy-container li {
            margin-bottom: 12px;
            list-style-type: disc;
        }

        .policy-container .highlight {
            font-weight: bold;
            color: #000000;
        }
    </style>

    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">Cancellation & Refund Policy</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Cancellation & Refund Policy</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Policy Content -->
    <div class="container">
        <div class="policy-container">
            <h2>Cancellation & Refund Policy</h2>
            <p>
                At <span class="highlight">Digital Soch Pvt. Ltd.</span> we follow a transparent & fuss-free refund &
                cancellation policy.
            </p>

            <ul>
                <li>
                    If you wish to cancel your contract with us, then you can send a request to our accounts department at
                    <a href="mailto:accounts@digitalsochmedia.com">accounts@digitalsochmedia.com</a> within 7 days of order
                    placement.
                    The cancellation is only valid once the concerned department confirms it.
                </li>
                <li>
                    The cancellation can only be made before the execution of the project. Once the project is initiated,
                    you
                    cannot make a cancellation request.
                </li>
            </ul>

            <h4>Refunds</h4>
            <p>
                In the case of monthly packages, it is understandable that the payment for the next month is released after
                considering and reviewing the current month's performance.
            </p>
            <p>
                Digital Soch does not make any guarantee based on web traffic/ranking, etc., and is not responsible for any
                refund claims thereof.
            </p>
        </div>
    </div>
@endsection
