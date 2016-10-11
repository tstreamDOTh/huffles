<?php ob_start(); ?>

<table class="table table-bordered table-hover">
					   <thead>
					   <tr>
					   <th>Id</th>
					   <th>Username</th>
					   <th>FirstName</th>
					   <th>LastName</th>
					   <th>Email</th>
					   <th>Role</th>
					   <th>Make Admin</th>
					   <th>Make User</th>
					   <th>Delete</th>
					   </tr>
					   
					   </thead>
						<?php
					$connection=mysqli_connect('localhost','root','','huffles');
				$query="SELECT * FROM usertry";
				$select_all_users=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_users)){
					$user_id=$row['user_id'];
					$username=$row['username'];
					$user_firstname=$row['user_firstname'];
					$user_lastname=$row['user_lastname'];
				
				$user_email=$row['user_email'];
				
				$user_role=$row['user_role'];
				
				
						?>
                      
					   <tbody>
					   <tr>
					   <td><?php echo $user_id ?></td>
					   
					   <td><?php echo $username ?></td>
					   <td><?php echo $user_firstname ?></td>
					  <td><?php echo $user_lastname ?></td>
						
					   <td><?php echo $user_email ?></td>
					   
					   <td><?php echo $user_role ?></td>
					 <td><a href="users.php?changetoadmin=<?php  echo $user_id ?>">Make Admin</a></td> 
					   <td><a href="users.php?changetouser=<?php  echo $user_id ?>">Make User</a></td>
					   <td><a href="users.php?delete=<?php  echo $user_id ?>">Delete</a></td>
					   
					   </tr>
				<?php } ?>
					   </tbody>
					   </table>
					   
					   
					   <?php
				$connection=mysqli_connect('localhost','root','','huffles');
				if(isset($_GET['changetoadmin'])){
					$admin_id=$_GET['changetoadmin'];
				   $query13="UPDATE usertry SET user_role='admin' WHERE user_id=$admin_id";
				   $send_query=mysqli_query($connection,$query13);
				  header("Location:users.php");  
				}
				
				if(isset($_GET['changetouser'])){
					$user_id=$_GET['changetouser'];
				   $query15="UPDATE usertry SET user_role='user' WHERE user_id=$user_id";
				   $send_query=mysqli_query($connection,$query15);
				 header("Location:users.php");  
				}
				
				if(isset($_GET['delete'])){
					$user_id=$_GET['delete'];
				   $query2="DELETE FROM usertry WHERE user_id={$user_id}";
				   $send_query=mysqli_query($connection,$query2);
				 header("Location:users.php");  
				}
				
				
				?>