<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" tipe="text/css" href="./public/css/login.css">

  <title>Login</title>
</head>
<body>
<div class="w3-container">
  <br>
  <br>
  <br>
  <br>
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <img src="./public/images/18.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Usuario</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingesar Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Ingesar Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Entar</button>
        </div>
      </form>
    </div>
  </div>
</div>
  
</body>
</html>