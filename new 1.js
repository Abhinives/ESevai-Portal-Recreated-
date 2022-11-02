   var flag=0;
   
   var a;
   var b;
   var pw;

   function allLetter()
      { 
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
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message1").innerHTML = "<span style='font-size: 18;color:red; font-family:monospace;'>**Fill the password please!";  
     var flag=0;
	 return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message1").innerHTML = "<span style='font-size: 18;color:red; font-family:monospace;'>**Password length must be atleast 8 characters";  
     var flag=0;
	 return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message1").innerHTML = "<span style='font-size: 18;color:red; font-family:monospace;'>**Password length must not exceed 15 characters";  
     var flag=0;
	 return false;  
  } 
  else {  
  
 
  if(a!=b){
		  document.getElementById("message2").innerHTML = "<span style='font-size: 18;color:red; font-family:monospace;'>**Password is not matched"; 
	     var flag=0;
	}
  else{
     document.getElementById("message2").innerHTML = "<span style='font-size: 18;color:green; font-family:monospace;'>**Strong password";  
  var flag=1;
  } 
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

	  }
    function address(){
		
		add=document.getElementById("adr").value;
		if(add==""){
				  document.getElementById("message5").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Please Enter the address*";
		          var flag=0;
		
				  
		}
	}
	function login(){
		var ab=document.getElementById("lname").value;
		var cd=document.getElementById("lpass").value;
		if((ab=="")&&(cd=="")){
							  document.getElementById("message8").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Please Enter the email and password*";
		}
		else 
			{
							  document.getElementById("message8").innerHTML="<span style='font-size: 18;color:black; font-family:monospace;'>*Login Successful";
		}

	
	}
		
	

			
	

		
