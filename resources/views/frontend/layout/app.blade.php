<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.head')

<body>

    <x-header />

    <main>
        @yield('content')
    </main>

    <x-footer />
    @include('frontend.layout.script')
</body>

</html>
