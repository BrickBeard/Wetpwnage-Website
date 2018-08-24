<?php
    $page_title = "Message - Wetpwnage";
    include 'includes/header.php';
?>


<?php 
    if (isset ($_SESSION['message'])) {
        echo $_SESSION['message'];
    }
    
    if (isset ($_SESSION['id'])) {
    ?>
            <div class="container-fluid text-center feedback">
                <h2>Send us your feedback and ideas!</h2><br>
                <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3'>
                    <form action='includes/formProcessor.php' method='post' name='emailForm' id='emailForm'>
                        <div class='form-group contact-form-group' style='display: none;'>
                            <label for='emailId' class='label'>TO:</label>
                            <input type='text' class='form-control emailId contact-form-control' name='emailId' value='support@wetpwnage.com'>
                        </div>
                        <div class='form-group contact-form-group'>   
                            <label for='name' class='label'>Name:</label>
                            <input type='text' class='form-control contact-form-control' name='name' placeholder='What do we call you?'>
                        </div>
                        <div class='form-group contact-form-group'> 
                            <label for='email' class='label'>Email:</label>
                            <input type='text' class='form-control contact-form-control' name='email' placeholder='Where can we reach you?' required>
                        </div>
                        <div class='form-group contact-form-group'> 
                            <label for='message' class='label'>Message:</label>
                            <textarea class='form-control contact-form-control' name='message' placeholder='What do you have in mind?' required></textarea>
                        </div>
                        <button type='submit' class='btn btn-default'>Send Email</button>
                    </form>
                </div>
            </div>
<?php
    }

?>


<?php
    include 'includes/footer.php';
?>