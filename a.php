<?php include'connect.php'; ?>
<?php
if(isset($_POST['submit']))
{
$se=$_POST['search'];
$sql="select col,city,state from `search` where col like "%$se%" or city like "%$se%" or state like "%$se%" ";}
$query=mysqli_query($con,$sql);
while($result=mysqli_fetch_assoc($query))
{
$col= $result['col'];
$city= $result['city'];
$state= $result['state'];
echo "COLLEGE YOU SEARCHED:$col <br> $col IS IN CITY:$city IN STATE:$state.";
}
}
?>
