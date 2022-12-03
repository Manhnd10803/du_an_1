<div class="dangnhap">
    <div class="A">
        <p style="color: #EE1E25; font-size: 20px; font-weight: bold;">Lấy lại tài khoản</p>
    </div>
    <div class="B">
        <form action="index.php?act=quenmk" method="post">
            <label for="">Nhập email</label>
            <input type="text" placeholder="Email" name="email" required>
            <label for="">Nhập mật khẩu mới</label>
            <input type="password" placeholder="Mật khẩu" name="password" required>
            <label for="">Nhập lại mật khẩu mới</label>
            <input type="password" placeholder="Mật khẩu" required>
            <div class="D">
                <a href=""><input type="submit" value="OK >" name="submit"></a>
            </div>
        </form>
        <p class="thanhcong">
        <?php 
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
        </p>
        <p class="kothanhcong">
        <?php 
            if(isset($thongbao2)&&($thongbao2!="")){
                echo $thongbao2;
            }
        ?>
        </p>
    </div>
</div>