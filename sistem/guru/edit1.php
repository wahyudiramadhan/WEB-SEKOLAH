<?php 
// koneksi database
include('../../databases/koneksi.php');
// menangkap data yang di kirim dari form
if(isset($_POST['update'])){
$id = $_POST['nip'];
$nama = $_POST['nama'];
$gelar = $_POST['gelar'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];
// menginput data ke database

mysqli_query($koneksi,"update tb_guru set nama='$nama', gelar='$gelar', jeniskelamin='$jeniskelamin', alamat='$alamat', kontak='$kontak'  WHERE nip='$id'");
}
header("location:../index.php?page=2"); 


?>