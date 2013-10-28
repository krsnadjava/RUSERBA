<!DOCTYPE html>

<html>
	<head>
		<!-- judul tab nya, wajib ini -->
		<title>Halaman Barang</title>

		<!-- Javascript -->
		<script src="daftar_barang.js"></script>
	</head>

	<body>
		<!-- Header page -->
		<header>
		<div id="icon" style="float:left; padding-left:15px; padding-right:15px;
		padding-top:5px; padding-bottom:5px; background-color:#FF0000">
			<a href="Home.html">
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
		<section>
		<?php
			$con = mysqli_connect("localhost","root","","ruserba");
			if(mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			$result = mysqli_query($con, "SELECT * FROM barang WHERE kategori = '" . $category ."'");
			
			/*while($nama = mysqli_fetch_array($result)){
				echo '<img src="' . $nama['image'] . '" width="300" height="300">';
				echo $nama['nama_barang'];
				echo '<br>';
			}*/
			
			for($i = 0; $i < 15 && $nama = mysqli_fetch_array($result); $i++) {
				
				echo '<div style="padding-top:200px">
						<div style="text-align:center">
							<img src="'. $nama['image'] . '" width="300" height="300">
							<div>
								' . $nama['nama_barang'] . '<br>Rp ' . $nama['harga'] . ',-
							</div>
						</div>
					</div>';  
			}
			mysqli_close($con);
		?>
		
		</section>
	</body>
</html>