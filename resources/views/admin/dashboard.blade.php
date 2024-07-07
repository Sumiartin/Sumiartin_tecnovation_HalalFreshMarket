<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard Admin</title>

    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang seperti halaman welcome */
        }

        .navbar {
            background-color: #28a745; /* Warna latar belakang navbar */
        }

        .navbar .nav-link {
            color: #fff; /* Warna teks navbar */
        }

        .navbar .nav-link.active {
            font-weight: bold; /* Teks yang aktif bold */
        }

        section {
            padding: 50px 0; /* Padding untuk setiap section */
            text-align: center; /* Pusatkan konten dalam section */
        }

        .card {
            /* height: 100%; */ /* Biarkan tinggi card tetap sama */
        }

        .card-body {
            padding: 1.25rem; /* Sedikit padding di dalam card-body */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .btn-edit {
            background-color: #28a745; /* Warna hijau untuk tombol edit */
            color: #fff; /* Warna teks putih */
            border-color: #28a745; /* Warna border */
        }

        .btn-button {
            background-color: #28a745; /* Warna hijau untuk tombol edit */
            color: #fff; /* Warna teks putih */
            border-color: #28a745; /* Warna border */
        }

        .img-thumbnail {
            max-width: 100%; /* Ukuran maksimum lebar gambar */
            height: auto; /* Menjaga aspek rasio gambar */
        }
        .btn-login {
        background-color: #fff; /* Warna putih untuk tombol login */
        color: #28a745; /* Warna teks hijau */
        border: 2px solid #28a745; /* Warna border hijau */
        font-weight: bold; /* Teks tebal (bold) */
        transition: background-color 0.3s ease, color 0.3s ease; /* Transisi warna saat hover */
    }
    .btn-login:hover {
        background-color: #28a745; /* Warna latar belakang hijau saat hover */
        color: #fff; /* Warna teks putih saat hover */
    }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Dashboard Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#history">Riwayat</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light btn-login" href="{{ route('welcome') }}">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="home">
    <div class="container mt-5">
        <h2 style="font-weight: bold;">Welcome Admin</h2>
        <p>Selamat datang di halaman admin. Anda dapat mengelola konten dan transaksi di sini.</p>
    </div>
</section>

<section id="menu" class="bg-light">
    <div class="container mt-5">
        <h2 style="font-weight: bold;" >Menu</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/06/07/InShot_20230607_075422809_1-676396075.jpg" class="card-img-top img-thumbnail" alt="Bayam">
                    <div class="card-body">
                        <h5 class="card-title">Sayuran</h5>
                        <p class="card-text">Kelola menu sayuran di sini.</p>
                        <a href="{{ route('menu_sayur') }}" class="btn btn-edit">Edit Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2019/03/01/5c789f201a89b-detoks-buah-buahan-untuk-membersihkan-tubuh-dalam-lima-hari_665_374.jpg" class="card-img-top img-thumbnail" alt="Wortel">
                    <div class="card-body">
                        <h5 class="card-title">Buah</h5>
                        <p class="card-text">Kelola menu buah di sini.</p>
                        <a href="{{ route('menu_buah') }}" class="btn btn-edit">Edit Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="https://asset.kompas.com/crops/i0eFsKEt50moQyZzcjsS1TzTt8Y=/317x198:5629x3739/750x500/data/photo/2022/02/25/6218b4254f2bb.jpg" class="card-img-top img-thumbnail" alt="Ikan">
                    <div class="card-body">
                        <h5 class="card-title">Ikan</h5>
                        <p class="card-text">Kelola menu ikan di sini.</p>
                        <a href="{{ route('menu_ikan') }}" class="btn btn-edit">Edit Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="history">
    <div class="container">
        <h2 style="font-weight: bold;" >Riwayat Transaksi</h2>
        <p>Lihat riwayat transaksi yang telah dilakukan.</p>
        <a href="#" class="btn btn-button">Lihat Riwayat Transaksi</a>
    </div>
</section>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    // Ambil semua link navbar
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Tambahkan event listener untuk setiap link
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Hapus class 'active' dari semua link
            navLinks.forEach(navLink => navLink.classList.remove('active'));
            // Tambahkan class 'active' pada link yang sedang ditekan
            this.classList.add('active');
        });
    });

    // Tambahkan event listener untuk tombol logout
    document.getElementById('logoutBtn').addEventListener('click', function(event) {
        event.preventDefault();
        // Redirect to previous page (Welcome page)
        window.history.back();
    });
</script>

</body>
</html>
