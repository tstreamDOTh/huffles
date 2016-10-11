<?php 

function clean($input)
{
        $input = (string) $input;
        if (get_magic_quotes_gpc())
        {
                $input = stripslashes($input);
        }
        $output = htmlentities($input, ENT_QUOTES, 'UTF-8');
        
        return $output;
}
function redirect($location){
	
	return header("Location:{$location}");
	
}

function set_message($message){
	if(!empty($message)){
		$_SESSION['message']=$message;
		
	}else{
		$message="";
	}
	
}

function display_message(){
	
	if(isset($_SESSION['message'])){
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}


function token_generator(){
	
	$token=$_SESSION['token']= md5(uniqid(mt_rand(),true));
	
	return $token;
}

function email_exists($email){
	
	$query="SELECT user_id from usertry WHERE user_email='$email'";
	$result=query($query);
	
	if(row_count($result)==1){
		return true;
	}else{
		return false;
	}
	
	
	
}

function username_exists($username){
	
	$query="SELECT user_id from usertry WHERE username='$username'";
	$result=query($query);
	
	if(row_count($result)==1){
		return true;
	}else{
		return false;
	}
	
	
	
}
	
	function send_email($email,$subject,$msg,$headers){
		return mail($email,$subject,$msg,$headers);
	}
	




function validate_user_registration()
    {
	  $errors = [];
	   $min = 3;
	  $max = 20;
	  $minpass=8;
	  $zerocheck=0;
	


        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
	
		  $username=clean($_POST['username']);
		
		  $firstname=clean($_POST['firstname']);
		  
		  $lastname=clean($_POST['lastname']);
		
		   $email=clean($_POST['email']);
		   $password=clean($_POST['password']);
		   
		   $confirmpassword=clean($_POST['confirmpassword']);
           
            if(strlen($firstname) < $min){
				$errors[]="Your first name cannot be less than {$min} characters";
			}
			if(strlen($username) < $min){
				$errors[]="Your username cannot be less than {$min} characters";
			}
			if(empty($username)){
				$errors[]="Your username cannot be empty";
			}
			if(empty($firstname)){
				$errors[]="Your firstname cannot be empty";
			}
			if(empty($lastname)){
				$errors[]="Your lastname cannot be empty";
			}
			if(empty($email)){
				$errors[]="Your email cannot be empty";
			}
			if(strlen($lastname) < $min){
				$errors[]="Your last name cannot be less than {$min} characters";
			}
			if(strlen($firstname) > $max){
				$errors[]="Your first name cannot be greater than {$max} characters";
			}
			if(strlen($lastname) > $max){
				$errors[]="Your last name cannot be greater than {$max} characters";
			}
	        if(strlen($username) > $max){
				$errors[]="Your username cannot be greater than {$max} characters";
			}
			
			 if(strlen($email) < $min){
				$errors[]="Your email cannot be less than {$min} characters";
			}
			
			
			 if (strlen($password) <  $minpass) {
        $errors[] = "Password too short!";
         }

    if (preg_match("#[0-9]+#", $password)==$zerocheck) {
        $errors[] = "Password must include at least one number!";
    }

    if (preg_match("#[a-zA-Z]+#", $password)==$zerocheck) {
        $errors[] = "Password must include at least one letter!";
    }     
			
			
			
			
			
			
			
			if($password!==$confirmpassword){
				$errors[]="Your password fields don't match";
			}
			
			if(email_exists($email)){
				$errors[]="This email already exist.Please use another email";
			}
			
			
			  
			  
			  if(username_exists($username)){
				$errors[]="This username already exist.Please use another username";
			}
			  
			  
			  
			  
	        if(!empty($errors)){
				foreach($errors as $error){
					
					
				echo '
					<div class="alert bur alert-warning alert-dismissible" role="alert">
					
					<strong>Warning!</strong>'.$error.'
					</div>
					'; 
					
					 
				
					
				}
			}else{
				if(register_user($firstname,$lastname,$username,$email,$password,$image)){
				
					set_message("<p class='bg-success text-center'>Please check your email or spam for activation link</p>");
					
					redirect("activation.php");
					
				}else{
					set_message("<p class='bg-danger text-center'>Sorry we couldn't register the user</p>");
					redirect("activation.php");
				}
			}
        }
    }


function register_user($firstname,$lastname,$username,$email,$password){
	
	$firstname=escape($firstname);
	$lastname=escape($lastname);
	$username=escape($username);
	$email=escape($email);
	$password=escape($password);
	
	
	if(email_exists($email)){
		return false;
	}else if(username_exists($username)){ 
		return false;
	}else {
		$password=md5($password);
		$validation_code=md5($username+microtime());
		
		$sql="INSERT INTO usertry(username,password,user_firstname,user_lastname,user_email,user_image,user_role,validation_code,active)";
		$sql.="VALUES('$username','$password','$firstname','$lastname','$email','image','user','$validation_code',0)";
	   $result=query($sql);
	   confirm($result);
	    
		$subject="Activate Account";
		$msg="Please click on the link below to activate the account
		
	  http://localhost/ROUNAK/Compressed/wpf-degree_html/activate.php?email=$email&code=$validation_code
		
		
		";
	   $headers="From:noreply@cashoutoftrash.com";
	   
	   
	   
	  send_email($email,$subject,$msg,$headers);
	   
	   
      return true;
	}
	}
	




function activate_user(){
	
	if($_SERVER['REQUEST_METHOD']=="GET"){
		
		if(isset($_GET['email'])){
			
		  	$email=clean($_GET['email']);
		  
		   	$validation_code=clean($_GET['code']);
			
			$sql="SELECT user_id from usertry WHERE user_email='".escape($_GET['email']). "' AND validation_code='".escape($_GET['code'])."'";
			$result=query($sql);
			confirm($result);
			
			if(row_count($result)==1){
				
				$sql2="UPDATE usertry SET active=1,validation_code=0 WHERE email='".escape($email)."' AND validation_code='".escape($validation_code)."'";
				$result2=query($sql2);
			confirm($result2);
				set_message( "<p class='bg-success text-center'>Your account has been activated</p>");
			
			redirect("events-archive.php");
			
			}else{
				set_message( "<p class='bg-success text-center'>Your account couldn't be activated</p>");
			
			redirect("events-archive.php");
				
			}
		}
		
		
	}else{
				set_message( "<p class='bg-success text-center'>Your account couldn't be activated</p>");
			
			redirect("activate.php");
				
			}
	
}




#login system


function validate_user_login()
    {
	  $errors = [];
	   $min = 3;
	  $max = 20;
	
	


        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
         $email=clean($_POST['email']);
		   $password=clean($_POST['password']);
       
	 
	     if(empty($email)){
			 $errors[]="Email field cannot be empty";
		 }
	 
	      if(empty($password)){
			 $errors[]="Password field cannot be empty";
		 } 
	 
	      if(strlen($email) < $min){
				$errors[]="Your email cannot be less than {$min} characters";
			}
	 
	 
          	 
	 
	 
	 
         if(!empty($errors)){
				foreach($errors as $error){
					
					
				echo '
					<div class="alert bur alert-warning alert-dismissible" role="alert">
					
					<strong>Warning!</strong>'.$error.'
					</div>
					'; 
					
					 
				
					
			 }
			}else{
				
				if(login_user($email,$password))
				{
					if($_SESSION['role']=='admin'){
						
						redirect("dashboard.php");
					
						
					}else if($_SESSION['role']=='user'){
						redirect("dashboarduser.php");
					}
					
				}else
				{
					echo '<div class="alert bur alert-warning alert-dismissible" role="alert">
					
					<strong>Warning</strong>Login Credentials Are Incorrect
					</div>';
					
				}
				
			}	 
	 
       	 
        }

	}
	
	
	
	function login_user($email,$password)
	{
	  	
		$sql3="SELECT * FROM usertry WHERE user_email='".escape($email)."'";
		$result3=query($sql3);
		
		if(row_count($result3)==1){
			
			$row=fetch_array($result3);
			$db_password=$row['password'];
			$username=$row['username'];
			$firstname=$row['user_firstname'];
			$lastname=$row['user_lastname'];
			$email=$row['user_email'];
			$role=$row['user_role'];
			if(md5($password)==$db_password){
				
				$_SESSION['email']=$email;
				$_SESSION['username']=$username;
				$_SESSION['firstname']=$firstname;
				$_SESSION['lastname']=$lastname;
				$_SESSION['role']=$role;
				
				
				return true;
			}else{
				return false;
			}
			return true;
		}else{
			return false;
		}
		
		
		
		
	}
	
#logged in function


function logged_in(){
	if(isset($_SESSION['email'])){
		return true;
	}else{
		return false;
		
	}
}	
	
	
#recover password function

function recover_password(){
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		if(isset($_SESSION['token'])&& $_POST['token']==$_SESSION['token']){
		
		$email=escape($_POST['resetemail']);
		if(email_exists($email)){
			
			
			$validation_code=md5($email + microtime());
			
			
			setcookie('temp_access_code',$validation_code,time()+3000);
			
			$sql="UPDATE usertry SET validation_code='".escape($validation_code)."' WHERE user_email='".escape($email)."'";
			$result=query($sql);
			confirm($result);
			$subject="Please reset your password";
			$message="Here is your password reset code {$validation_code}
			
			Click here to reset your password :http://localhost/ROUNAK/Compressed/wpf-degree_html/code.php?email=$email&code=$validation_code
			
			
			";
			
			$headers="From:noreply@cashoutoftrash.com";
			
			if(!send_email($email,$subject,$message,$headers)){
				echo '<div class="alert bur alert-warning alert-dismissible" role="alert">
					
					<strong>Sorry ,Email could not be sent</strong>
					</div>';
			}else{
				
				
				set_message("<p class='bg-success text-center'>Please check your email or spam for password reset code</p>");
				
				
				redirect("activation.php");
			}
			
			
		}else{
			echo  '<div class="alert bur alert-warning alert-dismissible" role="alert">
					
					<strong>Sorry ,This account doesnot exist</strong>
					</div>';#validation error here
		}
		
		
		
		}else{
			
			
			redirect("index.php");
			
			
			
		}
	}
}
#code validation for reset
function validate_code(){
if(isset($_COOKIE['temp_access_code'])){
	
	
	if(!isset($_GET['email'])&& !isset($_GET['code'])){
		
		redirect("index.php");
		
	}else if(empty($_GET['email'])||empty($_GET['code'])){
		redirect("index.php");
	}else{
		
		if(isset($_POST['code'])){
			 $email=clean($_GET['email']);
			 
			 $validation_code=clean($_POST['code']);
			 $sql="SELECT user_id FROM usertry WHERE validation_code='".escape($validation_code)."'AND user_email='".escape($email)."'";
			 $result=query($sql);
			 confirm($result);
			 
			 if(row_count($result)==1){
				 
				 setcookie('temp_access_code',$validation_code,time()+300);
				 redirect("reset.php?email=$email&code=$validation_code");
			 }else{
				 echo '<div class="alert bur alert-warning alert-dismissible" role="alert">
					
					<strong>Sorry ,Email could not be sent</strong>
					</div>';
			 }
		}
	}
	
	
	
	
	
}else{
	
	set_message("<p class='bg-success text-center'>Sorry,Your validation cookie was expired</p>");
	redirect("recover.php");
	
	
}
	
}
	
	
	
	#password reset function
	
	function password_reset(){
		
		if(isset($_COOKIE['temp_access_code'])){
			
			if(isset($_GET['email'])&&isset($_GET['code'])){
			
			
			if(isset($_SESSION['token'])&& isset($_POST['token'])&& $_POST['token']===$_SESSION['token']){
		
		    if($_POST['password']==$_POST['confirmpassword']) {
				
				$updated_password=md5($_POST['password']);
		
	         $sql="UPDATE usertry SET password='".escape($updated_password)."',validation_code=0 WHERE user_email='".escape($_GET['email'])."'";
			
			query($sql);
			set_message("<p class='bg-success text-center'>Your password has been reset.Please login.</p>");
			redirect("events-archive.php");  
			
			}
			
			
			
			
		}
		}
		
	}else{
			
			set_message("<p class='bg-danger text-center'>Sorry,Your time has expired</p>");
			redirect("recover.php");
			
		}
	
	
	}
	
	
	
	
	
?> 