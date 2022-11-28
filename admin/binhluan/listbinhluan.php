
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">BÌNH LUẬN</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>UserID</th>
                            <th>IDpro</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                foreach ($listbinhluan as $binhluan) : ?>
                    <!-- extract($binhluan);
                    $xoabl = "index.php?act=xoabl&id".$id; -->

                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $binhluan['id'] ?></td>
                        <td><?= $binhluan['noidung'] ?></td>
                        <td><?= $binhluan['iduser'] ?></td>
                        <td><?= $binhluan['idpro'] ?></td>
                        <td><?= $binhluan['ngaybinhluan'] ?></td>
                        <td>
                            <button class="btn-danger"><a style="text-decoration: none; color: white;;" href="index.php?act=xoabl&id=<?= $binhluan['id'] ?>">Xóa</a></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                        </tr>
                    </tbody>
                </table>
                <div class="input_button">
                    <input onclick="selects()" class="btn-info" type="button" value="Chọn tất cả">
                    <input onclick="deSelect()" class="btn-info " type="button" value="Bỏ chọn tất cả">
                    <input class="btn-danger" type="button" value="Xóa các mục đã chọn">
                </div>
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
