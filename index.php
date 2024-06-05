<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Taman Wakatobi</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/style-2.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <b>Wisata Wakatobi</b>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paket.php">Daftar Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pemesanan.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrapper">
        <div class="hero-container">
            <div class="hero-text">
                <h5>SELAMAT DATANG DI TAMAN NASIONAL WAKATOBI</h5>
                <h1>Temukan keindahan Taman Nasional Wakatobi yang memanjakan mata.</h1>
            </div>
        </div>
    </section>
    
    <section class="article">
        <h6>VIDEO WISATA WAKATOBI</h6>
        <h1>Berkenalan dengan indahnya Taman Nasional Wakatobi melalui video ini!</h1>
        <p>Video di bawah dibuat untuk menampilkan keindahan alam dan keberagaman biota laut yang dapat kamu temukan di Taman Nasional Wakatobi.</p>
        <iframe src="https://www.youtube.com/embed/VnOQH81U0rg?si=KsPANzurRxJHvkNL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>

    <section id="paket">
        <header>
            <h1>Daftar Paket</h1>
            <p>Taman Nasional Wakatobi menyediakan paket hiburan yang dapat membuat liburanmu jadi lebih seru.</p>
        </header>
        <div class="paket-container">
            <div class="paket-card">
                <img src="assets/img/Makanan.jpg" alt="">
                <h5>Makanan</h5>
                <p>Santapan khas Wakatobi yang tidak boleh kamu lewatkan jika berlibur kesini.</p>
            </div>
            <div class="paket-card">
                <img src="assets/img/Kendaraan.jpg" alt="">
                <h5>Transportasi</h5>
                <p>Taman Nasional Wakatobi menyediakan transportasi khusus jika anda ingin berlibur kesini.</p>
            </div>
            <div class="paket-card">
                <img src="assets/img/Penginapan.jpg" alt="">
                <h5>Penginapan</h5>
                <p>Taman Nasional Wakatobi menyediakan penginapan untuk kamu yang ingin bermalam.</p>
            </div>
        </div>
    </section>

    <section class="location">
        <img src="assets/img/Directions-rafiki.png" alt="">
        <div class="location-content">
            <h1>Lokasi Wisata Wakatobi</h1>
            <p>Kamu dapat mengunjungi lokasi kami dengan mengikuti lokasi ini!</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.0239118021113!2d123.92785047498508!3d-5.563473594416987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da70432508addb7%3A0x5d26a2de09c86794!2sTaman%20Nasional%20Wakatobi!5e0!3m2!1sid!2sid!4v1717581734581!5m2!1sid!2sid" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    
    <footer>
        <div class="footer-menu">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="paket.php">Daftar Paket</a></li>
                <li><a href="pemesanan.php">Pemesanan</a></li>
                <li><a href="transaksi.php">Transaksi</a></li>
                <li><a>Copyright Muhammad Rahyan Noorfauzan</a></li>
            </ul>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/script.js"></script>
</body>
</html>