<?php
include 'header.php';
include 'dbcon.php';
?>

<div class="container"><br><br>
  <center><h1>ALL TASK</h1></center><br>
<table class="table table-bordered">
  <tr>
    <th>Sr.no</th>
    <th>Employee Name</th>
    <th>Task</th>
    <th>Date</th>
    <th>Action</th>
  </tr>

  <?php
        include "dbcon.php";
        $i =1;
        $data = "SELECT * FROM user JOIN task where user.id=task.id ";
        $result = mysqli_query($con,$data);
      while ($a= mysqli_fetch_array($result))
      {
        
      

  ?>
  <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $a['name']?></td>
    <td><?php echo $a['task'] ?></td>
    <td><?php echo $a['date_time'] ?></td>
    <td>
     <a class="btn" style="background: #27ae60;" href="edit.php? t_id=<?php echo $a['t_id'] ?>">Edit</a>
     <a class="btn"style="background: #e74c3c;color: wheat;" href="delete.php? t_id=<?php echo $a['t_id'] ?>">Delete</a>
    
    </td>
  </tr>
<?php } ?>
</table>
</div>
</body></html>