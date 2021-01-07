<?php 
include('../../databases/koneksi.php');
// menangkap data id yang di kirim dari url
$id = $_GET['username'];
// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tb_user where username='$id'");
header("location:../index.php?page=1");
?>