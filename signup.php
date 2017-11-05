<html>
<head>
	<title>
		CV GENERATOR
	</title>
	<body style="font-family: Times New Roman, Times, serif;font-style: italic;font-size: 30px;">
<form action="" method="POST">
		<fieldset>
				<legend>
					SIGN UP
				</legend>
<center>
FIRST NAME:<input type="text" name="fname" id="fname" autofocus placeholder="ENTER YOUR COMPLETE NAME" >
				<br>
EMAIL ID:<input type="text" name="email" id="email"  placeholder="ENTER YOUR EMAIL ID" >
				<br>
USER NAME:<input type="text" name="uname">
				<br>
PASSWORD:<input type="password" name="pass" id="pass">
				<br>
<input type="submit" value="CLICK TO CREATE YOUR ACCOUNT" name="submit"  style="color:red;font-size:150%;">
</center>
</fieldset>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
if(empty($fname) ||(!preg_match("/[a-zA-Z ]{3,}/",$fname)) )
		{
		echo"<br>enter valid name in more than 3 character";
		}
	elseif(empty($email) or (!preg_match("/[a-zA-]{3,}[.]*[a-zA-Z0-9]*@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}/",$email)) )
		{
		echo"<br>enter valid email address";
		}
	elseif(empty($uname) or (!preg_match("/[A-Za-z0-9]{5,}/",$uname)) )
		{
		echo"<br>enter valid username details";
		}elseif(empty($pass) or (!preg_match("/[A-Za-z0-9]{5,}/",$pass)) )
		{
		echo"<br>enter valid contact details";
		}
	else{
$co=mysqli_connect('localhost','root','sahil','ost');
mysqli_query($co,"INSERT INTO login (fname,email,uname,pass) VALUES('$fname','$email','$uname','$pass')");
		if(mysqli_affected_rows($co) > 0){
			header("Location: index.php");
		} else {
		echo mysqli_error ($co);
		}
}
}
?>
