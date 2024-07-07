<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail Buah</title>

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
        <h1 class="text-center mb-5">Detail Buah</h1>

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
                <!-- Detail Buah -->
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Jeruk</td>
                    <td><img src="https://agrozine.id/wp-content/uploads/2023/05/Jeruk-clementine.webp" alt="Jeruk" class="img-thumbnail"></td>
                    <td>Jeruk segar, kaya akan vitamin C.</td>
                    <td>Rp 20.000/kg</td>
                    <td><button class="button">Buy</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Apel</td>
                    <td><img src="https://cdn.idntimes.com/content-images/community/2019/05/linvilla-orchards-2-best-apples-ft-blog0818-376cbf176654c6fc88a1812088d85319.jpg" alt="Apel" class="img-thumbnail"></td>
                    <td>Apel segar, mengandung serat yang baik untuk pencernaan.</td>
                    <td>Rp 60.000/kg</td>
                    <td><button class="button">Buy</button></td>
                </tr> -->
                <!-- Tampilkan data buah dari database -->
                @foreach($buahs as $key => $buah)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $buah->nama }}</td>
                    <td><img src="{{ asset('images/' . $buah->gambar) }}" alt="{{ $buah->nama }}" class="img-thumbnail"></td>
                    <td>{{ $buah->keterangan }}</td>
                    <td>{{ $buah->harga }}</td>
                    <td><button class="button">Buy</button></td>
                </tr>
                @endforeach
                <!-- Tambahkan baris-baris data buah lainnya sesuai kebutuhan -->
            </tbody>
        </table>

        <!-- Tombol Kembali -->
        <div class="text-start">
            <a href="{{ route('welcome') }}" class="btn btn-back mt-3"><- Back</a>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
