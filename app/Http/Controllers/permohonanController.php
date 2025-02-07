<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Permohonan; // Add this line

class permohonanController extends Controller
{
    public function show(): View
    {
        return view('user.buat-permohonan');
    }

    public function showForm(): View
    {
        return view('user.isi-form');
    }

    public function submitForm(Request $request)
    {
        // Handle form submission logic here
        $permohonan = new Permohonan();
        $permohonan->nama_lengkap = $request->input('nama_lengkap');
        $permohonan->jenis_permohonan = $request->input('jenis_permohonan');
        $permohonan->dokumen_pengajuan = $request->file('dokumen_pengajuan')->store('dokumen_pengajuan');
        $permohonan->dokumen_pendukung = $request->file('dokumen_pendukung')->store('dokumen_pendukung');
        $permohonan->status = 'submitted';
        $permohonan->save();

        return redirect()->route('dashboard')->with('status', 'submitted');
    }

    public function getAllPermohonan(): View
    {
        $permohonan = Permohonan::all();
        return view('user.dashboard', compact('permohonan'));
    }
}
