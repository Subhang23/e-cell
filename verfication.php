<?php
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
        require('./config.php');
        $email=$_GET['email'];
        $hash=$_GET['hash'];
        $sql="SELECT * FROM ambassador WHERE webmail= '".$email."'";
        $res=$mysqli->query($sql);
        if($res->num_rows > 0){
            $row = $res->fetch_assoc();
            echo "<p>".$hash." CLoaker</p>";
            echo "<p>".$row['hash']." Subhang</p>";
            if($row['hash']==$hash||$row['active']==1){
                echo "Invalid session";
            }
            else{
                $check = "UPDATE ambassador SET active=1 WHERE webmail= '".$email."'";
                $confirm=$mysqli->query($check);
                echo "<h1>HI".$row["name"]."</h1><br><p>Your referal code is ".$row["refcode"]."</p><p>Please login to check your account.</p>";
            }
        }
        else{
            echo $mysqli->error;
        }
    }
?>