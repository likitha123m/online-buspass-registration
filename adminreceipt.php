<html>
<head>
<title>Insertion Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#d5e1df;">
<div style="background-color:white;height:640px;width:1020px;margin-left:12%;align:center;position:absolute;">
<header style="text-align: center;">
    <div class="first">
        <img src="title_head.jpg">
    </div>
    <div style="padding-top: 20px;padding-bottom: 20px;font-size:25px;"><b>DATA FORM</b></div>           
</header>
<form action="login.php" method="POST">
<div><button style="margin-left: 75%;background-color:#EA4335;color:white;border:1px solid;border-radius:3px;">LOGOUT</button></b></div> 
</form>
<form action="datainsert.php" method="POST" enctype="multipart/form-data">
<div style="background-color:#d5e1df;height:400px;width:570px;margin-left:22%;align:center;border:1px solid;border-radius:15px;" >
<section style="padding:20px;margin-left:24%;">
    <label style="font-size:20px" for="name">Name</label><br>
    <input style="padding:7px;width:65%;" type="text" name="name" placeholder="Enter the student name.." required><br>
                    
    <label style="font-size:20px" for="rollnumber">Roll Number</label><br>
    <input style="padding:7px;width:65%;" type="text" name="rollnumber" placeholder="Enter the student rollnumber.." required><br>
                    
    <label style="font-size:20px" for="receiptid">Receipt Number</label><br>
    <input style="padding:7px;width:65%;" type="text" name="Receiptno" placeholder="enter the student receipt no.."required ><br>

    <label style="font-size:20px" for="feepaid">Fee Paid</label><br>
    <input style="padding:7px;width:65%;" type="text" name="feepaid" placeholder="enter fee paid.." required><br>

    <label style="font-size:20px" for="email">Email Address</label><br>
    <input style="padding:7px;width:65%;" type="email" name="email" placeholder="enter the student email.." required><br>

    <label style="font-size:20px" for="year">Year Of Study</label><br>
    <input style="padding:7px;width:65%;" type="text" name="year" placeholder="enter year of study.." required><br>
                       
    <input style="padding:5px;width:30%;background-color:#4CAF50;color:white;border:1px solid;border-radius:3px;" type="submit" name="submit" value="Submit" style="width: 100px;">
</section>
</div>
</form>
</div>
</body>
</html>