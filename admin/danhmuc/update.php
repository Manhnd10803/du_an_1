<div class="body">
    <form action="index.php?act=updatedm" method="post">
        <h3>Sửa danh mục</h3>
        <div class="cover">
        <label for="">Mã loại</label>
        <input type="text" name="maloai" value="<?php echo $danhmuc['ma_loai']?>" required>
        <label for="">Tên loại</label>
        <input type="text" name="tenloai" value="<?php echo $danhmuc['ten_loai']?>" required>
        <!-- <label for="">Icon</label>
        <?php echo $danhmuc['icon']?>
        <input type="text" name="icon" value='<?php echo $danhmuc['icon']?>' required> -->

        <div class="funtion-button">
            <input type="submit" name="capnhat" value="Cập nhật" class="button">
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
        </div>
        
    </form>
</div>