@extends('layouts.app')

@section('title', 'Berita')

@section('content')
    <h1 class="mb-4">Berita & Informasi</h1>

    <div class="row">
        {{-- Looping untuk setiap post --}}
        @forelse ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/1280x720.png?text=Gambar+Berita" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {{-- Batasi isi berita hanya 100 karakter --}}
                            {{ Str::limit($post->body, 100) }}
                        </p>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                    <div class="card-footer text-muted">
                        Diterbitkan pada {{ $post->created_at->format('d M Y') }}
                    </div>
                </div>
            </div>
        @empty
            {{-- Tampilan jika tidak ada berita --}}
            <div class="col">
                <div class="alert alert-info text-center">
                    Belum ada berita yang dipublikasikan.
                </div>
            </div>
        @endforelse
    </div>

    {{-- Link untuk navigasi halaman --}}
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection