<?php

namespace App\Imports;

use App\Models\MasterMK;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MasterMKsImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterMK([
            // (gada nomor_mk)'nomor_mk' => $row[''],
            'kode_mk' => $row['kode_mk'],
            // (gada tingkat_mk)'tingkat_mk' => $row[''],
            'semester' => $row['semester_tahun_ajaran']
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }
    
    public function chunkSize(): int
    {
        return 1000;
    }
}
