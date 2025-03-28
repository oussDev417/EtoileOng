@extends('frontend.layouts.master')

@section('title', 'Nous soutenir')

@section('content')	

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(https://images.unsplash.com/photo-1590845947670-c009801ffa74?q=80&w=2059&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Nous soutenir</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>Nous soutenir</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- donation-section -->
<section class="donation-section bg-color-3 pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title mb_35">
                        <span class="sub-title mb_12">Votre soutien compte</span>
                        <h2>Nous soutenir</h2>
                        <p class="mt_15">Votre participation, aussi modeste soit-elle, constitue le meilleur soutien pour la poursuite de nos projets.</p>
                    </div>
                    <div class="image-box">
                        <figure class="image">
                            <img src="https://images.unsplash.com/photo-1473594659356-a404044aa2c2?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Donation" onerror="this.src='https://placehold.co/600x400?text=ONG+Etoile+DAfrik'">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="donation-options">
                    <!-- Option 1 -->
                    <div class="donation-option-block mb_30">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-17"></i></div>
                            <h3>Don sur le compte de ONG Etoile D'afrik</h3>
                            <p>Vous versez votre don sur le compte de l'ONG Etoile D'afrik:</p>
                            <div class="account-info">
                                @if(isset($settings) && $settings->bank_number)
                                    <span>N° {{ $settings->bank_number }}</span>
                                @endif
                            </div>
                            <p>Votre participation, aussi modeste soit-elle, constitue le meilleur soutien pour la poursuite de nos projets.</p>
                            <p>Vous bénéficiez d'une déduction fiscale à partir de 40 euros de dons par an. Une attestation fiscale vous sera envoyée dès votre premier trimestre suivant l'année de votre don/vos dons.</p>
                        </div>
                    </div>

                    <!-- Option 2 -->
                    <div class="donation-option-block mb_30">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-43"></i></div>
                            <h3>Lever de fonds pour la construction du siège</h3>
                            <p>Vous pouvez contribuer à la construction de notre siège en faisant un don via le bouton suivant :</p>
                            <div class="btn-box">
                                <a href="/contact" class="theme-btn btn-one" style="color:black!important;">Faire un don <i class="icon-2"></i></a>
                            </div>
                            <p>Chaque contribution, aussi modeste soit-elle, nous rapproche de notre objectif.</p>
                        </div>
                    </div>

                    <!-- Option 3 -->
                    <div class="donation-option-block">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h3>Faire un ordre permanent</h3>
                            <p>Un don, fait par ordre permanent ou par domiciliation, nous permet de planifier nos actions dans le moyen ou le long terme.</p>
                            <p>Pour vous, c'est la satisfaction de participer à nos actions dans la durée. C'est sortir d'une action de charité pour rentrer dans une véritable logique de développement durable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- donation-section end -->

<!-- DYNAMIC SECTIONS START -->
@if(isset($pageSections) && count($pageSections) > 0)
    @foreach($pageSections as $pageSection)
        <x-dynamic-section :pageSection="$pageSection" />
    @endforeach
@endif
<!-- DYNAMIC SECTIONS END -->

<style>
/* Donation Page Styles */
.donation-options {
    padding: 30px 0;
}

.donation-option-block {
    margin-bottom: 30px;
}

.donation-option-block .inner-box {
    position: relative;
    display: block;
    background-color: #ffffff;
    border-radius: 10px;
    padding: 40px 30px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: all 500ms ease;
    border-left: 4px solid var(--primary-color);
}

.donation-option-block .inner-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.donation-option-block .icon-box {
    position: relative;
    display: inline-block;
    width: 70px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    border-radius: 50%;
    background-color: var(--primary-color);
    font-size: 30px;
    color: #ffffff;
    margin-bottom: 20px;
}

.donation-option-block h3 {
    position: relative;
    display: block;
    font-size: 24px;
    line-height: 32px;
    font-weight: 700;
    margin-bottom: 15px;
}

.donation-option-block p {
    margin-bottom: 15px;
}

.donation-option-block p:last-child {
    margin-bottom: 0;
}

.account-info {
    position: relative;
    display: block;
    background-color: #f5f5f5;
    border-radius: 10px;
    padding: 15px 20px;
    margin: 20px 0;
    text-align: center;
    font-weight: 700;
    font-size: 18px;
    color: var(--primary-color);
    border: 1px dashed var(--primary-color);
}

.btn-box {
    position: relative;
    display: block;
    margin: 20px 0;
    text-align: center;
}

.image-box {
    position: relative;
    display: block;
    margin-top: 30px;
    border-radius: 10px;
    overflow: hidden;
}

.image-box img {
    width: 100%;
    border-radius: 10px;
    transition: transform 0.5s ease;
}

.image-box:hover img {
    transform: scale(1.03);
}
</style>

@endsection