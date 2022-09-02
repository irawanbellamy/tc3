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
	<title><?= $title ?></title>
	<!-- Stylesheets & Fonts -->
	<link href="<?= base_url() ?>assets/css/plugins.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>assets/tc3-favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>assets/tc3-favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>assets/tc3-favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/tc3-favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>assets/tc3-favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>assets/tc3-favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assets/tc3-favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>assets/tc3-favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/tc3-favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>assets/tc3-favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/tc3-favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/tc3-favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/tc3-favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= base_url() ?>assets/tc3-favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?= base_url() ?>assets/tc3-favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
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
							<!-- <span class="logo-default"><img src="<?= base_url() ?>assets/images/logos/tc3-stiker.jpeg" alt="logo" width="65"></span>
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
									<li class="dropdown"><a href="#">Paguyuban</a>
										<ul class="dropdown-menu">
											<li><a href="<?= base_url() ?>paguyuban/pengurus">Kepengurusan</a></li>
											<li><a href="<?= base_url() ?>paguyuban/adart">AD ART</a></li>
											<li><a href="<?= base_url() ?>paguyuban/kegiatan">Rencana Kegiatan</a></li>
											<li><a href="<?= base_url() ?>paguyuban/dokumentasi">Dokumentasi</a></li>
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
