<?php include("CONNECTTODATABASE.php"); ?>

<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php 
									
				$query="SELECT * FROM posts";
				$select_all_posts=mysqli_query($connection,$query);
				
				$post_count=mysqli_num_rows($select_all_posts);
							echo "	<div class='huge'>$post_count</div>	";
									
									
									
									?>
                                        
                                        <div>Posts!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                   
                                    <!--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php 
								
				$query="SELECT * FROM comment";
				$select_all_comment=mysqli_query($connection,$query);
				
				$comment_count=mysqli_num_rows($select_all_comment);
							echo "	<div class='huge'>$comment_count</div>	";
									
									
									
									?>
                                        
                                        <div> Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <!--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php 
								
				$query="SELECT * FROM users";
				$select_all_users=mysqli_query($connection,$query);
				
				$user_count=mysqli_num_rows($select_all_users);
							echo "	<div class='huge'>$user_count</div>	";
									
									
									
									?>
                                       
                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <!--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php 
									
				$query="SELECT * FROM head_categories";
				$select_all_categories=mysqli_query($connection,$query);
				
				$category_count=mysqli_num_rows($select_all_categories);
							echo "	<div class='huge'>$category_count</div>	";
									
									
									
									?>
                                       
                                        <div>Category!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <!--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
				
				<?php
				
		
				$query="SELECT * FROM posts where status='draft'";
				$select_all_unapprovepost=mysqli_query($connection,$query);
				$unapprovepost_count=mysqli_num_rows($select_all_unapprovepost);
				
				$query1="SELECT * FROM comment where comment_status='unapproved'";
				$select_all_unapprovecomment=mysqli_query($connection,$query1);
				$unapprovecomment_count=mysqli_num_rows($select_all_unapprovecomment);
				
				$query2="SELECT * FROM users where user_role='user'";
				$select_all_user=mysqli_query($connection,$query2);
				$user_count=mysqli_num_rows($select_all_user);
				?>
				
				
				
				
				                <div class="row">
								
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
		  
		  <?php
		  
		  $heading=['Posts','UnapprovedPosts','Comments','UnapproveComment','Users','Categories'];
		  $count=[$post_count,$unapprovepost_count,$comment_count,$unapprovecomment_count,$user_count,$category_count];
		  
		  for($i=0;$i<6;$i++){
			  echo "['{$heading[$i]}'" .","."{$count[$i]}],";
			  
		  }
		  
		  
		  
		  ?>
		  
        
        
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
  <div id="columnchart_material" style="width:'auto'; height: 500px;"></div>
  
                </div>
				
				 