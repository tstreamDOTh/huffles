<!DOCTYPE html>
<?php include("CONNECTTODATABASE.php"); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HUFFLES</title>
    <link href="csss/bootstrap.min.css" rel="stylesheet">
    <link href="csss/font-awesome.min.css" rel="stylesheet">
    <link href="csss/prettyPhoto.css" rel="stylesheet">
    <link href="csss/price-range.css" rel="stylesheet">
    <link href="csss/animate.css" rel="stylesheet">
	<link href="csss/main.css" rel="stylesheet">
	<link href="csss/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
   
	<style>
	.go{
	color:#2F4F4F;
	}
	.mo{
	background-color:#ADD8E6;
	}
	.mot{
	background-color:#F08080;
	}
	.mott{
	background-color:	#DCDCDC;
	}
	.mottr{
	background-color:#F0E68C;
	}
	
	.game{
        font-family: 'Montserrat', sans-serif;
       color:#676767;
      }
	  
	  .ro{
background-color: #FF8C00;

}
	</style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-12">
						<div class="social-icons pull-right">
							<ul class="top_nav">
								<li><a href="#"><b><h5>Store locator&nbsp&nbsp&nbsp&nbsp</h5></b></a></li>
								<li><a href="#"><b><h5>Locations&nbsp&nbsp&nbsp&nbsp</h5></b></a></li>
								<li><a href="#"><b><h5>Contact&nbsp&nbsp&nbsp&nbsp</h5></b></a></li>
								 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b>About</b><span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="#">Link Two</a></li>
                    <li><a href="#">Link Three</a></li>               
                  </ul>
                </li>  
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/ttt.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.html"><h2><font color="#FF8C00">Dogs</font></h2></a></li>
              <li><a href="pages/page.html"><h2><font color="#FF8C00">Cats</font></h2></a></li>
              <li ><a href="pages/contact.html"><h2><font color="#FF8C00">Birds</font></h2></a></li>
              <li><a href="pages/404.html"><h2><font color="#FF8C00">Small Pets</font></h2></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
<br>
<br>
	</header><!--/header-->
	
	
	    <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
               <!-- <h1>Blog Post Title</h1>-->

                <!-- Author -->
                <p>
				

<?php
if(isset($_GET['p_id'])){
	$id=$_GET['p_id'];
	
				$query7="SELECT * FROM posts WHERE id={$id}";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
					$id=$row['id'];
				$title=$row['title'];
				$date=$row['date'];
				$author=$row['author'];
				$image=$row['image'];
				$content=$row['content'];
						





?>
                   <strong> BY &nbsp </strong> <a href="#"><strong><?php echo $author ?>&nbsp </strong></a>| <strong><?php echo $date ?></strong>
                </p>

               

                <!-- Date/Time -->
                <h2 class="game"><b> <?php echo $title ?></b></h2>

               
                  
                
                <!-- Preview Image -->
                <img class="img-responsive" src="images/<?php echo $image ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="game"><?php echo $content ?></p>
               
                <hr>

				<div class="mysharing row">
					<!-- Twitter -->
					<div class="col-xs-12 col-md-3 mo">
					<a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> <font style="color:black">Twitter</font></a>
					</div>
			<div class="col-xs-12 col-md-3 mot">
					<a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> <font style="color:black">Facebook</font></a>
					</div>
					<!-- Google+ -->
					<div class="col-xs-12 col-md-3 mott">
					<a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i><font style="color:black"> Google+</font></a>
	</div>
					<!-- LinkedIn --> 
					<div class="col-xs-12 col-md-3 mottr">
					<a href="http://www.linkedin.com/shareArticle?mini=true" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i><font style="color:black"> LinkedIn</font></a>
					</div>
					</div>
				<br>
				<br>
                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. 
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
           <div class="col-md-4">

                
               

                
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
                  <div class="well">
                    <h5><strong>Blog Search</strong></h5>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default ro" type="button" bg-color="#4CAF50">
                                <span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                        </span>
                    </div>
                   
                </div>
                
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
	
	

  
    <script src="jss/jquery.js"></script>
	<script src="jss/bootstrap.min.js"></script>
	<script src="jss/jquery.scrollUp.min.js"></script>
	<script src="jss/price-range.js"></script>
    <script src="jss/jquery.prettyPhoto.js"></script>
    <script src="jss/main.js"></script>
</body>
</html>