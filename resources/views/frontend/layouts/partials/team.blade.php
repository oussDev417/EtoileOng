<!-- team-section -->
<section class="team-section pt_120 pb_90 bg-color-3 centred">
    <div class="auto-container">
        <div class="sec-title mb_50">
            <span class="sub-title mb_12">Notre Équipe</span>
            <h2>Nous sommes une equipe solide</h2>
        </div>
        <div class="row clearfix">
            @if(isset($equipes) && $equipes->count() > 0)
                @foreach($equipes->take(4) as $member)
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-two wow fadeInUp animated" data-wow-delay="{{ $loop->index * 200 }}ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        @if($member->image)
                                            <img src="{{ asset('storage/equipes/' . $member->image) }}" alt="{{ $member->name }}">
                                        @else
                                            <img src="{{ asset('img/equipe/default.jpg') }}" alt="{{ $member->name }}">
                                        @endif
                                    </figure>
                                    <ul class="social-links">
                                        @if(isset($member->linkedin))
                                            <li><a href="{{ $member->linkedin }}" target="_blank"><i class="icon-23"></i></a></li>
                                        @endif
                                        @if($member->email)
                                            <li><a href="mailto:{{ $member->email }}"><i class="icon-18"></i></a></li>
                                        @endif
                                        @if($member->phone)
                                            <li><a href="tel:{{ $member->phone }}"><i class="icon-19"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="content-box">
                                    <h3><a href="#">{{ $member->name }}</a></h3>
                                    <span class="designation">{{ $member->position }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="btn-box mt_35">
            <a href="{{ route('team') }}" class="theme-btn btn-one"><span class="text">Voir tous nos membres</span><i class="icon-2"></i></a>
        </div>
    </div>
</section>
<!-- team-section end -->