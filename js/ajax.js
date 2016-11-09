//Function for ajax object creation
function ajaxFunction(str) {
	
	console.log("Kosmiczny");
	
	if (str.length==0) {
		document.getElementById("livesearch").innerHTML="";
		return;
	}
	
	var ajaxRequest;
	try{
		ajaxRequest = new XMLHttpRequest();
	}catch (e){
		try {
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}catch (e) {
			try {
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e) {
				alert("coś się popsuło i nie było mnie słychać");
				return false
			}
		}
	}
	ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                   document.getElementById('livesearch').innerHTML = ajaxRequest.responseText;
                  }
               }
    ajaxRequest.open("GET", "ajaxDbHandler.php?q="+str,true);
    ajaxRequest.send();
               
}



	
