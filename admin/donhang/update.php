<div class="body mt-40">
    <form action="index.php?act=suadh" method="post">
        <div class="cover">
            <h3>Sửa đơn hàng</h3>
            <input type="hidden" value="<?php echo $dh['id'] ?>" name="id_bill">
            <label for="">Mã đơn hàng</label>
            <input type="text" name="madh" value="<?php echo $dh['id'] ?>" disabled>
            <label for="">Tên khách hàng</label>
            <input type="text" name="tenkh" value="<?php echo $dh['bill_ho_ten'] ?>" disabled>
            <label for="">Số điện thoại</label>
            <input type="text" name="sdt" value="<?php echo $dh['bill_sdt'] ?>" disabled>
            <label for="">Địa chỉ</label>
            <input type="text" name="diachi" value="<?php echo $dh['bill_dia_chi'] ?>" required>
            <label for="">Giá trị đơn hàng</label>
            <input type="text" name="giatri" value="<?php echo $dh['bill_tong_tien'] ?>" disabled>
            <label for="">Tình trạng đơn hàng</label>

            <input type="hidden" name="madh" value="<?php echo $dh['id'] ?>">
            <input type="hidden" name="tenkh" value="<?php echo $dh['bill_ho_ten'] ?>" >
            <input type="hidden" name="sdt" value="<?php echo $dh['bill_sdt'] ?>" >
            <input type="hidden" name="giatri" value="<?php echo $dh['bill_tong_tien'] ?>" >

            <select name="ttdh" id="">
                <option value="0" <?php if ($dh['bill_trang_thai'] == 0){echo "selected";}?> <?php if($dh['bill_trang_thai']>0){echo "disabled";}?> >Đơn hàng mới</option>
                <option value="1" <?php if ($dh['bill_trang_thai'] == 1){echo "selected";}?> <?php if($dh['bill_trang_thai']>1){echo "disabled";}?> >Đang xử lý</option>
                <option value="2" <?php if ($dh['bill_trang_thai'] == 2){echo "selected";}?> <?php if($dh['bill_trang_thai']>2){echo "disabled";}?> >Đang giao hàng</option>
                <option value="3" <?php if ($dh['bill_trang_thai'] == 3){echo "selected";}?> <?php if($dh['bill_trang_thai']>3){echo "disabled";}?> >Đã giao hàng</option>
            </select>
            <div class="funtion-button">
                <input type="submit" name="capnhat" value="Cập nhật" class="button">
                <input type="reset" value="Nhập lại" class="button">
                <a href="index.php?act=listdh"><input type="button" value="Danh sách" class="button"></a>
            </div>
            <p class="thanhcong">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </p>
    </form>
</div>
</div>