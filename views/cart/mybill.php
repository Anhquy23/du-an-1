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
    thead{
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
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày đặt</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Tình trạng</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($listbill)) { ?>
                                        <?php foreach($listbill as $bill) : ?>
                                            <?php extract($bill) ;
                                                $ttdh=get_ttdh($bill['bill_satus']);
                                                $countsp=load_cart_count($bill['id']);
                                            ?>
                                            <tr>
                                            <td><?=$bill['id'] ?></td>
                                            <td><?=$bill['ngaydathang'] ?></td>
                                            <td><?=$countsp ?></td>
                                            <td><?=$bill['total'] ?>.000 đ</td>
                                            <td><?= $ttdh?></td>
                                            </tr>
                                        <?php endforeach; }?>
                              
                                </tbody>
                            </table>
                           
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

