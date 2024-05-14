<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TODA | Information </title>
    <link rel="icon" href="images/City Logo.jpg">
    <link rel="stylesheet" href="information.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>
    <header class="header-container">
        <div class="logo-section">
            <img src="images/City Logo.jpg" alt="Logo" class="logo">
         </div>
        <h1 class="logo">TODA</h2>
        <nav class="navbar">
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li class="dropdown">
            <input type="checkbox" id="servicesToggle" class="toggle-input">
            <label for="servicesToggle" class="dropbtn">Services <span class="arrow">&#9660;</span></label>
            <div class="dropdown-content">
                <a href="#">Service 1</a>
                <a href="#">Service 2</a>
                <a href="#">Service 3</a>
            </div>
          </li>
          <li><a href="information.php">Information</a></li>
          <li><a href="Attendance Log.php">Attendance Log</a></li>
        </ul>
      </nav>
      <div class="logout-btn">
        <a href="TODA Form.php">Logout</a>
      </div>
    </header>
    <div class="homecontainer">
        <h1><i class="fas fa-user"></i> Information</h1>
        <p class="name">John Kervy Jamito</p>
      </div>

      <div class="blankcontainer"></div>
  </body>
</html>