@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <p class="text-muted">Dipublikasikan pada {{ $post->created_at->format('d F Y') }}</p>
        <hr>
        <img src="https://via.placeholder.com/1280x720.png?text=Gambar+Berita" class="img-fluid rounded mb-4" alt="{{ $post->title }}">
        
        {{-- Tampilkan isi berita secara lengkap --}}
        <div>
            {!! nl2br(e($post->body)) !!}
        </div>
    </article>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-4"> &laquo; Kembali ke Daftar Berita</a>
@endsection