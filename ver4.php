<html>
<head>
<title>asdfsdfasd</title>

</head>
<body bgcolor="green" style="font-family: monospace">
<center>




<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"esevai");
$nums=$_GET['ids'];
$query = "SELECT * FROM community where num=" . $nums;
$result=mysqli_query($connecto,$query);
while($row = mysqli_fetch_array($result))
{
$a=$row["result"];
$b=$row["num"];
}
if($a=="")
{
	print("<h1>Wait for it</h1>");
}
else{
	print("<h1>Completed</h1>");
	print("<form action=cer12.php method=post>");
	print("<input type=hidden name=id2 value='".$b."'>");
	print("<input type=submit>");
	print("</form>");
}




?>
</center>
</body>
</html>