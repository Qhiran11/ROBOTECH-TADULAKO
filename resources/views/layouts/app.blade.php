<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ROBOTECH TADULAKO')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="top-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="contact-info">
                <i class="fas fa-envelope"></i> info@robotechtadulako.org
            </div>
            <div class="untad-logo-wrapper">
                <span>Didukung oleh:</span>
                <img src="{{ asset('images/logo-untad.png') }}" alt="Logo Universitas Tadulako" class="untad-logo">
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top main-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-robotech.png') }}" alt="Logo Robotech" class="robotech-logo-nav">
                ROBOTECH TADULAKO
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projects.index') }}">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('members.index') }}">Tim</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer mt-auto py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>ROBOTECH TADULAKO</h5>
                    <p>Unit Kegiatan Mahasiswa Riset dan Teknologi Robotika, Universitas Tadulako.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('posts.index') }}">Berita Terbaru</a></li>
                        <li><a href="#">Pendaftaran Anggota</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Hubungi Kami</h5>
                    <p>Sekretariat: Gedung UKM Universitas Tadulako, Palu, Sulawesi Tengah.</p>
                    <div class="social-icons">
                        <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} ROBOTECH TADULAKO. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>