<?php
include 'dbcon.php';
if (isset($_POST['submit'])) 
{
	echo $a =$_POST['valid_from'];
	echo $b =$_POST['valid_to'];
	echo $c =$_POST['earning_leave'];
	echo $d =$_POST['medical_leave'];
	echo $e =$_POST['casual_leave'];
	echo $f =$_POST['assign_by'];
	     $emp_list =$_POST['id'];

	// print_r($emp_list);

    foreach ($emp_list as $emp) 
    {
	     // print_r($emp);
		$data = "INSERT INTO assign_leave(valid_from,valid_to,earning_leave,medical_leave,casual_leave,assign_by,id)values('$a','$b','$c','$d','$e','$f','$emp')";
		$result = mysqli_query($con,$data);
	}

	if ($result) 
	{
		header("Location:assign_leave.php");
	}
}




?>