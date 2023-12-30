<?php
$email = $_POST['email'];

//Database connection

$conn = new mysqli('localhost:3307','root','','login');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into log(email) values(?)");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    echo "Data Submited Successfully...";

    $stmt->close();
    $conn->close();
}

?>