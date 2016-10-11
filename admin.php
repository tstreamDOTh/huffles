<?php ob_start(); ?>
<?php session_start(); ?>
<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CASHOUTOFTRASH</title>

    <!-- Bootstrap Core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css1/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
			<li><a href="blogpage.php">HOME</a></li>
			

				
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                      
                     
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="./admin.php"><i class="fa fa-fw fa-dashboard"></i>Add Category</a>
                    </li>
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="post_dropdown" class="collapse">
                            <li>
                                <a href="#">Add to Gallery</a>
                            </li>
                            <li>
                                <a href="">Add Event</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="posts.php"><i class="fa fa-fw fa-wrench"></i>Add Events</a>
                    </li>
					<li>
                        <a href="comment.php"><i class="fa fa-fw fa-wrench"></i>Comments</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">View Users</a>
                            </li>
                            <li>
                                <a href="#">Add User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i>Add News</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to the Admin
                            <small>sessionusername</small>
                        </h1>
						<div class="col-xs-6">
						<?php
						
						if(isset($_POST['submit'])){
							
							$cat_title=$_POST['cat_title'];
							$cat_url=$_POST['cat_url'];
							if($cat_title==""||empty($cat_title)){
								echo "This field should not be empty";
							}else{
							
								$query="INSERT INTO head_categories(cat_name,cat_addrss)";
							$query.="VALUES ('{$cat_title}','{$cat_url}')"	;
                             $create_category_query=mysqli_query($connection,$query);
                             
                              if(!$create_category_query){
								  die('Query failed'.mysqli_error($connection));
							  }							 
                             							  
							}
							
						}
						
						
						
						
						?>
						
						
						
						
						
						
						<form action="" method="post">
						<div class="form-group">
						<label for="cat_title">Category Title</label>
						<input type="text" class="form-control" name="cat_title">
						</div>
						
						<div class="form-group">
						<label for="cat_title">Category Url</label>
						<input type="text" class="form-control" name="cat_url">
						</div>
						<div class="form-group">
						<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
						</div>
						</form>
                      </div>
					  
					  <div class="col-xs-6">
					  <table class="table table-bordered table-hover">
					  <thead>
					  <tr>
					  <th>Category Nam</th>
					  <th>Category Url</th>
					  </tr>
					  </thead>
					  <?php
					
				$query="SELECT * FROM head_categories";
				$select_all_category=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_category)){
					$cat_id=$row['cat_id'];
				$cat_name=$row['cat_name'];
				$cat_address=$row['cat_addrss'];
				
				
					  
					  
					  ?>
					  
					  <tbody>
					  <tr>
					  <td><?php echo $cat_name ?></td>
                      <td><?php echo $cat_address ?></td>	
                       <td><a href="admin.php?delete=<?php echo $cat_id ?>">Delete</a></td>					  
					  </tr>
					  </tbody>
					 
				<?php } ?>
				<?php
				
				if(isset($_GET['delete'])){
					$the_cat_id=$_GET['delete'];
				   $query1="DELETE FROM head_categories WHERE cat_id={$the_cat_id}";
				   $send_query=mysqli_query($connection,$query1);
				 header("Location:admin.php");  
				}
				
				
				?>
				 </table>
					  </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>

</body>

</html>
