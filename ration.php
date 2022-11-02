<html>
<head>
<link rel="stylesheet"href="sevai5.css">
<title>Ration card application form</title>
</head>
<script src="s2.js">
 
 </script>
<body bgcolor="#7fad7b" >
<h1 ><u><marquee direction="left" height="40" width="900" behavior="alternate" bgcolor="#375e34"style="color:black; font-family:monospace;">Ration card application form!!!!!</marquee></u></h1>
<form name="form5"  action="card1.php"  enctype="multipart/form-data" onsubmit="return((allLetter6()& gender()& date()& check()& address1())==1)">
<font face="calibiri" size="4" color="black">
<h3 style="font-family: arial black;font-style:bold;color:#004b66;background-color:#cae0c8;">PERSONAL INFORMATION</h3>

Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" size="40" id="text2"><br><br>
<span id="message3" style="color:black "></span><br><br></h2>
Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name=gen size=20 id="gender1" value="Male">Male    <input type=radio id="gender2" name=gen size=30 value="Female">Female<br><br>
<span id="message7" style="color:black "></span><br><br></h2>

Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="text4" id="text5"  size="25"><br><br>
<span id="message6" style="color:black "></span><br><br></h2>
<div id="bigbox">
Member 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mem1" id="mem1"  size="25">&nbsp;&nbsp;&nbsp;&nbsp;Age: <input type="text" name="age1" id="age1"> <br><br>
Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name=member1 size=20 id="gender1" value="Male">Male    <input type=radio id="gender2" name=member1 size=30 value="Female">Female<input type=radio id="gender2" name=member1 size=30 value="None">None<br><br>
</div>
<br>
<div id="bigbox">
Member 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mem2" id="mem2"  size="25">&nbsp;&nbsp;&nbsp;&nbsp;Age: <input type="text" name="age2" id="age2"><br><br>
Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name=member2 size=20 id="gender1" value="Male">Male    <input type=radio id="gender2" name=member2 size=30 value="Female">Female<input type=radio id="gender2" name=member2 size=30 value="None">None<br><br>
</div>
<br>
<div id="bigbox">
Member 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mem3" id="mem3"  size="25">&nbsp;&nbsp;&nbsp;&nbsp;Age: <input type="text" name="age3" id="age3"><br><br>
Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name=member3 size=20 id="gender1" value="Male">Male    <input type=radio id="gender2" name=member3 size=30 value="Female">Female<input type=radio id="gender2" name=member3 size=30 value="None">None<br><br>
</div>
<br>
<div id="bigbox">
Member 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mem4" id="mem4"  size="25">&nbsp;&nbsp;&nbsp;&nbsp;Age: <input type="text" name="age4" id="age4"><br><br>
Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name=member4 size=20 id="gender1" value="Male">Male    <input type=radio id="gender2" name=member4 size=30 value="Female">Female<input type=radio id="gender2" name=member4 size=30 value="None">None<br><br>
</div>
<br>
<div id="bigbox">
Member 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mem5" id="mem5"  size="25">&nbsp;&nbsp;&nbsp;&nbsp;Age: <input type="text" name="age5" id="age5"><br><br>
Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name=member5 size=20 id="gender1" value="Male">Male    <input type=radio id="gender2" name=member5 size=30 value="Female">Female<input type=radio id="gender2" name=member5 size=30 value="None">None<br><br>
</div>
<br>
<div id="bigbox">
Member 6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mem6" id="mem6"  size="25">&nbsp;&nbsp;&nbsp;&nbsp;Age: <input type="text" name="age6" id="age6"><br><br>
Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name=member6 size=20 id="gender1" value="Male">Male    <input type=radio id="gender2" name=member6 size=30 value="Female">Female<input type=radio id="gender2" name=member6 size=30 value="None">None<br><br>
</div>
<br>
Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="text8";type="text" id="text8" placeholder="Enter mobilenumber" size="25">
<span id="message10" style="color:black "></span><br><br></h2>
Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="text6" id="text6" rows="5" cols="50"></textarea><br><br>
<span id="message8" style="color:black "></span><br><br></h2>
<input type="submit" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="CLEAR">
</form>
<br>
<br>

  <button style="font-family:monospace; background-color:green; color:black; height:50px;font-size:20px;width:15%;text-align:left;"><a href="verify3.php" style="text-decoration: None; color:black";>Verify&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>

 </center> </body> </html>