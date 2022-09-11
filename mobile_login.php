<?php require "backend_login.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title> Skynet Mart: Home </title>
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
<body>
	
	<?php require "header.php"; ?>

    <content>
    	<section>
    		<div class="mobile_login" style="margin-top: 25px;">
                <div class="row">
                    <div class="col-xs-12 account_tab" id="account_tab">
                        <ul class="nav nav-tabs nav-stacked">
                            <li data-toggle="tab" href="#login"><button class="btn btn-default active">Login</button></li>
                            <li data-toggle="tab" href="#signup"><button class="btn btn-default">Signup</button></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="tab-content">
                        <div id="login" class="tab-pane fade in active">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-horizontal">
                                <div class="panel panel-defaul signup">
                                    
                                    <div class="panel-body" style="display: flex; justify-content: center;">
                                        <div class="well" style="width: 80%;">
                                            <fieldset>
                                                <legend>Enter Your Login Details</legend>
                                                <div class="form-group">
                                                    <label for="username">Username:</label>
                                                    <input type="text" name="username" class="form-control" maxlength="30" size="20" id="username" value="<?php echo $username; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="password"> Password:</label>
                                                    <input type="password" name="password" class="form-control" maxlength="20" size="20" id="password" />
                                                </div>
                                                <div class="form-group form-inline">
                                                    <div class="col-xs-10">
                                                        <input type="checkbox" name="rememberMe" id="rememberMe" value="rememberMe"/>
                                                        <label for="rememberMe">Remember me</label>
                                                    </div>
                                                    <input type="submit" name="submit" class="form-control btn btn-primary" value="Login"/>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="signup" class="tab-pane fade in">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-horizontal" >
                                <div class="panel panel-defaul">
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
                                                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
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
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    	</section>
    	<footer>
            <?php require "mobile_nav.php"; ?>
        </footer>

         <!-- javascripts -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </content>
</body>
</html>