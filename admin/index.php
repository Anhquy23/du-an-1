<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "../model/cart.php";
    include "header.php";
    // controller

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                //kiêm tra xem ng dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai= $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao= "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;

            case 'lisdm':
                $listdanhmuc =loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc =loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    // $sql = "SELECT * FROM danhmuc where id =".$_GET['id'];
                    // $dm = pdo_query_one($sql);
                    $dm = loadone_danhmuc($_GET['id']);
                    
                }
                include "danhmuc/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai= $_POST['tenloai'];
                    $id= $_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao= "Cập nhật thành công";
                }
                $listdanhmuc =loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'deletealluser':
                $isDelete = deleteAllUsers();
                if ($isDelete) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit();
                }
                $thongbao = 'Xoa that bai';
                break;
            /* controller sản phẩm */

            case 'addsp':
                //kiêm tra xem ng dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm= $_POST['iddm'];
                    $tensp= $_POST['tensp'];
                    $giasp= $_POST['giasp'];
                    $mota= $_POST['mota'];
                    $hinhsp=$_FILES['hinhsp']['name'];
                    $target_dir = "../views/images/";
                    $target_file = $target_dir . basename($_FILES['hinhsp']['name']);
                    if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }

                    insert_sanpham($tensp,$giasp,$hinhsp,$mota,$iddm);
                    $thongbao= "Thêm thành công";
                }
                $listdanhmuc =loadall_danhmuc();
                include "sanpham/add.php";
                break;

            case 'lissp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc =loadall_danhmuc();
                $listsanpham =loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham =loadall_sanpham("",0);
                include "sanpham/list.php";
                break;

            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc =loadall_danhmuc();
                include "sanpham/update.php";
                break;

            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id= $_POST['id'];
                    $iddm= $_POST['iddm'];
                    $tensp= $_POST['tensp'];
                    $giasp= $_POST['giasp'];
                    $mota= $_POST['mota'];
                    $hinhsp=$_FILES['hinhsp']['name'];
                    $target_dir = "../views/images/";
                    $target_file = $target_dir . basename($_FILES['hinhsp']['name']);
                    if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }

                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinhsp);
                    $thongbao= "Cập nhật thành công";
                }
                $listdanhmuc =loadall_danhmuc();
                $listsanpham =loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'dskh':
                $listtaikhoan=loadall_taikhoan();
                include"taikhoan/list.php";
                break;
            case 'xoakh':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'listbl':
                $listbinhluan =loadall_binhluan(0);
                include "binhluan/listbinhluan.php";
                break;
            case 'xoabl':
                if(isset($_GET['id'])){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan =loadall_binhluan(0);
                include "binhluan/listbinhluan.php";
                break;
            case 'listtk':
                $listthongke =loadall_thongke();
                include "thongke/listthongke.php";
                break;        
            case 'bieudo':
                $listthongke =loadall_thongke();
                include "thongke/bieudo.php";
                break; 
            case 'listdh':
                if(isset($_POST['kyw'])){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                $listbill=loadall_bill_admin($kyw,0);
                include "donhang/list.php";
                break; 
            case 'xoadh':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_donhang($_GET['id']);
                }
                $listbill =loadall_bill($kyw, 0);
                include "donhang/list.php";
                break;
            case 'ctdh':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
                $cart = loadcart_cthoadon($id);
                $bill = loadone_bill($id);
                include "donhang/ctdh.php";
                break; 
            case 'suadh':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    // $sql = "SELECT * FROM danhmuc where id =".$_GET['id'];
                    // $dm = pdo_query_one($sql);
                    $bill = loadone_bill($_GET['id']);
                    
                }
                include "donhang/update.php";
                break;

            case 'updatedh':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $bill_satus= $_POST['bill_satus']; 
                    $bill_thanhtoan = $_POST["bill_thanhtoan"];
                    $id= $_POST['id'];
                    update_bill($id,$bill_satus);
                    if($bill_satus == 3 ){
                        update_bill_thanhtoan($bill_thanhtoan,$bill_satus);
                    }else{
                        update_bill_chuathanhtoan($bill_thanhtoan,$bill_satus);
                    }
                }
                echo "<script>
                    window.location.href='index.php?act=listdh';
                </script>";
                // include "donhang/update.php";
                break;
            default:
            echo "<script>
            window.location.href='index.php?act=bieudo';
        </script>";
                break;
        }
    }else{
        echo "<script>
            window.location.href='index.php?act=bieudo';
        </script>";
    }

    include "footer.php";

?>