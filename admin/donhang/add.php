<div class="body mt-40">
    <form action="index.php?act=adddh" method="post">
        <div class="cover">
        <h3>Thêm mới đơn hàng</h3>
        <input type="hidden" value="" name="id_bill">
        <label for="">Mã đơn hàng</label>
        <input type="text" name="madh" value="" required>
        <label for="">Tên khách hàng</label>
        <input type="text" name="tenkh" value="" required>
        <label for="">Số điện thoại</label>
        <input type="text" name="sdt" value="" required>
        <label for="">Địa chỉ</label>
        <input type="text" name="diachi" value="" required>
        <label for="">Giá trị đơn hàng</label>
        <input type="text" name="giatri" value="" required>
        <label for="">Tình trạng đơn hàng</label>
        <select name="ttdh" id="">
            <option value="0">Đơn hàng mới</option>
            <option value="1" >Đang xử lý</option>
            <option value="2" >Đang giao hàng</option>
            <option value="3" >Đã giao hàng</option>
        </select>
        <div class="funtion-button">
            <input type="submit" name="capnhat" value="Thêm" class="button">
            <input type="reset" value="Nhập lại" class="button">
            <a href="index.php?act=listdh"><input type="button" value="Danh sách" class="button"></a>
        </div>
        <p class="thanhcong">
        <?php 
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
        </div>
        </p>
    </form>
</div>