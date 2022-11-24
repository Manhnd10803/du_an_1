<div class="body">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <h3>Thêm sản phẩm</h3>
        <div class="cover">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="tensp" required>
        <label for="">Giá sản phẩm</label>
        <input type="text" name="giasp" required>
        <label for="">Giảm giá</label>
        <input type="text" name="giamgia" required>
        <label for="">Hình sản phẩm</label>
        <input type="file" name="hinh" required>
        <label for="">Ngày nhập</label>
        <input type="date" name="ngaynhap" required>
        <!-- <label for="">Đặc biệt</label>
        <input type="text" name="dacbiet" required> -->
        <label for="">Loại sản phẩm</label>
        <select name="loaisp" id="">
            <?php foreach($list_danhmuc as $danhmuc){
            ?>
            <option value="<?php echo $danhmuc['ma_loai']?>"><?php echo $danhmuc['ten_loai']?></option>
            <?php }?>
        </select>
        <label for="">Mô tả</label>
        <textarea name="mota" cols="30" rows="10" required></textarea>
        <div class="funtion-button">
            <input type="submit" name="themmoi" value="Thêm mới" class="button">
            <input type="reset" value="Nhập lại" class="button">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="button"></a>
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