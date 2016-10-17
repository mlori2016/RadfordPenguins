<?php
/***
Author: Lori Miller
Image upload handler for Team Penguins' Project, This is the image form handler.  It uploads images to images folder. 
to be included in user profile page.
****/

$Dir = "images";
if(isset($_POST['upload'])){
	if(isset($_FILES['new_file'])) {
		if(move_uploaded_file($_FILES['new_file']['tmp_name'],$Dir . "/" . $_FILES['new_file']['name'])==TRUE) {
			chmod($Dir . "/" . $_FILES['new_file']['name'], 0644);
			echo "<p><center>File \"" . htmlentities($_FILES['new_file']['name']) .
			"\" was successfully uploaded! </center></p>
			<br />\n";
		}
		else
			echo "<p><center>There was an error uploading \"" . htmlentities($_FILES['new_file']['name']).
			"\".</center></p><br />\n";
	}
}
?>
</body>
</html>
