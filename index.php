

<?php
include 'session.php';
$dot= $_GET['setdot'];
if (isset($dot)) {
	
$query = mysqli_query($conn, "UPDATE user SET req='0' WHERE UserID='$myID'");
if ($query) {
header("Location:requests.php");

}

}

?>
<title>Intwine</title>
<link rel="shortcut icon" href="logo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<div id="Discover" class="tabcontent">
	<div class="emo1">
		<a href="connect.php?val=motivated"><div class="text">Motivated</div></a>
	</div>

	<div class="emo2">
		<a href="connect.php?val=alone"><div class="text">Alone</a></div></a>
	</div>


	<div class="emo3">
		<a href="connect.php?val=frustrated"><div class="text">Frustrated</div></a>
	</div>


	<div class="emo4">
		<a href="connect.php?val=happy"><div class="text">Happy</div></a>
	</div>

	<div class="emo5">
		<a href="connect.php?val=love"><div class="text">Love</div></a>
	</div>

	<div class="emo6">
		<a href="connect.php?val=angry"><div class="text">Angry</div></a>
	</div>

	<div class="emo7">
		<a href="connect.php?val=sad"><div class="text">Sad</div></a>
	</div>

	<div class="emo8">
		<a href="connect.php?val=bored"><div class="text">Bored</div></a>
	</div>

	<div class="emo9">
		<a href="connect.php?val=stressed"><div class="text">Stressed</div></a>
	</div>







<div class="logo vibe">
	<i>intwine</i>
</div>







</div>

<div id="Messages" class="tabcontent">
<?php include 'messages.php'; ?>
</div>


<div id="Requests" class="tabcontent">
	Requests
</div>


<div id="Profile" class="tabcontent">
<?php include 'profile.php'; ?>

</div>






<div class="footer pc">
	<table width="100%">
		<td align="center">
			<img src="discover.png" class="tablinks" onclick="openCity(event, 'Discover')" id="defaultOpen"  height="30px" width="30px">
		</td>
		<td align="center">
			<img src="messages.png" class="tablinks" onclick="openCity(event, 'Messages')" height="26px" width="26px">
		</td>
			<td align="center">

				<table>
					<td>
				<?php if ($req==1) {
					?>
					<div style="height:10px;width: 10px;background: #f00;border-radius: 50%">
						<?php
				}
				?>		
					</td>
					<td>
					
			<a href="index.php?setdot=0"><img src="request.png" height="26px" width="26px"></a>
					</td>
				</table>
			
		</td>
		<td align="center">
			<img src="profile.png" class="tablinks" onclick="openCity(event, 'Profile')" height="24px" width="24px">
		</td>
	</table>
</div>


<div class="footer2 mobile ">
	<table width="100%" >
		<td align="center">
			<img src="discover.png" class="tablinks" onclick="openCity(event, 'Discover')" id="defaultOpen"  height="30px" width="30px">
		</td>
		<td align="center">
			<img src="messages.png" class="tablinks" onclick="openCity(event, 'Messages')" height="26px" width="26px">
		</td>
			<td align="center">

				<table>
					<td>
				<?php if ($req==1) {
					?>
					<div style="height:10px;width: 10px;background: #f00;border-radius: 50%">
						<?php
				}
				?>		
					</td>
					<td>
					
			<a href="index.php?setdot=0"><img src="request.png" height="26px" width="26px"></a>
					</td>
				</table>
			
		</td>
		<td align="center">
			<img src="profile.png" class="tablinks" onclick="openCity(event, 'Profile')" height="24px" width="24px">
		</td>
	</table>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>
   


<style>


.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}


.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

.tab button:hover {
  background-color: #ddd;
}


.tab button.active {
  background-color: #ccc;
}


.tabcontent {
  display: none;
}
</style>

<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Great+Vibes&display=swap');
html{font-size: 21px;
	color: #fff;text-align: center;
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
	margin: 0;padding: 0;
	background: #000;height: 100%;width: 100%;
}






a{color: #fff;text-decoration: none;}
.logo{font-size: 75px;margin-top: 270px;text-align: center;}
.vibe{font-family: 'Great Vibes', cursive;}
#Profile{text-align: center;}
.emo1{background-image: url('cr1.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 30px;right: 560px;}
.emo2{background-image: url('cr2.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 130px;right: 520px;}
.emo3{background-image: url('cr3.png');background-size: 99px 99px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 70px;right: 660px;}
.emo4{background-image: url('cr4.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 170px;right: 650px;}
.emo5{background-image: url('cr5.png');background-size: 99px 99px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 180px;right: 770px;}

.emo6{background-image: url('cr6.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 340px;right: 520px;}
.emo7{background-image: url('cr7.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top:320px;right: 630px;}
.emo8{background-image: url('cr8.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 410px;right: 590px;}
.emo9{background-image: url('cr9.png');background-size: 99px 99px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 400px;right: 700px;}

.text{padding-top: 50px;font-size: 18px;}

.footer{position: absolute;top: 10;width: 15%;right: 20px;}
.mobile{display: none}

@media (max-width: 768px){body{text-align:center;}.logo{width: 240px; height: 100px;text-align: center !important;position: absolute;left:50px;}
.mobile{display: block;}
.pc{display: none}
.text{padding-top: 50px;font-size: 18px;}
.emo1{background-image: url('cr1.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 10px;right: 10px;}
.emo2{background-image: url('cr2.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 130px;right: 20px;}
.emo3{background-image: url('cr3.png');background-size: 99px 99px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 70px;right: 130px;}
.emo4{background-image: url('cr4.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 170px;right: 110px;}
.emo5{background-image: url('cr5.png');background-size: 99px 99px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 180px;right: 210px;}

.emo6{background-image: url('cr6.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 340px;right: 20px;}
.emo7{background-image: url('cr7.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top:320px;right: 130px;}
.emo8{background-image: url('cr8.png');background-size: 89px 89px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 410px;right: 90px;}
.emo9{background-image: url('cr9.png');background-size: 99px 99px;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 400px;right: 200px;}
.footer2{position: fixed;bottom: 0;width:90%;background: #000}
}




</style>










