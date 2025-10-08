<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.head')

<body>

    @include('frontend.layout.header')

    <main>
        @yield('content')
    </main>

    @include('frontend.layout.footer')
    @include('frontend.layout.script')
</body>

</html>
