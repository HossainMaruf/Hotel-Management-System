<?php
  
   session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>More information</title>
 </head>
 <body style="background-image: url(photo/mujaback.jpg);background-repeat: no-repeat;background-size: cover;">

 	
 	<?php 
           include("include/header.php");
 	 ?>

 	 <div class="col-md-15">
	 				<h5 class="my-5" style="text-align: center; color: red; font-size: 50px;">Hospital Overview</h5>

	 				<div class="col-md-12">
	 				    <div class="row">
	 				    		<div class="col-md-3 bg-info mx-4" style="height: 160px;">

	 				    			<div class="col-md-9">
	 				    				<div class="row">
	 				    					<div class="col-md-8">
	 				    						<h5 class="text-white my-4">About Us</h5>
	 				    					</div>
	 				    					<div class="col-md-4">
	 				    						<a href="over.php">
	 				    							<i class="fa fa-hospital-user fa-5x 
	 				    							my-4" style="color: red;"></i>
	 				    						</a>
	 				    					</div>
	 				    				</div>
	 				    			</div>
	 				    			
	 				    		</div>

	 				    		<div class="col-md-3 bg-warning mx-4" style="height: 160px;">

	 				    			<div class="col-md-9">
	 				    				<div class="row">
	 				    					<div class="col-md-8">
	 				    						<h5 class="text-white my-4">Our Team</h5>
	 				    					</div>
	 				    					<div class="col-md-4">
	 				    						<a href="team.php">
	 				    							<i class="fa fa-users fa-5x 
	 				    							my-4" style="color: green;"></i>
	 				    						</a>
	 				    					</div>
	 				    				</div>
	 				    			</div>
	 				    			
	 				    		</div>

	 				    		<div class="col-md-3 bg-success mx-4" style="height: 160px;">

	 				    			<div class="col-md-9">
	 				    				<div class="row">
	 				    					<div class="col-md-8">
	 				    						<h5 class="text-white my-4">Address</h5>
	 				    					</div>
	 				    					<div class="col-md-4">
	 				    						<a href="adds.php">
	 				    							<i class="fas fa-file-contract fa-5x 
	 				    							my-4" style="color: white;"></i>
	 				    						</a>
	 				    					</div>
	 				    				</div>
	 				    			</div>
	 				    			
	 				    		</div>
	 				    	
	 				    </div>	
	 				</div>
	 				<div class="col-md-8">
	 					<h5></h5>
	 				</div>

 
 </body>
 </html>
