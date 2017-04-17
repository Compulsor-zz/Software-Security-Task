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
            <a class="dropdown-item active" href="sqli.php">SQL Injection</a>
            <a class="dropdown-item" href="xss.php">DOM-based XSS</a>
            <a class="dropdown-item" href="xsrf.php">Cross-Site Request Forgery</a>
            <a class="dropdown-item" href="httprs.php">HTTP Response Splitting</a>
            <a class="dropdown-item" href="hmac.php">HMAC</a>
          </div>
      </ul>
      <div id='content' class='container'>
        <br>
          <form action='select.php' method='post'>
            <div class="alert alert-info" role="alert">
              <h4>SQL Injection</h4>
              This is the part where we can execute SQL Injection. Search for someone in this database, by entering the firstname!
              <p>
                <br>
                <a data-toggle="collapse" href="#collapseSQLInjection" aria-expanded="false" aria-controls="collapseExample">
                  Click to view how to execute the SQL Injection!
                </a>
              </p>
              <div class="collapse" id="collapseSQLInjection">
                  <b>Enter this SQL Query: <code>" OR "" = "</code> in the Firstname input field and click the button below!</b>
                  <br>
              </div>
            </div>
              <b>Firstname:</b> <input type="text" class="form-control" name="firstname" placeholder="Firstname"><br>
              <button type="submit" class="btn btn-outline-primary">Get whatever you can!</button>
          </form>
          <br>
          <h4>Want to add your own person to the database?</h4>
          If you want to add your own person to the existing database, please click the button below!
          <br>
          <br>
          <a href="addPerson.php" class="btn btn-outline-success">Want to add your own person?</a>
          <!--<form action='resetDatabase.php' method='post'>
              <h4>Wanna reset this thing? Click the button below, beware for danger!</h4>
              <button type="submit" class="btn btn-outline-danger">Delete everything inside this thing!</button>
          </form>-->
          <br>
          <br>
          <button onclick="window.location='../index.php'" type="button" class="btn btn-outline-warning">Back to the main page!</button>
      </div>
</html>
