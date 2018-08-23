<?php

$servername = "localhost";
$username = "wetpwnag";
$password = "D!rtyW@t3r";
$database = "wetpwnag_Website";

$conn = mysqli_connect($servername, $username, $password, $database);
/*$conn = mysqli_connect('localhost', 'root', '', 'authentication');*/

if (!$conn) {
    /*die("Connection failed: " . $conn->connect_error);*/
    die("Connection to database server failed: ".$mysqli_connect_error());
}
if (!mysqli_set_charset($conn, 'utf8')) {
    die("Unable to set database connection encoding.");
}
if (!mysqli_select_db($conn, $database)) {
    die("Unable to locate the " . $database . " database." );
}
?>
