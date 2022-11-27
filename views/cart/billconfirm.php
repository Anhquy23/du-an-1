

<style>
.cart-table-area {
    margin-top: 200px;
    margin-left: 210px;
}

.cart-summary {
    text-align: left;
    margin-top: 50px;
    margin-left: 50px;
    font-size: 18px;
}

.btn {
    background-color: yellow;
    color: black;
    font-size: 20px;
    font-weight: bold;
    margin-top: 14px;
}

.radio {
    font-size: 18px;
    margin-left: 18px;
}

.radio label {
    margin-right: 8px;
}
table{
    width: 100%;
    text-align: center;
}
table img{
    width: 300px;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Checkout</title>

    <link rel="stylesheet" href="./styles/core-style.css">

</head>
<?php 
    if(isset($bill)&&(is_array($bill))){
        extract($bill);
    }
?>
<body>
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <div class="checkout_details_area mt-50 clearfix">
                        <div class="cart-title">
                            <h2>Đặt hàng thành công !</h2>
                        </div>
                        <div>
                            <?php    $pttt=get_pttt($bill['bill_pttt']); ?>
                            <h3>THông tin khách hàng :</h3><br>
                            <p>Người đặt hàng : <?=$bill['bill_name'] ?></p>
                            <p>Số điện thoại : <?=$bill['bill_tel'] ?></p>
                            <p>Địa chỉ : <?=$bill['bill_address'] ?></p>
                            <p>email : <?=$bill['bill_email'] ?></p>
                            <p>Phương thức thanh toán : <?=$pttt ?></p>
                            <p>Ngày lập hóa đơn : <?=$bill['ngaydathang'] ?></p>
                            <p>Tổng thanh toán : <?=number_format($bill['total']) ?> đ</p>

                        </div>
                        

                       
                    </div>
                <div class="col-12 col-lg-12">
                <table class="" border="1">
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $tong=0;
                                    ?>
                                    <?php foreach($billct as $cart) : ?>
                                    <?php 
                                            $tong+=$cart['thanhtien'];
                                            
                                    ?>

                                        <tr>
                                        <td class="cart_product_img">
                                        <img src="./views/images/<?=$cart['img'] ?> " alt="">
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5><?=$cart['name'] ?></h5>
                                        </td>
                                        <td class="price">
                                            <span><?=number_format($cart['price']) ?> đ</span>
                                        </td>
                                        <td class="price">
                                            <span><?=$cart["soluong"] ?></span>
                                        </td>
                                        <td class="price">
                                            <span><?=number_format($cart['thanhtien']) ?> đ</span>
                                        </td>
                                       
                                            </tr>
                                        
                                        
                                    <?php  endforeach; ?>
                                        
                                    
                                </tbody>
                            </table>
                </div>

                <!-- <div class="col-12 col-lg-10">
                    <div class="cart-summary">
                        <h5>Tổng Thanh Toán : <?=number_format($tong) ?> đ</h5>
                        <h5>Miễn phí vận chuyển</h5>

                       
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>

</body>

</html>