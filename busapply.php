<?php
/*session_start();
$con=mysqli_connect('localhost','root','Yochana@12');
mysqli_select_db($con,'admin');
//$rollno=$_POST['rollnumber'];
$rollno=$_SESSION['user_name'];
$receiptid=$_POST['receiptnumber'];
$Feepaid=$_POST['feepaid'];
$_SESSION['fee_paid']=$Feepaid;
$s="select * from receipt where receiptid='$receiptid' && rollnumber='$rollno' && feepaid='$Feepaid' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:application.php'); 
}
else
{
    //header('location:login.php');
    echo '<script type="text/javascript">'; 
    echo 'alert("Invalid Receiptnumber or Feepaid\nPlease enter correct details");'; 
    echo  'window.location.href = "receiptno.php";';
    echo '</script>';
}*/
?>