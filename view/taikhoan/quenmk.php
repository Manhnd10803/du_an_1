<script>
    function getValue(id) {
        return document.getElementById(id).value.trim();
    }
    // hien thi loi
    function showError(key, mess) {
        document.getElementById(key + "_error").innerHTML = mess;
    }

    //code

    function validate_email() {

        // email
        let email = getValue("email");
        let regex_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (email == "" || regex_email.test(email) == false) {
            flag = false;
            showError("email", "*Vui lòng kiểm tra lại email");
        } else {
            showError("email", "");
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
        } else {
            showError("password", "");
        }
        return flag;

    }






    // onclick

    function validate() {
        let flag = true;
        // email
        let email = getValue("email");
        if (email == "" || email.length < 5 || regex_email.test(email) == false) {
            flag = false;
            showError("email", "*Vui lòng kiểm tra lại email");
        }
        // mat khau
        let password = getValue("password");
        if (password == "" || password.length < 5 ||
            !/^[a-zA-Z0-9]+$/.test(password)) {
            flag = false;
            showError("password", "*Vui lòng kiểm tra lại mật khẩu");
        }
        // nhập lại mk 
        let password2 = getValue("password2");
        if (password != password2) {
            flag = false;
            alert("sai");
            // showError("password2", "*Mật khẩu nhập lại sai");
        } 


        return flag;
    }
</script>




<div class="dangnhap">
    <div class="A">
        <p style="color: #EE1E25; font-size: 20px; font-weight: bold;">Lấy lại tài khoản</p>
    </div>
    <div class="B">
        <form action="index.php?act=quenmk" method="post">

            <label for="">Nhập email</label>
            <input type="text" placeholder="Email" name="email" id="email" onchange="return validate_email()">
            <span id="email_error"></span>

            <label for="">Nhập mật khẩu mới</label>
            <input type="password" placeholder="Mật khẩu" name="password" id="password" onchange="return validate_password()">
            <span id="password_error"></span>

            <label for="">Nhập lại mật khẩu mới</label>
            <input type="password" placeholder="Nhập lại mật khẩu" name="password2" id="password2">
            <!-- <span id="password2_error"></span> -->

            <div class="D">
                <a href=""><input type="submit" value="OK >" onclick="return validate()" name="submit"></a>
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