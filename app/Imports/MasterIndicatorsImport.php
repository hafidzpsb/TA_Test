<?php

namespace App\Imports;

use App\Models\MasterIndicator;
use Maatwebsite\Excel\Concerns\ToModel;

class MasterIndicatorsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterIndicator([
            'kode_indicator'    => $row[0],  // Kolom pertama pada file Excel (kode indikator)
            'deskripsi_indicator' => $row[1], // Kolom kedua pada file Excel (deskripsi indikator)
            'bobot_indikator'   => $row[2],  // Kolom ketiga pada file Excel (bobot indikator)
        ]);
    }
}
