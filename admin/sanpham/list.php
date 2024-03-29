<div class="content">
    <h3>Danh sách sản phẩm</h3>
    <form action="index.php?act=listsp" style="width: 100%;" method="POST">
        <div class="timkiem"  style="display: flex; align-items: center; justify-content: space-around;">
            <h4>Tìm kiếm sản phẩm</h4>
            <input type="text" name="kyw" placeholder="Nhập từ khóa" style="width: 40%;">
            <h4>Loại sản phẩm</h4>
            <select name="iddm" id="" style="width: 15%;">
                <option value="0" selected>Tất cả</option>
                <?php foreach($list_danhmuc as $danhmuc){
                ?>
                <option value="<?php echo $danhmuc['ma_loai']?>"><?php echo $danhmuc['ten_loai']?></option>
                <?php }?>
            </select>
            <input type="submit" name="OK" value="Tìm kiếm" class="button">
        </div>
    </form>
    <table>
        <thead>
            <th></th>
            <th>MÃ SẢN PHẨM</th>
            <th>TÊN SẢN PHẨM</th>
            <th>ĐƠN GIÁ</th>
            <th>GIẢM GIÁ</th>
            <th>HÌNH</th>
            <th>NGÀY NHẬP</th>
            <th>SỐ LƯỢT XEM</th>
            <th>THAO TÁC</th>
        </thead>
        <tbody>
            <?php 
            foreach($list_sanpham as $sanpham){
                $suasp = "index.php?act=suasp&id=".$sanpham['ma_sp'];
                $xoasp = "index.php?act=xoasp&id=".$sanpham['ma_sp'];
            ?>
            <tr>
                <td><input type="checkbox"></td>
                <td><?php echo $sanpham['ma_sp']?></td>
                <td><?php echo $sanpham['ten_sp']?></td>
                <td><?php echo $sanpham['gia_sp']?></td>
                <td><?php echo $sanpham['giam_gia_sp']?></td>
                <td><img src="<?php echo $upload_dir.$sanpham['hinh_anh_sp']?>" alt=""></td>
                <td><?php echo $sanpham['ngay_nhap']?></td>
                <td><?php echo $sanpham['luot_xem']?></td>
                <td><a href="<?php echo $suasp?>"><button class="update">Sửa</button></a> <a href="<?php echo $xoasp?>" onclick="return confirm('Bạn có chắc chắn xóa?')"><button class="delete">Xóa</button></a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <button class="op">Chọn tất cả</button>
    <button class="op">Bỏ chọn tất cả</button>
    <button class="op">Xóa các mục đã chọn</button>
    <a href="index.php?act=addsp"><button class="op">Nhập thêm</button></a>
</div>