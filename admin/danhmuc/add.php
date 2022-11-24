<div class="noidung">
    <form action="index.php?act=adddm" method="post">
        <h3>Thêm danh mục</h3>
        <label for="">Tên loại</label>
        <input type="text" name="tenloai" required>
        <!-- <label for="">Icon</label>
        <input type="text" name="icon" required> -->
        <div class="luachon">
            <input type="submit" name="themmoi" value="Thêm mới" class="button">
            <input type="reset" value="Nhập lại" class="button">
            <a href="index.php?act=listdm"><input type="button" value="Danh sách" class="button"></a>
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