<?php
include 'dbconfig.php';
session_start();
if(isset($_SESSION['user']))
{header("Location: index.php");


}
if(isset($_POST["submit"]))
{ 
$FullName = $_POST["fullname"];
$Username = $_POST["username"];
$Email = $_POST["email"];
$Password = $_POST["password"];
$Password = md5($Password);
$DateReg=gmdate("M d Y H:i:s");

$sql="SELECT Email FROM user WHERE Email='$Email'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
     $errorMail = "<br><b>This Email already exist.</b><br>";    }
    $sql="SELECT Username FROM user WHERE Username='$Username'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      if(mysqli_num_rows($result) == 1)
       {
         $errorName = "<br><b> This Username has already been Taken</b><br>";    }
    else{$query = mysqli_query($conn, "INSERT INTO user (

      RegistrationDate,FullName, Email, Username, Password)VALUES (

      '$DateReg','$FullName','$Email','$Username', '$Password')");
      if($query){ 
$success= "<h3>Your Account has been Created<br>Kindly Login</h3>";


}
}
}


if (isset($_POST["login"])) {
	session_start();
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
$Username=mysqli_real_escape_string($conn, $_POST['username']);
$Password=mysqli_real_escape_string($conn, $_POST['password']);
$Password=md5($Password);
$sql_query="SELECT UserID FROM user WHERE Username='$Username' and Password='$Password'";
$result=mysqli_query($conn,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
$_SESSION['user']=$Username;
header("location: index.php");
}
else
{
$error='Invalid Password or Username. Try Again<br>';
}
} 
}
?>
<!doctype html>
<html >
<head>

<meta charset="utf-8">
<title>Login and Signup</title>
<link rel="shortcut icon" href="logo.ico" />
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

<style >
  @import url('https://fonts.googleapis.com/css?family=Great+Vibes&display=swap');
body{text-align: center;color: #fff;background: #000;
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;}
#signup{width: 45%; margin-left: 50%; position: absolute;  padding-top: 20px; background: #000;color: #fff;}
#login{width: 48%; position: absolute;  padding-top: 40px; }
.textInputs{width: 50%;height: 35px;background: #000;padding: 3px; color: #fff;border-radius: 5px ;border: 1px solid #333;margin-top: 5px;}
.ghostButtons{cursor:pointer;height: 50px;width: 52.5%;border-radius: 25px;background: linear-gradient(to right,#fff,#999);color: #000;}
.logo{font-size: 75px;margin-top: 15px;text-align: center;}
.vibe{font-family: 'Great Vibes', cursive;}
@media (max-width: 768px){

.textInputs{width: 95%;}
.ghostButtons{width: 99%; }
#signup{width: 95% ; margin-left: 0%; margin-top: 300px;margin-left: 2.5%;}
#login{width: 95% ; padding-top: 100px ;margin: 2.5%;}
}
</style>
</head>


<body class="impact">
<div class="box" style="width: 100% !important;margin: 0;padding: 10px 0;">

<table width="100%">
  <td width="10%" align="left" >
  
  </td>
  <td width="80%" align="center">


<div class="logo vibe">
  <img src="sp5.png" height="50px" width="50px;"><i>intwine</i>
</div>
<i>Connect feelings...</i>
<br>

  <h2 style="padding: 0;margin: 0;"  class="smallit">Login and Signup</h2>
  </td>
  <td width="10%" >
    
  </td>
</table>

</div>
<div id="login">
<h1 class="red">LOGIN</h1><form action="" method="post">
<input type="text" name="username" class="textInputs" placeholder="Username" required\><br>
<input type="password" name="password" class="textInputs" placeholder="Password" required\><br><br>
<input type="submit" name="login" class="ghostButtons " value="Login"><br>
<b><?php echo $error ?></b>
</form>
</div>
<div id="signup" >
<?php echo $success ?>
<h1 class="red">SIGN UP</h1>
<form  action="" method="post">
<input type="text" name="fullname" class="textInputs" placeholder="Full Name" required/><br>
<input type="text" name="username" class="textInputs" placeholder="Username" required/><br><?php echo $errorName ?>
<input type="email" name="email" class="textInputs" placeholder="Email" required/><br><?php echo $errorMail ?>
<input type="password" name="password" class="textInputs" placeholder="Password" required/><br><br>
<input type="checkbox" name="terms" required/ >I'm joining ScrollBase & agree on its terms<br> and privacy policy<br><br>
<input type="submit" name="submit" class="ghostButtons " value="Sign Up"></form>
<br><br>
<br>

</div>
</body>
</html>