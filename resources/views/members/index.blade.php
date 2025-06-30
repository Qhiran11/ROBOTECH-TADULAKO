@extends('layouts.app')

@section('title', 'Tim Kami')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Struktur Organisasi</h1>
        <p class="lead text-muted">Orang-orang di balik layar Robotech Tadulako.</p>
    </div>

    {{-- Looping untuk setiap periode kepengurusan --}}
    @forelse ($membersByPeriod as $period => $members)
        <div class="mb-5">
            <h2 class="mb-4">Periode {{ $period }}</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                {{-- Looping untuk setiap anggota di periode tersebut --}}
                @foreach ($members as $member)
                    <div class="col">
                        <div class="card text-center h-100 shadow-sm border-0">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/150.png?text={{ urlencode(strtok($member->name, ' ')) }}" class="rounded-circle mb-3" alt="{{ $member->name }}" style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="card-title fw-bold">{{ $member->name }}</h5>
                                <p class="card-text text-muted">{{ $member->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @empty
        <div class="alert alert-info text-center">
            Belum ada data anggota yang dipublikasikan.
        </div>
    @endforelse
</div>
@endsection