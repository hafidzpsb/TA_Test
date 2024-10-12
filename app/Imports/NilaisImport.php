<?php

namespace App\Imports;

use App\Models\MasterMahasiswa;
use App\Models\MasterQuestion;
use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NilaisImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /* $mahasiswa = MasterMahasiswa::where('nama_lengkap', $row['nama_mahasiswa'])->first();
        return new Nilai([
            'mahasiswa_id' => $mahasiswa->mahasiswa_id,
            'nim' => $row['nim'],
            'nama_lengkap' => $row['nama_mahasiswa'],
            'kelas' => $row['kelas']
        ]); */
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
