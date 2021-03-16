<?php session_start();?>
<?php include 'header.php';?><br><br><br>
<body  style="background-image: url(../upload/6.jpg);
background-size: cover;">

<table class="table table-bordered">
                    <tr>
                      <th>S no.</th>
                      <th>Task</th>
                      <th>Assigned At</th>
                      <th>Action</th>
                    </tr>
                    <?php
                         include 'dbcon.php';
                        
                         $id = $_GET['id'];
                         $i = 1;
                        $data = "SELECT * FROM task  WHERE id = $id order by t_id desc";
                          $result = mysqli_query($con,$data);
                          while($a=mysqli_fetch_array($result)) 
                          {
                        ?>
                    <tr>
                      <td><?php echo $i++ ?></td>
                      <td><?php echo $a['task']?></td>
                      <td><?php echo $a['date_time']?></td>
                      <td>
                        <a class="btn btn-info" href="reply.php?t_id=<?php echo $a['t_id']?>" >Task Status</a>
                      </td>
                    </tr>
                    <?php } ?>
                  
                  </table>