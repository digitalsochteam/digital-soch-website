<!DOCTYPE html>
<html lang="en">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@include('backend.layout.head')

<body class="bg-gray-50 font-sans" x-data="{ sidebarOpen: false }">
    <div class="flex h-screen overflow-hidden">

        <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
            class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>



        @include('backend.layout.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- Header -->
            @include('backend.layout.header')
            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6">

                @yield('content')

                <!-- Recent Activity -->
            </main>
            @yield('scripts')

            <!-- Footer -->
            @include('backend.layout.footer')
        </div>
    </div>
</body>

</html>
