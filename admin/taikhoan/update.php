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
<div class="body" onchange="check()">
    <form action="index.php?act=updatetk" method="post">
        <h3 class="mt-20">Sửa tài khoản</h3>
        <div class="cover">
        <label for="">Tên Đăng Nhập</label>
        <input type="text" placeholder="Tên đăng nhập" value="<?php echo $taikhoan['ma_tk']?>" name="username" disabled>
        <input type="hidden" placeholder="Tên đăng nhập" value="<?php echo $taikhoan['ma_tk']?>" name="username">
        <label for="">Mật khẩu</label>
        <input type="text" placeholder="Mật khẩu" name="password" id="password" value="<?php echo $taikhoan['mat_khau']?>" required>
        <label for="">Nhập lại mật khẩu</label>
        <input type="text" placeholder="Nhập lại mật khẩu" name="repassword" id="repassword" required>
        <p style="color: #EE1E25;" id="baoloi"></p>
        <label for="">Họ và tên</label>
        <input type="text" placeholder="Họ Và Tên" name="name" value="<?php echo $taikhoan['ho_ten']?>" required>
        <label for="">Địa chỉ</label>
        <input type="text" placeholder="Địa chỉ" name="dia_chi" value="<?php echo $taikhoan['dia_chi']?>" required>
        <label for="">Số điện thoại</label>
        <input type="text" placeholder="Số điện thoại" name="sdt" value="<?php echo $taikhoan['sdt']?>" required>
        <label for="">Email</label>
        <input type="text" placeholder="Email" name="email" value="<?php echo $taikhoan['email']?>" required>
        <label for="">Vai trò</label>
        <input type="text" placeholder="Vai trò" name="vai_tro" value="<?php echo $taikhoan['role']?>" required>
        <div class="funtion-button">
            <input type="submit" name="capnhat" value="Cập nhật" class="button">
            <input type="reset" value="Nhập lại" class="button">
            <a href="index.php?act=listtk"><input type="button" value="Danh sách" class="button"></a>
        </div>
        
        <p class="thanhcong">
        <?php 
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
        </p>
        </div>
        
    </form>
</div>
