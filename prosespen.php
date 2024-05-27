<?php

include './koneksi.php';
if (isset($_POST['simpan'])) {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO user (id_user,nama,alamat,username,password) VALUE ('$id_user','$nama','$alamat','$username','$password')";
    $query = mysqli_query($conn, $sql);
    if ($query) {

        header('location: user/index.php?status=sukses');
    } else {

        header('location: user_login.php?status=gagal');
    }
} else {
    die("akses dilarang ...");
}