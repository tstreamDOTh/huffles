<div class="container">
  <div class="row">
  	<div class="col-md-6">
    
      <div class="panel panel-default">
			<div class="panel-body">
              		<div class="row">
                        <div class=" col-sm-8">
                            <h2><?php echo $_SESSION['username']; ?></h2>
							<p><strong>Firstname: </strong><?php echo $_SESSION['firstname']; ?></p>
					<p><strong>LastName: </strong><?php echo $_SESSION['lastname']; ?></p>
                            <p><strong>Email: </strong> <?php echo $_SESSION['email']; ?> </p>
                            <p><strong>Role: </strong> <?php echo $_SESSION['role']; ?> </p>
                            
                        </div><!--/col-->          
                        <div class="col-xs-12 col-sm-4 text-center">
                                <img src="img/1.jpg" alt="" class="center-block img-circle img-responsive">
                                <ul class="list-inline ratings text-center" title="Ratings">
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                </ul>
                        </div><!--/col-->

                        <div class="col-xs-12 col-sm-4">
                            <h2><strong> 0</strong></h2>                    
                            <p><small>Followers</small></p>
				
           
            
                            <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                        </div><!--/col-->

                      
              		</div><!--/row-->
              </div><!--/panel-body-->
          </div><!--/panel-->

    
    
    </div>
  </div>
</div>