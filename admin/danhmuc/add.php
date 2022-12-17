
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">THÊM DANH MỤC</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
            <form action="index.php?act=adddm" method="POST">
            <div class="input">
                Mã loại <br>
                <input type="text" name="maloai" disabled id="maloai">
            </div>
            <div class="input">
                Tên loại <br>
                <input type="text" name="tenloai" id="tenloai">
                    <br>
                    <p style="color: red ;" id="loitl"></p>
                    <br>
            </div>
            <div style="margin-top: 20px;" class="input">
                <input class="btn-primary" type="submit" name="themmoi" value="THÊM MỚI" onclick="return validate()">
                <a href="index.php?act=lisdm"><input class="btn-success" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao != "")) echo $thongbao;

            ?>
        </form>
            </div>
        </div>
        <script>
            function validate(){
                var tenloai =  document.getElementById("tenloai").value;

                if (tenloai == "") {
                document.getElementById("loitl").innerHTML = "Không được để trống ";
                return false;
                } else document.getElementById("loitl").innerHTML = "";
            }
        </script>
    </div>
