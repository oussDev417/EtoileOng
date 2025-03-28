@extends('frontend.layouts.master')

@section('title', $project->title ?? 'Détail du projet')

@section('content')
<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/background/page-title-5.jpg);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>{{ $project->title ?? 'Détail du projet' }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('projects.index') }}">Nos projets</a></li>
                <li>{{ $project->title ?? 'Détail du projet' }}</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- cause-details -->
<section class="cause-details bg-color-3 pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                <div class="cause-details-content">
                    <div class="cause-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    @if($project->image)
                                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                                    @endif
                                </figure>
                                @if($project->category)
                                    <span class="category">{{ $project->category->name }}</span>
                                @endif
                            </div>
                            <div class="lower-content">
                                <h2>{{ $project->title }}</h2>
                                <p>{!! $project->short_description ?? '' !!}</p>
                            </div>
                        </div>
                    </div>
                    

                    <div class="content-two mb_60">
                        <div class="text-box mb_40">
                            <h2>À propos de ce projet</h2>
                            {!! $project->description !!}
                        </div>
                        
                        @if($project->image)
                            <figure class="image-box"><img src="{{ asset($project->image) }}" alt="{{ $project->title }}"></figure>
                        @endif
                        
                        <blockquote>
                            <div class="icon-box"><i class="icon-36"></i></div>
                            <p>ONG Etoile D'afrik s'engage à transformer des vies à travers des projets communautaires durables.</p>
                            <h5>Etoile D'afrik</h5>
                        </blockquote>
                    </div>
                    
                    <div class="content-one mb_60">
                        <h2>Soutenez ce projet: <span>Faites la différence</span></h2>
                        <a href="{{ route('donation') }}" class="theme-btn btn-two"><span class="text">Faire un don</span><i class="icon-2"></i></a>
                    </div>
                    
                    <div class="content-four">
                        <h2>Contactez-nous</h2>
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Votre nom" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Adresse email" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Numéro de téléphone" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button type="submit" class="theme-btn btn-two"><span class="text">Envoyer</span><i class="icon-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-column">
                <div class="default-sidebar cause-sidebar">
                    <div class="category-widget sidebar-widget mb_30">
                        <div class="widget-title mb_25">
                            <h3>Informations</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                @if($project->category)
                                    <li><a href="#">Catégorie: {{ $project->category->name }}</a></li>
                                @endif
                                <li><a href="#">Auteur: {{ $project->author ?? 'ONG Etoile D\'afrik' }}</a></li>
                                @if($project->budget)
                                    <li><a href="#">Budget: {{ $project->budget }}</a></li>
                                @endif
                                <li><a href="#">Date: {{ $project->created_at ? \Carbon\Carbon::parse($project->created_at)->format('d F, Y') : 'Non spécifiée' }}</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="tags-widget sidebar-widget mb_30">
                        <div class="widget-title mb_20">
                            <h3>Partager</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="tags-list clearfix">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                                <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($project->title) }}" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($project->title) }}" target="_blank"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
                                <li><a href="https://wa.me/?text={{ urlencode($project->title . ' ' . request()->url()) }}" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    @if(isset($recentProjects) && count($recentProjects) > 0)
                    <div class="category-widget sidebar-widget mb_30">
                        <div class="widget-title mb_25">
                            <h3>Projets récents</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                @foreach($recentProjects as $recentProject)
                                <li>
                                    <a href="{{ route('projects.show', $recentProject->slug) }}">
                                        {{ $recentProject->title }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    
                    <div class="download-widget sidebar-widget">
                        <div class="widget-title mb_20">
                            <h3>Besoin d'informations?</h3>
                        </div>
                        <div class="widget-content">
                            <p class="mb-3">Pour plus d'informations sur ce projet, n'hésitez pas à nous contacter.</p>
                            <a href="{{ route('contact') }}" class="theme-btn btn-one w-100 text-center"><span class="text">Contactez-nous</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cause-details end -->
@endsection