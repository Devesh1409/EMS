<?php 
include 'dbcon.php';
if (isset($_POST['approved'])) 
{
	$id = $_POST['apply_id'];
	$a = $_POST['comment'];
	$status = 'Approved';

	$data = "UPDATE apply_leave set comment = '$a', status = '$status' WHERE apply_id = $id ";
	$result = mysqli_query($con,$data);

	if($result) 
	{
		header('location:all_apply.php');
	}
}

if (isset($_POST['rejected'])) 
{
	$id = $_POST['apply_id'];
	$a = $_POST['comment'];
	$status = 'Rejected';

	$data = "UPDATE apply_leave set comment = '$a', status = '$status' WHERE apply_id = $id ";
	$result = mysqli_query($con,$data);

	if($result) 
	{
		header('location:all_apply.php');
	}
}
?>