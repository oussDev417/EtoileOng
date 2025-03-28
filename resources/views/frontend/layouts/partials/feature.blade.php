<!-- feature-section -->
<section class="feature-section service-page alternat-2 pt_120 pb_90">
    <div class="auto-container">
        <div class="sec-title mb_50 centred">
            <span class="sub-title mb_12">Nos Valeurs</span>
            <h2>Soutenez <span>Etoile D'afrik</span> pour <br />Changer des Vies</h2>
        </div>
        <div class="row clearfix">
            @if(isset($about) && !empty($about->values))
                @php
                    $valuesHtml = $about->values;
                    $dom = new DOMDocument();
                    libxml_use_internal_errors(true);
                    $dom->loadHTML(mb_convert_encoding($valuesHtml, 'HTML-ENTITIES', 'UTF-8'));
                    libxml_clear_errors();
                    
                    $valuesList = $dom->getElementsByTagName('li');
                    $values = [];
                    
                    foreach ($valuesList as $item) {
                        $values[] = trim($item->textContent);
                    }
                    
                    $icons = [
                        'assets/images/icons/icon-25.png',
                        'assets/images/icons/icon-26.png',
                        'assets/images/icons/icon-27.png',
                        'assets/images/icons/icon-28.png'
                    ];
                @endphp
                
                @forelse($values as $index => $value)
                    <div class="col-lg-6 col-md-12 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><img src="{{ asset($icons[$index % 4]) }}" alt=""></div>
                                <div class="text-box">
                                    <h3><a href="#">{{ $value }}</a></h3>
                                    <p>Ensemble, nous pouvons faire la différence pour les communautés africaines</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Pas de valeurs par défaut -->
                @endforelse
            @endif
        </div>
    </div>
</section>
<!-- feature-section end -->