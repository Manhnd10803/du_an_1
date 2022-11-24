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
            </thead>
            <tbody>
                <?php
                foreach($listbill as $listbill){
                    $soluong = loadall_cart_count($listbill['id']);
                ?>
                <tr>
                    <td><?php echo "DAM-0001".$listbill['id'] ?></td>
                    <td><?php echo $listbill['ngaydathang']?></td>
                    <td><?php echo $soluong?></td>
                    <td><?php echo $listbill['total']?></td>
                    <td><?php if($listbill['bill_status']==0){echo "Đơn hàng mới";}else if($listbill['bill_status']==1){echo "Đang xử lý";}else if($listbill['bill_status']==2){echo "Đang giao hàng";}else if($listbill['bill_status']==3){echo "Đã giao hàng";} ?></td>
                </tr>
                <?php }
                ?>
            </tbody>
        </table>
    <?php }?>
    </div>
</div>