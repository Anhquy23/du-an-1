	<style>
.flex-quantity {
    display: flex;
}

.buttontang {
    padding: 0px 5px;
}

.buttongiam {
  
    padding: 0px 5px;
}

.soluong {
    margin-top: 5px;
}

	</style>
	<head>
	<link rel="stylesheet" type="text/css" href="views/styles/single_styles.css">
<link rel="stylesheet" type="text/css" href="views/styles/single_responsive.css">
	</head>
	<div class="container single_product_container">
	    <div class="row">
	        <?php extract($onesp);
    
	// extract($dmsp=loadall_danhmuc($onesp['iddm']));
	?>

	        <div class="col">

	            <!-- Breadcrumbs -->

	            <div class="breadcrumbs d-flex flex-row align-items-center">
	                <ul>
	                    <li><a href="index.html">Trang chủ</a></li>
	                    <!-- <li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i><?= $dmsp['name']?></a></li> -->
	                    <li class="active"><a href="#"><i class="fa fa-angle-right"
	                                aria-hidden="true"></i><?= $onesp['name'] ?></a></li>
	                </ul>
	            </div>

	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-7">
	            <div class="single_product_pics">
	                <div class="row">
	                    <div class="col-lg-1 thumbnails_col order-lg-1 order-2">
	                       
	                    </div>
	                    <div class="col-lg-11 image_col order-lg-2 order-1">
	                        <div class="single_product_image">
	                            <div class="single_product_image_background"
	                                style="background-image:url(views/images/<?= $onesp['img'] ?>)"></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-lg-5">
	            <div class="product_details">
	                <div class="product_details_title">
	                    <h2><?=$onesp['name']?></h2>
	                    <p><?=$onesp['mota']?></p>
	                </div>
	                <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
	                    <span class="ti-truck"></span><span>Miễn phí giao hàng</span>
	                </div>
	                <div class="original_price"><?= number_format($onesp['price']*120/100) ?> đ</div>
	                <div class="product_price"><?= number_format($onesp['price']) ?> đ</div>
	                

	                <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
	                    <!-- <span>SL :</span>
						<div class="quantity_selector">
							<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
							<span id="quantity_value">1</span>
							<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
						</div> -->

	                    <form action="index.php?act=addtocart" method="post">
	                        <input type="hidden" name="id" value="<?=$onesp['id']?>">
	                        <input type="hidden" name="name" value="<?=$onesp['name']?>">
	                        <input type="hidden" name="img" value="<?=$onesp['img']?>">
	                        <input type="hidden" name="price" value="<?=$onesp['price']?>">
	                        <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
	                            <span>Số lượng :</span>
	                            <div class="quantity_selector">
	                                <span class="minus">
	                                    <div class="buttongiam btn-secondary"><i class="fa fa-minus" aria-hidden="true"></i></div>
	                                </span>
	                                <input style="margin: 15px 0px;width: 30px;text-align:center;" type="text" id="quantity" name="soluong" value=1><br>
	                                <span class="plus">
	                                    <div class="buttontang btn-secondary"><i class="fa fa-plus" aria-hidden="true"></i></div>
	                                    </i>
	                                </span>
	                            </div>
								<input style="margin:0px 0px 0px 20px;padding:6px;" class="btn-danger" type="submit" name="addtocart" value="Thêm vào giỏ hàng">

	                            </div>
	                        </div>









	                    </form>

	                </div>
	            </div>
	        </div>
	    </div>

	</div>

	<!-- Tabs -->

	<div class="tabs_section_container">

	    <div class="container">
	        <div class="row">
	            <div class="col">
	                <div class="tabs_container">
	                    <ul
	                        class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
	                        <li class="tab active" data-active-tab="tab_1"><span>Sản phẩm cùng loại</span></li>

	                        <li class="tab" data-active-tab="tab_3"><span>Bình luận</span></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col">

	                <!-- Tab Description -->

	                <div id="tab_1" class="tab_container active">
	                    <div class="row">
	                        <div class="col-xl-12 tab_title">
	                            <h4>Sản phẩm cùng loại</h4>
	                        </div>
	                        <?php foreach ($sp_cung_loai as $sp) : ?>
	                        <div class="product-item men">
	                            <div class="product discount product_filter">
	                                <div class="product_image">
										<a   href="index.php?act=ctsp&idsp=<?= $sp['id'] ?>">
	                                    <img src="views/images/<?= $sp['img'] ?>" alt="">
										</a>
	                                </div>
	                                <div class="favorite favorite_left"></div>
	                                <div class="product_info">
	                                    <h6 class="product_name"><a
	                                            href="index.php?act=ctsp&idsp=<?= $sp['id'] ?>"><?= $sp['name'] ?></a></h6>
	                                    <div class="product_price"><?= number_format($sp['price']) ?>
	                                        đ<span><?= number_format($sp['price']*110/100) ?> đ</span></div>
	                                </div>
	                            </div>
	                            <div class="red_button add_to_cart_button"><a
	                                    href="index.php?act=ctsp&idsp=<?= $sp['id'] ?>">Chi tiết sản phẩm</a></div>
	                        </div>
	                        <?php endforeach ; ?>
	                    </div>
	                </div>

	                <!-- Tab Additional Info -->
	                <!-- 
					<div id="tab_2" class="tab_container">
						<div class="row">
							<div class="col additional_info_col">
								<div class="tab_title additional_info_title">
									<h4>Additional Information</h4>
								</div>
								<p>COLOR:<span>Gold, Red</span></p>
								<p>SIZE:<span>L,M,XL</span></p>
							</div>
						</div>
					</div> -->

	                <!-- Tab Reviews -->

	                <div id="tab_3" class="tab_container">
	                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	                    <script>
	                    $(document).ready(function() {
	                        $("#binhluan").load("views/binhluan/binhluanform.php", {
	                            $idpro: <?=$id?>
	                        });
	                    });
	                    </script>
	                    <div class="row" id="binhluan">


	                        <!-- User Reviews

							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Reviews (2)</h4>
								</div>

								<!-- User Review -->
	                        <!-- 
								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Aug 2016</div>
										<div class="user_name">Brandon William</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div> -->

	                        <!-- User Review -->

	                        <!-- <div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Aug 2016</div>
										<div class="user_name">Brandon William</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div> -->

	                        <!-- Add Review -->

	                        <!-- <div class="col-lg-6 add_review_col">

								<div class="add_review">
									<form id="review_form" action="post">
										<div>
											<h1>Add Review</h1>
											<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
											<input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
										</div>
										<div>
											<h1>Your Rating:</h1>
											<ul class="user_star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
											<textarea id="review_message" class="input_review" name="message"  placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
										</div>
									</form>
								</div>

							</div> --> -->

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
	                        <h6>MIỄN PHÍ VẬN CHUYỂN</h6>
	                        <p>Bị thay đổi trong một số hình thức</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 benefit_col">
	                <div class="benefit_item d-flex flex-row align-items-center">
	                    <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
	                    <div class="benefit_content">
	                        <h6>CACH KHI GIAO</h6>
	                        <p>Internet có xu hướng lặp lại</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 benefit_col">
	                <div class="benefit_item d-flex flex-row align-items-center">
	                    <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
	                    <div class="benefit_content">
	                        <h6>45 NGÀY TRẢ LẠI</h6>
	                        <p>Làm cho nó trông giống như có thể đọc được</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 benefit_col">
	                <div class="benefit_item d-flex flex-row align-items-center">
	                    <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
	                    <div class="benefit_content">
	                        <h6>MỞ CỬA CẢ TUẦN</h6>
	                        <p>8AM - 09PM</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Newsletter -->


	<script>
let tang = document.querySelector(".buttontang");
let giam = document.querySelector(".buttongiam");
let quantity = document.querySelector("#quantity");
tang.onclick = () => {
    quantity.value++;
}
giam.onclick = () => {
    quantity.value--;
    if (quantity.value <= 0) {
        quantity.value = 1;
    }
}
	</script>