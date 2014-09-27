<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>sunrise</title>
    <link href="splash.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<table class="container">
<tr><td>
    <div class="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="sites.php">Sites hosted</a></li>
      <li><a href="/files" target="_blank">Files index</a></li>
      <?php
       if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on') {
        echo '<li><a style="background-color:DarkRed" href="https://secure.overdrive.pw' . $_SERVER['REQUEST_URI'] . '">SSL</a></li>';
       }
      ?>
    </ul>
    </div>
</td></tr>
<tr><td class="container-inner">
   <h1>sunrise</h1>
   <p class="lead"><i class="fa fa-bolt fa-lg"></i> Powered by Debian GNU/Linux 7 (wheezy)</p>
   <p class="lead"><i class="fa fa-building fa-lg"></i> Hosted in Seattle / <a href="https://clientarea.ramnode.com/aff.php?aff=1538">RamNode.com</a></p>
   <br>
   <p><i class="fa fa-calendar-o fa-lg"></i> <?php
       echo exec("date");
      ?></p>
   <p><i class="fa fa-clock-o fa-lg"></i> <?php
      $uptime = shell_exec("cut -d. -f1 /proc/uptime");
      $days = floor($uptime/60/60/24);
      $hours = $uptime/60/60%24;
      $mins = $uptime/60%60;
      $secs = $uptime%60;
      echo ($days . " days, " . str_pad($hours, 2, "0", STR_PAD_LEFT) . ":" . str_pad($mins, 2, "0", STR_PAD_LEFT)  . ":" . str_pad($secs, 2, "0", STR_PAD_LEFT) );
      ?></p>
    <p><i class="fa fa-dashboard fa-lg"></i> 
      <?php
      $loadav = exec('cat /proc/loadavg');
      echo substr($loadav, 0, 15);
      ?></p>
   <!--<p><a href="sunrise.jpg"><img src="sunrise.jpg" width="300" height="225" id="splashimg" title="Enjoy the sunrise. Watch your step." alt="Enjoy the sunrise. Watch your step."></a></p>-->
</td></tr>
<tr><td>
<footer class="footer">
Questions? Contact the webmaster at <span style="color:#DDDDDD">glolol[at]overdrive.pw</span>
</footer>
</td></tr></table>

</body>
</html>
