<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"esevai");
$a=$_POST['id2'];
$b=$_POST['id'];
print("$a");
$query = "UPDATE ration SET result='$b' WHERE num='$a'";
if(mysqli_query($connecto,$query))
	header("Location: 2.html");
else
	echo("Not update");
?>