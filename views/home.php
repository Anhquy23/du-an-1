<div class="main_slider" style="background-image:url(views/images/slider_1.jpeg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>XUÂN / BỘ SƯU TẬP MÙA HÈ 2022</h6>
						<h1>Giảm giá tới 20% cho hàng mới về</h1>
						<div class="red_button shop_now_button"><a href="index.php?act=categories">Mua ngay</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
                <?php foreach ($dmsp as $dm) : ?>

                <div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(views/images/banner3.jpg)">
						<div class="banner_category">
                            <a href="index.php?act=categories&iddm=<?= $dm['id']?>"><?= $dm['name']?></a>
                        </div>
					</div>
				</div>
                <?php endforeach;?>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Sản Phẩm Nổi Bật</h2>
					</div>
				</div>
			</div>
<!--			<div class="row align-items-center">-->
<!--				<div class="col text-center">-->
<!--					<div class="new_arrivals_sorting">-->
<!--						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">-->
<!--							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">Tất Cả</li>-->
<!--                            --><?php //foreach ($dmsp as $dm) : ?><!--							-->
<!--                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">--><?//= $dm['name']?><!--</li>-->
<!--                            --><?php //endforeach;?>
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
					<?php foreach ($spnew as $sp) : ?>

						<div class="product-item men">
							<div class="product discount product_filter">
								<a href="index.php?act=ctsp&idsp=<?= $sp['id'] ?>" class="product_image">
									<img src="views/images/<?= $sp['img'] ?>" alt="">
								</a>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="index.php?act=ctsp&idsp=<?= $sp['id'] ?>"><?= $sp['name'] ?></a></h6>
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

	<!-- Blogs -->

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Bài viết</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(views/images/post1.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Câu nói hay về sách & những trích dẫn về sách ý nghĩa</h4>
							<a class="blog_more" href="#">Xem thêm</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(views/images/post2.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Những câu nói hay về sách bằng tiếng Anh</h4>
							<a class="blog_more" href="#">Xem thêm</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(views/images/post3.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Danh ngôn hay về tầm quan trọng của việc đọc sách</h4>
							<a class="blog_more" href="#">Xem thêm</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>