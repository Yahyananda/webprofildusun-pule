<?php
include "../koneksi.php";
session_start();
$id_user = $_SESSION['id_user'];


$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$nik = $_POST['nik'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];

// Upload gambar
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$path = "../img/identitas" . $nama_file;

if (move_uploaded_file($tmp_file, $path)) {
    // Gambar berhasil diupload, lakukan proses simpan ke database atau langkah lainnya sesuai kebutuhan

    $query = "INSERT INTO daftar_warga (id_user,nama, jenis_kelamin, alamat, nik, no_telp, email, gambar) VALUES ('$id_user','$nama', '$jenis_kelamin', '$alamat', '$nik', '$no_telp', '$email', '$nama_file')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Pendaftaran berhasil!<br>";
        echo "<a href='index.php'>Lihat Data Pendaftar</a>";
    } else {
        echo "Maaf, terjadi kesalahan saat menyimpan data.";
    }
} else {
    // Gambar gagal diupload
    echo "Maaf, gambar gagal diupload.";
}
