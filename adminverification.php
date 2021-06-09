<?php
session_start();
$con=mysqli_connect('localhost','root','Yochana@12');
mysqli_select_db($con,'admin');
$id=$_POST['username'];
$password=$_POST['password'];
$s="select * from adminregister where facultyid='$id' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['admin_name']=$id;
    header('location:adminreceipt.php'); 
}
else
{
    //header('location:login.php');
    echo '<script type="text/javascript">'; 
    echo 'alert("Invalid Username or Password");'; 
    echo  'window.location.href = "login.php";';
    echo '</script>';
}
?>