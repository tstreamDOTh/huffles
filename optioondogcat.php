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
	.side{margin-top:20px;margin-bottom:20px;border:0;border-top:4px solid #FFA500}
	.pp{
	position:relative;
	left:12px;
	}
	.round{
border-radius: 10px;
}
.game{
        font-family: 'Montserrat';
       color:#676767;
      }
	  .cl{
	  background-color:#F3F3F3;
	  }
	  .mt{
	  background-color:white;
	  z-index:3;
	  }
	   .cnt{
	  background-color:#808080	;
	  }
	 .he{
	 height:3px;
	background-color:#FFA500;
	 }
	 .adj{
	 padding-bottom:20px;
	 }
	 .pad{
	 padding-top:8px;
	 }
	 .ss{
	 position:relative;
	 right:20px;
	 }
	 .cc{
		color:red;
	 }
	</style>
</head><!--/head-->

<body>
<header id="header">
<div class="header_top"><!--header_top-->
			  <nav class="navbar navbar-default navbar-collapse">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Locations<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"></a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="STORELOCATOR.php">Store Locator</a></li>
            <li><a href="./">Contact<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      
    </nav>
		</div><!--/header_top
	<header id="header"><!--header-->
		</header><!--/header-->
	<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
				<div class="col-md-5">
					
						<div class="logo col-xs-12 col-sm-12 ss">
							<a href="index.html"><img src="images/tttt.png" alt="" /></a>
						</div>
						
				
					</div>
						<div class="col-md-7">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							<div class="col-xs-6 col-sm-2">
								<li><a href="optioondogcat.php?name=dog"><h3><font color="#FF8C00">Dogs</font></h3></a></li>
								</div>
								<div class="col-xs-6 col-sm-2">
              <li><a href="optioondogcat.php?name=cat"><h3><font color="#FF8C00">Cats</font></h3></a></li>
			  </div>
			  <div class="col-xs-6 col-sm-2">
              <li ><a href="optioondogcat.php?name=birds"><h3><font color="#FF8C00">Birds</font></h3></a></li>
			  </div>
			  <div class="col-xs-6 col-sm-3">
              <li ><a href="optioondogcat.php?name=pets"><h3><font color="#FF8C00">SmallPets</font></h3></a></li>
			  </div>
			  <div class="col-xs-6 col-sm-2">
              <li><a href="optioondogcat.php?name=aqua"><h3><font color="#FF8C00">Aquarium</font></h3></a></li>
			  </div>
			  
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

	
	<section class="cl">
	<br>
	<br>
		<div class="container ">
			<div class="row mt">
			<br>
			<br>
			
				<div class="col-md-9">
				
				<div class="row">
				
				<table class="table table-bordered table-hover">
					  <thead>
					  <tr>
					  <th><center><h3>TYPE</h3></center></th>
					  <th><center><h3>BREED</h3></center></th>
					  <th><center><h3>SHOP NAME</h3></center></th>
					 
					  </tr>
					  </thead>
					   <tbody>
				<?php
if(isset($_GET['name'])){
	$p_id=$_GET['name'];
	
				$query7="SELECT * FROM dogs WHERE type='$p_id' AND status='Available'";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
					$id=$row['id'];
				$type=$row['type'];
				$breed=$row['breed'];
				$status=$row['status'];
			  $owner =$row['owner'];

?>
				<div class="col-xs-12 col-sm-8">
			
			 
					  <tr>
					  <td><center><h4><?php echo $type ?><h4></center></td>
					  <td><center><h4><?php echo $breed ?><h4></center></td>
                      <td><center><h4><?php echo $owner ?></h4></center></td>	
                       			  
					  </tr>
		
				</div>
				
<?php }} ?>
</tbody>
</table>
		
	
	
			 
				
				</div>
				
			
		        <!-- Blog Column -->
		             
		 
					
	
					
					
					
				
			</div>
			 <div class="col-md-3">

                <!-- Blog Search Well -->
                
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4 class="col-lg-12">List the Stores</h4>
                    <div class="row">
                        <p >
					
                            <ul class="list-unstyled">
							<?php
							$query7="SELECT * FROM petstores ORDER BY id DESC LIMIT 5";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
					$id=$row['id'];
				$name=$row['name'];
				$address=$row['address'];
				?>
                                <li><a href="#"><?php echo $name ?></a>
                                </li>
				<?php } ?>
                            </ul>
							<br>
							<center>
							<button type="button" class="btn btn-warning">List Your Store</button></center>
						
                        </p>
                        
                    </div>
                    <!-- /.row -->
                </div>
<br>
<br>
                <!-- Side Widget Well -->
                <img class="img-responsive round" src="images/2.jpg" alt="Media Object" >
				<br>
				<br>
            </div>
			
		</div>
		</div>
		<div class="callout cnt">
	<br>
	<br>
	<br>
    <div class="container">
	
            <div class="col-xs-12 col-md-3">
                <ul class="list-unstyled">
                    
                   <img class="img-responsive" src="images/1.png" alt="Media Object" >
                </ul>
            </div>
            <div class="col-xs-12 col-md-3">
                <ul class="list-unstyled">
                    
					
                    <li><a href="#"><h4 style="color:white" class="game">Chennai</h4></a></li>
				
                    <li><a href="#"><h4 style="color:white" class="game">Ahmedabad</h4></a></li>
				
                    <li><a href="#"><h4 style="color:white" class="game">Gurgaon</h4></a></li>
                    <li><a href="#"><h4 style="color:white" class="game">Hyderabad</h4></a></li>
                </ul>
            </div>
           <div class="col-xs-12 col-md-3">
                <ul class="list-unstyled">
                    
					
                    <li><a href="#"><h4 style="color:white" class="game">Chennai</h4></a></li>
				
                    <li><a href="#"><h4 style="color:white" class="game">Ahmedabad</h4></a></li>
				
                    <li><a href="#"><h4 style="color:white" class="game">Gurgaon</h4></a></li>
                    <li><a href="#"><h4 style="color:white" class="game">Hyderabad</h4></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-3">
                <ul class="list-unstyled">
                    
					
                    <li><a href="#"><h4 style="color:white" class="game">Chennai</h4></a></li>
				
                    <li><a href="#"><h4 style="color:white" class="game">Ahmedabad</h4></a></li>
				
                    <li><a href="#"><h4 style="color:white" class="game">Gurgaon</h4></a></li>
                    <li><a href="#"><h4 style="color:white" class="game">Hyderabad</h4></a></li>
                </ul>
            </div>
			
    </div>

    
   <div class="row">
            <div class="col-xs-12">
			<br>
             <hr class="mt">
			 
            <center>
                <p class="text-muted"><h4 style="color:white" class="game">Join Us On</h4></p>
           </center>
        </div>
		<hr>
</div>

  </div>
	</section>
	
	

  
    <script src="jss/jquery.js"></script>
	<script src="jss/bootstrap.min.js"></script>
	<script src="jss/jquery.scrollUp.min.js"></script>
	<script src="jss/price-range.js"></script>
    <script src="jss/jquery.prettyPhoto.js"></script>
    <script src="jss/main.js"></script>
</body>
</html>