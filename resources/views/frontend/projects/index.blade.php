@extends('frontend.layouts.master')

@section('title', 'Nos projets')

@section('content')

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(https://images.unsplash.com/photo-1590845947670-c009801ffa74?q=80&w=2059&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Nos Projets</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>Projets</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- event-page-section -->
<section class="event-page-section bg-color-3 pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
            @if(isset($projects) && count($projects) > 0)
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('projects.show', $project->slug) }}">
                                        <img src="{{ asset($project->image ?? 'assets/images/resource/cause-26.jpg') }}" alt="{{ $project->title }}">
                                    </a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a></h3>
                                <p>{{ Str::limit(strip_tags($project->short_description), 100) }}</p>
                                <div class="link-btn">
                                    <a href="{{ route('projects.show', $project->slug) }}">
                                        <span>Voir détails</span><i class="icon-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <div class="centred">
                        <p>Aucun projet disponible pour le moment.</p>
                    </div>
                </div>
            @endif
        </div>
        
        <!-- Pagination -->
        @if(isset($projects) && method_exists($projects, 'links'))
            <div class="pagination-wrapper centred pt_30">
                {{ $projects->links() }}
            </div>
        @endif
    </div>
</section>
<!-- event-page-section end -->

<!-- DYNAMIC SECTIONS START -->
@if(isset($pageSections) && count($pageSections) > 0)
    @foreach($pageSections as $pageSection)
        <x-dynamic-section :pageSection="$pageSection" />
    @endforeach
@endif
<!-- DYNAMIC SECTIONS END -->

@endsection