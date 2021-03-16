<?php
include 'dbcon.php';
if (isset($_POST['submit'])) 
{
    $emp_list = $_POST['id'];
    $b = $_POST['task'];
    $c = $_POST['assign_by'];

    // print_r($b);

    foreach ($emp_list as $emp) 
    {
      // print_r($emp);
      	$final = "INSERT INTO task(id,task,assign_by)values('$emp','$b','$c')";
      	$result = mysqli_query($con,$final);
    }
    if ($result) 
    {
    	header("Location:task.php");
    }
}