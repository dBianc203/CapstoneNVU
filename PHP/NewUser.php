<?php
// Include config file
require_once "connect.php";

// Define variables and initialize with empty values
//variables are for the users username,password, and confirming their password
//confirm_password_err is used for showing an error if the passwords dont match
$username = $password = $confirm_password = "";
$confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // store result
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    echo "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    

    // Validate password
        $password = trim($_POST["password"]);
    // Validate confirm password
        $confirm_password = trim($_POST["confirm_password"]);
        if($password != $confirm_password){
            $confirm_password_err = "Password did not match.";
        }
    

    // Check input errors before inserting in database
    if(empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
<!-- same style used in login to match -->
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
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <?php
        if(!empty($confirm_password_err)){
            echo $confirm_password_err;
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="container">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="container">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="container">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password">
            </div>
            <div class="container">
                <input type="submit" value="Submit">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>
</html>
