@extends('layouts.app')

@section('title', 'Galeri Proyek')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Galeri Proyek</h1>
        <p class="lead text-muted">Karya dan inovasi dari anggota Robotech Tadulako.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @forelse ($projects as $project)
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://via.placeholder.com/600x400.png?text={{ urlencode($project->name) }}" class="card-img-top" alt="{{ $project->name }}">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $project->name }}</h5>
                        <p class="card-text">{{ Str::limit($project->description, 90) }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                        <small class="text-muted">Tahun: {{ $project->year }}</small>
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-outline-dark">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    Belum ada proyek yang dipublikasikan.
                </div>
            </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-5">
        {{ $projects->links() }}
    </div>
</div>
@endsection