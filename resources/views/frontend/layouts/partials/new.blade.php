<!-- news-section -->
<section class="news-section bg-color-3 pt_0 pb_90">
    <div class="auto-container">
        <div class="sec-title mb_50 centred">
            <span class="sub-title mb_12">Actualités</span>
            <h2>Dernières <span>Nouvelles</span></h2>
        </div>
        <div class="row clearfix">
            @if(isset($news) && count($news) > 0)
                @foreach($news as $post)
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('news.show', $post->slug) }}">
                                        @if($post->thumbnail)
                                            <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}">
                                        @else
                                            <img src="assets/images/news/news-1.jpg" alt="Image d'actualité">
                                        @endif
                                    </a>
                                </figure>
                                <div class="post-date">
                                    <i class="icon-32"></i>
                                    <span>{{ $post->created_at->format('M d, Y') }}</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><span>{{ $post->category->title ?? 'Actualité' }}</span></li>
                                    <li>Par ONG Etoile D'afrik</li>
                                </ul>
                                <h3><a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a></h3>
                                <div class="link-btn">
                                    <a href="{{ route('news.show', $post->slug) }}">
                                        <span>Lire plus</span>
                                        <i class="icon-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p>Aucune actualité disponible pour le moment.</p>
                </div>
            @endif
        </div>
        
        @if(isset($news) && method_exists($news, 'links'))
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="pagination-area">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
<!-- news-section end -->