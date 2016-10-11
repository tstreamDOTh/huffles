<?php include("CONNECTTODATABASE.php"); ?>
<?php
						
						if(isset($_POST['add_user'])){
							
							$username=$_POST['username'];
							$user_firstname=$_POST['firstname'];
							$user_lastname=$_POST['lastname'];
							$user_email=$_POST['email'];
							$user_role=$_POST['role'];	
							$user_password=$_POST['password'];
							
							
						$query="INSERT INTO users(username,password,user_firstname,user_lastname,user_email,user_role)";	
						$query.="VALUES('{$username}','{$user_password}','{$user_firstname}','{$user_lastname}','{$user_email}','{$user_role}')";
							
							$create_user_query=mysqli_query($connection,$query);
							
							
						}
						
						
						?>

<form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
         <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" name="firstname">
        </div>
		<div class="form-group">
            <label for="lastname">LastName</label>
            <input type="text" class="form-control" name="lastname">
        </div>
           <div class="form-group">
            <label for="emai">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
          <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" name="role">
        </div>
		<div class="form-group">
            <label for="role">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
         <div class="form-group">
  
            <input class="btn btn-primary"  type="submit" name="add_user" value="Add User">
        </div>
		</form>