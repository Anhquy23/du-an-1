
<style>
    .login-container {
  display: flex;
  justify-content: center;
  margin-top: 23vh;
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
            <h2>ĐĂNG NHẬP</h2>
            <form action="index.php?act=dangnhap" method="POST">
            <div class="user-box">
                <input type="text" name="user" required="">
                <label>Tên đăng nhập</label>
            </div>
            <div class="user-box">
                <input type="password" name="pass" required="">
                <label>Mật khẩu</label>
            </div>
            <input type="submit" value="Đăng nhập" name="dangnhap">
            <a href="index.php?act=quenmk">Quên mật khẩu</a>
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