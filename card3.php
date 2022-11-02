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
$connectob=mysqli_connect($host,$user,$password,"esevai");
$a=$_GET['username'];
$c=$_GET['text4'];
$b=$_GET['gen'];
$d1=$_GET['taluk'];
$d2=$_GET['text9'];
$d3=$_GET['text6'];
$e1=$_GET['taluk1'];
$e2=$_GET['text7'];
$e3=$_GET['text20'];
$f1=$_GET['text21'];
$f2=$_GET['text8'];
$m=(rand(10,1000));
$sql="INSERT INTO community (name, dob, gender, fname, mname, address, district, pincode, caste, religion, phone, num) VALUES ('$a','$c','$b', '$d1','$d2','$d3','$e1','$e2','$e3','$f1','$f2','$m' )";
if (mysqli_query($connectob,$sql))
  print("<h1>Applied Successfully inorder to verify your certificate use this number $m </h1>");
else{
	print("asdf");
}


mysqli_close($connectob)
?>
</center>
</body>
</html>
