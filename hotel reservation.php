<?php

$con=mysqli_connect('localhost:3306','root','','tours');

$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$adults=$_POST['adults'];
$children=$_POST['children'];



$sql="INSERT INTO `hotel reservation`(`checkin`,`checkout`,`adults`,`children`) VALUES ('$checkin','$checkout','$adults','$children')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('location:feedback.html');
}


?>