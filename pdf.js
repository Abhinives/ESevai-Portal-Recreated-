window.onload=function(){
	document.getElementById("download").addEventListener("click",()=>{ 
	    const bigbox= this.document.getElementById("bigbox");
		console.log(bigbox);
		console.log(window);
		html2pdf().from(bigbox).save();
	
	})
}