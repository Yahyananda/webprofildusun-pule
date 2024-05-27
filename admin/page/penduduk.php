<?php
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="h3 mb-0 text-gray-800">Data Penduduk</h3>
    <a href="?page=tambah_penduduk" class="btn btn-warning text-white btn-sm">Tambah Penduduk</a>
</div>

<div class="card border-0 shadow-sm">

    <div class="card-body">
        <div class="table-responsive p-2">
            <table class="table py-3" id="dataTable" style="min-width: 1000px;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>NIK</th>
                        <th>NO Telpon</th>
                        <th>email</th>
                        <th>Identitas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $q = mysqli_query($conn, "SELECT * FROM daftar_warga ORDER BY id_warga DESC");
                    while ($row = mysqli_fetch_assoc($q)) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['jenis_kelamin']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['nik']; ?></td>
                            <td><?php echo $row['no_telp']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><img src="../img/identitas<?php echo $row['gambar']; ?>" width="100" height="100" alt="Gambar">
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>