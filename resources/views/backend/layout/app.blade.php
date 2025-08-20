<!DOCTYPE html>
<html lang="en">

@include('backend.layout.head')

<body class="bg-gray-50 font-sans" x-data="{ sidebarOpen: false }">
    <div class="flex h-screen overflow-hidden">


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
