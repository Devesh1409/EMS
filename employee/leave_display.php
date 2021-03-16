<?php session_start();?>
<?php include 'header.php';?>
<br><br>

<table class="table table-bordered" style="margin-top: 25px;">
<tr>
  <th>Leave From</th>
  <th>Leave To</th>
  <th>Earning Leave</th>
  <th>Medical leave</th>
  <th>Casual Leave</th>
  <th>Status</th>
  <th>Comment</th>
  
  
</tr>
<?php
$id = $_SESSION['id'];
include 'dbcon.php';
$data = "SELECT * FROM apply_leave WHERE id = $id";
$result = mysqli_query($con,$data);
while ($a=mysqli_fetch_array($result)) 
{
  
?>
<tr>
  <td><?php echo $a['leave_from']?></td>
  <td><?php echo $a['leave_to']?></td>
  <td><?php echo $a['earning_leave']?></td>
  <td><?php echo $a['medical_leave']?></td>
  <td><?php echo $a['casual_leave']?></td>
  <td><?php echo $a['status']?></td>
  <td><?php echo $a['comment']?></td>

</tr>
<?php }?>
</table>