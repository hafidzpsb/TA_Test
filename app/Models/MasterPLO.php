<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MasterPLO extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_plo',
        'nama_plo',
        'kurikulum_id',
    ];

    public function kurikulum()
    {
        return $this->belongsTo(MasterKurikulum::class, 'kurikulum_id', 'kurikulum_id');
    }

    public function clo()
    {
        return $this->belongsToMany(MasterCLO::class, 'plo_id', 'plo_id');
    }
}
