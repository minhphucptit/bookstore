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
   
    var data2 = [['Thể loại', 'Lượt mua']];
    <?php 	
    $pq=mysqli_query($conn,"SELECT category.category_name, COUNT(category.category_name) as quantity FROM category
    LEFT JOIN product on product.categoryid = category.categoryid
    LEFT JOIN cart ON cart.productid = product.productid
    GROUP by category.category_name
    ORDER BY qty DESC LIMIT 5");
    $index = 1;
	while($pqrow=mysqli_fetch_array($pq)){ ?>
		data2[<?php echo $index ?>] = [<?php echo "'"; echo (string)$pqrow['category_name'];echo "'" ?>,<?php echo $pqrow['quantity'] ?>];
    
    <?php $index++;}
    ?>
    var data = google.visualization.arrayToDataTable(data2);
    var options = {
        title: 'Biểu đồ thống kê thể loại',
        pieHole: 0.4,
    };
      var chart = new google.visualization.PieChart(document.getElementById("columnchart_values"));
      chart.draw(data, options);
  }
  </script>
</body>
</html>