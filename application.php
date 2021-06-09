<html>
<head>
<title>Application Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#d5e1df;">
<div style="background-color:white;height:780px;width:1020px;margin-left:12%;align:center;position:absolute;">
<header style="text-align: center;">
    <div class="first">
        <img src="title_head.jpg">
    </div>
    <div style="padding-top: 20px;padding-bottom: 20px;font-size:25px;"><b>APPLICATION FORM</b></div>           
</header>
<center>
<b>
<p style="font-size:20px;margin-top:20px;">
<?php
            session_start(); 
            error_reporting(0);
            echo "YOUR ROLL NUMBER IS ".$_SESSION["user_name"];
            echo "<img style='margin-left:67%;padding-top:2px;margin-top:-105px;'src='".$_SESSION['image']."' height='100' width='100'/>";
        ?> </p></b></center>
<form action="login.php" method="POST">
<div><button style="margin-left: 70%;background-color:#EA4335">LOGOUT</button></b></div> 
</form>
<form action="applicationinsert.php" method="POST" enctype="multipart/form-data">
<div style="background-color:#d5e1df;height:450px;width:570px;margin-left:23%;align:center;border:1px solid;border-radius:15px;" >
<section style="padding:20px;margin-left:24%;">
    <!--label style="font-size:20px" for="name">Name</label><br>
    <input style="padding:7px;width:65%;" type="text" name="name" placeholder="Enter your name.." required><br>-->
                    
    <!--label style="font-size:20px" for="rollnumber">Roll number</label><br>
    <input style="padding:7px;width:65%;" type="text" name="rollnumber" placeholder="enter your rollnumber.." required><br>--->
                    
    <!--label style="font-size:20px" for="email">Email</label><br>
    <input style="padding:7px;width:65%;" type="email" name="email" placeholder="enter your Email.."required ><br>-->
     
    <label style="font-size:20px;" for="Buses:">Year</label> <br>
    <select id="Buses" name="year" style="padding:7px;width: 65%;" required>
        <option value="0">Select :</option>
        <option value="1ST YEAR">1ST YEAR</option>
        <option value="2ND YEAR">2ND YEAR</option>
        <option value="3RD YEAR">3RD YEAR</option>
        <option value="4TH YEAR">4TH YEAR</option>
    </select><bR>

    <label style="font-size:20px;" for="branch:">Branch</label><br>
    <select id="Branch" name="branch" style="padding:7px;width: 65%;" required>
        <option value="0">Select :</option>
        <option value="CIVIL">CIVIL</option>
        <option value="MECHANICAL">MECHANICAL</option>
        <option value="EEE">EEE</option>
        <option value="ECE">ECE</option>
        <option value="CSE">CSE</option>
        <option value="IT">IT</option>
        <option value="BME">BME</option>
        <option value="PHARMACEUTICAL">PHARMACEUTICAL</option>
    </select><bR>
    
    <label style="font-size:20px;" for="Buses:">Gender</label> <br>
    <select id="Buses" name="gender" style="padding:7px;width: 65%;" required >
        <option value="0">Select :</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br>

    <label style="font-size:20px" for="busstop">Bus stop</label><br>
    <input style="padding:7px;width:65%;" type="text" name="busstop" placeholder="enter your stop.." required><br>
        
    <label style="font-size:20px;" for="Buses:">Buses</label> <br>
    <select id="Buses" name="Bus" style="padding:7px;width: 65%;" >
        <option value="-">Select a bus:</option>
        <option value="1J">1J  -----</option>
        <option value="2J">2J ------</option>
        <option value="3J">3J -----</option>
        <option value="1M">1M -----</option>
        <option value="2M">2M -----</option>
        <option value="3M">3M -----</option>
        <option value="1N">1N -----</option>
        <option value="2N">2N -----</option>
        <option value="3N">3N -----</option>
        <option value="BHEL-1">BHEL-1 -----</option>
        <option value="BHEL-2">BHEL-2 -----</option>
        <option value="BHEL-3">BHEL-3 -----</option>
        <option value="1S">1S -----</option>
        <option value="2S">2S -----</option>
        <option value="1L">1L -----</option>
        <option value="2L">2L -----</option>
        <option value="SSP-1">SSP-1 -----</option>
        <option value="SSP-2">SSP-2 -----</option>
        <option value="ODF-1">ODF-1 -----</option>
        <option value="ODF-2">ODF-2 -----</option>
    </select><br><br>

    <!---label style="font-size:20px" for="images">Image</label><br>
    <input style="padding-bottom:10px"type="file"  name="uploadimage"required ><br>-->

    <input style="padding:5px;width:30%;background-color:#4CAF50" type="submit" name="submit" value="Submit" style="width: 100px;">
</section>
</div>
</form>
</div>
</body>
</html>