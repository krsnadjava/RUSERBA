<!DOCTYPE html> 
<html>
<head>
	<link rel="stylesheet" type="text/css" href="layout.css">
	
</head>

<body>
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
			Showing result(s) for : "<?php $category = 'Mie Instant'; echo $category; ?>"
		</div>

		<div id="head-right" style="width:18%; height:155px; float:left;
		font-family:Roboto; color:white; padding-right:5px; padding-top:20px;
		padding-left:10px; background-color:#FF0000">
			<div>
				<a href="Cart.php">Go to Cart</a>
				<div id="login" style="float: right; text-align:right">
					<a href="Login.php">Login</a><br>
					<a href="Register.php">Register</a>
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
		<!-- Sampai sini headernya udah beres -->
		</header>

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
							<a href="index.php"><img src="Dummy/BerasRambutan.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Rambutan</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/BerasC4Super.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras C4 Super</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/BerasCapKapak.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Cap Kapak</br></p>
						</div>
					</div>';
		?>			
	</div>
	
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
							<a href="index.php"><img src="Dummy/MieMentah.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Mentah</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/MieGoreng.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Goreng</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/MieRebus.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Rebus</br></p>
						</div>
					</div>';
		?>			
	</div>
	
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
							<a href="index.php"><img src="Dummy/BerasRambutan.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Rambutan</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/BerasC4Super.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras C4 Super</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/BerasCapKapak.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Cap Kapak</br></p>
						</div>
					</div>';
		?>			
	</div>
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
							<a href="index.php"><img src="Dummy/MieMentah.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Mentah</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/MieGoreng.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Goreng</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/MieRebus.jpg" class="resizeimage"></a>
						<p class = "centertext"> Mie Rebus</br></p>
						</div>
					</div>';
		?>			
	</div>
	
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
							<a href="index.php"><img src="Dummy/BerasRambutan.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Rambutan</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/BerasC4Super.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras C4 Super</br></p>
						</div>
					</div>
					<div class = "firstpreview" >
						<div class = "nextimage">
							<a href="index.php"><img src="Dummy/BerasCapKapak.jpg" class="resizeimage"></a>
						<p class = "centertext"> Beras Cap Kapak</br></p>
						</div>
					</div>';
		?>			
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

