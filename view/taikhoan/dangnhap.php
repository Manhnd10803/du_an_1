<script>
    function getValue(id) {
        return document.getElementById(id).value.trim();
    }

    function showError(key, mess) {
        document.getElementById(key + "_error").innerHTML = mess;
    }

    function validate_taikhoan() {
        let flag = true;
        // tai khoan
        let username = getValue("username");
        if (username == "" || username.length < 5 || !/^[a-zA-Z0-9]+$/.test(username)) {
            flag = false;
            showError("username", "*Vui lòng kiểm tra lại tài khoản");
        }else{
            showError("username", "");
        }

        return flag;
    }

    function validate_password() {
        // mat khau
        let password = getValue("password");
        if (password == "" || password.length < 5 ||
          !/^[a-zA-Z0-9]+$/.test(password)) {
            flag = false;
            showError("password", "*Vui lòng kiểm tra lại mật khẩu");
        }else{
            showError("password", "");
        }
        return flag;

    }

    function validate(){
        // validate_taikhoan();
        // validate_password();
        let flag = true;
        // tai khoan
        let username = getValue("username");
        if (username == "" || username.length < 5 || !/^[a-zA-Z0-9]+$/.test(username)) {
            flag = false;
            showError("username", "*Vui lòng kiểm tra lại tài khoản");
        }
        // mat khau
        let password = getValue("password");
        if (password == "" || password.length < 5 ||
          !/^[a-zA-Z0-9]+$/.test(password)) {
            flag = false;
            showError("password", "*Vui lòng kiểm tra lại mật khẩu");
        }
        return flag;


    }
</script>
 



<div class="dangnhap">
    <div class="A">
        <a href="index.php?act=dangky">ĐĂNG KÝ</a>
        <a href="" class="chon">ĐĂNG NHẬP</a>
    </div>
    <div class="B">
        <form action="index.php?act=dangnhap" method="post">
            <input type="text" placeholder="Tài khoản" name="username" id="username" onchange="return validate_taikhoan()">
            <span id="username_error" style="color: red ;"></span>

            <input type="password" placeholder="Mật khẩu" name="password" id="password" onchange="return validate_password()">

            <span id="password_error" style="color: red ;" ></span>

            <div class="C">
                <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                <a href="">Đăng nhập với SMS</a>
            </div>
            <div class="D">
                <a href=""><input type="submit" value="Đăng nhập >" onclick="return validate()" name="submit">

                </a>
            </div>
        </form>
        <p class="thanhcong">
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </p>
        <p class="kothanhcong">
            <?php
            if (isset($thongbao2) && ($thongbao2 != "")) {
                echo $thongbao2;
            }
            ?>
        </p>
    </div>
</div>