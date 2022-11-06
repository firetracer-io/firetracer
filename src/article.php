<?php
    if(isset($_GET['id'])){
        $id = $_GET['id']; 
        include 'includes/database.php';
        global $db;

        $q = $db->query("SELECT * FROM articles WHERE id = '". $id . "'");

        while($article = $q->fetch()){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $article['description'] ?>">
    <meta name="keywords" content="<?= $article['keywords'] ?>">
    <meta name="copyright" content="firetracer">
    <meta name="author" content="firetracer and contributors">
    <meta name="robots" content="allow, follow">
    <meta property="og:title" content="<?= $article['name'] ?> - firetracer"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://firetracer.io/article.php?id=<?= $id ?>"/>
    <meta property="og:image" content="https://firetracer.io/assets/brand/firetracer.png"/>
    <meta property="og:site_name" content="firetracer"/>
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@firetracer">
    <meta property="twitter:creator" content="@firetracer">
    <meta property="twitter:description" content="<?= $article['description'] ?>">
    <meta property="twitter:title" content="<?= $article['name'] ?>">
    <meta property="twitter:image:src" content="https://firetracer.io/assets/brand/firetracer_shortcut_v2.png">
    <meta property="twitter:image:alt" content="<?= $article['name'] ?> - firetracer">
    <title><?= $article['name'] ?> - firetracer</title>
    <link rel="shortcut icon" href="assets/brand/firetracer_shortcut_v2.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container">
        <h1><?= $article['name'] ?> - <?= $article['author'] ?></h1>

        <div id="firetracer-article-content" class="border-bottom">
            <?= $article['content'] ?>

            <a href="https://twitter/<?php $article['author'] ?>" target="_blank" rel="noopener noreferrer"><?= $article['author'] ?></a>
        </div>

        <div id="firetracer-article-keywords">
            <h3>Keywords</h3>
            <?= $article['keywords'] ?>
        </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>
<?php
        }
    }else{
        echo "<p style='font-family:monospace;'>Error, this article doesn't exists.</p>";
    }
?>
