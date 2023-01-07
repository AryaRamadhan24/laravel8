@include('layouts.appdashboard')

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('dashboard.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            {{-- topbar --}}
            @include('dashboard.topbar')
            {{--end topbar --}}

            <!-- Main Content -->
            <div style="padding-top:100px;">
            @yield('content')
            </div>
            <!--end Main Content -->

            <!-- Footer -->

            @include('dashboard.footer')

            <!-- End of Footer -->
        </div>
        <!--end Content Wrapper -->

    </div>
    <!--end Page Wrapper -->


    {{-- javascript --}}

</body>
</html>
