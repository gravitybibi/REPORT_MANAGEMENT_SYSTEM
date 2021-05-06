<?php

include_once('admin_report_management.php');

if (isset($_GET['delete']))

{
	$row['report_id'] =  $_GET['delete'];
	
	$c = mysqli_connect("localhost","root","","report_management_system");
	$s = "DELETE FROM employee WHERE report_id = '$row[report_id]'";
	$result = mysqli_query($c,$s);
	

?>

<script>
window.location="admin_report_management.php";
</script>

<?php 
}

?>