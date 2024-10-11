<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKurikulum extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tahun_kurikulum',
    ];

    public function relasi()
    {
        return $this->hasMany(MasterPLO::class, 'kurikulum_id', 'kurikulum_id');
        return $this->hasMany(MasterMahasiswa::class, 'kurikulum_id', 'kurikulum_id');
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
