<?php
/***
Author:  Lori Miller
Team Penguins' Login form handler
This page recieves the data from comment_form.php
It will recieve: title, name, rating, comments, and submit in $_POST.
**/

//create variables
	$user = $_POST['username'];
	$password = $_POST['password'];

//displays recieved data
echo "You are now logged in!";
echo "<br /><a href='index.php' >Home</a>" ;	

?>