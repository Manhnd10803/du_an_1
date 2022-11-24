<div class="dangnhap">
    <div class="A">
        <p style="color: #EE1E25; font-size: 20px; font-weight: bold;">Cập nhật tài khoản</p>
    </div>
    <div class="B">
        <form action="index.php?act=capnhattk" method="post">
            <label for="">Tên tài khoản</label>
            <input type="text" placeholder="Tên tài khoản" value="<?php echo $taikhoan['ma_kh']?>" disabled>
            <label for="">Mật khẩu</label>
            <input type="password" placeholder="Mật khẩu" name="password" value="<?php echo $taikhoan['mat_khau']?>" required>
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" placeholder="Nhập lại mật khẩu" required> 
            <label for="">Họ và tên</label>
            <input type="text" placeholder="Họ Và Tên" name="name" value="<?php echo $taikhoan['ho_ten']?>" required>
            <label for="">Email</label>
            <input type="text" placeholder="Email" name="email" value="<?php echo $taikhoan['email']?>" required>
            <input type="hidden" name="username" value="<?php echo $taikhoan['ma_kh']?>">
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