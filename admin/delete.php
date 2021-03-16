<?php
include 'dbcon.php';

if (isset($_GET['t_id']))
{
	echo $id = $_GET['t_id'];
	echo $data = "DELETE from task where t_id = $id";
	$delete = mysqli_query($con,$data);

	if ($delete)
	{
		header("Location:all_task.php");
	}
}
?>