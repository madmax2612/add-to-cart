<?php
if($_FILES["file"]["error"]>0)
{
	echo "Error:".$_FILES["file"]["error"]."<br/>";
}
else
{
	echo "stored in:".$_FILES["file"]["tmp_name"];
	
	move_uploaded_file($_FILES["file"]["tmp_name"], "images/" .$_FILES["file"]["name"]);
}
?>