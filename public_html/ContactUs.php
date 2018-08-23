<?php
    $page_title = "Contact Us - Wetpwnage";
    $contactUs_active = "active";
    include 'includes/header.php';
?>
<!---------- UPPER CONTENT ---------->
        <div class="upperBody text-center">
            <div class="jumbotron container-fluid text-center">
                <div class="row"><h1>CONTACT US</h1>
                    <!--<h3><kbd>Under Construction</kbd></h3>--></div>
            </div>
            <h1>The Team</h1>
            <div class="container-fluid text-center theTeam">
                <div class="row">
                    <p id="selectTeam">Select team member to email below:</p>                
                    <div id="accordian">
                        <div class="col-xs-6 col-sm-3">
                            <div class="teamBackground" data-toggle="collapse" data-parent="#accordian" data-target="#timInfo">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/Gaming.png" alt="Game controller" width="75">
                                <p><b>Nub Overlord</b><br>Tim Matthews</p>
                            </div>
                            <a href="mailto:tim.matthews@wetpwnage.com">Email Tim</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                           <div class="teamBackground" data-toggle="collapse" data-parent="#accordian" data-target="#andrewInfo">
                                 <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Input-gaming.png" alt="Stick controller" width="75">
                                <p><b>Extreme Nub</b><br>Andrew Moore</p>
                            </div>
                            <a href="mailto:andrew.moore@wetpwnage.com">Email Andrew</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                           <div class="teamBackground" data-toggle="collapse" data-parent="#accordian" data-target="#brickInfo">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Keyboard-icon_Wikipedians.svg/2000px-Keyboard-icon_Wikipedians.svg.png" alt="Game controller" width="113">
                                <p><b>The Code Nub</b><br>BrickBeard</p>
                            </div>
                            <a href="mailto:brickbeard@wetpwnage.com">Email Brick</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="teamBackground teamHighlight" data-toggle="collapse" data-parent="#accordian">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Question_Mark.svg/2000px-Question_Mark.svg.png" alt="" width="100">
                                <p><b>Need Help?</b><br>Support</p>
                            </div>
                            <a href="mailto:support@wetpwnage.com">Email Support</a>
                        </div>
                        <!--<div class="col-xs-6 col-sm-4">
                            <img src="#" alt="">
                            <p>Relative Nub<br>Michael Krueger</p>
                            <a href="mailto:michael.krueger@wetpwnage.com"><kbd>Email Michael</kbd></a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-sm-offset-2">
                            <img src="#" alt="">
                            <p>Footbal Pwner<br>Football Freak</p>
                            <a href="mailto:footballfreak215@wetpwnage.com"><kbd>footballfreak215@wetpwnage.com</kbd></a>
                        </div>-->
                        <div class="accordion-group text-left">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 memberInfo collapse" id="timInfo">
                                <h2>Tim Matthews</h2>
                                <span class="fa-stack fa-5x">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-user fa-stack-1x"></i>
                                </span>
                                <p>Tim is a crazy dude, just sayin.  Top of the gamer food chain, this nubsmasher will get u rekked!</p>
                                <ul>Skills:
                                    <li>Uber pwnage</li>
                                    <li>Master of DP consumption and Little Debbie throwdowns.</li>
                                    <li>Ex Marine, so watch yo-self! </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 memberInfo collapse" id="andrewInfo">
                                <h2>Andrew Moore</h2>
                                <span class="fa-stack fa-5x">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-user fa-stack-1x"></i>
                                </span>
                                <p>Andrew's a dude acting like a dude pretending to be a dude who's related to another dude. </p>
                                <ul>Skills:
                                    <li>Hypothetical pickpocketing</li>
                                    <li>Wearing your mom's necklace as a choke collar</li>
                                    <li>Virtually slaying anything that moves.</li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 memberInfo collapse" id="brickInfo">
                                <h2>BrickBeard.io</h2>
                                <span class="fa-stack fa-5x">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-user fa-stack-1x"></i>
                                </span>
                                <p>BrickBeard is a part time web developer mostly focused on frontend interaction and user experience.</p>
                                <ul>Skills:
                                    <li>Likes long walks through the mountains</li>
                                    <li>Getting footrubs with rocks.</li>
                                    <li>Googling everything he doesn't know...</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            
<!---------- CONTACT FORM ---------->            
            <div class="container-fluid text-center contact">
                <h2>Send us an email!</h2>    
        <!---------- emailToDisplay Option 2 ---------->
                <div class="col-xs-4 col-xs-offset-4 col-sm-1 col-sm-offset-1" id="emailToDisplay">
                    <h4>Sending to:</h4>
                    <div class="emailToRecipient">
                <!--Team Member information populates here-->
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Question_Mark.svg/2000px-Question_Mark.svg.png" alt="" width="100">
                        <p><b>Need Help?</b><br>Support</p> 
                    </div>
                </div>
        <!---------- emailToDisplay Option 1 END ---------->
                <div class="col-xs-12 col-sm-6 col-sm-offset-1"> <!--col-sm-offset-3-->
                    <form action="includes/formProcessor.php" method="POST" name="emailForm" id="emailForm">
                        <div class="form-group contact-form-group" style="display: none;">
                            <label for="emailId" class="label">TO:</label>
                            <input type="text" class="form-control contact-form-control emailId" name="emailId" value="support@wetpwnage.com">
                        </div>
                        <div class="form-group contact-form-group">   
                            <label for="name" class="label">Name:</label>
                            <input type="text" class="form-control contact-form-control" name="name" placeholder="What do we call you?">
                        </div>
                        <div class="form-group contact-form-group"> 
                            <label for="email" class="label">Email:</label>
                            <input type="text" class="form-control contact-form-control" name="email" placeholder="Where can we reach you?" required>
                        </div>
                        <div class="form-group contact-form-group"> 
                            <label for="message" class="label">Message:</label>
                            <textarea class="form-control contact-form-control" name="message" placeholder="What's up? " required></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LchxGsUAAAAAJTYjjxfZ5dfHurxzSS1PB6mnVCE"></div>
                        <button type="submit" class="btn btn-default">Send Email</button>
                    </form>
                </div>
        <!---------- emailToDisplay Option 2 ---------->
                <!--<div class="col-xs-2 col-xs-offset-5 col-sm-1 col-sm-offset-1" id="emailToDisplay2">
                    <h4>Sending to:</h4>
                    <div class="emailToRecipient2">
                Team Member information populates here
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Question_Mark.svg/2000px-Question_Mark.svg.png" alt="" width="100">
                        <p><b>Need Help?</b><br>Support</p> 
                    </div>
                </div>-->
        <!---------- emailToDisplay Option 2 END ---------->
            </div>
        </div>
<!---------- FOOTER ---------->
 <?php
    include 'includes/footer.php';
?>







<!-- NOTES:

  ---- Links ----  

 target="_blank" - opens linked page in new tab
 -->