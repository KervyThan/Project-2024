<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>TODA | Log In</title> 
     <link rel="icon" href="images/City Logo.jpg">
    <link rel="stylesheet" href="TODA Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="overlay"></div>
    <div class="content">
    <div class="container">
      <div class="wrapper">
        <div class="title">
          <div class="logo-section">
            <img src="images/City Logo.jpg" alt="Logo" class="logo">
        </div>
          <span>TODA Log</span>
        </div>


        <form action="home.php" method="POST">
           <div class="row">
           <input type="text" name="username" placeholder="Username ID" required>
          </div>
          <div class="row">
          <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="row button">
         <input type="submit" value="Login">
         </div>
         </form>

      </div>
    </div>
  </body>
</html>