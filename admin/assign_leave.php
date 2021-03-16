<?php session_start();?>
<?php include 'header.php';?>
<br><br>
<body style="background-image: url(../upload/6.jpg);
background-size: cover;">
<form method="post" action="assign_insert.php" >
<div class="container" >
  <center><h1 style="color: #17a2b8; font-size: 70px;"><b>TASK</b></h1></center><br>
  <div class="row">
    <div class="col-md-3 task" >
      <h3>Employee Lists</h3>
      <a href="logout.php" class="btn btn-info">logout</a><br>
    
       <?php
        include "dbcon.php";

        $data = "SELECT * FROM user WHERE role = 'employee' ";
        $result = mysqli_query($con,$data);

        while($a = mysqli_fetch_array($result))
        {
        ?>
        <input type="checkbox" name="id[]" value="<?php echo $a['id'] ?>" style="margin-right: 10px"><?php echo $a['name'] ?><br>
        
        <?php } ?>
        <br><br><br>
         <input type="submit" name="submit" value="Assign By" class=" btn btn-info float-sm-left">
    </div>
    <div class="col-md-9 task1">
      <a href="all_apply.php" class="btn btn-info">ALL Apply Leave</a><br>
      <label>Valid From</label><br>
      <input type="date" name="valid_from" class="form-control">
      <label>Valid To</label><br>
      <input type="date" name="valid_to" class="form-control">
      <label>Earning Leave</label><br>
      <input type="text" name="earning_leave" class="form-control" placeholder="Number of Leave">
      <label>Medical Leave</label><br>
      <input type="text" name="medical_leave" class="form-control" placeholder="Number of Leave">
      <label>Casual Leave</label><br>
      <input type="text" name="casual_leave" class="form-control" placeholder="Number of Leave">
      
    </div>
    <input type="text" name="assign_by"  class="float-sm-left" value="<?php echo $_SESSION['admin_id']?>">
   
  </div>

</div>
</form>
</body>