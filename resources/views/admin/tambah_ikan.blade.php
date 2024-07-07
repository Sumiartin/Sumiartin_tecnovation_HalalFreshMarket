<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Daftar Ikan</title>

    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang seperti halaman welcome */
        }

        .btn-back {
            background-color: #28a745; /* Warna hijau untuk tombol Back */
            color: #fff; /* Warna teks putih */
            border-color: #28a745; /* Warna border */
        }

        .btn-add {
            background-color: #007bff; /* Warna biru untuk tombol Add */
            color: #fff; /* Warna teks putih */
            border-color: #007bff; /* Warna border */
        }

        .form-container {
            background-color: #fff; /* Warna latar belakang putih untuk form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow untuk memberikan efek elevasi */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Tambah Daftar Ikan</h1>
        
        <div class="form-container mx-auto" style="max-width: 600px;">
        <form action="{{ route('simpan_ikan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="namaIkan" class="form-label">Nama Ikan</label>
                    <input type="text" class="form-control" id="namaIkan" name="nama" placeholder="Masukkan nama ikan" required>
                </div>
                <div class="mb-3">
                    <label for="gambarIkan" class="form-label">Gambar Ikan</label>
                    <input type="file" class="form-control" id="gambarIkan" name="gambar" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="keteranganIkan" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keteranganBuah" name="keterangan" rows="3" placeholder="Masukkan keterangan ikan" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="hargaIkan" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="hargaIkan" name="harga" placeholder="Masukkan harga ikan" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('menu_ikan') }}" class="btn btn-back">Kembali</a>
                    <button type="submit" class="btn btn-add">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
