<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OVERdrive-IRC main website.">
    <meta name="author" content="GLolol">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">

    <title>Home - OVERdrive-IRC</title>
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/yeti/bootstrap.min.css" rel="stylesheet">
    <link href="overdrive-irc.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/bootstrap.min.js"></script>
  </head>

  <body>
<?php 
    $page = 'index';
    include ('include/navbar.php'); 
?>
    <div class="container">
    <br>
        <div class="jumbotron">
          <h1>OVERdrive-IRC</h1>
          <p>We are OVERdrive-IRC, a laid-back IRC chat community whose goal is to bring people together and have a good time. </p>
          <p><a class="btn btn-primary btn-lg" role="button" href="servers.php">Pave the way. &raquo;</a></p>
        </div>
      <div class="row">
        <div class="col-md-4">
          <h2><i class="fa fa-users"></i> Our Community</h2>
          <p>OVERdrive-IRC is made up of a diverse community of users from around the world. In the mix you'll find coders, gamers, and all sorts of friendly people around. </p>
          <p>Feel free to stop by and check us out!</p>
          <p><a class="btn btn-default" href="about.php" role="button">About us &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2><i class="fa fa-globe"></i> Easily Accessible</h2>
          <p>Since IRC is an open protocol, implementations exist for pretty much every platform! This makes IRC easy and accessible on every device.</p>
          <p>Our main channel can be found at: 
          <ul>
          <li><code><a href="irc://irc.overdrive.pw/chat"> #chat @ irc.overdrive.pw</a></code></li>
          </ul>
          <p><a class="btn btn-default" href="servers.php" role="button">Servers &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2><i class="fa fa-comments"></i> WebChat Client</h2>
          <p>For those of you who don't have an IRC client handy or cannot install one, we have a neat web client set up and ready to go!</p>
          <a class="btn btn-default" href="//webchat.overdrive.pw/?nick=ovdWebUser...&amp;channels=chat" role="button">Chat Now! &raquo;</a>
       </div>
      </div>

      <hr>

      <footer>
        <p>Copyright &copy; 2013-2014, OVERdrive-IRC. All rights reserved.</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
