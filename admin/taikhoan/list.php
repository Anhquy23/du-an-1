<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách tài khoản</h1>
    </div>
    <div class="row mb10 frmdsloai">
        <table >
            <tr>
                <th></th>
                <th>MÃ TK</th>
                <th>USER</th>
                <th>PASS</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>TEL</th>
                <th>ROLE</th>
                <th></th>
            </tr>
            <?php
                foreach ($listtaikhoan as $taikhoan){                
                extract($taikhoan);
                $suatk = "index.php?act=suatk&id=".$id;
                $xoatk = "index.php?act=xoatk&id=".$id;
                
                echo '
                    <tr>
                        <td><input type="checkbox" name= "" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td><a href= "'.$suatk.'"><input type="button" value="Sửa"></a> <a href= "'.$xoatk.'"><input type="button" value="Xóa"></a> </td>
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
    </div>
</div>