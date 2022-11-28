<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath = "../upload/" .$img;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height = '80'>";
        }else{
            $hinh = "no photo";
        }

?>

<style>
    .row{
        display: block;
    }
</style>


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">CẬP NHẬT LOẠI HÀNG</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive1">
            <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm" >
                    <option value="0" selected>Tât cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$id){
                                echo '<option value="'.$id.'"selected>'.$name.'</option>';
                            }else{
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?=$name?>">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp" value="<?=$price?>">
            </div>
            <div class="row mb10">
                Hình ảnh <br>
                <input type="file" name="hinhsp" >
                <?=$hinh?>
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10" value="<?=$mota?>"></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?=$id?>">
                <input class="btn-primary" type="submit" name="capnhat" value="Cập nhật">
                <a href="index.php?act=lissp"><input class="btn-success" type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao != "")) echo $thongbao;

            ?>
        </form>
            </div>
        </div>
    </div>



