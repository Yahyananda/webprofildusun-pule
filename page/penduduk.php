<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <main>
                <!-- Konten Utama -->
                <h5>Struktur Organisasi</h5>
                <div class="col-lg-8 mb-3">
                    <a href="" class="card-artikel text-decoration-none">
                        <div class="card vh-300 " data-aos="fade-up">
                            <div class="img-artikel card-img-top" style="background-image: url('img/struktur.jpg');">
                            </div>
                        </div>
                    </a>
                </div>
            </main>
        </div>
        <div class="col-md-4">
            <?php
            // Koneksi ke database atau langkah lainnya sesuai kebutuhan

            // Ambil data dari database
            $query = "SELECT jenis_kelamin, COUNT(*) as jumlah FROM daftar_warga GROUP BY jenis_kelamin";
            $result = mysqli_query($conn, $query);

            // Inisialisasi array untuk menyimpan data chart
            $labels = [];
            $data = [];

            while ($row = mysqli_fetch_assoc($result)) {
                $labels[] = $row['jenis_kelamin'];
                $data[] = $row['jumlah'];
            }
            ?>
            <aside class="bg-light p-3">
                <!-- Konten Aside -->
                <h2> Data Penduduk </h2>
                <canvas id="barChart" width="400" height="300"></canvas>
            </aside>
        </div>
    </div>
</div>