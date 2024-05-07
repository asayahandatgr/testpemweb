<!DOCTYPE html>
<html lang="en">
<?php
include_once('../included/meta.php');
require_once('../dbkoneksi.php');
?>

<body class="hold-transition mdl-layout__content sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- nav top -->
        <?php include_once('../included/header.php') ?>
        <!-- akhir header -->
        <!-- sidebar -->
        <?php include_once('../included/sidebar.php') ?>
        <main class="content-wrapper dark-mode">
            <div class="content-header">
                <div class="container-fluid p-2">
                    <!-- nav top right -->
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Ruang Kelola Pasien</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="../index.php">Admin</a></li>
                                <li class="breadcrumb-item active ">Pasien</li>
                            </ol>
                        </div>
                    </div>
                    <!-- end nav top right -->
                    <!-- table -->
                    <div class="row mb-2">
                        <div class="col-md-12 pt-5">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive custom-table-responsive">
                                        <table class="table custom-table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Nama</th>
                                                    <th>TTL</th>
                                                    <th>Gender</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>
                                                    <th>Kelurahan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $sql = "SELECT pasien.*, kelurahan.nama as kelurahan FROM pasien INNER JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
                                                foreach ($result as $row) { ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $row['kode'] ?></td>
                                                        <td><?= $row['nama'] ?></td>
                                                        <td><?= $row['tmp_lahir'] ?>. <?= date('d F Y', strtotime($row['tgl_lahir'])); ?></td>
                                                        <td>
                                                            <?php
                                                            if ($row['gender'] == 0) {
                                                                echo "Perempuan";
                                                            } else {
                                                                echo "Laki-laki";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><?= $row['email'] ?></td>
                                                        <td><?= $row['alamat'] ?></td>
                                                        <td><?= $row['kelurahan'] ?></td>
                                                        <td>
                                                            <a class="btn btn-info d-flex" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                                                            <a class="btn btn-danger d-flex" href="hapus.php?id=<?= $row['id'] ?>">Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                ?>
                                            </tbody>
                                        </table>
                                        <button class="btn btn-info mb-3 ml-3"><a href="tambah.php" class="text-white">Tambah</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- last table -->
                </div>
            </div>
        </main>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>

        <?php include_once('../included/footer.php') ?>
    </div>

</body>

</html>