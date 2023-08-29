<?php
    include_once 'Classes_DB.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
</head>
</head>
<nav>

<body>
    <h1>Student Portal</h1>
    <a href="Homepage.php">Home</a>
    <br />
    <a href="Contact.php">Contact Us</a>
    <br />
    <a href="Login.php">Login</a>
    <br />
    <a href="Registration_page.php">Registration</a>
    <br />
    <a href="Classes.php">Classes</a>
    <br />
<?php

Echo "Welcome to Biology 101, in this class we will learn about how life started and how we got to where we are today. Please be ready to
understand the huge world and our place in it. Happy to have you in our class, join today!"
?>

<form action-"Classes.php" method="POST">

<button type="register" name="register">Register</button>
<?php
if(isset($_POST['register']))
{
     $SQL = "INSERT INTO table_name (Class_Number, Class_Name) VALUES (1, English 101)";
     $result = mysqli_query($SQL);
}
?>
<button type="delete" name="delete">Delete Class</button>
<?php
if(isset($_POST['delete']))
{
     $SQL = "DELETE FROM table_name (Class_Number, Class_Name) VALUES (1, English 101)";
     $result = mysqli_query($SQL);
}
?>