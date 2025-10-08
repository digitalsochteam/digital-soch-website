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

    <section id="tz-breadcrumb" class="tz-breadcrumb-sec position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <div class="container">
            <div class="tz-breadcrumb-content headline text-center ul-li">
                <h2 class="bread_heading">TERMS & CONDITIONS</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>TERMS & CONDITIONS</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="policy-container">
            <h2>Terms and Conditions</h2>
            <p>
                If you are looking for a strategic partner for your digital marketing needs, then you can contact us.
                The services or features available through this website are an entity of the company.
                By using this site, you agree to the terms and conditions of this site.
                If you do not agree with the terms and conditions, then please do not use the website.
                All the materials present on the site are not the property of any third party and are protected by
                copyright law worldwide.
            </p>

            <p>
                Digital Soch does not grant any express rights under any patents, trademarks, copyrights,
                or trade secret information. If you find any content/images/copyright
                belonging to you or any other party, you can write to us, and we will immediately remove it.
                We value long-term customer relationships and aim to maintain high-end business relations with our clients.
            </p>

            <h3>Limited License</h3>
            <p>
                Digital Soch grants you a non-exclusive, non-transferable, limited right to access.
                You agree not to interrupt or attempt to interrupt the operations of the site in any manner.
            </p>

            <h3>“As Is” and “As Available” Disclaimer</h3>
            <p>
                The Service is provided “AS IS” and “AS AVAILABLE” with all faults and defects.
                We do not provide any warranty of any kind. Without limitation, Digital Soch does not guarantee
                that the service will meet your requirements, operate without interruption,
                meet performance standards, or be error-free.
                No assurance is given that any errors or defects will be corrected.
            </p>

            <h3>Links to Other Websites</h3>
            <p>
                Our website may contain links to third-party websites not owned or controlled by
                <span class="highlight">Digital Soch Pvt. Ltd.</span>.
                We are not responsible for the content, privacy policies, or practices of any third-party websites or
                services.
                You agree that Digital Soch shall not be liable for any damage or loss caused by using such third-party
                services.
            </p>

            <h3>Governing Law</h3>
            <p>
                The laws of the country, excluding conflict of law rules, shall govern these Terms and your use of the
                Service.
                Your use of the Application may also be subject to other local, state, national, or international laws.
            </p>

            <h3>Dispute Resolution</h3>
            <p>
                If you have any dispute regarding the services rendered by Digital Soch,
                you agree to first resolve the issue formally or informally by contacting the company.
            </p>

            <h3>Changes To These Terms & Conditions</h3>
            <p>
                We reserve the right to modify these Terms and Conditions at any time.
                Notice will be provided whenever changes are made.
                If you continue to access or use our services, you agree to be bound by the revised terms.
                If you disagree with the revised conditions, please stop using the website or services immediately.
            </p>

            <h3>Contacting Us</h3>
            <p>
                If you have any questions regarding the Terms and Conditions,
                please contact us at <a href="mailto:info@digitalsochmedia.com">info@digitalsochmedia.com</a>.
            </p>
        </div>
    </div>
@endsection
