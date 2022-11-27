<?php
function tongdonhang(){
    $tong=0;
    foreach($_SESSION['mycart'] as $cart){
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
        
    }

    return  $tong;
}

function insert_bill($iduser,$name,$email,$tel,$address,$pttt,$ngaydathang,$tongdonhang){
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_tel,bill_address,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$tel','$address','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}

function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id){
    $sql = "select * from bill where id =".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function load_cart($idbill){
    $sql = "select * from cart where idbill =".$idbill;
    $cart = pdo_query($sql);
    return $cart;
}
function load_cart_count($idbill){
    $sql = "select * from cart where idbill =".$idbill;
    $cart = pdo_query($sql);
    return sizeof($cart);
}
function loadall_bill($iduser){
    $sql = "select * from bill where iduser =".$iduser;
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt="Đơn hàng mới";
            break;
        case '1':
            $tt="Đang chờ";
            break;
        case '2':
            $tt="Đang giao hàng";
            break;
        case '3':
            $tt="Đã giao hàng";
            break;
        default:
            $tt="Hong biet nua";
            break;
    }return $tt;
}
function get_pttt($n){
    switch ($n) {      
        case '1':
            $tt="Thanh toán trực tiếp";
            break;
        case '2':
            $tt="Chuyển khoản";
            break;
        default:
            $tt="Hong biet nua";
            break;
    }return $tt;
}
?>