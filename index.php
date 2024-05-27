<?php
session_start();
$id_admin = @$_SESSION['id_admin'];
include "koneksi.php";
include "control.php";

$user = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM admin WHERE id_admin='$id_admin'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LINGKUNGAN DUSUN PULE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css" />
</head>

<body>


    <?php

    if ($page == 'event') {
        $titleBanner = "Event Terbaru";
        include "page/banner.php";
        include "page/event.php";
    } elseif ($page == 'about') {
        $titleBanner = "Tentang Lingkungan Pule ";
        include "page/banner.php";
        include "page/penduduk.php";
        include "page/about.php";
    } elseif ($page == 'artikel') {
        $titleBanner = "Berita Lingkungan Pule ";
        include "page/banner.php";
        include "page/artikel.php";
    } elseif ($page == 'Rutinan') {
        $titleBanner = "Rutinan Lingkungan Pule ";
        include "page/banner.php";
        include "page/Rutinan.php";
    } elseif ($page == 'detail') {
        $titleBanner = "Detail Artikel ";
        include "page/banner.php";
        include "page/detail.php";
    } elseif (!empty($_GET['search'])) {
        $titleBanner = 'Pencarian Artikel "' . $_GET['search'] . '" ';
        include "page/banner.php";
        include "page/artikel.php";
    } else {

        include "page/banner-top.php";
        include "page/event.php";
        include "page/artikel.php";
        include "page/Rutinan.php";
        include "page/penduduk.php";
        include "page/about.php";
    }

    ?>

    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 pe-0 pe-lg-5">
                    <h4 class="text-warning">LINGKUNGAN PULE</h4>
                    <p class="text-light small mt-3 pe-0 pe-lg-5">
                        Dukuh Pule adalah suatu lingkungan yang terletak di Kelurahan Gedong, Kecamatan Pracimantoro,
                        sekitar 2 kilometer di sebelah selatan Kota Pracimantoro. Daerah ini dikenal dengan aktivitas
                        penggalian dan pabrik pengolahan batu kalsit. Penggalian dan pengolahan batu kalsit menjadi
                        salah satu ciri khas dan kegiatan ekonomi utama yang menonjol di wilayah ini.
                    </p>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-warning mb-3">Navigation</h5>
                    <p>
                        <a href="" class="link-light text-decoration-none small">Home</a>
                    </p>
                    <p>
                        <a href="" class="link-light text-decoration-none small">event</a>
                    </p>
                    <p>
                        <a href="" class="link-light text-decoration-none small">Rutinan</a>
                    </p>
                    <p>
                        <a href="" class="link-light text-decoration-none small">Informasi</a>
                    </p>
                    <p>
                        <a href="" class="link-light text-decoration-none small">Tentang Kami</a>
                    </p>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-warning mb-3">Contact</h5>
                    <p>
                        <a href="" class="link-light text-decoration-none small">Jl.Joho,Dusun Lingkungan
                            Pule,Kalurahan Gedong,Kecamatan Pracimantoro, Kabupaten Wonogiri,
                            Provinsi Jawa Tengah</a>
                    </p>
                    <p>
                        <a href="" class="link-light text-decoration-none small">+62 822 4151 4993</a>
                    </p>
                    <p>
                        <a href="" class="link-light text-decoration-none small">Lingkunganpule@gmail.com</a>
                    </p>

                </div>
            </div>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // Inisialisasi chart
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'Jumlah Penduduk',
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>