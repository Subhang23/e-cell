<?php
echo "Hi there";
    if(isset($_POST['subData'])){
        $email=$_POST['email'];
        $password=sha1($_POST['Code']);
        $sql="SELECT * FROM abassadors WHERE email= '".$email."' AND password='".$password."'";
    }
?>


<form action="" method="post" >
        <label for="email">Email</label><br>
        <input type="email" name="Email" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="Code" required><br><br>
        <input type="submit" name="subData" value="submit">
</form>