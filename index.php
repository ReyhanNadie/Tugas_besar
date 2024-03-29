<!DOCTYPE html>
<?php
session_start()

?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Judul Website-->
	<title>Sewa Kos</title>
	<!--Link CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>

<body>
	<header>
		<nav class="navbar">
			<div class="menu">
				<a class="active" href="index.php">Home</a>
				<a href="#" onclick="myFunction()" class="dropbtn">Filter</a>
				<div class="dropdown">
					<!-- <button onclick="myFunction()" class="dropbtn">Dropdown</button> -->
					<div id="myDropdown" class="dropdown-content">
						<a href="#" id="murah">Termurah</a>
						<a href="#" id="mahal">Termahal</a>
						<a href="#" id="putra">Putra</a>
						<a href="#" id="putri">Putri</a>
						<a href="#" id="campur">Campur</a>
					</div>
				</div>
				<?=isset($_SESSION["Data_login"])?"<a href='#'>Selamat Datang ".$_SESSION["Data_login"]."</a>":""?>
				<a href="login.php?logout=true"> Logout
				</a>
			</div>
		</nav>
	</header>
	<main>
		<div class="container">
			<article>

				<h2>List Kos</h2><br>
				<div class="wrap">
					<!-- <div class="card">
						<div class="frame-img"><img src="assets/pictures/Picture1.png" alt="Kos 1"></div>
						<h1>Kos 1</h1><br>
						<p class="price">Rp1.800.000</p><br>
						<p><a href="kos_1.html">Selengkapnya</a></p>
					</div> -->
				</div>
			</article>
		</div>
	</main>
	<footer>
		<a href="https://www.instagram.com/yasrya_/" class="fa fa-instagram"></a>
		<a href="https://www.instagram.com/reyhannadie/" class="fa fa-instagram"></a>
		<p>&copy Surya & Reyhan</p>
	</footer>
	

	<!-- JavaScript -->
	<script src="./assets/js/jquery-3.5.1.min.js"></script>
	<script>
		$("#murah").click(function () {
			list_kost("murah");
		});
		$("#mahal").click(function () {
			list_kost("mahal");
		});
		$("#putra").click(function () {
			list_kost("putra");
		});
		$("#putri").click(function () {
			list_kost("putri");
		});
		$("#campur").click(function () {
			list_kost("campur");
		});




		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown menu if the user clicks outside of it
		window.onclick = function (event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		}

		list_kost("none");

		function list_kost(filter) {
			// LIST KOS
			var nm_kos = [
				["kos 1", 1800000, "1", "L"],
				["kos 2", 400000, "2", "C"],
				["kos 3", 500000, "3", "C"],
				["kos 4", 300000, "4", "L"],
				["kos 5", 800000, "5", "P"],
				["kos 6", 450000, "6", "P"],
				["kos 7", 550000, "7", "L"],
				["kos 8", 450000, "8", "P"],
			];
			var sortData;
			if (filter == "murah") {
				nm_kos.sort(termurah);
				sortData = "all";
			} else if (filter == "mahal") {
				nm_kos.sort(termahal);
				sortData = "all";
			} else if (filter == "putra") {
				sortData = "L";
			} else if (filter == "putri") {
				sortData = "P";
			} else if (filter == "campur") {
				sortData = "C";
			} else {
				sortData = "all";
			}
			// ------------------
			function termurah(a, b) {
				if (a[1] === b[1]) {
					return 0;
				} else {
					return (a[1] < b[1]) ? -1 : 1;
				}
			}

			function termahal(a, b) {
				if (a[1] === b[1]) {
					return 0;
				} else {
					return (a[1] > b[1]) ? -1 : 1;
				}
			}
		
			function rubahRp(angka) {
				var reverse = angka.toString().split('').reverse().join(''),
					ribuan = reverse.match(/\d{1,3}/g);
				ribuan = ribuan.join(',').split('').reverse().join('');
				ribuan = ribuan;
				return ribuan;
			}
			var no = 1;
			var fill = "";
			console.log(sortData);
						for (var z = 0; z < nm_kos.length; z++) {
				if (sortData == "all") {
					if (nm_kos[z][1] == "-") {
						fill +=
							`
						<div class="card disabled">
							<div class="frame-img"><img src="assets/pictures/unavailable.jpg" alt="Kos ` + z + `"></div>
							<h1>` + nm_kos[z][z] + `</h1><br>
						</div>
						`;
					} else {
						fill +=
							`
						<div class="card">
							<div class="frame-img"><img src="assets/pictures/Picture` + nm_kos[z][2] + `.png" alt="Kos ` + z + `"></div>
							<h1>` + nm_kos[z][0] + `</h1><br>
							<p class="price">Rp` + rubahRp(nm_kos[z][1]) + `</p><br>
							<p><a href="kos_` + no + `.html">Selengkapnya</a></p>
						</div>
						`;
					}
				} else if (sortData == "L") {
					if (nm_kos[z][3] == "L") {
						fill +=
							`
						<div class="card">
							<div class="frame-img"><img src="assets/pictures/Picture` + nm_kos[z][2] + `.png" alt="Kos ` + z + `"></div>
							<h1>` + nm_kos[z][0] + `</h1><br>
							<p class="price">Rp` + rubahRp(nm_kos[z][1]) + `</p><br>
							<p><a href="kos_` + no + `.html">Selengkapnya</a></p>
						</div>
						`;
					} else {
						continue;
					}
				} else if (sortData == "P") {
					if (nm_kos[z][3] == "P") {
						fill +=
							`
						<div class="card">
							<div class="frame-img"><img src="assets/pictures/Picture` + nm_kos[z][2] + `.png" alt="Kos ` + z + `"></div>
							<h1>` + nm_kos[z][0] + `</h1><br>
							<p class="price">Rp` + rubahRp(nm_kos[z][1]) + `</p><br>
							<p><a href="kos_` + no + `.html">Selengkapnya</a></p>
						</div>
						`;
					} else {
						continue;
					}
				} else if (sortData == "C") {
					if (nm_kos[z][3] == "C") {
						fill +=
							`
						<div class="card">
							<div class="frame-img"><img src="assets/pictures/Picture` + nm_kos[z][2] + `.png" alt="Kos ` + z + `"></div>
							<h1>` + nm_kos[z][0] + `</h1><br>
							<p class="price">Rp` + rubahRp(nm_kos[z][1]) + `</p><br>
							<p><a href="kos_` + no + `.html">Selengkapnya</a></p>
						</div>
						`;
					} else {
						continue;
					}
				}
				$('.wrap').html(fill);
				no++;
			}
			console.log(rubahRp(10000));
		}

		
	</script>
</body>

</html>