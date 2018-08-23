<?php
    $page_title = "Leaderboards - Wetpwnage";
    $games_active = "active";
    include 'includes/header.php';
?>
<!---------- CONTENT ---------->
        <div class="upperBody">
            <div class="jumbotron container-fluid text-center">
                <h1>Leaderboards</h1>
                <h3><kbd>Under Construction</kbd></h3>
            </div>
            <div class="container-fluid">
                <?php
                    if (!isset($_SESSION['id'])) {
                ?>
                <div class='container-fluid text-center'>
                    <div class='col-xs-12 col-sm-6 col-sm-offset-3' style='border:1px solid black;border-radius:10px;background-color:rgba(255,255,255,.8);'>
                        <h3>You must be logged in to view the leaderboards!</h3><br><p>Please login or register to join the team!</p>
                        <br>
                        <a href='Home' class='btn btn-success' role='button' style='margin: 10px;'>Return to Home</a>
                        <a href=
    'Registration' class='btn btn-info' role='button' style='margin: 10px;'>Register Now</a>
                   </div>
                   <?php
                    } else {
                    ?>
                    <div class='container' style='background-color:rgba(255,255,255,.8)'>
                        <h2 style='padding: 5px;'>Leaderboard Table<em>(Coming Soon!)</em></h2>
                        <p>This area will describe the game and provide information about the table.</p>            
                        <table class='table table-hover'>
                            <thead>
                                <tr>
                                    <th>Gamer Tag</th>
                                    <th>Total Points</th>
                                    <th>Other Stats...</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BrickBeard</td>
                                    <td>A billion</td>
                                    <td>120293</td>
                                </tr>
                                <tr>
                                    <td>WonderBoy</td>
                                    <td>5559</td>
                                    <td>oops</td>
                                </tr>
                                <tr>
                                    <td>Pwn K1ng</td>
                                    <td>12</td>
                                    <td>;lajdf</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
<!---------- FOOTER ---------->
<?php
    include 'includes/footer.php';
?>
