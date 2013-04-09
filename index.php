<?php
session_start();
require_once("facebook.php");
require_once("fbConfig.php");

$facebook = new Facebook($config);
$user = $facebook->getUser(); // Get User Id

// Login or logout url will be needed depending on current user state.
if ($user) // Logged in
{
	$_SESSION['fbobject'] = serialize($facebook); // Taking object in session for api requests
    header('Location: http://alpeshprajapatimscit.site11.com/Facebook/success.php'); // Take him to this page
}
else
{
	$params = array(
		'scope' => 'user_photos, offline_access'
	);
	$loginUrl = $facebook->getLoginUrl($params);
}
?>

<html>
<head>
	<title>Facebook Login Page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--Loading Bootstrap CSS Files  -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">	
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="bootstrap/css/myBootstrap.css" rel="stylesheet">

        <link rel="stylesheet" href="forkit/forkit.css">
	<link rel="stylesheet" href="forkit/demo.css">
</head>
<body>
	 <!--Application Description-->
	<div class="navbar" id="navbar">
            <div class="navbar-inner">
                <div class="container" style="width: auto;">                    
                    <a class="brand" href="#">Facebook Album Slideshow & Download</a>                    
                </div>
            </div><!-- /navbar-inner -->
        </div>
        
                <div class="forkit-curtain" style="top: -100%;">
			<div class="close-button"></div>
                        <h2>Alpesh Prajapati</h2><br>
			<img src="Images/alpesh.jpg">						
                        <small>You can have a look at code at <a href="https://github.com/alpesh1988/FacebookAlbum" target="_blank">Github</a></small>
		</div>
        <a class="forkit" data-text="Fork Me" data-text-detached="Drag Down &gt;" href="" style="-webkit-transform: translate(0px, 0.0000010855385462659627px) rotate(0deg);"><span class="string" style="-webkit-transform: translate(80px, 0px) rotate(7.125016348901798deg); width: 1.2025628647312194px;"></span><span class="tag" style="-webkit-transform: translate(80.00000000000003px, -14.999999999999996px) rotate(45.000000000000014deg);">Fork Me</span></a>

	<script async="" src="forkit/ga.js"></script>
	<script src="forkit/forkit.js"></script>

	<h3 align="center"> This application lets you access and download your facebook albums.</h3>
	<a id="fbconnect" href="<?php echo $loginUrl; ?>" class="btn btn-primary">Connect with Facebook</a>		
	<h5 id="author">Developed by Alpesh Prajapati.</h5>
	
	<!--Loading Bootstrap JS Files  -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>			