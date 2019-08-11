<?php 
include 'session.php';




if(isset($_POST["deleteAccount"])){

mysqli_query( $conn, "DELETE FROM user WHERE UserID='$myID'");
header("Location:logout.php");
}


if(isset($_POST["RemovePhoto"])){
$sql = "SELECT ProfilePic FROM user WHERE UserID='$myID' "; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($_POST = $result->fetch_assoc()){$ProfilePicDel=$_POST["ProfilePic"];
if (unlink($ProfilePicDel)) { mysqli_query($conn, "UPDATE user SET  ProfilePic='',ProfilePicType='',ProfilePicSize='' WHERE UserID='$myID'"); header("Location:index.php");}}}}

if(isset($_POST["ChangeName"])){$value=$_POST["name"]; $query = mysqli_query($conn, "UPDATE user SET Fullname='$value'WHERE UserID='$myID'");

if($query){ header("Location:index.php");}}
if(isset($_POST["ChangeEmail"])){$value=$_POST["email"]; $query = mysqli_query($conn, "UPDATE user SET Email='$value'WHERE UserID='$myID'");



if($query){ header("Location:index.php");}}
if(isset($_POST["ChangeUsername"])){$value=$_POST["username"]; $query = mysqli_query($conn, "UPDATE user SET Username='$value'WHERE UserID='$myID'");
if($query){ header("Location:logout.php");}}

if(isset($_POST["ChangeBio"])){$value=$_POST["aboutme"]; $query = mysqli_query($conn, "UPDATE user SET Bio='$value'WHERE UserID='$myID'");
if($query){ header("Location:index.php");}}



if(isset($_POST["ChangePassword"])){
  $value1=$_POST["passwordold"];
  $value2=$_POST["passwordnew"];
$sql = "SELECT * FROM user WHERE UserID='$myID'"; 
$result = $conn->query($sql);  if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){$valueVal=$row["Password"];}}
if (md5($value1)==$valueVal) {
  $NewPassword=md5($value2);
  $query = mysqli_query($conn, "UPDATE user SET Password='$NewPassword'WHERE UserID='$myID'");
if($query){ header("Location:index.php");}
}
}


if(isset($_POST["ChangePhoto"]))
{ 


  $filePath = 'uploads/'.rand(1000,1000000)."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileType = $_FILES['file']['type'];
  if(move_uploaded_file($file_loc,$filePath))
  { if ($fileType=='image/jpeg'||$fileType=='image/pjpeg'||$fileType=='image/jpg'||$fileType=='image/png') {
    $query = mysqli_query(
    $conn, "UPDATE user SET 

    ProfilePic='$filePath',
    ProfilePicType='$fileType',
    ProfilePicSize='$fileSize'
     WHERE UserID='$myID'");
    if($query){ header("Location:index.php");}
  }
 }
}
?>


<!doctype html>
<html>
<head>


  <meta charset="utf-8">
  <title><?php echo $Fullname ?> - Settings</title>
  <link rel="shortcut icon" href="icons/sbLogo.ico" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

</head>
<body>
<table width="100%"><td width="30%" id="side1" valign="top"></td>
<td width="40%" id="side2" class=" left-padding" valign="top"> 
<br>
<br>
<br>
<h1>Profile Settings</h1>
<h3>Profile Photo Settings</h3>
<h4>Update Profile Picture</h4>
<br>
<br>
<br>
<div class="box">
  <form action="" method="post"  enctype="multipart/form-data">
  <input style="margin-bottom: 10px;" style="width: 280px;border: 1px solid #eee" type="file" name="file">
  <br>
  <input type="submit" name="ChangePhoto" class="ghostButtons" value="Update Photo">
  </form></div><br>
<h4>Remove Profile Picture</h4>
<div class="box">
  <form action="" method="post"  enctype="multipart/form-data">
  <input type="submit" name="RemovePhoto" class="ghostButtons" value="Remove Photo">
  </form></div><br><br>
<h3>General Account Settings</h3>

<h4>Add Your Bio</h4><div class="box">
<form action="" method="post"  enctype="multipart/form-data">
<input type="text" name="aboutme" class="textInputs" placeholder="Describe Yourself">
<input type="submit" name="ChangeBio" class="ghostButtons" value="Update">
</div></form><br><br>


<h4>Update Your Name</h4><div class="box">
<form action="" method="post"  enctype="multipart/form-data">
<input type="text" name="name" class="textInputs" placeholder="Enter Name">
<input type="submit" name="ChangeName" class="ghostButtons" value="Update">
</div></form><br>

<h4>Update Your Email</h4><div class="box">
<form action="" method="post"  enctype="multipart/form-data">
<input type="text" name="email" class="textInputs" placeholder="Enter Email">
<input type="submit" name="ChangeEmail" class="ghostButtons" value="Update">
</div></form><br>

<h4>Update Your Username</h4><div class="box">
You'll be required to re-login with your new Username.
<form action="" method="post"  enctype="multipart/form-data">
<input type="text" name="username" class="textInputs" placeholder="Enter Username">
<input type="submit" name="ChangeUsername" class="ghostButtons" value="Update">
</div></form><br>


<h4>Update Your Password</h4><div class="box">
<form action="" method="post"  enctype="multipart/form-data">
<input type="text" name="passwordold" class="textInputs" placeholder="Enter Old Password">
<input type="text" name="passwordnew" class="textInputs" placeholder="Enter New Password">
<input type="submit" name="ChangePassword" class="ghostButtons" value="Update">
</div></form><br>


<h3> Delete All Content</h3>
<form action="" method="post"  enctype="multipart/form-data">
<input type="submit" name="deleteContent" class="ghostButtons" value="Delete All Content">
</form><br>
<h3> Delete Account</h3>
<form action="" method="post"  enctype="multipart/form-data">
<input type="submit" name="deleteAccount" class="ghostButtons" value="Delete Account">
</form><br>
</td>
<td id="side3" width="30%">
</td>
</table>
</body>
</html>

<style type="text/css">
	body{color:#fff;background: #000;padding: 0;margin: 0}
	a{color: #fff;text-decoration: none;}
	.textInputs{width: 50%;height: 35px;background: #000;padding: 3px; color: #fff;border-radius: 5px ;border: 1px solid #333;margin-top: 5px;margin-bottom: 5px;}
.ghostButtons{cursor:pointer;height: 50px;width: 52.5%;border-radius: 25px;background: linear-gradient(to right,#fff,#999);color: #000;}

</style>


