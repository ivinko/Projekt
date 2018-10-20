<?php include_once "config.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "add/head.php" ?>
    <style>
    
.sign-in-form {
    width:40rem;
    text-align:center;
  padding: 1rem 1.5em;
  border-radius: .5rem;
  background-color: #3d454f;
}

.sign-in-form h4 {
  color: white;
  margin-bottom: 1rem;
  font-weight: 600;
  text-transform: uppercase;
}

.sign-in-form label {
  text-transform: uppercase;
  color: #adadad;
  letter-spacing: 1px;
  font-weight: 600;
  margin-bottom: 1rem;
}

.sign-in-form input {
  color: black;
}

.sign-in-form input:focus {
  opacity: .8;
}

.sign-in-form-username,
.sign-in-form-password {
  border-radius: 30px;
  border: none;
  transition: all ease .4s;
}

.sign-in-form-button {
  border-radius: 30px;
  border: 1px solid #fff;
  color: #fff;
  background-color: transparent;
  text-transform: uppercase;
  letter-spacing: 1px;
  width: 100%;
  padding: 1rem;
  transition: all ease .4s;
}

.sign-in-form-button:hover {
  background-color: #44c8ed;
  border-color: #44c8ed;
}


    </style>
  </head>
  <body>
    <div class="grid-container">
      
    <?php include_once "add/heading.php" ?>

    <?php include_once "add/menu.php" ?>
    </br>
  	<form action="autoriziraj.php" method="post">
  <div class="sign-in-form">
    <h4 class="text-center">Prijava</h4>
    <label for="username">Korisnicko ime</label>
    <input type="text" class="sign-in-form-username" id="username" name="username" placeholder="username">
    <label for="password">Lozinka</label>
    <input type="password" class="sign-in-form-password" id="password" name="password" placeholder="password">
    <button type="submit" name="submit" class="sign-in-form-button">Prijavi se</button>
  </div>
</form>



    <?php include_once "add/podnozje.php" ?>

    <?php include_once "add/script.php" ?>
  </body>
</html>
