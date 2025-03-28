<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <title>@yield('title') - ONG Etoile D'afrik</title>
    
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-menus.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/service.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/clients.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/event.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/cause.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/cta.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/team.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/news.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/page-title.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/cause-details.css') }}" rel="stylesheet">
    <link href="assets/css/module-css/blog-details.css" rel="stylesheet">
    <link href="assets/css/module-css/event-details.css" rel="stylesheet">
    <link href="assets/css/module-css/contact.css" rel="stylesheet">
    <link href="assets/css/module-css/fluid.css" rel="stylesheet">
    <link href="assets/css/module-css/testimonial.css" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/funfact.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">


    
    <!-- Additional CSS -->
    @yield('styles')
</head>
<body>
    <!-- preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="E" class="letters-loading">E</span>
                        <span data-text-preloader="T" class="letters-loading">T</span>
                        <span data-text-preloader="O" class="letters-loading">O</span>
                        <span data-text-preloader="I" class="letters-loading">I</span>
                        <span data-text-preloader="L" class="letters-loading">L</span>
                        <span data-text-preloader="E" class="letters-loading">E</span>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- Header -->
    @include('frontend.layouts.header')
    
    <!-- Main Content -->
    <main>
        @include('frontend.layouts.alerts')
        @yield('content')
    </main>
    
    
    <!-- Footer -->
    @include('frontend.layouts.footer')
    
    <!-- Scroll to top -->
    <div class="scroll-to-top">
        <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Libraries JS -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltop.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/language.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.circleType.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    
    <!-- Additional JS -->
    @yield('scripts')
</body>
</html> 
