<?php
/***
Author:  Lori Miller
Team Penguins' Comment Form


***/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/transitional.dtd">
<html xmlns="http://www.w3.org/1999/ehtml" xm:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="companion.css" rel="stylesheet" type="text/css">
	<title>Comment's Form</title>
</head>
<body>
<?php
//include nav bar
include_once('template/navbar.php');
?>

	<div id="wrapper">
		<div id="content" ><p><h2>Please complete this form to submit your comment:</h2></p>
	
			<form action="comment_handler.php" method="post">
				<p>Name: 
					<select name="title">
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
						<option value="Ms.">Ms.</option>
					</select>
				<input type="text" name="name" size="20" />
				</p>
		
		
				<p>Response:  This is ...
					<input type="radio" name="rating" value="excellent" />Excellent
					<input type="radio" name="rating" value="okay" />Okay
					<input type="radio" name="rating" value="needswork" />Needs Work
				</p>
			
				<p>Comments:
					<textarea name="comments" rows="3" cols="30"> </textarea>
				</p>
			
				<input type="submit" name="submit" value="Send My Comment!" />
		</form>
	</div>
</div>
</body>
</html>