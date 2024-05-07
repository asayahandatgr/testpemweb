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
                            <h1 class="m-0">Ruang Kelola Paramedik</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="../index.php">Admin</a></li>
                                <li class="breadcrumb-item active ">Paramedik</li>
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
                                        <form action="" method="post" class="form custom-class">

                                            <?php
                                            if (isset($_POST['nama'])) {
                                                $nama = $_POST['nama'];
                                                $gender = $_POST['gender'];
                                                $tmp_lahir = $_POST['tmp_lahir'];
                                                $tgl_lahir = $_POST['tgl_lahir'];
                                                $kategori = $_POST['kategori'];
                                                $telpon = $_POST['telepon'];
                                                $alamat = $_POST['alamat'];
                                                $unit_kerja_id = $_POST['unit_kerja_id'];

                                                $sql = "UPDATE paramedik SET nama = :nama, gender = :gender, tmp_lahir = :tmp_lahir, tgl_lahir = :tgl_lahir, kategori = :kategori, telepon = :telepon,  alamat = :alamat, unit_kerja_id = :unit_kerja_id WHERE id = :id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->bindParam(':nama', $nama);
                                                $stmt->bindParam(':gender', $gender);
                                                $stmt->bindParam(':tmp_lahir', $tmp_lahir);
                                                $stmt->bindParam(':tgl_lahir', $tgl_lahir);
                                                $stmt->bindParam(':kategori', $kategori);
                                                $stmt->bindParam(':telepon', $telpon);
                                                $stmt->bindParam(':alamat', $alamat);
                                                $stmt->bindParam(':unit_kerja_id', $unit_kerja_id);
                                                $stmt->bindParam(':id', $_POST['id']);
                                                $stmt->execute();
                                                echo '<meta http-equiv="refresh" content="0; url=index.php"><script>alert("Data Berhasil diganti!")</script>';
                                            }
                                            if (isset($_GET['id'])) {
                                                $sql = "SELECT * FROM paramedik WHERE id = :id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->bindParam(':id', $_GET['id']);
                                                $stmt->execute();
                                                $data = $stmt->fetch();
                                            }
                                            ?>
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $data['nama'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <input type="text" class="form-control" id="gender" name="gender" required value="<?= $data['gender'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="tmp_lahir">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required value="<?= $data['tmp_lahir'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="<?= $data['tgl_lahir'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="kategori">Kategori</label>
                                                <select name="kategori" class="form-control" id="kategori">
                                                    <option value="" hidden>Pilih Kategori</option>
                                                    <?php
                                                    try {
                                                        $sql = "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS 
                                                         WHERE TABLE_SCHEMA = 'dbpuskesmas' 
                                                         AND TABLE_NAME = 'paramedik' 
                                                         AND COLUMN_NAME = 'kategori'";
                                                        $stmt = $dbh->prepare($sql);
                                                        $stmt->execute();
                                                        $result = $stmt->fetch(PDO::FETCH_ASSOC);

                                                        if ($result) {
                                                            $type = $result['COLUMN_TYPE'];
                                                            preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
                                                            $enums = explode("','", $matches[1]);

                                                            foreach ($enums as $enum) {
                                                                $selected = ($enum == $data['kategori']) ? 'selected' : '';
                                                                echo "<option value='$enum' $selected>$enum</option>";
                                                            }
                                                        }
                                                    } catch (PDOException $e) {
                                                        echo "Error: " . $e->getMessage();
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="telepon">Telepon</label>
                                                <input type="number" class="form-control" id="telepon" name="telepon" required value="<?= $data['telepon'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" required value="<?= $data['alamat'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="unit_kerja_id">Unit Kerja</label>
                                                <select name="unit_kerja_id" class="form-control" id="unit_kerja_id">
                                                    <option value="" hidden>Pilih Unit</option>
                                                    <?php
                                                    $sql = "SELECT * FROM unit_kerja";
                                                    $stmt = $dbh->prepare($sql);
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll();
                                                    foreach ($result as $unit) {
                                                        $selected = $unit['id'] == $data['unit_kerja_id'] ? "selected" : "";
                                                        echo "<option value='$unit[id]' $selected>$unit[nama]</option>";
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