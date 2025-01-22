<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "DELETE FROM jabatan WHERE id_jabatan = '$id'";
$result = mysqli_query($con, $query);

if($result) {
    echo "Jabatan Berhasil Dihapus!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=jabatan'>";
}else{
    echo "Tidak Dapat Menghapus Data!<br>";
    echo mysqli_error();
}
?>