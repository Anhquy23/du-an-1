<div class="row">
    <div class="row frmtitle">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <div class="row frmcontent">
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
                <input type="text" name="giasp" >
            </div>
            <div class="input">
                Hình ảnh <br>
                <input type="file" name="hinhsp" >
            </div>
            <div class="input">
                Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=lissp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao != "")) echo $thongbao;

            ?>
        </form>
    </div>
</div>