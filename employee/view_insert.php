<?php
include 'dbcon.php';
if (isset($_POST['submit'])) 
{
   echo $a = $_POST['reply'];
   echo $b = $_POST['t_id'];
   echo $c = $_POST['reply_by'];

   $data = "INSERT INTO task_reply(reply,t_id,reply_by)VALUES('$a','$b','$c')";
   $result = mysqli_query($con,$data);	# code...
}
?>