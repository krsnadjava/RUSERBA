var login = true;
function changeLogin(){
	if(login==true) {
		x = document.getElementById("login");
		x.style.display="none";
		y = document.getElementById("logout");
		y.style.display="block";
	}
}

function logout(){
	alert('You are successfully logout');
	login = false;
	x = document.getElementById("login");
	x.style.display="block";
	y = document.getElementById("logout");
	y.style.display="none";
}

function loadItems() {
	for(var i = 0; i < 4; i++) {
		document.write('<div style="padding-top:200px">');
		document.write('	<div style="text-align:center">');
		document.write('		<img src="nissin_yakisoba.jpeg" width="300" height="300">');
		document.write('		<div>');
		document.write('			Nissin Yakisoba with Mayonaise<br>Rp 2.100,-');
		document.write('		</div>');
		document.write('	</div>');
		document.write('</div>');
	}
}