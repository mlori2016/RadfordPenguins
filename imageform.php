<?php
/***
Author:  Lori Miller
Team Penguins' image form 
This is the image form, 'imageform.php'  It uses uploadimage.php to handle the form. Image is saved to the images folder.

***/
echo   	"<center><h3>Upload Images</h3></center> <br/><br />
		<p><center><form action='UploadImage.php' method='POST' enctype='multipart/form-data'>
		<center><input type ='hidden' name='MAX_FILE_SIZE' value='25000' /></center><br /><br/ >File to upload:<br /><br />
		<center><input type='file' name='new_file' /><br /><br /> (25,000 byte limit)<br /><br /></center>
		<center><input type='submit' name='upload' value='Upload the File' /></center>
		<br />
	</form></center></p>";
?>