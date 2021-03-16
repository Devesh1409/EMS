<?php session_start();?>
<?php include 'dbcon.php';
if (isset($_POST['submit'])) 
{
    $a = $_POST['email'];
    $b = $_POST['password'];

    $data = "SELECT * FROM user WHERE email ='$a' && password = '$b' ";
    $result = mysqli_query($con,$data);

    $total = mysqli_num_rows($result);
    $new = mysqli_fetch_array($result);
    
    if ($total==1) 
    { 
         $role = $new['role'];
         // echo $role;
         $_SESSION['admin_id']=$new['id'];
         $_SESSION['name']=$new['name'];
         header("Location:admin/dashboard.php");
        if($role =='Admin')
        {

          header("Location:admin/dashboard.php");
        }
        elseif ($role =='Employee')
        {
           $_SESSION['id']=$new['id'];
           $_SESSION['name']=$new['name'];
          header("Location:employee/dashboard.php"); 
        } 
    }
    else
    {
      echo "<script> alert('please check your username or password')</script>";
    } 
}

?>
