
<?php

if(isset($_GET['p_id'])){
	
	$post_id=$_GET['p_id'];
	
				$query="SELECT * FROM posts WHERE id={$post_id}";
				$select_all_posts=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_posts)){
					$post_id=$row['id'];
				$post_title=$row['title'];
				$post_date=$row['date'];
				$post_author=$row['author'];
				$post_image=$row['image'];
				$post_content=$row['content'];
	
				


?>


<form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" value="<?php echo $post_title;  ?>" class="form-control" name="title">
        </div>
         <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" value="<?php echo $post_author;  ?>" class="form-control" name="post_author">
        </div>
		<div class="form-group">
            <label for="post_date">Post Date</label>
            <input type="date" value="<?php echo $post_date;  ?>" class="form-control" name="post_date">
        </div>
           <div class="form-group">
		   
           
            <img width="100" src="images/<?php echo $post_image  ?>" alt="">
			 <input type="file" name="image">
        </div>
        <div class="form-group">
            <label for="post_content"> Post Content</label>
            
       

            <textarea class="form-control"  name="post_content" cols="30" rows="5">
			<?php echo $post_content;  ?>
            </textarea>
        </div>
         <div class="form-group">
  
            <input class="btn btn-primary"  type="submit" name="update_post" value="Update Post">
        </div>
		</form>
		
		
<?php }} ?>
<?php

if(isset($_POST['update_post'])){
	
	                       if(isset($_GET['p_id'])){
	
	                      $post_id=$_GET['p_id'];
						 
						   }
							
							$post_title=clean($_POST['title']);
							$post_author=clean($_POST['post_author']);
							$post_date=clean($_POST['post_date']);
							
							$post_image=$_FILES['image']['name'];
							$post_image_tmp=$_FILES['image']['tmp_name'];
							$post_content=clean($_POST['post_content']);	
							move_uploaded_file($post_image_tmp,"images/$post_image");
							
							if(empty($post_image)){
								
							$query0="SELECT * FROM posts where id={$post_id}";
							
							$select_image=mysqli_query($connection,$query0);
							while($row=mysqli_fetch_array($select_image)){
								
								$post_image=$row['image'];
							}
							}
						$query8 = "UPDATE posts SET title='$post_title', date = now(), content='$post_content',  image='$post_image' WHERE id=$post_id ";
							
							$update_post_query=mysqli_query($connection,$query8);
							if(!$update_post_query){
								echo "bad";
							}
							
						
						
	
}


?>