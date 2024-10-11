<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'kelas',
    ];

    public function relasi()
    {
        return $this->belongsTo(MasterKurikulum::class, 'user_id', 'user_id');
        return $this->belongsTo(Nilai::class, 'mahasiswa_id', 'mahasiswa_id');
    }
}
