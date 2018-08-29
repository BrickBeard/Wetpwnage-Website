<?php
    $page_title = "Home - Wetpwnage";
    $home_active = "active";
    include 'includes/header.php';
?>
<!---------- UPPER BODY ---------->
        <div class="upperBody">
            <div class="jumbotron container-fluid text-center">
                <div class="row">
                    <h1>HOME</h1>
                    <h3><kbd>Under Construction</kbd></h3>
                </div>
            </div>
        </div>
<!---------- LOWER BODY ---------->        
        <div class="lowerBody text-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 homeContentBox text-center">
                        <span>Welcome!  This is a temporary display state for this website.  The client has since shifted over to a Wix.com page as this was a hobby project and my work and family demands increased.<br/><br/> As you will see, some of the features on this site are no longer functional, but feel free to click around, register, login, etc.</span>
                    </div>
                </div>
                <?php 
                if (isset ($_SESSION['id'])) {
                    echo "<div class='row'>
                        <div class='col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 homeContentBox text-center'><span style='color:#ecf0f1;font-size:200%;'><u></u></span><br><br><p>How's it going <span><strong>" . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . "</strong></span>?<br>" . $_SESSION['email'] . "</p><br><br></div>
                    </div>";
                    }
                ?>
            </div>
        </div>
<!---------- FOOTER ---------->
<?php
    include 'includes/footer.php';
?>



<!-- NOTES:

  ---- Links ----  

 target="_blank" - opens linked page in new tab
 
 Good reference for fixing carousels: 
 http://parkhurstdesign.com/improved-carousels-twitter-bootstrap/
 -->