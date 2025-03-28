<!-- OPPORTUNITES SECTION START -->
<section class="news-section pt_120 pb_90">
    <div class="auto-container">
        <div class="sec-title mb_50 centred">
            <span class="sub-title mb_12">Ensemble, nous pouvons changer des vies</span>
            <h2>Nos opportunités <span>d'action</span></h2>
        </div>
        
        @if(isset($axes) && count($axes) > 0)
        <div class="row clearfix">
            @foreach($axes->take(3) as $axe)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bg-layer" style="background-image: url({{ asset('storage/axes/' . ($axe->image ?? 'default.jpg')) }});"></div>
                        <div class="content-box">
                            <div class="post-date"><i class="icon-32"></i><span>{{ $axe->created_at->format('M d, Y') }}</span></div>
                            <h4><a href="{{ route('axes.show', $axe->slug) }}">{{ $axe->title }}</a></h4>
                            <ul class="post-info">
                                <li><i class="icon-12"></i><a href="{{ route('axes.show', $axe->slug) }}">ONG Etoile D'afrik</a></li>
                                <li><i class="icon-13"></i><span>{{ Str::limit($axe->short_description, 100) ?? 'Découvrez nos actions dans cet axe stratégique' }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center">
            <p>Aucune opportunité disponible pour le moment.</p>
        </div>
        @endif
    </div>
</section>
<!-- OPPORTUNITES SECTION END -->