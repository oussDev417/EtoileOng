@extends('frontend.layouts.master')

@section('title', 'Notre équipe')

@section('content')
 
<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url({{ asset('https://images.unsplash.com/photo-1590845947670-c009801ffa74?q=80&w=2059&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }});"></div>
    <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-56.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Notre équipe</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Accueil</a></li>
                <li>Notre équipe</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- team-section -->
<section class="team-section pt_120 pb_90 bg-color-3 centred">
    <div class="auto-container">
        @if(isset($equipeCategories) && count($equipeCategories) > 0)
            @foreach($equipeCategories as $category)
                <div class="sec-title mb_50">
                    <span class="sub-title mb_12">Notre équipe</span>
                    <h2>{{ $category->title }}</h2>
                </div>
                
                <div class="row clearfix">
                    @php
                        $categoryMembers = $equipes->where('equipe_category_id', $category->id);
                    @endphp
                    @if($categoryMembers->count() > 0)
                        @foreach($categoryMembers as $member)
                            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                                <div class="team-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            @if($member->image)
                                                <figure class="image"><img src="{{ asset('storage/equipes/' . $member->image) }}" alt="{{ $member->name }}"></figure>
                                            @else
                                                <figure class="image"><img src="{{ asset('img/equipe/default.jpg') }}" alt="{{ $member->name }}"></figure>
                                            @endif
                                            <ul class="social-links">
                                                @if(isset($member->linkedin))
                                                    <li><a href="{{ $member->linkedin }}" target="_blank"><i class="icon-21"></i></a></li>
                                                @endif
                                                @if($member->phone)
                                                    <li><a href="tel:{{ $member->phone }}"><i class="icon-19"></i></a></li>
                                                @endif
                                                @if($member->email)
                                                    <li><a href="mailto:{{ $member->email }}"><i class="icon-18"></i></a></li>
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
                    @else
                        <div class="col-12">
                            <p class="text-center">Aucun membre trouvé dans cette catégorie.</p>
                        </div>
                    @endif
                </div>
                <div class="mb_70"></div>
            @endforeach
        @endif
    </div>
</section>
<!-- team-section end -->

<!-- DYNAMIC SECTIONS START -->
@if(isset($pageSections) && count($pageSections) > 0)
    @foreach($pageSections as $pageSection)
        <x-dynamic-section :pageSection="$pageSection" />
    @endforeach
@endif
<!-- DYNAMIC SECTIONS END -->

@endsection 