    <div class="container-fluid">
        <?php extract($bill);    
            $pttt=get_pttt($bill['bill_pttt']); 
            $ttdh = get_ttdh($bill['bill_satus']);
            ?>
        <h1 class="h3 mb-2 text-gray-800">THÔNG TIN KHÁCH HÀNG </h1><br>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div>
                        <p>Người đặt hàng : <?=$bill['bill_name'] ?></p>
                        <p>Số điện thoại : <?=$bill['bill_tel'] ?></p>
                        <p>Địa chỉ : <?=$bill['bill_address'] ?></p>
                        <p>email : <?=$bill['bill_email'] ?></p>
                        <p>Phương thức thanh toán : <?=$pttt ?></p>
                        <p>Tình trạng đơn hàng : <?=$ttdh ?></p>
                        <p>Ngày lập hóa đơn : <?=$bill['ngaydathang'] ?></p>
                        <p>Tổng thanh toán : <?=number_format($bill['total']) ?> đ</p>

                    </div>
                    <table class="table table-bordered" width="100%" cellspacing="0">
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
                            <?php foreach($cart as $cart) : ?>
                            <?php 
                                            $tong+=$cart['thanhtien'];
                                            
                                    ?>

                            <tr>
                                <td class="cart_product_img">
                                    <img src="../views/images/<?=$cart['img'] ?> " alt="" height="100">
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

        <!-- ##### Main Content Wrapper End ##### -->