var months = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
]

function showMonth () {
	var v = new Date().getMonth();
	document.getElementById("month").innerHTML = v.month; 

}