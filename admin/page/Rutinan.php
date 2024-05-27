<?php

if (!empty($_GET['id'])) {
    $datarutinan = mysqli_fetch_array($query("rutinan", "id_rutinan", $_GET['id']));
    unlink("../img/rutinan/$datarutinan[gambar]");

    $hapus("rutinan", "id_rutinan", $_GET['id']);
    echo $refresh(0, "?page=rutinan");
}

if (!empty($_GET['id_setujui'])) {
    mysqli_query($conn, "UPDATE rutinan SET status='1' WHERE id_rutinan='$_GET[id_setujui]'");
    echo $refresh(0, "?page=rutinan");
}
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="h3 mb-0 text-gray-800">rutinan</h3>
    <a href="?page=tambah_rutinan" class="btn btn-warning text-white btn-sm">Tambah rutinan</a>
</div>

<div class="card border-0 shadow-sm">

    <div class="card-body">
        <div class="table-responsive p-2">
            <table class="table py-3" id="dataTable" style="min-width: 1000px;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>tanggal</th>
                        <th>Status</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $q = mysqli_query($conn, "SELECT * FROM rutinan a LEFT JOIN admin b ON a.id_admin=b.id_admin ORDER BY id_rutinan DESC");
                    while ($datarutinan = mysqli_fetch_array($q)) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo substr($datarutinan['judul'], 0, 50) . "..." ?></td>
                            <td><?php echo $datarutinan['tanggal'] ?></td>
                            <td>

                                <?php
                                if ($datarutinan['status'] == 0) {
                                    echo '<i class="bx bx-sm bxs-x-circle text-danger"></i>';
                                } elseif ($datarutinan['status'] == 1) {
                                    echo '<i class="bx bx-sm bxs-check-circle text-success"></i>';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="?page=artikel&&id_setujui=<?php echo $datarutinan['id_rutinan'] ?>" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#setujui<?php echo $datarutinan['id_rutinan'] ?>">Setujui</a>
                                <div class=" modal fade" id="setujui<?php echo $datarutinan['id_rutinan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Setujui Artikel</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin Ingin Menyetujui Artikel <br>
                                                <b>"<?php echo $datarutinan['judul'] ?>"</b>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href=" ?page=artikel&&id_setujui=<?php echo $datarutinan['id_artikel'] ?>" class="btn btn-success">Setujui</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <a href="" class="btn btn-warning text-light btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?php echo $datarutinan['id_rutinan'] ?>">Detail</a>


                                <div class=" modal fade" id="detail<?php echo $datarutinan['id_rutinan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail Artikel</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body py-3">
                                                <h1><?php echo $datarutinan['judul'] ?></h1>
                                                <p><?php echo $datarutinan['tanggal'] ?></p>
                                                <br>
                                                <img src="../img/rutinan/<?php echo $datarutinan['gambar'] ?>" alt="gambar" class="w-100 mb-3">
                                                <?php echo $datarutinan['keterangan'] ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <a class="btn btn-danger  btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $datarutinan['id_rutinan'] ?>">Hapus</a>
                                <div class=" modal fade" id="hapus<?php echo $datarutinan['id_rutinan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Rutinan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin Ingin Menghapus Artikel <br>
                                                <b>"<?php echo $datarutinan['judul'] ?>"</b>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href="?page=artikel&&id=<?php echo $datarui['id_rutinan'] ?>" class="btn btn-danger">Hapus</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>