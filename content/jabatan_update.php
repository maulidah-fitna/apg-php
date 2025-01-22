<?php
if(!defined('INDEX')) die();

$id = $_POST['id'];
$nama = $_POST['nama'];
$query = "UPDATE jabatan SET nama_jabatan = '$nama' WHERE id_jabatan = '$id'";
$result = mysqli_query($con, $query);

if($result) {
    echo "Jabatan Berhasil Diperbaharui!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=jabatan'>";
}else{
    echo "Tidak Dapat Memperbaharui Data!<br>";
    echo "mysqli_error()";
}
?>