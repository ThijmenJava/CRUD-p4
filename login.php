<?php include_once('includes/header.php'); ?>

  <body class="">
    <div class="inlogformulier">
      <form class="inlogform" action="php/inloggen.php" method="post">
        <?php if(isset($_GET['error'])) {echo "<p>" . $_GET['error'] . "</p>";} ?>
        <div class="inloggen"><b>Log in</b></div>
        <div class="container">
        <label for="uname"><b>Naam</b></label>
        <input class="inloginput" type="text" placeholder="Enter Username" name="uname" required>
        <label for="psw"><b>Wachtwoord</b></label>
        <input class="inloginput" type="password" placeholder="Enter Password" name="psw" required>
        <button class="submit" type="submit" name="inloggen">Inloggen</button>
      </form>
    </div>
  </div>
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