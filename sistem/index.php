<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../sidemenu.css">
        <script src="https://kit.fontawesome.com/59469bfd83.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/sidemenu.css">
        <title>APOTIK</title>
    </head>
    <body class="bg-light">
<!-- +++++++++++++++++++++++++++++++++side nav++++++++++++++++++++++++++++++++++++++++++++ -->
        <nav class="navbar navbar-dark bg-secondary shadow">
            <?php 
            include '../databases/koneksi.php';
            session_start();
            if($_SESSION['level'] ==""){
                header("location:../../index.php");
            }        
            ?>
            <a class="text-light font-italic">
            <img class="mb-1  " src="../img/ic_sekolah.png" alt="" width="50" height="50">
            SISTEM INFORMASI SEKOLAH
            </a>
                <span class="navbar-text">
                <a class=" badge-danger rounded btn fas fa-sign-out-alt " href="logout.php" title="log out"></a>
                </span>
        </nav>
    <!-- ++++++++++++++++++++++++++++++++++++ide menu+++++++++++++++++++++++++++++++++++++++++ -->
        <div class="row align-items">
            <hr>
            <div class="col-10 col-md-2 flex-sm-column align-items" >
                <?php
                include "load_menu.php"
                ?>
                <br>
            </div>
    <!-- ==============================================end off side menu======================================================= -->
            <div class="col-10 ">
                <br><br>
                <?php
                include_once "load_form.php"
                    ?>
                </div>
            </div>
        </div>
        <!-- =================================================================================================================================== -->
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>                                
        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
    </body>
</html>