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
<section class="signup-form">
    <h2>Log In</h2>
    <div class="signup-form-form">
        <form action="includes/login.php" method="post">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit"> Login</button>
        </form>
    </div>
</section>
<?php

$email = $_POST['email'];
$password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (!$row = mysqli_fetch_assoc($result)) {
    echo "Your username or password is incorrect!";
  } else {
    echo "You are logged in!"; $_SESSION["Database_connect.php"] = true;
  }

?>
