<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
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

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>



<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Discover')" id="defaultOpen">Discover</button>
  <button class="tablinks" onclick="openCity(event, 'Messages')">Messages</button>
  <button class="tablinks" onclick="openCity(event, 'Profile')">Profile</button>
</div>

<div id="Discover" class="tabcontent">
  <h3>Discover</h3>
  <p>Discover is the capital city of England.</p>
</div>

<div id="Messages" class="tabcontent">
  <h3>Messages</h3>
  <p>Messages is the capital of France.</p> 
</div>

<div id="Profile" class="tabcontent">
  <h3>Profile</h3>
  <p>Profile is the capital of Japan.</p>
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
   




<?php
include 'session.php';


?>
<title>Intwine</title>
<link rel="shortcut icon" href="logo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<div id="Discover" class="tabcontent">
  <div class="emo1">
    <a href="connect.php?val=crazy"><div class="text">Motivated</div></a>
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
    <a href="connect.php?val=broke"><div class="text">Stressed</div></a>
  </div>







<div class="logo vibe">
  <i>intwine</i>
</div>







</div>

<div id="Messages" class="tabcontent">
  messages
</div>


<div id="Requests" class="tabcontent">
  Requests
</div>


<div id="Profile" class="tabcontent">
  profile
</div>






<div class="footer">
  <table width="100%">
    <td align="center">
      <img src="discover.png" class="tablinks" onclick="openCity(event, 'Discover')" id="defaultOpen"  height="30px" width="30px">
    </td>
    <td align="center">
      <img src="messages.png" class="tablinks" onclick="openCity(event, 'Messages')" height="26px" width="26px">
    </td>
      <td align="center">
      <img src="messages.png" class="tablinks" onclick="openCity(event, 'Requests')" height="26px" width="26px">
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

@media (max-width: 768px){body{text-align:center;}.logo{width: 240px; height: 100px;}


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
.footer{position: absolute;bottom: 10 !important;width: 100% !important;}
}




</style>



























.emo1{background-image: linear-gradient( #ffa500, #ff0000);border-radius:50%;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 30px;right: 560px;box-shadow: 0px 10px 12px -1px #aaa;}
.emo2{background-image:linear-gradient( #40e0d0 , #008000);border-radius:50%;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 160px;right: 590px;box-shadow: 0px 10px 12px -1px #aaa;}
.emo3{background:#072f5f;border-radius:50%;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 50px;right: 710px;box-shadow: 0px 10px 12px -1px #072f5f;}
.emo4{background-image: linear-gradient( #ff0, #ff8c00);border-radius:50%;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 190px;right: 750px;box-shadow: 0px 10px 12px -1px #aaa;}
.emo5{background-image: linear-gradient( #ff2d55, #cc0000);border-radius:50%;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 250px;right: 870px;box-shadow: 0px 10px 12px -1px #aaa;}

.emo6{background-image: linear-gradient( #f00, #190000);border-radius:50%;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 340px;right: 520px;box-shadow: 0px 10px 12px -1px #aaa;}
.emo7{background-image: linear-gradient( #ddd, #000);border-radius:50%;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top:370px;right: 660px;box-shadow: 0px 10px 12px -1px #aaa;}
.emo8{background-image: linear-gradient( #aaa, #555);border-radius:50%;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 410px;right: 820px;box-shadow: 0px 10px 12px -1px #aaa;}
.emo9{background-image: linear-gradient( #ff0080, #260026);border-radius:50%;background-position: center;height: 120px; width: 120px;background-repeat: no-repeat;text-align: center;position: absolute;top: 500px;right: 700px;box-shadow: 0px 10px 12px -1px #aaa;}