<?php
while($row = mysqli_fetch_array($result))
{
$a[$i]=$row["name"];
$b[$i]=$row["number"];
$c[$i]=$row["result"];
$d[$i]=$row["dob"];
$e[$i]=$row["gender"];
$f[$i]=$row["father"];
$g[$i]=$row["mother"];
$h[$i]=$row["address"];
$i[$i]=$row["district"];
$j[$i]=$row["phone"];

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