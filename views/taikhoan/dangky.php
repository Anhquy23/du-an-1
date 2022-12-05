
<style>
    .login-container {
  display: flex;
  justify-content: center;
  margin: 30vh;
  
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
.inputt{
    padding: 10px;
    background-color: #ccc;
    font-size: 18px;
    cursor: pointer;
}
</style>
<head><link rel="stylesheet" type="text/css" href="./views/taikhoan/register.css"></head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>ĐĂNG KÍ</h2>
            <form action="index.php?act=dangky" method="POST">
            <div class="user-box">
                <input type="text" name="user" required="">
                <label>Tên đăng nhập</label>
            </div>
            <div class="user-box">
                <input type="password" name="pass" required="">
                <label>Mật khẩu</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="tel" required="">
                <label>Số điện thoại</label>
            </div>
            <div class="user-box">
                <input type="text" name="address" required="">
                <label>Đia chỉ</label>
            </div>
            <div class="login">
                <a href="index.php?act=dangnhap">Bạn đã có tài khoản</a>
            </div>
            <input class="inputt" type="submit" value="Đăng ký" name="dangky">
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