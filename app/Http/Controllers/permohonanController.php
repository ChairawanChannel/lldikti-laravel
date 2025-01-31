<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class permohonanController extends Controller
{
    public function show(): View
    {
        return view('buat-permohonan');
    }

    public function showForm(): View
    {
        return view('isi-formulir');
    }


   
}
