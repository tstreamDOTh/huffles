<?php ob_start(); ?>
<?php  include("init.php");  ?>

<?php 
if(!isset($_SESSION['email'])){
	redirect("login1.php");
}

?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HUFFLES</title>

    <!-- Bootstrap Core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css1/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css1/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	
   
	
	
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
                <a class="navbar-brand" href="dashboard.php?source=profile">ADMIN</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
			<li>
               <?php
			   $connection=mysqli_connect('localhost','root','','huffles');
			   $session=session_id();
			   $time=time();
			   $time_out_in_seconds=30;
			   $time_out=$time-$time_out_in_seconds;
			   $query="SELECT * FROM user_online WHERE session='$session'";
			   $send_query=mysqli_query($connection,$query);
			   $count=mysqli_num_rows($send_query);
			   
			   
			   if($count==NULL){
				   
				   mysqli_query($connection,"INSERT INTO user_online(session,time) VALUES ('$session','$time')");
				   
			   }else{
				   
				   mysqli_query($connection,"UPDATE user_online SET time='$time' WHERE session='$session'");
			   }
			   
			   $user_online_query=mysqli_query($connection,"SELECT *  FROM user_online WHERE time > '$time'");
			   $count_user=mysqli_num_rows($user_online_query)+1;
			   
				  
				echo "<a href=''>Users Online:$count_user</a>";
				
				
			   
			   ?>
                </li>
				
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
					<?php
if(isset($_SESSION['username'])){
	echo $_SESSION['username'];
}
?>
<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="dashboard.php?source=profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
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
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="dashboard.php?source=add_post">Add Post</a>
                            </li>
                            <li>
                                <a href="dashboard.php?source=view_post">View All Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="dashboard.php?source=view_users"><i class="fa fa-fw fa-table"></i> Users</a>
                    </li>
					<li>
                        <a href="dashboard.php?source=add_category"><i class="fa fa-fw fa-table"></i> Add Listings</a>
                    </li>
                    <li>
                        <a href="dashboard.php?source=comments"><i class="fa fa-fw fa-edit"></i> Comments</a>
                    </li>
                    <li>
                        <a href="dashboard.php?source=profile"><i class="fa fa-fw fa-desktop"></i>Profile</a>
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-desktop"></i>Go to Homepage</a>
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
                            Dashboard <small>username session</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row -->

                
                <!-- /.row -->

               <?php
						if(isset($_GET['source'])){
							$source=$_GET['source'];
						}else{
							$source='';
						}
						switch($source){
							case 'add_post';
							include "add_posttry.php";
							break;
							case 'edit_post';
							include "edit_posttry.php";
							break;
							case 'add_category';
							include "admin_try.php";
							break;
							case 'view_post';
							include "defaultinposts.php";
							break;
							case 'view_users';
							include "defaultinusers.php";
							break;
							case 'comments';
							include "defaultincomments.php";
							break;
							case 'profile';
							include "profilepage.php";
							break;
							default:
							 include "dashboardtry.php";
						}
						?>
						
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

    <!-- Morris Charts JavaScript -->
    <script src="js1/plugins/morris/raphael.min.js"></script>
    <script src="js1/plugins/morris/morris.min.js"></script>
    <script src="js1/plugins/morris/morris-data.js"></script>

</body>

</html>
