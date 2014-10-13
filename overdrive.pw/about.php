<!DOCTYPE html>
<html lang="en">
  <head>
   <?php
    $page = 'About';
    include ('include/headers.php'); ?>
  </head>

  <body>
<?php
    include ('include/navbar.php'); 
?>
    <div class="container">
      <div class="page-header"><h1>About Us</h1></div>
        <p>When OVERdrive-IRC first began, it was nothing more than a small personal channel where friends could gather and peace and chill out. Over the months it was live, the channel grew. A community develops within the channel, and it eventually became the place it is today.</p>
        <!-- <p style="font-size:large;">OVERdrive-IRC’s setup is <em>two-fold:</em> it is both our own network and a series of relayed channels. Originally only one channel, it is now many, spread across several networks for users’ convenience (using a nice relayer). We are always eager to have new people over, so by all means, feel free to check us out!</p> -->
        <p><i>(and then we expanded into our own network)</i></p>
        <p>Currently we employ a relay mechanism called RelayLink over multiple networks in our main channel (<a href="https://github.com/GLolol/SupyPlugins/tree/master/RelayLink">Git source</a>). We run <a href="http://www.atheme.org/projects/charybdis.html">charybdis</a> as our IRCd and <a href="http://atheme.net/atheme.html">atheme IRC Services</a>. Some of the services we provide include ChanServ, NickServ, HostServ, and MemoServ.</p>
      <div class="row">
        <div class="col-md-6">
        <h3><i class="fa fa-bullhorn"></i> Channels</h3>
        <p>On our network, the main channels are <b>#chat</b> for general chatting, and <b>#Help</b> for network support.</p>
        <p>Other channels can easily be found by simply typing <b>/list</b> in your IRC client!</p>
        </div>
        <div class="col-md-6">
        <h3><i class="fa fa-cloud"></i> Servers</h3>
        <p>For information regarding connections and servers, please see our Servers page.</p>
        <p><a class="btn btn-primary" href="servers.php" role="button">Servers &raquo;</a></p>
        </div>
      </div>
      <br>
        <div class="panel panel-warning">
        <div class="panel-heading">Staff List</div>
        <div class="panel-body">
        <div class="row">
		<div class="col-md-6">
			<h4 class="media-heading">GLolol</h4>
			<table class="table table-condensed">
                <tr>
                    <td>Location:</td>
                    <td>Vancouver, Canada</td>
                </tr>
                <tr>
                    <td>Role:</td>
                    <td>Network Owner, Server Management</td>
                </tr>
                <tr>
                    <td style="width:120px;">Servers owned:</td>
                    <td>sunrise</td>
                </tr>
                <tr>
                    <td>Website:</td>
                    <td><s><b>THIS ONE</b></s> also <a href="https://secure.overdrive.pw/wordpress">blog</a></td>
                </tr>
                <tr>
                    <td>Bio:</td>
                    <td>GLolol (a.k.a. James) is <s>THE BEST PERSON ON EARTH</s> your resident lazy Asian kid.
                He enjoys messing around on IRC, and constantly breaks things!<br>
                <span style="font-size:small;">(He also writes this website, so apologies if things get a <em>little</em> biased!)</span></td>
                </tr>
			</table>
		</div>
		<div class="col-md-6">
			<h4 class="media-heading">Kitty</h4>
			<table class="table table-condensed">
				<tr>
					<td>Location:</td>
					<td>Southwest Florida, US</td>
				</tr>
				<tr>
					<td>Role:</td>
					<td>Network Administrator, Server Management</td>
				</tr>
				<tr>
					<td style="width:120px;">Servers owned:</td>
					<td>kawaii</td>
				</tr>
				<tr>
					<td>Website:</td>
					<td><a href="//ki.tty.sh/">http://ki.tty.sh/</a></td>
				</tr>
				<tr>
					<td>Bio:</td>
					<td>Kitty is cool and hosts the network for us! (&lt;3 Kitty) He's been on IRC for 5 years and has experience running
					IRC servers for 4, and now he just kinda idles and makes sure things work. </td>
				</tr>
			</table>
		</div>
        </div> <!-- /row --><div class="row">
		<div class="col-md-6">
			<h4 class="media-heading">Eren</h4>
			<table class="table table-condensed">
				<tr>
					<td>Location:</td>
					<td>Northwest Florida, US</td>
				</tr>
				<tr>
					<td>Role:</td>
					<td>Operator of kawaii.overdrive.pw</td>
				</tr>
				<tr>
					<td style="width:120px;">Servers owned:</td>
					<td style="font-style:italic;">None</td>
				</tr>
				<tr>
					<td>Website:</td>
					<td><a href="http://erenzie.ez.lv/">http://erenzie.ez.lv/</a></td>
				</tr>
				<tr>
					<td>Bio:</td>
					<td><a href="posts/may2014/idk.txt">idk</a></td>
				</tr>
			</table>
        </div>
        <div class="col-md-6">
			<h4 class="media-heading">voidsta</h4>
			<table class="table table-condensed">
				<tr>
					<td>Location:</td>
					<td style="font-style:italic;">?</td>
				</tr>
				<tr>
					<td>Role:</td>
					<td>Administrator of io.overdrive.pw</td>
				</tr>
				<tr>
					<td style="width:120px;">Servers owned:</td>
					<td>io</td>
				</tr>
				<tr>
					<td>Website:</td>
					<td style="font-style:italic;">N/A</td>
				</tr>
			</table>
		</div></div> <!-- /row --><div class="row">
		<!-- <div class="col-md-6">
			<h4 class="media-heading">gbyers</h4>
			<table class="table table-condensed">
                <tr>
                    <td>Location:</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Role:</td>
                    <td>Administrator of ok.overdrive.pw</td>
                </tr>
                <tr>
                    <td style="width:120px;">Servers owned:</td>
                    <td>ok</td>
                </tr>
                <tr>
                    <td>Website:</td>
                    <td style="font-style:italic;">N/A</td>
                </tr>
			</table>
		</div> -->
      </div></div></div>
       <hr>
      <h2>Contact us</h2>
      <div class="row">
        <div class="col-md-6">
        <h3><i class="fa fa-rocket"></i> IRC</h3>
            <p>Since we're an IRC network, the best way to contact us is IRC. (seriously, if you can't figure that part out, you don't deserve to be here)</p>
            <p>If you want to contact us, join <b><a href="irc://irc.overdrive.pw/help">#Help</a></b> on our network or simply send us a memo!
            <p><code>/msg MemoServ send !staff &lt;your message&gt;</code> (on overdrive-irc)</p>
            <p><code>/msg MemoServ send GLolol &lt;your message&gt;</code> (elsewhere)</p>
        </div>
        <div class="col-md-6">
        <h3><span class="fa fa-envelope"></span> E-mail</h3>
            <p>If the method on the <i class="fa fa-arrow-left" title="left"></i><span class="icon-label">left</span> does not work (or if you're too lazy to IRC), please send your inquiries to:</p>
            <p><code>support[at]overdrive[dot]pw</code></p>
        </div>
      </div>
      <hr>

      <footer>
        <p>Copyright &copy; 2013-2014, OVERdrive-IRC. All rights reserved.</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
