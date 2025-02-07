<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table = 'permohonan'; // Add this line to specify the table name

    protected $fillable = [
        'nama_lengkap',
        'jenis_permohonan',
        'dokumen_pengajuan',
        'dokumen_pendukung',
        'status'
    ];
}
