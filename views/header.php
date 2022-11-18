<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="views/styles/bootstrap4/bootstrap.min.css">
<link href="views/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="views/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="views/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="views/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="views/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="views/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="views/styles/single_styles.css">
<link rel="stylesheet" type="text/css" href="views/styles/single_responsive.css">
<!--   -->

</head>

<body>
<?php

    $dmsp = loadall_danhmuc();
?>
<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">MIỄN PHÍ GIAO HÀNG TRÊN TOÀN QUỐC KHI MUA 5 SẢN PHẨM !</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								
								<li class="account">
									<a href="#">
										Tài khoản
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
										<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href=""><img src="views/images/logo.png" alt="" width="170px" height="170px"></a>
						</div>
						<nav class="navbar">
							<ul id="nav">
								<li ><a href="index.php">Trang chủ</a></li>
								<li>
									<a href="index.php?act=categories">
										Danh mục
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="subnav">
										<?php foreach ($dmsp as $dm) : ?>
										<li><a href="index.php?act=sanpham&iddm="><?= $dm['name']?></a></li>
                                        <?php endforeach;?>
									</ul>
								</li>
								<li><a href="index.php?act=post">Bài viết</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>