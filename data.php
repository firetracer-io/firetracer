<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avec firetracer, suivez l'évolution des feux de forêt en France et dans le monde.">
    <meta name="keywords" content="firetracer,fire,feu,incendie,foret,france,monde,evolution,articles,graphiques,contribuer">
    <meta name="copyright" content="firetracer">
    <meta name="author" content="firetracer and contributors">
    <meta name="robots" content="allow, follow">
    <meta property="og:title" content="firetracer"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://firetracer.io/"/>
    <meta property="og:image" content="https://firetracer.io/assets/brand/firetracer.png"/>
    <meta property="og:site_name" content="firetracer"/>
    <title>Données - firetracer</title>
    <link rel="shortcut icon" href="assets/brand/firetracer_shortcut_v2.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body id="datas">

    <?php
        if(isset($_GET['iframe'])){
            $iframe = $_GET['iframe'];
        }else{
            $iframe = "false";
        }
        if($iframe == "true"){
    ?>
    <div class="border-bottom mb-3 pb-3">
        <div class="data-row d-flex gap-3 mb-3">
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre d'incendies</p>
                <span>12</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Région la plus touchée</p>
                <span>Nouvelle Aquitaine</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre de sinistrés</p>
                <span>1200</span>
            </div>
        </div>
        <div class="data-row d-flex gap-3 mb-3">
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre de victimes</p>
                <span>12</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre de bléssés</p>
                <span>50</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre de disparus</p>
                <span>12</span>
            </div>
        </div>
        <div class="data-row d-flex gap-3">
            <div class="data d-flex gap-3 align-items-center">
                <p>Effectifs des pompiers</p>
                <span>12000</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Argent dépensé par l'Etat</p>
                <span>12M</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Effectifs de pompiers étrangers</p>
                <span>120</span>
            </div>
        </div>
    </div>
    <div class="mb-3 pb-3">
        <h3>Par rapport à l'année précedente</h3>
        <div class="data-row d-flex gap-3 mb-3">
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre d'incendies</p>
                <span>+22%</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Région la plus touchée</p>
                <span>Occitanie</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre de sinistrés</p>
                <span>+30%</span>
            </div>
        </div>
        <div class="data-row d-flex gap-3 mb-3">
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre de victimes</p>
                <span>-10%</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre de bléssés</p>
                <span>-5%</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Nombre de disparus</p>
                <span>+10%</span>
            </div>
        </div>
        <div class="data-row d-flex gap-3">
            <div class="data d-flex gap-3 align-items-center">
                <p>Effectifs des pompiers</p>
                <span>+20%</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Argent dépensé par l'Etat</p>
                <span>+20%</span>
            </div>
            <div class="data d-flex gap-3 align-items-center">
                <p>Effectifs de pompiers étrangers</p>
                <span>-35%</span>
            </div>
        </div>
    </div>
    <div class="fixed-bottom border-top bg-white">
        <p class="mb-0">Data from firetracer (<a href="https://firetracer.io/" target="_blank" class="text-dark">firetracer.io</a>)</p>
    </div>
    <?php
        }else if($iframe == "false"){
    ?>
    
    <?php include 'includes/navbar.php' ?>

    <div class="p-3">
        <h1 class="border-bottom mb-3 pb-3">Données - données fausses (firetracer est en développement)</h1>
    </div>

    <div class="container d-flex gap-3">
        <div>
            <div class="border-bottom mb-3 pb-3">
                <h3>Quelques nombres...</h3>
                <div class="data-row d-flex gap-3 mb-3">
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre d'incendies</p>
                        <span>12</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Région la plus touchée</p>
                        <span>Nouvelle Aquitaine</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre de sinistrés</p>
                        <span>1200</span>
                    </div>
                </div>
                <div class="data-row d-flex gap-3 mb-3">
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre de victimes</p>
                        <span>12</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre de bléssés</p>
                        <span>50</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre de disparus</p>
                        <span>12</span>
                    </div>
                </div>
                <div class="data-row d-flex gap-3">
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Effectifs des pompiers</p>
                        <span>12000</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Argent dépensé par l'Etat</p>
                        <span>12M</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Effectifs de pompiers étrangers</p>
                        <span>120</span>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3 pb-3">
                <h3>Par rapport à l'année précedente</h3>
                <div class="data-row d-flex gap-3 mb-3">
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre d'incendies</p>
                        <span>+22%</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Région la plus touchée</p>
                        <span>Occitanie</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre de sinistrés</p>
                        <span>+30%</span>
                    </div>
                </div>
                <div class="data-row d-flex gap-3 mb-3">
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre de victimes</p>
                        <span>-10%</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre de bléssés</p>
                        <span>-5%</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Nombre de disparus</p>
                        <span>+10%</span>
                    </div>
                </div>
                <div class="data-row d-flex gap-3">
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Effectifs des pompiers</p>
                        <span>+20%</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Argent dépensé par l'Etat</p>
                        <span>+20%</span>
                    </div>
                    <div class="data d-flex gap-3 align-items-center">
                        <p>Effectifs de pompiers étrangers</p>
                        <span>-35%</span>
                    </div>
                </div>
            </div>
            <p>Intégrez ces données sur votre site dès maintenant (et gratuitement) <a href="javascript:showIframeData()">ici</a>.</p>
            <div id="iframe-data" class="d-none">
                <p>Copiez ce code : </p>
                <pre>&lt;iframe src="https://firetracer.io/datas.php?iframe=true" width="100%" height="300" name="firetracer datas" sandbox=""&gt;&lt;/iframe&gt;</pre>
                <p>Et collez le dans votre code source.</p>
                <p class="alert alert-success">Etant donné que cet élément est une iframe, et donc une partie de notre site, vous n'auvez pas à remplacer le lien à chaque mise à jour.</p>
            </div>
        </div>
        <div>
            <div class="data-row d-flex flex-column gap-3 text-center">
                <p>pie chart</p>
                <p>Causes de départ d'incendie</p>
            </div>
        </div>
    </div>
    
    <?php include 'includes/footer.php' ?>

    <?php
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>