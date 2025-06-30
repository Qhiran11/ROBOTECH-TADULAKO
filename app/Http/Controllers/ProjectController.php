<?php

namespace App\Http\Controllers;

use App\Models\Project; // <-- Import model Project
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Menampilkan galeri semua proyek.
     */
    public function index()
    {
        $projects = Project::orderBy('year', 'desc')->paginate(6); // Urutkan berdasarkan tahun terbaru, 6 proyek per halaman

        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    /**
     * Menampilkan detail satu proyek.
     */
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }
}