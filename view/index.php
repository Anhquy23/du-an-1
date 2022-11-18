<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../view/header.php";
    include "../view/global.php";

    $spnew = loadall_sanpham_home();
    $dsdm= loadall_danhmuc();

    if((isset($_GET['act']))&& ($_GET['act']!= "")){
        $act = $_GET['act'];
        switch ($act) {
            case 'baiviet':
                include"view/baiviet.php";
                break;
            
            default:
                include "../view/home.php";
                break;
        }
    }else{
        include "../view/home.php";
    }

    include "../view/footer.php";
?>