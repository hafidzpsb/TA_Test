<?php

namespace App\Imports;

use App\Models\MasterMK;
use App\Models\MasterAssessment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MasterAssessmentsImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $mk = MasterMK::where('kode_mk', $row['kode_mk'])->first();

        return new MasterAssessment([
            'mk_id' => $mk->mk_id,
            'deskripsi_assessment' => $row['assessment_tools'],
            'persentase_assessment' => $row['persentase_assessment_tools']
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
