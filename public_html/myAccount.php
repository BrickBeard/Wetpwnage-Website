<?php
    session_start();
    if (isset ($_SESSION['id'])) {
        $page_title = $_SESSION['username'] . "'s Account - Wetpwnage";
    } else {
        $page_title = "My Account - Wetpwnage";
    }
    $myAccount_active = "active";
    include 'includes/header.php';
?>
<!---------- UPPER BODY ---------->
        <div class="upperBody">
            <div class="row">
                <div class="jumbotron container-fluid text-center">
                   <?php
                        if (isset ($_SESSION['id'])) {
                                echo "<h1>" . $_SESSION['username'] . "'s Account</h1>";
                            } else {
                                echo "<h1>My Account</h1><br><h2>You are not signed in!</h2>";
                            }
                    ?>                
                    <br><br><h3><kbd>Under Construction</kbd></h3>
                </div>
            </div>
        </div>
<!---------- LOWER BODY ---------->        
        <div class="lowerBody text-center">
            <div class="container-fluid">
                <div class="row">
                <?php 
                    if (isset($_SESSION['id'])) {
                ?>                
                    <div class="col-sm-6 col-lg-4 col-lg-offset-1 accountTab">
                        <h1>Account Information</h1>
                        <form action="#" class="form-horizontal">    
                            <div class="form-group">
                                <label class="control-label col-xs-3">Username:</label>
                                <div class="col-xs-8 accountView">
                                    <p><?php echo $_SESSION['username']; ?></p>
                                    <input type="text" style="display:none;" class="form-control" id="accountUsername" placeholder="<?php echo $_SESSION['username']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Name:</label>
                                <div class="col-xs-8 accountView">
                                    <p><?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?></p>
                                    <input type="text" style="display:none;" class="form-control" id="accountName" placeholder="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Email:</label>
                                <div class="col-xs-8 accountView">
                                    <p><?php echo $_SESSION['email']; ?></p>
                                    <input type="text" style="display:none;" class="form-control" id="accountEmail" placeholder="<?php echo $_SESSION['email']; ?>">
                                </div>
                            </div>
                            <div class="col-xs-12 text-right accountManage">
                                <a href="#" id="manageAccount"><i class="fa fa-cog"> Update Account</i></a>
                                <a href="myAccount.php" style="display:none;" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
                                <button style="display:none;" id="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
                            <br>
                        </form> 
                    </div>
                    <div class="col-sm-6 col-lg-4 col-lg-offset-2 profileTab">
                        <h1>Profile Information</h1>
                        <div class="profileInfo">
                            <div class="data-group">
                                <h5 class="col-xs-4"><strong>Gaming Profiles:</strong></h5>
                                <p class="col-xs-8"><em><?php ?>uberPwner123</em></p>
                            </div>
                            <div class="clearfix visible-*-block"></div>
                            <div class="data-group">
                                <h5 class="col-xs-4"><strong>Date of Birth:</strong></h5> 
                                <p class="col-xs-8"><em><?php ?>A long time ago in a galaxy far far away...</em></p>
                            </div>
                            <div class="clearfix visible-*-block"></div>
                            <div class="data-group">
                                <h5 class="col-xs-4"><strong>Telephone #:</strong></h5> 
                                <p class="col-xs-8"><em><?php ?>(123) 456-7890</em></p>
                            </div>
                            <div class="clearfix visible-*-block"></div>
                            <div class="data-group">
                                <h5 class="col-xs-4"><strong>Sex:</strong></h5> 
                                <p class="col-xs-8"><em><?php ?>Male</em></p>
                            </div>
                            <div class="clearfix visible-*-block"></div>
                            <div class="col-xs-12 text-right profileManage">
                                <a href="#" id="manageProfile"><i class="fa fa-cog"> Update Profile</i></a>
                            </div>
                            <div class="clearfix visible-*-block"></div>
                        </div>
                        <form action="#" class="form-horizontal" id="profile" style="display:none;">    
                            <div class="form-group">
                                <label class="control-label col-xs-3">Linked Gaming Profiles:</label>
                                <div class="col-xs-8 accountView">
                                    <input type="text" class="form-control" id="accountProfiles" placeholder="Enter gaming account username/id...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Date of Birth:</label>
                                <div class="col-xs-8 accountView">    
                                    <input type="text" class="form-control" id="accountBirth" placeholder="Enter date of birth...">
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="control-label col-xs-3">Telephone Number:</label>
                                <div class="col-xs-8 accountView">    
                                    <input type="text" class="form-control" id="accountTele" placeholder="Enter telephone number...">
                                </div>
                            </div>       
                            <div class="form-group">
                                <div class="col-xs-8 accountView">    
                                    <label class="control-label col-xs-3">Sex:</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">Liberal</label>
                                </div>
                            </div>                      
                            <div class="col-xs-12 text-right accountManage">
                                <a href="myAccount.php" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
                                <button id="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
                            <br>
                        </form> 
                    </div>
                    <div class="clearfix visible-*-block"></div>
                    <div class="col-sm-6 col-lg-4 col-lg-offset-1 accountTab">
                        <h1>Password Reset</h1>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-lg-offset-2 accountTab">
                        <h1>Unregister</h1>
                    </div>       
                <?php
                    }
                ?>
                </div>   
            </div>
        </div>
<!---------- FOOTER ---------->
<?php
    include 'includes/footer.php';
?>