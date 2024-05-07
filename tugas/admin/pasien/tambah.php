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
                                        <?php
                                        if (isset($_POST['kode'])) {
                                            $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (?,?,?,?,?,?,?,?)";
                                            $stmt = $dbh->prepare($sql);
                                            $stmt->execute([
                                                $_POST['kode'],
                                                $_POST['nama'],
                                                $_POST['tmp_lahir'],
                                                $_POST['tgl_lahir'],
                                                $_POST['gender'],
                                                $_POST['email'],
                                                $_POST['alamat'],
                                                $_POST['kelurahan_id'],
                                            ]);
                                            echo "<script>alert('Data berhasil ditambahkan')</script>";
                                            echo '<meta http-equiv="refresh" content="0; url=index.php">';
                                        }
                                        ?>

                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="kode">Kode Pasien</label>
                                                <input type="text" class="form-control" id="kode" name="kode" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama Pasien</label>
                                                <input type="text" class="form-control" id="nama" name="nama" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tmp_lahir">Tempat lahir</label>
                                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_lahir">Tanggal lahir</label>
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">Gender Pasien</label><br>
                                                <input type="radio" id="genderPR" name="gender" value="0">
                                                <label for="genderPR">Perempuan</label>
                                                <input type="radio" id="genderLK" name="gender" value="1">
                                                <label for="genderLK">Laki-laki</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Pasien">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
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
                                                        echo "<option value='$kel[id]'>$kel[nama]</option>";
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