 <?php 
 
 $connection=mysqli_connect('localhost','root','','huffles');
 
 function row_count($result){
	 
	 
	 return mysqli_num_rows($result);
	 
 }
 
 
 
 
 
 function escape($string){
	 global $connection;
	 
	 return mysqli_real_escape_string($connection,$string);
	 
 }
 
 function query($query){
	 global $connection;
	 
	 return mysqli_query($connection,$query);
	 
 }
 
 
 function confirm($result){
	 
	 global $connection;
	 if(!$result){
		 die("QUERY FAILED".mysqli_error($connection));
	 }
	 
	 
 }
 
 
 
 function fetch_array($resulti){
	 global $connection;
	 
	 return mysqli_fetch_array($resulti);
	 
 }
 
 ?>