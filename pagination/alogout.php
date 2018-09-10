<?php
session_start();

unset($_SESSION['user_status']);
unset($_SESSION['user_name']);

session_destroy();

echo"thank you,visit again";
echo"<br>";

echo"<a href='alogin.html'/>Back</a>";
?>
