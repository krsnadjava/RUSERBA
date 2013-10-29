<!DOCTYPE html>
<html>
<head>
	<script src="login.js"></script>
</head>
<body onload="setTimeout(window.location='halaman_barang.php?asd=10',1500)">
	<?php
		setcookie("user","",time()-3600);
		echo "DONE";
	?>
</body>
</html>