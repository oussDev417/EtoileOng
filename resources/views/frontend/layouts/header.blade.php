<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logowhite.png') }}" alt="{{ $settings->site_name ?? 'RACED ONG' }}" title=""></a></div>
        <div class="menu-outer">
            <x-menu location="mobile" />
        </div>
        <div class="contact-info">
            <h4>Contact</h4>
            <ul>
                <li>{{ $settings->contact_address ?? 'Cotonou, Bénin' }}</li>
                <li><a href="tel:{{ $settings->contact_phone ?? '' }}">{{ $settings->contact_phone ?? '+229 00 00 00 00' }}</a></li>
                <li><a href="mailto:{{ $settings->contact_email ?? '' }}">{{ $settings->contact_email ?? 'info@example.com' }}</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                @if($settings->facebook ?? true)
                    <li><a href="{{ $settings->facebook_url ?? '' }}"><span class="fab fa-facebook-square"></span></a></li>
                @endif
                @if($settings->twitter ?? true)
                    <li><a href="{{ $settings->twitter_url ?? '' }}"><span class="fab fa-twitter"></span></a></li>
                @endif
                @if($settings->instagram ?? true)
                    <li><a href="{{ $settings->instagram_url ?? '' }}"><span class="fab fa-instagram"></span></a></li>
                @endif
                @if($settings->youtube ?? true)
                    <li><a href="{{ $settings->youtube_url ?? '' }}"><span class="fab fa-youtube"></span></a></li>
                @endif
                @if($settings->whatsapp ?? true)
                    <li><a href="{{ $settings->whatsapp_url ?? '' }}"><span class="fab fa-whatsapp"></span></a></li>
                @endif
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->

<!-- search-popup -->
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box">
            <figure class="logo-box"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logowhite.png') }}" alt="{{ $settings->site_name ?? 'RACED ONG' }}"></a></figure>
            <div class="close-search"><span class="fas fa-times"></span></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="get" action="">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="q" value="" placeholder="Tapez votre mot-clé et appuyez sur Entrée" required>
                            <button type="submit"><i class="icon-1"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- search-popup end -->

<!-- main header -->
<header class="main-header header-style-four">
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logowhite.png') }}" alt="{{ $settings->site_name ?? 'RACED ONG' }}"></a></figure>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <x-menu location="header" />
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-toggler"><i class="icon-1"></i></div>
                    <div class="btn-box"><a href="{{ route('donation') }}" class="donate-box-btn theme-btn btn-one"><span class="text">Nous soutenir</span></a></div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box mr_50"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="{{ $settings->site_name ?? 'RACED ONG' }}"></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-toggler"><i class="icon-1"></i></div>
                    <div class="btn-box"><a href="{{ route('donation') }}" class="donate-box-btn theme-btn btn-one"><span class="text">Nous soutenir</span></a></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->