<!DOCTYPE html>
<html>
<head>
	<title> Masak Makanan Indonesia </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style type="text/css">
		.contain {
			background-color: #fff1c1;
			padding-top: 5px;
		}

		.contain h1{
			text-align: center;
			margin: 40px 25% 50px 25%;
			border-bottom: 5px solid #d19c4d;
			padding-bottom: 5px
		}

		.contain h3 {
			text-align: center;
			margin-bottom: 50px;
		}

		.contain ul {
			display: grid;
			list-style-type: none;
			margin: 0;
			padding: 0;
			grid-template-columns: repeat(3,auto);
			grid-template-rows: repeat(2, auto);
		}	

		.contain ul li img{
			display: block;
		    font-size: 1.4em;
		    margin-bottom: 1em;
		    margin-left: 70px;
		    color: white;
		}
	</style>
</head>
<body>
	<div class="web">
		<?php require ('header.php') ?>
		<div class="contain">
			<div class="content">
				<h1> SELAMAT DATANG	 </h1>
				<ul>
					<li>
						<a href="#">
							<img src="img/bakso.jpg" width="300px" alt="Bakso Raksasa" title="Bakso Raksasa">
						</a>
					</li>
					<li>
						<img src="img/nasi.jpg" width="300px" alt="Nasi Goreng Pedas" title="Nasi Goreng Pedas">
					</li>
					<li>
						<img src="img/rendang.jpg" width="300px" alt="Rendang" title="Rendang">
					</li>
					<li>
						<img src="img/dimsum.jpg" width="300px" alt="Dimsum" title="Dimsum">
					</li>
					<li>
						<img src="img/taiso.jpg" width="300px" alt="Taiso" title="Taiso">
					</li>
					<li>
						<img src="img/pem.jpg" width="300px" alt="Pempek" title="Pempek">
					</li>
					<li>
						<img src="img/head.jpg" width="300px">
					</li>
					<li>
						<img src="img/soto.jpg" width="300px">
					</li>
					<li>
						<a href="ayamGeprek.php">
							<img src="img/geprek.jpg" width="300px" alt="Ayam Geprek" title="Ayam Geprek">
						</a>
					</li>
				</ul>
			</div>
		</div>

		<?php require ('footer.php') ?>
	</div>


</body>
</html>