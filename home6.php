<html>
<head>

</head>
<body bgcolor="green" style="font-family: monospace">
<center>
<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"esevai");



// Get the submitted form control data values 
$name=$_GET['username'];
$namep=$_GET['pswd'];
$query = "SELECT * FROM signup where username='$name' and pass='$namep'";
$result=mysqli_query($connecto,$query);
$count=mysqli_num_rows($result);

if($count>0)
	header("Location: home5.php");
else 
	print("<h1>Login unsuccessful</h1>");

mysqli_close($connecto)
?>
</center>
</body>
</html>
