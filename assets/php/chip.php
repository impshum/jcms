<?php
$iplogfile = 'assets/log/index.html';
$ipaddress = $_SERVER['REMOTE_ADDR'];
$webpage = $_SERVER['SCRIPT_NAME'];
$timestamp = date('d/m/Y - h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$fp = fopen($iplogfile, 'a+');
chmod($iplogfile, 0644);
fwrite($fp, "<div class='result'><strong>$timestamp</strong><br>$ipaddress<br>$webpage<br>$browser\n<br><hr></div>");
fclose($fp);
?>
