<?php
include 'dbcon.php';
if (isset($_POST['request_leave'])) 
{
     $id = $_POST['id'];
     $a = $_POST['leave_from'];
     $b = $_POST['leave_to'];
     $c = $_POST['earning_leave'];
     $d = $_POST['medical_leave'];
     $e = $_POST['casual_leave'];
     $status = "pending";
     
    
    
     	$data = "INSERT INTO apply_leave(id,leave_from,leave_to,earning_leave,medical_leave,casual_leave,status)values('$id','$a','$b','$c','$d','$e','$status')";
     $result = mysqli_query($con,$data); 
      
     if ($result) 
     {
        header("location:leave.php");
     }

}
?>