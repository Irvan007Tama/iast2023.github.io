<?php
require 'function.php';
$dtalumni = query1("SELECT * FROM tb_pengguna");

if ( isset($_POST["cari"])) {
    $dtalumni = carialumni($_POST["keyword"]);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Data Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="stylehalamanutama.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-success fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="admutama.php">
                <img src="icon/iastfix.png" alt="" width="37" height="36" class="d-inline-block align-text-top">
                IAST (IKATAN ALUMNI STEMBATEMA TANGERANG)
            </a>
            <div class="logout">
                <a href="login.php" class="btn btn-danger"> LOGOUT <i class="fas fa-sign-out-alt"></i></a>
                <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#btnlogout">
                    LOGOUT <i class="fas fa-sign-out-alt"></i>
                </button> -->
            </div>
        </div>
    </nav>
    <!-- Isi modal -->
    <!-- <div class="modal fade" id="btnlogout" tabindex="-1" aria-labelledby="btnlogoutLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="btnlogoutLabel">Konfirmasi Logout Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Keluar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="saveChangesBtn">Ya</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Close navbar -->

    <!-- sidebar -->
    <div class="row g-0">
        <div class="col-md-2 bg-dark mt-5 pt-4 min-vh-100">
            <ul class="nav flex-column m-lg-1 p-lg-2">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="admutama.php"><i
                            class="fa-solid fa-house-user me-3"></i>Home</a>
                    <hr class="border border-light border-1 opacity-50">
                </li>
                <li class="nav-item disabled">
                    <a class="nav-link text-white" href="#sidemenu" data-bs-toggle="collapse">
                        <i class="fa-solid fa-database me-3"></i><span>Master Data </span><i
                            class="fa fa-caret-down"></i>
                    </a>
                    <ul class="nav my-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                        <li class="nav-item">
                            <a class="nav-link bg-light text-black" href="admdataalumni.php" aria-current="page">
                                <i class="fa-solid fa-user-graduate m-lg-2"></i>Data Alumni
                            </a>
                        </li>
                    </ul>
                    <hr class="border border-light border-1 opacity-50">
                </li>
                <li class="nav-item disabled">
                    <a class="nav-link text-white" href="#sidemenu1" data-bs-toggle="collapse">
                        <i class="fa-solid fa-bars-progress me-3"></i><span>Kegiatan </span><i
                            class="fa fa-caret-down"></i>
                    </a>
                    <ul class="nav collapse my-1 flex-column" id="sidemenu1" data-bs-parent="#menu">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="admkatkegiatan.php" aria-current="page">
                                <i class="fa-solid fa-shapes m-lg-2"></i>Kategori Kegiatan
                            </a>
                        </li>
                    </ul>
                    <ul class="nav collapse my-1 flex-column" id="sidemenu1" data-bs-parent="#menu">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="adminfokegiatan.php" aria-current="page">
                                <i class="fa-regular fa-circle-question m-lg-2"></i>Informasi Kegiatan
                            </a>
                        </li>
                    </ul>
                    <hr class="border border-light border-1 opacity-50">
                </li>
                <li class="nav-item disabled">
                    <a class="nav-link text-white" href="#sidemenu2" data-bs-toggle="collapse">
                        <i class="fa-solid fa-earth-asia me-3"></i><span>Lowongan Kerja </span><i
                            class="fa fa-caret-down"></i>
                    </a>
                    <ul class="nav collapse my-1 flex-column" id="sidemenu2" data-bs-parent="#menu">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="admkatloker.php" aria-current="page">
                                <i class="fa-solid fa-shapes m-lg-2"></i>Kategori Loker
                            </a>
                        </li>
                    </ul>
                    <ul class="nav collapse my-1 flex-column" id="sidemenu2" data-bs-parent="#menu">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="adminfoloker.php" aria-current="page">
                                <i class="fa-regular fa-circle-question m-lg-2"></i>Informasi Loker
                            </a>
                        </li>
                    </ul>
                    <hr class="border border-light border-1 opacity-50">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="admlaporan.php"><i
                            class="fa-solid fa-book me-3"></i>Laporan</a>
                    <hr class="border border-light border-1 opacity-50">
                </li>
            </ul>
        </div>
<!-- content -->
        <div class="col-md-10 g-3 p-5">
            <h1><i class="fa-solid fa-user-graduate mt-5"></i>DATA ALUMNI</h1>
            <hr class="mb-4">
            <form action="" method="post">
            <div class="d-flex align-items-lg-center mb-4">
                    <input class="form-control me-1" style="width:25%;" type="text" name="keyword" placeholder="Search" aria-label="Search" autofocus autocomplete="off">
                    <button class="btn btn-secondary" type="submit" name="cari"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" style="width: 20%;">Nama Lengkap</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col" style="width: 30%;">Alamat</th>
                        <th scope="col" style="width: 22%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach( $dtalumni as $row ) : ?>
                    <tr>
                        <th scope="row"><?= $i;?></th>
                        <td><?= $row["nama_lengkap"]?></td>
                        <td><?= $row["jenis_kelamin"]?></td>
                        <td><?= $row["angkatan"]?></td>
                        <td><?= $row["alamat"]?></td>
                        <td>
<!-- detail -->
<!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning mx-4" data-bs-toggle="modal" data-bs-target="#detail<?php echo $row['id_pengguna'];?>">
                                Detail
                            </button>
                            <!-- Modal Detail-->
                            <div class="modal fade" id="detail<?php echo $row['id_pengguna'];?>">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5">Detail Data Alumni</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="data_detail">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item text-white bg-secondary"><?php echo $row["nama_lengkap"]?></li>
                                                <li class="list-group-item"><?php echo $row["alamat"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">Jenis Kelamin</p><?php echo $row["jenis_kelamin"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">Tanggal Lahir</p><?php echo $row["tgl_lahir"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">Nomor Handphone</p><?php echo $row["no_telp"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">E-mail Aktif</p><?php echo $row["email"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">Tahun Lulus</p><?php echo $row["thn_lulus"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">Angkatan</p><?php echo $row["angkatan"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">Golongan Darah</p><?php echo $row["gol_darah"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">Status</p><?php echo $row["status"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">Nama Perusahaan</p><?php echo $row["nama_perusahaan"]?></li>
                                                <li class="list-group-item"><p class="text-secondary mb-0">Tanggal Daftar</p><?php echo $row["tgl_daftar"]?></li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- end detail -->
<!-- hapus data -->
                            <a class="btn btn-danger" href="hapusdataalumni.php?id_pengguna=<?= $row["id_pengguna"];?>" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash"></i></a>
<!-- end hapus data -->
                        </td>
                    </tr>
                    <?php $i++?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </form>
        </div>
        <!-- close content -->
        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>&copy; 2023 Oficial Website IAST</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- close footer -->
    </div>
    <!-- close sidebar -->
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="jsadmin.js"></script>
    <!-- end javascript -->
</body>

</html>