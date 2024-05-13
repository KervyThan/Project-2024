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

    <div class="ContainerA">
    <h1 class="centerB">Dashboard</h1>
    </div>

    <div class="container">

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>TODA ID</th>
                    <th>ROUTE</th>
                    <th>Date</th>
                </tr>
            </thead>    
            <tbody>
                    <td>Kervy Jamito</td>
                    <td>TD8569732</td>
                    <td>Phase 1</td>
                    <td>05-12-24</td>
            </tbody>
            <tbody>
                    <td>Andrei Brosas</td>
                    <td>TD8569733</td>
                    <td>Phase 2</td>
                    <td>05-12-24</td>
            </tbody>
            <tbody>
                    <td>Angelo Angeles</td>
                    <td>TD8569734</td>
                    <td>Phase 3</td>
                    <td>05-12-24</td>
            </tbody>
            <tbody>
                    <td>Mark Lance Brioso</td>
                    <td>TD8569735</td>
                    <td>Phase 4</td>
                    <td>05-12-24</td>
            </tbody>
            <tbody>
                    <td>Karl Brian Balang</td>
                    <td>TD8569736</td>
                    <td>Phase 2</td>
                    <td>05-12-24</td>
            </tbody>
            <tbody>
                    <td>Jaymark Moreno</td>
                    <td>TD8569721</td>
                    <td>Phase 4</td>
                    <td>05-12-24</td>
            </tbody>
        </table>
    </div>
  </body>
</html>