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
		<div id="icon" style="float:left; padding-left:15px; padding-right:15px;
		padding-top:5px; padding-bottom:5px; background-color:#FF0000">
			<a href="home.php">
				<img src="Ruserba-icon1.png" alt="Ruserba Homepage" width="160" height="160">
			</a>
		</div>

		<div id="title" style="width:790px; height:115px; font-family:Roboto;
		font-size:40px; color:white; float:left;
		padding-top:60px; padding-left:40px; padding-right:40px;
		margin-left:2px; background-color:#FF0000">
			Ruko Serba Ada
		</div>

		<div id="head-right" style="width:18%; height:155px; float:left;
		font-family:Roboto; color:white; padding-right:5px; padding-top:20px;
		padding-left:10px; background-color:#FF0000">
			<div>
				<a href="Cart.php">Go to Cart</a>
				<div id="login" style="float: right; text-align:right">
					<a href="Login.php">Login</a><br>
					<a href="registrasi_user.php">Register</a>
				</div>
				<div id="logout" style="float: right; text-align:right; display:none">
					<a onclick="logout()" href="Halaman Barang.php">Logout</a><br>
					<a href="Profile.php"><?php $username = "Krisna Fathurahman"; echo $username; ?></a>
				</div>
			</div>
	
			<!-- kasih jarak ke bawah, MANUAL ^^ -->
			<br><br><br>
	
			<div style="padding-left:40px">
				<form action="Search Item.php" method="post">
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

