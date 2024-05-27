<?php

function artikelDESC()
{
    include "koneksi.php";
    $data = [];
    $q = mysqli_query($conn, "SELECT * FROM artikel a LEFT JOIN user b ON a.id_user=b.id_user");
    while ($d = mysqli_fetch_array($q)) {
        $data[] = $d;
    }

    return $data;
}
function artikelSearch($search)
{
    include "koneksi.php";
    $data = [];
    $q = mysqli_query($conn, "SELECT * FROM artikel a LEFT JOIN user b ON a.id_user=b.id_user WHERE status='1' and  judul LIKE '%$search%' or  keterangan LIKE '%$search%' ORDER BY id_artikel DESC");
    while ($d = mysqli_fetch_array($q)) {
        $data[] = $d;
    }

    return $data;
}

function artikeldetail($id)
{
    include "koneksi.php";
    $q = mysqli_query($conn, "SELECT * FROM artikel");
    return  mysqli_fetch_array($q);
}

$refresh = fn ($waktu, $url) => '<meta http-equiv="refresh" content="' . $waktu . '; url=' . $url . '">';

function eventDESC()
{
    include "koneksi.php";
    $dataevent = [];
    $q = mysqli_query($conn, "SELECT * FROM event a LEFT JOIN user b ON a.id_user=b.id_user");
    while ($d = mysqli_fetch_array($q)) {
        $dataevent[] = $d;
    }

    return $dataevent;
}
function eventSearch($search)
{
    include "koneksi.php";
    $dataevent = [];
    $q = mysqli_query($conn, "SELECT * FROM event a LEFT JOIN user b ON a.id_user=b.id_user WHERE status='1' and  judul LIKE '%$search%' or  keterangan LIKE '%$search%' ORDER BY id_event DESC");
    while ($d = mysqli_fetch_array($q)) {
        $dataevent[] = $d;
    }

    return $dataevent;
}

function eventdetail($id)
{
    include "koneksi.php";
    $q = mysqli_query($conn, "SELECT * FROM event");
    return  mysqli_fetch_array($q);
}

$refresh = fn ($waktu, $url) => '<meta http-equiv="refresh" content="' . $waktu . '; url=' . $url . '">';

// rutinan
function rutinanDESC()
{
    include "koneksi.php";
    $datarutinan = [];
    $q = mysqli_query($conn, "SELECT * FROM rutinan a LEFT JOIN admin b ON a.id_admin=b.id_admin");
    while ($d = mysqli_fetch_array($q)) {
        $datarutinan[] = $d;
    }

    return $datarutinan;
}
function rutinanSearch($search)
{
    include "koneksi.php";
    $datarutinan = [];
    $q = mysqli_query($conn, "SELECT * FROM rutinan a LEFT JOIN admin b ON a.id_admin=b.id_admin WHERE status='1' and  judul LIKE '%$search%' or  keterangan LIKE '%$search%' ORDER BY id_rutinan DESC");
    while ($d = mysqli_fetch_array($q)) {
        $datarutinan[] = $d;
    }

    return $datarutinan;
}

function rutinandetail($id)
{
    include "koneksi.php";
    $q = mysqli_query($conn, "SELECT * FROM rutinan");
    return  mysqli_fetch_array($q);
}

$refresh = fn ($waktu, $url) => '<meta http-equiv="refresh" content="' . $waktu . '; url=' . $url . '">';