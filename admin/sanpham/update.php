<div class="noidung">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <h3>Sửa sản phẩm</h3>
        <label for="">Mã sản phẩm</label>
        <input type="text" name="masp" value="<?php echo $sanpham['ma_sp']?>" required>
        <label for="">Tên sản phẩm</label>
        <input type="text" name="tensp" value="<?php echo $sanpham['ten_sp']?>" required> 
        <label for="">Giá sản phẩm</label>
        <input type="text" name="giasp" value="<?php echo $sanpham['gia_sp']?>" required>
        <label for="">Giảm giá</label>
        <input type="text" name="giamgia" value="<?php echo $sanpham['giam_gia_sp']?>" required>
        <label for="">Hình sản phẩm</label>
        <img src="<?php echo $upload_dir.$sanpham['hinh_anh_sp']?>" alt="" style="width: 60%; margin: 0 auto;">
        <input type="file" name="hinh">
        <label for="">Ngày nhập</label>
        <input type="date" name="ngaynhap" value="<?php echo $sanpham['ngay_nhap']?>" required>
        <label for="">Loại sản phẩm</label>
        <select name="loaisp" id="">
            <?php foreach($list_danhmuc as $danhmuc){
                if($danhmuc['ma_loai'] == $sanpham['ma_loai']){
            ?>
            <option value="<?php echo $danhmuc['ma_loai']?>" selected><?php echo $danhmuc['ten_loai']?></option>
            <?php }else{ ?>
            <option value="<?php echo $danhmuc['ma_loai']?>"><?php echo $danhmuc['ten_loai']?></option>
            <?php }} ?>
        </select>
        <label for="">Mô tả</label>
        <textarea name="mota" cols="30" rows="10" required ><?php echo $sanpham['mo_ta_sp']?></textarea>
        <div class="luachon">
            <input type="submit" name="capnhat" value="Cập nhật" class="button">
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
    </form>
</div>

