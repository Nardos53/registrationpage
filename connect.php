<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$email = $_POST['email'];
$gender = $_POST['gender'];
//Database connection
$conn = new mysqli('localhost', 'root', '','test3');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration1(fname, lname, age, email, gender)values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $fname, $lname, $age, $email, $gender);
    $stmt->execute();
    echo "Registered successfully...";
    $stmt->close();
    $conn->close();
}
?>