<?php
    session_start();
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
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
            
            case 'dangky':
                if(isset($_POST['dangky'])&& ($_POST['dangky'])){
                    $user= $_POST['user'];
                    $pass= $_POST['pass'];
                    $email= $_POST['email'];
                    $address= $_POST['address'];
                    $tel= $_POST['tel'];
                    insert_taikhoan($user,$pass,$email,$address,$tel);
                    $thongbao= "ĐĂNG KÍ THÀNH CÔNG";
                }
                include"../view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user= $_POST['user'];
                    $pass= $_POST['pass'];
                    $checkuser = checkuser($user, $pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        header('Location:index.php');
                    }else{
                        $thongbao="Tài khoản khồng tồn tại";
                    }
                }
                include"../view/taikhoan/dangnhap.php";
                break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                    $user= $_POST['user'];
                    $email= $_POST['email'];
                    $address= $_POST['address'];
                    $tel= $_POST['tel'];
                    $id= $_POST['id'];

                    update_taikhoan($id,$user,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user, $pass);
                    header('Location:index.php?act=edit_taikhoan');
                }
                include"../view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                if(isset($_POST['guiemail'])&& ($_POST['guiemail'])){
                    $email= $_POST['email'];
                    
                    $checkemail =checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao="Email này không tồn tại";
                    }
                }
                include"../view/taikhoan/quenmk.php";
                break;
            case 'thoat':
                session_unset();
                header('Location:index.php');
                include"../view/taikhoan/quenmk.php";
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