<?php
include("../db/db.php");

$name =mysqli_real_escape_string($conn,$_POST['u_name']) ;
$email = $_POST["u_email"];
$pass = $_POST["u_password"];
$cpass = $_POST["c_password"];
$vkey = rand(10000,99999);
$status = 0;

if (!empty($name) && !empty($email) && !empty($pass) && !empty($cpass)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if($pass == $cpass){
            $cemail = mysqli_query($conn, "SELECT email FROM login WHERE email = '{$email}'");
            if(mysqli_num_rows($cemail) > 0){
                echo "$email - already exist !!";
            }else{
                $pass = md5($pass);
                $sql = "insert into login (name,email,password,status,vkey)
                values('$name','$email','$pass','$status',$vkey)"; 
                if(mysqli_query($conn,$sql)){
                    $sql2 = "SELECT * FROM login WHERE email = '$email'";
                    $to = $email;
                    $subject = "verify your Account";
                    $txt = "Hi ". $name ."

                            Your verification code is : ". $vkey." 

                            Enter this code in our website  to activate your account.";
                    $headers = "From: uchat426@gmail.com";
                    mail($to,$subject,$txt,$headers);
                    mysqli_close($conn);
                    echo "Thank you - Login now";      
                }else{
                    echo "insert error";
                }             
            }
            
        }else{
            echo "passwords not match";
        }
    }else{
        echo "$email - This is not valid email";
    }
    
}
else{
    echo "all input are reequired";
}
?>