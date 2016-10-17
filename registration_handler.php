<?php
/***
Author:  Lori Miller
Team Penguins' Login form handler Version 1
This page recieves the data from comment_form.php
It will recieve: title, name, rating, comments, and submit in $_POST.
**/

//create variables
	$user = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$confirmemail = $_POST['confirmemail'];

//displays recieved data
echo "You are now Registered!";
echo "<br /><a href='index.php' >Home</a>" ;	
?>