<?php
require_once "insert.php";
insertToDatabase();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Wisata Taman Wakatobi</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/transaksi-3.css">

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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="pemesanan.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="transaksi.php">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 transaksi">
        <header>
            <h1>Daftar Transaksi</h1>
        </header>
        <div id="order-list">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_wisata";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM `order` ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class='card mb-3'>
                        <div class='card-body'>
                            <div class='d-flex justify-content-between'>
                                <h5 class='card-title'>ID Pesanan: <?php echo $row['id']; ?></h5>
                                <a href='hapus.php?id=<?php echo $row['id']; ?>' class='btn btn-danger btn-sm'><i class='fa-solid fa-trash'></i></a>
                            </div>
                            <div class='row mt-2'>
                                <div class='col-md-6'>
                                    <p class='card-text'>Nama Lengkap: <?php echo $row['nama_lengkap']; ?></p>
                                    <p class='card-text'>Nomor Telepon: <?php echo $row['telp']; ?></p>
                                    <p class='card-text'>Durasi Waktu (Hari): <?php echo $row['durasi']; ?></p>
                                    <p class='card-text'>Jumlah Peserta: <?php echo $row['jml_peserta']; ?></p>
                                    <p class='card-text'>Penginapan: <?php echo $row['penginapan']; ?></p>
                                </div>
                                <div class='col-md-6'>
                                    <p class='card-text'>Transportasi: <?php echo $row['transportasi']; ?></p>
                                    <p class='card-text'>Makanan: <?php echo $row['makanan']; ?></p>
                                    <p class='card-text'>Harga: Rp. <?php echo $row['harga']; ?></p>
                                    <p class='card-text'>Total: Rp. <?php echo $row['total']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } else {
                echo "<p style='text-align: center'>Tidak ada data.</p>";
            }
            $conn->close();
            ?>
        </div>
    </div>

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
