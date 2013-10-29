<!DOCTYPE html>

<html>
	<head>
		<!-- judul tab nya, wajib ini -->
		<title>Search Result(s)</title>

		<!-- Javascript -->
		<script src="daftar_barang.js"></script>
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="daftar_barang.css">
	</head>

	<body>
		<!-- Header page -->
		<header>
		<div id="icon">
			<a href="home.php">
				<img src="Ruserba-icon1.png" alt="Ruserba Homepage" width="160" height="160">
			</a>
		</div>

		<div id="title">
			Showing result(s) for : "<?php $search = $_POST["search"]; echo $search; ?>"
		</div>

		<div id="head-right">
			<div>
				<a href="Cart.php">Go to Cart</a>
				<div id="login">
					<a href="Login.php">Login</a><br>
					<a href="registrasi_user.php">Register</a>
				</div>
				<div id="logout">
					<a onclick="logout()" href="Halaman Barang.php">Logout</a><br>
					<a href="Profile.php"><?php $username = "Krisna Fathurahman"; echo $username; ?></a>
				</div>
			</div>
	
			<!-- kasih jarak ke bawah, MANUAL ^^ -->
			<br><br><br>
	
			<div id="search-tab">
				<form action="search.php" method="post">
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
			
			$result = mysqli_query($con, "SELECT * FROM barang WHERE nama_barang LIKE '%" . $search ."%'");
			
			for($i = 0; $i < 10 && $nama = mysqli_fetch_array($result); $i++) {
				
				echo '<div style="padding-top:200px">
						<div style="text-align:center">
							<img src="'. $nama['image'] . '" width="300" height="300">
							<div>
								<a href="detail.php?name=' . $nama['nama_barang'] . '">' . $nama['nama_barang'] . '</a><br>Rp ' . $nama['harga'] . ',-
								<form>
									Jumlah :
									<input type="number" size="4" name="sum">
									<input type="submit" value="Buy">
								</form>
							</div>
						</div>
					</div>';
			}
			mysqli_close($con);
		?>
		</section>
		<br><br>
		
	</body>
</html>