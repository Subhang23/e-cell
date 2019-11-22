<?php
session_destroy();
    if(isset($_POST['subData'])){
        require('./config.php');
        $email=$_POST['Email'];
        $password=$_POST['Code'];
        $sql="SELECT * FROM ambassador WHERE webmail= '".$email."'";
        $res=$mysqli->query($sql);
        if($res->num_rows > 0){
            $row = $res->fetch_assoc();
            if($row['password']==$password){
                echo "meow";
                session_start();
                echo "there";
                $_SESSION['login_user']=$email;
                // header("location: profile.php");
                echo "bal";
                echo $_SESSION['login_user'];
            }
            else{
                echo "password is incorrect";
            }
        }
        else{
            echo $mysqli->error;
            echo "Given user does not exist";
        }
    }
?>


<form action="" method="post" >
        <label for="email">Email</label><br>
        <input type="email" name="Email" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="Code" required><br><br>
        <input type="submit" name="subData" value="submit">
</form>
