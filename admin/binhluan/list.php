<div class="content">
    <h3>Danh sách bình luận</h3>
    <table>
        <thead>
            <th></th>
            <th>MÃ BÌNH LUẬN</th>
            <th>NỘI DUNG</th>
            <th>MÃ HÀNG HÓA</th>
            <th>NGƯỜI BÌNH LUẬN</th>
            <th>NGÀY BÌNH LUẬN</th>
            <th></th>
        </thead>
        <tbody>
            <?php 
            foreach($list_bl as $list_bl){
                $xoadm = "index.php?act=xoabl&ma_bl=".$list_bl['ma_bl'];
            ?>
            <tr>
                <td><input type="checkbox"></td>
                <td><?php echo $list_bl['ma_bl']?></td>
                <td><?php echo $list_bl['noi_dung']?></td>
                <td><?php echo $list_bl['ma_sp']?></td>
                <td><?php echo $list_bl['ma_tk']?></td>
                <td><?php echo $list_bl['ngay_bl']?></td>
                <td><a href="<?php echo $xoadm?>" onclick="return confirm('Bạn có chắc chắn xóa?')"><button class="delete">Xóa</button></a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <button class="op">Chọn tất cả</button>
    <button class="op">Bỏ chọn tất cả</button>
    <button class="op">Xóa các mục đã chọn</button>
</div>