<?php

session_start();

include 'dbhandler.php';

function generateSalt($max = 64) {
	$characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
	$i = 0;
	$salt = "";
	while ($i < $max) {
	    $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
	    $i++;
	}
	return $salt;
}

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$initial = substr($first, 0, 1) . substr($last, 0, 1); 
$initials = strtoupper($initial);

if($password == $password2) {
    $flag = TRUE;
}

if($flag == TRUE) {
    $userSalt = generateSalt();
    $salted = $userSalt.$password;
    $hashed = hash('sha512', $salted);
    
    $sql = "INSERT INTO user_table (first_name, last_name, email, username, password, salt, initials) VALUES ('$first', '$last', '$email', '$username', '$hashed', '$userSalt', '$initials')";

    $result = $pg_query($sql);
    $_SESSION['message'] = "<div class='container-fluid text-center'><div class='col-xs-12'><h1>Thank you for registering with us!</h1><br><p>Feel free to browse the site while we process your information!</p><br><a href='../Home.php' class='btn btn-success' role='button'>Return to Home</a></div></div>";
    header("location: ../message.php");
    /*echo "<script language='javascript' type='text/javascript'>
        alert('Thank you for registering with us!\n$salted');
        window.location = 'Home.php';
    </script>";*/
} else {

    header("location: ../Home.php" );
}





?>