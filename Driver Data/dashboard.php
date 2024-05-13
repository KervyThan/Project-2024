<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TODA | Dashboard</title>
    <link rel="icon" href="images/City Logo.jpg">
    <link rel="stylesheet" href="dashboard.css" />
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
                <li><a href="log.php">Attendance Log</a></li>
            </ul>
      </nav>
      <div class="logout-btn">
        <a href="dform.php">Logout</a>
      </div>
    </header>

    <div class="container">
        <h2>Phase 1</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>TODA ID</th>
                    <th>Date</th>
                </tr>
            </thead>    
            <tbody>
                    <td>Kervy Jamito</td>
                    <td>TD8569721</td>
                    <td>05-12-24</td>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2>Phase 2</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>TODA ID</th>
                    <th>Date</th>
                </tr>
            </thead>    
            <tbody>
            <link rel="icon" href="images/Muntinlupa.jpg">
                    <td>Kervy Jamito</td>
                    <td>TD8569721</td>
                    <td>05-12-24</td>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2>Phase 3</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>TODA ID</th>
                    <th>Date</th>
                </tr>
            </thead>    
            <tbody>
                    <td>Kervy Jamito</td>
                    <td>TD8569721</td>
                    <td>05-12-24</td>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2>Phase 4</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>TODA ID</th>
                    <th>Date</th>
                </tr>
            </thead>    
            <tbody>
                    <td>Kervy Jamito</td>
                    <td>TD8569721</td>
                    <td>05-12-24</td>
            </tbody>
        </table>
    </div>
  </body>
</html>