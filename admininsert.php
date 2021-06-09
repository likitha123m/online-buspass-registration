<?php
session_start();
error_reporting(0);
$con=mysqli_connect('localhost','root','Yochana@12');
mysqli_select_db($con,'admin');
$name=$_POST['name'];
$id=$_POST['facultyid'];
$email=$_POST['email'];
$pnumber=$_POST['phonenumber'];
$password=$_POST['password'];
$s="select * from adminregister where facultyid='$id'";
$result=mysqli_query($con,$s);
#$hashed=hash('SHA512',$password);
$num=mysqli_num_rows($result);
if($num==1)
{
    //echo 'This faculty id already taken.<br/>';
    //echo 'Please login with your username and password..';
    echo '<script type="text/javascript">'; 
    echo 'alert("This faculty id is already taken.\nPlease login with your username and password..");'; 
    echo  'window.location.href = "login.php";';
    echo '</script>';

}
else
{
    $reg="INSERT INTO adminregister values('$name','$id','$email','$pnumber','$password')";
    mysqli_query($con,$reg);
    //echo 'Registration Successfull..<br/> ';
    //echo 'please go back to login page and login with ypur username and password';
    echo '<script type="text/javascript">'; 
    echo 'alert("Registration Successfull..\nplease go back to login page and login with ypur username and password");'; 
    echo  'window.location.href = "login.php";';
    echo '</script>';
}
?>
<!--html>
<head>
    <title> </title>
</head>
<body>
    <p><a href="login.php"><b>Click here for login page</b></p>
</body>
</html>-->