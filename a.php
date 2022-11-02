<html>
<head>
<meta charset="utf-8">
<title>Settype and Typecasting</title>
</head>
<body style="background-color:#ffecb3">
<?php $string="3.5 seconds";
$double=79.2;
$integer=12;?>
<p><h1><u>Original Values:</h1></p></u>
<?php print("<p><h2>$string is a/an ".gettype($string)."</h2></p>");
print("<p><h2>$double is a/an ".gettype($double)."</h2></p>");
print("<p><h2>$integer is a/an ".gettype($integer)."</p></h2>");?>
<p><h1><u>Converting to other datatypes:</h2></p></u>
<?php print("<h2><p>$string");
settype($string,"double");
print(" as a double is $string</p></h2>");
print("<h2><p>$string");
settype($string,"integer");
print(" as an integer is $string</p></h2>");
settype($string,"string");
print("<p><h2>Converting back to a string results in $string</p></h2>" );
$data="98.6 degrees";
print("<p><h2> Before casting: $data is a ".gettype($data)."</p></h2>");
print("<p><h2> Using type casting instead :</p>
<p>as a double: ".(double)$data."</p></h2>".
"<h2><p>as an integer: ".(integer)$data."</p></h2>");
print("<p><h2>After casting :$data is a ".gettype($data)."</p></h2>");?>
</body>
</html>