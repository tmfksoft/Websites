<!DOCTYPE html>
<html lang="en">
  <head>
   <?php
    $page = 'Server List';
    include ('include/headers.php'); ?>
  </head>
  
  <body>
<?php 
    $page = 'servers';
    include ('include/navbar.php');
?>
    <div class="container">
        <div class="page-header"><h1>Server List</h1></div>
        <p style="font-size:large;">To access the OVERdrive-IRC network, you can simply point your IRC client to <b><a href="irc://irc.overdrive.pw/chat">irc.overdrive.pw</a></b>. This will automatically redirect you to a random server in our RR.</p>
        <p>Both IPv4 and IPv6 are both supported with this address.</p>
        <br>
        <div class="panel panel-primary">
          <div class="panel-heading">Server Information
          </div>
          <div class="panel-body">
            <p>Currently, all servers listen on ports <b>6667-6669</b> and <b>6697-6699</b> (SSL).</p>
            <p>Users marked with <i>*</i> represent global administrators. † denotes that the user is not an operator at this time.</p>
          </div>

          <table class="table table-hover">
             <thead>
               <tr>
                <th>Server Hostname</th>
                <th>Location</th>
                <th>Region</th>
                <th>Server Owner(s)</th>
                <th>Operator(s)</th>
                <th>SSL</th>
                <th>IPv6</th>
               </tr>
            </thead>
            <tr>
              <td>sunrise.overdrive.pw</td>
              <td>Seattle, Washington</td>
              <td><span style="color:#05C">NA</span></td>
              <td>GLolol<i>*</i></td>
              <td>N/A</td>
              <td><i style="color:#0A0" class="fa fa-check"></i> Yes</td>
              <td><i style="color:#0A0" class="fa fa-check"></i> Yes</td>
            </tr>
             <tr>
              <td>kawaii.overdrive.pw</td>
              <td>Newark, New Jersey</td>
              <td><span style="color:#05C">NA</span></td>
              <td>Kitty<i>*</i></td>
              <td>Eren</td>
              <td><i style="color:#0A0" class="fa fa-check"></i> Yes</td>
              <td><i style="color:#0A0" class="fa fa-check"></i> Yes</td>
            </tr>
             <tr>
              <td>io.overdrive.pw</td>
              <td>Montreal, Canada</td>
              <td><span style="color:#05C">NA</span></td>
              <td>voidsta</td>
              <td>N/A</td>
              <td><i style="color:#0A0" class="fa fa-check"></i> Yes</td>
              <td><i style="color:#0A0" class="fa fa-check"></i> Yes</td>
            </tr>
          </table>
        </div>
        <br>
<!--
        <div class="panel panel-info">
          <div class="panel-heading">Relayed Networks</div>
          <div class="panel-body">
            <p>In addition to our network, we can also be accessed by through one of these networks in our relay:</p>
          </div>
            <table class="table table-hover">
            <thead>
                <tr>
                <th>Network</th>
                <th>Channel</th>
                <th>IRC Address</th>
                <th>Opening Date</th>
                <th>SSL</th>
                <th>IPv6 (RR)</th>
                </tr>
            </thead>
            <tr>
                <td>AthemeNet</td>
                <td><code>#overdrive</code></td>
                <td><code><a href="irc://irc.atheme.org/overdrive">irc.atheme.org</a></code></td>
                <td>July 02, 2012 <em>(as #channel)</em></td>
                <td><i style="color:#0A0" class="fa fa-check"></i> Yes (+6697)</td>
                <td><i style="color:#0A0" class="fa fa-check"></i> Yes</td>
            </tr>
            <tr>
                <td>freenode</td>
                <td><code>##GLolol</code></td>
                <td><code><a href="irc://chat.freenode.net/#GLolol">chat.freenode.net</a></code></td>
                <td>November 2013</td>
                <td><i style="color:#0A0" class="fa fa-check"></i> Yes (+6697)</td>
                <td><i style="color:#0A0" class="fa fa-check"></i> Yes</td>
            </tr>
             <tr>
                <td>ParadoxIRC</td>
                <td><code>#1</code></td>
                <td><code><a href="irc://irc.paradoxirc.net/1">irc.paradoxirc.net</a></code></td>
                <td>July 27, 2012</td>
                <td><i style="color:#0A0" class="fa fa-check"></i> Yes (+6697)</td>
                <td><i style="color:#0A0" class="fa fa-check"></i> Yes: <code>ipv6.paradoxirc.net</code></td>
            </tr> 
            <tr>
                <td>ASoTnet</td>
                <td><code>#overdrive</code></td>
                <td><code><a href="irc://irc.aseriesoftubez.com/overdrive">irc.aseriesoftubez.com</a></code></td>
                <td>April 2014</td>
                <td><i style="color:#0A0" class="fa fa-check"></i> Yes (+6697)</td>
                <td><i style="color:#0A0" class="fa fa-check"></i> Yes</td>
            </tr> 
            </table>
      </div> -->
      
      <hr>
      <footer>
        <p>Copyright &copy; 2013-2014, OVERdrive-IRC. All rights reserved.</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
