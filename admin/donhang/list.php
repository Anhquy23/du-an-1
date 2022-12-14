
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">DANH SÁCH ĐƠN HÀNG </h1>

<!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="input_button">
                            <input onclick="selects()" class="btn-info" type="button" value="Chọn tất cả">
                            <input onclick="deSelect()" class="btn-info " type="button" value="Bỏ chọn tất cả">
                            <input class="btn-danger" type="button" value="Xóa các mục đã chọn">
                        </div>
                    <form style="margin: 10px 0;" action="index.php?act=listdh" method="post">
                        <input type="text" placeholder="Nhập mã đơn hàng" name="kyw">
                        <input class="btn-primary" type="submit" name="listok" value="GO">
                    </form>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>THAO TÁC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        foreach ($listbill as $bill){                
                        extract($bill);
                        $suasp = "index.php?act=suasp&id=".$id;
                        $xoasp = "index.php?act=xoadh&id=".$id;
                        $kh = $bill["bill_name"].'
                        <br>'.$bill["bill_email"].'
                        </br>'.$bill["bill_address"].'
                        </br>'.$bill["bill_tel"];
                        $ttdh = get_ttdh($bill['bill_satus']);
                        $countsp = load_cart_count($bill["id"]);

                        echo '
                            <tr>
                                <td><input type="checkbox" name= "chk" id=""></td>
                                <td>'.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td><a href= "'.$suasp.'"><input style="margin-bottom: 5px" class="btn-primary" type="button" value="Sửa"></a> <a href= "'.$xoasp.'"><input  class="btn-danger" type="button" value="Xóa"></a> </td>
                            </tr>
                        ';
                        }
        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    function selects(){  
            var ele=document.getElementsByName('chk');  
            for(var i=0; i<ele.length; i++){  
                if(ele[i].type=='checkbox')  
                    ele[i].checked=true;  
            }  
        }  
        function deSelect(){  
            var ele=document.getElementsByName('chk');  
            for(var i=0; i<ele.length; i++){  
                if(ele[i].type=='checkbox')  
                    ele[i].checked=false;  
            }  
        }  
</script>
