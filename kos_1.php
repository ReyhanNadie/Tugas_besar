<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Judul Website-->
	<title>Sewa Kos</title>
	<!--Link CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<title>Kos 1</title>
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="menu">
				<a href="index.php">Home</a>
			</div>
		</nav>
	</header>

	<main>
		<div class="content">
			<center>
				<img src="assets/pictures/Picture1.png" style="border: solid 1px;">
				<h1>Kos 1</h1><br>
				<p class="price">Harga : Rp1.800.000</p><br>
			
				<table border="1px">
					<tr>
						<td>Jumlah Kamar</td>
						<td width="50px" align="center">:</td>
						<td>5</td>
					</tr>
					<tr>
						<td>Luas Rumah</td>
						<td width="50px" align="center">:</td>
						<td>30 x 40</td>
					</tr>
					<tr>
						<td>Putri/Putri/Campuran</td>
						<td width="50px" align="center">:</td>
						<td>Bebas</td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td width="50px" align="center">:</td>
						<td width="300px">Disewakan atau dikontrakan rumah didaerah kuin dengan jumlah kamar 5 buah beserta fasilitasnya (tv,sofa,Kasur, ac dll). Dengan minimal 2 bulan pembayaran.</td>
					</tr>
				</table>
				<br>

				<div>
					<button onclick="contactFunction()">Hubungi Pemilik</button>
				</div>
			</center>
		</div>
	</main>

	<footer>
		<a href="https://www.instagram.com/yasrya_/" class="fa fa-instagram"></a>
		<a href="https://www.instagram.com/reyhannadie/" class="fa fa-instagram"></a>
		<p>&copy Surya & Reyhan</p>
	</footer>

	<script>
		function contactFunction(){
			alert("Nomor Handphone : 082255479321")
		}
	</script>
</body>
</html>