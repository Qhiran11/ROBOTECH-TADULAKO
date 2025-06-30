<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MemberController;

// Rute untuk Halaman Statis
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

// Rute untuk Berita
Route::get('/berita', [PostController::class, 'index'])->name('posts.index');
Route::get('/berita/{post:slug}', [PostController::class, 'show'])->name('posts.show');

// Rute untuk Proyek
Route::get('/proyek', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/proyek/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Rute untuk Tim/Anggota
Route::get('/tim', [MemberController::class, 'index'])->name('members.index');