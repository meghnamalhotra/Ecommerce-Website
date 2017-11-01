<?php
error_reporting(0);
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "server not coonected";

}
if(!mysqli_select_db($con,'tutorial'))
{
	echo "not database";
}
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO person VALUES('$name','$email','$message')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
	echo "You have successfully submitted your message.<br>
	we will contact you within 24 hours.";
}
header("refresh:5; url=index.php");


?>