function NOA()
{
	var noa=document.get ElementById("data1").value
	var allletters= /^[A-Za-z.. ]+$/;
	if(noa.match(allletters))
	{	
return true
	var flag=1;
	}
	else{
		document.getElementById("text1").innerHTML=<span style'color:yellow font-family:times new roman'>ALPHABETS ONLY ALLOWED
		var flag=0;
		return false
	}
}
function FNME()
{
	var fnme=document.getElementById("data2").value
	var allletters= /^[A-Za-z.. ]+$/;
	if(fnme.match(allletters))
	{	
return true
	var flag=1;
	}
	else{
		document.getElementById("text2").innerHTML=<span style'color:yellow font-family:times new roman'>ALPHABETS ONLY ALLOWED
		var flag=0;
		return false
	}
}
function GEN()
{
	if(document.getElementById("data3").checked||document.getElementById("data").checked)
	{	
return true
	}
	else
	{
		document.getElementById.("text3").innerHTML=<span style'color:yellow font-family:times new roman'>SELECTION REQUIRED**
		return false
	}
}
function RA()
{
	if(document.getElementById.("text4").value=="")
	{
		document.getElementById.("data4").innerHTML=<span style 'color:yellow font-family:times new roman'>Address required***
		var flag=0;
		return false
		}
	else{
	return true
	}
}
function CAS()
{
	if(document.getElementById.("text5").value=="")
	{
		document.getElementById.("data5").innerHTML=<span style 'color:yellow font-family:times new roman'>
		var flag=0;
		reuturn false
	}
	else{
	return true}
}
function COMM()
{
	if(document.getElementById.("text6").value="")
	{
		document.getElementById.("data6").innerHTML=<span style='color:yellow font family:timesnew roman'>Required****
	    var flag=0;
		retunr false
	}
	else{
	returrn true}
function check()
{
val=document.getElementById.("text4").value
if(isNaN(val))
{
document.getElementById("data4").innerHTML=<span style='color:red font-family:monospace'>only numbers allowwed****
}
	
	
	