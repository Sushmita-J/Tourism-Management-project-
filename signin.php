<?php
$con=mysqli_connect('127.0.0.1:5500','root','','tours');

if (isset($_POST['signin'])) {
  $firstname=$_POST['fname'];
  $que = "SELECT `name` FROM `signin` WHERE name='$firstname'";
  if($que){
    ?>
    <script type="text/javascript">
      alert("username already taken")
    </script>
    <?php
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> Sign Up Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signup.css">
</head>

<body>
<div class="main">
    <ul>
	<ul class="list2">
        <li><a href="index.html">Home</a></li>
        <li><a id="long" href="packages.html">Packages</a></li>
        <li class="active-menu"><a href="signin.html">Sign Up</a></li>
        <li><a href="feedback.html">Feedback</a></li>
      </ul>
    </ul>
</div>

  <form from="myForm" action ="packages.html" method="POST">

    <div class="login-box">

      <h1> Sign in </h1>

      <div class="textbox">
        <input type="text" placeholder="id" id="id" name="id" value="" required>  
      </div> 
	  <div class="textbox">
        <input type="text" placeholder="name" id="fname" name="fname" value="" required>  
      </div>
	  <div class="textbox">
        <input type="password" placeholder="Password" id="password" name="password" value="" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password must cantain at least one number and one uppper case and one lowercase letter and 8 characters" required>
      </div>
      <input class="btn" type="submit" name="" value="Sign Up"> <br> <br>
	  </div>
    
	</form>