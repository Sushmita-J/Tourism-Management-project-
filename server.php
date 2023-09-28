<?php
session_start();

// initializing variables
$id="";
$username = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'tours');
mysqli_select_d($db,'signin');

// REGISTER USER
$id=$_POST['id'];
$username=$_POST['username'];
$passwrod=$_POST['password'];
$s = "select * from signin where username='$username' ";
$result=mysqli_query($db,$s);
$num=mysqli_num_rows($result);
if($num==1){
  echo"username already taken";
}
else{
  $reg=" insert into signin(id,username,password) values ('$id' , '$username' ,'$password')";
  mysqli_query($db,$reg);
  echo "successful";
}