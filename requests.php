

<h1>Requests</h1>
<?php 
include 'session.php';


if (isset($_GET['val'])) {
	$approve=$_GET['val'];
	 $query = mysqli_query($conn, "UPDATE request SET Approve='1' WHERE UserID='$myID' AND addID='$approve'  ");
}








$sql = "SELECT DISTINCT request.addID,  user.ProfilePic, user.Fullname
FROM request  JOIN user ON request.addID = user.UserID
WHERE request.UserID='$myID' AND request.approve='0' "; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ 
  $adds=$row["addID"];
    $ProfilePics=$row["ProfilePic"];
 $Fullnames=$row["Fullname"];
?>

<table class="main" align="left">
<td align="right" width="10%"><img class="ProfilePics" src="<?php echo  $ProfilePics ?>" ></td>
<td align="left" width="50%"><?php echo $Fullnames ?></td>
<td align="right" width="30%">
<a style="color: #000;" href="requests.php?val=<?php echo $adds?>">
	<div class="butsy">Accept</div>
</a>
</td>
</table>
<br>

<?php

}
}else{
	echo "<h3>No Requests</h3>";
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


</style><br>

<a href="index.php" style="position: fixed;bottom: 5px;left: 50%;">Back</a>