<?php

if (!empty($_GET['id'])) {
    $dataevent = mysqli_fetch_array($query("event", "id_event", $_GET['id']));
    unlink("../img/event/$dataevent[gambar]");

    $hapus("event", "id_artikel", $_GET['id']);
    echo $refresh(0, "?page=event");
}

if (!empty($_GET['id_setujui'])) {
    mysqli_query($conn, "UPDATE event SET status='1' WHERE id_event='$_GET[id_setujui]'");
    echo $refresh(0, "?page=event");
}
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="h3 mb-0 text-gray-800">Event</h3>
    <a href="?page=tambah_event" class="btn btn-warning text-white btn-sm">Tambah Event</a>
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
                    $q = mysqli_query($conn, "SELECT * FROM event a LEFT JOIN user b ON a.id_user=b.id_user ORDER BY id_event DESC");
                    while ($dataevent = mysqli_fetch_array($q)) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo substr($dataevent['judul'], 0, 50) . "..." ?></td>
                            <td><?php echo $dataevent['tanggal'] ?></td>
                            <td>

                                <?php
                                if ($dataevent['status'] == 0) {
                                    echo '<i class="bx bx-sm bxs-x-circle text-danger"></i>';
                                } elseif ($dataevent['status'] == 1) {
                                    echo '<i class="bx bx-sm bxs-check-circle text-success"></i>';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="?page=event&&id_setujui=<?php echo $dataevent['id_event'] ?>" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#setujui<?php echo $dataevent['id_event'] ?>">Setujui</a>
                                <div class=" modal fade" id="setujui<?php echo $dataevent['id_event'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Setujui Event</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin Ingin Menyetujui Event <br>
                                                <b>"<?php echo $dataevent['judul'] ?>"</b>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href=" ?page=event&&id_setujui=<?php echo $dataevent['id_event'] ?>" class="btn btn-success">Setujui</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <a href="" class="btn btn-warning text-light btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?php echo $dataevent['id_event'] ?>">Detail</a>


                                <div class=" modal fade" id="detail<?php echo $data['id_event'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail Event</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body py-3">
                                                <h1><?php echo $dataevent['judul'] ?></h1>
                                                <p><?php echo $dataevent['tanggal'] ?></p>
                                                <br>
                                                <img src="../img/event/<?php echo $dataevent['gambar'] ?>" alt="gambar" class="w-100 mb-3">
                                                <?php echo $dataevent['keterangan'] ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <a class="btn btn-danger  btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $dataevent['id_event'] ?>">Hapus</a>
                                <div class=" modal fade" id="hapus<?php echo $dataevent['id_event'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Event</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin Ingin Menghapus Event <br>
                                                <b>"<?php echo $dataevent['judul'] ?>"</b>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <a href="?page=event&&id=<?php echo $dataevent['id_artikel'] ?>" class="btn btn-danger">Hapus</a>

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