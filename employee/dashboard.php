<?php session_start();?>
<?php include 'header.php';?><br><br>
<body style="background-image: url(../upload/9.jpg);
background-size: cover;">
<div class ="container"><br>
	<center><h1>Employee Profile</h1></center><br>
<table class="table table-bordered">
		<tr>
  			<th>Name</th>
  			<th>Email</th>
		    <th>Department</th>
		    <th>Phone NO.</th>
        
	</tr>
         
         <?php
               
          include "dbcon.php";
          $id = $_SESSION['id'];
          $data = "SELECT * FROM user WHERE id = $id";
          $result = mysqli_query($con,$data);
          while ($a = mysqli_fetch_array($result)) 
          {
          ?> 


          
        <tr>
           <td><?php echo $a['name'] ?></td>
		       <td><?php echo $a['email'] ?></td>
           <td><?php echo $a['department']?></td>
           <td><?php echo $a['phone_number']?></td>
          
     
         <?php } ?>
     <!--    show.php?id=1 -->
       
        
        </tr>
	</table>
</div>