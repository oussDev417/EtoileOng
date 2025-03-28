@extends('frontend.layouts.master')

@section('title', $axe->title)

@section('content')
<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
    <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-56.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>{{ $axe->title }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>Nos opportunités</a></li>
                <li>{{ $axe->title }}</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- event-details -->
<section class="event-details pt_120 pb_120 bg-color-3">
    <div class="auto-container">
        <figure class="big-image"><img src="{{ asset('storage/axes/' . $axe->image) }}" alt="{{ $axe->title }}"></figure>
        <div class="event-details-content">
            <div class="content-one">
                <div class="location-box"><i class="icon-38"></i><span>ONG Etoile D'afrik</span></div>
                <h2>{{ $axe->title }}</h2>
                <div class="info-box clearfix">
                    <div class="single-item">
                        <div class="icon-box"><img src="assets/images/icons/icon-23.png" alt=""></div>
                        <div class="inner">
                            <span>Organisation</span>
                            <h6>Etoile D'afrik</h6>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><img src="assets/images/icons/icon-24.png" alt=""></div>
                        <div class="inner">
                            <span>Impact</span>
                            <h6>Communautaire</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-two">
                <h3>À propos de cette opportunité</h3>
                <p>{{ $axe->short_description }}</p>
            </div>
            <div class="content-three">
                <h3>Points clés</h3>
                <div class="list-inner">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 list-column">
                            <div class="text">
                                {!! $axe->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @if(isset($axe->video_url))
            <div class="content-seven">
                <h3>Vidéo de présentation</h3>
                <div class="video-container">
                    <div class="video-box">
                        <img src="{{ asset('storage/axes/' . $axe->image) }}" alt="Vidéo de présentation">
                        <a href="{{ $axe->video_url }}" class="video-btn" data-fancybox="video-gallery"><i class="icon-20"></i></a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<!-- event-details  end -->

<style>
.event-details .big-image {
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 40px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.event-details .big-image img {
    width: 100%;
    height: auto;
    transition: transform 0.5s ease;
}

.event-details .big-image:hover img {
    transform: scale(1.03);
}

.content-one .location-box {
    display: inline-block;
    position: relative;
    padding: 12px 30px;
    border-radius: 30px;
    margin-bottom: 20px;
    background: #f5f5f5;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
}

.content-one h2 {
    font-size: 36px;
    margin-bottom: 25px;
    color: #222;
}

.info-box {
    display: flex;
    flex-wrap: wrap;
    background: #ffffff;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 40px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.info-box .single-item {
    flex: 0 0 auto;
    width: 50%;
    padding: 15px;
    display: flex;
    align-items: center;
}

.info-box .icon-box {
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    border-radius: 50%;
    background: #f5f5f5;
    margin-right: 15px;
}

.info-box .inner span {
    display: block;
    font-size: 14px;
    line-height: 24px;
    color: #777;
    margin-bottom: 5px;
}

.info-box .inner h6 {
    font-size: 18px;
    line-height: 26px;
    font-weight: 600;
    color: #222;
}

.content-two, .content-three, .content-seven {
    margin-bottom: 40px;
    padding: 30px;
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.content-two h3, .content-three h3, .content-seven h3 {
    position: relative;
    font-size: 24px;
    line-height: 32px;
    margin-bottom: 20px;
    padding-bottom: 15px;
}

.content-two h3:before, .content-three h3:before, .content-seven h3:before {
    position: absolute;
    content: '';
    background: #ff7162;
    width: 40px;
    height: 3px;
    left: 0px;
    bottom: 0px;
}

.video-container {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
}

.video-box {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}

.video-box img {
    width: 100%;
    transition: transform 0.5s ease;
}

.video-box:hover img {
    transform: scale(1.05);
}

.video-btn {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    line-height: 80px;
    text-align: center;
    background: #ff7162;
    font-size: 24px;
    color: #ffffff;
    border-radius: 50%;
    z-index: 1;
    transition: all 500ms ease;
}

.video-btn:hover {
    background: #222;
}

.video-btn:before {
    position: absolute;
    content: '';
    width: 80px;
    height: 80px;
    border: 2px solid #ffffff;
    left: 0px;
    top: 0px;
    border-radius: 50%;
    z-index: -1;
    animation: pulse-1 2s infinite;
}

@keyframes pulse-1 {
    0% {
        transform: scale(0.8);
        opacity: 0;
    }
    50% {
        transform: scale(1.5);
        opacity: 0.5;
    }
    100% {
        transform: scale(2);
        opacity: 0;
    }
}

@media only screen and (max-width: 767px) {
    .info-box .single-item {
        width: 100%;
    }
    
    .content-one h2 {
        font-size: 28px;
    }
    
    .content-two, .content-three, .content-seven {
        padding: 20px;
    }
}
</style>

@endsection
