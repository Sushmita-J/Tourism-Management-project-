<?php

$con=mysqli_connect('localhost:3306','root','','tours');


$firstname=$_POST['name'];
$password=$_POST['password'];
$id=$_POST['id'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$package=$_POST['package'];


$sql="INSERT INTO `users`(`id`,`name`,`contact`,`city`,`package`) VALUES (0,'$firstname','$contact','$city','$package')";
$result = mysqli_query($con,$sql);

if($result)
{
	if($firstname=="admin" && $password == "ad123"){
		header("location:packages.html");

	}
	else{
		header("location:index.html");
	}
}
else{
	$que = "SELECT `name` FROM `users` WHERE name='$firstname'";
	$result = mysqli_query($con,$que);
	if($result){
		?>
		<script type="text/javascript">
			alert("username already taken")
		</script>
		<?php
	}
}

?>