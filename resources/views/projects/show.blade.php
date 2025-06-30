@extends('layouts.app')

@section('title', $project->name)

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-5 fw-bold">{{ $project->name }}</h1>
            <p class="text-muted">Kategori: {{ $project->category }} | Tahun: {{ $project->year }}</p>
            <hr>
            <img src="https://via.placeholder.com/1280x720.png?text={{ urlencode($project->name) }}" class="img-fluid rounded mb-4" alt="{{ $project->name }}">
            
            <h4 class="mt-4">Deskripsi Proyek</h4>
            <p style="text-align: justify;">{{ $project->description }}</p>

            <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-4">&laquo; Kembali ke Galeri</a>
        </div>
        <div class="col-lg-4">
            {{-- Bagian ini bisa untuk video demo atau galeri foto tambahan nanti --}}
            @if($project->youtube_url)
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Video Demo</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/{{ $project->youtube_url }}" title="YouTube video player" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection