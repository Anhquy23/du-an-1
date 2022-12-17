<?php
    if(is_array($bill)){
        extract($bill);
    }

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">CẬP NHẬT TÌNH TRẠNG ĐƠN HÀNG</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div  class="table-responsive1">
            <form  action="index.php?act=updatedh" method="POST">
            
            <div style="display: block;" class="row mb10">
                Mã đơn hàng : <br>
                <input type="text" value="<?= $id?>" disabled><br>

                Tình trạng : <br>
                <select name="bill_satus" id="">
                    <option  value="<?php if(isset($bill_satus) &&($bill_satus!= ""))  echo $bill_satus; ?>"><?= get_ttdh($bill_satus)?></option>
                    <option value="0"><?=get_ttdh(0)?></option>                  
                    <option value="1"><?=get_ttdh(1)?></option>
                    <option value="2"><?=get_ttdh(2)?></option>
                    <option value="3"><?=get_ttdh(3)?></option>


                </select>

              
            </div>
            <div  class="row mb10">
                <input   type="hidden" name="id" value="<?php if(isset($id) &&($id>0 )) echo $id; ?>">
                <input style="margin: 12px 10px 0 10px;" class="btn-primary" type="submit" name="capnhat" value="CẬP NHẬT">
                <a href="index.php?act=listdh"><input style="margin: 12px 0 0 0;" class="btn-success" type="button" value="Danh sách đơn hàng"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao != "")) {
                    echo $thongbao;
                }
            ?>
        </form>
            </div>
        </div>
    </div>


