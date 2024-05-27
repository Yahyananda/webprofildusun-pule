<?php

include '../koneksi.php';

?>
<h4>Data Diri</h4>
<div class="card shadow-sm border-0 mt-4">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">

                <form action="prosespenduduk.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama" class=" form-control p-2 mt-2 mb-3" required>

                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="jenis_kelamin" required>
                                <option selected>Gender</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>

                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class=" form-control p-2 mt-2 mb-3" required>

                            <label for="nik">NIK</label>
                            <input type="number" name="nik" class="form-control p-2 mt-2 mb-3" required>

                        </div>
                        <div class="col-lg-6">

                            <label for="no_telp">No Wa</label>
                            <input type="number" name="no_telp" name="no_telp" class="form-control p-2 mt-2 mb-3" required>

                            <label for="email">Email</label>
                            <input type="email" name="email" value="<?php echo @$email; ?>" class="form-control p-2 mt-2 mb-3">

                            <label for="gambar">Identitas</label>
                            <input type="file" name="gambar" class="form-control mb-3 mt-2 p-2" accept="image/jpeg, image/png" required>
                        </div>
                        <div class="col">
                            <button class="btn btn-warning text-light p-2 px-4" name="submit" value="Daftar">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>