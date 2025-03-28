@extends('frontend.layouts.master')

@section('title', $page->title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@section('content')
    <!-- page-title -->
    @if(!$page->is_home)
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url({{ asset('https://images.unsplash.com/photo-1590845947670-c009801ffa74?q=80&w=2059&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }});"></div>
        <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-56.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ $page->title }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li>{{ $page->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    @endif
    <!-- page-title end -->

    <!-- SECTIONS DYNAMIQUES -->
    @foreach($pageSections as $pageSection)
        <x-dynamic-section :page-section="$pageSection" />
    @endforeach
@endsection 