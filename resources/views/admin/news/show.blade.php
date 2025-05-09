@extends('admin.layouts.master')

@section('title', $news->title)

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Tableau de bord</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">Actualités</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $news->title }}</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="container-fluid">
    @include('admin.layouts.alerts')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">{{ $news->title }}</h5>
            <div>
                <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-edit me-2"></i>Modifier
                </a>
                <a href="{{ route('admin.news.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left me-2"></i>Retour
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">Titre</th>
                            <td>{{ $news->title }}</td>
                        </tr>
                        <tr>
                            <th>Catégorie</th>
                            <td>{{ $news->category->title }}</td>
                        </tr>
                        <tr>
                            <th>Description courte</th>
                            <td>{{ $news->short_description }}</td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td>{{ $news->slug }}</td>
                        </tr>
                        <tr>
                            <th>Date de création</th>
                            <td>{{ $news->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th>Dernière modification</th>
                            <td>{{ $news->updated_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    </table>

                    <div class="mt-4">
                        <h6 class="fw-bold">Description détaillée</h6>
                        <div class="border rounded p-3 bg-light">
                            {!! $news->description !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Image miniature</h6>
                        </div>
                        <div class="card-body">
                            @if($news->thumbnail)
                                <img src="{{ asset($news->thumbnail) }}" 
                                     alt="{{ $news->title }}" 
                                     class="img-fluid rounded">
                            @else
                                <div class="text-center text-muted">
                                    <i class="fas fa-image fa-3x mb-2"></i>
                                    <p>Aucune image disponible</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 