<?php
if(!defined('INDEX')) die();

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipe = $_FILES['foto']['type'];
$ukuran = $_FILES['foto']['size'];

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tgl = $_POST['tanggal'];
$id_jabatan = $_POST['jabatan'];
$keterangan = $_POST['keterangan'];

$error = "";

if(foto == "") {
    $query = "UPDATE pegawai SET ";
    $query .= "nama_pegawai = '$nama', ";
    $query .= "jenis_kelamin = '$jk', ";
    $query .= "tgl_lahir = '$tgl', ";
    $query .= "id_jabatan = '$id_jabatan', ";
    $query .= "keterangan = '$ket'";
    $query .= "WHERE id_pegawai = '$id'";

    $result = mysqli_query($con, $query);
}else{
    if($tipe != "image/jpeg" and $tipe != "image/jpg" and $tipe != "image/png") {
        $error = "Maaf, Tipe File Tidak Didukung!";
    }elseif($ukuran >=1000000) {
        echo $ukuran;
        $error = "Ukuran File Terlalu Besar (Lebih Dari 1 MB)!";
    }else{
    //   Menghapus foto sebelumnya
    $query = "SELECT * FROM pegawai WHERE id_pegawai='$id'";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($result);
    
    if(file_exist("images/$data[foto]")){
        unlink(images/$data[foto]);
    }
//     }        belum selesai
// }

// if($error != "") {
//     echo $error;
//     echo "<meta http-equiv='refresh' content='2; url=?hal=pegawai_tambah'>";
// }elseif($query) {
//     echo "Berhasil Menambahkan Data Pegawai <b>$nama</b>";
//     echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
// }else{
//     echo "Tidak Dapat Menyimpan Data!<br>";
//     echo mysqli_error();
// }
// ?>