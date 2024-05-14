<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin | Home</title>
  <link rel="icon" href="images/City Logo.jpg">
  <link rel="stylesheet" href="Admin.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="Admin.php" class="logo">
            <img src="images/City Logo.jpg" alt="City Logo">
            <span class="nav-item">ADMIN</span>
          </a>
        </li>
        <li>
          <a href="Route Management.php" id="dashboardLink">
            <i class="fas fa-columns"></i>
            <span class="nav-item">Route Management</span>
          </a>
        </li>
        <li>
          <a href="Log Management.php" id="managementLink">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Log Management</span>
          </a>
        </li>
        <a href="information.php" id="informationLink">
          <i class="fas fa-user"></i>
          <span class="nav-item">Information</span>
        </a>
      </li>
        <li>
          <a href="record.php" id="recordLink">
            <i class="fas fa-table"></i>
            <span class="nav-item">Records</span>
          </a>
        </li>
        <li>
        <li>
          <a href="Admin Form.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a>
        </li>
      </ul>
    </nav>
</body>
</html>
