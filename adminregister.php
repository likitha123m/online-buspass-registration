<html>
<head>
<title>Admin registration page </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#d5e1df;">
<div style="background-color:white;height:610px;width:1020px;margin-left:12%;align:center;position:absolute;">
<header style="text-align: center;">
    <div class="first">
        <img src="title_head.jpg">
    </div>
    <div style="padding-top: 20px;padding-bottom: 20px;font-size:25px;"><b>ADMIN REGISTRATION FORM</b></div>           
</header>
<form action="login.php" method="POST">
<div><button style="margin-left: 75%;background-color:#EA4335;color:white;border:1px solid;border-radius:3px;"> EXIT </button></b></div> 
</form>
<form action="admininsert.php" method="POST">
<div style="background-color:#d5e1df;height:350px;width:570px;margin-left:22%;align:center;border:1px solid;border-radius:15px;" >
<section style="padding:20px;margin-left:24%;">
    <label style="font-size:20px" for="name">Name</label><br>
    <input style="padding:7px;width:65%;" type="text" name="name" placeholder="Enter your name.." required><br>
                    
    <label style="font-size:20px" for="facultyid">Faculty Id</label><br>
    <input style="padding:7px;width:65%;" type="text" name="facultyid" placeholder="enter your faculty id.." required><br>
                    
    <label style="font-size:20px" for="email">Email</label><br>
    <input style="padding:7px;width:65%;" type="email" name="email" placeholder="enter your Email.."required ><br>
     
    <label style="font-size:20px;" for="phone number">Phone Number</label> <br>
    <input style="padding:7px;width:65%;" type="text" name="phonenumber" placeholder="enter your phone no.."required ><br>

    <label style="font-size:20px;" for="password">Password</label> <br>
    <input style="padding:7px;width:65%;" type="password" name="password" placeholder="enter your phone no.."required ><br>
    
    <input style="padding:5px;width:30%;background-color:#4CAF50;color:white;border:1px solid;border-radius:3px;" type="submit" name="submit" value="Submit" style="width: 100px;">
</section>
</form>
</div>
</body>
</html>