<!-- banner-section -->
<section class="banner-style-four centred">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
        @forelse($sliders ?? [] as $slider)
            @if($slider->status == 1)
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url({{ asset('storage/' . $slider->image) }});"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="shape" style="background-image: url({{ asset('assets/images/shape/shape-32.png') }});"></div>
                            @if($slider->subtitle)
                                <span class="sub-title mb_7">{{ $slider->subtitle }}</span>
                            @endif
                            <h2>{{ $slider->title }}</h2>
                            <div class="btn-box">
                                @if($slider->button_text && $slider->button_link)
                                    <a href="{{ $slider->button_link }}" class="theme-btn btn-one">
                                        <span class="text">{{ $slider->button_text }}</span>
                                        <i class="icon-2"></i>
                                    </a>
                                @endif
                                @if($slider->button_text_2 && $slider->button_link_2)
                                    <a href="{{ $slider->button_link_2 }}" class="theme-btn btn-one">
                                        <span class="text">{{ $slider->button_text_2 }}</span>
                                        <i class="icon-2"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @empty
            <div class="slide-item p_relative">
                <div class="bg-layer" style="background-image: url({{ asset('assets/images/banner/banner-1.jpg') }});"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="shape" style="background-image: url({{ asset('assets/images/shape/shape-32.png') }});"></div>
                        <span class="sub-title mb_7">Change The World</span>
                        <h2>Protect The Wildlife</h2>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-one">
                                <span class="text">Discover More</span>
                                <i class="icon-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</section>
<!-- banner-section end -->