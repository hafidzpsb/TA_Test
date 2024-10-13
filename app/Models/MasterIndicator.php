<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterIndicator extends Model
{
    use HasFactory;

    protected $table = 'master_indicators'; // Nama tabel
    protected $primaryKey = 'indicator_id';

    protected $fillable = [
        'kode_indicator', 
        'deskripsi_indicator', 
        'bobot_indikator'   
    ];

}
