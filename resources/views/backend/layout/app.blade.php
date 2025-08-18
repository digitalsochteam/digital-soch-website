<!DOCTYPE html>
<html lang="en">
@include('backend.layout.head')

<body>

    <x-header />

    <main>
        @yield('content')
    </main>

    @include('backend.layout.script')
</body>

</html>
