    <div class="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="sites.php">Sites hosted</a></li>
      <li><a href="lilybot.php">Supybot</a></li>
      <li><a href="/f">Files index</a></li>
      <li><a href="/pages">Web Demos!</a></li>
      <li><a href="/stats/ovd-14d.htm" target="_blank">PISG IRC Stats <i class="fa fa-external-link"></i></a></li>
      <?php
       if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on') {
        echo '<li><a style="background-color:DarkRed" href="https://secure.overdrive.pw' . $_SERVER['REQUEST_URI'] . '">SSL</a></li>';
       }
      ?>
    </ul>
    </div>