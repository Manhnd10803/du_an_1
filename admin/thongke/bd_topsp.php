<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bieudo.css" />
      </head>
  <script
    type="text/javascript"
    src="https://www.gstatic.com/charts/loader.js"
  ></script>

  <body>
    <div
      id="myChart"
      style="width: 100%; max-width: 600px; height: 500px"
    ></div>

    <script>
      google.charts.load("current", { packages: ["corechart"] });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Contry", "Số lượng"],
          <?php
            foreach ($top_buy_sp as $top){
          ?>
          ["<?php echo $top["ten_sp"]?>", <?php echo $top["sl_sp"]?>],
          <?php
            }
          ?>
        ]);

        var options = {
          title: "Sản phẩm được đặt nhiều nhất",
        };

        var chart = new google.visualization.BarChart(
          document.getElementById("myChart")
        );
        chart.draw(data, options);
      }
    </script>
  </body>
</html>
