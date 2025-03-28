<!-- clients-section -->
<section class="clients-section pt_80 pb_80">
    <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-37.png') }});"></div>
    <div class="auto-container">
        <div class="inner-container">
            <h4 class="text-black">Nos Partenaires</h4>
            <div class="five-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                @foreach($partners ?? [] as $partner)
                    <figure class="clients-logo">
                        <a href="{{ $partner->url ?? '#' }}" target="_blank" title="{{ $partner->name }}">
                            <img src="{{ asset('storage/partners/' . $partner->image) }}" alt="{{ $partner->name }}">
                        </a>
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- clients-section end -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.five-item-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                768: {
                    items: 4
                },
                1024: {
                    items: 5
                }
            }
        });
    });
</script>