<!doctype html>  
<html>  
      <head>  
           <title> Test Page</title>  
      </head>  
      <body style="font-family: sans-serif; color:#6f08a3; background-color:#08a394">
      <center>
	  <?php
	      $name2="";
	      if(isset($_REQUEST['submit']))
		  {
	      $name1=$_REQUEST['name'];
          $name2= " Hello $name1, Welcome to learn PHP ";
		  }
	  ?>
	  <h1> WELCOME MESSAGE </h1>
	  <br>
	  <br>
	  <form method="post";action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  Name: <input type="text" name="name" id="name" placeholder="Enter name">
	  <br>
	  <br>
	  <input type="submit"; name="submit">
	  <br>
	  <br>
	  	  <span class="error" style="color:green";><?php echo $name2;?></span>

	 
      </body>  
</html>  