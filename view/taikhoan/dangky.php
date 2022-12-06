<!-- <script>
    function check() {
        var pass = document.getElementById("password").value
        var re_pass = document.getElementById("repassword").value
        if(pass == re_pass){
            document.getElementById("baoloi").innerHTML = "";
        }else{
            document.getElementById("baoloi").innerHTML = "Không trùng mật khẩu!";
        }
    }
</script> -->


<script>
    function getValue(id) {
        return document.getElementById(id).value.trim();
    }

    function showError(key, mess) {
        document.getElementById(key + "_error").innerHTML = mess;
    }
    // taikhoan
    function validate_taikhoan() {
        let flag = true;
        // tai khoan
        let username = getValue("username");
        if (username == "" || username.length < 5 || !/^[a-zA-Z0-9]+$/.test(username)) {
            flag = false;
            showError("username", "*Vui lòng kiểm tra lại tài khoản");
        } else {
            showError("username", "");
        }

        return flag;
    }
    // matkhau
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
    // họ và tên
    function validate_name() {
        let name = getValue("name");
        if (name == "" || name.length < 5) {
            flag = false;
            showError("name", "*Vui lòng kiểm tra lại Tên");
        } else {
            showError("name", "");
        }
        return flag;
    }
    //email
    function validate_email() {
        let email = getValue("email");
        let regex_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (email == "" || email.length < 5 || regex_email.test(email) == false) {
            flag = false;
            showError("email", "*Vui lòng kiểm tra lại email");
        } else {
            showError("email", "");
        }
        return flag;
    }
    // địa chỉ
    function validate_dia_chi() {
        let dia_chi = getValue("dia_chi");

        if (dia_chi == "") {
            flag = false;
            showError("dia_chi", "*Vui lòng kiểm tra lại địa chỉ");
        } else {
            showError("dia_chi", "");
        }
        return flag;
    }
    // số điện thoại
    function validate_sdt() {
        let sdt = getValue("sdt");
        let sdt_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        if (sdt == "" || sdt_regex.test(sdt) == false) {
            flag = false;
            showError("sdt", "*Vui lòng kiểm tra lại số điện thoại");
        } else {
            showError("sdt", "");
        }
        return flag;
    }
    // onclick
    function validate() {
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
        // nhập lại mk 
        let repassword = getValue("repassword");
        if (password != repassword) {
            alert("Bạn cần nhập lại mật khẩu vì mật khẩu bạn vừa nhập không trùng với mật khẩu trên");
            return false;
        }
        // họ và tên
        let name = getValue("name");
        if (name == "" || name.length < 5) {
            flag = false;
            showError("name", "*Vui lòng kiểm tra lại Tên");
        }
        //email
        let email = getValue("email");
        if (email == "" || email.length < 5 || regex_email.test(email) == false) {
            flag = false;
            showError("email", "*Vui lòng kiểm tra lại email");
        }
        //địa chỉ
        let dia_chi = getValue("dia_chi");

        if (dia_chi == "") {
            flag = false;
            showError("dia_chi", "*Vui lòng kiểm tra lại địa chỉ");
        }
        // số điện thoại
        let sdt = getValue("sdt");
        let sdt_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        if (sdt == "" || sdt_regex.test(sdt) == false) {
            flag = false;
            showError("sdt", "*Vui lòng kiểm tra lại số điện thoại");
        }

        return flag;


    }
</script>
<div class="dangnhap">
    <div class="A">
        <a href="" class="chon">ĐĂNG KÝ</a>
        <a href="index.php?act=dangnhap">ĐĂNG NHẬP</a>
    </div>
    <div class="B" onchange="check()">
        <form action="index.php?act=dangky" method="post">
            <input type="text" placeholder="Tên tài khoản" name="username" id="username" onchange="return validate_taikhoan()">
            <span id="username_error"></span>

            <input type="password" placeholder="Mật khẩu" name="password" id="password" onchange="return validate_password()">
            <span id="password_error"></span>

            <input type="password" placeholder="Nhập lại mật khẩu" name="repassword" id="repassword">


            <input type="text" placeholder="Họ Và Tên" name="name" id="name" onchange="return validate_name()">
            <span id="name_error"></span>

            <input type="email" placeholder="Email" name="email" id="email" onchange="return validate_email()">
            <span id="email_error"></span>

            <input type="text" placeholder="Địa chỉ" name="dia_chi" id="dia_chi" onchange="return validate_dia_chi()">
            <span id="dia_chi_error"></span>

            <input type="text" placeholder="Số điện thoại" name="sdt" id="sdt" onchange=" return validate_sdt()">
            <span id="sdt_error"></span>
            <div class="D">
                <a href=""><input type="submit" value="Đăng ký >" onclick="return validate()" name="submit"></a>
            </div>
        </form>
        <p class="thanhcong">
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </p>
    </div>
</div>