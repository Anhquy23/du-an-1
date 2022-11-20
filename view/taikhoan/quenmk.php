
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
            <h2>Quên mật khẩu</h2>
            <form action="index.php?act=quenmk" method="POST">
            <div class="user-box">
                <input type="email" name="email" required="" >
                <label>Email</label>
            </div>
            <input type="submit" value="Gửi" name="guiemail">
            </form>
            </div>
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