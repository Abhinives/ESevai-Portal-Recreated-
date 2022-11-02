<html>
<head>
<link rel="stylesheet"href="sevai10.css">
<title>aadhaar</title>
</head>
<body bgcolor="#7fad7b" style="font-family: sans-serif";>

<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"esevai");
$nums=$_POST['id2'];
$query = "SELECT * FROM aadhaar where num='$nums'";
$result=mysqli_query($connecto,$query);
$i=0;
while($row = mysqli_fetch_array($result))
{
$a=$row["name"];
$b=$row["number"];
$c=$row["result"];
$d=$row["dob"];
$e=$row["gender"];
$f=$row["father"];
$g=$row["mother"];
$h=$row["address"];
$i=$row["district"];
$j=$row["phone"];
$k=$row["pincode"];
$l=$row["number"];
}
?>
<div id="bigbox">
<center>
<span class="text"><img src="https://lh3.googleusercontent.com/1ge3-IA3oMzmCExLjf0LG9SPnP8M9-bOXeGI-k5paT4KqxoMGnjzpR7XxjIy7veHpgVsFZub4iiQ4nIcdx1fan8OtdwJ80HAhByLw4MVcHyswyuP4qYTcE8mLGV9x16Wg5Hr4f8mhQ=w2400?source=screenshot.guru"height="70";><h2 style="background-color:#21a343";>&nbsp;GOVERNMENT OF TAMILNADU</h2></span>
<h2 style="background-color:#d6803e";>&nbsp;AADHAAR CARD</h2>
<hr> 
</center>
<br>
<pre style="font-family:sans-serif";>
<h3> Name                     : <?php echo "$a" ?></h3>
<h3> Date of birth          : <?php echo "$d" ?></h3>
<h3> Gender                   : <?php echo "$e" ?></h3>
<h3> Father's Name       : <?php echo "$f" ?></h3>
<h3> Mother's Name       : <?php echo "$g" ?></h3>
<h3> Address                  : <?php echo "$h" ?></h3>
<h3> District                    : <?php echo "$i" ?></h3>
<h3> Pincode                  : <?php echo "$k" ?></h3>
<h3> Phone Number      : <?php echo "$j" ?></h3>
<hr>	
<h3> Aadhaar Number    : <?php echo "$l" ?></h3>
</pre>
</div>
</center>
</body>
</html>