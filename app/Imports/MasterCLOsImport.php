<?php

namespace App\Imports;

use App\Models\MasterPLO;
use App\Models\MasterCLO;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MasterCLOsImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // $plo = MasterPLO::where('nomor_plo', $row['plonumber'])->first();

        return new MasterCLO([
            // 'plo_id' => $plo->id,
            'nomor_clo' => $row['nomor_clo'],
            'nama_clo' => $row['cloname'],
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
