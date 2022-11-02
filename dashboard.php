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
    <title>Dashboard - firetracer</title>
    <link rel="shortcut icon" href="assets/brand/firetracer_shortcut_v2.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'includes/navbar.php' ?>

    <div class="container">
        <h3 class="mt-3 ms-3">Dashboard</h3>

        <!-- to generate redirect urls by /redirect.php
        
        $url_to_encode = "https://google.com";
        $url_encoded = urlencode("$url_to_encode");
        $redirect_url = "https://firetracer.io/redirect.php?url=" . $url_encoded;
    -->
        <!-- link for /signup.php
        
        add a key param in the script
        firetracer.io/signup.php?key=0123456789 (random value to copy-paste)

        $key = $_GET["key"];
        if($key == 0123456789) // the random value pasted here
        {
            // code
        }else{
            echo "You haven't got the permission to access to this page.";
            echo "<script>window.location.replace('https://firetracer.io/');</script>";
        }
    -->
        <!-- choose the type of the editor /editor.php

        firetracer.io/editor.php?t=data
        firetracer.io/editor.php?t=article

         if(isset($_GET['t'])){
            $t = $_GET['t'];
        }else{
            $t = "data";
        }

        if($t == "data"){
            // data editor template
            // data editor code
        }else if($t == "article"){
            // article editor template
            // article editor code
        }
    -->
        <!-- datas.php list 
            - nbs
                - nb d incendies
                - region la plus touchée
                - nb de sinistrés
                - victimes/blesses/disparus
                - effectifs des pompiers
                - argent depense par l Etat
                - nb de pompiers etrangers en renfort
            - moyennes par rapport a l'annee precedente
            - pourcentage des causes de depart d incendie (criminel, accident...; diagramme "camembert")
    -->

        <?php
            if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email'])){
                ?>
                    <div class="container pb-2 border-bottom">
                        <h3 class="mt-3">Account</h3>
                        <p>username : <?= $_SESSION['username'] ?></p>
                        <p>email : <?= $_SESSION['email'] ?></p>
                        <p>last login : <?= $_COOKIE['last_login'] ?></p>
                        <a href="logout.php" class="btn btn-dark">Logout</a>
                    </div>
                    <div class="container pb-2 border-bottom">
                        <h3 class="mt-3">Editor</h3>
                        <div class="d-flex gap-3">
                            <a href="editor.php?t=datas" class="btn btn-dark">Datas editor</a>
                            <a href="editor.php?t=article" class="btn btn-dark disabled">Article editor</a>
                        </div>
                    </div>
                <?php
            }else{
                echo "You are not logged in. Redirection...";
                // echo "<script>window.location.replace('https://firetracer.io/login.php');</script>";
            }
        ?>
    </div>

    <?php include 'includes/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
    