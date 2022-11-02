<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="firetracer">
    <meta name="robots" content="none">
    <title>Redirection - firetracer</title>
    <link rel="shortcut icon" href="assets/brand/firetracer_shortcut_v2.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'includes/navbar.php' ?>

    <div class="container">
        <p>Loading...</p>
    </div>

    <?php
        $url = $_GET["url"];
        if($url){
            if($url == "facebook"){
                echo "<script>window.location.replace('https://facebook.com/');</script>";
            }else if($url == "instagram"){
                echo "<script>window.location.replace('https://instagram.com/');</script>";
            }else if($url == "twitter"){
                echo "<script>window.location.replace('https://twitter.com/');</script>";
            }else if($url == "github"){
                echo "<script>window.location.replace('https://github.com/');</script>";
            }else if($url == "youtube"){
                echo "<script>window.location.replace('https://youtube.com/');</script>";
            }else if($url == "blog"){
                echo "<script>window.location.replace('https://blogspot.com/');</script>";
            }else{
                $redirect_url = urldecode($url);
                echo "<script>window.location.replace('" . $redirect_url . "');</script>";
            }
        }else{
            echo "redirect to homepage";
            echo "<script>window.location.replace('https://firetracer.io/');</script>";
        }
    ?>

    <?php include 'includes/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>