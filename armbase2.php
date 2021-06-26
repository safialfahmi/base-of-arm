<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.button {
  background-color: #1abc9c;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
form{
margin-top :200px;
}
.button3 {
  background-color: #4db8ff;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4 {
  background-color: #ff4d4d;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.header {
 padding: 11px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 25px;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"thearm");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
<div class="header">
  
  <p>Arm base control</p>
</div>


<center>
<form action="armbase2.php" method="post">
<div><button name="forward" id="fa" class="button">FORWARD</button> </div>
<button name="left" id="le" class="button">LEFT</button>
<button name="stop" id="s1" class="button4" >STOP</button>
<button name="start" id="st" class="button3" >START</button>
<button name="right" id="ri"class="button" >RIGHT</button>
<div><button name="backward" id="ba" class="button">BACKWARD</button></div>
</form></center>
<?php 

if (isset($_POST['start'])) {
$sql =" UPDATE `base` SET `running`='1'WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>

 <?php 

if (isset($_POST['stop'])) {
$sql =" UPDATE `base` SET `running`=''WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>

<?php 

if (isset($_POST['forward'])) {
 
$sql = " UPDATE `base` SET `direction`='forward'  WHERE `ID`='1'";

$result = $conn->query($sql);
 }

 ?>
 <?php 

if (isset($_POST['left'])) {
 
$sql = " UPDATE `base` SET `direction`='left'  WHERE `ID`='1'";

$result = $conn->query($sql);
 }

 ?>
 <?php 

if (isset($_POST['right'])) {
 
$sql = " UPDATE `base` SET `direction`='right'  WHERE `ID`='1'";

$result = $conn->query($sql);
 }

 ?>
 <?php 

if (isset($_POST['backward'])) {
 
$sql = " UPDATE `base` SET `direction`='backward'  WHERE `ID`='1'";

$result = $conn->query($sql);
 }

 ?>
</body>
</html>
