<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="layout.css">
<title>Your Cart</title>
</head>

<body>
	<audio autoplay loop>
		<source src="kungfu1.mp3" type="audio/mpeg">
	</audio>
	<!-- Header page -->
	<header>
	<div id="icon" >
		<a href="home.php">
			<img src="Ruserba-icon1.png" alt="Ruserba Homepage" width="160" height="160">
		</a>
	</div>

	<div id="title" >
		Ruko Serba Ada
	</div>

	<div id="head-right" >
		<div>
			
			<a href="Cart.php">Go to Cart</a>
			<div id="login" >
				<a href="Login.php">Login</a><br>
				<a href="registrasi_user.php">Register</a>
			</div>
			<div id="logout" >
				<a onclick="logout()" href="Halaman Barang.php">Logout</a><br>
				<a href="Profile.php"><?php $username = "Krisna Fathurahman"; echo $username; ?></a>
			</div>
		</div>

		<!-- kasih jarak ke bawah, MANUAL ^^ -->
		<br><br><br>

		<div style="padding-left:40px">
			<form action="search.php" method="post">
				<input type="text" name="search">
				<input type="submit" value="Search">
			</form>
		</div>
	</div>
	<div id="navcontainer">
		<ul id="navlist">
			
			<li id="active"><a href="Halaman_Barang.php" id="current">Beras</a></li>
			<li><a href="Halaman_Barang.php">Mie</a></li>
			<li><a href="Halaman_Barang.php">Daging</a></li>
			<li><a href="Halaman_Barang.php">Kecap</a></li>
			<li><a href="Halaman_Barang.php">Motor</a></li>
		</ul>
	</div>
			
	<!-- Sampai sini headernya udah beres -->
	</header>
	</br></br></br></br></br></br></br></br></br></br></br></br>
	<div id ="container">
	
		ITEM ANDA :</br>
		<?php
			$con=mysqli_connect("localhost","root","","cart");
			// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$result = mysqli_query($con,"SELECT * FROM list_barang_table");

			while($row = mysqli_fetch_array($result))
			{
				echo $row['nama_barang'] . " - " . $row['jumlah'];
				echo "<br>";
			}

			mysqli_close($con);
		?> 
		<hr noshade size=7>
		Total harga : </br>
		<input type="submit" value="Buy">
	</div>
	<div id="footer">
		<p><b>Copyright © Krisna Fathurahman, Mochammad Dikra Prasetya, Bima Laksmana</b></p>
	</div>
</body>
</html>