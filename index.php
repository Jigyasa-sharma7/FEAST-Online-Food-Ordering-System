<?php
//Define hardcoded login credentials (for demo purposes)
$valid_username = "anmol";
$valid_password = "123";  // In a real app, never store plain passwords like this

//Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that 'username' and 'password' are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Get the username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate the credentials (in a real application, you'd query a database)
        if ($username === $valid_username && $password === $valid_password) {
            //Successful login
            echo "Login successful! Welcome, $username.";
            // Redirect to a dashboard or home page (uncomment the next line to use)
            header("Location: home.html"); // Uncomment this for redirection
        } else {
            // Invalid login
            echo "Invalid username or password. Please try again.";
        }
    } 

}


// Turn on error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);


?>





