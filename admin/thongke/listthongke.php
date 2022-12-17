
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">THỐNG KÊ</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Số lượng</th>
                        <th>Giá cao</th>
                        <th>Giá thấp</th>
                        <th>Giá trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        foreach($listthongke as $thongke){
                            extract($thongke);
                         echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.number_format($maxprice).' đ</td>
                            <td>'.number_format($minprice).' đ</td>
                            <td>'.number_format($avgprice).' đ</td>                          
                        </tr>';
                        }
                        
                    ?>
                    </tr>
                </tbody>
            </table>
            <div class="input_button">
                <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
            </div>
        </div>
    </div>
</div>
