<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="bieudo.css" />
  </head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <body>
    <canvas id="myChart" style="width: 100%; max-width: 800px; display: flex; margin: auto;"></canvas>

    <script>
      var xValues = [
        <?php 
        $i=0;
          foreach (array_count_values($sl_theo_ngay) as $key => $value){
        ?>
        "<?php echo $key?>",
        <?php
          if($i==6){
            break;
          }
          $i++;
          }
        ?>
      ];
      var yValues = [
        <?php 
          $y=0;
          foreach (array_count_values($sl_theo_ngay) as $key => $value){
        ?>
        "<?php echo $value?>",
        <?php
          if($y==6){
            break;
          }
          $y++;
          }
        ?>
      ];
      var barColors = [
        "red",
        "green",
        "blue",
        "orange",
        "brown",
        "black",
        "violet",
      ];

      new Chart("myChart", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [
            {
              backgroundColor: barColors,
              data: yValues,
            },
          ],
        },
        options: {
          legend: { display: false },
          title: {
            display: true,
            text: "Số lượng đơn hàng theo tuần",
          },
        },
      });
    </script>
  </body>
</html>
