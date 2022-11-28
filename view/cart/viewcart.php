
<!-- <div class="row">
    <div class="row frmtitle">
        <h1>Giỏ hàng</h1>
    </div>

    <div class="row mb10 frmdsloai">
        <table >
            <tr>
                <th>HÌNH</th>
                <th>SẢN PHẨM</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
                <th>THAO TÁC</th>
            </tr>

            <?php
                // $tong = 0;
                // $i = 0;
                // foreach ($_SESSION['mycart'] as $cart){
                //     $hinh=$img_path.$cart[2];
                //     $ttien = $cart[3] * $cart[4];
                //     $tong=+ $ttien;
                //     $xoasp= '<a href="index.php?act=delcart$idcart='.$i.'">input type="button" value="Xóa"</a>';
                //     echo'<tr>
                //         <td><img src= "'.$hinh.'" alt =""</td>
                //         <td>'.$cart[1].'</td>
                //         <td>'.$cart[3].'</td>
                //         <td>'.$cart[4].'</td>
                //         <td>'.$ttien.'</td>
                //         <td>'.$xoasp.'</td>
                //         </tr>';
                //     $i+=1;
                // }
                // echo '<tr>
                //         <td colspan= "4">Tổng đơn hàng</td>
                //         <td>'.$tong.'</td>
                //         <td></td>
                //     </tr>';

                
            ?>
            
        </table>
    </div>
    <div class="input_button">
        <a href="index.php?act=bill">
            <input type="submit" value="Đồng ý đặt hàng">       
        </a>
        <a href="index.php?act=delcart">
            <input type="button" value="XÓA GIỎ HÀNG">
        </a>
        
    </div>
</div> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .giohang{
            margin-top:400px;
        }
    </style>
</head>
<body>
    <div class="giohang">
        <table border="1">
            <tr>
                <th>SẢN PHẨM</th>
                <th>GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>TỔNG TIỀN</th>
            </tr>
            <tr>
                <td>SẢN PHẨM</td>
                <td>SẢN PHẨM</td>
                <td>SẢN PHẨM</td>
                <td>SẢN PHẨM</td>
            </tr>
        </table>
        <div>
            <p>Tồng thanh toán: 20000 đ</p>
            <input type="button" value="Đặt hàng">
        </div>
    </div>
</body>
</html>