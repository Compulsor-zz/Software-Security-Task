<?php
    if(isset($_REQUEST['language'])) {
        $response = explode("%0D%0A%0D%0A", urlencode($_REQUEST['language']));
        $headers = explode("%0D%0A", $response[0]);
        header(urldecode ("language:" . $headers[0]));
        for ($i = 1; $i <= max(array_keys($headers)); $i++) {
            header(urldecode ($headers[$i]));
        }
        if(isset($response[1])) {
            echo urldecode($response[1]);
            exit;
        }
    }
?>
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
            <a class="dropdown-item active" href="httprs.php">HTTP Response Splitting</a>
            <a class="dropdown-item" href="hmac.php">HMAC</a>
          </div>
      </ul>
      <br>
      <div class="container">
        <div class="alert alert-info" role="alert">
          <h4>HTTP Response Splitting</h4>
          HTTP Response Splitting. On this page you have an input field where you have to enter a language.
          <p>
            <br>
            <a data-toggle="collapse" href="#collapsePossibleLanguages" aria-expanded="false" aria-controls="collapseExample">
              Click to the language you need to enter!
            </a>
          </p>
          <div class="collapse" id="collapsePossibleLanguages">
              <ul>
              <b>Language you have to type:</b>
                  <li> English </li>
              </ul>
          </div>
        </div>
        <form action="httprs.php?language=en" method='post'>
          <div id='content'>
              <b>Language:</b> <input type="text" class="form-control" name="language" placeholder="Enter the language here"><br>
          </div>
          <br>
          <button type="submit" class="btn btn-outline-success">Pass on the language!</button>
        </form>
        <br>
        <div class="alert alert-info" role="alert">
          <h4>HTTP Response Splitting</h4>
          Part 2 of HTTP Response splitting: enter the URI of a website in the input field underneath. Edit the HTTP Response Headers to redirect yourself/the user to another web page!
          <p>
            <br>
            <a data-toggle="collapse" href="#collapsePossibleURI" aria-expanded="false" aria-controls="collapseExample">
              Click here to view some useful URIs and what to put in front of them!
            </a>
          </p>
          <div class="collapse" id="collapsePossibleURI">
              <ul>
              <b>First put this </b> <code>%0D%0ALocation:</code> <b> after "language=en". </b>
              <b>Afterwards, put one of the following URIs after the </b> <code> ; </code>
                  <li> http://www.informationisbeautiful.net/ </li>
                  <li> http://thehackernews.com/ </li>
                  <li> http://www.wired.co.uk/article/hacks-data-breaches-2017 </li>
                  <li> http://www.information-age.com/worlds-biggest-data-hacks-revealed-123463942/ </li>
              </ul>
          </div>
        </div>
        <br>
        <button onclick="window.location='../index.php'" type="button" class="btn btn-outline-warning">Back to the main page!</button>
      </div>
    </body>
</html>
