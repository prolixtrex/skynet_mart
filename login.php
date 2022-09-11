<?php require "backend_login.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title> Skynet Mart: Home </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
	<body>
        <section>
            <!-- Modal for login pop up -->
            <div class="modal fade" id="login">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                           <h3>Login Info:</h3>
                        </div>
                        <div class="modal-body" style="margin:0px 100px;">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
                                    <input type="submit" name="submit" class="form-control btn btn-primary" value="Login" onclick="return check_input();"/>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-xs-5">
                                    Not a member? <a href="signup.php" class="btn btn-link">Register Here</a>
                                </div>
                                <div class="col-xs-5 text-center">&copy; 2022 skynet technologies inc.</div>
                                <div class="col-xs-2 modal_close">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- modal for login popup ends-->
        </section>

         <!-- javascripts -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
	</body>
</html>