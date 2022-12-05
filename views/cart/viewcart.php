<div style="width: 80%; margin-top: 170px;" class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ĐƠN HÀNG</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body1">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                          
                                
                                <img src="./views/images/<?=$cart[2] ?> " alt="" width="200px" height="auto">
                            </td>
                            <td class="cart_product_desc">
                         

                                <h5 ><?=$cart[1] ?></h5>
                            </td>
                            <td class="price" >
                           

                                <span><?=number_format($cart[3]) ?> đ</span>
                            </td>
                            <td class="price">
                            <form action="index.php?act=updatecart&id=<?=$cart[0] ?>" method="post">
                            <input style="margin: 15px 0px;width: 30px" type="hidden"  name="id" value=<?=$cart[0] ?>>
                            <div class="quantity_selector">
	                                <span class="minus">
	                                    <div class="buttongiam"><i class="fa fa-minus" aria-hidden="true"></i></div>
	                                </span>
	                                <input style="margin: 15px 0px;width: 30px" type="text" id="quantity" name="soluong" value=<?=$cart[4] ?>><br>
	                                <span class="plus">
	                                    <div class="buttontang"><i class="fa fa-plus" aria-hidden="true"></i></div>
	                                    </i>
	                                </span>
	                            </div>
                                <input class="red_button " type="submit" name="updatecart" value="Cập nhật">
                            </form>

                            </td>
                            <td class="price">
                                <span><?=number_format($cart[3]*$cart[4]) ?> đ</span>
                            </td>
                            <td>
                                <a href="index.php?act=deletecart&idcart=<?=$i?>"><input class="btn-danger"
                                        type="button" value="Xóa"></a>
                            </td>
                        </tr>
                        <?php $i+=1; ?>

                        <?php  endforeach; ?>

                        <td colspan="4"><b>Tổng thanh toán :</b></td>
                        <td><b><?=number_format($tong) ?></b></td>

                    </tbody>
                </table>
            </div>
            <div class="input">
                <a href="index.php?act=bill"><input class="btn-success"
                        style="padding: 10px; font-size: 20px; margin-right: 8px;" type="button" value="Đặt hàng"></a>
                <a href="index.php?act=mybill"><input class="btn-info" style="padding: 10px; font-size: 20px;"
                        type="button" value="Đơn hàng của tui"></a>
            </div>
        </div>
    </div>
</div>







<!-- <script type="text/javascript">
        function selects(){
var ele=document.getElementsByName('chk');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName('chk');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                }  
            }  
    </script> -->
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