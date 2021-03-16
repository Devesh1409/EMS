<?php session_start();?>
<?php include 'header.php';?>
<br><br>
<div class="container">
<table class="table table-bordered" style="margin-top: 25px;">
<tr>
  <th>Valid From</th>
  <th>Valid To</th>
  <th>Earning Leave</th>
  <th>Medical leave</th>
  <th>Casual Leave</th>
  <th>Action</th>
  
</tr>
<?php
$id = $_SESSION['id'];
include 'dbcon.php';
$data = "SELECT * FROM assign_leave WHERE id = $id";
$result = mysqli_query($con,$data);
while ($a=mysqli_fetch_array($result)) 
{
  
?>
<tr>
  <td><?php echo $a['valid_from']?></td>
  <td><?php echo $a['valid_to']?></td>
  <td><?php echo $a['earning_leave']?></td>
  <td><?php echo $a['medical_leave']?></td>
  <td><?php echo $a['casual_leave']?></td>
  <td><a class="btn btn-info" href="leave_display.php">View Leaves</a></td>
</tr>

<?php }?>
</table>
</div>
<form method="post" action="leave_insert.php" >
<div class="container" >
  <h3 style="color: #17a2b8; font-size: 50px;"><b>LEAVE</b></h3><br>
  <div class="row">
        
        
    </div>
    <div class="col-md-9 task1">
      <label>Leave From</label><br>
      <input type="date" name="leave_from" class="form-control">
      <label>Leave To</label><br>
      <input type="date" name="leave_to" class="form-control">
      <label>Earning Leave</label><br>
      <input type="text" name="earning_leave" class="form-control" placeholder="Number of Leave">
      <label>Medical Leave</label><br>
      <input type="text" name="medical_leave" class="form-control" placeholder="Number of Leave">
      <label>Casual Leave</label><br>
      <input type="text" name="casual_leave" class="form-control" placeholder="Number of Leave">
      
    </div><br><br>
    <input type="submit" name="request_leave" value="Request Leave" class=" btn btn-info float-sm-left">
  </div>
<input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
</div>
</form>