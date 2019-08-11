<br>

<?php
include 'dbconfig.php';
include 'session.php';

$chat=$_GET['chat'];
$myID;
$sql = "SELECT  *
FROM chat JOIN user  ON chat.Receiver=user.UserID 
WHERE chat.Receiver='$myID' AND chat.Sender='$chat' OR chat.Receiver='$chat' AND chat.Sender='$myID' "; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ 
 $message=$row["Message"];
  $receiver=$row["Receiver"];
  $propic=$row["ProfilePic"];

   
 



if ($receiver==$myID) {
   ?>



<table class="tax" align="right" style="margin-right: 25%;margin-top:20px;">
     <td align="right"><div class="message" ><?php echo $message ?></div></td>
    <td align="right"><img src="<?php echo $propic ?>" style="height: 40px; width: 40px;border-radius: 50%;object-position: top;"></td>
   
</table>
<br>



   <?
}else{

?>

<table class="tax">
    <td><img src="<?php echo $propic ?>" style="height: 40px; width: 40px;border-radius: 50%;object-position: top;"></td>
    <td><div class="message"><?php echo $message ?></div></td>
</table>
<br>

<?php

}

}
}




?>

<style type="text/css">
    .message{background: linear-gradient(to right, #fff,#aaa);color: #000;border-radius: 25px;max-width: 500px;margin:auto;padding: 8px;}
    .tax{margin-left: 25%;}
</style>