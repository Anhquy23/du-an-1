<?php
    include "../model/pdo.php";
    include"../model/danhmuc.php";
    include"../model/sanpham.php";
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
                    loadone_danhmuc($_GET['id']);
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

            /* controller sản phẩm */

            case 'addsp':
                //kiêm tra xem ng dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm= $_POST['iddm'];
                    $tensp= $_POST['tensp'];
                    $giasp= $_POST['giasp'];
                    $mota= $_POST['mota'];
                    $hinhsp=$_FILES['hinhsp']['name'];
                    $target_dir = "../upload/";
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
                    $target_dir = "../upload/";
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

            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    include "footer.php";

?>