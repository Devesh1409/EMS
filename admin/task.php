<?php session_start();?>
<?php include 'header.php';?>
<br><br>
<body style="background-image: url(../upload/6.jpg);
background-size: cover;">
<form method="post" action="task_insert.php" >
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
         <input type="submit" name="submit" value="Submit Task" class=" btn btn-info float-sm-left">
    </div>
    <div class="col-md-9 task1">
      <a href="all_task.php" class="btn btn-info">ALL TASK</a><br>
      <label>Message</label><br>
      <textarea name="task" placeholder="Message/Task" style="height: 332px;width: 1029px;"></textarea>
      
    </div>
    <input type="text" name="assign_by"  class="float-sm-left" value="<?php echo $_SESSION['admin_id']?>">
   
  </div>

</div>
</form>
</body>