<?php session_start();?>
<?php include 'header.php';?><br><br>
<body  style="background-image: url(../upload/7.jpg);
background-size: cover;">
<div class="container"><br>
	<center><h1>ADMIN DASHBOARD</h1></center>
	<a href="task.php"><input type="submit" name="submit" value="TASK" class="btn btn-info float-sm-right"></a>
	<h4><?php echo $_SESSION['name']; ?></h4><br>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Depatment</th>
		<th>Role</th>
		<th>Number</th>
		<th>Action</th>
	</tr>

	<?php
        include "dbcon.php";
        $data = "SELECT * FROM user where role ='employee'";
        $result = mysqli_query($con,$data);
	    while ($a= mysqli_fetch_array($result))
	    {
	    	
	    

	?>
	<tr>
		<td><?php echo $a['id']?></td>
		<td><?php echo $a['name'] ?></td>
		<td><?php echo $a['email'] ?></td>
		<td><?php echo $a['department'] ?></td>
		<td><?php echo $a['role'] ?></td>
		<td><?php echo $a['phone_number'] ?></td>
		<td>
			 <a class="btn" style="background: wheat;" href="task_reply.php?id=<?php echo $a['id'] ?>"> View</a>
		</td>
	</tr>
<?php } ?>
</table>
</div>
</body>