<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img class="brand" src="assets/brand/firetracer_shortcut_v2.png" alt="firetracer"></a>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data.php">Données</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contributors.php">Contributeurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <?php
                    if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email'])){
                        echo "
                            <li class='nav-item'>
                                <a class='btn btn-outline-light' href='dashboard.php'>Dashboard</a>
                            </li>";
                    }else{
                        echo "
                            <li class='nav-item d-flex gap-2'>
                                <a class='btn btn-outline-light' href='login.php'>Login</a>
                                <a class='btn btn-warning' href='signup.php'>Sign up</a>
                            </li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div style="height: 90px;"></div>
