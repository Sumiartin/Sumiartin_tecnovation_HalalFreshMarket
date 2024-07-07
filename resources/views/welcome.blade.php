<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/resources/css/app.css">
    <style>
    body {
        position: relative;
    }
    .sticky-nav {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1000;
    }
    /* Background image */
    .home-section {
        background-image: url('https://s1.bukalapak.com/attachment/112432/contoh_sayuran_buah_image_1.jpg'); /* Ganti URL dengan URL gambar yang diinginkan */
        background-size: cover;
        background-position: center;
        height: 100vh; /* Menyesuaikan tinggi sesuai kebutuhan */
        color: #fff; /* Warna teks jika perlu diatur */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .navbar-green {
        background-color: #28a745; /* Warna hijau */
    }
    .navbar-green .navbar-brand,
    .navbar-green .navbar-nav .nav-link {
        color: #fff; /* Warna teks putih */
        font-weight: bold; /* Teks tebal (bold) */
        transition: color 0.3s ease; /* Transisi warna saat hover */
    }
    .navbar-green .navbar-toggler-icon {
        color: #fff; /* Warna ikon toggler putih */
    }
    .navbar-green .navbar-nav .nav-link:hover,
    .navbar-green .navbar-nav .nav-link.active {
        color: #a9a9a9; /* Warna teks saat hover dan active */
        text-decoration: none; /* Hapus underline */
    }
    .btn-button {
        background-color: #28a745; /* Warna hijau untuk tombol */
        border-color: #28a745; /* Warna border */
    }
    .btn-button:hover {
        background-color: #a9a9a9; /* Warna hijau saat hover */
        border-color: #a9a9a9; /* Warna border saat hover */
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
    <style>
    /* Navbar Tambahan */
    .navbar-secondary {
        background-color: #f8f9fa; /* Warna latar belakang abu-abu muda */
        padding: 10px 0; /* Padding atas dan bawah */
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Shadow untuk efek elevasi */
    }

    .navbar-secondary .navbar-brand img {
        max-height: 40px; /* Atur tinggi maksimum logo BI */
    }

    .navbar-secondary .navbar-nav .nav-link {
        padding: 0 10px; /* Padding kiri dan kanan untuk setiap logo di kanan */
    }

    .navbar-secondary .navbar-nav .nav-link img {
        max-height: 30px; /* Atur tinggi maksimum untuk logo-logo di kanan */
    }


</style>


    <title>Halal Fresh Market - Home</title>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="50">


<!-- Navbar Tambahan di Atas Navbar Utama -->
<nav class="navbar navbar-expand-lg navbar-secondary">
        <!-- Logo di Ujung Kiri -->
        <a class="navbar-brand" href="#">
            <img src="https://www.bi.go.id/SiteAssets/logo-bi@2x.png" alt="">
        </a>

        <!-- Logo di Ujung Kanan -->
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#">
                <img src="https://isef.co.id/wp-content/uploads/2021/07/logo_isef_dark.png" alt="">
            </a>
            <a class="nav-link" href="#">
                <img src="https://seeklogo.com/images/F/fesyar-logo-47F801E5C7-seeklogo.com.png" alt="">
            </a>
            <a class="nav-link" href="#">
                <img src="https://seeklogo.com/images/E/ekonomi-syariah-logo-C2E3808517-seeklogo.com.png" alt="">
            </a>
            <a class="nav-link" href="#">
                <img src="https://alhazenschool.com/wp-content/uploads/2024/03/logo.png" alt="">
            </a>
        </div>
    </div>
</nav>



<!-- END NAVBAR -->

<nav id="navbar" class="navbar navbar-expand-lg navbar-green sticky-nav">
    <div class="container">
        <a class="navbar-brand" href="#">Halal Fresh Market</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#food">Market</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <!-- Login Button -->
                    <!-- Login Button -->
                    <li class="nav-item">
                    <a class="btn btn-light btn-login" href="{{ route('masuk') }}">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- END NAVBAR -->

    <!-- HOME -->

    <section id="home" class="home-section">
        <div class="container mt-5">
            <div class="row">
                <div class="text-center">
                    <h1>Welcome to Halal Fresh Market</h1>
                    <p class="lead">Selamat datang di Halal Fresh Market, destinasi utama Anda untuk mendapatkan sayuran segar, buah-buahan segar, dan ikan segar yang sepenuhnya sesuai dengan prinsip halal.</p>
                    
                </div>
            </div>
        </div>
    </section>

    <!--  END HOME -->

    <!-- ABOUT -->

    <section id="about" class="bg-light py-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Halal Fresh Shop: Toko Sayuran, Buah, dan Ikan Segar</h3>
                    <p class="lead">
                    

Selamat datang di Halal Fresh Shop, tujuan utama Anda untuk mendapatkan sayuran, buah, dan ikan segar yang dijamin kehalalannya. Kami berkomitmen untuk menyediakan produk berkualitas tinggi yang tidak hanya segar, tetapi juga sesuai dengan standar halal.

Apa yang Kami Tawarkan: <br class="mb-3">

Sayuran Segar: Kami menyediakan berbagai macam sayuran segar langsung dari petani lokal. <br class="mb-3">

Buah Segar: Nikmati kesegaran buah-buahan lokal dan impor yang berkualitas tinggi.<br class="mb-3">

Ikan Segar: Kami menyediakan berbagai jenis ikan segar yang langsung diambil dari nelayan lokal. Dengan proses penyimpanan dan pengiriman yang ketat, kami menjamin ikan tetap segar dan lezat saat tiba di meja makan Anda.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="https://d1bpj0tv6vfxyp.cloudfront.net/articles/403059_5-11-2020_11-55-41.webp" class="img-fluid rounded" alt="About Halal Food">
                </div>
            </div>
        </div>
    </section>

    <!-- END ABOUT -->

    <!-- FOOD -->

    <section id="food" class="bg-light py-5">
        <div class="container mt-5">
        <h2 style="text-align: center; font-weight: bold;">Koleksi Halal Fresh</h2>
            <div class="row mt-3">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/06/07/InShot_20230607_075422809_1-676396075.jpg" class="card-img-top" alt="Food 1">
                        <div class="card-body">
                            <h5 class="card-title">Sayuran Hijau</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('detail_sayuran') }}" class="btn btn-button">Lihat Daftar >></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                <div class="card">
                        <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2019/03/01/5c789f201a89b-detoks-buah-buahan-untuk-membersihkan-tubuh-dalam-lima-hari_665_374.jpg" class="card-img-top" alt="Food 3">
                        <div class="card-body">
                            <h5 class="card-title">Buah-buahan Segar</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('detail_buah') }}" class="btn btn-button">Lihat Daftar >></a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 mb-4">
                <div class="card">
                        <img src="https://asset.kompas.com/crops/i0eFsKEt50moQyZzcjsS1TzTt8Y=/317x198:5629x3739/750x500/data/photo/2022/02/25/6218b4254f2bb.jpg" class="card-img-top" alt="Food 2">
                        <div class="card-body">
                            <h5 class="card-title">Ikan</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('detail_ikan') }}" class="btn btn-button">Lihat Daftar >></a>
                             </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END FOOD -->

    <!-- CONTACT -->

    <section id="contact" class="py-5">
        <div class="container">
            <h2>Contact Us</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-button">Submit</button>
            </form>
        </div>
    </section>

    <!-- END CONTACT -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
    // Add smooth scrolling on all links inside the navbar
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Highlight active section in the navbar
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        const sections = document.querySelectorAll('section');
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - navbar.offsetHeight;
            const sectionBottom = sectionTop + section.offsetHeight;
            const scrollPosition = window.scrollY;

            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                const id = section.getAttribute('id');
                const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
                
                navLinks.forEach(link => {
                    if (link.getAttribute('href') === #${id}) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
        });
    });
</script>


</body>
</html>