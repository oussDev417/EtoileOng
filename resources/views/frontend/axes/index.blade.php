@extends('frontend.layouts.master')

@section('title', 'Nos opportunités')

@section('content')

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(https://images.unsplash.com/photo-1590845947670-c009801ffa74?q=80&w=2059&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Nos opportunités</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>Nos opportunités</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- event-page-section -->
<section class="event-page-section bg-color-3 pt_120 pb_120">
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <span class="sub-title">ONG Etoile D'afrik</span>
            <h2>Nos axes d'intervention</h2>
        </div>
        <div class="row clearfix">
            @foreach($axes as $axe)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ route('axes.show', $axe->slug) }}">
                                    <img src="{{ asset('storage/axes/' . $axe->image) }}" alt="{{ $axe->title }}">
                                </a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ route('axes.show', $axe->slug) }}">{{ $axe->title }}</a></h3>
                            <p>{{ Str::limit($axe->short_description, 100) }}</p>
                            <div class="link-btn">
                                <a href="{{ route('axes.show', $axe->slug) }}">
                                    <span>Voir détails</span><i class="icon-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- event-page-section end -->

@endsection
