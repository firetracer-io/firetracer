<?php
    if(isset($_GET['rcs']) && isset($_GET['id'])){
        $rcs = $_GET['rcs'];
        $id = $_GET['id'];  
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="copyright" content="firetracer">
        <meta name="author" content="firetracer and contributors">
        <meta name="robots" content="none">
        <title>Embed API - firetracer</title>
        <link rel="shortcut icon" href="assets/brand/firetracer_shortcut_v2.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/styles.css">
        <style>
            body{overflow-x: hidden;}#embed-data .data{border: solid 1px #1f1F1f;border-radius: 5px;padding: 10px;width:90%;transition: all 0.3s ease;}#embed-data .data p{margin-bottom: 0;}#embed-data .data span{font-weight: 700;font-size: 32px;}#embed-data .data:hover{color: #fff;background-color: #1f1F1f;}
        </style>
    </head>
    <body id="embed-data">
        <?php
            include 'includes/database.php';
            global $db;

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
            
            if($rcs == "datas" && $id == 0){
                $q = $db->query("SELECT * FROM datas");
    
                $q_next = $db->query("SELECT * FROM datas");
        ?>


            <!-- all datas iframe -->
            <div class="d-flex gap-3">
                <div class="mb-3">
                    <h3 class="mx-4 mt-2">Some numbers...</h3>
                    <div class="d-flex align-items-center justify-content-center flex-wrap border-bottom">
                        <?php
                            while($data = $q->fetch()){
                                ?>
                                <div class="data d-flex gap-3 align-items-center my-3 mx-2">
                                    <p><?= $traductions[$data['name']] ?></p>
                                    <span><?= $data['value'] ?></span>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    <h3 class="mx-4 mt-2">Compared to the previous year</h3>
                    <div class="d-flex align-items-center justify-content-center flex-wrap border-bottom">
                        <?php
                            while($data = $q_next->fetch()){
                        ?>
                                <div class="data d-flex gap-3 align-items-center my-3 mx-2">
                                    <p><?= $traductions[$data['name']] ?></p>
                                    <span><?= $data['next_value'] ?></span>
                                </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- / all datas iframe -->

        <?php
            } elseif($rcs == "datas" && $id != 0){
                $q = $db->query("SELECT * FROM datas WHERE id = '". $id . "'");
                while($data = $q->fetch()){
                ?>
                    <div class="data d-flex gap-3 align-items-center m-3">
                        <p><?= $traductions[$data['name']] ?></p>
                        <span><?= $data['next_value'] ?></span>
                    </div>
                <?php
                }
            }
        ?>

        <div id="firetracer-signature" class="fixed-bottom border-top bg-white">
            <p class="mb-0">Datas from firetracer (<a href="https://firetracer.io/" target="_blank" class="text-dark">firetracer.io</a>)</p>
        </div>
    </body>
    </html>
<?php
    }else{
        echo "<p class='text-center mt-3' style='font-family: monospace;'>firetracer Embed API Error - the ressource or the ressource id aren't defined.</p>";
    }
?>
