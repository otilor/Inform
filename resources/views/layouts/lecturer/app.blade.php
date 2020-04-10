<!DOCTYPE html>
    <html lang="en">
        @include('partials.head')
        
        <body class="fixed-left">

            <!-- Loader -->
            <!--Loader should be disabled after production-->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

            <!-- Begin page -->
            <div id="wrapper">

                <!-- ========== Le1ft Sidebar Start ========== -->
                @include('inc.lecturer.sidebar')
                <!-- Left Sidebar End -->

                <!-- Start right Content here -->

                <div class="content-page">
                    <!-- Start content -->
                        <div class="content">

                            <!-- Top Bar Start -->
                            @include('inc.nav')
                            <!-- Top Bar End -->
                            @yield('content')
                            <!-- content -->

                        @include('partials.footer')

                    </div>
                <!-- End Right content here -->
                </div>
                <!--End Content-page-->
            </div>
            <!-- END wrapper -->


            <!-- Scripts  -->
            
            @include('partials.script')

        </body>
</html>