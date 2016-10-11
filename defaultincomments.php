<?php ob_start(); ?>
<?php include("CONNECTTODATABASE.php"); ?>
<table class="table table-bordered table-hover">
					   <thead>
					   <tr>
					   <th>Id</th>
					   <th>Author</th>
					   <th>Content</th>
					   <th>In Response to</th>
					   <th>Email</th>
					   <th>Date</th>
					   
					   <th>Status</th>
					   <th>Approve</th>
					    <th>Unapprove</th>
						<th>Delete</th>
					   </tr>
					   
					   </thead>
						<?php
					
				$query="SELECT * FROM comment";
				$select_all_comment=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_comment)){
					$comment_id=$row['comment_id'];
					$comment_post_id=$row['comment_post_id'];
					$comment_author=$row['comment_author'];
					$comment_content=$row['comment_content'];
				;
				$comment_email=$row['comment_email'];
				
				$comment_date=$row['comment_date'];
				$comment_status=$row['comment_status'];
				
						?>
                      
					   <tbody>
					   <tr>
					   <td><?php echo $comment_id ?></td>
					   
					   <td><?php echo $comment_author ?></td>
					   <td><?php echo $comment_content ?></td>
					  
						<td><?php
					
				$query12="SELECT * FROM posts";
				$select_all_posttitle=mysqli_query($connection,$query12);
				
				while($row=mysqli_fetch_assoc($select_all_posttitle)){
					$title=$row['title'];
				echo $title;
				}
						?></td>
					   <td><?php echo $comment_email ?></td>
					   <td><?php echo $comment_date ?></td>
					   <td><?php echo $comment_status ?></td>
					   <td><a href="comment.php?approve=<?php  echo $comment_id ?>">Approve</a></td>
					   <td><a href="comment.php?unapprove=<?php  echo $comment_id ?>">Unapprove</a></td>
					   <td><a href="comment.php?delete=<?php  echo $comment_id ?>">Delete</a></td>
					   
					   </tr>
				<?php } ?>
					   </tbody>
					   </table>
					   
					   
					   <?php
			
				if(isset($_GET['approve'])){
					$comment_approve_id=$_GET['approve'];
				   $query13="UPDATE comment SET comment_status='approved' WHERE comment_id=$comment_approve_id";
				   $send_query=mysqli_query($connection,$query13);
				 header("Location:comment.php");  
				}
				
				if(isset($_GET['unapprove'])){
					$comment_unapprove_id=$_GET['unapprove'];
				   $query15="UPDATE comment SET comment_status='unapproved' WHERE comment_id=$comment_unapprove_id";
				   $send_query=mysqli_query($connection,$query15);
				 header("Location:comment.php");  
				}
				
				if(isset($_GET['delete'])){
					$comment_id=$_GET['delete'];
				   $query2="DELETE FROM comment WHERE comment_id={$comment_id}";
				   $send_query=mysqli_query($connection,$query2);
				 header("Location:comment.php");  
				}
				
				
				?>