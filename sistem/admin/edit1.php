<?php 
// koneksi database
include('../../databases/koneksi.php');
// menangkap data yang di kirim dari form
if(isset($_POST['update'])){
$id = $_POST['username'];
$nama = $_POST['nama'];
$level = $_POST['level'];
// menginput data ke database

mysqli_query($koneksi,"update tb_user set nama='$nama', level='$level'  WHERE username='$id'");
}
header("location:../index.php?page=1"); 


?>