@extends('frontend.layouts.master')

@section('title', 'Contactez-nous')

@section('content')
<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(https://images.unsplash.com/photo-1590845947670-c009801ffa74?q=80&w=2059&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Contactez-nous</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>Contactez-nous</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- contact-section -->
<section class="contact-section bg-color-3 pt_120 pb_120">
    <div class="auto-container">
        <div class="upper-content mb_120">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb_35">
                            <span class="sub-title mb_12">Prenez contact</span>
                            <h2>Connectons-nous ensemble</h2>
                            <p class="mt_15">ONG Etoile D'afrik est à votre écoute pour toutes vos questions et suggestions. N'hésitez pas à nous contacter pour en savoir plus sur nos actions et comment vous pouvez contribuer à notre mission.</p>
                        </div>
                        <div class="inner-box">
                            <div class="single-item">
                                <div class="icon-box"><i class="icon-17"></i></div>
                                <div class="inner">
                                    <h4>Adresse</h4>
                                    <p>{{ $settings->contact_address ?? 'Cotonou, Aibatin, Immeuble Le Verseau' }}</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="icon-43"></i></div>
                                <div class="inner">
                                    <h4>Téléphone</h4>
                                    <p><a href="tel:{{ $settings->contact_phone ?? '+229 57-70-28-05' }}">{{ $settings->contact_phone ?? '+229 57-70-28-05' }}</a></p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <div class="inner">
                                    <h4>Email</h4>
                                    <p><a href="mailto:{{ $settings->contact_email ?? 'ongcarrefourjeunesseafrique@gmail.com' }}">{{ $settings->contact_email ?? 'ongcarrefourjeunesseafrique@gmail.com' }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <form action="{{ route('contact.store') }}" method="post" class="default-form">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Nom</label>
                                    <input type="text" name="name" placeholder="" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Prénom</label>
                                    <input type="text" name="prenom" placeholder="" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Téléphone</label>
                                    <input type="text" name="phone" placeholder="" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Objet</label>
                                    <input type="text" name="objet" placeholder="" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Message</label>
                                    <textarea name="message" placeholder=""></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn btn-one" name="submit-form"><span class="text">Envoyer</span></button>
                                </div>
                            </div>
                            @if(session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-inner">
            <iframe src="{{ $settings->google_maps ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4273.369923927683!2d89.24843545559786!3d25.755317550773302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e32e0754341e5f%3A0xa50209e1e2d5aed5!2sRangpur%20Zoo!5e0!3m2!1sen!2sbd!4v1736854209235!5m2!1sen!2sbd' }}" width="100%" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>
<!-- contact-section end -->
@endsection