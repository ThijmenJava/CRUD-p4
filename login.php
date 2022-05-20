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

                </div>
              </div>
              <hr>
            </div>
        </div>
        <div class="plek-plaatje"></div>
      </main>
    </section>























<script>
  const form = document.querySelector("form");
  const inputs = document.querySelectorAll("form input");
  const button = document.querySelector("form button");

  button.addEventListener("click", (e) => {
    e.preventDefault();
    let error = false;
    
    for (let i = 0; i < inputs.length; i++) {
        if (!inputs[i].value.length) {
          error = true;
          inputs[i].style.border = "1px solid red";
        }
    }

    if(!error) {
      form.submit();
    }
  });
</script>
<script src="JS/main.js"></script>

<?php include_once('includes/footer.php'); ?>
</body>
</html>