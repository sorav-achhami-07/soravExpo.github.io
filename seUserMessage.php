<?php 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "soravexpo";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Sorry Connection is Failed by -->".mysqli_connect_error($conn));
    }
    else{
       //  echo "Connection Successfully";
    }

    $name = $_POST['se_name'];
    $email = $_POST['se_email'];
    $address = $_POST['se_address'];
    $message = $_POST['se_message'];
    $sql = "INSERT INTO `seusermessage` (`sno`, `name`, `email`, `address`, `message`, `date`) VALUES (NULL, '$name', '$email', '$address', '$message', current_timestamp());";
    $result = mysqli_query($conn,$sql);
    if($result){
     // echo"Thankyou for connect us";
     $message_alert = true;        
    }
    else{
     echo"not submited yet by ".mysqli_error($result);
     $message_error = true;
    }
   
   
}
?>