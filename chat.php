

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php 
include 'session.php';


if (isset($_GET['chat'])) {
	$chat =$_GET['chat'];


$query = mysqli_query($conn, "DELETE FROM request WHERE addID='$chat' AND approve='1' AND UserID='$myID' ");
	
}








$sql = "SELECT *
FROM user  
WHERE UserID='$chat'  "; 
$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()){ 
  $adds=$row["addID"];
    $ProfilePics=$row["ProfilePic"];
 $Fullnames=$row["Fullname"];
?>
<a href="chat.php?chat=<?php echo $adds ?>">
<table class="main" align="left" style="border-bottom:1px solid #333; position: fixed;">
<td align="left" width="5%"><img class="ProfilePics" src="<?php echo  $ProfilePics ?>" ></td>
<td align="left" width="95%" ><?php echo $Fullnames ?></td>

</table>
<br>
</a>
<?php

}
}

?>



<title><?php echo $Fullnames ?></title>
<link rel="shortcut icon" href="logo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">


<div id="screen" style="height: 500px;overflow-y: auto;margin-top: 20px;">
	
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#screen").load('reply.php?chat=<?php echo $chat ?>')
}, 2000);
});
</script>






<div class="main" style="position: fixed;bottom: 10px;height: 40px;border: 1px solid #555;border-radius: 25px;">
	<form id="form">
<table width="100%">
	<td width="90%">
		<input type="text"  name="message" class="msg" placeholder="Write your message...">
		<input type="hidden"  name="num" value="<?php echo $chat ?>">
	</td>
	<td align="center" width="10%">
		<input type="button" id="submit"  name="send" class="submit" >
	</td>
</table>
	</form>
	
</div>

	
<style type="text/css">
.main{width: 50%;margin-left: 25%;font-size: 28px;}
.msg{width: 100%;background: transparent;border: none;color: #fff;padding: 10px 5px;}
a{text-decoration: none;color: #fff;}
.ProfilePics{ height:30px;width:30px;border:2px solid #eee;border-radius: 50%;}
 .butsy{
    font-size: 18px;padding: 15px 5px; background: linear-gradient(to right , #fff, #999);margin-top: 5px;width: 150px;font-weight: bold;border-radius: 50px;text-align: center;
    }

.submit{background: url('send.png');background-size:40px 30px;padding:8px 20px;border: none;background-repeat: no-repeat;display: block;cursor: pointer;}

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
#form{width: 95% }
.msg{margin-right: 5% ;}
}


</style>

    <?php 
   $receiver=$_GET['chat'];
    	include('dbconfig.php');
        include('session.php');
    	if(isset($_POST['message'])){
    		$message=$_POST['message'];
   	$num=$_POST['num'];
   
    	
     
    		mysqli_query($conn,"insert into chat (Message, Sender, Receiver) values ('$message', '$num', '$myID')");
    	}
    ?>



<script type="text/javascript">


    $(document).ready(function(){
     
    	showTable();
     
    	$('#submit').click(function(){
    		var form=$('#form').serialize();
    		$.ajax({
    			url:"chat.php",
    			method:"POST",
    			data:form,
    			success:function(){
    				showTable();
    				$('#form')[0].reset();
    			} 
    		});
    	});
    });
     
    function showTable(){
    	$.ajax({
    		url:"fetch.php",
    		method:"POST",
    		data:{
    			fetch: 1,
    		},
    		success:function(data){
    			$('#table').html(data);
    		}
    	});
    }

fetch.php
</script>