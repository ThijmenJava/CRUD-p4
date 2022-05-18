<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Titillium+Web:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    
    <?php include("includes/header.php") ?>
    
    <section class="main_section">
        <main class="main_content">
            <div class="slideShow" id="slideshow">
                <div class="zoekblak">
                    <div class="zoek-titel">
                        <h2>Zoek vlucht</h2>
                    </div>
                    <form class="plek-form" action="" method="post">
                        <div class="container-labels">
                            <div class="labels-plek">
                                <h3>Vanaf</h3>
                            </div>
                            <div class="labels-plek">
                                <h3>Naar</h3>
                            </div>
                        </div>
                        <div class="container-input">
                            <div class="input-plek">
                                <div class="black img-border-right">
                                    <img class="vliegtuig-img" src="img/airplane-png.png" alt="">
                                </div>
                                <input class="input border-right" type="text">
                            </div>
                            <div class="input-plek">
                                <input class="input border-left" type="text">
                                <div class="black img-border-left border-left rotate">
                                    <img class="vliegtuig-img" src="img/airplane-png.png" alt="">                                    
                                </div>
                            </div>
                            <div class="margin input-plek">
                                <div class="black border-left">
                                    <i class="fa-solid fa-calendar-days calander-size"></i>
                                </div>
                                <input type="date" min="<?php echo date("Y-m-d"); ?>" class="input border-right">
                            </div>
                        </div>

                        </div>
                        <div>
                            <div>

                            </div>
                        </div>
                        <div>

                        </div>
                    </form>
                </div>
            </div>                
        </main>
    </section>
</body>

<script src="js/home.js"></script>
<script src="https://kit.fontawesome.com/385f3b2853.js" crossorigin="anonymous"></script>

<?php include("includes/footer.php"); ?>

</html>