<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Daftar Buah</title>

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
        <h1 class="text-center mb-5">Tambah Daftar Buah</h1>
        
        <div class="form-container mx-auto" style="max-width: 600px;">
            <!-- <form>
                <div class="mb-3">
                    <label for="namaBuah" class="form-label">Nama Buah</label>
                    <input type="text" class="form-control" id="namaBuah" placeholder="Masukkan nama buah">
                </div>
                <div class="mb-3">
                    <label for="gambarBuah" class="form-label">Gambar Buah</label>
                    <input type="file" class="form-control" id="gambarBuah" accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="keteranganBuah" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keteranganBuah" rows="3" placeholder="Masukkan keterangan buah"></textarea>
                </div>
                <div class="mb-3">
                    <label for="hargaBuah" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="hargaBuah" placeholder="Masukkan harga buah">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('dashboard') }}" class="btn btn-back">Kembali</a>
                    <button type="submit" class="btn btn-add">Tambah</button>
                </div>
            </form> -->

            <form action="{{ route('simpan_buah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="namaBuah" class="form-label">Nama Buah</label>
                    <input type="text" class="form-control" id="namaBuah" name="nama" placeholder="Masukkan nama buah" required>
                </div>
                <div class="mb-3">
                    <label for="gambarBuah" class="form-label">Gambar Buah</label>
                    <input type="file" class="form-control" id="gambarBuah" name="gambar" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="keteranganBuah" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keteranganBuah" name="keterangan" rows="3" placeholder="Masukkan keterangan buah" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="hargaBuah" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="hargaBuah" name="harga" placeholder="Masukkan harga buah" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('menu_buah') }}" class="btn btn-back">Kembali</a>
                    <button type="submit" class="btn btn-add">Tambah</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
