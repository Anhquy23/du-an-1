<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách loại hàng</h1>
    </div>
    <form action="index.php?act=lissp" method="post">
        <input type="text" name="kyw">
        <select name="iddm" >
            <option value="0" selected>Tât cả</option>
            <?php
                foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row mb10 frmdsloai">
        <table >
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GÍA</th>
                <th>HÌNH ẢNH</th>
                <th>LƯỢT XEM</th>
                <th></th>
            </tr>
            <?php
                foreach ($listbl as $binhluan){                
                extract($binhluan);
             
                $xoabl = "index.php?act=xoabl&id=".$id;

                echo '
                    <tr>
                        <td><input type="checkbox" name= "" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$ma_kh.'</td>
                        <td>'.$ma_hh.'</td>
                        <td>'.$noi_dung.'</td>
                        <td>'.$ngay_bl.'</td>
                        <td> <a href= "'.$xoabl.'"><input type="button" value="Xóa"></a> </td>
                    </tr>
                ';
                }
            ?>
        </table>
    </div>
    <div class="input_button">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
    </div>
</div>