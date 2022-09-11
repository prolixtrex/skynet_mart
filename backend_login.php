<?php
    
    // Include database connection file
    require_once "db_connection.php";
     
    // Define variables and initialize with empty values
    $username = $password = "";
     
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
     
        // Check if username is empty
        if(empty(trim($_POST["username"]))){
           echo '<script>alert("Please enter username")</script>';
        } else{
            $username = trim($_POST["username"]);
        }
        
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            echo '<script>alert("Please enter password")</script>';
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate credentials
        if(!empty($username) && !empty($password)){
            // Prepare a select statement
            $sql = "SELECT id, username, password FROM login_details WHERE username = ?";
            
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = $username;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($password, $hashed_password)){
                                // Password is correct, so start a new session
                                session_start();
                                
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;                            
                                
                                // Redirect user to welcome page
                                header('location: profile.php');
                                /* header('location: '.$_SERVER['HTTP_REFERER']); */ //redirects user back to the same page while logged in
                            } else{
                                // Password is not valid, display a generic error message
                                echo '<script>alert("Invalid username or password.")</script>'; //display error as alert using javascript code
                            }
                        }
                    } else{
                        // Username doesn't exist, display a generic error message
                        echo '<script>alert("This username does not exist in our database")</script>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
        
        // Close connection
        mysqli_close($conn);
    }
?> 