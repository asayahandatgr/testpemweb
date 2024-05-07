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
                                    <?php
                                    if (isset($_POST['tanggal'])) {
                                        $sql = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES (?,?,?,?,?,?,?)";
                                        $stmt = $dbh->prepare($sql);
                                        $stmt->execute([
                                            $_POST['tanggal'],
                                            $_POST['berat'],
                                            $_POST['tinggi'],
                                            $_POST['tensi'],
                                            $_POST['keterangan'],
                                            $_POST['pasien_id'],
                                            $_POST['dokter_id'],
                                        ]);
                                        echo "<script>alert('Data berhasil ditambahkan')</script>";
                                        echo '<meta http-equiv="refresh" content="0; url=index.php">';
                                    }
                                    ?>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal" required placeholder="Tanggal Konsultasi">
                                        </div>
                                        <div class="form-group">
                                            <label for="berat">Berat Pasien</label>
                                            <input type="number" class="form-control" id="berat" name="berat" required placeholder="Berat Pasien">
                                        </div>
                                        <div class="form-group">
                                            <label for="tinggi">Tinggi Pasien</label>
                                            <input type="number" class="form-control" id="tinggi" name="tinggi" required placeholder="Tinggi Pasien">
                                        </div>
                                        <div class="form-group">
                                            <label for="tensi">Tensi Darah</label>
                                            <input type="text" class="form-control" id="tensi" name="tensi" required placeholder="Tensi Darah">
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Pasien" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pasien_id">Nama Pasien</label>
                                            <select name="pasien_id" class="form-control" id="kelurahan_id">
                                                <option value="">Pilih Pasien</option>
                                                <?php
                                                $sql = "SELECT * FROM pasien";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
                                                foreach ($result as $pasien) {
                                                    echo "<option value='$pasien[id]'>$pasien[nama]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="dokter_id">Nama Dokter</label>
                                            <select name="dokter_id" class="form-control" id="dokter_id">
                                                <option value="">Pilih Dokter</option>
                                                <?php
                                                $sql = "SELECT * FROM paramedik";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
                                                foreach ($result as $dokter) {
                                                    $selected = $dokter['id'] == $data['dokter_id'] ? "selected" : "";
                                                    echo "<option value='$dokter[id]' $selected>$dokter[nama]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <button class="btn btn-info" type="submit">Tambah</button>
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