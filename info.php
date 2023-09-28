<?php
$db = mysqli_connect('localhost:3306','root','','tour');

if(isset($_POST['goa'])) {
	$que="SELECT * FROM `packages` WHERE pname='Goa'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['kerala'])) {
	$que="SELECT * FROM `packages` WHERE pname='Kerala'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['mysore'])) {
	$que="SELECT * FROM `packages` WHERE pname='Mysore'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['ladakh'])) {
	$que="SELECT * FROM `packages` WHERE pname='Ladakh'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['agra'])) {
	$que="SELECT * FROM `packages` WHERE pname='Agra'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Manali'])) {
	$que="SELECT * FROM `packages` WHERE pname='manali'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['hampi'])) {
	$que="SELECT * FROM `packages` WHERE pname='Hampi'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['rajasthan'])) {
	$que="SELECT * FROM `packages` WHERE pname='Rajasthan'";
	$result = mysqli_query($db, $que);
}
    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" href="info.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico" >
	<title>Information</title>
</head>
<body>
	<div class="main">
	    <ul>
        <ul class="list2">
	        <li><a href="index.html">Home</a></li>
	        <li><a id="long" href="packages.html">Packages</a></li>
	        <li><a href="signup.html">Sign up</a></li>
			<li><a href="feedback.html">Feedback</a></li>
			<li><a href="index.html">Logout</a></li>
	      </ul>
	    </ul>
	</div>
	<div class="hedder">
		<h1>Place Information</h1>
	</div>
	<div class="container">
		<div class="description-container" style="border: 1px solid black;">
			<div class="box1">
				<?php
					while($rows = mysqli_fetch_assoc($result))
					{
				?>
				<img src="<?php echo $rows['pi1']; ?>" alt=" Image" style="width: auto;height: 302px;">
			</div>
			<div class="description">
				<h1><?php echo $rows['pname']; ?><h1>
				<p style="text-align: justify;"><?php echo $rows['pdescription']; ?></p>
				<p style="color:red; top: -10px;" >Package: <?php echo $rows['pcost']; ?> Rs</p>
			</div>
			<a href="booking.html" style="top: 240px; float: right; margin-right: 27%;">Book Tour</a>
		</div>
		<div class="image-container" style="border: 1px solid black">
			<div class="box">
		        <div class="imgBox1">
		          <img src="<?php echo $rows['pi2']; ?>" alt="Image" style="width: auto; height: 240px;">
		        </div>
	        </div>
			
	      
	      
	        	<?php
					}
				?>
	      </div>
		</div>
	</div>
</body>
</html>