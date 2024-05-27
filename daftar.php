<?php

include './koneksi.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../logo/lestari.png">
    <title>Lingkungan Pule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5 ">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8 mt-5">
                <div class="card shadow border-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-body p-5">
                                <h5 class="text-warning">Daftar</h5>
                                <p class="text-secondary small mt-3">Register Akun Web Dusun Lingkungan Pule
                                    <i class="bx bx-rocket"></i>
                                </p>
                                <form action="prosespen.php" method="POST" class="mt-5">
                                    <input type="text" name="nama" class="form-control mb-3 p-2 px-3"
                                        value="<?php echo @$nama; ?>" required placeholder="Nama" />
                                    <input type="text" name="alamat" class="form-control mb-3 p-2 px-3"
                                        value="<?php echo @$alamat; ?>" required placeholder="Alamat" />
                                    <input type="text" name="username" class="form-control mb-3 p-2 px-3"
                                        value="<?php echo @$username; ?>" required placeholder="Username" />
                                    <input type="password" name="password" class="form-control mb-3 p-2 px-3"
                                        value="<?php echo @$password; ?>" required placeholder="password" />
                                    <button class="btn btn-warning text-white px-4" name="simpan"
                                        value="Simpan">simpan</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-login w-100 h-100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>