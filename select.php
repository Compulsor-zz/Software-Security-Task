<head>
    <title>Security Task</title>
    <?php include "resources/includes.php";?>
</head>
<body>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Security Task: Main menu</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Required Exercises</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="sqli.php">SQL Injection</a>
        <a class="dropdown-item" href="xss.php">DOM-based XSS</a>
        <a class="dropdown-item" href="xsrf.php">Cross-Site Request Forgery</a>
        <a class="dropdown-item" href="httprs.php">HTTP Response Splitting</a>
        <a class="dropdown-item" href="hmac.php">HMAC</a>
      </div>
  </ul>
    <?php
      $servername = "localhost";
      $username = "id903560_admin";
      $password = "admin";
      $dbname = "id903560_mydatabase";

        //Connect
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e -> getMessage() . "<br>";
        }

        //Query
        $sqlcmd = "SELECT * FROM persons WHERE firstName = \"" . $_POST["firstname"] . "\"";

        $query = $conn -> query($sqlcmd);
    ?>

  <div class="container">
    <br>
    <?php
      print_r("Query: <b>" . $sqlcmd . "</b>");
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Age</th>
        </tr>
      </thead>
      <tbody>
        <?php
            //Show output
            while($i = $query -> fetch()) {
                echo

                "<tr>
                    <td>" . $i[0] . "</td>
                    <td>" . $i[1] . "</td>
                    <td>" . $i[2] . "</td>
                </tr>";
            }
        ?>
      </tbody>
    </table>
    <br>
    <button onclick="window.location='../sqli.php'" type="button" class="btn btn-outline-warning">Back to the SQLI Injection page!</button>
  </div>
</body>
