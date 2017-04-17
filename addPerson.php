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
            <a class="dropdown-item active" href="sqli.php">SQL Injection</a>
            <a class="dropdown-item" href="xss.php">DOM-based XSS</a>
            <a class="dropdown-item" href="xsrf.php">Cross-Site Request Forgery</a>
            <a class="dropdown-item" href="httprs.php">HTTP Response Splitting</a>
            <a class="dropdown-item" href="hmac.php">HMAC</a>
          </div>
      </ul>
      <div id='content' class='container'>
        <br>
        <form action='insert.php' method='post'>
            <h4>Add someone to this database, by entering the needed information below!</h4>
            <b>Firstname:</b> <input type="text" class="form-control" name="firstname" placeholder="Firstname"><br>
            <b>Lastname:</b> <input type="text" class="form-control" name="lastname" placeholder="Lastname"><br>
            <b>Age:</b> <input type="text" class="form-control" name="age" placeholder="age"><br>
            <button type="submit" class="btn btn-outline-success">Add this freaking person!</button>
            <br>
            <button onclick="window.location='../sqli.php'" type="button" class="btn btn-outline-warning">Back to the SQLI Injection page!</button>
        </form>
        <br>
      </div>
    </body>
</html>
