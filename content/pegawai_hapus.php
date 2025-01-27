<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$foto = $_GET['foto'];

if(file_exists("images/$foto")) {
    unlink("images/$foto");
}

$query = "DELETE FROM pegawai WHERE id_pegawai = '$id'";
$result = mysqli_query($con, $query);

if($result) {
    echo "Data Pegawai Berhasil Dihapus!";
    echo "<meta http-equiv='refresh' content='1, url=?hal=pegawai'>";
}else{
    echo "Tidak Dapat Menghapus Data Pegawai!<br>";
    echo mysqli_error();
}
?>