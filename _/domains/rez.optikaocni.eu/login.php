<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Přihlášení</title>
    <meta charset='utf-8'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->   
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="login-page">
      
      <img src="http://optikaocni.eu/assets/images/logo.png" style="margin-left:auto;margin-right:auto;width:200px;">
      
      <div class="form">
          <form action="ajax/login.php" method="POST">
          <input type="text" name="name" placeholder="Uživatelské jméno"/>
          <input type="password" name="password" placeholder="Heslo"/>
          <button type="submit">Přihlásit se</button>
          </form>
      </div>
    </div>
  </body>
</html>            