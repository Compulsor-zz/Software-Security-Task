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
            <a class="dropdown-item" href="xss.php">DOM-based XSS</a>
            <a class="dropdown-item active" href="xsrf.php">Cross-Site Request Forgery</a>
            <a class="dropdown-item" href="httprs.php">HTTP Response Splitting</a>
            <a class="dropdown-item" href="hmac.php">HMAC</a>
          </div>
      </ul>
      <div id='content' class='container'>
        <br>
        <div class="alert alert-info" role="alert">
          <h4>XSRF</h4>
          In this XSRF exercise we have a bank account with some details like: firstname, lastname, amount of money, ...!
          Please click the button below to enter the bank account and view more details of it.
          <br>
        </div>
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="resources/images/piggybank.jpg" width="318" height="180">
          <div class="card-block">
            <h4 class="card-title">Bank Account</h4>
            <p class="card-text">Some quick example of the bank account and the info on it.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Name: Lennart Schelfhout</li>
            <li class="list-group-item">Starting money: 260</li>
            <li class="list-group-item">Current money: 598</li>
          </ul>
        </div>
        <br>
        <a href="xsrfDeduction.php?deduct=463" class="btn btn-outline-success">Click to enter the bank account!</a>
        <br>
        <br>
        <button onclick="window.location='../index.php'" type="button" class="btn btn-outline-warning">Back to the main page!</button>
      </div>
</html>
