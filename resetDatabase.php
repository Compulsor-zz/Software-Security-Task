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

    try {
        //Drop Table
        $sqlcmd = "DROP TABLE persons;";

        $query = $conn -> query($sqlcmd);

        //Create Table
        $sqlcmd = "CREATE TABLE persons(
            id INT(200) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstName VARCHAR(45) NOT NULL,
            lastName VARCHAR(45) NOT NULL,
            age INT NOT NULL);";

        $query = $conn -> query($sqlcmd);

        //Insert values
        $sqlcmd = "INSERT INTO
                persons(firstName, lastName, age)
            VALUES
                (\"John\", \"Williams\", 62),
                (\"Marriah\", \"Carrey\", 42),
                (\"Lennart\", \"Schelfhout\", 19);";

        $query = $conn -> query($sqlcmd);
        echo "Database reset succesfully<br>";
        header("refresh:3;url=index.php");
    } catch(PDOException $e) {
        echo "Database reset failed: " . $e -> getMessage() . "<br>";
    }
?>
