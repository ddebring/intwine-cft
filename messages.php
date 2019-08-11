

<h1>Messages</h1>
<?php 
include 'session.php';


if (isset($_GET['val'])) {
	$approve=$_GET['val'];
	 $query = mysqli_query($conn, "UPDATE request SET Approve='1' WHERE UserID='$myID' AND addID='$approve'  ");
}








$sql = "SELECT DISTINCT request.addID,  user.ProfilePic, user.Fullname
FROM request  JOIN user ON request.addID = user.UserID
WHERE request.UserID='$myID' AND request.approve='1'  "; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ 
  $adds=$row["addID"];
    $ProfilePics=$row["ProfilePic"];
 $Fullnames=$row["Fullname"];
?>
<a href="chat.php?chat=<?php echo $adds ?>">
<table class="main" align="left">
<td align="right" width="10%"><img class="ProfilePics" src="<?php echo  $ProfilePics ?>" ></td>
<td align="left" width="90%" style="border-bottom: 1px solid #333;"><?php echo $Fullnames ?></td>

</table>
<br>
</a>
<?php

}
}








$sql = "SELECT DISTINCT chat.Sender,  user.ProfilePic, user.Fullname
FROM chat  JOIN user ON chat.Sender = user.UserID
WHERE chat.Receiver='$myID' ORDER BY chat.Timed DESC  "; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ 
  $receiver=$row["Sender"];
    $ProfilePics=$row["ProfilePic"];
 $Fullnames=$row["Fullname"];
?>
<a href="chat.php?chat=<?php echo $receiver ?>">
<table class="main" align="left">
<td align="right" width="10%"><img class="ProfilePics" src="<?php echo  $ProfilePics ?>" ></td>
<td align="left" width="90%" style="border-bottom: 1px solid #333;"><?php echo $Fullnames ?></td>

</table>
<br>
</a>
<?php

}
}



?>


<title>Requests</title>
<link rel="shortcut icon" href="logo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">




<style type="text/css">
	.main{
		width: 50%;margin-left: 25%;font-size: 21px;
	}

a{text-decoration: none;color: #fff;}
.ProfilePics{
height:50px;width:50px;border:2px solid #eee;border-radius: 50%;}

 .butsy{
    font-size: 18px;padding: 15px 5px; background: linear-gradient(to right , #fff, #999);margin-top: 5px;width: 150px;font-weight: bold;border-radius: 50px;text-align: center;
    }


html{font-size: 21px;
	color: #fff;text-align: center;
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
	margin: 0;padding: 0;
	background: #000;height: 100%;width: 100%;
}

@media (max-width: 768px){
.main{
		width: 100% !important;margin-left: 0% !important;
	}

.butsy{
width: 100px;
padding: 8px 5px;
}
}


</style>