
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
            </div>
            <div class="input">
                Tên sản phẩm <br>
                <input type="text" name="tensp" >
            </div>
            <div class="input">
                Giá <br>
                <input type="number" name="giasp" >
            </div>
            <div class="input ">
                Hình ảnh <br>
                <input  type="file" name="hinhsp" >
            </div>
            <div class="input">
                Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div style="margin: 20px 0 0 15px;" class="">
                <input class="btn-primary" type="submit" name="themmoi" value="THÊM MỚI">
                <input class="btn-secondary" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=lissp"><input class="btn-success" type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao != "")) echo $thongbao;
                if(isset($err)) {
                    echo '<span style="color: red">'.$err.'</span>';
                }        
            ?>
        </form>
            </div>
        </div>
    </div>



