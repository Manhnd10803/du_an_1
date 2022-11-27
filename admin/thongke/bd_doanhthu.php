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
          foreach ($ngay as $ngay){
        ?>
        "<?php echo $ngay?>",
        <?php
          }
        ?>
      ];
      var yValues = [
        <?php 
          foreach ($tong as $tong){
        ?>
        "<?php echo $tong?>", 
        <?php
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
            text: "Doanh thu theo tuần (VNĐ)",
          },
        },
      });
    </script>
  </body>
</html>
