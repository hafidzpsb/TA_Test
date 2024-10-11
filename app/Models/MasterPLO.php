<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPLO extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_plo',
        'nama_plo',
        'kurikulum_id',
    ];

    public function relasi()
    {
        return $this->belongsTo(MasterKurikulum::class, 'kurikulum_id', 'kurikulum_id');
        return $this->belongsToMany(MasterCLO::class, 'plo_id', 'plo_id');
    }
}
