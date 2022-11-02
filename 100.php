<html>
<head>
<title>Registration Form</title>
</head>
<script src="script1.js">
 
 </script>
<body bgcolor="#7fad7b" >
<h1 ><u><marquee direction="left" height="40" width="1520" behavior="alternate" bgcolor="#375e34"style="color:black; font-family:monospace;">Welcome to the Registration Portal!!!!!</marquee></u></h1>
<form name="form1" action="s.php" onsubmit="return((allLetter()& allLetter1()& verifyPassword()& check()& address1())==1)">
<font face="calibiri" size="4" color="black">
Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" size="40" id="text2"><br><br>
<span id="message3" style="color:black "></span><br><br></h2>

Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pswd" id="pswd";><br><br>
<span id="message1" style="color:black "></span><br><br></h2>
Re-type Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="pwd"; name="pwd"><br><br>
<span id="message2" style="color:black "></span><br><br></h2>


<h3 style="font-family: arial black;font-style:bold;color:#004b66;background-color:#cae0c8;">PERSONAL INFORMATION</h3>
Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"name="text1"id="text1" placeholder="Enter name" size="25">
<span id="message" style="color:black "></span><br><br></h2>
Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="adr" id="adr" rows="5" cols="50"></textarea><br><br>
<span id="message5" style="color:black "></span><br><br></h2>

Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="mbl";type="text" id="mobilenumber" placeholder="Enter mobilenumber" size="25">
<span id="message4" style="color:black "></span><br><br></h2>

<input type="submit" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="CLEAR">
</form> </center> </body> </html>