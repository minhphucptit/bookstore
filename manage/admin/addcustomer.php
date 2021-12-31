<?php
	include('session.php');
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	
	$userid=mysqli_insert_id($conn);
	mysqli_query($conn,"insert into customer (userid, customer_name, address, contact) values ('5', '$name', '$address', '$contact')");
	
	?>
		<script>
			window.history.back();
		</script>
	<?php
?>