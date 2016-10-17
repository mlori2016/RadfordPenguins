
<?php
/***
Author:  Lori Miller
Team Penguins' comments form handler
This page recieves the data from comment_form.php
It will recieve: title, name, rating, comments, and submit in $_POST.
**/

//create variables
	$title = $_POST['title'];
	$name = $_POST['name'];
	$rating = $_POST['rating'];
	$comments = $_POST['comments'];
	
//displays recieved data

	
	echo "<div id='content' ><p>Thank you, " . $title . " " . $name . ", for your comments. </p>";
	echo " You stated that you found this example to be '" . $rating . "' and added: <br />" . $comments . "</p>";
	echo " <a href='index.php' >Return to Home Page </a>"
	
?>
</body>
</html>