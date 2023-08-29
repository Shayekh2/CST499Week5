<?php
    include_once 'Database_connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page </title>
</head>
<a href="Homepage.php">Home</a>
    <br />
    <a href="Contact.php">Contact Us</a>
    <br />
    <a href="Login.php">Login</a>
    <br />
    <a href="Registration_page.php">Registration</a>
    <br />
    <a href="Classes.php">Classes</a>

<?php
        
    ?>
<body> 
    <div>
        <form action-"Database_connect.php" method="POST">
            <div class="container">
            <h1>Registration</h1>
            <p>Fill up the form with correct information.</p>
            <input type="text" name"email" placeholder="E-mail">
            <br>
            <input type="text" name"password" placeholder="Password">
            <br>
            <input type="text" name"firstName" placeholder="First Name">
            <br>
            <input type="text" name"lastName" placeholder="Last Name">
            <br>
            <input type="text" name"address" placeholder="Address">
            <br>
            <input type="text" name"phone" placeholder="Phone">
            <br>
            <input type="text" name"student_id" placeholder="Student Id">
            <br>
            <input type="text" name"SSN" placeholder="SSN">
            <br>
            <button type="submit" name="submit">Submit</button>
         </form>
    </div>
    
</body>
</html>