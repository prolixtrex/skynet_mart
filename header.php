<!DOCTYPE html>
<html>
<body>
	<header>
      	<nav class="navbar fixed-top">
			<div class="nav w-100 bg-dark">
				<div class="container">
	  				<a href="index.php" class="navbar-brand"><img src="image/sky.png" alt="skynet tech" height="50" width="100"></a>
		            <ul class="nav mr-auto">
		            	<?php 
		            	if(session_status() === PHP_SESSION_NONE) {
							session_start();
						}
		            		if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) { ?>
		                	<ul class="nav mr-auto" style="list-style-type: none; ">
		                		<li class="nav-item" style="font-size: medium; text-transform: uppercase; background-color: rgb(133,133,133); border-radius: 5px; color: white;"><a class="nav-link" href="profile.php"><?php echo $_SESSION["username"] ?></a></li>
		                		<li class="nav-item" style="padding-left: 5px;"><a class="nav-link" href="logout.php">Logout</a></li>
		                	</ul>
		            	<?php } else { ?>
		            		<li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#login">Login</a></li>
		            	<?php } ?>
		            </ul>
	              	<form class="form-inline" action="http://www.google.com" method="get">
		                <div class="form-group">
		                  	<input type="text" class="form-control" placeholder="Search for Items">
		                </div>
		                <button type="submit" class="btn btn-default" style="color: white;">Submit</button>
	              	</form>
	              	<a class="cart nav-link" href="#"><img src="image/icon/cart.png" height="25" width="30"></a>
	            </div>
            </div>
  			<div class="row w-100">
  				<div class="drpdwn">
					<ul class="nav">
						<li class="nav-item dropdown">
							<a href="computing.php" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Computing</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #60CFFF;">
								<a class="dropdown-item" href="#">COMPUTERS</a>
								<a class="dropdown-item" href="#">DATA STORAGE</a>
								<a class="dropdown-item" href="#">ANTI VIRUS</a>
								<a class="dropdown-item" href="#">PRINTERS</a>
								<a class="dropdown-item" href="#">COMPUTER ACCESSORIES</a>
							</div>
						</li>
						<li class="dropdown">
							<a href="phones.php" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Phone Gadgets</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #60CFFF;">
								<a class="dropdown-item" href="#">SMART PHONES</a>
								<a class="dropdown-item" href="#">MOBILE PHONES</a>
								<a class="dropdown-item" href="#">TABLETS</a>
								<a class="dropdown-item" href="#">MOBILE PHONE ACCESSORIES</a>
							</div>
						</li>
						<li class="dropdown">
							<a href="electronics.php" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Elecronics</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #60CFFF;">
								<a class="dropdown-item" href="#">TELEVISIONS & VIDEOS</a>
								<a class="dropdown-item" href="#">HOME AUDIO</a>
								<a class="dropdown-item" href="#">CAMERAS & PHOTOS</a>
								<a class="dropdown-item" href="#">PORTABLE POWERS</a>
							</div>
						</li>
						<li class="dropdown">
							<a href="homes.php" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home & Office</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #60CFFF;">
								<a class="dropdown-item" href="#">HOME & KITCHEN</a>
								<a class="dropdown-item" href="#">HOME & OFFICE FURNITURE</a>
								<a class="dropdown-item" href="#">OFFICE PRODUCTS</a>
								<a class="dropdown-item" href="#">SMALL APPLIANCES</a>
								<a class="dropdown-item" href="#">LARGE APPLIANCES</a>
								<a class="dropdown-item" href="#">SMART HOME GADGETS</a>
							</div>   
						</li>
						<li class="dropdown">               	
							<a href="gaming.php" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gaming</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #60CFFF;">
								<a class="dropdown-item" href="#">PLAY STATION</a>
								<a class="dropdown-item" href="#">XBOX</a>
								<a class="dropdown-item" href="#">NINTENDO</a>
								<a class="dropdown-item" href="#">NINTENDO SWITCH</a>
							</div>
						</li>
				  	</ul>
	            </div>
  			</div>
		</nav>
	</header> 
</body>
</html>