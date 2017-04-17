<html>
    <head>
        <title>Security Task</title>
        <?php include "resources/includes.php";?>
    </body>
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
            <a class="dropdown-item active" href="xss.php">DOM-based XSS</a>
            <a class="dropdown-item" href="xsrf.php">Cross-Site Request Forgery</a>
            <a class="dropdown-item" href="httprs.php">HTTP Response Splitting</a>
            <a class="dropdown-item" href="hmac.php">HMAC</a>
          </div>
      </ul>
      <div class="container">
        <br>
        <div class="alert alert-info" role="alert">
          <h4>XSS</h4>
          For the Dom0 based XSS exercise, you should try and enter following code in the inputfield below. <code>"&lt;script&gt;alert('XSS');&lt;/script&gt;"</code>. This is called a <b>XSS</b> attack.
          By entering the given code, your browser will give an alert.
          <br/>
        </div>
        <form method="post">
          <div id='content'>
              Enter the script: <input type="text" class="form-control" name="value" placeholder="Value"><br>
              <button type="submit" class="btn btn-outline-success">Find out what this button does!</button>
          </div>
        </form>
        <br>
        <button onclick="window.location='../index.php'" type="button" class="btn btn-outline-warning">Back to the main page!</button>
        <?php
          header("X-XSS-Protection: 0");
          echo $_POST["value"];
        ?>
      </div>
</html>
