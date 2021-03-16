<?php
include 'dbcon.php';
if (isset($_POST['submit'])) 
{
   	echo $a = $_POST['name'];
   	echo $b = $_POST['email'];
   	echo $c = $_POST['password'];
   	echo $d = $_POST['department'];
   	echo $e = $_POST['role'];
   	echo $f = $_POST['number'];
   	echo $g = $_POST['address'];

   	$data = "INSERT INTO user(name,email,password,department,role,phone_number,address)VALUES('$a','$b','$c','$d','$e','$f','$g')";
   	$result = mysqli_query($con,$data);

   	if ($result) 
   	{
   	   header("Location:index.php");	# code...
   	}
}
?>