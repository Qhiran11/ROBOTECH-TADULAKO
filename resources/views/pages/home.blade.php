@extends('layouts.app')

@section('title', 'Beranda - ROBOTECH TADULAKO')

@section('content')
    {{-- Hapus padding default agar hero section bisa full-width --}}
    <div class="container-fluid p-0">
        <div class="hero-section text-center">
            <img src="{{ asset('images/logo-robotech.png') }}" alt="Logo Robotech Tadulako" class="hero-logo">
            <h1 class="display-4 fw-bold">ROBOTECH TADULAKO</h1>
            <p class="lead col-md-8 mx-auto">Unit Kegiatan Mahasiswa Riset dan Teknologi Robotika Universitas Tadulako. Berinovasi, berkreasi, dan berprestasi dalam dunia teknologi.</p>
            <a href="{{ route('about') }}" class="btn btn-primary btn-lg mt-3">Pelajari Lebih Lanjut</a>
        </div>
    </div>

    {{-- Konten selanjutnya di dalam container agar rapi --}}
    <div class="container mt-5">
        <div class="row text-center">
            <h2 class="mb-4">Kenapa Bergabung Dengan Kami?</h2>
            <div class="col-md-4">
                <i class="fas fa-cogs fa-3x mb-3 text-warning"></i>
                <h3>Riset & Proyek</h3>
                <p>Terlibat langsung dalam proyek-proyek robotika yang menantang dan inovatif.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-users fa-3x mb-3 text-warning"></i>
                <h3>Komunitas Solid</h3>
                <p>Menjadi bagian dari komunitas mahasiswa yang memiliki minat dan semangat yang sama.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-trophy fa-3x mb-3 text-warning"></i>
                <h3>Peluang Prestasi</h3>
                <p>Mewakili universitas dalam berbagai kompetisi robotika tingkat nasional dan internasional.</p>
            </div>
        </div>

        <hr class="my-5">

        <h2 class="text-center mb-4">Berita Terbaru</h2>
        {{-- Nanti di sini akan kita tampilkan berita dari database --}}
        <p class="text-center">Segera Hadir...</p>
    </div>
@endsection