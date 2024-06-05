<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Paket - Wisata Taman Wakatobi</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/paket.css">

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
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="paket.php">Daftar Paket</a>
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

    <section id="paket">
        <header>
            <h1>Daftar Paket</h1>
            <p>Taman Nasional Wakatobi menyediakan paket hiburan yang dapat membuat liburanmu jadi lebih seru.</p>
        </header>
        <div class="paket-container">
            <div class="paket-card">
                <img src="assets/img/Makanan.jpg" alt="">
                <div class="card-text">
                    <h3>Makanan</h3>
                    <p>Santapan khas Wakatobi yang tidak boleh kamu lewatkan jika berlibur kesini.</p>
                    <span class="price">Rp.500.000</span>
                </div>
            </div>
            <div class="paket-card">
                <img src="assets/img/Kendaraan.jpg" alt="">
                <div class="card-text">
                    <h3>Transportasi</h3>
                    <p>Taman Nasional Wakatobi menyediakan transportasi khusus jika anda ingin berlibur kesini.</p>
                    <span class="price">Rp.1.200.000</span>
                </div>
            </div>
            <div class="paket-card">
                <img src="assets/img/Penginapan.jpg" alt="">
                <div class="card-text">
                    <h3>Penginapan</h3>
                    <p>Taman Nasional Bantimurung memiliki sejumlah daya tarik yang sayang untuk dilewatkan jika berlibur kesini.</p>
                    <span class="price">Rp.1.000.000</span>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-menu">
            <ul>
                <li><a href="index.php">Beranda </a></li>
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