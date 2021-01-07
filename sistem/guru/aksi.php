<?php 
// koneksi database
include('../../databases/koneksi.php');
// menangkap data yang di kirim dari form
if(isset($_POST['tambah'])){
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$gelar = $_POST['gelar'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tb_guru VALUES('$nip','$nama','$gelar','$jeniskelamin','$alamat','$kontak')");
header("location:../index.php?page=2");
}else{
    echo "gagal";
}


?>