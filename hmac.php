<html>
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
            <a class="dropdown-item active" href="hmac.php">HMAC</a>
          </div>
      </ul>
      <br>
      <div class="container">
        <div class="alert alert-info" role="alert">
          <h4>HMAC</h4>
          Next on we have the HMAC exercise. As you can see on this page, we have 2 input fields. Once you entered the details to log in, both values will be hashed to md5 with a secret key to check if you entered the right username and if the password corresponds with it.
          <p>
            <br>
            <a data-toggle="collapse" href="#collapseLoginDetails" aria-expanded="false" aria-controls="collapseExample">
              Click to view the login details!
            </a>
          </p>
          <div class="collapse" id="collapseLoginDetails">
              <b>Username:</b> KoenWydaeghe <br>
              <b>Password:</b> Ikhouvanmijnschatje123 <br>
              <b>Watch out for blank spots behind the values after copy pasting the data in the input fields.</b>
          </div>
        </div>
        <form action="hmac.php" method='post'>
          <div id='content'>
              <b>Username:</b> <input type="text" class="form-control" name="username" placeholder="Enter the username here"><br>
              <b>Password:</b> <input type="text" class="form-control" name="value" placeholder="Enter the password here">
              <input type="hidden" class="form-control" name="hiddenValuePassword" value="da7d2182102a45539690955699840e10"></br>
              <input type="hidden" class="form-control" name="hiddenValueUsername" value="5a21911f3c87c2b88cb59979779c68de"></br>
          </div>
          <?php if(isset($_POST["value"])) : ?>
            <div class="well">
              Hashed value:
              <code>
                <?php
                  $secretKey = "3~9#[X4^660?ak+]h6%T";
                  $inputUsername = $_POST["username"];
                  $inputPassword = $_POST["value"];
                  $neededValueUsername = $_POST["hiddenValueUsername"];
                  $neededValuePassword = $_POST["hiddenValuePassword"];
                  $outputPassword = hash_hmac('md5', $inputPassword, $secretKey);
                  $outputUsername = hash_hmac('md5', $inputUsername, $secretKey);

                  echo $outputPassword;
                ?>
              </code>
              Secret key:
              <code>
                <?php
                  $secretKey = "3~9#[X4^660?ak+]h6%T";
                  echo $secretKey;
                ?>
              </code>
              <br>
              Status:
              <code>
                <?php
                  if ($outputPassword == $neededValuePassword && $outputUsername == $neededValueUsername) {
                    echo "Logged in succesfully!";
                  } else{
                    echo "The password you entered was wrong!";
                  };
                ?>
              </code>
            </div>
          <?php endif; ?>
          <br>
          <button type="submit" class="btn btn-outline-success">Log in!</button>
        </form>
        <br>
        <button onclick="window.location='../index.php'" type="button" class="btn btn-outline-warning">Back to the main page!</button>
      </div>
</html>
