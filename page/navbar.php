<!-- Navbar -->
<nav class="navbar navbar-expand-lg end">
    <div class="container-fluid">
        <a class="navbar-brand text-warning" href="#">LINGKUNGAN PULE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=event">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=Rutinan">Rutinan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=artikel">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=about">About Us</a>
                </li>
            </ul>
            <ul>
                <?php
                if (!empty($id_user)) {
                ?>
                <li class="nav-item dropstart">
                    <?php
                        if ($user['foto'] == '') {
                        ?>
                    <a class="nav-link img-profil ms-0 mt-2 mt-lg-0"
                        style="background-image: url('https://img.freepik.com/free-photo/wide-shot-grassy-field-with-body-water-reflecting-beautiful-sunset-sky_181624-11456.jpg?w=740&t=st=1702178907~exp=1702179507~hmac=83056cccc6749c2422410cd76294e0c6de6638ada2a2bb59c41e8ccb27e83588') ;"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <?php } elseif ($user['foto'] != '') {
                        ?>
                    <a class="nav-link img-profil ms-0 mt-2 mt-lg-0"
                        style="background-image: url('img/user/<?php echo $user['foto'] ?>') ;" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <?php
                        }
                        ?>
                    <ul class="dropdown-menu">
                        <li class="p-3">
                            <?php echo $user['nama'] ?>
                            <small class=" text-secondary mb-0">
                                ( <?php echo $user['level'] ?> )
                            </small>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="pe-5"><a class="dropdown-item bg-white link-secondary py-2 pe-5" href="user/"><i
                                    class="bx bx-home"></i> Dashboard</a></li>
                        <li class="pe-5"><a class="dropdown-item bg-white link-secondary py-2 pe-5"
                                href="user/?page=profil"><i class='bx bx-user-circle'></i> Profil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item bg-white link-secondary" href="user/logout.php"><i
                                    class="bx bx-log-out"></i> Logout</a></li>
                    </ul>
                </li>

                <?php
                } else {
                ?>
                <li>
                    <a href="login.php" class="btn btn-warning text-white mt-2 mt-lg-0 r-30 px-4">Masuk</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar  -->