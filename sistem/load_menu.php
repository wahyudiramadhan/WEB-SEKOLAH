<?php 

if(isset($_GET["menu"])){
$menu= $_GET["menu"];
}

else{

$menu=$_SESSION['level'];
    
}

switch ($menu){

case "admin":
require ("menu/admin.php");
break;

case "guru":
require ("menu/guru.php");
break;

case "siswa":
require ("menu/siswa.php");
break;



}
?>