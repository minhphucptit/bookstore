<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thống kê doanh thu theo khách hàng
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        <div id="columnchart_values" style="width: 1300px; height: 600px;"></div>
        </div>
    </div>
</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
   
    var data2 = [['Element', 'Tổng tiền', {role: 'style'}]];
    <?php 	
    $pq=mysqli_query($conn,"select c.customer_name,sum(p.product_price*ca.qty) AS price from customer AS c
    LEFT JOIN cart ca ON c.userid = ca.userid
    JOIN product p ON p.productid = ca.productid
    GROUP BY c.userid
    ORDER BY price DESC
    LIMIT 5;");
    $index = 1;
	while($pqrow=mysqli_fetch_array($pq)){ ?>
		data2[<?php echo $index ?>] = [<?php echo "'"; echo (string)$pqrow['customer_name'];echo "'" ?>,<?php echo $pqrow['price'] ?>,'color: #396EB0'];
    
    <?php $index++;}
    ?>
    var data = google.visualization.arrayToDataTable(data2);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Bảng thống kê doanh thu theo khách hàng, vnđ",
        width: 900,
        height: 600,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
 
</body>
</html>