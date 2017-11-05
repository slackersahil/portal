<html>
<head>
<title>login</title>
</head>
<body>
<?php
$name=$_POST['fname'];
$uname=$_POST['uname'];
$password=$_POST['passwd'];
session_start();
$con=mysqli_connect("localhost","root","sahil","ost");
$result=mysqli_query($con,"SELECT * FROM `login` WHERE `fname`='$name' && `uname`='$uname' && `pass`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Login successful for user $name.";
	
}
else
{
	echo "please fill proper details";
	}
?>
</body>
</html>