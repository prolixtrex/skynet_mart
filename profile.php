<?php
	if(session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
		header("location: index.php");
		exit();
	}

	require "reset_password.php";

	//Define variables and initialize with empty values
	//$_REQUEST is used when you dont know if the front end is using post or get.
	$first_name = $middle_name = $last_name = $confirm_password = $date_of_birth = $gender = $address = $phone = "";
	$email = $city = $state = $postal_code = "";
	//$hobbies = trim($_POST['hobbies']);

	//shipping address
	$sh_address = $sh_city = $sh_state = $sh_postal_code = "";

	$sql = "SELECT `id`, `first_name`, `last_name`, `middle_name`, `gender`, `date_of_birth` FROM `users`";
	$sql = "SELECT `id`, `address`, `phone`, `email`, `city`, `state`, `postal_code` FROM `contacts`";
	$sql = "SELECT `id`, `first_name`, `last_name`, `middle_name`, `gender` FROM `users`";


	$result = mysqli_query($conn, $sql) or
	die("database error:" .mysql_error($conn));

?>

<!DOCTYPE html>

<html lang="en">
	<head>
	 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title> Skynet Mart: Profile </title>
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body class="overflow-auto">
	    
	    <?php include 'header.php'; ?>
	    <br/>
	    <content>
			<div class="container-fluid">
				<div class="content col-xs-12">
					<div class="row" style="background-color: white; height: 400px;">
						<div class="col-md-4 col-xs-12" style="display: flex;justify-content: center; border-right: 2px solid #BB009A; height: inherit; background-color: #B0E9F4">
							<div class="profile_image" style="padding: 20px 20px;">
				    			<img src="image/IMG_0500.JPG" alt="profile image" width="100%" height="100%" class="rounded-circle z-depth-2" data-holder-rendered="true" />
				    		</div>
				    	</div>
				    	<div class="col-md-8 col-xs-12" style="height: inherit; background-color: #B0E9F4">
				    		<h2>Personal Information</h2>
							<p id="first_name" style="text-align: center;"><strong><?php echo $first_name; ?></strong></p>
			    			<p id="email" style="text-align: center;"><?php echo $email; ?></p>
			    			<p id="phone" style="text-align: center;"><?php echo $phone; ?></p>
				    	</div>
				    </div>
					<br clear="both">
			    	<div class="row">
				    	<aside class="col-md-2 col-xs-12">
				    		<br/>
				    		<div class="card">
				    			<div class="card-body">
				    				<ul>
				    					<li><a href="">Orders</a></li>
				    					<li><a href="">Inbox</a></li>
				    					<li><a href="">Pending Reviews</a></li>
				    					<li><a href="">Coupons</a></li>
				    					<li><a href="">Saved Items</a></li>
				    					<li><a href="">Recenly Viewed</a></li>
				    					<li><a href="">Prime</a></li>
				    					<li><a href="">Newsletter</a></li>
				    				</ul>
				    			</div>
						    </div>
				    	</aside>
				    	<section class="col-md-10 col-xs-12">
				    		<div class="card profile_edit">
								<div class="card-header text-center"><h2>Profile Details</h2></div>
				    			<div class="card-body">
						    		<div class="row profile">
										<div class="card col-xs-12 m-2">
											<div class="card-header">Personal Information<button class="btn btn-primary profileEdit editBtn">Edit</button><button class="btn btn-primary profileEdit edit">Save</button><button class="btn btn-primary profileEdit edit">Cancel</button></div>
											<div class="card-body">
												<table>
													<tbody>
														<?php 
															while ($rows = mysqli_fetch_assoc($result)) {
														?>
															<tr>
																<td>First Name</td>
																<td>
																	<span class="noedit"><?php echo $rows["first_name"] ?></span>
																	<input type="text" name="first_name" class="edit">
																</td>
															</tr>
															<tr>
																<td>Middle Name</td>
																<td>
																	<span class="noedit"><?php echo $rows["middle_name"] ?></span>
																	<input type="text" name="middle_name" class="edit">
																</td>
															</tr>
															<tr>
																<td>Last Name</td>
																<td>
																	<span class="noedit"><?php echo $rows["last_name"] ?></span>
																	<input type="text" name="last_name" class="edit">
																</td>
															</tr>
															<tr>
																<td>Gender</td>
																<td>
																	<span class="noedit"><?php echo $rows["gender"] ?></span>
																	<input type="text" name="gender" class="edit">
																</td>
															</tr>
															<tr>
																<td>Date of Birth</td>
																<td>
																	<span class="noedit"><?php echo $rows["date_of_birth"] ?></span>
																	<input type="text" name="date_of_birth" class="edit">
																</td>
															</tr>
														<?php 
														}
														?>
													</tbody>
												</table>
											</div>
										</div>
										<div class="card col-xs-12 m-2">
											<div class="card-header">Contact Address<button class="btn btn-primary profileEdit noedit">Edit</button><button class="btn btn-primary profileEdit edit">Save</button><button class="btn btn-primary profileEdit edit">Cancel</button></div>
											<div class="card-body">
												<table>
													<tr>
														<td>Address</td>
														<td>
															<span class="noedit"><?php echo $rows["address"] ?></span>
															<input type="text" name="address" class="edit">
														</td>
													</tr>
													<tr>
														<td>City</td>
														<td>
															<span class="noedit"><?php echo $rows["city"] ?></span>
															<input type="text" name="city" class="edit">
														</td>
													</tr>
													<tr>
														<td> State </td>
														<td>
															<span class="noedit"><?php echo $rows["state"] ?></span>
															<input type="text" name="state" class="edit">
														</td>
													</tr>
													<tr>
														<td> Postal Code </td>
														<td>
															<span class="noedit"><?php echo $rows["postal_code"] ?></span>
															<input type="text" name="postal_code" class="edit">
														</td>
													</tr>
												</table>
											</div>
										</div>   
										<div class="card col-xs-12 m-2">
											<div class="card-header">Shipping Address<button class="btn btn-primary profileEdit noedit">Edit</button><button class="btn btn-primary profileEdit edit">Save</button><button class="btn btn-primary profileEdit edit">Cancel</button></div>
											<div class="card-body">
												<table>
													<tr>
														<td>Address</td>
														<td>
															<span class="noedit"><?php echo $rows["sh_address"] ?></span>
															<input type="text" name="sh_address" class="edit">
														</td>
													</tr>
													<tr>
														<td>City</td>
														<td>
															<span class="noedit"><?php echo $rows["sh_city"] ?></span>
															<input type="text" name="sh_city" class="edit">
														</td>
													</tr>
													<tr>
														<td> State </td>
														<td>
															<span class="noedit"><?php echo $rows["sh_state"] ?></span>
															<input type="text" name="sh_state" class="edit">
														</td>
													</tr>
													<tr>
														<td> Postal Code </td>
														<td>
															<span class="noedit"><?php echo $rows["sh_postal_code"] ?></span>
															<input type="text" name="sh_postal_code" class="edit">
														</td>
													</tr>
												</table>
											</div>
										</div>
							    	</div>
							    	<div class="row" style="padding: 10px; display: flex; justify-content: center;">
							    		<div class="col-xs-12 profile_button">
							    			<ul>
												<!-- <li><button class="btn btn-primary edit">Save</button></li>
												<li><button class="btn btn-primary edit" onclick="cancelEdit()">Cancel</button></li>
								    			<li><button class="btn btn-primary noedit" onclick="profileEdit()">Edit Account</button></li> -->
								    			<li><button class="btn btn-primary noedit">Delete Account</button></li>
								    			<li><button class="btn btn-primary noedit" data-toggle="modal" data-target="#resetPass"> Change Password</button></li>
								    		</ul>
							    		</div>
							    	</div>
							    </div>
						    </div>
				    	</section>
				    </div>
				</div>
			</div>
		</content>
			
		<?php require "footer.php"; ?>

		<!-- Modal for reset password  -->
		<div class="modal fade" id="resetPass">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3>Reset Password:</h3> 
					</div>
					<div class="modal-body" style="margin:0px 100px;">
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
							<div class="form-group">
								<label for="password"> Enter New Password:</label>
								<input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" maxlength="20" size="20" id="new_password" />
								<span class="invalid-feedback"><?php echo $new_password_err; ?></span>
							</div>
							<div class="form-group">
								<label for="confirm_password"> Confirm New Password:</label>
								<input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" maxlength="20" size="20" id="confirm_password" />
								<span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
							</div>
							<div class="form-group form-inline">
								<input type="submit" name="submit" class="form-control btn btn-primary" value="Change Password"/>
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="row">
							<div class="col-xs-5 text-center">&copy; 2022 skynet technologies inc.</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- modal for reset password ends-->	

        <!-- javascripts -->
	    <script type="text/javascript" src="js/jquery.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	    <script type="text/javascript" src="js/jssor.slider-28.0.0.min.js"></script>
	    <script type="text/javascript" src="js/script.js"></script>
	    <script type="text/javascript" src="js/main.js"></script>
	    <script type="text/javascript">jssor_1_slider_init();</script>
  	</body>
</html>