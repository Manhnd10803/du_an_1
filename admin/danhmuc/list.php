<div class="content">
    <h3 class="mb-50">Danh sách loại sản phẩm</h3>
    <table>
        <thead> 
            <th class="border-top-left">MÃ LOẠI</th>
            <th>TÊN LOẠI</th>
            <!-- <th>ICON</th> -->
            <th class="border-top-right">THAO TÁC</th>
        </thead>
        <tbody>
            <?php 
            foreach($list_danhmuc as $danhmuc){
                $suadm = "index.php?act=suadm&id=".$danhmuc['ma_loai'];
                $xoadm = "index.php?act=xoadm&id=".$danhmuc['ma_loai'];
            ?>
            <tr>
                
                <td><?php echo $danhmuc['ma_loai']?></td>
                <td><?php echo $danhmuc['ten_loai']?></td>
                <!-- <td><?php echo $danhmuc['icon']?></td> -->
                <td><a href="<?php echo $suadm?>"><button class="update">Sửa</button></a> <a href="<?php echo $xoadm?>" onclick="return confirm('Bạn có chắc chắn xóa?')"><button class="delete">Xóa</button></a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="index.php?act=adddm"><button class="op">Nhập thêm</button></a>
</div>