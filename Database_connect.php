<?php

$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "students";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
if(isset($_POST['save'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $student_id = $_POST['student_id'];
    $SSN = $_POST['SSN'];
$query = "INSERT INTO users (user_email, user_password,user_firstName,
user_lastName,user_address,user_phone,user_student_id,user_SSN) VALUES ('$email','$password','$firstName',
'$lastName','$address','$phone','$student_id','$SSN')";
$execute = mysqli_query($conn, $query);
if($execute=== true){
    $msg= "Data was inserted successfully";
  }else{
    $msg= mysqli_error($conn);
  }
  echo $msg;
  }
// $result = mysqli_query($conn, $sql);
// if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//mysqli_close($conn);

//header("Location: ../Registration_page.php?signup=success");