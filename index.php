<html>
    <head>
        <title>Security task</title>
        <?php include "resources/includes.php";?>
    </body>
    </head>
    <body>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Security Task: Main menu</a>
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
      <div class="container">
        <br>
        <h2>Welcome, Koen!</h2>
        <br>
        <h4>This is my website for the course "Software Security" in the 3rd module.</h4>
        <h4>Be sure to check everything out!</h4>
        <br>
        <div id='content' class='row'>
          <div class="card" style="width: 20rem;">
            <div class="coll-sm">
              <img class="card-img-top" src="resources/images/sql_injection.jpg" width="318" height="180">
              <div class="card-block">
                <h4 class="card-title">SQL Injection</h4>
                <p class="card-text">Click the button below to check out the SQL Injection!</p>
                <a href="sqli.php" class="btn btn-primary">Go for it!</a>
              </div>
            </div>
          </div>
          <div class="card" style="width: 20rem;">
            <div class="coll-sm">
              <img class="card-img-top" src="resources/images/xss.jpg" width="318" height="180">
              <div class="card-block">
                <h4 class="card-title">DOM based XSS</h4>
                <p class="card-text">Click the button below to check out the DOM Based XSS!</p>
                <a href="xss.php" class="btn btn-primary">Go for it!</a>
              </div>
            </div>
          </div>
          <div class="card" style="width: 20rem;">
            <div class="coll-sm">
              <img class="card-img-top" src="resources/images/csrf.jpg" width="318" height="180">
              <div class="card-block">
                <h4 class="card-title">Cross-Site Request Forgery (CSRF)</h4>
                <p class="card-text">Click the button below to check out the Cross-Site Request Forgery (CSRF)!</p>
                <a href="xsrf.php" class="btn btn-primary">Go for it!</a>
              </div>
            </div>
          </div>
          <div class="card" style="width: 20rem;">
            <div class="coll-sm">
              <img class="card-img-top" src="resources/images/crlf.jpg" width="318" height="180">
              <div class="card-block">
                <h4 class="card-title">HTTP Response Splitting</h4>
                <p class="card-text">Click the button below to check out the HTTP Response Splitting!</p>
                <a href="httprs.php" class="btn btn-primary">Go for it!</a>
              </div>
            </div>
          </div>
          <div class="card" style="width: 20rem;">
            <div class="coll-sm">
              <img class="card-img-top" src="resources/images/hmac.jpg" width="318" height="180">
              <div class="card-block">
                <h4 class="card-title">HMAC</h4>
                <p class="card-text">Click the button below to check out the HMAC!</p>
                <a href="hmac.php" class="btn btn-primary">Go for it!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
</html>
