   var flag=0;
   
   var a;
   var b;
   var pw;

   function allLetter()
      { 
	  	  var name=document.getElementById("text1").value

      var letters = /^[A-Za-z.. ]+$/;
      if(name.match(letters))
      {
		  var flag=1;
         return true;
      }
      else
      {
      document.getElementById("message").innerHTML="<span style='font-size: 18; font-family:monospace;'>*Invalid!!! Please Enter alphabet characters only !!*";
	  var flag=0;
      return false;
      }
      }
	function allLetter2()
      { 
	  	  var name4=document.getElementById("text3").value

      var letters4 = /^[A-Za-z.. ]+$/;
      if(name4.match(letters4))
      {
		  var flag=1;
         return true;
      }
      else
      {
      document.getElementById("message11").innerHTML="<span style='font-size: 18; font-family:monospace;'>*Invalid!!! Please Enter alphabet characters only !!*";
	  var flag=0;
      return false;
      }
      }
	function allLetter1()
      { 
	  var name2=document.getElementById("text2").value
      var letters = /^[A-Za-z.. ]+$/;
      if(name2.match(letters))
      {
      return true;
	  var flag=1;
      }
      else
      {
      document.getElementById("message3").innerHTML="<span style='font-size: 18; font-family:monospace;'>*Invalid!!! Please Enter alphabet characters only !!*";
	  var flag=0;
      return false;
      }
      }
  function verifyPassword() { 
   var a=document.getElementById("pswd").value;
      var b=document.getElementById("pwd").value;
   var pw = document.getElementById("pswd").value;
var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");
if(pw.match(mediumRegex))
{
			  if(a!=b){
		  document.getElementById("message2").innerHTML = "<span style='font-size: 18;color:red; font-family:monospace;'>**Password is not matched"; 
	     var flag=0;
		 return false;
	}
  else{
     document.getElementById("message2").innerHTML = "<span style='font-size: 18;color:green; font-family:monospace;'>**Strong password";  
  var flag=1;
  return true;
  } 
			  
}
  //check empty password field  
   
  else {  
  
 			  document.getElementById("message2").innerHTML = "<span style='font-size: 18;color:red; font-family:monospace;'>**Password is not strong enough";
            return false;
  
  }  
} 
function income(){
		var income=document.getElementById("income").value;
		if(income==""){
							  document.getElementById("message29").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Please Enter the income*";
							  return false;
		}
		else 
			{
							  return true;
		}
	}
		 
function check()
{
    var num=document.getElementById("mobilenumber").value;
	if(num==""){
	  document.getElementById("message4").innerHTML="<span style='font-size:18;color:red; font-family:monospace;'>*please enter the mobile number*";
	  var flag=0;
	  return false;
	  }
	if(isNaN(num)){
	  document.getElementById("message4").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Only numbers are allowed*";
	  var flag=0;
	  return false;
	  }
	  if(num.length<10){
	  document.getElementById("message4").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*please enter 10 digit number*";
	  var flag=0;
	  return false;
	  }
	if(num.length>10){
      document.getElementById("message4").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Only 10 digits allowed*";
	  var flag=0;
	  return false;
	  }
	if((num.charAt(0)!=9)&&(num.charAt(0)!=8)&& (num.charAt(0)!=7)){
	  document.getElementById("message4").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Invalid.Must start with 9 or 8 or 7*";
	  var flag=0;
	  return false;
	  }
	 else{
		  return true;
	  }
	  

	  }
    function address1(){
		
		var add=document.getElementById("adr").value;
		if(add==""){
				  document.getElementById("message5").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Please Enter the address*";
		          var flag=0;
				  return false;  
		}
		else{
			return true;
		}
	}
	function login(){
		var ab=document.getElementById("lname").value;
		var cd=document.getElementById("lpass").value;
		if((ab=="")&&(cd=="")){
							  document.getElementById("message8").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Please Enter the email and password*";
							  return false;
		}
		else 
			{
							  document.getElementById("message8").innerHTML="<span style='font-size: 18;color:black; font-family:monospace;'>*Login Successful";
							  return true;
		}

	
	}
	
	

			
	

		
