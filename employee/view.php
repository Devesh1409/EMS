<?php session_start();?>
<?php
include 'header.php';?>

<?php
include 'dbcon.php';
if (isset($_GET['id'])) 
{
   $id = $_GET['id'];
  $data = "SELECT * FROM task WHERE id= $id";
  $result = mysqli_query($con,$data);
  $a = mysqli_fetch_array($result);
}
?>

<div class="container" style="margin-top: 50px;">
   <!--  <h1><?php $_SESSION['name']?></h1> -->
    <div class="row" style="margin-top: 50px;">
    <div>
      <label>Task</label><br>
      <textarea name="task" placeholder="Task" style="height: 150px;width: 850px;"><?php echo $a['task'] ?></textarea>
    </div>
     
    <form method="post" action="view_insert.php">
    <div>
      <label>Reply</label><br>
      <textarea name="reply" placeholder="reply" style="height: 332px;width: 850px;"></textarea>
      <br>
      <input type="text" name="t_id" value="<?php echo $a['t_id'] ?>">
      <input type="text" name="reply_by" value="<?php echo $_SESSION['name'] ?>">
      <input type="submit" name="submit" class="btn btn-primary">
    </div>
    </form> 

       
        </div>
  </div>

 

</body>
</html>