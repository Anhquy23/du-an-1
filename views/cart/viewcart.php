<style>
    .cart-table-area{
        margin:0 25% ;
    }

    .cart-title h2{
        font-size: 28px;
        margin-bottom: 20px;
        color: #000;
    }
   
    .cart_product_img img{
        width: 100%;
    }
    table{
        width: 100%;
        
        border: none;
    }

    table th{
        background-color: #ccc;
        font-size: 20px;
        padding: 10px 40px;
        
    }

    table tr td{
        text-align: center;
    }
    body{
        margin-top: 300px;
        width: 100%;
    }

</style>




<body>
        <div class="cart-table-area ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>
                        <div class="cart-table clearfix">
                            <table class="" border="1">
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $tong=0;
                                    $i=0; ?>
                                    <?php foreach($_SESSION['mycart'] as $cart) : ?>
                                    <?php 
                                            $tong+=$cart[3]*$cart[4];
                                            
                                    ?>

                                        <tr>
                                        <td class="cart_product_img">
                                        <img src="./views/images/<?=$cart[2] ?> " alt="">
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5><?=$cart[1] ?></h5>
                                        </td>
                                        <td class="price">
                                            <span><?=number_format($cart[3]) ?> đ</span>
                                        </td>
                                        <td class="price">
                                            <span><?=$cart[4] ?></span>
                                        </td>
                                        <td class="price">
                                            <span><?=number_format($cart[3]*$cart[4]) ?> đ</span>
                                        </td>
                                        <td>
                                        <a href="index.php?act=deletecart&idcart=<?=$i?>"><input type="button" value="Xóa" ></a>
                                        </td>
                                            </tr>
                                            <?php $i+=1; ?>
                                        
                                    <?php  endforeach; ?>
                                        <td colspan="4">Tổng thanh toán :</td>
                                        <td><?=number_format($tong) ?></td>
                                    
                                </tbody>
                            </table>
                            <div>   
                            <a href="index.php?act=bill"><input  type="button" value="Đặt hàng"></a>  
                            <a href="index.php?act=mybill"><input  type="button" value="Đơn hàng của tui"></a>                       

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

