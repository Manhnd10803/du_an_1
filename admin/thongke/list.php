<div class="content">
    <h3>Thống kê hàng hóa</h3>
    <table>
        <thead>
            <th>MÃ DANH MỤC</th>
            <th>TÊN DANH MỤC</th>
            <th>SỐ LƯỢNG</th>
            <th>GIÁ CAO NHẤT</th>
            <th>GIÁ THẤP NHẤT</th>
            <th>GIÁ TRUNG BÌNH</th>
        </thead>
        <tbody>
            <?php 
            foreach($listtk as $listtk){
            ?>
            <tr>
                <td><?php echo $listtk['maloai']?></td>
                <td><?php echo $listtk['tenloai']?></td>
                <td><?php echo $listtk['countsp']?></td>
                <td><?php echo $listtk['minsp']?> đ</td>
                <td><?php echo $listtk['maxsp']?> đ</td>
                <td><?php echo $listtk['avgsp']?> đ</td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="index.php?act=bieudo"><button>Biểu đồ</button></a>
</div>