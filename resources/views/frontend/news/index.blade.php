@extends('frontend.layouts.master')

@section('title', 'Actualités')

@section('content')

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(https://images.unsplash.com/photo-1590845947670-c009801ffa74?q=80&w=2059&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Actualités</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>Actualités</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- sidebar-page-container -->
<section class="sidebar-page-container bg-color-3 pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-standard-content">
                    @if(isset($news) && count($news) > 0)
                        @foreach($news as $post)
                            <div class="news-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="{{ route('news.show', $post->slug) }}">
                                                @if($post->thumbnail)
                                                    <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}">
                                                @else
                                                    <img src="assets/images/news/news-21.jpg" alt="Image d'actualité">
                                                @endif
                                            </a>
                                        </figure>
                                        <div class="post-date"><i class="icon-32"></i><span>{{ $post->created_at->format('M d, Y') }}</span></div>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li><span>{{ $post->category->title ?? 'Actualité' }}</span></li>
                                            <li>Par ONG Etoile D'afrik</li>
                                        </ul>
                                        <h2><a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a></h2>
                                        <p>{{ Str::limit(strip_tags($post->content), 150) }}</p>
                                        <div class="link-btn"><a href="{{ route('news.show', $post->slug) }}"><span>Lire plus</span><i class="icon-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center">
                            <p>Aucune actualité disponible pour le moment.</p>
                        </div>
                    @endif
                    
                    @if(isset($news) && method_exists($news, 'links'))
                        <div class="pagination-wrapper pt_30">
                            <ul class="pagination">
                                <li><a href="{{ $news->previousPageUrl() }}"><i class="icon-39"></i></a></li>
                                @for($i = 1; $i <= $news->lastPage(); $i++)
                                    <li><a href="{{ $news->url($i) }}" class="{{ $i == $news->currentPage() ? 'current' : '' }}">{{ $i }}</a></li>
                                @endfor
                                <li><a href="{{ $news->nextPageUrl() }}"><i class="icon-40"></i></a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-column">
                <div class="default-sidebar blog-sidebar">
                    <div class="category-widget sidebar-widget mb_30">
                        <div class="search-widget mb_25">
                            <div class="widget-title mb_20 pb_2">
                                <h3>Recherche</h3>
                            </div>
                            <div class="search-form">
                                <form action="{{ route('news.index') }}" method="get">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Rechercher" required>
                                        <button type="submit"><i class="icon-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget-title mb_25">
                            <h3>Catégories</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                @if(isset($categories) && count($categories) > 0)
                                    @foreach($categories as $category)
                                        <li>
                                                {{ $category->title }} 
                                                <span class="count">({{ $category->news->count() ?? 0 }})</span>
                                        </li>
                                    @endforeach
                                @else
                                    <li>Aucune catégorie disponible</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="post-widget sidebar-widget mb_30">
                        <div class="widget-title mb_20">
                            <h3>Articles Récents</h3>
                        </div>
                        <div class="latest-post-wrapper">
                            @if(isset($recentNews) && count($recentNews) > 0)
                                @foreach($recentNews as $recent)
                                    <div class="latest-post-item">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('news.show', $recent->slug) }}">
                                                @if($recent->thumbnail)
                                                    <img src="{{ asset($recent->thumbnail) }}" alt="{{ $recent->title }}">
                                                @else
                                                    <img src="assets/images/news/post-1.jpg" alt="Post Image">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title">
                                                <a href="{{ route('news.show', $recent->slug) }}">{{ $recent->title }}</a>
                                            </h4>
                                            <div class="post-date">
                                                <i class="icon-32"></i>
                                                <span>{{ $recent->created_at->format('M d, Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="latest-post-item no-posts">
                                    <div class="post-content">
                                        <h5>Aucun article récent</h5>
                                    </div>
                                </div>
                            @endif
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sidebar-page-container end -->

@if(isset($pageSections) && count($pageSections) > 0)
    @foreach($pageSections as $pageSection)
        <x-dynamic-section :pageSection="$pageSection" />
    @endforeach
@endif
@endsection
<style>
    .latest-post-wrapper {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .latest-post-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e5e5e5;
    }
    .latest-post-item:last-child {
        border-bottom: none;
    }
    .post-thumbnail {
        flex: 0 0 75px;
        height: 75px;
        overflow: hidden;
        border-radius: 5px;
    }
    .post-thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .post-content {
        flex: 1;
    }
    .post-title {
        margin-bottom: 5px;
        font-size: 16px;
        line-height: 1.4;
    }
    .post-title a{
        color:rgb(0, 0, 0) !important;
    }
    .post-date {
        display: flex;
        align-items: center;
        color: #777;
        font-size: 14px;
    }
    .post-date i {
        margin-right: 5px;
    }
</style>