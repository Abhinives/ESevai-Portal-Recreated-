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
$d1=$_GET['mem1'];
$d2=$_GET['age1'];
$d3=$_GET['member1'];
$e1=$_GET['mem2'];
$e2=$_GET['age2'];
$e3=$_GET['member2'];
$f1=$_GET['mem3'];
$f2=$_GET['age3'];
$f3=$_GET['member3'];
$g1=$_GET['mem4'];
$g2=$_GET['age4'];
$g3=$_GET['member4'];
$h1=$_GET['mem5'];
$h2=$_GET['age5'];
$h3=$_GET['member5'];		
$i1=$_GET['mem6'];
$i2=$_GET['age6'];
$i3=$_GET['member6'];

	

$k=$_GET['text8'];

$n=$_GET['text6'];

$m=(rand(10,1000));

$code = '';
for($id = 0; $id < 10; $id++) { 
$code .= mt_rand(0, 9); 
}

$sql="INSERT INTO ration (name, gender, dob, member1, age1, gender1, member2, age2, gender2, member3, age3, gender3, member4, age4, gender4, member5, age5, gender5, member6, age6, gender6, phone, address, num, number) VALUES ('$a','$b','$c', '$d1','$d2','$d3','$e1','$e2','$e3','$f1','$f2','$f3','$g1','$g2','$g3', '$h1','$h2','$h3', '$i1','$i2','$i3', $k, '$n', '$m', '$code')";
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
