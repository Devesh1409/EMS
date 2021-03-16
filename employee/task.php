<?php session_start();?>
<?php include 'header.php';?><br><br>
<body  style="background-image: url(../upload/6.jpg);
background-size: cover;">
<div class ="container"><br>
	<center><h1>TASK</h1></center><br>
<table class="table table-bordered">
		<tr>
        <th>#</th>
		    <th>TASK</th>
        <th>DATE</th>
        <th>ACTION</th>
	</tr>
         
         <?php
               
          include "dbcon.php";
          $i =1;
          $a = $_SESSION['id'];
          $data = "SELECT * FROM task WHERE id = $a";
          $result = mysqli_query($con,$data);
          while ($a = mysqli_fetch_array($result)) 
          {
          ?> 


          
        <tr>
           <td><?php echo $i++; ?></td>
           <td><?php echo $a['task']?></td>
           <td><?php echo $a['date_time']?></td>
           <td>
              <a class="btn" style="background: #27ae60;" href="view.php?t_id=<?php echo $a['t_id'] ?>">View</a>
           </td>
 <?php } ?>
     <!--    show.php?id=1 -->
       
        
        </tr>
	</table>
</div>