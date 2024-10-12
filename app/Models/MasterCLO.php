<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterCLO extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_clo',
        'nama_clo',
    ];

    public function relasi()
    {
        return $this->belongsToMany(MasterPLO::class, 'clo_id', 'clo_id');
    }
}
