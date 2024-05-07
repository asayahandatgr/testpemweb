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
                            <h1 class="m-0">Ruang Kelola Kelurahan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="../index.php">Admin</a></li>
                                <li class="breadcrumb-item active ">Kelurahan</li>
                            </ol>
                        </div>
                    </div>
                    <!-- end nav top right -->
                    <!-- table -->
                    <div class="row mb-2">
                        <div class="col-12 ">
                            <div class="card m-1">
                                <div class="card-body p-4">
                                    <div class="table-responsive custom-table-responsive">
                                        <form action="" method="post" class="form custom-form">
                                            <?php
                                            if (isset($_POST['nama'])) {
                                                $nama = $_POST['nama'];
                                                $kecamatan = $_POST['kecamatan'];

                                                $sql = "UPDATE kelurahan SET nama = :nama, kecamatan = :kecamatan WHERE id = :id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->bindParam(':nama', $nama);
                                                $stmt->bindParam(':kecamatan', $kecamatan);
                                                $stmt->bindParam(':id', $_POST['id']);
                                                $stmt->execute();
                                                echo '<meta http-equiv="refresh" content="0; url=index.php"><script>alert("Data Berhasil diganti!")</script>';
                                            }
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                $sql = "SELECT * FROM kelurahan WHERE id = :id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->bindParam(':id', $id);
                                                $stmt->execute();
                                                $data = $stmt->fetch();
                                            }
                                            ?>
                                            <div class="form-group">
                                                <label for="nama">Nama Kelurahan</label>
                                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $data['nama'] ?>" placeholder="Nama Kelurahan">
                                            </div>
                                            <div class="form-group">
                                                <label for="kecamatan">Kecamatan ID</label>
                                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $data['kecamatan'] ?>" required placeholder="Kecamatan ID">
                                            </div>
                                            <button class="btn btn-info" type="submit">Update</button>
                                        </form>
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