<!doctype html>  
<html>  
      <head>  
           <title> Test Page</title>  
      </head>  
      <body bgcolor="#7fad7b" style="font-family: monospace">
      <center>
	  <?php
	      $host="localhost";
$user="root";
$password="";
$connectoi=mysqli_connect($host,$user,$password,"esevai");
$a=$_GET['username'];
$b=$_GET['taluk'];
$c=$_GET['taluk1'];
$d=$_GET['text4'];
$e=$_GET['gen'];
$f=$_GET['text6'];
$g=$_GET['text7'];
$h=$_GET['text8'];
$h1=$_GET['taluk3'];
$h2=$_GET['text9'];
$i=(rand(10,1000));
$sql="INSERT INTO income (name, taluk, district, dob, gender, address, inco, phone, num, fname, mname) VALUES ('$a','$b','$c', '$d','$e','$f', $g, $h, $i, '$h1','$h2')";
if (mysqli_query($connectoi,$sql))
  print("<h1>Applied Successfully inorder to verify your certificate use this number $i </h1>");

mysqli_close($connectoi)
?>
</center>
</body>
</html>
