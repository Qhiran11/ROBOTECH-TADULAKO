<?php

namespace App\Http\Controllers;

use App\Models\Member; // <-- Import model Member
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        // Ambil semua data anggota, urutkan berdasarkan periode,
        // lalu kelompokkan berdasarkan periode tersebut.
        $membersByPeriod = Member::orderBy('period', 'desc')
                                    ->get()
                                    ->groupBy('period');

        return view('members.index', [
            'membersByPeriod' => $membersByPeriod
        ]);
    }
}