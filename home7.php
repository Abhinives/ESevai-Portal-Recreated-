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
$query = "SELECT * FROM signupa where username='$name' and pass='$namep'";
$result=mysqli_query($connecto,$query);
$count=mysqli_num_rows($result);

if($count>0)
	header("Location: admin.php");
else 
	print("<h1>Login unsuccessful");

mysqli_close($connecto)
?>
</body>
</html>
