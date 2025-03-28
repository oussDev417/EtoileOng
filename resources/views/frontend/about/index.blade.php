@extends('frontend.layouts.master')

@section('title', 'À propos')

@section('content')

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(https://images.unsplash.com/photo-1590845947670-c009801ffa74?q=80&w=2059&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>À propos</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>À propos</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- about-section -->
<section class="about-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_30">
                            <span class="sub-title">À propos de nous</span>
                            <h2>ONG Etoile D'afrik</h2>
                        </div>
                        <div class="text-box mb_40">
                            @if(isset($about) && $about->short_description)
                                {!! $about->short_description !!}
                            @else
                                <p>L'ONG Etoile D'afrik est dédiée à l'amélioration des conditions de vie des communautés africaines à travers des projets durables et inclusifs.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box mr_40 pr_110 pb_80">
                        <div class="image-shape" style="background-image: url(assets/images/shape/shape-48.png);"></div>
                        <figure class="image image-1 image-hov-one"><img src="{{ asset($about->main_image ?? 'assets/images/resource/about-9.jpg') }}" alt=""></figure>
                        <figure class="image image-2 p_absolute r_0 b_0 z_2"><img src="{{ asset($about->secondary_image ?? 'assets/images/resource/about-10.jpg') }}" alt=""></figure>
                        <div class="curve-text">
                            <div class="icon-box"><img src="assets/images/icons/icon-14.png" alt=""></div>
                            <span class="curved-circle">ONG Etoile D'afrik &nbsp;&nbsp; - &nbsp;&nbsp; Ensemble pour l'Afrique &nbsp;&nbsp; - &nbsp;&nbsp;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->

<!-- fluid-style-two -->
<section class="fluid-style-two">
    <div class="outer-container clearfix">
        <div class="left-column">
            <div class="content-box">
                <div class="tabs-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">MISSION</li>
                        <li class="tab-btn" data-tab="#tab-2">VISION</li>
                        <li class="tab-btn" data-tab="#tab-3">HISTOIRE</li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <div class="sec-title mb_20 light">
                                    <span class="sub-title mb_12">ONG Etoile D'afrik</span>
                                    <h2>@if(isset($about) && $about->title){{ $about->subtitle }}@else Nos Missions @endif</h2>
                                </div>
                                <div class="text-box mb_40 text-white">
                                    @if(isset($about) && $about->mission)
                                        {!! $about->mission !!}
                                    @else
                                        <p>Notre mission est de contribuer au développement durable et à l'amélioration des conditions de vie des populations africaines.</p>
                                    @endif
                                </div>
                                <div class="btn-box">
                                    <a href="{{ route('donation') }}" class="theme-btn btn-three"><span class="text">Faire un don</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <div class="sec-title mb_20 light">
                                    <span class="sub-title mb_12">ONG Etoile D'afrik</span>
                                    <h2>Notre Vision</h2>
                                </div>
                                <div class="text-box mb_40 text-white">
                                    @if(isset($about) && $about->vision)
                                        {!! $about->vision !!}
                                    @else
                                        <p>Notre vision est de créer un avenir où chaque communauté africaine est autonome, prospère et capable de réaliser son plein potentiel.</p>
                                    @endif
                                </div>
                                <div class="btn-box">
                                    <a href="{{ route('donation') }}" class="theme-btn btn-three"><span class="text">Faire un don</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="inner-box">
                                <div class="sec-title mb_20 light">
                                    <span class="sub-title mb_12">ONG Etoile D'afrik</span>
                                    <h2>Notre Histoire</h2>
                                </div>
                                <div class="text-box mb_40 text-white">
                                    @if(isset($about) && $about->description)
                                        {!! $about->description !!}
                                    @else
                                        <p>Fondée avec passion et détermination, l'ONG Etoile D'afrik a commencé son parcours avec une vision claire pour le développement durable en Afrique.</p>
                                    @endif
                                </div>
                                <div class="btn-box">
                                    <a href="{{ route('donation') }}" class="theme-btn btn-three"><span class="text">Faire un don</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-column">
            <div class="video-inner" style="background-image: url({{ asset($about->main_image ?? 'assets/images/background/video-bg-4.jpg') }});">
                <div class="video-btn">
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><img src="assets/images/icons/icon-12.png" alt=""><span class="border-animation"></span><span class="border-animation border-1"></span><span class="border-animation border-2"></span><span class="border-animation border-3"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fluid-style-two end -->

<!-- DYNAMIC SECTIONS START -->
@if(isset($pageSections) && count($pageSections) > 0)
    @foreach($pageSections as $pageSection)
        <x-dynamic-section :pageSection="$pageSection" />
    @endforeach                                                               
@endif
<!-- DYNAMIC SECTIONS END -->

@endsection