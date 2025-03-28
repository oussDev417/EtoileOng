<!-- testimonial-section -->
<section class="testimonial-section alternat-2 pt_120 pb_90">
    <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-55.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title mb_50 centred">
            <span class="sub-title mb_12">Témoignages</span>
            <h2>L'avis de nos <span>Bénéficiaires</span></h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            @if(isset($testimonials) && $testimonials->count() > 0)
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating"> 
                                <li><i class="icon-33"></i></li>
                                <li><i class="icon-33"></i></li>
                                <li><i class="icon-33"></i></li>
                                <li><i class="icon-33"></i></li>
                                <li><i class="icon-33"></i></li>
                            </ul>
                            <h3>"{{ Str::limit($testimonial->message, 50) }}"</h3>
                            <div class="text">
                                <p>{{ $testimonial->message }}</p>
                            </div>
                            <div class="author-box">
                                <figure class="thumb-box"><img src="{{ asset('storage/testimonials/' . $testimonial->image) }}" alt="{{ $testimonial->name }}"></figure>
                                <div class="inner">
                                    <h4>{{ $testimonial->name }}</h4>
                                    <span class="designation">{{ $testimonial->position }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating"> 
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                        </ul>
                        <h3>"L'ONG Etoile D'afrik a changé ma vie"</h3>
                        <div class="text">
                            <p>Grâce aux projets de l'ONG Etoile D'afrik, notre communauté a pu développer des initiatives durables qui ont considérablement amélioré nos conditions de vie.</p>
                            <p>Je suis reconnaissant pour leur soutien continu et leur engagement envers notre développement.</p>
                        </div>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="{{ asset('assets/images/resource/testimonial-8.png') }}" alt=""></figure>
                            <div class="inner">
                                <h4>Marie Koné</h4>
                                <span class="designation">Bénéficiaire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating"> 
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                        </ul>
                        <h3>"Un impact réel sur notre communauté"</h3>
                        <div class="text">
                            <p>L'approche participative de l'ONG Etoile D'afrik nous a permis de nous approprier les projets et d'assurer leur pérennité. Leur équipe est à l'écoute et travaille en étroite collaboration avec nous.</p>
                            <p>Ensemble, nous avons pu réaliser des changements significatifs.</p>
                        </div>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="{{ asset('assets/images/resource/testimonial-9.png') }}" alt=""></figure>
                            <div class="inner">
                                <h4>Amadou Diallo</h4>
                                <span class="designation">Leader communautaire</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <ul class="rating"> 
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                            <li><i class="icon-33"></i></li>
                        </ul>
                        <h3>"Une vision claire pour l'avenir"</h3>
                        <div class="text">
                            <p>En tant que partenaire de l'ONG Etoile D'afrik, j'ai été impressionné par leur professionnalisme et leur dévouement. Leurs projets sont bien structurés et répondent aux besoins réels des populations.</p>
                            <p>Leur impact positif est visible et mesurable dans toutes leurs interventions.</p>
                        </div>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="{{ asset('assets/images/resource/testimonial-10.png') }}" alt=""></figure>
                            <div class="inner">
                                <h4>Fatou Camara</h4>
                                <span class="designation">Partenaire financier</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- testimonial-section end -->