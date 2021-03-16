<?php session_start();?>
<?php include 'header.php';?>
<br><br>
<?php
include 'dbcon.php';
if (isset($_GET['t_id'])) {
   $id = $_GET['t_id'];
  $data = "SELECT * FROM task WHERE t_id = $id";
  $result = mysqli_query($con,$data);
  $a = mysqli_fetch_array($result);
}
?>
<?php
include 'dbcon.php';
if (isset($_POST['update'])) 
{
  $a  = $_POST['task'];
  $data = "UPDATE task SET task = '$a' WHERE t_id = '$id'";
  $result = mysqli_query($con,$data);
  if ($result) {
    header('location:all_task.php');
  }
  else{
    echo "<script>alert('not updated')</script>";
  }
}
?>
<body style="background-image: url(../upload/6.jpg);
background-size: cover;">
<div class="container" >
  <center><h1 style="color: #17a2b8; font-size: 70px;"><b> EDIT TASK</b></h1></center><br>
  <div class="row">
    <div class="col-md-12 task1">
      <h3>Task</h3><br>
      <textarea name="task" placeholder="Message/Task"  style="height: 332px;width: 1029px;"><?php echo $a['task']?></textarea>
       <input type="submit" name="update" value="Update Task" class=" btn btn-info float-sm-left">
    </div>
   
  </div>

</div>
</form>
</body>