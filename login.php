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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
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
              <div class="form-container">
                <div class="login-container" id="logindiv">
                  <div class="titel"><h2>Login</h2></div>
                  <div class="label-input"><h3>Email</h3></div>
                  <div class="input-plek"><input type="text"></div>
                </div>
                <div class="singup-container" id="signupdiv">
                  <div><h2>SignUp</h2></div>
                </div>
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