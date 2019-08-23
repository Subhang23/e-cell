<?php
session_start();
echo $_SESSION['login_user'];
echo "hi";
if(isset($_POST['subData'])){
    require("./logout.php");
}
?>
    <form action="" method="post" >
        <input type="submit" name="subData" value="Logout">
    </form>