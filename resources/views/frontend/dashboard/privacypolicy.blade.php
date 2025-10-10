@extends('frontend.layout.app')

@section('content')
    <!-- Breadcrumb Section -->
    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">PRIVACY POLICY</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>PRIVACY POLICY</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Policy Content -->
    <div class="container">
        <div class="policy-container">
            <h2>PRIVACY POLICY</h2>
            <p>
                At <span class="highlight">Digital Soch Pvt. Ltd.</span>, we are committed to protecting your privacy.
                We understand the importance of keeping client information secure and take appropriate measures to safeguard
                all data shared online.
            </p>

            <h3>Information Collected</h3>
            <p>We may collect information depending on the type of service you are availing. This may include:</p>
            <ul>
                <li>Your name</li>
                <li>Address</li>
                <li>Telephone number</li>
                <li>Email address</li>
            </ul>

            <h3>Permissions</h3>
            <h4>Manage External / Internal Storage Access</h4>
            <p>Required to store and download reports, invoices, or documents generated through the app.</p>
            <p>We access your device’s internal storage only to allow you to download reports directly. No personal files
                from your device are accessed.</p>

            <h4>Dialer Access</h4>
            <p>Required to enable direct calling to your Relationship Manager or support team from the app.</p>
            <p>We request dialer access so you can easily connect with your Relationship Manager or support team with a
                single tap. No calls are made without your direct action, and no call data is stored.</p>

            <h3>Cookies</h3>
            <p>We use cookies to enhance your experience. You may choose not to accept cookies at any time; however, some
                website functions may be impaired if you do not accept them.</p>

            <h3>Disclosing Information</h3>
            <p>We do not disclose any personal information obtained about you to third parties.</p>

            <h3>Changes to this Policy</h3>
            <p>We may update the privacy policy as necessary. We take reasonable steps to notify our customers whenever
                there is any change to our policy.</p>

            <h3>Contacting Us</h3>
            <p>If you have any questions regarding our privacy policy, you can contact us via email:
                <a href="mailto:info@digitalsochmedia.com">info@digitalsochmedia.com</a>
            </p>
        </div>
    </div>
@endsection
