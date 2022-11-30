<div class="content">
    <div style="background-color: white;">
    <?php if($listbill==[]){
    ?> 
    <h3>Đơn hàng trống</h3>
    <?php }else{
    ?>
    <h3>Đơn hàng của tôi</h3>
        <table>
            <thead>
                <th>MÃ ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT</th>
                <th>SỐ LƯỢNG MẶT HÀNG</th>
                <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TRẠNG THÁI</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                foreach($listbill as $listbill){
                    $soluong = loadall_cart_count($listbill['id']);
                    $xemdh = "index.php?act=xemdh&id=".$listbill['id'];
                ?>
                <tr>
                    <td><?php echo "DA1-0001".$listbill['id'] ?></td>
                    <td><?php echo $listbill['bill_ngay_dat']?></td>
                    <td><?php echo $soluong?></td>
                    <td><?php echo $listbill['bill_tong_tien']?></td>
                    <td><?php if($listbill['bill_trang_thai']==0){echo "Đơn hàng mới";}else if($listbill['bill_trang_thai']==1){echo "Đang xử lý";}else if($listbill['bill_trang_thai']==2){echo "Đang giao hàng";}else if($listbill['bill_trang_thai']==3){echo "Đã giao hàng";} ?></td>
                    <td><a href="<?php echo $xemdh?>"><button>Xem</button></a></td>
                </tr>
                <?php }
                ?>
            </tbody>
        </table>
    <?php }?>
    </div>
</div>