<?php
require_once("facebook.php");
require_once("fbConfig.php");

$facebook = new Facebook($config);
$facebook->destroySession(); // expiring session
header('Location: http://alpeshprajapatimscit.site11.com/Facebook/index.php'); // Take him to Index page after logging out
?>