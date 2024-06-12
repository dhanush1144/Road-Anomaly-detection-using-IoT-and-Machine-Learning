<?php
$hostname= "localhost";
$username= "root";
$password="";
$database= "sensor1";

$conn= mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
	die("connection failed: ". mysqli_connect_error());
}
echo "database connection is okay";

if (isset($_POST['Rotation_x'])&& isset($_POST['Rotation_y'])&& isset($_POST['Rotation_z'])&& isset($_POST['temperature'])&& isset($_POST['Latitude'])&& isset($_POST['Longitude'])&& isset($_POST['Speed'])) {

	$rx=$_POST['Rotation_x'];
	$ry=$_POST['Rotation_y'];
	$rz=$_POST['Rotation_z'];
	$t=$_POST['temperature'];
	$lat=$_POST['Latitude'];
	$lng=$_POST['Longitude'];
	$kmph=$_POST['Speed'];
	

}
$sql= "INSERT INTO road_data(Rotation_x, Rotation_y,Rotation_z, temperature, latitude, longitude, speed) VALUES (".$rx.", ".$ry.",".$rz.",".$t.",".$lat.", ".$lng.", ".$kmph.")";

if (mysqli_query($conn, $sql)) {
	echo "new record created";
} else{
	echo "Error".$sql. "<br>".mysqli_error($conn);
}
?>
