<?php

    if(isset($_POST['subData'])){
        require('./config.php');
        $name=$_POST['Name'];
        $college=$_POST['College'];
        $email=$_POST['Email'];
        $code=$_POST['Code'];
        $check ="SELECT * FROM users WHERE webmail='".$email."'";
        $confirm=$mysqli->query($check);
        echo "hello";
        if($confirm->num_rows > 0){
            echo "DOne";
        }
        else{
            $sql ="INSERT INTO users (`name`,`college`, `webmail`,`code`) VALUES ('$name', '$college', '$email', '$code')" ;
            $res=$mysqli->query($sql);
            if(! $res){
                echo $mysqli->error;
                // echo query($sql);
            }
            else{
                $message="Thank you for showing interest in E-club IIT Patna. For more info please visit our website";
                require('./mail.php');
            }
        }
        echo "hi";
        
    }
    
?>


    <form action="" method="post" >
        <label for="name">Name</label><br>
        <input type="text" name="Name"required><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="Email" required><br><br>
        <label for="college">College</label><br>
        <input type="text" name="College"required><br><br>
        <label for="code">Referal Code</label><br>
        <input type="text" name="Code"><br><br>
        <input type="submit" name="subData" value="submit">
    </form>