<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div id="myChart" style="width:100%;max-width:600px; height:500px; margin: 0 auto;">
    </div>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng sản phẩm'],
            <?php
                $tongdm = count($listtk); 
                $i=1;
                foreach($listtk as $listtk){
                    if($i==$tongdm) $dauphay = ""; else $dauphay=",";
                    echo "['".$listtk['tenloai']."', ".$listtk['countsp']."]".$dauphay."\r\n";
                    $i++;
                }
            ?>
            ]);
            var options = {
                title: 'Biểu đồ thống kê hàng hóa theo loại',
                is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>