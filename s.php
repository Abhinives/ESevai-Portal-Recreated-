<!doctype html>  
<html>  
      <head>  
           <title> Test Page</title>  
      </head>  
      <body bgcolor="green" style="font-family:monospace">
      <center>
	  <?php
	      $host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"esevai");
$usern=$_GET['username'];
$pass=$_GET['pswd'];
$repass=$_GET['pwd'];
$name=$_GET['text1'];
$add=$_GET['adr'];
$phno=$_GET['mbl'];
$sql="INSERT INTO signup (username, pass, repass, name, address, phone) VALUES ('$usern','$pass','$repass','$name','$add',$phno)";
if (mysqli_query($connecto,$sql))
  echo "<h1>Account created Successfully</h1>";

mysqli_close($connecto)
?>
</body>
</html>

	  