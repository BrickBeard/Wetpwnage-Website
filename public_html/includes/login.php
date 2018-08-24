<?php
session_set_cookie_params(0);
session_start();

include 'dbhandler.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user_table WHERE username = '$username'";
$result = pg_query($conn, $sql);

if (!$row = pg_fetch_assoc($result)) {
    $_SESSION['message'] = "
        <div class='container-fluid text-center message'>
            <div class='col-xs-12'>
                <h1>Username or password is incorrect!</h1><br>
                <p>Please try again or register below if you haven't already!</p><br>
                <a href='Home.php' class='btn btn-success' role='button' style='margin: 5px;'>Return to Home</a>
                <a href='Registration.php' class='btn btn-default' role='button' style='margin: 5px;'>Register Now</a>
            </div>
        </div>";
    header("location: ../message.php");
    break;
} else {
    $storedSalt = $row['salt'];
    $storedHash = $row['password'];
    $checkPass = $storedSalt.$password;
    $checkHash = hash('sha512', $checkPass);    
}

if ($checkHash == $storedHash) {
    $_SESSION['title'] = "Welcome - Wetpwnage";
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['initials'] = $row['initials'];
    $_SESSION['message'] = "
        <div class='container-fluid text-center message'>
            <div class='col-xs-12'>
                <h1>Welcome back <strong><u>".$_SESSION['username']."</u></strong>!</h1><br>
                <p>We're still working hard to make your experience here a memorable one!  If you have any questions or ideas please contact us below.  Otherwise, enjoy your day!</p><br>
                <a href='myAccount.php' class='btn btn-success' role='button' style='margin: 5px;'>My Account</a>
                <a href='Home.php' class='btn btn-primary' role='button' style='margin: 5px;'>Home</a>
                <a href='Leaderboards.php' class='btn btn-success' role='button' style='margin: 5px;'>Leaderboards</a>
            </div>
        </div>";
} else {
    $_SESSION['title'] = "Login Error - Wetpwnage";
    $_SESSION['message'] = "
        <div class='container-fluid text-center message'>
            <div class='col-xs-12'>
                <h1>Forgot your password?</h1><br>
                <p>Please try logging in again.  If the problem persists, please send Support an email on the 'Contact Us' page.</p><br>
                <a href='Home.php' class='btn btn-success' role='button'>Return to Home</a>
            </div>
        </div>";
}
header("location: ../message.php");


/*if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "You are logged in!";
    } 
} else {
    echo "Your username or password is incorrect!";
}


window.location = 'Home.php';

*/

