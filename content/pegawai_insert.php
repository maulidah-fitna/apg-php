<?php
if(!defined('INDEX')) die();

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipe = $_FILES['foto']['type'];
$ukuran = $_FILES['foto']['size'];

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tgl = $_POST['tanggal'];
$id_jabatan = $_POST['jabatan'];
$ket = $_POST['keterangan'];

$error = "";

if($foto == "") {
    $query = "INSERT INTO pegawai SET ";
    $query .= "foto = '$foto', ";
    $query .= "nama_pegawai = '$nama', ";
    $query .= "jenis_kelamin = '$jk', ";
    $query .= "tgl_lahir = '$tgl', ";
    $query .= "id_jabatan = '$id_jabatan', ";
    $query .= "keterangan = '$ket'";

    $result = mysqli_query($con, $query);
}else{
    if($tipe != "image/jpeg" and $tipe != "image/jpg" and $tipe != "image/png") {
        $error = "Maaf, Tipe File Tidak Didukung!";
    }elseif($ukuran >=1000000) {
        echo $ukuran;
        $error = " Ukuran File Terlalu Besar (Lebih Dari 1 MB)!";
    }else{
        $time = date('YmdHms');
        $filefoto = $time."-".$foto;
        move_uploaded_file($lokasi, "images/".$filefoto);

        $query = "INSERT INTO pegawai SET ";
        $query .= "foto = '$filefoto', ";
        $query .= "nama_pegawai = '$nama', ";
        $query .= "jenis_kelamin = '$jk', ";
        $query .= "tgl_lahir = '$tgl', ";
        $query .= "id_jabatan = '$id_jabatan', ";
        $query .= "keterangan = '$ket'";

        $result = mysqli_query($con,$query);
    }
}

if($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2; url=?hal=pegawai_tambah'>";
}elseif($query) {
    echo "Berhasil Menambahkan Data Pegawai <b>$nama</b>";
    echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
}else{
    echo "Tidak Dapat Menyimpan Data!<br>";
    echo mysqli_error();
}
?>