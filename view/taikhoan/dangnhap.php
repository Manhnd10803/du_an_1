<div class="dangnhap">
    <div class="A">
        <a href="index.php?act=dangky">ĐĂNG KÝ</a>
        <a href="" class="chon">ĐĂNG NHẬP</a>
    </div>
    <div class="B">
        <form action="index.php?act=dangnhap" method="post">
            <input type="text" placeholder="Tài khoản" name="username" required>
            <input type="password" placeholder="Mật khẩu" name="password" required>
            <div class="C">
                <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                <a href="">Đăng nhập với SMS</a>
            </div>
            <div class="D">
                <a href=""><input type="submit" value="Đăng nhập >" name="submit"></a>
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