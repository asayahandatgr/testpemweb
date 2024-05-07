<?php
require_once('../dbkoneksi.php');
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM paramedik WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $paramedik = $stmt->fetch();
    if ($paramedik) {
        $sql = "DELETE FROM paramedik WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$_GET['id']]);
        echo "<script>alert('Data berhasil dihapus')</script>";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    } else {
        echo "<script>alert('Data tidak ditemukan')</script>";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    }
}
