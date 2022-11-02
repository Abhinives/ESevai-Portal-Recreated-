function allLetter6()
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
      document.getElementById("message3").innerHTML="<span style='color:red; font-size: 18; font-family:monospace;'>*Invalid!!! Please Enter alphabet characters only !!*";
	  var flag=0;
      return false;
      }
      }
function gender()
	{

	  
       if (document.getElementById("gender1").checked || document.getElementById("gender2").checked)
       {
          return true;
	   }
       else
	   {
		  document.getElementById("message7").innerHTML="<span style='color:red; font-size: 18; font-family:monospace;'>*Please choose the gender!!*";
          return false;
	   }		   
	}
function date()
	{
	   var x=document.getElementById("text5").value
       if(x=="")
       {
		        document.getElementById("message6").innerHTML="<span style='color:red; font-size: 18; font-family:monospace;'>*Invalid!!! Please Enter the Date of Birth !!*";
               return false;
	   }
        else{
              return true;
		}			
	}
function address1(){
		
		var add=document.getElementById("text6").value;
		if(add==""){
				  document.getElementById("message8").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Please Enter the address*";
		          var flag=0;
				  return false;  
		}
		else{
			return true;
		}
	}
function check()
{
    var num=document.getElementById("text8").value;
	if(num==""){
	  document.getElementById("message10").innerHTML="<span style='font-size:18;color:red; font-family:monospace;'>*please enter the mobile number*";
	  var flag=0;
	  return false;
	  }
	if(isNaN(num)){
	  document.getElementById("message10").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Only numbers are allowed*";
	  var flag=0;
	  return false;
	  }
	  if(num.length<10){
	  document.getElementById("message10").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*please enter 10 digit number*";
	  var flag=0;
	  return false;
	  }
	if(num.length>10){
      document.getElementById("message10").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Only 10 digits allowed*";
	  var flag=0;
	  return false;
	  }
	if((num.charAt(0)!=9)&&(num.charAt(0)!=8)&& (num.charAt(0)!=7)){
	  document.getElementById("message10").innerHTML="<span style='font-size: 18;color:red; font-family:monospace;'>*Invalid.Must start with 9 or 8 or 7*";
	  var flag=0;
	  return false;
	  }
	 else{
		  return true;
	  }
	  

	  }
	