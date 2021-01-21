<?php

$servername = "localhost";
$user = "root";
$pass = "";
$db = "profile";

$conn = new mysqli($servername,$user,$pass,$db);

if($conn->error){
    echo "DB error ".$conn->error."";
}
else{
    echo "Connection successful";
}

if(isset($_POST['send'])){
    echo "<br>";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "insert into inbox (name,email,message) values ('$name','$email','$message')";

    if($conn->query($sql)){
        echo "message sent SUCCESSFULLY!!!";
    }
    else{
        echo "Error: ".$conn->error;
    }

}

?>
