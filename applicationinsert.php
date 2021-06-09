<html>
<head>
<title>Buspass</title>
</head>
<body style="margin-left:10%;">
<header>
<img src="title_head.jpg" style="width:1000px;height:100px;" >
<h1 style="font-size:40px;margin-left:31%;">BUS PASS</h1>
<form action="login.php" method="POST">
<div><button style="margin-left: 75%;background-color:#EA4335;color:white;">EXIT</button></b></div> 
</form>
</header>
<style>
.div1{
    width:700px;
    margin-left:7%;
    height:590px;
    border:3px solid black;
}
.div2{
    width:200px;
    margin-left:7%;
    height:50px;
    border:2px solid black;
}
</style>

<div class="div1">
<b>
<?php
session_start();
error_reporting(0);
$con = mysqli_connect("localhost", "root", "Yochana@12");
mysqli_select_db($con,'admin');
$name=$_SESSION['name'];
//$Rollnumber=$_POST['rollnumber'];
$Rollnumber=$_SESSION['user_name'];
$Email=$_SESSION['email'];
$Year=$_POST['year'];
$branch=$_POST['branch'];
$Gender=$_POST['gender'];
$Busstop=$_POST['busstop'];
$Bus=$_POST['Bus'];
//$filename=$_FILES["uploadimage"]["name"];
//$tempname=$_FILES["uploadimage"]["tmp_name"];
//$folder="images/".$filename;
//move_uploaded_file($tempname,$folder);
$reg="INSERT INTO bustable values('$name','$Rollnumber','$Email','$Year','$branch','$Gender','$Busstop','$Bus')";
mysqli_query($con,$reg);
//echo ' Successfull..<br/> ';
$query="select * from bustable where Rollno='$Rollnumber'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);  


$conn = mysqli_connect("localhost", "root", "Yochana@12");
mysqli_select_db($conn,'register');

echo "<p style='margin-left:20%;'>B. V. RAJU INSTITUTE OF TECHNOLOGY(AUTONOMOUS)</p>";
echo "<img style='margin-left:67%;padding-top:2px;'src='".$_SESSION['image']."' height='100' width='100'/>";
//echo "<img style='margin-left:80%;margin-top:-32px;padding-top:2px;'src='symbol.jpg' height='30' width='30'/>";
//echo "<p style='font-size:20px;margin-left:15%;margin-top:-15%;'><br>Name : ".$result['studentname']."</p>";
echo "<p style='font-size:20px;margin-left:15%;margin-top:-15%;'><br>Name : ".$_SESSION['name']."</p>";
echo "<p style='font-size:20px;margin-left:15%;'>Rollnumber : ".$result['Rollno']."</p>";
echo "<p style='font-size:20px;margin-left:15%;'>Year : ".$result['year']."</p>";
echo "<p style='font-size:20px;margin-left:15%;'>Branch : ".$result['branch']."</p>";
echo "<p style='font-size:20px;margin-left:15%;'>Gender : ".$result['gender']."</p>";
echo "<p style='font-size:20px;margin-left:69%;margin-top:-16%;'>BUS : ".$result['bus']."</p>";
echo "<p style='font-size:20px;margin-left:62%;'>BusStop : ".$result['busstop']."</p>";
//echo "<p style='font-size:20px;margin-left:15%;margin-top:6%;'>Email :  ".$result['Email']."</p>";

echo "<p style='font-size:20px;margin-left:15%;margin-top:6%;'>Email :  ".$_SESSION['email']."</p>";
//."<br><img src='".$result['picsource']."' height='100' width='100'/>";
echo "<p style='font-size:20px;margin-left:15%;'>FEE PAID : ".$_SESSION['fee_paid']."</p>";
$total=33500;
$balance=$total-$_SESSION['fee_paid'];
echo "<p style='font-size:20px;margin-left:15%;'>DUE AMOUNT : ".$balance."*"."</p>";
echo "<div style='margin-left:61%;margin-top:-5%;' class='div2'></div>";
echo "<p style='margin-left:61%;'<br>Signature of Bus incharge";
echo "<div style='margin-left:61%;' class='div2'></div>";
echo "<p style='margin-left:61%;'<br>Signature of Transport incharge";
//echo "your name is".$_SESSION['name'];


//$conn = mysqli_connect("localhost", "root", "Yochana@12");
//mysqli_select_db($conn,'register');
//echo "your name is".$_SESSION['name'];


?>
</b>
</div>
<a style="font-size:30px;margin-left:33%;color:blue; cursor:pointer;" titlt="print screen" alt="print screen" onclick="window.print(); "target="_blank"><b>Print</b></a>
<!---a href="Buspass" download>Click here to Download the Buspass </a>-->
</body>
</html>
