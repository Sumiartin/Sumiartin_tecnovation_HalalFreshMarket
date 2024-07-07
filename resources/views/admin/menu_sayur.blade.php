<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">

    <title>Edit Daftar Menu</title>

    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang seperti halaman welcome */
        }

        .btn-back {
            background-color: #28a745; /* Warna hijau untuk tombol Back */
            color: #fff; /* Warna teks putih */
            border-color: #28a745; /* Warna border */
        }

        .table-bordered thead tr {
            background-color: #28a745; /* Warna hijau untuk header tabel */
            color: #fff; /* Warna teks putih */
        }

        .button {
            background-color: #28a745; /* Warna hijau untuk tombol Buy */
            color: #fff; /* Warna teks putih */
            border-color: #28a745; /* Warna border */
        }

        .img-thumbnail {
            max-width: 150px; /* Ukuran maksimum lebar gambar */
            height: auto; /* Menjaga aspek rasio gambar */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Edit Daftar Sayur</h1>

        <!-- Tombol Tambah Menu -->
        <div class="text-end mb-3">
            <a href="{{ route('tambah_sayur') }}" class="btn btn-success">Tambah Menu</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sayurs as $key => $sayur)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $sayur->nama }}</td>
                    <td><img src="{{ asset('images/' . $sayur->gambar) }}" alt="{{ $sayur->nama }}" class="img-thumbnail"></td>
                    <td>{{ $sayur->keterangan }}</td>
                    <td>{{ $sayur->harga }}</td>
                    <td>
                        <form action="{{ route('hapus_sayur', $sayur->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus sayur ini?')"><i class="bi bi-trash">Hapus</i></button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tombol Kembali -->
        <div class="text-start">
            <a href="{{ route('dashboard') }}" class="btn btn-back mt-3"><- Back</a>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
