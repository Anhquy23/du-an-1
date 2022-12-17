<?php
   if(isset($_POST['themmoi'])){
    $danhmuc = $_REQUEST['iddm'];
    $tensp = $_REQUEST['tensp'];
    $giasp = $_REQUEST['giasp'];
    $mota = $_REQUEST['mota'];
   
    $result = true;
    if($danhmuc == ""){
        $danhmuc_err = "Bạn chưa danh mục   ";
        $result = false;
    }
    if($tensp == ""){
        $tensp_err = "Bạn chưa nhập tên sản phẩm";
        $result = false;
    }
    if($giasp == ""){
        $giasp_err = "Bạn chưa nhập giá";
        $result = false;
    }else if ($giasp <= 0){
        $giasp_err = "Bạn cần nhập giá lớn hơn 0";
        $result = false;
    }
    if($mota == ""){
        $mota_err = "Bạn chưa nhập mô tả";
        $result = false;
    }
}   
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">THÊM SẢN PHẨM</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
            <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="input">
                Danh mục <br>
                <select name="iddm" >
                    <?php
                        foreach ($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                <br>
                <?php if (isset($danhmuc_err)) : ?>   
                <span style="color: red;"><?= $danhmuc_err ?></span>
                <br>
                <?php endif ?>
            </div>
            <div class="input">
                Tên sản phẩm <br>
                <input type="text" name="tensp" >
                <br>
                <?php if (isset($tensp_err)) : ?>   
                <span style="color: red;"><?= $tensp_err ?></span>
                <br>
                <?php endif ?>
            </div>
            <div class="input">
                Giá <br>
                <input type="text" name="giasp" >
                <br>      
                <?php if (isset($giasp_err)) : ?>   
                <span style="color: red;"><?= $giasp_err ?></span>
                <br>
                <?php endif ?>
            </div>
            <div class="input ">
                Hình ảnh <br>
                <input  type="file" name="hinhsp" >
                <br>
                <?php if (isset($file_err)) : ?>   
                <span style="color: red;"><?= $file_err ?></span>
                <br>
                <?php endif ?>
            </div>
            <div class="input">
                Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
                <br>
                <?php if (isset($mota_err)) : ?>   
                <span style="color: red;"><?= $mota_err ?></span>
                <br>
                <?php endif ?>
            </div>
            <div style="margin: 20px 0 0 15px;" class="">
                <input class="btn-primary" type="submit" name="themmoi" value="THÊM MỚI" >
                <input class="btn-secondary" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=lissp"><input class="btn-success" type="button" value="Danh sách"></a>
            </div>
                    
        </form>
            </div>
        </div>
    </div>



