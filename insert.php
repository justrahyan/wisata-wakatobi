<?php
function insertToDatabase()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_wisata";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }

    if (isset($_POST['btnsimpan'])) {
        $nama_lengkap = $_POST['nama_lengkap'];
        $no_telp = $_POST['no_telp'];
        $durasi = $_POST['waktu'];
        $jml_peserta = $_POST['jml_peserta'];

        $harga_paket = 0;
        $total_tagihan = 0;

        if (isset($_POST['penginapan'])) {
            $harga_paket += 1000000;
        }
        if (isset($_POST['transportasi'])) {
            $harga_paket += 1200000;
        }
        if (isset($_POST['makanan'])) {
            $harga_paket += 500000;
        }

        $total_tagihan = $harga_paket * $jml_peserta * $durasi;

        $sql = "INSERT INTO `order` (nama_lengkap, telp, durasi, jml_peserta, penginapan, transportasi, makanan, harga, total) 
            VALUES ('$nama_lengkap', '$no_telp', $durasi, $jml_peserta, " . (isset($_POST['penginapan']) ? 1 : 0) . ", 
            " . (isset($_POST['transportasi']) ? 1 : 0) . ", " . (isset($_POST['makanan']) ? 1 : 0) . ", $harga_paket, $total_tagihan)";

        if ($conn->query($sql) === TRUE) {
            header("Location: transaksi.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>