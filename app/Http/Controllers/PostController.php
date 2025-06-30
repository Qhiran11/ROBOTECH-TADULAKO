<?php

namespace App\Http\Controllers;

use App\Models\Post; // <-- Jangan lupa import model Post
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Menampilkan semua data berita.
     */
    public function index()
    {
        // Ambil semua data post, urutkan dari yang terbaru, lalu kirim ke view
        $posts = Post::latest()->paginate(9); // paginate(9) untuk 9 berita per halaman

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Menampilkan detail satu berita.
     */
    public function show(Post $post)
    {
        // Laravel otomatis akan mencari post berdasarkan slug di URL (route model binding)
        return view('posts.show', [
            'post' => $post
        ]);
    }
}