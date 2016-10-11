<?php include "db.php"; ?>
<?php session_start(); ?>
<?php ob_start(); ?>
<?php  include("init.php");  ?>
<?php

if(isset($_POST['login'])){
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	$username=mysqli_real_escape_string($connection,$username);
	$password=mysqli_real_escape_string($connection,$password);
	
	$query="SELECT * FROM users WHERE username='{$username}'";
	$select_user_query=mysqli_query($connection,$query);


   while($row=mysqli_fetch_array($select_user_query)){
	   
	   $new_username=$row['username'];
	   $new_password=$row['password'];
	   $new_firstname=$row['user_firstname'];
	   $new_lastname=$row['user_lastname'];
	   $new_role=$row['user_role'];
   }

   if($username!==$new_username && $password!==$new_password){
	   
	   header("Location:events-archive.php");
	   echo "I am here";
   }else if($username==$new_username && $password==$new_password){
	   
	   $_SESSION['username']=$new_username;
	   $_SESSION['firstname']=$new_firstname;
	   $_SESSION['lastname']=$new_lastname;
	   $_SESSION['role']=$new_role;


	   
	 header("Location:dashboard.php");  
   }else {
	   header("Location:events-archive.php");
	   echo "I am here";
   }


	
}





?>