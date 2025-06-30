<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ROBOTECH TADULAKO')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Orbitron:wght@700&display=swap" rel="stylesheet">

    <style>
        :root {
            --rt-yellow: #ffd700; /* Warna kuning dari logo RT */
            --rt-red: #e74c3c;     /* Warna merah sebagai aksen */
            --rt-dark: #1e1e1e;   /* Warna gelap yang modern */
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
        }

        /* Styling Navbar */
        .navbar {
            background-color: var(--rt-dark) !important;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .navbar-brand {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            color: var(--rt-yellow) !important;
        }

        .nav-link {
            font-weight: 700;
        }

        .nav-link:hover {
            color: var(--rt-yellow) !important;
        }

        /* Styling Tombol Utama */
        .btn-primary {
            background-color: var(--rt-yellow);
            border-color: var(--rt-yellow);
            color: var(--rt-dark);
            font-weight: 700;
            transition: all 0.2s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #e6c300;
            border-color: #e6c300;
            transform: scale(1.05);
        }

        /* Styling Footer */
        .footer {
            background-color: var(--rt-dark);
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-robotech.png') }}" alt="Logo Robotech" style="height: 40px;" class="me-2">
                ROBOTECH
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
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

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="footer text-white text-center p-4 mt-auto">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-md-start">
                    <img src="{{ asset('images/logo-untad.png') }}" alt="Logo Untad" style="height: 50px;">
                </div>
                <div class="col-md-4">
                    <p class="mb-0">&copy; {{ date('Y') }} ROBOTECH TADULAKO</p>
                    <p class="mb-0 small">Unit Kegiatan Mahasiswa Universitas Tadulako</p>
                </div>
                <div class="col-md-4 text-md-end">
                    </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>