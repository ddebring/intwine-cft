<title>Connecting...</title>
<link rel="shortcut icon" href="logo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
include 'dbconfig.php';
include 'session.php';
if (isset($_GET['val'])) {
	 $emotion= $_GET['val'];

	 $repeat= $_GET['repeat'];

$add= $_GET['add'];





if (isset($add)) {


$query = mysqli_query($conn, "INSERT INTO request (

      UserID,addID,approve)VALUES (

      '$myID','$add',0)");



$query = mysqli_query($conn, "UPDATE user SET req='1' WHERE UserID='$add'");

}

















	if ($emotion=='alone') {
		$color='linear-gradient( #40e0d0 , #008000)';
		$score=2;
	}elseif ($emotion=='love') {
		$color='linear-gradient( #ff2d55, #cc0000)';
		$score=-8;
	}elseif ($emotion=='frustrated') {
		$color='linear-gradient( #f00, #072f5f)';
		$score=-7;
	}elseif ($emotion=='happy') {
		$color='linear-gradient( #ff0, #ff8c00)';
		$score=9;
	}elseif ($emotion=='motivated') {
		$color='linear-gradient( #ffa500, #ff0000)';
		$score=10;
	}elseif ($emotion=='sad') {
		$color='linear-gradient( #ddd, #000)';
		$score=-3;
	}elseif ($emotion=='bored') {
		$color='linear-gradient( #aaa, #555)';
		$score=1;
	}elseif ($emotion=='angry') {
		$color='linear-gradient( #f00, #190000)';
		$score=-5;
	}elseif ($emotion=='stressed') {
		$color='linear-gradient( #ff0080, #260026)';
		$score=-10;
	}

//INPUT
$query = mysqli_query($conn, "INSERT INTO score (
      UserID,Emotion,Score)VALUES ( '$myID','$emotion','$score')"); }


$sql = "SELECT SUM(score) as Total
FROM score
WHERE UserID='$myID';"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){  $sum=$row["Total"];


$query = mysqli_query($conn, "UPDATE user SET Score='$sum', Current = '$emotion' WHERE UserID='$myID'");
}
}



//MATCH ALGO
$sql = "SELECT *
FROM User
WHERE Current='$emotion' AND UserID!='$myID' AND UserID!='$repeat' ORDER BY lastUpdate DESC LIMIT 1;"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){    $matchedID=$row["UserID"];



?>




<script type="text/javascript">
	window.setTimeout(function(){
    window.location.href = "user.php?user=<?php echo $matchedID; ?>&current=<?php echo $emotion; ?>";
    }, 5000);
</script>


<?php
}
}
else{
	$flag="NO USER MATCHED";



	?>


<script type="text/javascript">
	window.setTimeout(function(){
    window.location.href = "index.php";
    }, 5000);
</script>



	<?php
}












?>
<div class="logo vibe">
	<img  src="match.png" width="120px" height="60px"><br>
	<i>intwine</i>

</div>
<b><?php echo strtoupper($emotion); ?>  ... </b>








<h2><?php echo $flag ; ?></h2>





<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Great+Vibes&display=swap');
html{font-size: 21px;
	color: #fff;text-align: center;
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
	margin: 0;padding: 0;
	background: <?php echo $color; ?>;height: 100%;width: 100%;
}


.logo{font-size: 75px;margin-top: 130px;text-align: center;}
.vibe{font-family: 'Great Vibes', cursive;}