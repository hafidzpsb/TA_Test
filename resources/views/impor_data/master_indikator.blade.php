<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import Data Master Indikator</title>
    <!-- Tambahkan style dan script yang diperlukan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tambahkan link Google Fonts untuk font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Tambahkan style untuk font -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Import Data Master Indikator</h2>

        <!-- Tampilkan pesan error atau sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('import.master.indikator') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="file" class="form-label">Pilih file Excel (.xlsx)</label>
                <input class="form-control" type="file" name="file" accept=".xlsx" required>
            </div>

            <button type="submit" class="btn btn-primary">Import</button>
        </form>

        <hr>

        <!-- Tabel Data yang sudah diimpor -->
        {{-- <h3 class="mt-5">Data Master Indikator yang Sudah Diimpor</h3>

        <table>
            <thead>
                <tr>
                    <th>Kode Indikator</th>
                    <th>Deskripsi Indikator</th>
                    <th>Bobot Indikator</th>
                </tr>
            </thead>
            <tbody>
                @if($dataIndikators->count() > 0)
                    @foreach($dataIndikators as $indikator)
                        <tr>
                            <td>{{ $indikator->kode_indicator }}</td>
                            <td>{{ $indikator->deskripsi_indicator }}</td>
                            <td>{{ $indikator->bobot_indikator }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">Tidak ada data indikator yang ditemukan.</td>
                    </tr>
                @endif
            </tbody>
        </table> --}}

        {{-- @if($dataIndikators->isEmpty())
            <p>Belum ada data yang diimpor.</p>
        @else
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Indikator</th>
                        <th>Deskripsi Indikator</th>
                        <th>Bobot Indikator</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataIndikators as $index => $indikator)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $indikator->kode_indicator }}</td>
                            <td>{{ $indikator->deskripsi_indicator }}</td>
                            <td>{{ $indikator->bobot_indikator }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif --}}
    </div>
</body>
</html>
