
<?php 

include 'dbconfig.php';
include 'session.php';
if (isset($_GET['user'])) {
   $matchedID= $_GET['user']; 
    $emotion= $_GET['current']; 

$sql = "SELECT * FROM user WHERE UserID='$matchedID'"; 
$result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
    $Fullnameof=$row["Fullname"];
    $ProfileType=$row["UserType"];
    $ProfileOption=$row["ProfileOption"];
    $ProfilePic=$row["ProfilePic"];
    $Bio=$row["Bio"];
  

   
if ($ProfilePic=='') { $ProfilePic='profile.png ';$Size='60px 60px';$pos='center'; 
}else{   $Size='cover'; $pos='top';}

}
}


}



?>

<title><?php echo $Fullnameof ?></title>
<link rel="shortcut icon" href="logo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<table width="100%" align="center" style="margin-top:  50px;">
	<tr><td abbr="center" width="100%"><div class="ProfilePic"></div></td></tr>
	<tr><td align="center" width="100%"><h2><?php echo $Fullnameof; ?></h2></td></tr>
  <tr><td align="center" width="100%"><h3><?php echo $Bio; ?></h3></td></tr>
  <tr><td align="center" width="100%">
    <br>
    <br>
    <br>
    <a style="color: #000" href="connect.php?val=<?php echo $emotion; ?>&repeat=<?php echo $matchedID; ?>&add=<?php echo $matchedID; ?>"><div class="butsy">Connect</div></a>
     <a style="color: #000" href="connect.php?val=<?php echo $emotion; ?>&repeat=<?php echo $matchedID; ?>"><div class="butsy">Find Another Person</div></a>
       <a style="color: #000" href="index.php"><div class="butsy">I'm feeling Different Now</div></a>
  
   
  </td>
</table>


  </td></tr>
</table>









</div>

  <style>
    html{
       color: #fff;text-align: center;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
  margin: 0;padding: 0;
  background: #000;height: 100%;width: 100%;
    }
    .butsy{
    font-size: 18px;padding: 15px 5px; background: linear-gradient(to right , #fff, #999);margin-top: 5px;width: 250px;font-weight: bold;border-radius: 50px;
    }
a{color: #fff;text-decoration: none;}
.ProfilePic{background-image:url("<?php echo "$ProfilePic" ?>");background-size:<?php echo "$Size" ?> ;margin:auto;
height:150px;width:150px;border:2px solid #eee;background-position:<?php echo "$pos" ?>;border-radius: 50%;background-repeat: no-repeat;}
</style>