<style>
    .login-container {
        display: flex;
        justify-content: center;
        margin-top: 30vh;
    }

    .login-box {
        width: 400px;
        padding: 10px 20px;
        background: rgba(0, 0, 0, 0.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        position: unset;
        top: unset;
        left: unset;
        transform: unset;
    }

    .inputt {
        padding: 10px;
        background-color: #ccc;
        font-size: 18px;
        cursor: pointer;
    }
</style>

<head>
    <link rel="stylesheet" type="text/css" href="./views/taikhoan/register.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>ĐĂNG NHẬP</h2>
            <form action="index.php?act=dangnhap" method="POST">
                <div class="user-box">
                    <input type="text" name="user" id="user">
                    <br>
                    <p style="color: red ;" id="loiuser"></p>
                    <br>
                    <label>Tên đăng nhập</label>
                </div>
                <div class="user-box">
                    <input type="password" name="pass" id="pass">
                    <br>
                    <p style="color: red ;" id="loipass"></p>
                    <br>
                    <label>Mật khẩu</label>
                </div>
                <div class="login">
                    <a href="index.php?act=dangky">Đăng ký tài khoản</a>
                    <a href="index.php?act=quenmk">quên mật khẩu</a>

                </div>
                <input class="inputt" type="submit" value="Đăng nhập" name="dangnhap" onclick="return validate()">
            </form>

        </div>
    </div>
    <script>
        function validate() {
            let user = document.getElementById("user").value;
            let pass = document.getElementById("pass").value;

            if (user == "") {
                document.getElementById("loiuser").innerHTML = "Không được để trống ";
                return false;
            } else document.getElementById("loiuser").innerHTML = "";
            if (pass == "") {
                document.getElementById("loipass").innerHTML = " Hãy nhập mật khẩu ! ";
                return false;
            } else document.getElementById("loipass").innerHTML = "";
            return true;
        }
    </script>
</body>