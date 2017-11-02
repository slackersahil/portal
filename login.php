<?php
session_start();
?>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<form  action="log.php" method="POST">
	<fieldset style="text-align:center" >
		<legend>LOGIN DETAILS</legend>
<p>ENTER STUDENT NAME:<input type="text" name="fname" placeholder="ENTER ADMIN ID"></p>
<p>ENTER USERNAME:<input type="text" name="uname" placeholder="ENTER YOUR NAME"></p>
<p>ENTER PASSWORD:<input type="password" name="passwd" placeholder="ENTER YOUR PASSWORD"></p>
<br><input type="submit" name="submit" value="LOG IN">
</fieldset>
</form>
</body>
</html>
<?php
session_destroy();
?>