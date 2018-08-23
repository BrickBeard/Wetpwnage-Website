<?php
	require_once("../includes/session.php");
	require_once("../includes/dbconnection.php");
	require_once("../includes/functions.php");
	//Query
	$query = "SELECT * ";
	$query .= "FROM main_nav ";
	$query .= "ORDER BY position";
	$result = mysqli_query($connection, $query);
	confirm_query($result);
?>

<!doctype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional/EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WetPwnage</title>
        <link href="../public/stylesheets/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../public/stylesheets/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="../public/stylesheets/styles.css" rel="stylesheet" type="text/css">
                
	</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
    	<div class="container-fluid">
        	<div class="nav-header">
            	<a class="navbar brand" href="/public/index.php">
       				<img alt="Brand" src="../Images/Logos/NewLogoDesignCroppedHueUpdate.png">
    			</a>
            </div>
            
            	<label for="open">
                	<span class="hidden-desktop"></span>
                </label>
                <input type="checkbox" name="" id="open"/>
        	<div class="navCollapse">    
        	<ul class="nav navbar nav-tabs nav-justified">
    		<?php
				//Using returned data
				if(isset($_SESSION["username"])){
					$verification = is_verified($_SESSION["username"]);
				} else {
					$verification["active"] = 0;
				}
				while($nav = mysqli_fetch_assoc($result)) {
					if($nav["always_visible"] == 1){
			?>
       			<li class="headerli"><a href="<?php echo $nav["linking_page"];?>"><?php echo $nav["display_name"]; ?></a></li>	
			<?php
					}
					else if($nav["always_visible"] == 0 and $verification["active"] == 1)
					{
			?>
                    	<li class="headerli"><a href="<?php echo $nav["linking_page"];?>"><?php echo $nav["display_name"]; ?></a></li>
            <?php
					}
					else if(isset($_SESSION["user_level"]))
					{ 
						if($nav["always_visible"] == 0 and $_SESSION["user_level"] == 5)
						{
			?>
            				<li class="headerli"><a href="<?php echo $nav["linking_page"];?>"><?php echo $nav["display_name"]; ?></a></li>
            <?php
						}
					}
				}
			?>
        </ul>
            <?php
				if(isset($_SESSION["message"]))
				{
			?>
					<div id="sessionMessage"><?php echo $_SESSION["message"];?></div>
            <?php
				$_SESSION["message"] = NULL;
				}
				if(!isset($_SESSION['username'])){
			?>
         <ul class="nav navbar nav-tabs nav-justified users">
            <li id="login" class="headerli">
        		<a id="login-trigger" href="#">Login</a>
        	    <div id="login-content">
        			<form id="login">
        	  		<fieldset id="inputs">
        	    		<input id="username" name="username" placeholder="Username" value="<?php if(isset($user)){htmlentities($user);}?>" required>   
        	    		<input id="password" type="password" name="password" placeholder="Password" required>
        	  		</fieldset>
        	  		<fieldset id="actions">
        	    		<input type="submit" id="submit" formaction="login.php" formMethod="POST" value="Login">
           			  <label><input type="checkbox" checked="checked"> Keep me signed in</label>
          			</fieldset>
        			</form>
      			</div>
           	</li>
        	<li class="headerli"><a href="register.php">Register</a></li>
    	</ul>
        </div>
        </div>
    </nav>
 	<?php
		} else {
	?>
    <ul class="nav navbar nav-tabs nav-justified users">
		<li class="headerli">
        	 <a href="profile.php">Hello, <?php echo htmlentities($_SESSION['username']); ?></a>				
        </li>
		<li class="headerli"><a href="logout.php">Logout</a></li>
   	</ul>
    </div>
    </div>
</nav>
<?php
		}
    ?>
