<?php 

session_start();

include 'dbhandler.php';

    $page_title = "Home - Wetpwnage";
    $home_active = "active";
    include 'header.php';

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

if ($_POST['pass'] !== $_SESSION['pass']) {
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['salt'] = generateSalt();
}
if (empty($_SESSION['pass'])) {
    $_SESSION['salt'] = generateSalt();
}
$saltPass = $_SESSION['salt'] . $_SESSION['pass'];
$hashPass = hash('sha512', $saltPass);

?>

<form action="saltGen.php" method="POST" style="margin-top:30px;background-color:rgba(0,0,0,.5);">
    <div style="padding:20px;">
        <div class='input-group'>
            <span class='input-group-addon' style="width: 300px;"><u>Desired Password</u></span>
            <input type="text" name="pass" class="form-control" value="<?php echo htmlspecialchars($_SESSION['pass']) ?>" style="width: 600%;">
        </div>
        <div class='input-group'>
            <span class='input-group-addon' style="width: 300px;"><u>The SALT</u> (copy to salt column):</span>
            <input type="text" name="salted" value="<?php echo htmlspecialchars($_SESSION['salt']);?>" class="form-control" style="width: 600%;">
        </div>
        <div class='input-group'>
            <span class='input-group-addon' style="width: 300px;"><u>The Salted Pass</u>:</span>
            <input type="text" name="salted" value="<?php echo htmlspecialchars($saltPass);?>" class="form-control" style="width: 600%;">
        </div>
        <div class='input-group'>
            <span class='input-group-addon' style="width: 300px;"><u>The HASH</u> (copy to password column):</span>
            <input type="text" name="salted" value="<?php echo htmlspecialchars($hashPass);?>" class="form-control" style="width: 600%;">
        </div>
        <input type="submit" class="button btn btn-default" name="commit" value="Submit/Refresh">
        Reset: <input type="checkbox" name="reset" value="Reset">
    </div>
</form>

<?php
    
    include '../public_html/footer.php';
?>

