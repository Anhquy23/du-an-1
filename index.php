<?php 
    include "./model/pdo.php";
    include "./model/sanpham.php";
    include "./model/danhmuc.php";
    include "./views/header.php";

    $spnew = loadall_sanpham_trangchu();
    $dmsp = loadall_danhmuc();
    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act = $_GET['act'];
        switch($act){
            case 'categories':
                include "./views/categories.php";
                break;
            case 'post':
                include "./views/post.php";
                break;
            case 'ctsp':
                if((isset($_GET['idsp'])) && ($_GET['idsp']>0))
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                include "./views/chitietsp.php";
                break;    
            default:
            include "./views/home.php";
                break;
        }
    }else{
        include "./views/home.php";
    }
    include "./views/footer.php";
?>