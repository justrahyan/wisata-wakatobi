<?php
require_once "insert.php";
insertToDatabase();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan - Wisata Taman Wakatobi</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/pemesanan1.css">

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
                        <a class="nav-link" href="paket.php">Daftar Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pemesanan.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="pemesanan-container">
            <header>
                <h1>Form Pemesanan Tiket</h1>
            </header>
            <div class="pemesanan-form">
                <form action="pemesanan.php" method="post" class="form-container">
                    <div id="form-input">
                        <div class="form-left">
                            <div class="form-row">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required />
                            </div>
                            <br />
                            <div class="form-row">
                                <label for="no_telp">Nomor Telepon</label>
                                <input type="text" name="no_telp" id="no_telp" class="form-control" required />
                            </div>
                            <br />
                            <div class="form-row">
                                <label for="waktu">Durasi Waktu (Hari)</label>
                                <input type="number" name="waktu" id="waktu" class="form-control" required />
                            </div>
                            <br />
                            <div class="form-row">
                                <label for="jml_peserta">Jumlah Peserta</label>
                                <input type="number" name="jml_peserta" id="jml_peserta" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-right">
                            <div class="form-row">
                                <label for="pilihan_paket">Pilihan Paket</label>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="penginapan" name="penginapan" value="hotel" />
                                    <label for="penginapan">Penginapan (1.000.000)</label><br />
                                    <input type="checkbox" id="transportasi" name="transportasi" value="bus" />
                                    <label for="transportasi">Transportasi (1.200.000)</label><br />
                                    <input type="checkbox" id="makanan" name="makanan" value="restoran" />
                                    <label for="makanan">Makanan (500.000)</label><br />
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="jml_peserta">Harga Paket</label>
                                <input type="text" name="harga" id="harga" class="form-control" required readonly />
                            </div>
                            <br />
                            <div class="form-row">
                                <label for="jml_peserta">Jumlah Tagihan</label>
                                <input type="text" name="jml_tagihan" id="jml_tagihan" class="form-control" required readonly />
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <button class="btn btn-primary btn-md" value="Simpan" name="btnsimpan">Simpan</button>
                        <a href="" class="btn btn-danger btn-md" value="Batal" name="btnbatal">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
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