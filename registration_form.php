<?php
/****
Author:  Lori Miller
Team Penguins' Registration Form Version1

***/
?>
	
	<h2>Register Here!</h2>

		<form action="registration_handler.php" method='post'>
  			<label>Username: <input type="text" name="username" required></label><br /><br />
			<label>First Name: <input type="text" name="firstname" required></label><br /><br />
			<label>Last Name:  <input type="text" name="lastname" required></label><br /><br />
  			<label>Password: <input type="password" name="password" required></label><br /><br />
			<label>Email Address:  <input type="text" name="email" required> </label><br /><br />
			<label>Confirm Email:  <input type="text" name="confirmemail" required></label><br /><br />
			
  			<input type="submit" value="submit">
		</form>