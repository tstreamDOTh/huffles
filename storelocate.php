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
	if(isset($_POST['accesssubmit'])){
	
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
	$lookfor="DOGS";
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
	$lookfor="services";
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
	if(isset($_POST['catsubmit'])){
	
	$type="CATS";
	$lookfor="CATS";
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
	if(isset($_POST['birdssubmit'])){
	
	$type="BIRDS";
	$look="BIRDS";
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
	$looki="toys";
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
	$looki="SMALLPETS";
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
	$looki="toys";
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
	$looki="AQUARIUM";
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
    <link href="bootstra.min.css" rel="stylesheet">
    <link href="csss/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
	<link href="csss/main.css" rel="stylesheet">

	 
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
width:100px;
}
.rou{
border-radius: 10px;
}
.game{
        font-family: 'Montserrat';
      }
	  .cl{
	  background-color:#F3F3F3;
	  }
	  .mt{
	  background-color:white;
	  z-index:3;
	  }
	   .cnt{
	  background-color:	#282C35;
	  }
	 .ff{
		 
		 background-color:#f8f8f8;
		 border-bottom:#f8f8f8;
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
	width:140px;
	background-color:#FF8C00;
	border:#FF8C00;
	height:30px;
	color:white;
}
  .box{
        display: none;
      }
	  
	 .coli{
		 color:blue;
		 text-decoration: underline;
	 } 
	 
	 .ma:hover{
   background-color:white;
  border-bottom: thick solid #FF8C00;
}

	</style>
	<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="puppies"){
            $(".puppies").toggle();
			$(".main").hide();
        }
        if($(this).attr("value")=="food"){
            $(".FOOD").toggle();
			$(".main").hide();
        }
		 if($(this).attr("value")=="accessories"){
            $(".ACC").toggle();
			$(".main").hide();
        }
		if($(this).attr("value")=="care"){
            $(".care").toggle();
			$(".main").hide();
        }
		if($(this).attr("value")=="services"){
            $(".services").toggle();
			$(".main").hide();
        }
		 if($(this).attr("value")=="toys"){
            $(".TOY").toggle();
			$(".main").hide();
        }
        if($(this).attr("value")=="accessories"){
            $(".accd").toggle();
			$(".main").hide();
        }
		 if($(this).attr("value")=="kitten"){
            $(".kitten").toggle();
			$(".main").hide();
        }
		
		 if($(this).attr("value")=="chicks"){
            $(".chicks").toggle();
			$(".main").hide();
        }
		 if($(this).attr("value")=="PETVARITIES"){
            $(".PET").toggle();
			$(".main").hide();
        }
		 if($(this).attr("value")=="BREEDS"){
            $(".BREEDS").toggle();
			$(".main").hide();
        }
    });
});
</script>
</head><!--/head-->

<body>
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
      </div>
    </nav>
	<header id="header"><!--header-->
		
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-5">
					<div class="logo col-xs-12 col-sm-12 ss">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/tttt.png" alt="" /></a>
						</div>
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
            <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Birds</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#birdsModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Pet Store</font></a></li>
<li><a href="#birdtoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Bird Accessories and Toys</font></a></li>
  </ul>
</li>
			  </div>
			  <div class="col-xs-12 col-sm-3">
              <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">SmallPets</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#smallpetModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Pet Store</font></a></li>
<li><a href="#smallpettoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Pets Accessories and Toys</font></a></li>
  </ul>
</li>
			  </div>
			  <div class="col-xs-12 col-sm-2">
              <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Aquarium</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#aquaModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Nearest Aquarium Shop</font></a></li>
<li><a href="#tankModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Bring Home an aquarium tank</font></a></li>
<li><a href="#tanktoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game">Accessories for your tank</font></a></li>
  </ul>
</li>
 
			  </div>
			  
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

	</header><!--/header-->
	
	
				
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
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2 class="game">Filters</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title pp">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										<font class="game"><?php 
									
										if($_SESSION['lookfor']=="puppies"||$_SESSION['lookfor']=="kitten"){
										echo $_SESSION['lookfor'];
										}
										else{
										echo $_SESSION['type']; 
										}?></font>
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
												$query="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' group by lookfor ORDER BY id";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$id=$row['id'];
					$t=$row['short'];
				    $l=$row['lookfor'];
					$b=$row['breed'];	
				
											?>
											<li><a href="#"><?php echo $l;?><input type="checkbox" name="<?php echo $l ?>" value="<?php echo $l ?>" class="pull-right" ></li>
											
				<?php } ?>
										</ul>
									</div>
								</div>
							</div>
							<hr class="side">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title pp">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<font class="game">NEAREST PET STORE</font>
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul >
											<?php
												$query="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' GROUP BY owner";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$id=$row['id'];
					$type=$row['type'];
					
					$owner=$row['owner'];	
											?>
											<li><a href="indivstore.php?cat_id=<?php  echo $type;  ?>&p_id=<?php  echo $id;  ?>&p_name=<?php  echo $owner;  ?>" class="coli"><font style="color:blue;text-decoration: underline;"><?php echo $owner ?></font></li>
											
				<?php } ?>
											
										</ul>
									</div>
								</div>
							</div>
					
							<hr class="side">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title pp">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<font class="game">TRAINING AND OTHER SERVICES</font>
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
												$query="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='care' OR lookfor='services' GROUP BY owner";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$id=$row['id'];
					$type=$row['type'];
					
					$owner=$row['owner'];	
											?>
											<li><a href="indivstore.php?cat_id=<?php  echo $type;  ?>&p_id=<?php  echo $id;  ?>&p_name=<?php  echo $owner;  ?>"><font style="color:blue;text-decoration: underline;"><?php echo $owner ?></font></li>
											
				<?php } ?>
											
										</ul>
									</div>
								</div>
							</div>
					
					
					
						
							<hr class="side">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title pp">
										<a data-toggle="collapse" data-parent="#accordian" href="#sec">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<font class="game">ACCESSORIES AND TOYS</font>
										</a>
									</h4>
								</div>
								<div id="sec" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
												$query="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='toys' GROUP BY owner";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$id=$row['id'];
					$type=$row['type'];
					
					$owni=$row['owner'];	
											?>
											<li><a href="indivstore.php?cat_id=<?php  echo $type;  ?>&p_id=<?php  echo $id;  ?>&p_name=<?php  echo $owni;  ?>" class="coli"><font style="color:blue;text-decoration: underline;"><?php echo $owni ?></font></li>
											
				<?php } ?>
										</ul>
									</div>
								</div>
							</div>
							
							
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2 class="game">PETS</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
						
								
									<li><a href="#"> <span class="pull-right">(50)</span><font class="game">CROW</font></a></li>
									<li><a href="#" class="game"> <span class="pull-right">(56)</span><font class="game">DOG</font></a></li>
									<li><a href="#" class="game"> <span class="pull-right">(27)</span><font class="game">CAT</font></a></li>
									<li><a href="#" class="game"> <span class="pull-right">(32)</span><font class="game">BIRD</font></a></li>
									
								</ul>
							</div>
						</div><!--/brands_products-->
						
					
						
						
					
					</div>
				</div>
		<div class="container">
			<div class="row">
			
		        <!-- Blog Column -->
		        <div class="col-md-5">
		            <?php 
				
				
				$per_page=7;
				
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
				
				$t=$_SESSION['type'];
			
				$l=$_SESSION['location'];
				$lookfor=$_SESSION['lookfor'];
		
	             if($lookfor=="DOGS"||$lookfor=="CATS"||$lookfor=="BIRDS"||$lookfor=="SMALLPETS"||$lookfor=="AQUARIUM"){
				$count_post="SELECT *  FROM dogs WHERE type='$t' AND location='$l' GROUP BY owner";
			echo "hi";
				 }else{
					 $count_post="SELECT * FROM dogs WHERE type='$t' AND lookfor='$lookfor' AND location='$l' GROUP BY owner";
					
				 }
			
				$select_all_post=mysqli_query($connection,$count_post);
		
				$count=mysqli_num_rows($select_all_post);
				
				$count =ceil($count/$per_page);
				
				
				if($lookfor=="DOGS"||$lookfor=="CATS"||$lookfor=="BIRDS"||$lookfor=="SMALLPETS"||$lookfor=="AQUARIUM"){
				$query="SELECT DISTINCT owner,address,image FROM dogs  WHERE type='$t' AND location='$l'  ORDER BY id DESC LIMIT $page_nofirst,$per_page";
			
				}else{
					$query="SELECT DISTINCT owner,address,image FROM dogs  WHERE type='$t' AND lookfor='$lookfor' AND location='$l' ORDER BY id DESC LIMIT $page_nofirst,$per_page";
			
				}
				$select_all_events=mysqli_query($connection,$query);
				
				while($row = mysqli_fetch_assoc($select_all_events)){
				
					
					$name=$row['owner'];
		
				$address=$row['address'];
			
				$image=$row['image'];
			
				
				?>
		            <!-- First Blog Post -->
		            <div class="row blogu">
					 
					
					<div class="main">
		                <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $id;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $image ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $id;  ?>&p_name=<?php  echo $name;  ?>"  class="game" ><b><?php echo $name ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $address ?></h5>
		                </div>
						<hr>
						<hr>
					</div>
		            </div>
					
		            <br>
					
				<?php } ?>
				<div class="puppies box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='puppies' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$i=$row['id'];
					
					$bd=$row['breed'];	
				$im=$row['image'];
						$na=$row['owner'];
						$add=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $i;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $im ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $i;  ?>&p_name=<?php  echo $na;  ?>"  class="game" ><b><?php echo $na ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $add ?></h5>
							<br>
		                </div>
					 <br>
					 <br>
				<?php } ?>
				<br>
					 </div>
					 <div class="care box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='care' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$i=$row['id'];
					
					$bd=$row['breed'];	
				$im=$row['image'];
						$na=$row['owner'];
						$add=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $i;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $im ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $i;  ?>&p_name=<?php  echo $na;  ?>"  class="game" ><b><?php echo $na ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $add ?></h5>
							<br>
		                </div>
					 
					 <br>
				<?php } ?>
				
					 </div>
					  <div class="services box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='services' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$i=$row['id'];
					
					$bd=$row['breed'];	
				$im=$row['image'];
						$na=$row['owner'];
						$add=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $i;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $im ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $i;  ?>&p_name=<?php  echo $na;  ?>"  class="game" ><b><?php echo $na ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $add ?></h5>
							<br>
		                </div>
					 
					 <br>
				<?php } ?>
				
					 </div>
					 	<div class="FOOD box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='food' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$it=$row['id'];
					
					$bn=$row['breed'];	
				$img=$row['image'];
						$nan=$row['owner'];
						$addi=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $it;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $img ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $it;  ?>&p_name=<?php  echo $nan;  ?>"  class="game" ><b><?php echo $nan ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $addi ?></h5>
							<br>
		                </div>
					 <hr>
					 <br>
				<?php } ?>
				<br>
					 </div>
					 
					 		 	<div class="ACC box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='accessories' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$it=$row['id'];
					
					$bn=$row['breed'];	
				$img=$row['image'];
						$nan=$row['owner'];
						$addi=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $it;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $img ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $it;  ?>&p_name=<?php  echo $nan;  ?>"  class="game" ><b><?php echo $nan ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $addi ?></h5>
							<br>
		                </div>
					 <hr>
					 <br>
				<?php } ?>
					 </div>
					 	 		 	<div class="TOY box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='toys' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$it=$row['id'];
					
					$bn=$row['breed'];	
				$img=$row['image'];
						$nan=$row['owner'];
						$addi=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $it;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $img ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $it;  ?>&p_name=<?php  echo $nan;  ?>"  class="game" ><b><?php echo $nan ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $addi ?></h5>
							<br>
		                </div>
					 <hr>
					 <br>
				<?php } ?>
					 </div>
					 
					 		 	 		 	<div class="kitten box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='kitten' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$it=$row['id'];
					
					$bn=$row['breed'];	
				$img=$row['image'];
						$nan=$row['owner'];
						$addi=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $it;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $img ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $it;  ?>&p_name=<?php  echo $nan;  ?>"  class="game" ><b><?php echo $nan ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $addi ?></h5>
							<br>
		                </div>
					 <hr>
					 <br>
				<?php } ?>
					 </div>
					 
					 		 	 		 	<div class="chicks box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='chicks' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$it=$row['id'];
					
					$bn=$row['breed'];	
				$img=$row['image'];
						$nan=$row['owner'];
						$addi=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $it;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $img ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $it;  ?>&p_name=<?php  echo $nan;  ?>"  class="game" ><b><?php echo $nan ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $addi ?></h5>
							<br>
		                </div>
					 <hr>
					 <br>
				<?php } ?>
					 </div>
					 
					 		 	 		 	<div class="PET box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='PETVARITIES' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$it=$row['id'];
					
					$bn=$row['breed'];	
				$img=$row['image'];
						$nan=$row['owner'];
						$addi=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $it;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $img ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $it;  ?>&p_name=<?php  echo $nan;  ?>"  class="game" ><b><?php echo $nan ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $addi ?></h5>
							<br>
		                </div>
					 <hr>
					 <br>
				<?php } ?>
					 </div>
					 
					 		 	 		 	<div class="BREEDS box">
					 <?php
												$q="SELECT * FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='BREEDS' group by owner ORDER BY id";
				$select_all=mysqli_query($connection,$q);
				
				while($row=mysqli_fetch_assoc($select_all)){
					$it=$row['id'];
					
					$bn=$row['breed'];	
				$img=$row['image'];
						$nan=$row['owner'];
						$addi=$row['address'];
						?>
					  <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="indivstore.php?p_id=<?php  echo $it;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $img ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="indivstore.php?cat_id=DOGS&p_id=<?php  echo $it;  ?>&p_name=<?php  echo $nan;  ?>"  class="game" ><b><?php echo $nan ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $addi ?></h5>
							<br>
		                </div>
					 <hr>
					 <br>
				<?php } ?>
					 </div>
		            <!-- Second Blog Post -->
		           
		          
		              <div class="text-center"> 
		                <ul class="pagination"> 
		                   <br>
						   <br>
							<?php
		 for($i=1;$i<=$count;$i++){
			 
			 echo "<li class='active'><a href='storelocate.php?page={$i}'>$i</a></li>";
			 
		 }
		  
		  ?>
		                </ul> 
		            </div>
		         </div>
				
		              <div class="col-md-3">

                <!-- Blog Search Well -->
                
                <!-- Blog Categories Well -->
				
                <div class="well">
                    <h4 class="col-lg-12 game"><center>List the Stores</center></h4>
                    <div class="row">
                        <p >
						
                            <ul class="list-unstyled">
							<?php
					$query="SELECT * FROM dogs GROUP BY owner ORDER BY id DESC LIMIT $page_nofirst,$per_page";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$id=$row['id'];
					
					$name=$row['owner'];
			
				$address=substr($row['address'],0,250);
				$image=$row['image'];
			
				
				?>
                                <li><a href="indivstore.php?p_id=<?php  echo $owner;  ?>"><font class="game"><center><?php echo $owner ?></center></font></a>
                                </li>
							
				<?php } ?>
                            </ul>
							<br>
							<center>
							<a href="login1.php"><button type="button" class="btn btn-warning game">List Your Store</button></center></a>
						
                        </p>
                        
                    </div>
                    <!-- /.row -->
                </div>
				
				
<br>
<br>
                <!-- Side Widget Well -->
                <img class="img-responsive rou" src="images/2.jpg" alt="Media Object" >
            </div>
				</div>
					
					
					
				</div>
				
	</section>
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
	
	

  
    <script src="jss/jquery.js"></script>
	<script src="jss/bootstrap.min.js"></script>
	<script src="jss/jquery.scrollUp.min.js"></script>
	<script src="jss/price-range.js"></script>
    <script src="jss/jquery.prettyPhoto.js"></script>
    <script src="jss/main.js"></script>
</body>
</html>