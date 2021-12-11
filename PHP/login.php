<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect them to 
//the welcome page (welcome.php)
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

// Include connection
require_once "connect.php";

// Define variables and initialize with empty values
//variables for username and password
//variable for the login error if user cred arnt correct
$username = "";
$password = "";
$login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //removes whitespace for username
        $username = trim($_POST["username"]);

    // Check if password is empty, if it is, 
    // removes whitespace for password
        $password = trim($_POST["password"]);

    // Validate user credentials
    // selects user for the MySQL database created in form "users"
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        //prepares the SQL statement for execution
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            //
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
    
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // If the password is not valid, display an error 
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // If the username doesn't exist, display an error
                    $login_err = "Invalid username or password.";
                }
                // If neither of the above trigger and user cant authenticate, display this error
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
     form {
         border: 3px solid #f1f1f1;
     }
     input[type=text],
     input[type=password] {
         width: 100%;
         padding: 12px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         box-sizing: border-box;
     }

         .container {
             padding: 16px;
         }

     </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php
        if(!empty($login_err)){
            echo $login_err;
        }
        ?>
<!-- BIG USE FOR SECURITY, sends the php script to the same page the user is on
by using htmlspecialchars, it prevents hackers from using exploits in the URL -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
                <label>Username</label>
                <input type="text" name="username" class="container">
                
           
                <label>Password</label>
                <input type="password" name="password" class="container">
            </div>
            <div class="container">
                <input type="submit" value="Login">
            </div>
            <a href="NewUser.php">Sign up now</a>
        </form>
    </div>
</body>
</html>
