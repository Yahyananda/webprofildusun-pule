<?php
$id = $_GET['id'];
$dataevent = eventdetail($id);

if (isset($_POST['kirimKomentar'])) {
    $tanggal = date("Y-m-d");
    $komentar = $_POST['komentar'];

    $qk = mysqli_query($conn, "INSERT INTO komentar VALUES('','$id_user','$id','$tanggal','$komentar')");
    if ($qk) {
        echo $refresh(0, "?page=detail&&id=$id");
    }
}
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <h2 class="mb-3" data-aos="fade-up"><?php echo $dataevent['judul']; ?></h2>
            <p data-aos="fade-up"><?php echo $dataevent['tanggal']; ?><span class="ms-5">By :
                    <?php echo $dataevent['username']; ?></span></p>
            <img src="img/artikel/<?php echo $dataevent['gambar']; ?>" alt="" class="w-100 mb-4" data-aos="fade-up">
            <?php echo $dataevent['keterangan']; ?>


            <?php
            if (!empty($id_user)) {
            ?>
                <form action="" method="post" class="mt-5">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control p-2" name="komentar" placeholder="Masukan Komentar" required>
                        <button class="input-group-text btn btn-warning py-2 text-light" name="kirimKomentar"><i class="bx bx-send"></i></button>
                    </div>
                </form>
            <?php } ?>
            <div class="card mt-4">
                <div class="card-body">
                    <h5>Komentar</h5>
                    <?php
                    $q = mysqli_query($conn, "SELECT * FROM komentar a LEFT JOIN user b ON a.id_user=b.id_user WHERE id_event='$id'");
                    while ($komentar = mysqli_fetch_array($q)) {
                    ?>
                        <div class="d-flex mt-3">
                            <div class="me-3">
                                <?php
                                if ($komentar['foto'] != '') {
                                ?>
                                    <div class="img-komentar" style="background-image: url('img/user/<?php echo $komentar['foto'] ?>');"></div>
                                <?php } else { ?>
                                    <div class="img-komentar" style="background-image: url('https://img.freepik.com/free-photo/wide-shot-grassy-field-with-body-water-reflecting-beautiful-sunset-sky_181624-11456.jpg?w=740&t=st=1702178907~exp=1702179507~hmac=83056cccc6749c2422410cd76294e0c6de6638ada2a2bb59c41e8ccb27e83588');">
                                    </div>

                                <?php } ?>
                            </div>
                            <div class="small">
                                <span class="text-warning"><?php echo $komentar['nama'] ?>
                                    (<?php echo $komentar['level'] ?>)</span>
                                <span class="text-secondary ms-2 xx-small"><?php echo $komentar['tanggal'] ?></span>
                                <br>
                                <?php echo $komentar['komentar'] ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>