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
                            <h1 class="m-0">Ruang Kelola Periksa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="../index.php">Admin</a></li>
                                <li class="breadcrumb-item active ">Periksa</li>
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
                                                    <th>Tanggal</th>
                                                    <th>Berat Badan</th>
                                                    <th>Tinggi Badan</th>
                                                    <th>Tensi Darah</th>
                                                    <th>Keterangan</th>
                                                    <th>Pasien</th>
                                                    <th>Dokter</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $sql = "SELECT periksa.*, pasien.nama as pasien, paramedik.nama as dokter FROM periksa INNER JOIN pasien ON periksa.pasien_id = pasien.id INNER JOIN paramedik ON periksa.dokter_id = paramedik.id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
                                                foreach ($result as $row) { ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= date('d F Y', strtotime($row['tanggal'])); ?></td>
                                                        <td><?= $row['berat'] ?></td>
                                                        <td><?= $row['tinggi'] ?></td>
                                                        <td><?= $row['tensi'] ?></td>
                                                        <td><?= $row['keterangan'] ?></td>
                                                        <td><?= $row['pasien'] ?></td>
                                                        <td><?= $row['dokter'] ?></td>
                                                        <td>
                                                            <a class="btn d-flex btn-info" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                                                            <a class="btn d-flex btn-danger" href="hapus.php?id=<?= $row['id'] ?>">Hapus</a>
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