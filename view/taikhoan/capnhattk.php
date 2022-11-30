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
<div class="dangnhap" onchange="check()" >
    <div class="A">
        <p style="color: #EE1E25; font-size: 20px; font-weight: bold;">Cập nhật tài khoản</p>
    </div>
    <div class="B">
        <form action="index.php?act=capnhattk" method="post">
            <label for="">Tên tài khoản</label>
            <input type="text" placeholder="Tên tài khoản" value="<?php echo $taikhoan['ma_tk']?>" disabled>
            <label for="">Mật khẩu</label>
            <input type="password" placeholder="Mật khẩu" id="password" name="password" value="<?php echo $taikhoan['mat_khau']?>" required>
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" placeholder="Nhập lại mật khẩu" id="repassword" required> 
            <p style="color: #EE1E25;" id="baoloi"></p>
            <label for="">Họ và tên</label>
            <input type="text" placeholder="Họ Và Tên" name="name" value="<?php echo $taikhoan['ho_ten']?>" required>
            <label for="">Địa chỉ</label>
            <input type="text" placeholder="Địa chỉ" name="dia_chi" value="<?php echo $taikhoan['dia_chi']?>" required>
            <label for="">Số điện thoại</label>
            <input type="text" placeholder="Số điện thoại" name="sdt" value="<?php echo $taikhoan['sdt']?>" required>
            <label for="">Email</label>
            <input type="text" placeholder="Email" name="email" value="<?php echo $taikhoan['email']?>" required>
            <input type="hidden" name="username" value="<?php echo $taikhoan['ma_tk']?>">
            <div class="D">
                <a href=""><input type="submit" value="Cập nhật >" name="submit"></a>
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
