<!DOCTYPE HTML>
<html>
<head>
<?php include ('include/headers.php'); ?>
</head>

<body>
<table class="container">
<tr><td>
    <?php include ('include/nav.php'); ?>
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
</td></tr>
<tr><td>
<footer class="footer">
Questions? Contact the webmaster at <span style="color:#DDDDDD">glolol[at]overdrive.pw</span>
</footer>
</td></tr></table>

</body>
</html>
