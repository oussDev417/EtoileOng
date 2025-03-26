<!-- main-footer -->
<footer class="main-footer">
    <div class="auto-container">
        <div class="footer-top">
            <figure class="footer-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-1.png') }}" alt=""></a></figure>
            <div class="subscribe-box">
                <form action="{{ route('newsletter.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Votre email" required>
                        <button type="submit">S'abonner</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget-section pt_100 pb_110">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>À propos</h3>
                        </div>
                        <div class="widget-content">
                            <p>ONG Etoile D'afrik a pour objectif de promouvoir l'excellence a travers les trophées Général Mathieu KEREKOU qui est une cérémonie de remise de distinction et intervient dans plusieurs secteurs d'activités.</p>
                            <ul class="social-links">
                                @if($settings->facebook ?? true)
                                    <li><a href="{{ $settings->facebook_url ?? '' }}"><i class="icon-14"></i></a></li>
                                @endif
                                @if($settings->twitter ?? true)
                                    <li><a href="{{ $settings->twitter_url ?? '' }}"><i class="icon-15"></i></a></li>
                                @endif
                                @if($settings->instagram ?? true)
                                    <li><a href="{{ $settings->instagram_url ?? '' }}"><i class="icon-16"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml_50">
                        <div class="widget-title">
                            <h3>Liens Rapides</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <x-menu location="footer" />
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml_30">
                        <div class="widget-title">
                            <h3>Liens Utiles</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('about') }}">Mentions légales</a></li>
                                <li><a href="#">Politique de confidentialité</a></li>
                                <li><a href="#">Conditions d'utilisation</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contact</h3>
                        </div>
                        <div class="widget-content">
                            <p>ONG Etoile D'afrik</p>
                            <ul class="info-list">
                                <li><i class="icon-17"></i><span>{{ $settings->contact_address ?? '' }}</span></li>
                                <li><i class="icon-18"></i><a href="mailto:{{ $settings->contact_email ?? '' }}">{{ $settings->contact_email ?? '' }}</a></li>
                                <li class="phone"><i class="icon-19"></i><a href="tel:{{ $settings->contact_phone ?? '' }}">{{ $settings->contact_phone ?? '' }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="copyright"><p>&copy; {{ date('Y') }} {{ $settings->site_name}} by <a href="https://www.xtopdigital.com" target="_blank">XTOP DIGITAL</a>. Tous droits réservés</p></div>
        </div>
    </div>
</footer>
<!-- main-footer end  -->

<!--Scroll to top-->
<div class="scroll-to-top">
    <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>