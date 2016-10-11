<?php session_start();  ?>

<?php 

$_SESSION['username']=null;
$_SESSION['email']=null;


header("Location:index.php");


?>