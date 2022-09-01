<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="tento city" />
	<meta name="description" content="Tenjo City">
	<link rel="icon" type="image/png" href="images/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Document title -->
	<title>Home</title>
	<!-- Stylesheets & Fonts -->
	<link href="<?= base_url() ?>assets/css/plugins.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Body Inner -->
	<div class="body-inner">
		<header id="header" class="light submenu-dark">
			<div class="header-inner">
				<div class="container">
					<!--Logo-->
					<div id="logo">

						<a href="<?= base_url() ?>">
							<span class="logo-default">Tenjo City 3</span>
							<span class="logo-dark">Tenjo City 3</span>
							<!-- <span class="logo-default"><img src="<?= base_url() ?>assets/images/logos/Tenjo-city.jpg" alt="logo" width="100"></span>
							<span class="logo-dark"><img src="<?= base_url() ?>assets/images/logos/logo-tenjo-city_copy.png" alt="logo" width="100"></span> -->
						</a>
					</div>
					<!--End: Logo-->

					<!--Navigation Resposnive Trigger-->
					<div id="mainMenu-trigger">
						<a class="lines-button x"> <span class="lines"></span> </a>
					</div>
					<!--end: Navigation Resposnive Trigger-->
					<!--Navigation-->
					<div id="mainMenu" class="menu-center">
						<div class="container">
							<nav>
								<ul>
									<li><a href="<?= base_url() ?>">Tentang Kami</a></li>
									<li class="dropdown"><a href="<?= base_url() ?>paguyuban">Paguyuban</a>
										<ul class="dropdown-menu">
											<li><a href="#">Kepengurusan</a></li>
											<li><a href="#">AD ART</a></li>
											<li><a href="#">Rencana Kegiatan</a></li>
											<li><a href="#">Dokumentasi</a></li>
										</ul>
									</li>
									<li><a href="<?= base_url() ?>galeri">Gallery</a></li>
									<li><a href="<?= base_url() ?>blog">Blog</a></li>
									<li><a href="<?= base_url() ?>kontak">Hubungi Kami</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!--end: Navigation-->
				</div>
			</div>
		</header>
