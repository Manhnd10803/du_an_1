<script>
    function check() {
        var pass = document.getElementById("password").value
        var re_pass = document.getElementById("repassword").value
        if(pass == re_pass){
            document.getElementById("baoloi").innerHTML = "";
        }else{
            document.getElementById("baoloi").innerHTML = "Không trùng mật khẩu!";
        }
    }
    //
    function getValue(id) {
        return document.getElementById(id).value.trim();
    }

    function showError(key, mess) {
        document.getElementById(key + "_error").innerHTML = mess;
    }
    // function riêng
    // matkhau
    function validate_password() {
        // mat khau
        let password = getValue("password");
        if (password == "" || password.length < 5 ||
            !/^[a-zA-Z0-9]+$/.test(password)) {
            flag = false;
            showError("password", "*Vui lòng nhập mật khẩu mới");
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

    // function chung
    function validate(){
        let flag = true;
         // mat khau
         let password = getValue("password");
        if (password == "" || password.length < 5 ||
            !/^[a-zA-Z0-9]+$/.test(password)) {
            flag = false;
            showError("password", "*Vui lòng kiểm tra lại mật khẩu");
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

    }
    
</script>
<div class="dangnhap" onchange="check()" >
    <div class="A">
        <p style="color: #EE1E25; font-size: 20px; font-weight: bold;">Cập nhật tài khoản</p>
    </div>
    <div class="B">
        <form action="index.php?act=capnhattk" method="post">
            <label for="">Tên tài khoản</label>
            <input type="text" placeholder="Tên tài khoản" value="<?php echo $taikhoan['ma_tk']?>" disabled>
            <label for="">Mật khẩu</label>
            <input type="password" placeholder="Mật khẩu" id="password" name="password" value="<?php echo $taikhoan['mat_khau']?>" onchange="return validate_password()" disabled required>
            <span id="password_error"></span>
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" placeholder="Nhập lại mật khẩu" id="repassword" required> 
            <p style="color: #EE1E25;" id="baoloi"></p>
            <label for="">Họ và tên</label>
            <input type="text" placeholder="Họ Và Tên" name="name" id="name"  value="<?php echo $taikhoan['ho_ten']?>" onchange="return validate_name()" required>
            <span id="name_error"></span>
            <label for="">Địa chỉ</label>
            <input type="text" placeholder="Địa chỉ" name="dia_chi" id="dia_chi" value="<?php echo $taikhoan['dia_chi']?>" onchange="return validate_dia_chi()" required>
            <span id="dia_chi_error"></span>
            <label for="">Số điện thoại</label>
            <input type="text" placeholder="Số điện thoại" name="sdt" id="sdt" value="<?php echo $taikhoan['sdt']?>" onchange="return validate_sdt()" required>
            <span id="sdt_error"></span>
            <label for="">Email</label>
            <input type="text" placeholder="Email" name="email" id="email" value="<?php echo $taikhoan['email']?>" onchange="return validate_email()" required>
            <span id="email_error"></span>
            <input type="hidden" name="username" value="<?php echo $taikhoan['ma_tk']?>">
            <div class="D">
                <a href=""><input type="submit" value="Cập nhật >" onclick="return validate()" name="submit"></a>
            </div>
        </form>
        <p class="thanhcong">
        <?php 
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
        </p>
    </div>
</div>
