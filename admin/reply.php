<?php session_start();?>
<?php include 'header.php';?>
<br><br>
<table class="table table-bordered">
                    <tr>
                           <th>S no.</th>
                            <th>Reply</th>
                            <th>Date & Time</th>
                    </tr>
                  <?php
                      include 'dbcon.php';
                    $id = $_GET['t_id'];
                      $i = 1;
                      $data = "SELECT * FROM task_reply WHERE t_id = $id";
                      $result = mysqli_query($con,$data);
                      while ($a= mysqli_fetch_array($result)) 
                      {
                      
                      ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $a['reply'] ?></td>
                        <td><?php echo $a['date_time'] ?></td>
                      </tr>
                  <?php }?>
                  
                    </table>