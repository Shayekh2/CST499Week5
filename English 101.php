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
Echo "English 101 provides students with the rhetorical foundations that prepare them for the demands of academic and professional
writing. In this course, students will learn and practice the strategies and processes that successful writers employ as they work to
accomplish specific purposes. In college, these purposes include comprehension, instruction, entertainment, persuasion,
investigation, problem-resolution, evaluation, explanation, and refutation. Join our class today!"
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
