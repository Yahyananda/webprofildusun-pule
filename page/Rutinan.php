<!-- Rutinan -->
<div class="container py-5">
    <div class="text-center py-5">

        <h2>Kegiatan Rutin</h2>

    </div>
    <div class="row">
        <?php

        $search = @$_GET['search'];
        if (!empty($search)) {
            $rutinan = $rutinanSearch($search);
        } else {
            $rutinan = rutinanDESC();
        }

        foreach ($rutinan as $datarutinan) {
        ?>
        <div class="col-lg-4 mb-3">
            <a href="?page=detail&&id=<?php echo $datarutinan['id_rutinan'] ?>"
                class="card-rutinan text-decoration-none">
                <div class="card h-100 " data-aos="fade-up">
                    <div class="img-artikel card-img-top"
                        style="background-image: url('img/rutinan/<?php echo $datarutinan['gambar'] ?>');"></div>
                    <div class="card-body p-4">
                        <h6 class="card-title card-title-rutinan text-warning fw-normal ">
                            <?php echo $datarutinan['judul'] ?>
                        </h6>
                        <div class="row justify-content-between mt-3 text-secondary xx-small">
                            <div class="col-auto">
                                <i class="bx bx-user"></i> <?php echo $datarutinan['username'] ?>
                            </div>
                            <div class="col-auto">
                                <i class="bx bx-calendar"></i> <?php echo $datarutinan['tanggal'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
<!-- end rutinan -->