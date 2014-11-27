<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>sunrise</title>
    <link href="splash.css" rel="stylesheet">
</head>

<body>
<table class="container">
<tr><td>
    <div class="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="sites.php">Sites hosted</a></li>
      <li><a href="/f" target="_blank">Files index</a></li>
      <?php
       if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on') {
        echo '<li><a style="background-color:DarkRed" href="https://secure.overdrive.pw' . $_SERVER['REQUEST_URI'] . '">SSL</a></li>';}?>
    </ul>
    </div>
</td></tr>
<tr><td class="container-inner">
<h1>Sites hosted on this server</h1>
    <ul id="sitelist">
    <li>OVERdrive-IRC &middot; <a href="//overdrive.pw/" title="over drive irc mega vroom vroom">http://overdrive.pw/</a> 
    &middot; Website for the OVERdrive-IRC IRC network.
    </li>
    <li>PISG Stats for OVERdrive-IRC &middot; <a href="//secure.overdrive.pw/stats" title="stats take too much cpu to generate =[">http://secure.overdrive.pw/stats</a> 
    &middot; <a href="http://pisg.sourceforge.net/" title="stats take too much cpu to generate =[">PISG</a> Statistics for the IRC network I currently own and operate!
    </li>
    <li>BullSh!7 International Limited! &middot; <a href="//bil.overdrive.pw/" title="omg bullshet is bad word must censor!!!! !">http://bil.overdrive.pw/</a> 
    &middot; April Fools 2014
    </li>
    <li>Description page for my silly IRC bot &middot; <a href="/lilybot.html" title="i made a page for my stupid ircbot deal with it">/lilybot.html</a>
    </li>
    <li>mIRCskripterz.tk &middot; <a href="//mircskripterz.tk/" title="1337 h4x0rs only!">http://mircskripterz.tk/</a><br>
    </li>
    </ul>

</td></tr>
<tr><td>
<footer class="footer">
Questions? Contact the webmaster at <span style="color:#DDDDDD">glolol[at]overdrive.pw</span>
</footer>
</td></tr></table>

</body>
</html>
