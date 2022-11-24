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
</script>
<div class="dangnhap">
    <div class="A">
        <a href="" class="chon">ĐĂNG KÝ</a>
        <a href="index.php?act=dangnhap">ĐĂNG NHẬP</a>
    </div>
    <div class="B" onchange="check()">
        <form action="index.php?act=dangky" method="post">
            <input type="text" placeholder="Tên tài khoản" name="username" required>
            <input type="password" placeholder="Mật khẩu" name="password" id="password" required>
            <input type="password" placeholder="Nhập lại mật khẩu" name="repassword" id="repassword" required>
            <p style="color: #EE1E25;" id="baoloi"></p>
            <input type="text" placeholder="Họ Và Tên" name="name" required>
            <input type="email" placeholder="Email" name="email" required>
            <div class="D">
                <a href=""><input type="submit" value="Đăng ký >" name="submit"></a>
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