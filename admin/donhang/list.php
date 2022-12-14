<div class="content">
    <h3>Danh sách đơn hàng</h3>
    <form action="index.php?act=listdh" style="width: 100%;" method="POST">
        <div class="timkiem"  style="display: flex; align-items: center; justify-content: space-around;">
            <h4>Tìm kiếm đơn hàng</h4>
            <input type="text" name="kyw" placeholder="Nhập từ khóa" style="width: 40%;">
            <input type="submit" name="OK" value="Tìm kiếm" class="button">
        </div>
    </form>
    <table>
        <thead>
            <th class="border-top-left ml-10"></th>
            <th>MÃ ĐƠN HÀNG</th>
            <th>KHÁCH HÀNG</th>
            <th>SỐ LƯỢNG HÀNG</th>
            <th>GIÁ TRỊ ĐƠN HÀNG</th>
            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
            <th class="border-top-right">THAO TÁC</th>
        </thead>
        <tbody>
            <?php 
            foreach($listbill as $listbill){
                $suadh = "index.php?act=suadh&id=".$listbill['id'];
                $xemdh = "index.php?act=xemdh&id=".$listbill['id'];
                $xoadh = "index.php?act=xoadh&id=".$listbill['id'];
                $soluong = loadall_cart_count($listbill['id']);
            ?>
            <tr>
                <td></td>
                <td><?php echo "DA1-0001".$listbill['id']?></td>
                <td><?php echo $listbill['bill_ho_ten']?></td>
                <td><?php echo $soluong?></td>
                <td><?php echo $listbill['bill_tong_tien']." đ"?></td>
                <td><?php if($listbill['bill_trang_thai']==0){echo "Đơn hàng mới";}else if($listbill['bill_trang_thai']==1){echo "Đang xử lý";}else if($listbill['bill_trang_thai']==2){echo "Đang giao hàng";}else if($listbill['bill_trang_thai']==3){echo "Đã giao hàng";}else if($listbill['bill_trang_thai']==4){echo "Đã hoàn thành";}else if($listbill['bill_trang_thai']==5){echo "Đã hủy";} ?></td>
                <td><a href="<?php echo $suadh?>"><button class="update">Sửa</button></a> <a href="<?php echo $xemdh?>"><button class="update">Xem</button></a> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!-- <button class="op">Chọn tất cả</button> -->
    <!-- <button class="op">Bỏ chọn tất cả</button> -->
    <!-- <button class="op">Xóa các mục đã chọn</button> -->
    <a href="index.php?act=addtocart"><button class="op">Thêm mới đơn hàng</button></a>
</div>