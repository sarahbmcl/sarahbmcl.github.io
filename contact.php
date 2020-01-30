<?php

if($_POST["submit"]) {
    $recipient="sarahbmcl@gmail.com";
    $subject="Website Contact Request";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $senderEmail=$_POST["senderPhone"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nPhone: $senderPhone\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>'Mac' Sarah McLaughlin</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="public/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="public/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <nav role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">Sarah McLaughlin</a>
      <ul id="nav-full" class="right hide-on-med-and-down">
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center">Contact</h1>
        <div class="row center">
          <h4 class="header col s12 light">Let's Connect</h4>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="public/assets/images/testimage6.jpg"></div>
  </div>

  <div class="container" id="contact-form">

    <?=$thankYou ?>

    <div class="row">
      <form method="post" action="contact.php" class="col s12">
        <div class="row">
          <div class="input-field col s6">
              <input id="name" name="sender" type="text" class="validate">
              <label for="name">Full Name</label>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1" name="message">Your Message Here</label>
            </div>
          </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="senderEmail" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="phone" name="senderPhone" type="phone" class="validate">
            <label for="phone">Phone</label>
          </div>
        </div>
        <div class="row center">
          <div>
            <input button class="btn btn-lg center" type="submit" name="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>      
  </div>
  
  <div class="container">
    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center"><img src="public/assets/images/linkedin-box (2).png"></img></h2>
          <h5 class="center" style="color: #595959"><a href="https://www.linkedin.com/in/sarahbmcl/">LinkedIn</a></h5>
          <!-- <p class="light">empty</p> -->
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
              <h2 class="center"><img src="public/assets/images/github-box 2.png"></img></h2>
              <h5 class="center" style="color: #595959"><a href="https://www.github.com/sarahbmcl/">GitHub</a></h5>
              <!-- <p class="light">empty</p> -->
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
              <h2 class="center"><img src="public/assets/images/account-box.png"></img></h2>
              <h5 class="center" style="color: #595959"><a href="mailto:sarahbmcl@gmail.com">Direct Contact</a></h5>
          <!-- <p class="light">empty</p> -->
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="header col s12 light">“Talent is a pursued interest. Anything that you're willing to practice, you can do.”<h3>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="public/assets/images/testimage5.jpg" alt="Unsplashed background img 2"></div>
  </div> -->

  <footer class="page-footer">
    <br>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>