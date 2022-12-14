
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">DANH SÁCH KHÁCH HÀNG</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
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
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                            foreach ($listtaikhoan as $taikhoan){                
                            extract($taikhoan);
                            $suatk = "index.php?act=suatk&id=".$id;
                            $xoatk = "index.php?act=xoakh&id=".$id;
                            
                            echo '
                                <tr>
                                    <td><input type="checkbox" name= "chk" id="'.$id.'"></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>
                                    <td><a href= "'.$xoatk.'"><input class="btn-danger" type="button" value="Xóa"></a> </td>
                                </tr>
                            ';
                            }
                        ?>
                        </tr>
                    </tbody>
                </table>
                <div class="input_button">
                    <input onclick="selects()" class="btn-info" type="button" value="Chọn tất cả">
                    <input onclick="deSelect()" class="btn-info " type="button" value="Bỏ chọn tất cả">
                    <button onclick="deleteSelected()" class="btn-danger">Xóa các mục đã chọn</button>
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

            function deleteSelected() {
                document.cookie = "isSelected=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
                var ele=document.getElementsByName('chk');
                let idSelected = '';  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].checked) {
                        idSelected += ele[i].id + ','; 
                    } 
                }  
                if (idSelected) {
                    document.cookie = `isSelected=${idSelected}`;
                    <?php
                        echo " window.location.replace('index.php?act=deletealluser') ";
                    ?>
                    // window.location.replace('index.php?act=deletealluser');
                }
            }
            
        </script>  
