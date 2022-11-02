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
$b=$_GET['text4'];
$c=$_GET['gen'];
$d=$_GET['taluk'];
$f=$_GET['text9'];
$g=$_GET['text6'];
$h=$_GET['taluk1'];
$if=$_GET['text7'];
$j=$_GET['text8'];

$k=(rand(10,1000));

$code = '';
for($i = 0; $i < 12; $i++) { 
$code .= mt_rand(0, 9); 
}

$sql="INSERT INTO aadhaar (name, dob, gender, father, mother, address, district, pincode, phone, num, number) VALUES ('$a','$b','$c', '$d','$f', '$g', '$h', '$if', $j, $k, '$code')";
if (mysqli_query($connectob,$sql))
  print("<h1>Applied Successfully inorder to verify your certificate use this number $k </h1>");
else{
	print("asdf");
}


mysqli_close($connectob)
?>
</center>
</body>
</html>
