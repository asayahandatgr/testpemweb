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
                        <div class="col-12 ">
                            <div class="card m-1">
                                <div class="card-body p-4">
                                    <div class="table-responsive custom-table-responsive">
                                        <form action="" method="post" class="form custom-form">

                                            <?php
                                            if (isset($_POST['nama'])) {
                                                $kode = $_POST['kode'];
                                                $nama = $_POST['nama'];
                                                $tmp_lahir = $_POST['tmp_lahir'];
                                                $tgl_lahir = $_POST['tgl_lahir'];
                                                $gender = $_POST['gender'];
                                                $email = $_POST['email'];
                                                $alamat = $_POST['alamat'];
                                                $kelurahan_id = $_POST['kelurahan_id'];

                                                $sql = "UPDATE pasien SET kode = :kode, nama = :nama, tmp_lahir = :tmp_lahir, tgl_lahir = :tgl_lahir, gender = :gender, email = :email,  alamat = :alamat,  kelurahan_id = :kelurahan_id WHERE id = :id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->bindParam(':kode', $kode);
                                                $stmt->bindParam(':nama', $nama);
                                                $stmt->bindParam(':tmp_lahir', $tmp_lahir);
                                                $stmt->bindParam(':tgl_lahir', $tgl_lahir);
                                                $stmt->bindParam(':gender', $gender);
                                                $stmt->bindParam(':alamat', $alamat);
                                                $stmt->bindParam(':email', $email);
                                                $stmt->bindParam(':alamat', $alamat);
                                                $stmt->bindParam(':kelurahan_id', $kelurahan_id);
                                                $stmt->bindParam(':id', $_POST['id']);
                                                $stmt->execute();
                                                echo '<meta http-equiv="refresh" content="0; url=index.php"><script>alert("Data Berhasil diganti!")</script>';
                                            }
                                            if (isset($_GET['id'])) {
                                                $sql = "SELECT * FROM pasien WHERE id = :id";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->bindParam(':id', $_GET['id']);
                                                $stmt->execute();
                                                $data = $stmt->fetch();
                                            }
                                            ?>
                                            <div class="form-group">
                                                <label for="kode">Kode Pasien</label>
                                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                                <input type="text" class="form-control" id="kode" name="kode" value="<?= $data['nama'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama Pasien</label>
                                                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $data['nama'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="tmp_lahir">Tempat lahir</label>
                                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="<?= $data['tmp_lahir'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_lahir">Tanggal lahir</label>
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">Gender Pasien</label><br>
                                                <input type="radio" id="genderPR" name="gender" <?= $data['gender'] == 0 ? "checked" : "" ?> value="0">
                                                <label for="genderPR">Perempuan</label>
                                                <input type="radio" id="genderLK" name="gender" <?= $data['gender'] == 1 ? "checked" : "" ?> value="1">
                                                <label for="genderLK">Laki-laki</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?= $data['email'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" value="<?= $data['alamat'] ?>" required><?= $data['alamat'] ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="kelurahan_id">Kelurahan</label>
                                                <select name="kelurahan_id" class="form-control" id="kelurahan_id">
                                                    <option value="">Pilih Kelurahan</option>
                                                    <?php
                                                    $sql = "SELECT * FROM kelurahan";
                                                    $stmt = $dbh->prepare($sql);
                                                    $stmt->execute();
                                                    $result = $stmt->fetchAll();
                                                    foreach ($result as $kel) {
                                                        $selected = $kel['id'] == $data['kelurahan_id'] ? "selected" : "";
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