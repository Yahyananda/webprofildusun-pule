<!-- event -->
<div class="container py-5">
    <div class="text-center py-5">

        <h2> Event Terbaru</h2>

    </div>
    <div class="row">
        <?php

        $search = @$_GET['search'];
        if (!empty($search)) {
            $event = eventSearch($search);
        } else {
            $event = eventDESC();
        }

        foreach ($event as $dataevent) {
        ?>
        <div class="col-lg-4 mb-3">
            <a href="?page=detail&&id=<?php echo $dataevent['id_event'] ?>" class="card-event text-decoration-none">
                <div class="card h-100 " data-aos="fade-up">
                    <div class="img-event card-img-top"
                        style="background-image: url('img/event/<?php echo $dataevent['gambar'] ?>'); ">
                    </div>
                    <div class="card-body p-4">
                        <h6 class="card-title card-title-artikel text-warning fw-normal ">
                            <?php echo $dataevent['judul'] ?>
                        </h6>
                        <div class="row justify-content-between mt-3 text-secondary xx-small">
                            <div class="col-auto">
                                <i class="bx bx-user"></i> <?php echo $dataevent['username'] ?>
                            </div>
                            <div class="col-auto">
                                <i class="bx bx-calendar"></i> <?php echo $dataevent['tanggal'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
<!-- end event -->