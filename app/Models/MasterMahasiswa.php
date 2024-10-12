<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'kelas',
    ];

    public function kurikulum()
    {
        return $this->belongsTo(MasterKurikulum::class, 'user_id', 'user_id');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'mahasiswa_id', 'mahasiswa_id');
    }
}
