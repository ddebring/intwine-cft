<?php 


include "dbconfig.php";







$sql = "CREATE TABLE block (
bno INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
UserID VARCHAR(512) NULL,
BlockedID VARCHAR(512) NULL,
BlockDate VARCHAR(512) NULL

)";




if ($conn->query($sql) === TRUE) {
    echo "Table block created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}





$sql = "CREATE TABLE report (
rno INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
UserID VARCHAR(512) NULL,
ReporterID VARCHAR(512) NULL,
ReportDate VARCHAR(512) NULL

)";




if ($conn->query($sql) === TRUE) {
    echo "Table report created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}



$sql = "CREATE TABLE score (
sno INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
UserID VARCHAR(512) NULL,
Emotion VARCHAR(256) NULL,
Score INT(108) NULL

)";




if ($conn->query($sql) === TRUE) {
    echo "Table score created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}



$sql = "CREATE TABLE request (
reqno INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
UserID VARCHAR(512) NULL,
addID VARCHAR(256) NULL,
approve VARCHAR(115) NULL,
addDate TIMESTAMP

)";




if ($conn->query($sql) === TRUE) {
    echo "Table add created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}












$sql = "CREATE TABLE chat (
chatno INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
Message TEXT(1024) NULL,
Sender VARCHAR(512) NULL,
Receiver VARCHAR(512) NULL,
Timed VARCHAR(256) NULL


)";




if ($conn->query($sql) === TRUE) {
    echo "Table chat created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}






$sql = "CREATE TABLE user (
UserID INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
Fullname VARCHAR(256) NULL,
Email VARCHAR(256) NULL,
Username VARCHAR(256) NULL,
Score INT(255) NULL,
Current VARCHAR(255) NULL,
Bio VARCHAR(512) NULL,
Password VARCHAR(100)  NULL,
ProfilePic VARCHAR(256) NULL,
ProfilePicSize VARCHAR(256) NULL,
ProfilePicType VARCHAR(256) NULL,
ProfileOption VARCHAR(256) NULL,
GenderOption VARCHAR(256) NULL,
RegistrationDate VARCHAR(256) NULL,
req INT(11) NULL,
LastUpdate TIMESTAMP 
)";


if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}




$sql = "CREATE INDEX user_Username_idx ON user(Username) ";
if ($conn->query($sql) === TRUE) {
    echo "Index username created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}




$sql = "CREATE INDEX user_Fullname_idx ON user(Fullname) ";
if ($conn->query($sql) === TRUE) {
    echo "Index fullname created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE INDEX user_Email_idx ON user(Email) ";
if ($conn->query($sql) === TRUE) {
    echo "Index email created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}



?>
