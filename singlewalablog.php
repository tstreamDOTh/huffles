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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
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
	   header("Location:storelocatorr.php"); 
	  
}
	?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HUFFLES</title>
    <link href="cssn/bootstrap.min.css" rel="stylesheet">
    <link href="cssn/font-awesome.min.css" rel="stylesheet">
    <link href="cssn/prettyPhoto.css" rel="stylesheet">
    <link href="cssn/price-range.css" rel="stylesheet">
    <link href="cssn/animate.css" rel="stylesheet">
	<link href="cssn/main.css" rel="stylesheet">
	<link href="cssn/responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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
       
      }
	  .h{
		 width:700px;
		  height:400px;
	  }
	  .col{
		  background-color:#DCDCDC;
	  }
	   .ro{
background-color: #FF8C00;

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

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
	z-index:20;
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
	color:white;
}
.wi{
	width:500px;
	height:500px;
}

.ma:hover{
   background-color:white;
   border-bottom:2px solid #FF8C00;
}


	</style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
  <nav class="navbar navbar-default navbar-collapse">
      <div class="container">
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
		  
		  <li class="ma"><a href="#navModal" role="button" data-toggle="modal"><font class="game" style="color:black" size="3px"><b>Store Locator &nbsp&nbsp&nbsp </b> </font> </a></li>
		  <li class="ma"><a href="blogs.php"><font class="game" style="color:black" size="3px"><b>Blog &nbsp&nbsp&nbsp </b> </font> </a></li>
		  <li class="ma"><a href="#locat"><font class="game" style="color:black" size="3px"><b>Locations &nbsp&nbsp&nbsp </b></font></a></li>
            <li class="dropdown" class="ma">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font class="game" size="3px" style="color:black"><b>About &nbsp </b></font><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#puppyModal" role="button" data-toggle="modal"></a></li>
                <li><a href="#puppyModal" role="button" data-toggle="modal">DOG</a></li>
                <li><a href="#catModal" role="button" data-toggle="modal">CAT</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">AQUARIUM</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/ttt.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								 <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Dogs</font></h3></a>
<ul class="dropdown-content ri">
    <li><a href="#puppyModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color: #f9f9f9;"  size="3px">Get Home a Puppy</font></a></li>
	<li><a href="#toyModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color: #f9f9f9;"  size="3px">Buy Dog Toys</font></a></li>
              <li><a href="#petstoreModal" role="button" data-toggle="modal"><font color="#FF8C00" style="background-color: #f9f9f9;"  class="game" size="3px">Find Accessories For your dog</font></a></li>
			 <li><a href="#clinicModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color: #f9f9f9;"   size="3px">Find Nearest Clinic for your dog</font></a></li>
            
			                
  </ul>
</li>
             <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Cats</font></h3></a>
<ul class="dropdown-content ri">
<li ><a href="#kittenModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9;"  size="3px">Get Home a Kitten</font></a></li>
<li><a href="#catModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9;"  size="3px">Get Cat food</font></a></li>
<li><a href="#cattoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color: #f9f9f9;"  size="3px">Cat Accessories and Toys</font></a></li>
  </ul>
</li>
<li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Birds</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#birdsModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color: #f9f9f9;"  size="3px">Nearest Pet Store</font></a></li>
<li><a href="#birdtoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9;"  size="3px">Bird Accessories and Toys</font></a></li>
  </ul>
</li>
 <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">SmallPets</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#smallpetModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color: #f9f9f9;"  size="3px">Nearest Pet Store</font></a></li>
<li><a href="#smallpettoysModal" role="button" data-toggle="modal"><font color="#FF8C00" style="background-color: #f9f9f9;"  class="game" size="3px">Pets Accessories and Toys</font></a></li>
  </ul>
</li>
<li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Aquarium</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#aquaModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9;"  size="3px">Nearest Aquarium Shop</font></a></li>
<li><a href="#tankModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color: #f9f9f9;"  size="3px">Bring Home an aquarium tank</font></a></li>
<li><a href="#tanktoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color: #f9f9f9;"   size="3px">Accessories for your tank</font></a></li>
  </ul>
</li>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
                                                <option>ANNANAGAR</option>
                                                <option>KANCHIPURAM</option>
                                             <option>ANTIKAPURAM</option>
                                                <option>MAIN STATION</option>
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
<div id="mask" onclick="document.location='#';"></div> 
<br>
<br>
	</header><!--/header-->
	
	
	    <!-- Page Content -->
    <div class="container">

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
			    $contentop=substr($row['content'],0,400);
						$contentbelow=substr($row['content'],250);





?>
                   <strong> BY &nbsp </strong> <a href="#"><strong><?php echo $author ?>&nbsp </strong></a>| <strong><?php echo $date ?></strong>
                </p>

               

                <!-- Date/Time -->
                <h2 class="game"><b> <?php echo $title ?></b></h2>
<br>
               
                  <p class="game"><?php echo $contentop ?></p>
                <br>
                <!-- Preview Image -->
                                <img class="img-responsive h" src="images/<?php echo $image ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="game"><?php echo $contentbelow ?></p>
                
                <hr>
<?php }} ?>
 <!-- AddToAny BEGIN -->
 
<div class="a2a_kit a2a_kit_size_32 a2a_default_style ">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
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
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
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
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
               

                <!-- Blog Categories Well -->
                <div class="well col">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Dogs</a>
                                </li>
                                <li><a href="#">Cats</a>
                                </li>
                                <li><a href="#">Fish</a>
                                </li>
                                <li><a href="#">Small Pets</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Locations</a>
                                </li>
                                <li><a href="#">Small Pets</a>
                                </li>
                                <li><a href="#">Aqaurium</a>
                                </li>
                                <li><a href="#">Fish Aqaurium</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
<br>
<br>
				 <div class="well col">
                    <h5><strong>Blog Search</strong></h5>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default ro" type="button" bg-color="#4CAF50">
                                <span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
				<br>
				<br>
                <!-- Side Widget Well -->
                <div class="well col">
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
	
	

  
    <script src="jsn/jquery.js"></script>
	<script src="jsn/bootstrap.min.js"></script>
	<script src="jsn/jquery.scrollUp.min.js"></script>
	<script src="jsn/price-range.js"></script>
    <script src="jsn/jquery.prettyPhoto.js"></script>
    <script src="jsn/main.js"></script>
</body>
</html>