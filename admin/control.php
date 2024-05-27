<?php
$refresh = fn ($waktu, $url) => '<meta http-equiv="refresh" content="' . $waktu . '; url=' . $url . '">';

$query = fn ($table, $id, $id2) => mysqli_query($conn, "SELECT * FROM $table WHERE $id = '$id2'");

$hapus = fn ($table, $id, $id_value) => mysqli_query($conn, "DELETE FROM $table WHERE $id ='$id_value'");

function artikel($id)
{
    include "../koneksi.php";
    $data = [];
    $q = mysqli_query($conn, "SELECT * FROM artikel WHERE id_admin='$id'");
    while ($d = mysqli_fetch_array($q)) {
        $data[] = $d;
    }

    return $data;
}


$tambahArtikel = fn ($id_admin, $judul, $gambar, $tanggal, $keterangan, $status) => mysqli_query($conn, "INSERT INTO artikel VALUES('','$id_admin','$judul','$gambar','$tanggal','$keterangan','$status')");
function event($id)
{
    include "../koneksi.php";
    $dataevent = [];
    $q = mysqli_query($conn, "SELECT * FROM event WHERE id_user='$id'");
    while ($d = mysqli_fetch_array($q)) {
        $dataevent[] = $d;
    }

    return $dataevent;
}


$tambahEvent = fn ($id_admin, $judul, $gambar, $tanggal, $keterangan, $status) => mysqli_query($conn, "INSERT INTO event VALUES('','$id_admin','$judul','$gambar','$tanggal','$keterangan','$status')");
// data rutinan
function rutinan($id)
{
    include "../koneksi.php";
    $datarutinan = [];
    $q = mysqli_query($conn, "SELECT * FROM rutinan WHERE id_user='$id'");
    while ($d = mysqli_fetch_array($q)) {
        $datarutinan[] = $d;
    }

    return $datarutinan;
}


$tambahRutinan = fn ($id_admin, $judul, $gambar, $tanggal, $keterangan, $status) => mysqli_query($conn, "INSERT INTO rutinan VALUES('','$id_admin','$judul','$gambar','$tanggal','$keterangan','$status')");
$alertSuccess = fn ($text) => '<div class="alert alert-success">' . $text . '</div>';
$alertDanger = fn ($text) => '<div class="alert alert-danger">' . $text . '</div>';