<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="With firetracer, follow the evolution of forest fires in France and in the world.">
    <meta name="keywords" content="firetracer,fire,feu,incendie,foret,france,monde,world,evolution,articles,posts,graphs,graphiques,contribute">
    <meta name="copyright" content="firetracer">
    <meta name="author" content="firetracer and contributors">
    <meta name="robots" content="allow, follow">
    <meta property="og:title" content="firetracer"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://firetracer.io/"/>
    <meta property="og:image" content="https://firetracer.io/assets/brand/firetracer.png"/>
    <meta property="og:site_name" content="firetracer"/>
    <title>Dashboard - firetracer</title>
    <link rel="shortcut icon" href="assets/brand/firetracer_shortcut_v2.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body id="datas">

    
    
    <?php include 'includes/navbar.php' ?>

    <div class="p-3">
        <h1 class="border-bottom mb-3 pb-3 mx-3">Dashboard <span> - Dashboard wrong (firetracer is in devlopment)</span></h1>
    </div>

    <?php 
        include 'includes/database.php';
        global $db;
        $q = $db->query("SELECT * FROM datas");

        $q_next = $db->query("SELECT * FROM datas");

        $traductions = [
            "fires_number" => "Fires number",
            "most_affected_region" => "Most affected region",
            "number_of_people_affected" => "Number of people affected",
            "number_of_victims" => "Number of victims",
            "number_of_injuries" => "Number of injuries",
            "number_of_missing_persons" => "Number of missing persons",
            "firefighter_personnel" => "Firefighter personnel",
            "money_spent_by_the_government" => "Money spent by the government",
            "number_of_foreign_firefighters" => "Number of foreign firefighters",
        ];
    ?>

    <div class="container d-flex gap-3">
        <div class="mb-3 pb-3">
            <h3>Some numbers...</h3>
            <div class="row border-bottom">
                <?php
                    while($data = $q->fetch()){
                        // echo $data['name'];
                        // echo $data['value'];
                        ?>
                        <div class="data d-flex gap-3 align-items-center col-lg-3 col-12 m-3">
                            <p><?= $traductions[$data['name']] ?></p>
                            <span><?= $data['value'] ?></span>
                        </div>
                        <?php
                    }
                ?>
            </div>
            <h3>Compared to the previous year</h3>
            <div class="row">
                <?php
                    while($data = $q_next->fetch()){
                        // echo $data['name'];
                        // echo $data['value'];
                        ?>
                        <div class="data d-flex gap-3 align-items-center col-lg-3 col-12 m-3">
                            <p><?= $traductions[$data['name']] ?></p>
                            <span><?= $data['next_value'] ?></span>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div>
            <div class="data-row d-flex flex-column gap-3 text-center" style="width: 200px;">
                <p>pie chart</p>
                <p>Causes of fire outbreaks</p>
            </div>
        </div>
    </div>

    <div class="container">
        <p>Integrate this data on your site now (for free) <a href="javascript:showIframeData()">here</a>.</p>
        <div id="iframe-data" class="d-none">
            <p>Copy the code below : </p>
            <pre>&lt;iframe src="https://firetracer.io/embed.php?rcs=datas&id=0" width="100%" height="300" name="firetracer datas" sandbox=""&gt;&lt;/iframe&gt;</pre>
            <p>And paste it into your source code.</p>
            <p class="alert alert-success">Since this element is an iframe, and therefore a part of our site, you don't have to replace the link every time you update it.</p>
            <a href="https://firetracer.io/legal/terms-use.php#embed-api" target="_blank" rel="noopener noreferrer">firetracer Embed API terms of use</a>
        </div>
    </div>
    
    <?php include 'includes/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
