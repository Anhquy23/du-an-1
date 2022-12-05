<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">DANH SÁCH ĐƠN HÀNG </h1>
<!-- <a href="index.php?url=chi_tiet_sp&id=<?= $san_pham['id'] ?>"></a>

function chi_tiet_sp(){
    if(isset($_GET['id'])){
        $id_sp = $_GET['id'];
        get_product_id($id_sp);
    }
}

function get_product_id($id_sp){
    $sql = "SELECT * FROM product WHERE id = $id_sp";
    $product = pdo_query($sql);
    return $product;
}

<a href=""><?= $product[''] ?></a> -->
<!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                       
                    <form style="margin: 10px 0;" action="index.php?act=listdh" method="post">
                        <input type="text" placeholder="Nhập mã đơn hàng" name="kyw" required>
                        <input class="btn-primary" type="submit" name="listok" value="GO">
                    </form>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG THANH TOÁN</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>THAO TÁC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php foreach ($listbill as $bill):?>             
                       <?php extract($bill);
                        $suasp = "index.php?act=suadh&id=".$id;
                 
                        $ctdh = "index.php?act=ctdh&id=".$id;
                        $kh = $bill["bill_name"].'
                        <br>'.$bill["bill_email"].'
                        </br>'.$bill["bill_address"].'
                        </br>'.$bill["bill_tel"];
                        $ttdh = get_ttdh($bill['bill_satus']);
                        $countsp = load_cart_count($bill["id"]);
                        $tttt = get_tttt($bill['bill_thanhtoan']);?>

                            <tr>
                                <td><?=$bill['id']?></td>
                                <td><?=$kh?></td>
                                <td><?=$countsp?></td>
                                <td><?=number_format($bill['total'])?> đ</td>
                                <td><?=$ttdh?></td>
                                <td>
                                    <?=
                                        
                                        $tttt?>
                            
                                </td>
                                <td><?=$bill['ngaydathang']?></td>
                                <td style="text-aligh:center;"><a href= "<?=$suasp?>"><input style="margin-bottom: 5px" class="btn-primary" type="button" value="Sửa tình trạng đơn hàng"></a> 
                               
                                <a href= "<?=$ctdh?>"><input  class="btn-info" type="button" value="Chi tiết hóa đơn "></a> 
                                </td>
                            </tr>
                        <?php endforeach;?>
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