<!-- about-style-six -->
<section class="about-style-six pb_120 wow animate__fadeInUp">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box mr_40 pr_110 pb_80">
                        <div class="image-shape" style="background-image: url({{ asset('assets/images/shape/shape-48.png') }});"></div>
                        <figure class="image image-1 image-hov-one"><img src="{{ asset($about->main_image ?? 'img/enfant-maire.jpeg') }}" alt=""></figure>
                        <figure class="image image-2 p_absolute r_0 b_0 z_2"><img src="{{ asset($about->secondary_image ?? 'img/enfant-maire.jpeg')}}" alt=""></figure>
                        <div class="curve-text">
                            <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-14.png') }}" alt=""></div>
                            <span class="curved-circle">15+ années d'existence &nbsp;&nbsp; - &nbsp;&nbsp; 15+ années d'existence &nbsp;&nbsp; - &nbsp;&nbsp;</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_60">
                        <div class="sec-title mb_20">
                            <span class="sub-title mb_12">À propos de nous</span>
                            <h2>{{ $about->subtitle ?? 'Nous croyons en un avenir meilleur pour <span>les enfants</span>' }}</h2>
                        </div>
                        <div class="text-box mb_35">
                            <p>{{ $about->short_description ?? 'Nous sommes une organisation non gouvernementale dédiée à l\'amélioration des conditions de vie des enfants et des jeunes en Afrique.' }}</p>
                        </div>
                        <div class="quote-box">
                            <div class="light-icon p_absolute t_30 r_30"><img src="{{ asset('assets/images/icons/icon-11.png') }}" alt=""></div>
                            <h4>{!! Str::limit($about->mission ?? 'Soutenir les enfants et les jeunes en difficulté et créer un monde où chaque enfant a accès à l\'éducation', 100) !!}</h4>
                        </div>
                        <div class="btn-box mt_35">
                            <a href="{{ route('about') }}" class="theme-btn btn-one"><span class="text">En savoir plus</span><i class="icon-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-six end -->