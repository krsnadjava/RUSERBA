<!DOCTYPE html> 
<html>
<head>
	<title>Ruko Serba ada - Home</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	
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
	<div class = "top5title">
		<label> Top Three Beras<label></br>
	</div>
	<div class = "top3cat">
		<?php
			//$count=0; 
			//while ( baris dari top three dari sql && $count < 3 )
			//{
				echo'<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/BerasRambutan.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Rambutan</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/BerasC4Super.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras C4 Super</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/BerasCapKapak.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Cap Kapak</br></p>
						</div>
					</div>';
		?>			
	</div>
	</div>
	
	<div id="container">
	<div class = "top5title">
		<label> Top Three Mie<label></br>
	</div>
	<div class = "top3cat">
		<?php
			//$count=0; 
			//while ( baris dari top three dari sql && $count < 3 )
			//{
				echo'<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/MieMentah.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Mentah</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/MieGoreng.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Goreng</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/MieRebus.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Rebus</br></p>
						</div>
					</div>';
		?>			
	</div>
	</div>
	<div id="container">
	<div class = "top5title">
		<label> Top Three Beras<label></br>
	</div>
	<div class = "top3cat">
		<?php
			//$count=0; 
			//while ( baris dari top three dari sql && $count < 3 )
			//{
				echo'<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/BerasRambutan.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Rambutan</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/BerasC4Super.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras C4 Super</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/BerasCapKapak.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Cap Kapak</br></p>
						</div>
					</div>';
		?>			
	</div>
	</div>
	<div id="container">
	<div class = "top5title">
		<label> Top Three Mie<label></br>
	</div>
	<div class = "top3cat">
		<?php
			//$count=0; 
			//while ( baris dari top three dari sql && $count < 3 )
			//{
				echo'<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/MieMentah.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Mentah</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/MieGoreng.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Goreng</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/MieRebus.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Rebus</br></p>
						</div>
					</div>';
		?>			
	</div>
	</div>
	<div id="container">
	<div class = "top5title">
		<label> Top Three Beras<label></br>
	</div>
	<div class = "top3cat">
		<?php
			//$count=0; 
			//while ( baris dari top three dari sql && $count < 3 )
			//{
				echo'<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/BerasRambutan.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Rambutan</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/BerasC4Super.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras C4 Super</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="Halaman_Barang.php"><img src="Dummy/BerasCapKapak.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Cap Kapak</br></p>
						</div>
					</div>';
		?>			
	</div>
	</div>


	<div id="footer">
		<div class = "mekanisme">
		<p class = "centertext"> Mekanisme Pembayaran </br></br>
		1. Pembeli melakukan login atau sign up </br>
		2. Pembeli memesan produk-produk yang ingin dibeli </br>
		3. Pembeli melakukan checkout dengan memilih cart </br>
		4. Pembeli memilih mekanisme pembayaran, yaitu dengan kartu kredit yang dipilih </br>
	</div>
	<p><b>Copyright © Krisna Fathurahman, Mochammad Dikra Prasetya, Bima Laksmana</b></p>
	</div>
	
</body>

</html>

