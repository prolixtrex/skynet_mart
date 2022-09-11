<?php require "backend_signup.php"; ?>

<!DOCTYPE html>

<html lang="en">
	<head>
	 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title> Skynet Mart: Signup </title>
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
	    
	  	<?php require "login.php"; ?>
		<?php require "header.php"; ?> 

		<div class="content">
			<div class="row">
		    	<img src="image/tech/img2.jpeg" alt="gaming" width="100%" height="300px" />
		    </div>
		    <div class="container-fluid">
			    <div class="row">
			    	<div class="col-md-3 col-xs-1">
			    		<!-- empty left-side collumn for -->
			    	</div>
				    <section class="col-md-6 col-xs-10">
				    	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-horizontal" >
					    	<div class="panel panel-defaul signup" style="margin-top: 10px;">
					    		<div class="panel-heading">
					    			<p style="font-size: x-large; color: blue;"> Sign Up </p>
					    		</div>
					    		<div class="panel-body">
					    			<div class="well">
					    				<fieldset>
					    					<legend> Login Details </legend>
					    					<div class="form-group form-inline">
					    						<label for="username" class="col-xs-12 col-md-3 control-label"> Username: </label>
					    						<div class="col-xs-12 col-md-9">
					    							<input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" maxlength="30" size="50" id="username"> <!-- validated at backend -->
					    							<span class="invalid-feedback"></span><?php echo $username_err; ?></span>
					    						</div>
					    					</div>
					    					<div class="form-group form-inline">
				    							<label for="email" class="col-xs-12 col-md-3 control-label"> Email: </label>
				    							<div class="col-xs-12 col-md-9">
				    								<input type="text" name="email" class="form-control" maxlength="30" size="50" id="email"/> <!- validated at backend -->
				    							</div>
				    						</div>
					    					<div class="form-group form-inline">
					    						<label for="password" class="col-xs-12 col-md-3 control-label"> Password: </label>
					    						<div class="col-xs-12 col-md-9">
					    							<input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" maxlength="30" size="50" id="password"> <!-- validated at backend -->
					    							<span class="invalid-feedback"><?php echo $password_err; ?></span>
					    						</div>
					    					</div>
					    					<div class="form-group form-inline">
					    						<label for="confirm_password" class="col-xs-12 col-md-3 control-label"> Confirm Password: </label>
					    						<div class="col-xs-12 col-md-9">
					    							<input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" maxlength="30" size="50" id="confirm_password"> <!-- validated at backend -->
					    							<span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
					    						</div>
					    					</div>
					    				</fieldset>
					    			</div>
					    	<!--		<div class="well">
					    				<fieldset>
					    					<legend> Personal Information </legend>
				    						<div class="form-group form-inline">
				    							<label for="first_name" class="col-xs-12 col-md-3 control-label"> First Name: </label>
				    							<div class="col-xs-12 col-md-9">
				    								<input type="text" name="first_name" class="form-control" maxlength="30" size="50" id="first_name" required="required" />
				    							</div>				    	
				    						</div>
				    						<div class="form-group form-inline">
				    							<label for="last_name" class="col-xs-12 col-md-3 control-label"> Last Name: </label>
				    							<div class="col-xs-12 col-md-9">
				    								<input type="text" name="last_name" class="form-control" maxlength="30" size="50" id="last_name" required="required" />
				    							</div>				    	
				    						</div>
				    						<div class="form-group form-inline">
				    							<label for="middle_name" class="col-xs-12 col-md-3 control-label"> Middle Name: <em>(Optional)</em> </label>
				    							<div class="col-xs-12 col-md-9">
				    								<input type="text" name="middle_name" class="form-control" maxlength="30" size="50" id="middle_name"/>
				    							</div>				    	
				    						</div>
				    						<div class="form-group form-inline birthsex" style="margin-left: -1em">
				    							<label for="date_of_birth" class="col-md-3 col-xs-4 control-label">Date of Birth: </label>
				    							<div class="col-md-4 col-xs-8">
				    								<input type="date" name="date_of_birth" class="form-control" id="birth" required="required" />
				    							</div>
												<label class="col-md-1 col-xs-2 control-label" style="margin-left: -3em">Sex:</label>
												<div class="col-md-4 col-xs-10">
													<label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
													<label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
												</div>
											</div>	
					    				</fieldset>
					    			</div>
					    			<div class="well">
					    				<fieldset>
					    					<legend> Contact Information </legend>
				    						<div class="form-group form-inline">
				    							<label for="address" class="col-xs-12 col-md-3 control-label"> Address: </label>
				    							<div class="col-xs-12 col-md-9">
				    								<input type="text" name="address" class="form-control" maxlength="30" size="50" id="address" required="required" />
				    							</div>				    	
				    						</div>
				    						<div class="form-group form-inline">
				    							<label for="city" class="col-xs-12 col-md-3 control-label"> City/Town: </label>
				    							<div class="col-xs-12 col-md-9">
				    								<input type="text" name="city" class="form-control" maxlength="30" size="50" id="city" required="required" />
				    							</div>				    	
				    						</div>
				    						<div class="form-group form-inline">
				    							<label for="state" class="col-xs-12 col-md-3 control-label"> State/Province: </label>
				    							<div class="col-xs-12 col-md-9">
				    								<input type="text" name="state" class="form-control" maxlength="30" size="50" id="state" required="required" />
				    							</div>				    	
				    						</div>
				    						<div class="form-group form-inline">
				    							<label for="postal_code" class="col-xs-12 col-md-3 control-label">Postal Code:</label>
				    							<div class="col-xs-12 col-md-9"> 
				    								<input type="text" pattern = "[0-9]*" name="postal_code" class="form-control" maxlength="8" size="10" id="postal_code"/>
				    							</div>
			    							</div>
			    							<div class="form-group form-inline">
				    							<label for="phone" class="col-xs-12 col-md-3 control-label"> Phone: </label>
				    							<div class="col-xs-12 col-md-9">
				    								<input type="number" name="phone" class="form-control" maxlength="30" size="50" id="phone"/>
				    							</div>
				    						</div>	
					    				</fieldset>
					    			</div> -->
					    			<div class="row">
					    				<div class=" col-xs-6">
						    				<input type="reset" name = "clear" class="btn btn-primary" style="float: right;" value="Clear">
						    			</div>
					    				<div class="col-xs-6">
						    				<input type="submit" name="submit" class=" btn btn-primary" style="float: left;" value="Signup"/>
						    			</div>
						    		</div>
					    		</div>
					    	</div>
				    	</form>
				    </section>
			    </div>
			</div>
		</div>
		<div class="row">
	    	<div class="col-xs-12">
	    		<nav class="navbar navbar-tabs navbar-fixed-bottom">
	    			<ul class="nav navbar-nav text-center" >
	    				<li><button class="btn btn-default active"><a href="index.php"><img src="image/icon/home.png" /><br/>Home</a></button></li>
	    				<li><button class="btn btn-default"><a href="categories.php"><img src="image/icon/category.png"><br/>Categories</a></button></li>
	    				<li><button class="btn btn-default"><a href=""><img src="image/icon/feed.jpg"><br/>Feed</a></button></li>
	    				<li><button class="btn btn-default"><a href=""><img src="image/icon/account.png"><br/>Account</a></button></li>
	    				<li><button class="btn btn-default"><a href=""><img src="image/icon/help.png"><br/>Help</a></button></li>
	    			</ul>
				</nav>
	    	</div>
	    </div>
		<div class="row" id="footer">
			<footer class="footer col-xs-12 bg-warning">
				<div class="col-xs-12">&copy; 2021. skynet technologies inc.</div>
			</footer>
		</div>

		

        <!-- javascripts -->
	    <script type="text/javascript" src="js/jquery.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	    <script type="text/javascript" src="js/jssor.slider-28.0.0.min.js"></script>
	    <script type="text/javascript" src="js/script.js"></script>
	    <script type="text/javascript" src="js/main.js"></script>
	    <script type="text/javascript">jssor_1_slider_init();</script>
  	</body>
</html>