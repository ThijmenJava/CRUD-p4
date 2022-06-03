<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Radio+Canada&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Titillium+Web:ital,wght@1,300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>My TTT</title>
</head>
<?php include_once('includes/header.php'); ?>
  <body>

    <section class="section-login">
      <main class="main-login">
        <div class="login-plek">
            <div class="login-block">
              <div class="login-button-plek">
                <div class="button-plek">
                  <button class="login-button" id="login">Login</button>
                  <button class="signup-button" id="signup">Signup</button>
                </div>
              </div>
              <hr>
              <div id="loginform" action="php/login.php" method="post" class="form-container">
                <form action="php/login.php" method="POST">
                  <div class="login-container" id="logindiv">
                    <div class="titel"><h2>Login</h2></div>
                    <div class="label-input"><h3>E-mailadres</h3></div>
                    <div class="input-plek"><input class="input" type="email" name="email" required></div>
                    <div class="label-input margin"><h3>Wachtwoord</h3></div>
                    <div class="input-plek"><input class="input" type="password" name="wachtwoord" required></div>
                    <div class="label-input margin"></div>
                    <div class="input-plek"><input class="login-input" type="submit" value="Inloggen" name="submit" required></div>
                  </div>
                </form>
                <form action="php/signup.php" method="POST">
                  <div class="singup-container" id="signupdiv">
                    <div class="titel"><h2>SignUp</h2></div>
                    <div class="label-input"><h3>E-mailadres</h3></div>
                    <div class="input-plek"><input class="input" type="email" name="email" required></div>
                    <div class="label-input margin"><h3>Naam</h3></div>
                    <div class="input-plek"><input class="input" type="text" name="naam" required></div>
                    <div class="label-input margin"><h3>Wachtwoord</h3></div>
                    <div class="input-plek"><input class="input" type="password" name="wachtwoord" required></div>
                    <div class="label-input margin"></div>
                    <div class="input-plek"><input class="signup-input" type="submit" value="SignUp" name="submit-signup"></div>  
                  </div>
                </form>
              </div> 
            </div>
        </div>
        <div class="plek-plaatje"></div>
      </main>
    </section>

<script src="JS/myttt.js"></script>

<?php include_once('includes/footer.php'); ?>
</body>
</html>