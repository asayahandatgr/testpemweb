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
                        <div class="col-12 ">
                            <div class="card m-1">
                                <div class="card-body p-4">
                                    <div class="table-responsive custom-table-responsive">
                                        <form action="" method="post" class="form custom-form">

                                            <?php
                                            if (isset($_POST['tanggal'])) {
                                                $tanggal = $_POST['tanggal'];
                                                $berat = $_POST['berat'];
                                                $tinggi = $_POST['tinggi'];
                                                $tensi = $_POST['tensi'];
                                                $keterangan = $_POST['keterangan'];
                                                $pasien_id = $_POST['pasien_id'];
                                                $dokter_id = $_POST['dokter_id'];

                                                $sql = "UPDATE periksa SET tanggal = :tanggal, berat = :berat, tinggi = :tinggi, tensi = :tensi, keterangan = :keterangan, pasien_id = :pasien_id,  dokter_id = :dokter_id WHERE id = :id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->bindParam(':tanggal', $tanggal);
                                                $stmt->bindParam(':berat', $berat);
                                                $stmt->bindParam(':tinggi', $tinggi);
                                                $stmt->bindParam(':tensi', $tensi);
                                                $stmt->bindParam(':keterangan', $keterangan);
                                                $stmt->bindParam(':pasien_id', $pasien_id);
                                                $stmt->bindParam(':dokter_id', $dokter_id);
                                                $stmt->bindParam(':id', $_POST['id']);
                                                $stmt->execute();
                                                echo '<meta http-equiv="refresh" content="0; url=index.php"><script>alert("Data Berhasil diganti!")</script>';
                                            }
                                            if (isset($_GET['id'])) {
                                                $sql = "SELECT * FROM periksa WHERE id = :id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->bindParam(':id', $_GET['id']);
                                                $stmt->execute();
                                                $data = $stmt->fetch();
                                            }
                                            ?>
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal</label>
                                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data['tanggal'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="berat">Berat Pasien</label>
                                                <input type="number" class="form-control" id="berat" name="berat" value="<?= $data['berat'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tinggi">Tinggi Pasien</label>
                                                <input type="number" class="form-control" id="tinggi" name="tinggi" value="<?= $data['tinggi'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tensi">Tensi Darah</label>
                                                <input type="text" class="form-control" id="tensi" name="tensi" value="<?= $data['tensi'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $data['keterangan'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pasien_id">Pasien</label>
                                                <select name="pasien_id" class="form-control" id="pasien_id">
                                                    <option value="" hidden>Pilih Pasien</option>
                                                    <?php
                                                    $sql = "SELECT * FROM pasien";
                                                    $stmt = $dbh->prepare($sql);
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll();
                                                    foreach ($result as $kel) {
                                                        $selected = $kel['id'] == $data['pasien_id'] ? "selected" : "";
                                                        echo "<option value='$kel[id]' $selected>$kel[nama]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="dokter_id">Dokter</label>
                                                <select name="dokter_id" class="form-control" id="dokter_id">
                                                    <option value="" hidden>Pilih Dokter</option>
                                                    <?php
                                                    $sql = "SELECT * FROM paramedik";
                                                    $stmt = $dbh->prepare($sql);
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll();
                                                    foreach ($result as $kel) {
                                                        $selected = $kel['id'] == $data['dokter_id'] ? "selected" : "";
                                                        echo "<option value='$kel[id]' $selected>$kel[nama]</option>";
                                                    }
                                                    ?>
                                                </select>
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