<?php require_once('conf/config.php');?>
<?php
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
	mysql_query("INSERT INTO `form` SET `name`='$name',`lastname`='$lastname',`username`='$username',`password`='$password',`email`='$email', `gender`='$gender',`birthday`='$birthday'")or die(mysql_error());
?>