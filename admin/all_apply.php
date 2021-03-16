<?php session_start();?>
<?php include 'header.php';?>
<br><br>

 <table class="table table-bordered" style="margin-top: 25px;">
<tr>
  <th>Employee Name</th>
  <th>Leave From</th>
  <th>Leave To</th>
  <th>Earning Leave</th>
  <th>Medical leave</th>
  <th>Casual Leave</th>
  <th>Status</th>
  <th>Comment</th>
  <th>Action</th>
  
  
</tr>
<?php
$id = $_SESSION['id'];
include 'dbcon.php';
$data = "SELECT * FROM apply_leave JOIN user WHERE apply_leave.id = user.id";
$result = mysqli_query($con,$data);
while ($a=mysqli_fetch_array($result)) 
{
  
?>
<tr>
  <td><?php echo $a['name'] ?></td>
  <td><?php echo $a['leave_from']?></td>
  <td><?php echo $a['leave_to']?></td>
  <td><?php echo $a['earning_leave']?></td>
  <td><?php echo $a['medical_leave']?></td>
  <td><?php echo $a['casual_leave']?></td>
  <td><?php echo $a['status']?></td>
  <td>
    <form method="post" action="leave_update.php">
      <textarea name="comment" class="form-control"></textarea>
  </td>
  <input type="hidden" name="apply_id" value="<?php echo $a['apply_id'] ?>">
  <td>
    <button name="approved" class="btn btn-info">Approved</button>
    <button name="rejected" class="btn btn-danger">Rejected</button>
</form>
</td>
</tr>
<?php }?>
</table>