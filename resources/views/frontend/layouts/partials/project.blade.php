<!-- cause-style-two -->
<section class="cause-style-two bg-color-1 pt_120 pb_180">
    <span class="big-text">ONG Etoile D'afrik ONG Etoile D'afrik ONG Etoile D'afrik ONG Etoile D'afrik</span>
    <div class="auto-container">
        <div class="sec-title mb_50 text-center">
            <span class="sub-title mb_12">Nos réalisations</span>
            <h2>Nos projets pour améliorer la vie des enfants</h2>
        </div>
        
        @if(isset($projects) && count($projects) > 0)
        <div class="inner-container">
            <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                @foreach($projects->take(6) as $project)
                <div class="cause-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset($project->image ?? 'assets/images/resource/cause-4.jpg') }}" alt="{{ $project->title }}">
                        </figure>
                        <div class="content-box">
                            <h4><a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a></h4>
                            <p>{{ Str::limit(strip_tags($project->short_description), 100) }}</p>
                            <div class="lower-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="{{ $project->progress ?? 75 }}%"></div>
                                </div>
                                <ul class="list-item">
                                    <li><span class="text">Objectif</span><span class="amount">Promouvoir l'excellence</span></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="text-center">
            <p>Aucun projet disponible pour le moment.</p>
        </div>
        @endif
    </div>
</section>
<!-- cause-style-two end -->