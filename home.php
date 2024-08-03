<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['fname'])){

 ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HOME</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
  <body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="shadow w-450 p-3 text-center">
            <h3 class="display-6">Hello, <?=$_SESSION['fname']?></h3>
            <a href="logout.php" class="btn btn-warning"> Logout</a>
        </div>
    </div>
  </body>
</html>

<?php }else{
      header("Location: login.php");
      exit;
} ?>