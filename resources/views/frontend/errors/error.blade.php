@extends('frontend.layout.app')
@section('title', 'Page Not Found | Digital Soch')
@section('content')
    <div
        style="min-height: 80vh; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
        {{-- <img src="{{ asset('images/404.svg') }}" alt="404" style="max-width: 300px; margin-bottom: 20px;"> --}}
        <h1 style="font-size: 48px; color: #29378f;">Oops! Page Not Found</h1>
        <p style="font-size: 18px; max-width: 500px; margin: 10px auto;">
            The page you're looking for doesn't exist or has been moved.
            Let's get you back on track.
        </p>
        <a href="{{ url('/') }}"
            style="background-color: #df1b25; color: #fff; padding: 12px 24px; border-radius: 8px; text-decoration: none; margin-top: 20px;">
            Go to Homepage
        </a>
    </div>
@endsection
