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
    echo 'Connection failed: ' . $e -> getMessage() . '<br>';
}

//Query
$sqlcmd = 'INSERT INTO persons(firstName, lastName, age)
VALUES (' .
'\'' . $_POST['firstname'] .
'\'' .
', ' .
'\'' . $_POST['lastname'] .
'\'' .
', ' .
'\'' . $_POST['age'] .
'\');';

$query = $conn -> query($sqlcmd);
?>
<head>
  <?php include "resources/includes.php";?>
</head>
<div class="container">
  <table class="table table-striped">
    <?php print_r('Query: <b>' . $sqlcmd . '</b><br>'); ?>
    <br>
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
      </tr>
    </thead>
    <tbody>
      <?php
      echo
      "<tr>
          <td>" . $_POST["firstname"] . "</td>
          <td>" . $_POST["lastname"] . "</td>
          <td>" . $_POST["age"] . "</td>
      </tr>";
      ?>
    </tbody>
  </table>
  <a href="../sqli.php" type="button" class="btn btn-warning">Back to the SQLI Injection page!</a>
</div>
