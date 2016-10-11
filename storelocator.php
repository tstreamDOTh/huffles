<!DOCTYPE html>
<?php include("CONNECTTODATABASE.php"); ?>
 <?php session_start(); ?>
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
	</style>
</head><!--/head-->

<body>
  <nav class="navbar navbar-default navbar-collapse ff">
      <div class="container">
        
         <div id="navbar" class="navbar-collapse collapse ff">
          
          <ul class="nav navbar-nav navbar-right ">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:black"><b><h4 class="game">Locations</h4></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"></a></li>
                <li><a href="#" ">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="STORELOCATOR.php" style="color:black"><b><h4 class="game">Store Locator</h4></b></a></li>
			<li><a href="STORELOCATOR.php" style="color:black"><b><h4 class="game">Blog</h4></b></a></li>
              <li><a href="STORELOCATOR.php" style="color:black"><b><h4 class="game">Contact</h4></b></a></li>
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
    <li ><a href="#puppyModal" role="button" data-toggle="modal" class="cnt"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Get Home a Puppy</font></a></li>
	<li><a href="#toyModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Buy Dog Accessories</font></a></li>
              <li><a href="#petstoreModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Find Nearest Pet Store For your dog</font></a></li>
			 <li><a href="#clinicModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Find Nearest Clinic for your dog</font></a></li>
            
			                
  </ul>
</li>
								</div>
								<div class="col-xs-6 col-sm-2">
              <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Cats</font></h3></a>
<ul class="dropdown-content ri">
<li><a href="#kittenModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Get Home a Kitten</font></a></li>
<li><a href="#catModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Nearest Pet Store</font></a></li>
<li><a href="#cattoysModal" role="button" data-toggle="modal"><font color="#FF8C00" class="game" style="background-color:#f9f9f9">Cat Accessories and Toys</font></a></li>
  </ul>
</li>
			  </div>
			  <div class="col-xs-12 col-sm-2">
            <li class="dropdown"><a href="" ><h3><font color="#FF8C00" class="game">Birds</font></h3></a>
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

	</header><!--/header-->
	
	
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
										   
  <input class="but"  type="submit" name="toysubmit" value="SEARCH">
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
	
	<section class="cl">
	<br>
	<br>
		<div class="container ">
			<div class="row mt">
			<br>
			<br>
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2 class="game">Fileters</h2>
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
												$query="SELECT * FROM dogs WHERE lookfor='{$_SESSION['lookfor']}' ORDER BY id";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$id=$row['id'];
					
					$breed=$row['breed'];	
											?>
											<li><a href="#"><?php echo $breed ?><input type="radio" name="<?php echo $breed ?>" value="male" class="pull-right" ></li>
											
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
										<ul>
											<?php
												$query="SELECT DISTINCT owner FROM dogs WHERE type='{$_SESSION['type']}'";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					
					
					$owner=$row['owner'];	
											?>
											<li><a href="#"><?php echo $owner ?><input type="radio" name="<?php echo $owner ?>" value="male" class="pull-right" ></li>
											
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
											<li><a href="#">Fendi</a><input type="radio" name="gender" value="male" class="pull-right" ></li>
											<li><a href="#">Guess</a><input type="radio" name="gender" value="male" class="pull-right" ></li>
											<li><a href="#">Valentino</a><input type="radio" name="gender" value="male" class="pull-right" ></li>
											<li><a href="#">Dior</a><input type="radio" name="gender" value="male" class="pull-right" ></li>
											<li><a href="#">Versace</a><input type="radio" name="gender" value="male" class="pull-right" ></li>
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
												$query="SELECT DISTINCT owner FROM dogs WHERE type='{$_SESSION['type']}' AND lookfor='toys' ";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					
					
					$owni=$row['owner'];	
											?>
											<li><a href="#"><?php echo $owni ?><input type="radio" name="toy<?php echo $id ?>" value="male" class="pull-right" ></li>
											
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
				
				
				$per_page=5;
				
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
				$count_post="SELECT *  FROM dogs WHERE type='$t' AND location='$l'";
			echo "hi";
				 }else{
					 $count_post="SELECT * FROM dogs WHERE type='$t' AND lookfor='$lookfor' AND location='$l'";
					
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
		                <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="INDIVIDUALSTORE.php?p_id=<?php  echo $id;  ?>">
						
		                            <img class="img-responsive round" src="images/<?php echo $image ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h4 class="game">
		                        <a href="INDIVIDUALSTORE.php?cat_id=DOGS&p_id=<?php  echo $id;  ?>&p_name=<?php  echo $name;  ?>"  class="game" ><b><?php echo $name ?></b></a>
		                    </h4>
		                  
		                    <h5 class="game"><?php echo $address ?></h5>
		                </div>
		            </div>
		            <hr>
					
				<?php } ?>
		            <!-- Second Blog Post -->
		           
		          
		              <div class="text-center"> 
		                <ul class="pagination"> 
		                   
							<?php
		 for($i=1;$i<=$count;$i++){
			 
			 echo "<li class='active'><a href='STORELOCATOR.php?page={$i}'>$i</a></li>";
			 
		 }
		  
		  ?>
		                </ul> 
		            </div>
		         </div>
				
		              <div class="col-md-3">

                <!-- Blog Search Well -->
                
                <!-- Blog Categories Well -->
				
                <div class="well">
                    <h4 class="col-lg-12 game">List the Stores</h4>
                    <div class="row">
                        <p >
						
                            <ul class="list-unstyled">
							<?php
					$query="SELECT * FROM petstores  ORDER BY id DESC LIMIT $page_nofirst,$per_page";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$id=$row['id'];
					
					$name=$row['name'];
			
				$address=substr($row['address'],0,250);
				$image=$row['image'];
			
				
				?>
                                <li><a href="INDIVIDUALSTORE.php?p_id=<?php  echo $name;  ?>"><font class="game"> <?php echo $name ?></font></a>
                                </li>
							
				<?php } ?>
                            </ul>
							<br>
							<center>
							<button type="button" class="btn btn-warning game">List Your Store</button></center>
						
                        </p>
                        
                    </div>
                    <!-- /.row -->
                </div>
				
				
<br>
<br>
                <!-- Side Widget Well -->
                <img class="img-responsive round" src="images/2.jpg" alt="Media Object" >
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