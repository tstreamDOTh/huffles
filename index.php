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
<html>
<head>
<title>HUFFLES</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="cssd1/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="foundation.min.css" >

        <!-- Custom Fonts -->
        <link href="font-awesomed/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <!-- Custom CSS -->
		<link rel="stylesheet" href="cssd1/patros.css" >
<link href="dashboard.css" rel="stylesheet">
 <script src="assets/js/ie-emulation-modes-warning.js"></script>
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style>
.move{
position:relative;
left:20px;
top:-10px;
}
.round{
border-radius: 25px;
}
.control{
width:250px;
}
.ro{
background-color: #FF8C00;
}
.height{
height:300px;
}
.side{margin-top:20px;margin-bottom:20px;border:0;border-top:6px solid #FFA500}
.game{
        font-family: 'Montserrat';
       
      }
	  .colo{
	  background-color:#DCDCDC;
	  }
	  lico{
	 font:white;
	  }
	  
.color{
	background-color:#EEA453;

	}
  
	.hei{
	height:400px;
	}
	.pad{
	padding-top:100px;
	
	}
	.c{
	font-size:40px;
	position:relative;
	left:50px;
	top:50px;
	}
	.d{
	font-size:24px;
	position:relative;
	left:50px;
	top:30px;

	}
	.pos{
	position:relative;
	left:50px;
	top:30px;
	
	}	 
.imgpos{
	position:relative;
	left:180px;
      top:65px;
	  z-index:1;
	}	
	.e{
	 text-overflow: ellipsis;
	}
	.co{
	background-color:white;
	border-radius:3px;
	}
	.siz{
	width:250px;
	height:40px;
	}
	.posi{
	position:relative;
	right:100px;
	}
	 .cnt{
	  background-color:#282C35;
	  }
	  .rs{
		  padding-bottom:30px;
		  padding-left:20px;
	  }
	  .p{
		  position:relative;
		  left:60px;
	  }
	  .pe{
		  position:relative;
		  top:8px;
	  }
	  .s{
		  padding-left:80px;
		 
	  }
	   figure {
  border-radius:10px;
    position: relative;
}
	  figure img {
	border-radius:10px;
    display: block;
    width: 100%;
    height: auto;
}
figcaption {
    background: rgba(0, 0, 0, 0.5);
    color: #FFF;
    padding: 10px;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
	border-radius:25px;
}
.mtn{
	position:relative;
	top:10px;
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
	color:white;
}
.ma:hover{
   background-color:white;
 
}

</style>
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
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
        <div id="navbar" class="navbar-collapse nd">
		
		
            
         
          <ul class="nav navbar-nav navbar-right">
		  
		  <li class="ma"><a href="#navModal" role="button" data-toggle="modal"><font class="game" style="color:black"><b>Store Locator &nbsp&nbsp&nbsp </b> </font> </a></li>
		  <li class="ma"><a href="blogs.php"><font class="game" style="color:black"><b>Blog &nbsp&nbsp&nbsp </b> </font> </a></li>
		  <li class="ma"><a href="#locat"><font class="game" style="color:black"><b>Locations &nbsp&nbsp&nbsp </b></font></a></li>
            <li class="dropdown ma">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font class="game" style="color:black"><b>About &nbsp </b></font><span class="caret"></span></a>
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
<header id="header">
	  <div class="row">
      <div class="col-lg-12 col-md-12">
        
		
		
        <div class="header_bottom container-fluid">
          <div class="header_bottom_left"><a href="#"><img src="images/tttt.png" alt=""></a></div>
        <div class="navbar-collapse collapse pull-right">
		<ul class="top_nav">
             <li class="dropdown"><a href="" ><h4><font color="#FF8C00" class="game">Dogs</font></h4></a>
<ul class="dropdown-content ri">
    <li><a href="#puppyModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Get Home a Puppy</font></a></li>
	<li><a href="#toyModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Buy Dog Toys</font></a></li>
              <li><a href="#petstoreModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Find Accessories For your dog</font></a></li>
			 <li><a href="#clinicModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Find Nearest Clinic for your dog</font></a></li>
            
			                
  </ul>
</li>

 <li class="dropdown"><a href="" ><h4><font color="#FF8C00" class="game">Cats</font></h4></a>
<ul class="dropdown-content ri">
<li><a href="#kittenModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Get Home a Kitten</font></a></li>
<li><a href="#catModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Get Cat food</font></a></li>
<li><a href="#cattoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Cat Accessories and Toys</font></a></li>
  </ul>
</li>
<li class="dropdown"><a href="" ><h4><font color="#FF8C00" class="game">Birds</font></h4></a>
<ul class="dropdown-content ri">
<li><a href="#birdsModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Pet Store</font></a></li>
<li><a href="#birdtoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Bird Accessories and Toys</font></a></li>
  </ul>
</li>
 <li class="dropdown"><a href="" ><h4><font color="#FF8C00" class="game">SmallPets</font></h4></a>
<ul class="dropdown-content ri">
<li><a href="#smallpetModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Pet Store</font></a></li>
<li><a href="#smallpettoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Pets Accessories and Toys</font></a></li>
  </ul>
</li>
<li class="dropdown"><a href="" ><h4><font color="#FF8C00" class="game">Aquarium</font></h4></a>
<ul class="dropdown-content ri">
<li><a href="#aquaModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Aquarium Shop</font></a></li>
<li><a href="#tankModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Bring Home an aquarium tank</font></a></li>
<li><a href="#tanktoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Accessories for your tank</font></a></li>
  </ul>
</li>
 
              
            </ul>
		
		
		</div>   
		
		</div>
		
		
		
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
		
		<br>
      </div>
    </div>	
	
		<br>
		<br>
  </header>
  <div class="container">
  <div class="row">
  
  <div class="col-md-3">
  <div class=" col-xs-6 col-lg-12 pull-right">
  <img src="images/dog1.png" class="img-responsive imgpos" alt="">
  </div>
  </div>
  <div class="col-md-9">
  <div class=" col-xs-12 col-lg-9 pull-right">
  <p><h1 class="game">Now In Chennai</h1> <h3 style="color:#EEA453" class="game">Easiest way to find you a pet</h3></p>
  
  <a href="#navModal" role="button" data-toggle="modal"><button type="button" class="btn btn-lg btn-primary color game">Find the nearest store</button></a>
  
  </div>
  </div>
  </div>
  </div>
 
  <section id="mainContent">
  
   <div class="color row-fluid e">
          <div class="container">
	  
       <p style="color:white" class="c game">The All Pet Place</p>
	   <p style="color:white" class="d game " >Find the best pet stores,aquariums,vet clinic & spas</p>
          </div>
		  

          <div class="row placeholders ">
            <div class="col-xs-12 col-sm-3 placeholder pad">
              <img src="images/dog.png" width="150" height="150" class="img-responsive " alt="Generic placeholder thumbnail">
              <h4 class="game">EVENT1</h4>
              
            </div>
            <div class="col-xs-12 col-sm-3 placeholder pad">
              <img src="images/dog.png" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4 class="game">EVENT2</h4>
              
            </div>
            <div class="col-xs-12 col-sm-3 placeholder pad">
              <img src="images/dog.png" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4 class="game">EVENT3</h4>
              
            </div>
            <div class="col-xs-12 col-sm-3 placeholder pad">
              <img src="images/dog.png" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4 class="game">EVENT4</h4>
              
            </div>
          </div>

         
        
        </div>
		<br>
		<br>
    <div class="content_top">
	
      <div class="row">
	  
        <div class="col-lg-6 col-md-6 col-sm6 ">
		
          <div class="latest_slider round">
            <div class="slick_slider ">
              <div class="single_iteam"><img src="images/3.jpg" alt="" class="round height">
                
              </div>
            
            </div>
          </div>
		  <div class="navbar-collapse collapse pull-left move">
		  <br>
		<h3 class="game"><strong>Hamsters - The new compact pet for the Ind...</strong></h3>
		<h4 class="game">27the December  '16 Surender Dhanakaran</h4>
		</div>
        </div>
         <div class="col-lg-6 col-md-6 col-sm6">
          <div>
            <ul class="featured_nav">
              <li><img src="images/2.jpg" alt="" class="round"> <a href=""><figcaption><center>Keep a pet to stay happy</center></figcaption></a>

              </li>
			  
              <li><img src="images/2.jpg" alt="" class="round">
          <a href=""> <figcaption><center>Cats are best friend</center></figcaption></a>

              </li>
               <li><img src="images/2.jpg" alt="" class="round"> <a href=""><figcaption><center>Keep a pet to stay happy</center></figcaption></a>

              </li>
              <li><img src="images/2.jpg" alt="" class="round"> <a href=""><figcaption><center>Keep a pet to stay happy</center></figcaption></a>

              </li>
			  
            </ul>
			
          </div>
		  
        </div>
		
      </div>
	  <br>
	  <br>
<br>
<br>
    </div>
    
   
  </section>


  
    <div class="container-fluid colo">
     <center>
	   <br>
	   <br>
          <h4 class="game mtn" ><b>POPULAR LOCATIONS IN CHENNAI</b></h4>
          <h5 class="game mtn" id="locat"><b>Find the best pet stores,aquariums,vet clinics and spas</b></h5>
		 
        
		</center>
       
		
		<br>
        <div class="large-3 columns">
		
          <ul class="menu vertical" >
		  
		  <div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
            <div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
          </ul>
        </div>
		 <div class="large-3 columns">
          <ul class="menu vertical">
           <div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
          </ul>
        </div>
		 <div class="large-3 columns">
          <ul class="menu vertical">
            <div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
          </ul>
        </div>
        <div class="large-3 columns">
          <ul class="menu vertical">
            <div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<div class="co siz">
            <center><li><a href="#"><font color="black" class="game pe">Awadi <i class="fa fa-angle-right icon p"></i></font></a></li></center>
			</div>
			<br>
			<br>
			<br>
			<br>
          </ul>
        </div>
		
		
    </div>
<br>
		<br>
		<br>
<div class="callout cnt">
	<br>
	
    <div class="container">
	
            <div class="col-xs-12 col-md-3">
                <ul class="list-unstyled">
                    
                   <img class="img-responsive" src="images/1.png" alt="Media Object" >
                </ul>
            </div>
            <div class="col-xs-12 col-md-3">
                <ul class="list-unstyled">
                    
					
                    <li><a href="#"><h5 style="color:white" class="game">Chennai</h5></a></li>
				
                    <li><a href="#"><h5 style="color:white" class="game">Ahmedabad</h5></a></li>
				
                    <li><a href="#"><h5 style="color:white" class="game">Gurgaon</h5></a></li>
                    <li><a href="#"><h5 style="color:white" class="game">Hyderabad</h5></a></li>
                </ul>
            </div>
           <div class="col-xs-12 col-md-3">
                <ul class="list-unstyled">
                    
					
                    <li><a href="#"><h5 style="color:white" class="game">Chennai</h5></a></li>
				
                    <li><a href="#"><h5 style="color:white" class="game">Ahmedabad</h5></a></li>
				
                    <li><a href="#"><h5 style="color:white" class="game">Gurgaon</h5></a></li>
                    <li><a href="#"><h5 style="color:white" class="game">Hyderabad</h5></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-3">
                <ul class="list-unstyled">
                    
					
                    <li><a href="#"><h5 style="color:white" class="game">Chennai</h5></a></li>
				
                    <li><a href="#"><h5 style="color:white" class="game">Ahmedabad</h5></a></li>
				
                    <li><a href="#"><h5 style="color:white" class="game">Gurgaon</h5></a></li>
                    <li><a href="#"><h5 style="color:white" class="game">Hyderabad</h5></a></li>
                </ul>
            </div>
			
    </div>

    
   <div class="row">
            <div class="col-xs-12">
		
             <hr class="mt">
			 
            <center>
                <p class="text-muted"><h5 style="color:white" class="game">Join Us On</h5></p>
           </center>
        </div>
		
</div>

  </div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>