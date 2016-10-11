

<?php
						
						if(isset($_POST['create_post'])){
							
							$post_title=clean($_POST['title']);
							$post_author=clean($_POST['post_author']);
							$post_date=clean($_POST['post_date']);
							
							$post_image=$_FILES['image']['name'];
							$post_image_tmp=$_FILES['image']['tmp_name'];
							$post_content=clean($_POST['post_content']);	
							move_uploaded_file($post_image_tmp,"images/$post_image");
							
							
						$query="INSERT INTO posts(title,date,author,image,content)";	
						$query.="VALUES('{$post_title}','{$post_date}','{$post_author}','{$post_image}','{$post_content}')";
							
							$create_post_query=mysqli_query($connection,$query);
							if(!$create_post_query){
							echo "<p class='bg-danger text-center'>Your post couldn't be added due to server problems.</p>";
							}else{
								echo "<p class='bg-success text-center'>Your post has been successfully added.</p>";
							}
							
						}
						
						
						?>

<form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" class="form-control" name="title">
        </div>
         <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author">
        </div>
		<div class="form-group">
            <label for="post_date">Post Date</label>
            <input type="date" class="form-control" name="post_date">
        </div>
           <div class="form-group">
            <label for="post_image">Post Image</label>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label for="post_content"> Post Content</label>
            
       

            <textarea  class="form-control" name="post_content" cols="30" rows="5">
            </textarea>
        </div>
         <div class="form-group">
  
            <input class="btn btn-primary"  type="submit" name="create_post" value="Publish Post">
        </div>
		</form>
		
		<div>
		<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
 <script src="scripts.js"></script>
		</div>
		