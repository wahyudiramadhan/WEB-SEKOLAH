<?php 
include('../../databases/koneksi.php');
// menangkap data id yang di kirim dari url
$id = $_GET['nip'];
// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tb_guru where nip='$id'");
header("location:../index.php?page=2");
?>