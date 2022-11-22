    <head>
        <link rel="stylesheet" type="text/css" href="views/styles/categories_responsive.css">
        <link rel="stylesheet" type="text/css" href="views/styles/categories_styles.css">
    </head>



	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
<!--					<ul>-->
<!--						<li><a href="index.html">Home</a></li>-->
<!--						<li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li>-->
<!--					</ul>-->
				</div>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Danh mục sản phẩm</h5>
						</div>
						<ul class="sidebar_categories">
                            <li><a href="index.php?act=categories&iddm=0">Tất cả sản phẩm</a></li>

                            <?php foreach ($dmsp as $dm) : ?>
                                <li><a href="index.php?act=categories&iddm=<?= $dm['id']?>"><?= $dm['name']?></a></li>
                            <?php endforeach;?>

                        </ul>
					</div>
				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">


								<div class="product-grid">
                                    <?php foreach ($dssp as $sp) : ?>

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
                                                <img src="views/images/<?= $sp['img'] ?>" alt="">
                                            </div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html"><?= $sp['name'] ?></a></h6>
                                                <div class="product_price"><?= number_format($sp['price']) ?> đ<span><?= number_format($sp['price']*110/100) ?> đ</span></div>

                                            </div>
										</div>
                                        <div class="red_button add_to_cart_button"><a href="index.php?act=ctsp&idsp=<?= $sp['id'] ?>">Chi tiết sản phẩm</a></div>

                                    </div>
                                    <?php endforeach; ?>

                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

