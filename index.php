<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada&display=swap" rel="stylesheet"> 
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
                                    <input class="input" type="text">
                                </div>
                                <div class="input-plek">
                                    <input type="text">
                                </div>
                            </div>
                            <div>

                            </div>
                            <div>

                            </div>
                            <div>

                            </div>
                        </form>
                    </div>
                </div>                
            </main>
        </section>

        <?php include("includes/footer.php"); ?>
    </body>
<script src="js/home.js"></script>
</html>