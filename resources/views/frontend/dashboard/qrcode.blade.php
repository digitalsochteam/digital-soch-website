@extends('frontend.layout.app')

@section('content')
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">Bank Account Details</h2>
                <ul>
                    <li>Digital Soch Private Limited</li>
                </ul>
            </div>
        </div>
    </section>


    <div class="qr-container"
        style="display: flex; gap: 30px; align-items: flex-start; flex-wrap: wrap; padding-top: 50px; padding-bottom: 50px;">

        <!-- Left: Image -->
        <div class="qr-image" style="flex: 0 0 350px;">
            <img src="{{ asset('assets/img/service/qr-code-two.jpeg') }}" alt="Bank Image"
                style="width: 100%; border-radius: 10px;">
        </div>

        <!-- Right: Bank Cards -->
        <div class="qr-bank-sections" style="flex: 1; display: flex; flex-wrap: wrap; gap: 20px;">

            <div class="qr-bank-section md-6" style="flex: 1 1 300px;">
                <!-- YES BANK -->
                <div class="qr-bank-card">
                    <div class="qr-bank-header">
                        <div class="qr-bank-name">YES BANK LTD</div>
                    </div>
                    <div class="qr-bank-body">
                        <div class="qr-info-grid">
                            <div class="qr-info-item">
                                <span class="qr-info-label">Account Name</span>
                                <span class="qr-info-value">DIGITAL SOCH PRIVATE LIMITED</span>
                            </div>
                            <div class="qr-info-item">
                                <span class="qr-info-label">Account Number</span>
                                <span class="qr-info-value">020163700001300</span>
                            </div>
                            <div class="qr-info-item">
                                <span class="qr-info-label">IFSC Code</span>
                                <span class="qr-info-value">YESB0000201</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- HDFC BANK -->
                <div class="qr-bank-card">
                    <div class="qr-bank-header">
                        <div class="qr-bank-name">HDFC BANK</div>
                    </div>
                    <div class="qr-bank-body">
                        <div class="qr-info-grid">
                            <div class="qr-info-item">
                                <span class="qr-info-label">Account Holder</span>
                                <span class="qr-info-value">DIGITAL SOCH PRIVATE LIMITED</span>
                            </div>
                            <div class="qr-info-item">
                                <span class="qr-info-label">Account Number</span>
                                <span class="qr-info-value">50200049513153</span>
                            </div>
                            <div class="qr-info-item">
                                <span class="qr-info-label">IFSC Code</span>
                                <span class="qr-info-value">HDFC0000542</span>
                            </div>
                            <div class="qr-info-item">
                                <span class="qr-info-label">Branch</span>
                                <span class="qr-info-value">KAMALA MILLS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="qr-bank-section md-6" style="flex: 1 1 300px;">
                <!-- You can duplicate the bank cards here as needed -->
            </div>

        </div>

    </div>
@endsection
