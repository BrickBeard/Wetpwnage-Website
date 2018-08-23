<?php
    $page_title = "Register - Wetpwnage";
    include 'includes/header.php';
?>
<!---------- UPPER BODY ---------->
<header id="registerHeader">
    <h1>REGISTRATION</h1>
    <p><em>Want to join our community?  Fill out the form below and hit</em> <strong>Register</strong></p>
</header>
<div id="registerForm">
    <?php 
        if (isset ($_SESSION['id'])) {
            echo "<h2>You are already logged in!</h2>";
            echo "<br><br><a href='includes/logout.php' class='btn btn-danger btn-md'><span class='glyphicon glyphicon-log-out'> Logout</span></a>";
        } else {
            echo "<form action='includes/register.php' method='POST'>
                <div class='input-group'>
                    <span class='input-group-addon'>First</span>
                    <input type='text' name='first_name' placeholder='First Name' class='form-control'><br>
                </div>
                <div class='input-group'>
                    <span class='input-group-addon'>Last</span>
                    <input type='text' name='last_name' placeholder='Last Name' class='form-control'><br>
                </div>
                <div class='input-group'>
                    <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
                    <input type='text' name='email' placeholder='Email' class='form-control'><br>
                </div>
                <div class='input-group'>
                    <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                    <input type='text' name='username' 
                    placeholder='Username' class='form-control' required><br>
                </div>
                <div class='input-group'>
                    <span class='input-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
                    <input type='password' name='password' placeholder='Password' class='form-control' required>
                </div>
                <div class='input-group'>
                    <span class='input-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
                    <input type='password' name='password2' placeholder='Re-Enter Password' class='form-control' required>
                </div>
                <br>
                <input class='btn btn-default' type='submit' name='commit' value='Register' style='width = 50px;'>
            </form>";
        }
    ?>
</div>
<!---------- LOWER BODY ---------->        

<!---------- FOOTER ---------->
<?php
    include 'includes/footer.php';
?>


