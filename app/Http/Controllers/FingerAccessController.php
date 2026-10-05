<?php

namespace App\Http\Controllers;

use App\Models\FingerAccess;

class FingerAccessController extends Controller
{
    public function index()
    {
        // Kelompokkan data per unit biar gampang ditampilkan per section
        $groupedData = FingerAccess::orderBy('kode_ruangan')->get()->groupBy('unit');

        return view('finger-access.index', compact('groupedData'));
    }
}