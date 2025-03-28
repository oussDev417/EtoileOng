@extends('frontend.layouts.master')

@section('title', $post->title ?? 'Détail de l\'actualité')

@section('content')

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/background/page-title-4.jpg);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Détail de l'actualité</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>Détail de l'actualité</li>
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
                <div class="blog-standard-content blog-details-content">
                    <div class="news-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                @if($news->thumbnail)
                                <figure class="image"><img src="{{ asset($news->thumbnail) }}" alt="{{ $news->title }}"></figure>
                                @else
                                <figure class="image"><img src="assets/images/news/news-23.jpg" alt="{{ $news->title }}"></figure>
                                @endif
                                <div class="post-date"><i class="icon-32"></i><span>{{ $news->created_at->format('M d, Y') }}</span></div>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    @if($news->category)
                                    <li><span>{{ $news->category->title }}</span></li>
                                    @endif
                                    <li>Par ONG Etoile D'afrik</li>
                                </ul>
                                <h2>{{ $news->title }}</h2>
                                <div class="text">
                                    {!! $news->description !!}
                                </div>
                                <div class="tags-widget sidebar-widget mb_30">
                                    <div class="widget-title mb_20">
                                        <h3>Partager</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="tags-list clearfix">
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                                            <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($news->title) }}" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($news->title) }}" target="_blank"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
                                            <li><a href="https://wa.me/?text={{ urlencode($news->title . ' ' . request()->url()) }}" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <form action="{{ route('news.index') }}" method="GET">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Rechercher" value="{{ request('search') }}" required>
                                        <button type="submit"><i class="icon-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if(isset($categories) && count($categories) > 0)
                        <div class="widget-title mb_25">
                            <h3>Catégories</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                @foreach($categories as $category)
                                <li>
                                    {{ $category->title }} 
                                    <span class="count">({{ $category->news->count() ?? 0 }})</span>
                                </li>                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    @if(isset($recentNews) && count($recentNews) > 0)
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sidebar-page-container end -->

@endsection
<style>

    .tags-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .tags-list li a {
        color: #000000 !important;
        font-weight: 500;
    }
    .tags-list li {
        background-color: #f5f5f5;
        border-radius: 5px;
        margin-bottom: 0;
        transition: all 0.3s ease;
        display: inline-block;
    }
    .tags-list li:hover {
        background-color: #e0e0e0;
    }
    .tags-list li a i {
        margin-right: 5px;
    }
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