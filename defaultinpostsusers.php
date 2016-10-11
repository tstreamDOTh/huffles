<?php ob_start(); ?>
<?php include("CONNECTTODATABASE.php"); ?>
<?php
if(isset($_POST['checkBoxArray'])){
	
	foreach($_POST['checkBoxArray'] as $checkBoxPostId){
		$bulk_options=$_POST['boptions'];
		
		switch($bulk_options){
			case 'published':
			$query="UPDATE posts SET status='{$bulk_options}' WHERE id='{$checkBoxPostId}'";
			$updateandpublish=mysqli_query($connection,$query);
			break;
			case 'draft':
			$query="UPDATE posts SET status='{$bulk_options}' WHERE id='{$checkBoxPostId}'";
			$updateanddraft=mysqli_query($connection,$query);
			break;
			case 'delete':
			$query="DELETE  FROM posts WHERE id='{$checkBoxPostId}'";
			$updateanddelete=mysqli_query($connection,$query);
			break;
			
			
			
		}
		
		
		
	}
	 
}



?>
<form action="" method="post">
<table class="table table-bordered table-hover">

<div id="bulkOptionsContainer" class="col-xs-4">
<select class="form-control" name="boptions" id="">
<option value="">Select Option</option>
<option value="published">Publish</option>
<option value="draft">Draft</option>
<option value="delete">Delete</option>

</select>
<br>
</div>
<div class="col-xs-4">
<input type="submit" name="submit" class="btn btn-success" value="Apply">
<a class="btn btn-primary" href="add_post.php">Add New</a>
</div>
					   <thead>
					   <tr>
					   <th><input id="selectBoxes" type="checkbox"></th>
					   <th>Id</th>
					   <th>Title</th>
					   <th>Author</th>
					   <th>Date</th>
					   <th>Image</th>
					   <th>Comment Count</th>
					   <th>View Post </th>
					   
					   </tr>
					   
					   </thead>
						<?php
						$connection=mysqli_connect('localhost','root','','asme');
				$query="SELECT * FROM posts";
				$select_all_posts=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_posts)){
					$post_id=$row['id'];
				$post_title=$row['title'];
				$post_date=$row['date'];
				$post_author=$row['author'];
				$post_image=$row['image'];
				$post_content=$row['content'];
					$comment_count=$row['comment_count'];	
						?>
                      
					   <tbody>
					   <tr>
					   <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="<?php echo $post_id ?>"></td>
					   <td><?php echo $post_id ?></td>
					   <td><?php echo $post_title ?></td>
					   <td><?php echo $post_author ?></td>
					   <td><?php echo $post_date ?></td>
					   
					   <td><img width="80" src="img/<?php echo $post_image ?>" alt="image" ></td>
					   <td><?php echo $comment_count ?></td>
					   <td><a href="events-archive.php?p_id=<?php  echo $post_id ?>">View Post</a></td>
					  
					   
					   </tr>
				<?php } ?>
					   </tbody>
					   </table>
					   
					   </form>
					   <?php
				$connection=mysqli_connect('localhost','root','','asme');
				if(isset($_GET['delete'])){
					$post_id=$_GET['delete'];
				   $query2="DELETE FROM posts WHERE id={$post_id}";
				   $send_query=mysqli_query($connection,$query2);
				 header("Location:posts.php");  
				}
				
				
				?>