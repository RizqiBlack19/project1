<!DOCTYPE html>
<html>

<head>
	<title>Jajanpedia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
	<style>
	body,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		font-family: "Karma", sans-serif
	}

	.w3-bar-block .w3-bar-item {
		padding: 20px
	}
	</style>
</head>

<body>

	<!-- Sidebar (hidden by default) -->
	<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left"
		style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close Menu</a>
		<a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
		<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
	</nav>

	<!-- Top menu -->
	<div class="w3-top">
		<div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
			<div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
			<div class="w3-right w3-padding-16">Mail</div>
			<div class="w3-center w3-padding-16">Jajanpedia</div>
		</div>
	</div>

	<!-- !PAGE CONTENT! -->
	<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

		<!-- First Photo Grid-->
		<div class="w3-row-padding w3-padding-16 w3-center" id="food">
			<div class="w3-quarter">
				<img src="img/wingko.jpg" alt="Wingko" style="width:100%">
				<h3>Kue manis berwarna putih yang berbentuk kotak</h3>
				<p>Jajanan oleh-oleh khas Semarang ini terbuat dari bahan bahan seperti kelapa parut, gula pasir, tepung
					ketan putih, santan, telur ayam, dan daun pandan.</p>
			</div>
			<div class="w3-quarter">
				<img src="img/putu.jpg" alt="Putu" style="width:100%">
				<h3>Kue tradisional isian gula jawa.</h3>
				<p>Kue tradisional Jawa yang berisi gula merah, dibalut dengan parutan kelapa dan tepung beras butiran
					kasar. Yang dikukus dan diletakkan di dalam tabung bambu yang dipadatkan.</p>
			</div>
			<div class="w3-quarter">
				<img src="img/gethuk.jpg" alt="Gethuk" style="width:100%">
				<h3>Makanan pokok pengganti beras jaman dahulu</h3>
				<p>Makanan ringan yang terbuat dari singkong pohon atau singkong. Yang dimasak dengan cara direbus,
					ditumbuk dan diberi pemanis gula serta ditaburi parutan kelapa.</p>
			</div>
			<div class="w3-quarter">
				<img src="img/sus.jpg" alt="Kue Sus" style="width:100%">
				<h3>Kue bundar dengan rongga berisi fla</h3>
				<p>Kue yang dibuat dengan menambhakan tepung terigu ke dalam campuran air yang dimasak bersama margin
					dan ditambahkan dengan telur ayam.</p>
			</div>
		</div>

		<!-- Second Photo Grid-->
		<div class="w3-row-padding w3-padding-16 w3-center">
			<div class="w3-quarter">
				<img src="img/lumpur.jpg" alt="Kue Lumpur" style="width:100%">
				<h3>Kue lembut dengan topping kismis</h3>
				<p>Kue basah tradisional yang terbuat dari bahan utama santan, kentang, tepung terigu, dan telur dengan
					pewangi yang digunakan vanila serta topping kismis atau kelapa muda iris.</p>
			</div>
			<div class="w3-quarter">
				<img src="img/jemblem.jpg" alt="Jemblem" style="width:100%">
				<h3>Gorengan manis dari singkong</h3>
				<p>Gorengan berwarna coklat yang berasal dari adonan singkong basah yang dihaluskan berbentuk bulat
					besar dan berisi gula merah. Kemudian digoreng hingga berwarna kecoklatan</p>
			</div>
			<div class="w3-quarter">
				<img src="img/klepon.jpg" alt="Klepon" style="width:100%">
				<h3>Bola bola warna warni dengan isian gula merah</h3>
				<p>Kue tradisional yang terbuat dari campuran ketela dengan tepung beras ketan. Dibentuk menjadi bola
					bola kecil dengan isian gula merah dan direbus. Serta baluran parutan kelapa untuk klepon yang sudah
					masak</p>
			</div>
			<div class="w3-quarter">
				<img src="img/bika ambon.jpg" alt="Bika Ambon" style="width:100%">
				<h3>Kue basah dengan sensasi aroma daun jeruk</h3>
				<p>Kue berwarna kuning memiliki jaring jaring pada bagian dalamnya terbuat dari tepung tapioka, telur,
					gula dan santan</p>
			</div>
		</div>

		<!-- Pagination -->
		<div class="w3-center w3-padding-32">
			<div class="w3-bar">
				<a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
				<a href="#" class="w3-bar-item w3-black w3-button">1</a>
				<a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
				<a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
				<a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
				<a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
			</div>
		</div>

		<hr id="about">

		<!-- About Section -->
		<div class="w3-container w3-padding-32 w3-center">
			<h3>About Me, The Food Man</h3><br>
			<img src="img/about me.jpg" alt="Me" class="w3-image" style="display:block;margin:auto">
			<div class="w3-padding-32">
				<h4><b>Jajanpedia</b></h4>
				<h6><i>With Passion For Real, Good Food</i></h6>
				<p>Selamat datang di Jajanpedia! Di sini, kami akan memperkenalkan berbagai macam jajanan pasar yang ada
					di Indonesia dan memberikan informasi lengkap tentang makanan tersebut. Jajanpedia merupakan tempat
					yang tepat bagi Anda yang suka mencari dan mencicipi jajanan pasar yang unik dan lezat.</p>
				<p>Di Jajanpedia, Anda akan menemukan banyak informasi tentang jajanan pasar, termasuk sejarah,
					asal-usul, dan cara membuatnya. Kami juga akan membagikan resep-resep jajanan pasar yang bisa Anda
					coba buat sendiri di rumah.</p>
				<p>Selain itu, kami juga akan memberikan informasi tentang tempat-tempat terbaik untuk menemukan jajanan
					pasar di Indonesia. Kami akan memberikan daftar pasar tradisional dan toko-toko makanan yang menjual
					jajanan pasar terbaik, sehingga Anda bisa mencoba mencicipi dan membeli jajanan pasar yang Anda
					sukai.</p>
				<p>Jajanpedia juga akan menampilkan ulasan tentang jajanan pasar dari berbagai daerah di Indonesia. Kami
					akan membahas tentang jajanan pasar yang khas dari setiap daerah, seperti jajanan pasar dari Jawa,
					Sumatra, Kalimantan, Sulawesi, dan Papua. Dengan demikian, Anda bisa mengetahui lebih banyak tentang
					jajanan pasar yang ada di Indonesia dan menikmati keanekaragaman kuliner Indonesia.</p>
				<p>Jadi, itulah pengenalan singkat tentang Jajanpedia. Terima kasih sudah berkunjung dan selamat
					menikmati jajanan pasar yang lezat!</p>

			</div>
		</div>
		<hr>

		<!-- Footer -->
		<footer class="w3-row-padding w3-padding-32">
			<div class="w3-third">
				<h3>FOOTER</h3>
				<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
					congue gravida diam non fringilla.</p>
				<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
			</div>

			<div class="w3-third">
				<h3>BLOG POSTS</h3>
				<ul class="w3-ul w3-hoverable">
					<li class="w3-padding-16">
						<img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
						<span class="w3-large">Lorem</span><br>
						<span>Sed mattis nunc</span>
					</li>
					<li class="w3-padding-16">
						<img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
						<span class="w3-large">Ipsum</span><br>
						<span>Praes tinci sed</span>
					</li>
				</ul>
			</div>

			<div class="w3-third w3-serif">
				<h3>POPULAR TAGS</h3>
				<p>
					<span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span
						class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span
						class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
					<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span
						class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span
						class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
					<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span
						class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span
						class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
					<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span
						class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span
						class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
					<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span
						class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
				</p>
			</div>
		</footer>

		<!-- End page content -->
	</div>

	<script>
	// Script to open and close sidebar
	function w3_open() {
		document.getElementById("mySidebar").style.display = "block";
	}

	function w3_close() {
		document.getElementById("mySidebar").style.display = "none";
	}
	</script>

</body>

</html>
