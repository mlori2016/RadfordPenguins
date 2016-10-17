<?php
/***
Author:  Lori Miller
Index Page to use in Team Penguin Project


***/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/transitional.dtd">
<html xmlns="http://www.w3.org/1999/ehtml" xm:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="companion.css" rel="stylesheet" type="text/css">

	<title>Teacher's Companion</title>
</head>
<body>
<?php
//include nav bar
include_once('template/navbar.php'); ?>
	<div id="wrapper" >
		<div id="content" >
			<?php include('loginPageV2.php') ;  
				echo "<br /> OR <br />";
			include('registration_form.php'); ?>
		</div>
	</div>
</body>
</html>