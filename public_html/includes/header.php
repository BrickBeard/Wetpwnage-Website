<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $page_title; ?></title>
		<meta property="og:title" content="<?php echo $page_title; ?>">
		<meta property="og:description" content="Wetpwnage.com: You're one stop shop for the custom games of the uber pwner, and long-time gamer, TMatth!">
		<meta property="og:image" content="/Images/Logos/MicheDesignLogoMockupV23-small.jpg">
		<meta property="og:url" content="https://wetpwnage.com/bricktest/Home">
		<link rel="stylesheet" type="text/css" href="css/bricktestBootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Raleway:500i" rel="stylesheet">	 
		<style>
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Home">
                        <img src="Images/Logos/NewLogoDesignCroppedHueUpdate.png" alt="Wet Pwnage" alt="Uber Domination">
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class='<?php echo $home_active; ?>'><a href="Home.php">Home</a></li>
                        <li class="dropdown gamesNav <?php echo $portfolio_active; ?>">
                            <a href="#" class="dropbtn">Portfolio</a>
                            <!--<div class="dropdown-content">
                                <a href="Games">Games</a>
                                <a href="Leaderboards">Leaderboards</a>
                            </div>-->
                            <ul class="dropdown-content dropdown-menu" role="menu" id="gamesMenu">
                                <li><a href="underConstruction">Projects</a>
                                    <!--<ul class="nav navbar-nav menu">
                                        <li>SpankBall (Under Construction)</li>
                                        <li>Project 2 (Under Construction)</li>
                                    </ul>-->
                                </li>   
                                <li><a href="underConstruction">In-Development</a></li>
                            </ul> 
                        </li>
                        <li class="dropdown gamesNav <?php echo $games_active; ?>">
                            <a href="Games" class="dropbtn">Games</a>
                            <!--<div class="dropdown-content">
                                <a href="Games">Games</a>
                                <a href="Leaderboards">Leaderboards</a>
                            </div>-->
                            <ul class="dropdown-content dropdown-menu" role="menu" id="gamesMenu">
                                <li><a href="Media">Media</a>
                                    <!--<ul class="nav navbar-nav menu">
                                        <li>SpankBall (Under Construction)</li>
                                        <li>Project 2 (Under Construction)</li>
                                    </ul>-->
                                </li>   
                                <li><a href="Leaderboards">Leaderboards</a></li>
                            </ul> 
                        </li>
                        <li class='<?php echo $contactUs_active; ?>'><a href="ContactUs">Contact Us</a></li>
            <!--   TESTING LOGIN / REGISTER DROPDOWN   --->                          
                    <?php 
                        if (!isset ($_SESSION['id'])) { 
                    ?>
                        <li class='dropdown' id='loginDrop'>
                            <a class='dropdown-toggle' href='#' data-toggle='dropdown'>Log In <strong class='caret'></strong></a>
                            <div class='dropdown-menu'>
                            <!-- Login form here -->
                                <form action='includes/login' method='POST' accept-charset='UTF-8'>
                                        <div class='input-group'>
                                            <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                                            <input id='username' class='form-control' type='text' name='username' placeholder='Username' />
                                        </div>
                                        <div class='input-group'>
                                            <span class='input-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
                                            <input id='password' class='form-control' type='password' name='password' placeholder='Password' />    
                                        </div>           
                                        <input id='user_remember_me' type='checkbox' name='user[remember_me]' value='1' style='float: left; margin-right: 10px; margin-top: 7px;'  />
                                        <label for='user_remember_me' style='margin-top: 3px;'> Remember me</label>
                                        <input class='btn btn-primary' type='submit' name='commit' value='Sign In' style='clear: left; width: 100%; height: 32px; font-size: 13px;'  />
                                        <div class='text-center' id='register'>
                                            <a href='Registration'>Register</a>
                                        </div>
                                    </form>
                                </div>
                            </li>;
                    <?php
                        } else {
                    ?>
                        <li class='<?php echo $myAccount_active; ?>' id="accountLink">
                            <span class='fa-stack fa-2x'>
                                <a href="myAccount">
                                    <i class='fa fa-square-o fa-stack-2x'></i>
                                </a>
                                <a href="myAccount">
                                   <?php if(isset($_SESSION['initials'])) {
                                        echo "<strong class='fa-stack-1x' id='accountIcon'>".$_SESSION['initials']."</strong>";
                                    } else {
                                        echo "<i class='fa fa-user-o fa-stack-1x' id='accountIcon'></i>";
                                    }
                                    ?>
                                </a>
                            </span> 
                        </li>
                    <?php
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="loggedInInfo">
            <?php 
                if (isset ($_SESSION['id'])) {
                    echo "Logged in as: <span>" . $_SESSION['username'] . "</span>";    
                    echo  "<a href='includes/logout' role='button' class='btn btn-danger btn-xs'>Logout</a>";/*"<a href='myAccount' role='button' class='btn btn-basic btn-xs'>My Account</a>";*/
                } else if (isset ($_SESSION['reason'])) {
                    echo "<span>".$_SESSION['reason']."</span>";
                    unset($_SESSION['reason']);
                } else {
                    echo "You're not logged in";
                }
            ?>
        </div>