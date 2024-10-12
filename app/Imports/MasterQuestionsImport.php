<?php

namespace App\Imports;

use App\Models\MasterAssessment;
use App\Models\MasterQuestion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MasterQuestionsImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /* $assessment = Assessment::whereHas('matkul', function ($query) use ($row) {
                                    $query->where('kode_mk', $row['kode_mk']);
                                })
                                ->where('deskripsi_assessment', $row['assessment_tools'])
                                ->first(); */

        return new MasterQuestion([
            /* 'assessment_id' => $assessment->assessment_id, */
            'deskripsi_question' => $row['deskripsi_soal'],
            'persentase_question' => $row['persentase_soal']
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
