<?php

$con=mysqli_connect('localhost:3306','root','','tours');

$id=$_POST['id'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$Destination=$_POST['destination'];


$sql="INSERT INTO `transport`(`id`,`name`,`contact`,`destination`) VALUES (0,'$name','$contact','$Destination')";
$result = mysqli_query($con,$sql);
if(isset($_POST['submit'])){
	header('location:hotel.html');
}


?>