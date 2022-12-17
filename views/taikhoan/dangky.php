<style>
    .login-container {
        display: flex;
        justify-content: center;
        margin: 30vh;

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
            <h2>ĐĂNG KÍ</h2>
            <form action="index.php?act=dangky" method="POST">
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
                <div class="user-box">
                    <input type="text" name="email" id="email">
                    <br>
                    <p style="color: red ;" id="loiemail"></p>
                    <br>
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="text" name="tel" id="tel">
                    <br>
                    <p style="color: red ;" id="loitel"></p>
                    <br>
                    <label>Số điện thoại</label>
                </div>
                <div class="user-box">
                    <input type="text" name="address" id="address">
                    <br>
                    <p style="color: red ;" id="loiaddress"></p>
                    <br>
                    <label>Đia chỉ</label>
                </div>
                <div class="login">
                    <a href="index.php?act=dangnhap">Bạn đã có tài khoản</a>
                </div>
                <input class="inputt" type="submit" value="Đăng ký" name="dangky" onclick="return validate()">
            </form>

        </div>
    </div>
    <script>
        function validate() {
            var user = document.getElementById("user").value;
            var pass = document.getElementById("pass").value;
            var email = document.getElementById("email").value;
            var tel = document.getElementById("tel").value;
            var address = document.getElementById("address").value;
            
            var checktel = /^[0][0-9]{9}$/;
            var checkmail = /^[a-z][a-z0-9A-Z-_.]{2,}\@[a-z]{2,}\.[a-z.]{2,}$/;
            var checkpass = /^[A-Za-z]\w{7,14}$/;

            if (user == "") {
                document.getElementById("loiuser").innerHTML = "Không được để trống ";
                return false;
            } else document.getElementById("loiuser").innerHTML = "";
            if (pass == "") {
                document.getElementById("loipass").innerHTML = "Hãy nhập mật khẩu !";
                return false;
            } else if (!checkpass.test(pass)) {
                document.getElementById("loipass").innerHTML = "Yêu cầu nhập mật khẩu từ 7 đến 14 kí tự";
                return false;
            } else document.getElementById("loipass").innerHTML = "";
            if (email == "") {
                document.getElementById("loiemail").innerHTML = "không được để trống";
                return false;
            } else if (!checkmail.test(email)) {
                document.getElementById("loiemail").innerHTML = "Nhập sai định dạng mail rồi bạn ơi";
                return false;
            } else document.getElementById("loiemail").innerHTML = "";
            if (tel == "") {
                document.getElementById("loitel").innerHTML = "Không được để trống";
                return false;
            } else if (!checktel.test(tel)) {
                document.getElementById("loitel").innerHTML = "điện thoại có 10 số bắt đầu từ số 0";
                return false;
            } else document.getElementById("loitel").innerHTML = "";
            if (address == "") {
                document.getElementById("loiaddress").innerHTML = "Không được để trống ";
                return false;
            } else document.getElementById("loiaddress").innerHTML = "";

            return true;

        }
    </script>
</body>
