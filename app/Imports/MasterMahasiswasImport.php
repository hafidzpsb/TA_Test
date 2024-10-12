<?php

namespace App\Imports;

use App\Models\MasterKurikulum;
use App\Models\MasterMahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MasterMahasiswasImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $kurikulum = MasterKurikulum::where('tahun_kurikulum', $row['curiculumyear'])->first();
        return new MasterMahasiswa([
            'kurikulum_id' => $kurikulum->kurikulum_id, // ini bakal buat isi databaseny redundan
            'user_id' => $kurikulum->user_id, // ini bakal buat isi databaseny redundan
            'nim' => $row['nim'],
            'nama_lengkap' => $row['nama_mahasiswa'],
            'kelas' => $row['kelas']
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
