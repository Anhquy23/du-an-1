<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro=$_SESSION['idpro'];
    $dsbl=loadall();

        if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
            $noidung = $_POST['noidung'];
            $idpro = $_SESSION['idpro'];
      
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
            header("location: ". $_SERVER['HTTP_REFERER']);
        }

?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="views/styles/form.css">
   
</head>
<body>
<div class="row mb">
        <div class="boxtitle">BÌNH LUẬN</div>

        <div class="boxcontent2 binhluan">
            <ul>
                <table>
                    <?php
                        foreach ($dsbl as $bl){
                            extract($bl);
                            $linkdm="index.php?act=sanpham&iddm=".$id;
                            echo '<tr><td>'.$noidung.'</td>';
                            echo '<td>'.$iduser.'</td>';
                            echo '<td>'.$ngaybinhluan.'</td></tr>';
                        }
                    ?>
                </table>
            </ul>
        </div>
        
        <div class="boxfooter searbox">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="text" hidden name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung" id="nd">
                <input type="submit" name="guibinhluan" id="" value="Gửi bình luận">
            </form>
        </div>
    </div>   
    
</body>
</html>