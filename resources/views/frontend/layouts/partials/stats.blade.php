<!-- funfact-section -->
<section class="funfact-section alternat-2 centred">
    <div class="outer-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <div class="shape" style="background-image: url({{ asset('assets/images/shape/shape-10.png') }});"></div>
                            <span class="odometer" data-count="{{ $statFacts[0]->counter ?? '5468' }}">00</span><span>+</span>
                        </div>
                        <p>{{ $statFacts[0]->title ?? 'Donateurs' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <div class="shape" style="background-image: url({{ asset('assets/images/shape/shape-10.png') }});"></div>
                            <span class="odometer" data-count="{{ $statFacts[1]->counter ?? '6875' }}">00</span><span>+</span>
                        </div>
                        <p>{{ $statFacts[1]->title ?? 'Projets réalisés' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <div class="shape" style="background-image: url({{ asset('assets/images/shape/shape-10.png') }});"></div>
                            <span class="odometer" data-count="{{ $statFacts[2]->counter ?? '6875' }}">00</span><span>+</span>
                        </div>
                        <p>{{ $statFacts[2]->title ?? 'Bénévoles' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <div class="shape" style="background-image: url({{ asset('assets/images/shape/shape-10.png') }});"></div>
                            <span class="odometer" data-count="{{ $statFacts[3]->counter ?? '45000' }}">00</span><span> FCFA</span>
                        </div>
                        <p>{{ $statFacts[3]->title ?? 'Montant collecté' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->
