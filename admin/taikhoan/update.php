<div class="noidung">
    <form action="index.php?act=updatetk" method="post">
        <h3>Sửa tài khoản</h3>
        <label for="">Tên Đăng Nhập</label>
        <input type="text" placeholder="Tên đăng nhập" value="<?php echo $taikhoan['ma_tk']?>" name="username" required>
        <label for="">Mật khẩu</label>
        <input type="text" placeholder="Mật khẩu" name="password" value="<?php echo $taikhoan['mat_khau']?>" required>
        <label for="">Nhập lại mật khẩu</label>
        <input type="text" placeholder="Nhập lại mật khẩu" required>
        <label for="">Họ và tên</label>
        <input type="text" placeholder="Họ Và Tên" name="name" value="<?php echo $taikhoan['ho_ten']?>" required>
        <label for="">Email</label>
        <input type="text" placeholder="Email" name="email" value="<?php echo $taikhoan['email']?>" required>
        <label for="">Vai trò</label>
        <input type="text" placeholder="Vai trò" name="vai_tro" value="<?php echo $taikhoan['role']?>" required>

        <div class="luachon">
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
    </form>
</div>