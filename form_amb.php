<?php

    if(isset($_POST['subData'])){
        if($_POST['Password']===$_POST['CPassowrd']){
            require('./config.php');
            $name=$_POST['Name'];
            $college=$_POST['College'];
            $email=$_POST['Email'];
            $code=$_POST['Password'];
            $hash = md5($code);
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $randomString = ''; 
          
            for ($i = 0; $i<6; $i++) { 
                $index = rand(0, strlen($characters) - 1); 
                $randomString .= $characters[$index]; 
            }
            $sql ="INSERT INTO ambassador (`id`,`name`,`college`, `webmail`,`password`,`hash`,`refcode`) VALUES ('$name','$name', '$college', '$email', '$code','$hash','$randomString')" ;
            $res=$mysqli->query($sql);
            if(! $res){
                echo $mysqli->error;
                // echo query($sql);
            }
            else{
                $message="Thank you for applying with us as cammpus ambassador. Please click here to activate your account http://localhost/e-cell/verfication.php?hash=".$hash."&email=".$email.". Invite more of your friends to win exciting goodies from e-club iitp";
                require('./mail.php');
            }
        }
        else
        echo "password and confirm password do not match";       
    }
    
?>


    <form action="" method="post" >
        <label for="name">Name</label><br>
        <input type="text" name="Name"required><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="Email" required><br><br>
        <label for="college">College</label><br>
        <input type="text" name="College"required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="Password" required><br><br>
        <label for="password">Confirm Password</label><br>
        <input type="password" name="CPassowrd" required><br><br>
        <input type="submit" name="subData" value="submit">
        <p>Already have an account <a href="./login.php">click here</a></p>
    </form>