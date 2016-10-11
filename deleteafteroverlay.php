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
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['accesssubmit'])){
	
	$type="DOGS";
	$look="accessories";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$look;
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
	
<?php
	if(isset($_POST['petstoresubmit'])){
	
	$type="DOGS";
	$lookfor="DOGS";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
<?php
	if(isset($_POST['clinicsubmit'])){
	
	$type="DOGS";
	$lookfor="services";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:STORELOCATOR.php"); 
	  
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
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['catsubmit'])){
	
	$type="CATS";
	$lookfor="CATS";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$lookfor;
	   header("Location:STORELOCATOR.php"); 
	  
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
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['birdssubmit'])){
	
	$type="BIRDS";
	$look="BIRDS";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$look;
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['birdtoyssubmit'])){
	
	$type="BIRDS";
	$looki="toys";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['smallpetsubmit'])){
	
	$type="SMALLPETS";
	$looki="SMALLPETS";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['smallpettoyssubmit'])){
	
	$type="SMALLPETS";
	$looki="toys";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
	<?php
	if(isset($_POST['aquasubmit'])){
	
	$type="AQUARIUM";
	$looki="AQUARIUM";
	$location=$_POST['location'];
	
	 $_SESSION['type']=$type;
	   $_SESSION['location']=$location;
	    $_SESSION['lookfor']=$looki;
	   header("Location:STORELOCATOR.php"); 
	  
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
	   header("Location:STORELOCATOR.php"); 
	  
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
	   header("Location:STORELOCATOR.php"); 
	  
}
	?>
<html>
<head>
<title>HUFFLES</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


        <!-- Custom Fonts -->
        

        <!-- Custom CSS -->
		<link rel="stylesheet" href="cssd1/patros.css" >

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
border-radius: 10px;
}
.control{
width:250px;
}
.ro{
background-color: #FF8C00;

}
 .cnt{
	  background-color:	#282C35;
	  }
.height{
height:300px;
}
.side{margin-top:20px;margin-bottom:20px;border:0;border-top:6px solid #FFA500}
.game{
        font-family: 'Montserrat';
      
      }
	  .colo{
	  background-color:#808080	;
	  }
	  lico{
	 font:white;
	  }
	  .cc{
	  color:#C71585;
	  }
	  .roll{
	  float: left;
   position: absolute;
   left: 0px;
   top: 30px;
   z-index: 1000;
   background-color: #FF8C00;
   padding: 5px;
   color: #FFFFFF;
   font-weight: bold;
	  height:24px;
	  width:80px;
	   

  
	  }
	  .l{
	  height:30px;
	  }
	 .roll:hover {
	 transition: transform 2s;
  transform: translate(10px,0px);
}
	.nd{
		background-color:#f8f8f8;
		border-bottom:#f8f8f8;
		border-right:#f8f8f8;
	}
	 figure {
  border-radius:10px;
    position: relative;
}
figure img {
	border-radius:10px;
    display: block;
   
   
}
figcaption {
    background: rgba(0, 0, 0, 0.5);
    color: #FFF;
    padding: 10px;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
}
*{margin:0;padding:0;}
#overlay{ /* we set all of the properties for are overlay */
    height:70%;
    width:40%;
    margin:0 auto;
    background:white;
    color:black;
    padding:10px;
    position:fixed;
    top:60px;
    left:27%;
    z-index:1000;
    display:none;
    /* CSS 3 */
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    -o-border-radius:10px;
    border-radius:10px;
}

#mask{ /* create are mask */
    position:fixed;
    top:0;
    left:0;
    background:rgba(0,0,0,0.6);
    z-index:500;
    width:100%;
    height:100%;
    display:none;
}
/* use :target to look for a link to the overlay then we find are mask */
#overlay:target, #overlay:target + #mask{
    display:block;
    opacity:1;
}


.nn{
background-color:orange;

}
.oc{
	background-color:#D3D3D3;
	border-radius:10px;
	width:500px;
	height:50px;
}
.rd{
	background-color:#DCDCDC;
	border-radius:4px;
}
.d{
	position:relative;
	top:3px;
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
	width:120px;
	background-color:#FF8C00;
	border:#FF8C00;
	height:30px;
	color:white;
}
</style>
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <nav class="navbar navbar-default navbar-collapse nd">
      <div class="container ">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div id="navbar" class="navbar-collapse nd ">
          
          <ul class="nav navbar-nav navbar-right ">
            
            <li><a href="#" style="color:black"><font class="game"><b>Store Locator</b></font></a></li>
			<li><a href="blog.php" style="color:black"><font class="game"><b>Blog</b></font></a></li>
            <li><a href="" style="color:black"><font class="game"><b>Locations</b></font><span class="sr-only">(current)</span></a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:black"><font class="game"><b>About</b></font><span class="caret"></span></a>
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
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        
		
		
        <div class="header_bottom container-fluid">
          <div class="header_bottom_left"><a href="#"><img src="images/tttt.png" alt=""></a></div>
        <div class="navbar-collapse collapse pull-right">
		<ul class="top_nav">
             <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Dogs</font></h3></a>
<ul class="dropdown-content ri">
    <li><a href="#puppyModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Get Home a Puppy</font></a></li>
	<li><a href="#accessModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Buy Dog Accessories&Toys</font></a></li>
              <li><a href="#petstoreModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Find Nearest Pet Store For your dog</font></a></li>
			 <li><a href="#clinicModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Find Nearest Clinic for your dog</font></a></li>
            
			                
  </ul>
</li>

 <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Cats</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#kittenModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Get Home a Kitten</font></a></li>
<li><a href="#catModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Pet Store</font></a></li>
<li><a href="#cattoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Cat Accessories and Toys</font></a></li>
  </ul>
</li>
<li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Birds</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#birdsModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Pet Store</font></a></li>
<li><a href="#birdtoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Bird Accessories and Toys</font></a></li>
  </ul>
</li>
 <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">SmallPets</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#smallpetModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Pet Store</font></a></li>
<li><a href="#smallpettoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Pets Accessories and Toys</font></a></li>
  </ul>
</li>
<li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Aquarium</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#aquaModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Aquarium Shop</font></a></li>
<li><a href="#tankModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Bring Home an aquarium tank</font></a></li>
<li><a href="#tanktoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Accessories for your tank</font></a></li>
  </ul>
</li>
 
              
            </ul>
		
		
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
										   
  <input class="but"  type="submit" name="puppysubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="petstoresubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
</div>

                                        </div>
		 
       
		</form>
      </div>
      
    </div>
  </div>
</div>
<div id="accessModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
										   
  <input class="but"  type="submit" name="accesssubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="clinicsubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="kittensubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="catsubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="cattoyssubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="birdssubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="birdtoyssubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="smallpetsubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="smallpettoyssubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
										   
  <input class="but"  type="submit" name="aquasubmit" value="SEARCH">
  <button type="button" class="but">AQUARIUM SHOP</button>
  <button type="button" class="but">PET CLINIC</button>
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
<div id="mask" onclick="document.location='#';"></div> <!-- the only javascript -->
		<div class="navbar-collapse collapse pull-left move">
		<a href=""  class="game"><h1 class="game"><strong>Pet Diaries</strong></h1></a>
		</div>
		<br>
      </div>
    </div>
  </header>
 
  <section id="mainContent">
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
		<h2 class="game"><strong>Hamsters - The new compact pet for the Ind...</strong></h2>
		<h3 class="game">27the December  '16 Surender Dhanakaran</h3>
		</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm6 round">
          <div class="content_top_right">
            <ul class="featured_nav round">
              <li><figure><img src="images/2.jpg" alt="" > <a href=""><figcaption><center>Keep a pet to stay happy</center></figcaption></a>
</figure>
              </li>
			  
              <li><figure><img src="images/2.jpg" alt="" >
          <a href=""> <figcaption><center>Cats are best friend</center></figcaption></a>
</figure>
              </li>
               <li><figure><img src="images/2.jpg" alt="" > <a href=""><figcaption><center>Keep a pet to stay happy</center></figcaption></a>
</figure>
              </li>
              <li><figure><img src="images/2.jpg" alt="" > <a href=""><figcaption><center>Keep a pet to stay happy</center></figcaption></a>
</figure>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
   
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-8">
		            <h1 class="page-header sidebar-title control game">
		                Most Recent
		            </h1>
				<?php 
				
				
				$per_page=3;
				
				if(isset($_GET['page'])){
					
					$page_no=$_GET['page'];
					
				}else{
					
					$page_no="";
				}
				
				if($page_no==""||$page_no==1){
					$page_nofirst=0;
				}else{
					$page_nofirst=($page_no*$per_page )-$per_page; 
				}
				
				
				
				$count_post="SELECT * FROM posts "; 
				$select_all_post=mysqli_query($connection,$count_post);
				$count=mysqli_num_rows($select_all_post);
				
				$count =ceil($count/$per_page);
				
				
				
				$query="SELECT * FROM posts  ORDER BY id DESC LIMIT $page_nofirst,$per_page";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$id=$row['id'];
					
					$title=$row['title'];
				$author=$row['author'];
				$content=substr($row['content'],0,250);
				$image=$row['image'];
				$date=$row['date'];
				
				?>
		            <!-- First Blog Post -->
		            <div class="row blogu">
		                <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
							
		                        <a href="singlewalablog.php?p_id=<?php  echo $id;  ?>">
								<p class="roll">name</p>
		                            <img class="round" src="images/<?php echo $image ?>" alt="photo" >
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
					
								<p class="game"> BY <?php echo $author?> | <?php echo $date ?>
		                    </p>				
		                    <h4 class="game">
							
		                        <a href="singlewalablog.php?p_id=<?php  echo $id;  ?>" class="game"><b><?php echo $title ?></b></a>
		                    </h4>
		                    
		                    <p class="game"><?php echo $content ?></p>
		                     <a href="singlewalablog.php?p_id=<?php  echo $id;  ?>" class="cc"><font class="game">READ FULL STORY  </font> </a> 
						</div>
		            </div>
		            <hr>
				<?php } ?>
		            <!-- Second Blog Post -->
		            
		            <!-- Third Blog Post -->
		            
		          
		            <div class="text-center"> 
		                <ul class="pagination"> 
		                   
							<?php
		 for($i=1;$i<=$count;$i++){
			 
			 echo "<li class='active'><a href='blog.php?page={$i}'>$i</a></li>";
			 
		 }
		  
		  ?>
		                </ul> 
		            </div>
		        </div>
		            <!-- Blog Sidebar Column -->
		            <aside class="col-md-4 sidebar-padding">
		               
		                <!-- Blog Categories -->
		                
		                <!-- Recent Posts -->
		                <div class="blog-sidebar">
		                    <h4 class="sidebar-title game"><i class="fa fa-align-left"></i> Recent Posts</h4>
		                    <hr class="side">

							<?php
							
							
							$query="SELECT * FROM posts  ORDER BY id DESC LIMIT 2";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$id=$row['id'];
					
					$title=$row['title'];
				$author=$row['author'];
				$content=substr($row['content'],0,250);
				$image=$row['image'];
				$date=$row['date'];
				
				?>
		                    <div class="media">
		                        <a class="pull-left" href="singlewalablog.php?p_id=<?php  echo $id;  ?>">
		                            <img class="img-responsive media-object" src="images/<?php echo $image ?>" alt="Media Object" >
		                        </a>
		                        <div class="media-body">
		                            <h4 class="media-heading game"><a href="singlewalablog.php?p_id=<?php  echo $id;  ?>" class="game"><b><?php echo $title ?></b></a></h4>
		                          <?php echo $date ?>
		                        </div>
		                    </div>
				<?php } ?>
		                   
		                   
							<br>
							<br>
		                     <div class="well">
							 <div class="row">
                    <p class="game"><b>&nbspGet Pet Care related news,stories,protips &nbspand updates every week</b></p>
					<br>
					</div>
                    <div class="input-group">
                        <input type="text" class="form-control game" placeholder="Your Email Id">
                        <span class="input-group-btn">
                            <button class="btn btn-default ro" type="button">
                                <span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
				
			
                    <img class="img-responsive round" src="images/2.jpg" alt="Media Object" >
                

				
				
		                </div>

		               

					</aside>
				</div>
				<br>
				<br>
  </section>
  
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
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>