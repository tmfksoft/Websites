    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">OVERdrive-IRC</a>
        </div>
        
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <?php
            $page = strtolower($page);
            echo ($page == 'about') ?
            '<li class="active"><a href="#">About</a></li>
            ' :
            '<li><a href="about.php">About</a></li>
            ';
            
            echo ($page == 'servers') ?
            '<li class="active"><a href="#">Server List</a></li>
            ' :
            '<li><a href="servers.php">Server List</a></li>
            ';
            
            echo ($page == 'aup') ?
            '<li class="active"><a href="#">AUP</a></li>
            ' :
            '<li><a href="aup.php">AUP</a></li>
            ';
          ?>
          <li><a href="//webchat.overdrive.pw/?nick=ovdWebUser...&amp;channels=chat" target="_blank">Chat Now!</a></li>
          <li><a href="https://secure.overdrive.pw/stats">Stats</a></li>
      <?php
       if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on') {
        echo '<li><a class="sslbtn" href="https://overdrive.pw' . $_SERVER['REQUEST_URI'] . '">SSL</a></li>';
       }
      ?>
        </ul>
      </div><!-- /.navbar-collapse -->
       </div>
       </div>