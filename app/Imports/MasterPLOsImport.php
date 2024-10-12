<?php

namespace App\Imports;

use App\Models\MasterKurikulum;
use App\Models\MasterPLO;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MasterPLOsImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $kurikulum = MasterKurikulum::where('tahun_kurikulum', $row['curiculumyear'])->first();

        return new MasterPLO([
            'kurikulum_id' => $kurikulum->kurikulum_id,
            'nomor_plo' => $row['plonumber'],
            'nama_plo' => $row['ploname'],
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
