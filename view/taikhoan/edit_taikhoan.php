
<style>
    .login-container {
  display: flex;
  justify-content: center;
  margin-top: 9vh;
}

.login-box{
    width: 400px;
  padding: 10px 20px;
  background: rgba(0, 0, 0, 0.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
  border-radius: 10px;
  position:unset;
top:unset;
    left:unset;
    transform:unset;
}
</style>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Cập nhât tài khoản</h2>
            <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                    
                }
            ?>
            <form action="index.php?act=edit_taikhoan" method="POST">
            <div class="user-box">
                <input type="text" name="user" required="" value="<?=$user?>">
                <label>Tên đăng nhập</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" required="" value="<?=$email?>">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="tel" required="" value="<?=$tel?>">
                <label>Số điện thoại</label>
            </div>
            <div class="user-box">
                <input type="text" name="address" required="" value="<?=$address?>">
                <label>Đia chỉ</label>
            </div>
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            </form>
            <h2 class="thongbao">
            <?php

                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
            ?>
            </h2>
        </div>
    </div>
    
</body>