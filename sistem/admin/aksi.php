<?php 
// koneksi database
include('../../databases/koneksi.php');
// menangkap data yang di kirim dari form
if(isset($_POST['tambah'])){
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$level = $_POST['level'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tb_user VALUES('$username','$nama','$password','$level')");
header("location:../index.php?page=1");
}else{
    echo "gagal";
}


?>