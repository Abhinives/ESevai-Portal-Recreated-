<html>
<head>
<link rel="stylesheet"href="sevai6.css">
<title>aadhaar</title>
</head>
<body>
<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"esevai");
$query = "SELECT * FROM aadhaar where result=''";
$result=mysqli_query($connecto,$query);
$i=0;
?>
<table border="1" width="900" height="50px" >
<tr bgcolor="#98e34d" height="50">
<th>NAME</th>
<th>AADHAAR NUMBER</th>
<th>RESULT</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
$a[$i]=$row["name"];
$b[$i]=$row["number"];
$c[$i]=$row["result"];
$d[$i]=$row["num"];
print("<tr><form action=update.php method=post>");
print("<th>$a[$i]</th>");
print("<th>$b[$i]</th>");
print("<th><input type=radio name=id value='yes'><input type= submit></th></tr>");
print("<th><input type=hidden name=id2 value='".$row["num"]."'></th></tr>");
print("</form></tr>");
print("<br>");
$i=$i+1;
}
$j=0;

?>

</body>
</html>