<br>
<br>
<br>

<?php 
if(isset($_POST["ChangePhoto"]))
{ $filePath = 'uploads/'.rand(1000,1000000)."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileType = $_FILES['file']['type'];
  if(move_uploaded_file($file_loc,$filePath))
  { if ($fileType=='image/jpeg'||$fileType=='image/pjpeg'||$fileType=='image/jpg'||$fileType=='image/png') {
    $query = mysqli_query(
    $conn, "UPDATE user SET ProfilePic='$filePath', ProfilePicType='$fileType', ProfilePicSize='$fileSize' WHERE UserID='$myID'");
    if($query){ header("Location:profile.php");}
  }
 }
}
?>


<div class="ProfilePic"></div><br>
<h2><a href="settings.php"><?php echo $Fullname; ?></a></h2>
<h3><?php echo $Bio; ?></h3>
<h2>EMOTIONAL SCORE</h2>
<h3><?php echo $Score; ?></h3>
<h3>EMOTIONAL PROFILE</h3>



<div class=" left " style="text-align: left">
 












<?php 



$sql = "SELECT SUM(score) as Total
FROM score
WHERE Emotion='happy' AND UserID='$myID';"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ echo "Happy"." ". $sum=$row["Total"]."<br>";

}
}

$sql = "SELECT SUM(score) as Total
FROM score
WHERE Emotion='sad' AND UserID='$myID';"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ echo "Sad"." ". $sum=$row["Total"]."<br>";

}
}


$sql = "SELECT SUM(score) as Total
FROM score
WHERE Emotion='motivated' AND UserID='$myID';"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ echo "Motivated"." ". $sum=$row["Total"]."<br>";

}
}

$sql = "SELECT SUM(score) as Total
FROM score
WHERE Emotion='love' AND UserID='$myID';"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ echo "Love"." ". $sum=$row["Total"]."<br>";

}
}

$sql = "SELECT SUM(score) as Total
FROM score
WHERE Emotion='bored' AND UserID='$myID';"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ echo "Bored"." ". $sum=$row["Total"]."<br>"."<br>";

}
}

$sql = "SELECT SUM(score) as Total
FROM score
WHERE Emotion='angry' AND UserID='$myID';"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ echo "Angry"." ". $sum=$row["Total"]."<br>";

}
}



$sql = "SELECT SUM(score) as Total
FROM score
WHERE Emotion='frustrated' AND UserID='$myID';"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ echo "Frustrated"." ". $sum=$row["Total"]."<br>";

}
}

$sql = "SELECT SUM(score) as Total
FROM score
WHERE Emotion='stressed' AND UserID='$myID';"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ echo "Stressed"." ". $sum=$row["Total"]."<br>";

}
}

?>




</div>



<p><a href="settings.php" class="red">Profile Settings</a></p>
<p><a href="logout.php" class="red">LOGOUT</a></p>
<br>
<br>
<br>

<?php
if (isset($_GET['delete'])) {$deleteID=$_GET['delete'];
$sql = "SELECT CoverImage FROM posts WHERE UserID='$myID' AND PostID='$deleteID' "; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){$CoverImageDelete=$row["CoverImage"];
if (unlink($CoverImageDelete)) { $query1 = mysqli_query($conn, "DELETE FROM posts WHERE PostID='$deleteID'"); if($query1){ $dell=1;}}
} mysqli_query($conn, "DELETE FROM posts WHERE PostID='$deleteID'");}

$sql = "SELECT * FROM items  WHERE PostID='$deleteID'"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){$folderPath=$row["FilePath"];
if (unlink($folderPath)) {$query2 = mysqli_query( $conn, "DELETE FROM items WHERE PostID='$deleteID'");if($query3){ $dell=2;}}
}}



$query3 = mysqli_query($conn, "DELETE FROM tags WHERE PostID='$deleteID'");if($query3){ $dell=3;}
if ($dell==1||$dell==2||$dell==3) {header("Location:writer.php"); }
}

if (isset($_GET['publish'])) {$publishID=$_GET['publish'];
$query = mysqli_query($conn, "UPDATE posts SET ViewMode='published' WHERE PostID='$publishID'"); if($query){ header("Location:writer.php");}}
?>


<?php
if (isset($_GET['deleteSet'])) {$deleteSetID=$_GET['deleteSet'];
$sql = "SELECT CoverImage FROM posts WHERE UserID='$myID' AND PostID='$deleteSetID' "; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){$CoverImageDelete=$row["CoverImage"];
if (unlink($CoverImageDelete)) {$query1 = mysqli_query($conn, "DELETE FROM posts WHERE PostID='$deleteSetID'");if($query1){ $dell=1;}}
}}

$sql = "SELECT * FROM items  WHERE PostID='$deleteSetID'"; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){
echo $folderPath=$row["FilePath"];
if (unlink($folderPath)) {$query2 = mysqli_query($conn, "DELETE FROM items WHERE PostID='$deleteSetID'");if($query3){ $dell=2;}}
}}

$query3 = mysqli_query($conn, "DELETE FROM tags WHERE PostID='$deleteSetID'");if($query3){ $dell=3;}
if ($dell==1||$dell==2||$dell==3) {header("Location:writer.php"); }
} ?>


</div>






</div>

  <style>
.ProfilePic{background-image:url("<?php echo "$ProfilePic" ?>");background-size:<?php echo "$Size" ?> ;
height:150px;width:150px;border:2px solid #eee;background-position:<?php echo "$pos" ?>;border-radius: 50%;background-repeat: no-repeat;text-align: center;margin:auto;}
.main{width: 50%;margin: auto}.left{margin-left:35%;}
@media (max-width: 768px){.left{margin-left:0;}}
</style>