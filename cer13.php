<html>
<head>
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
$query = "SELECT * FROM ration where num='$nums'";
$result=mysqli_query($connecto,$query);

require("fpdf.php");
$i=0;
while($row = mysqli_fetch_array($result))
{
$a=$row["name"];
$b=$row["number"];
$c=$row["result"];
$d=$row["dob"];
$e=$row["gender"];

$h=$row["address"];

$j=$row["phone"];

$l1=$row["member1"];
$l2=$row["age1"];
$l3=$row["gender1"];
$m1=$row["member2"];
$m2=$row["age2"];
$m3=$row["gender2"];
$n1=$row["member3"];
$n2=$row["age3"];
$n3=$row["gender3"];
$o1=$row["member4"];
$o2=$row["age4"];
$o3=$row["gender4"];
$p1=$row["member5"];
$p2=$row["age5"];
$p3=$row["gender5"];
$q1=$row["member6"];
$q2=$row["age6"];
$q3=$row["gender6"];

}


?>

                     : 
<?php 
ob_start(); 
$pdf=new FPDF();

$pdf->AddPage();
$pdf->SetFont("Arial","B",16);

$pdf->Image('logo.jpg',90,0,33,25,'JPG',0,1,'C',true);
$pdf->Cell(0,17,"",0,1,'L');
$pdf->SetFillColor(34,139,34);

$pdf->Cell(0,10,"GOVERNMENT OF TAMILNADU",0,1,'C',true);
$pdf->Cell(0,5,"",0,1,'L');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(0,10,"SMART CARD",0,1,'C',true);
$pdf->Cell(0,8,"",0,1,'L');
$pdf->Cell(0,0,"",1,1,'L');
$pdf->Cell(0,8,"",0,1,'L');
$pdf->SetFillColor(60,179,113);
$pdf->Cell(0,10,"Name:                          $a",0,1,'B');
$pdf->Cell(0,10,"Data of Birth:               $d",0,1,'B');

$pdf->Cell(0,10,"Gender:                         $e",0,1,'B');
$pdf->Cell(0,10,"Member1:                     $l1",0,1,'B');
$pdf->Cell(0,10,"Age:                              $l2",0,1,'B');
$pdf->Cell(0,10,"Gender:                        $l3",0,1,'B');
$pdf->Cell(0,5,"",0,1,'L');
$pdf->Cell(0,10,"Member2:                    $m1",0,1,'B');
$pdf->Cell(0,10,"Age:                              $m2",0,1,'B');
$pdf->Cell(0,10,"Gender:                        $m3",0,1,'B');
$pdf->Cell(0,5,"",0,1,'L');
$pdf->Cell(0,10,"Member3:                    $n1",0,1,'B');
$pdf->Cell(0,10,"Age:                              $n2",0,1,'B');
$pdf->Cell(0,10,"Gender:                        $n3",0,1,'B');
$pdf->Cell(0,5,"",0,1,'L');
$pdf->Cell(0,10,"Member4:                    $o1",0,1,'B');
$pdf->Cell(0,10,"Age:                              $o2",0,1,'B');
$pdf->Cell(0,10,"Gender:                        $o3",0,1,'B');
$pdf->Cell(0,5,"",0,1,'L');
$pdf->Cell(0,10,"Member5:                    $p1",0,1,'B');
$pdf->Cell(0,10,"Age:                              $p2",0,1,'B');
$pdf->Cell(0,10,"Gender:                        $p3",0,1,'B');
$pdf->Cell(0,5,"",0,1,'L');
$pdf->Cell(0,10,"Member6:                    $q1",0,1,'B');
$pdf->Cell(0,10,"Age:                              $q2",0,1,'B');
$pdf->Cell(0,10,"Gender:                        $q3",0,1,'B');
$pdf->Cell(0,5,"",0,1,'L');

$pdf->Cell(0,10,"Address:                      $h",0,1,'B');
$pdf->Cell(0,5,"",0,1,'L');

$pdf->Cell(0,10,"Phone number:            $j",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');

$file=time().'.pdf';
$pdf->Output($file,'D');
ob_end_flush(); ?></h3>

</body>
</html>