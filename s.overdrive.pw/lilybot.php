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
    <div class="inset scroll-overflow">
    <h1>LILYBOT</h2>
    <p class="lead"><b>Lily</b> (<em>also known as <b>firehaZard</b> on freenode</em>) is GLolol's <a href="#mooooo">Limnoria</a> IRC Bot. It resides mainly in <b>#chat</b> and <b>#dev</b> on <a href="https://overdrive.pw/">OVERdrive-IRC</a>, and in <b>##GLolol</b> on freenode.</a></p>
    <p>Here are some of the commands Lily has to offer. Do note that its prefix character is a <b>`</b> (grave accent), <em>not</em> a <b>'</b> (apostrophe). It does not respond to nick either.</p>
    <h2>Base commands</h2>
    <p>The help/command handling system in Supybot has a bit of a learning curve if you're new. Here is a description of the most basic commands.</p>
    <ul>
        <li><code>/msg Lily <b>register</b> &lt;username&gt; &lt;password&gt;</code> - Registers you with the bot (some commands require this). Must be done in private as it includes a password field.</li>
        <li><code>/msg Lily <b>identify</b> &lt;username&gt; &lt;password&gt;</code> - Identifies you to your account (if previously registered).
        <li><code><b>`list</b> [&lt;plugin&gt;]</code> - One part of Supybot's help system. Without <code>[&lt;plugin&gt;]</code>, it gives you a list of all the plugins loaded in the bot (Supybot is a plugin-based IRC bot). Then, once you know what plugins are available, you can do <code><b>`list</b> &lt;plugin&gt;</code>, which gives you a list of all the commands a plugin has to offer.</li>
        <li><code><b>`help</b> [&lt;command&gt;]</code> - Gives help for a specific command (find them using <code><b>`list</b></code>, as mentioned above).</li>
        <li><code><b>`more</b> [&lt;nick&gt;]</code> - Supybot has an interesting way of breaking up messages so they don't flood a channel or get cut off. Sometimes, when you call a command that has longer output, you may get something like <code><b>(1 more message)</b></code> at the end. To continue this output, simply type <code><b>`more</b></code>. You can also continue a reply directed at someone else, by using <code><b>`more</b> &lt;nick&gt;</code>.</li>
        </ul>
    <h2>Somewhat useful utilities</h2>
    <ul>
        <li><code><b>`dns</b> &lt;address or ip&gt;</code> - Looks up the IP address of &lt;host&gt; or the reverse DNS hostname of &lt;ip&gt;.</li>
        <li><code><b>`ud</b> &lt;search&gt;</code> - Searches UrbanDictionary.</li>
        <li><code><b>`wiki</b> &lt;article&gt;</code> - Searches Wikipedia.</li>
        <li><code><b>`google</b> &lt;search&gt;</code> - Googles something. Note that this command has a tendency to break sometimes; blame Google's API!</li>
        <li><code><b>`w</b> &lt;search&gt;</code> - Looks up weather using Wunderground. You can also use <code><b>`setweather</b> &lt;location&gt;</code> to save your location (so you can just do <code><b>`w</b></code>).</li>
        <li><code><b>`seen</b> &lt;nick&gt;</code> - Returns when &lt;nick&gt; was last seen <em>speaking</em>.</li>
        <li><code><b>`uptime</b></code> - Returns the bot's <s>down</s> uptime.</li>
        <li><code><b>`isup &lt;site&gt;</b></code> - Checks whether a website is up or down (using isup.me).</li>
        <li><code><b>`mkpasswd [&lt;length&gt;]</b></code> - Generates random passwords, because why the hell not!</li>
        <li><code><b>`pkg &lt;suite&gt; &lt;package&gt;</b></code> - Searches for packages in Debian or Ubuntu's repositories. <code>`list pkginfo</code> shows some related commands, along with search functions for Arch Linux and Linux Mint.</li>
        <li><code><b>`ping</b></code> - Check if the bot and/or your IRC connection are alive!</li>
    </ul>
    <h2>Math related things</h2>
    <ul>
        <li><code><b>`calc</b> &lt;math expression&gt;</code> - Sane calculator command! Use <b>**</b> instead of <b>^</b> for raising powers (10**9 instead of 10^9).</li>
        <li><code><b>`convert</b> &lt;num> &lt;unit1&gt; &lt;unit2&gt;</code> - Wow, a unit converter! Note that unit names are case sensitive! (kg != KG, etc.)</li>
        <li><code><b>`f2c &lt;temp&gt;</b></code> - Converts Fahrenheit to Celsius.</li>
        <li><code><b>`c2f &lt;temp&gt;</b></code> - Converts Celsius to Fahrenheit.</li>
    </ul>
    <h2>Games</h2>
    <ul>
        <li><code><b>`eightball</b> &lt;question&gt;</code> - Magic 8 ball!</li>
        <li><code><b>`coin</b></code> - Flips a coin. Heads or tails?</li>
        <li><code><b>`roulette</b></code> - Russian Roulette. (bot must be opped for this to work ;P)</li>
        <li><code><b>`dice</b> &lt;dice&gt;d&lt;sides&gt;</code> - Rolls a die with <code>&lt;sides&gt;</code> number of sides <code>&lt;dice&gt;</code> times.</li>
        <li><code><b>`wte</b> &lt;text&gt;</code> - Translates text through multiple rounds of Google Translate in order to get interesting results.</li>
    </ul>
    <h2>Quotebox commands</h2>
    <p>Lily is also our very own quote bot!</p>
    <ul>
        <li><code><b>`quote add</b> &lt;quote&gt;</code> - Adds a quote. You need to be registered with the bot to do this, so please don't abuse it!</li>
        <li><code><b>`quote search</b> &lt;search&gt;</code> - Searches for quotes in the database.</li>
        <li><code><b>`quote random</b></code> - Fetches a random quote!</li>
        <li><code><b>`quote get</b> &lt;number&gt;</code> - Fetches quote <code>&lt;number&gt;</code>, if it exists.</li>
    </ul>
    <h2 id="mooooo">etc.</h2>
    <p>Supybot is an open-source <a href="https://github.com/ProgVal/Limnoria">(GitHub)</a> IRC bot framework written in Python. It comes preinstalled with a load of commands and features, and isn't too hard to set up either: <a href="http://supybot.aperio.fr/doc/">http://supybot.aperio.fr/doc/</a></p>
    </div>
</td></tr>
<tr><td>
<footer class="footer">
tl;dr Please don't break the bots!</span>
</footer>
</td></tr></table>

</body>
</html>
