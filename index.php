<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/59469bfd83.js" crossorigin="anonymous"></script>
<title>Sistem Informasi Sekolah</title>
</head>
<br><br><br>
<body class="bg-light">
    <br>
    <div>
        <div class="text-center bg-white container-fluid rounded shadow col-4 border" >
            <form action="login.php" method="post" class="form-signin"><br>
                <img class="mb-4" src="img/ic_sekolah.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <br>
                    <input type="text" name="username" class="form-control " placeholder="Username" required="" autofocus="">
                <br>
                    <input type="password" name="password" class="form-control" placeholder="Password" required=""><br>
                
                <input type="submit" value="login" class="btn btn-lg btn-primary btn-block">
                <p></p>
                <a  href="register.php" class="mt-5 mb-3 text-muted">Dont have a Account? Sign UP </a>
            </form>
        </div>
    </div>
</body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    </body>
</html>