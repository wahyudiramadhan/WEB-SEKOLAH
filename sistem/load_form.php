<?php 
    if(isset($_GET["page"])){
    $page= $_GET["page"];
    }
    else{
    $page=0;
    }
        switch ($page){
        case "0":
        echo "SELAMAT DATANG ";
        break;
        
        case "1":
        require ("admin/index.php");
        break;
        
        case "2":
        require ("guru/index.php");
        break;
        
        case "3":
        require ("siswa/index.php");
        break;
        
        case "4":
        require ("guru/tambah.php");
        break;

        case "5":
        require ("admin/tambah.php");
        break;

        case "6":
        require ("siswa/tambah.php");
        break;

        case "7":
        require ("admin/edit.php");
        break;

        case "8":
        require ("guru/edit.php");
        break;

        case "9":
        require ("siswa/edit.php");
        break;
        }
?>