<!DOCTYPE html>
<?php include("CONNECTTODATABASE.php"); ?>
<?php session_start(); ?>
 <?php

if(isset($_POST['puppysubmit'])){
	
	$type="DOGS";
	$lookfor="puppies";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	
	 <?php

if(isset($_POST['catisubmit'])){
	
	$type="CATS";
	$lookfor="kitten";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:storelocate.php"); 
	  
}
	?>
	 <?php

if(isset($_POST['kaccisubmit'])){
	
	$type="CATS";
	$lookfor="accessories";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	<?php
	if(isset($_POST['dogisubmit'])){
	
	$type="DOGS";
	$look="food";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$look;
	   header("Location:storelocate.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['accisubmit'])){
	
	$type="DOGS";
	$look="accessories";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$look;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	<?php
	if(isset($_POST['carisubmit'])){
	
	$type="DOGS";
	$look="care";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$look;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	
	<?php
	if(isset($_POST['toysubmit'])){
	
	$type="DOGS";
	$look="toys";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$look;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
<?php
	if(isset($_POST['petstoresubmit'])){
	
	$type="DOGS";
	$lookfor="accessories";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:storelocate.php"); 
	  
}
	?>
<?php
	if(isset($_POST['clinicsubmit'])){
	
	$type="DOGS";
	$lookfor="care";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:storelocate.php"); 
	  
}
	?>
<?php
	if(isset($_POST['kittensubmit'])){
	
	$type="CATS";
	$lookfor="kitten";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:storelocate.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['kittisubmit'])){
	
	$type="CATS";
	$lookfor="food";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:storelocate.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['cattoyssubmit'])){
	
	$type="CATS";
	$look="toys";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$look;
	   header("Location:storelocate.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['birdfsubmit'])){
	
	$type="BIRDS";
	$look="food";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$look;
	   header("Location:storelocate.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['birdisubmit'])){
	
	$type="BIRDS";
	$look="chicks";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$look;
	   header("Location:storelocate.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['birdtoyssubmit'])){
	
	$type="BIRDS";
	$looki="accessories";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	<?php
	if(isset($_POST['birdssubmit'])){
	
	$type="BIRDS";
	$looki="services";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	<?php
	if(isset($_POST['smallpetsubmit'])){
	
	$type="SMALLPETS";
	$looki="PETVARITIES";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	<?php
	if(isset($_POST['smallpetfoodsubmit'])){
	
	$type="SMALLPETS";
	$looki="food";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	
	<?php
	if(isset($_POST['smallpetisubmit'])){
	
	$type="SMALLPETS";
	$looki="PETVARITIES";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	<?php
	if(isset($_POST['smallpetaccsubmit'])){
	
	$type="SMALLPETS";
	$looki="accessories";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	
	
	<?php
	if(isset($_POST['smallpettoyssubmit'])){
	
	$type="SMALLPETS";
	$looki="accessories";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['aquasubmit'])){
	
	$type="AQUARIUM";
	$looki="BREEDS";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	<?php
	if(isset($_POST['aquarisubmit'])){
	
	$type="AQUARIUM";
	$looki="BREEDS";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	
	
	
	<?php
	if(isset($_POST['tanksubmit'])){
	
	$type="AQUARIUM";
	$looki="tank";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['tanksubmit'])){
	
	$type="AQUARIUM";
	$looki="toys";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:storelocate.php"); 
	  
}
	?>
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
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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
       
      }
	  .cl{
	  background-color:#F3F3F3;
	  }
	  .l{
	  background-color:#EEA453;
	  border-radius:10px;
	  border:2px #EEA453;
	  height:30px;
	  width:150px;
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
	  .cnt{
	  background-color:	#282C35;
	  }
	  .pos{
		  position:relative;
		  right:70px;
		  
	  }
	  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content li {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color:	#282C35}

.dropdown:hover .dropdown-content {
    display: block;
	z-index:20;
}
bo {
	color:black;
}
.wi{
	width:500px;
	height:500px;
}
.ri{
	width:300px;
	height:250px;
	
}
.but{
	width:140px;
	background-color:#FF8C00;
	border:#FF8C00;
	height:30px;
	
}
.inc{
	
	height:20px;
}
 .ma:hover{
   background-color:white;
  border-bottom: thick solid #FF8C00;
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
          
          <ul class="nav navbar-nav navbar-right pos">
             <li class="ma"><a href="#navModal" style="color:black" ><font class="game" ><h4>Store Locator</h4></font></a></li>
			<li class="ma"><a href="blogs.php" style="color:black"><font class="game" style="color:black"><h4>Blog</h4></font></a></li>
            <li class="ma"><a href="#" style="color:black"><font class="game" style="color:black"><h4>Locations</h4></font></a></li>
			<li class="dropdown ma">
              <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:black"><font class="game"><h4>About</h4></font></a>
              <ul class="dropdown-menu">
                <li><a href="#">Another action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
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
							<div class="col-xs-12 col-sm-2">
								<li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Dogs</font></h3></a>
<ul class="dropdown-content ri">
     <li><a href="#puppyModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Get Home a Puppy</font></a></li>
	<li><a href="#toyModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Buy Dog Toys</font></a></li>
              <li><a href="#petstoreModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Find Accessories For your dog</font></a></li>
			 <li><a href="#clinicModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Find Nearest Clinic for your dog</font></a></li>
            
			                
            
			                
  </ul>
</li>
								</div>
								<div class="col-xs-6 col-sm-2">
              <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Cats</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#kittenModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Get Home a Kitten</font></a></li>
<li><a href="#catModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Get Cat food</font></a></li>
<li><a href="#cattoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Cat Accessories and Toys</font></a></li>
  </ul>
</li>
			  </div>
			  <div class="col-xs-12 col-sm-2">
            <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game" >Birds</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#birdsModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Nearest Pet Store</font></a></li>
<li><a href="#birdtoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Bird Accessories and Toys</font></a></li>
  </ul>
</li>
			  </div>
			  <div class="col-xs-12 col-sm-3">
              <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">SmallPets</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#smallpetModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Nearest Pet Store</font></a></li>
<li><a href="#smallpettoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Pets Accessories and Toys</font></a></li>
  </ul>
</li>
			  </div>
			  <div class="col-xs-12 col-sm-2">
              <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Aquarium</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#aquaModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Nearest Aquarium Shop</font></a></li>
<li><a href="#tankModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Bring Home an aquarium tank</font></a></li>
<li><a href="#tanktoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Accessories for your tank</font></a></li>
  </ul>
</li>
 
			  </div>
			  
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		
		
<div id="navModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
										   <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="puppysubmit" value="DOG">
  <input class="but"  type="submit" name="catisubmit" value="CAT">
  <input class="but"  type="submit" name="birdisubmit" value="BIRDS">
   <input class="but"  type="submit" name="smallpetisubmit" value="SMALLPETS">
  <input class="but"  type="submit" name="aquarisubmit" value="AQUARIUM">
  
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
		
		
		
		
		
		
		
		

<div id="puppyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                                <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="puppysubmit" value="PUPPIES">
  <input class="but"  type="submit" name="dogisubmit" value="FOOD">
  <input class="but"  type="submit" name="accisubmit" value="ACCESSORIES">
  <input class="but"  type="submit" name="toysubmit" value="TOYS">
  <input class="but"  type="submit" name="carisubmit" value="CARE">
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>

<div id="petstoreModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                                <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="petstoresubmit" value="ACCESSORIES">
  
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="toyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                               <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="toysubmit" value="DOG TOYS">
  
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="clinicModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                               <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="clinicsubmit" value="SERVICES">
 
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="kittenModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                                <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="kittensubmit" value="KITTEN">
   <input class="but"  type="submit" name="kittisubmit" value="FOOD">
    <input class="but"  type="submit" name="cattoyssubmit" value="SEARCH">
   <input class="but"  type="submit" name="kaccisubmit" value="SEARCH">
 
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="catModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                               <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="kittisubmit" value="FOOD">
 
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="cattoysModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                                <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="cattoyssubmit" value="TOYS">
 
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="birdsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                                <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="birdisubmit" value="CHICKS">
  <input class="but"  type="submit" name="birdfsubmit" value="FOOD">
   <input class="but"  type="submit" name="birdtoyssubmit" value="CHICKS">
  <input class="but"  type="submit" name="birdssubmit" value="SERVICES">
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="birdtoysModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                               <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="birdtoyssubmit" value="TOYS">
 
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="smallpetModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                               <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="smallpetsubmit" value="SEARCH PET">
  <input class="but"  type="submit" name="smallpetfoodsubmit" value="PET FOOD">
   <input class="but"  type="submit" name="smallpetaccsubmit" value="ACCESSORIES">
 
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="smallpettoysModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                               <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="smallpettoyssubmit" value="ACCESSORIES">
 
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="aquaModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                               <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="aquasubmit" value="BREEDS">
 
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="tankModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                               <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="tanksubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="tanktoysModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content wi">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<br>
	
       <img src="images/ttttt.png" alt="" />
	   <br>
	   
      </div>
      <div class="modal-body bo">
        <form class="form-horizontal col-xs-12" method="post">
		 		 <div class="form-group">
		  <h3><b> City:  Chennai</b></h3>
                                            
                                        </div>			
			
         <div class="form-group">
                                            <label><h3><b>Locations</b></h3></label>
                                           <select class="form-control" name="location">
                                                <?php
							$query7="SELECT DISTINCT location FROM dogs";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
				
				$address=$row['location'];
				?>
                                                <option><?php echo $address ?></option>
				<?php } ?>
                                            </select>
                                        </div>
           <div class="btn-group">
		   
                                            <label><b>You are looking for</b></label>
											
                                           <div>
										   
  <input class="but"  type="submit" name="tanktoyssubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="mask" onclick="document.location='#';"></div> <!-- the only javascript -->
	
	
	
	<section class="cl">
	<br>
	<br>
		<div class="container ">
			<div class="row mt">
			<br>
			<br>
			
				<div class="col-md-9">
			 <div class="col-xs-12 col-sm-3 adj">
		                        <a href="#">
		                            <img class="img-responsive round" src="images/2.jpg" alt="photo">
		                        </a>
		                    </div>
				
		 
		 
			 <div class=" col-xs-12 col-sm-3 adj">
		                        <a href="#">
		                            <img class="img-responsive round" src="images/2.jpg" alt="photo">
		                        </a>
		                    </div>
				
				
				
			 <div class="col-xs-12 col-sm-3 adj">
		                        <a href="#">
		                            <img class="img-responsive round" src="images/2.jpg" alt="photo">
		                        </a>
		                    </div>
				<div class="col-xs-12 col-sm-3 adj">
		                        <a href="#">
		                            <img class="img-responsive round" src="images/2.jpg" alt="photo">
		                        </a>
		                    </div>
							<div class="row pull-right">
							<div class="col-xs-12 col-sm-3">
		                        <a href="#">
		                           <input class="l"  type="submit" name="submit"  value="SHOW ALL">
		                        </a>
		                    </div>
							</div>
				<div class="row">
				<?php
if(isset($_GET['p_name'])){
	$p_id=$_GET['p_id'];
	$p_name=$_GET['p_name'];

				$query7="SELECT * FROM dogs WHERE owner='$p_name' AND id='$p_id'";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
					$id=$row['id'];
				$name=$row['owner'];
				$address=$row['location'];
				$phone=$row['phone'];
			  $email=$row['email'];

?>
				<div class="col-xs-12 col-sm-8">
				<h1 class="game"><?php echo $name ?></h1>
				<br>
				<p><h3 class="game"><?php echo $address ?></h3></p>
		<p><h3 class="game"><?php echo $phone ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $email ?></h3></p>
				</div>
				
<?php }} ?>
				</div>
				<br>
				<div class="row">
                 	<?php
if(isset($_GET['p_name'])){
	$n_id=$_GET['p_name'];
	$p_id=$_GET['p_id'];
	
?>
				<div class="col-xs-12 col-sm-2 ">
				<a href="indivstore.php?cat_id=DOGS&p_id=<?php echo $p_id ?>&p_name=<?php echo $n_id ?>"><h3 style="color:#EEA453" class="game"><center>DOGS</center></h3></a>

				
		
				</div>
				


				<div class="col-xs-12 col-sm-2 jojo">
				<a href="indivstore.php?cat_id=CATS&p_id=<?php echo $p_id ?>& &p_name=<?php echo $n_id ?>"><h3 style="color:#EEA453" class="game"><center>CATS</center></h3></a>
				
				
		
				</div>
				<div class="col-xs-12 col-sm-2">
				<a href="indivstore.php?cat_id=BIRDS&p_id=<?php echo $p_id ?> &p_name=<?php echo $n_id ?>"><h3 style="color:#EEA453" class="game"><center>BIRDS</center></h3></a>
				
				
		
				</div>
				<div class="col-xs-12 col-sm-3">
				<a href="indivstore.php?cat_id=SMALLPETS&p_id=<?php echo $p_id ?> &p_name=<?php echo $n_id ?>"><h3 style="color:#EEA453" class="game"><center>SMALLPETS</center></h3></a>
				
				
		
				</div>
				<div class="col-xs-12 col-sm-3">
				<a href="indivstore.php?cat_id=AQUARIUM&p_id=<?php echo $p_id ?> &p_name=<?php echo $n_id ?>"><h3 style="color:#EEA453"  class="game"><center>AQUARIUM</center></h3></a>
				
				
		
				</div>
				<?php	}?>
				</div>
					

<div class="row">
				<div class="col-xs-12 col-sm-3">
				<h4 style="color:#EEA453" class="game"><center><?php  
				if(isset($_GET['cat_id'])){
	$p_name=$_GET['p_name'];
	$ca_id=$_GET['cat_id'];
	
	$queryy="SELECT * FROM dogs WHERE type='$ca_id' AND owner='$p_name'";
	
				$select_all_thi=mysqli_query($connection,$queryy);
				
				$row=mysqli_fetch_assoc($select_all_thi);
				if($row['lookfor']=="puppies"||$row['lookfor']=="kitten"||$row['lookfor']=="chicks"||$row['lookfor']=="BREEDS"||$row['lookfor']=="PETVARITIES")
				{
					echo $row['lookfor'];
				}else{
					echo $row['type'];
				}}
				?>
				
				</center></h4>
				<hr class="he">
				<ul>
				<?php
				if(isset($_GET['cat_id'])){
	$p_name=$_GET['p_name'];
	$cat_id=$_GET['cat_id'];

							$query7="SELECT * FROM dogs WHERE type='$cat_id' AND owner='$p_name' AND (lookfor='puppies' OR lookfor='kitten' OR lookfor='chicks' OR lookfor='BREEDS' OR lookfor='PETVARITIES')  LIMIT 4";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
					$id=$row['id'];
				$breed=$row['breed'];
				$status=$row['status'];
				?>
				
											<li style="list-style-type:disc"><a href="#"><?php echo $breed ?> </a> </li>
			
				<?php }} ?>
										</ul>
		
				</div>
				
				<div class="col-xs-12 col-sm-3">
				<h4 style="color:#EEA453" class="game"><center>CATEGORY</center></h4>
				<hr class="he">
				<ul>
				<?php
				if(isset($_GET['cat_id'])){
	$p_name=$_GET['p_name'];
	$cat_id=$_GET['cat_id'];
							$query7="SELECT * FROM dogs WHERE type='$cat_id' AND owner='$p_name' AND (lookfor='kittens' OR lookfor='puppies' OR lookfor='chicks' OR lookfor='BREEDS' OR lookfor='PETVARITIES')  LIMIT 4,4";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
					$id=$row['id'];
				$breed=$row['breed'];
				$status=$row['status'];
				?>
				
											<li style="list-style-type:disc"><a href="#"><?php echo $breed ?> </a> </li>
			
				<?php }} ?>
										</ul>
		
				</div>
				<div class="col-xs-12 col-sm-3">
				<h4 style="color:#EEA453" class="game"><center>CATEGORY</center></h4>
				<hr class="he">
				<ul>
				<?php
				if(isset($_GET['cat_id'])){
	$p_name=$_GET['p_name'];
	$cat_id=$_GET['cat_id'];

							$query7="SELECT * FROM dogs WHERE type='$cat_id' AND owner='$p_name' AND (lookfor='kitten' OR lookfor='puppies' OR lookfor='chicks' OR lookfor='BREEDS' OR lookfor='PETVARITIES') LIMIT 8,4";
				$select_all_things=mysqli_query($connection,$query7);
				
				while($row=mysqli_fetch_assoc($select_all_things)){
					$id=$row['id'];
				$breed=$row['breed'];
				$status=$row['status'];
				?>
				
											<li style="list-style-type:disc"><a href="#"><?php echo $breed ?> </a> </li>
			
				<?php }} ?>
										</ul>
		
				</div>
				</div>
				
				







			 
				<div class="row">
				<div class="col-xs-12 col-sm-8">
				<h1 class="game">Products Brands</h1>
				
		
				</div>
				</div>
				</div>
				
			
		        <!-- Blog Column -->
		              <div class="col-md-3">

                <!-- Blog Search Well -->
                
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4 class="col-lg-12 game">List the Stores</h4>
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
                                <li><a href="#"><font class="game"><?php echo $name ?></font></a>
                                </li>
				<?php } ?>
                            </ul>
							<br>
							<center>
							<button type="button" class="btn btn-warning"><font class="game">List Your Store</font></button></center>
						
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