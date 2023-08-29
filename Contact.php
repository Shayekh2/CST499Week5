<?php
    include_once 'Database_connect.php';

?>
<a href="Homepage.php">Home</a>
    <br />
    <a href="Contact.php">Contact Us</a>
    <br />
    <a href="Login.php">Login</a>
    <br />
    <a href="Registration_page.php">Registration</a>
    <br /> 
    <br />
    <a href="Classes.php">Classes</a>
<?php 
    $id = $_POST['id'];
        if ($_SESSION['loggedin'] == true && $_POST['id'] == $_SESSION['loggedin_userid']) {
        ?><a href="Profile_page.php='<?php echo $_SESSION['loggedin_userid']; ?>
<?php
        }
    ?>
<?php if (isset($message)) : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php endif ?>

<form action="index.php" method="post">
    <header>
        <h1>Send Us a Message</h1>
    </header>

    <div>
        <label for="name">Name:</label>
        <input type="text" value="<?= $inputs['name'] ?? '' ?>" name="name" id="name" placeholder="Full name">
        <small><?= $errors['name'] ?? '' ?></small>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Email address">
        <small><?= $errors['email'] ?? '' ?></small>
    </div>

    <div>
        <label for="subject">Subject:</label>
        <input type="subject" name="subject" id="subject" value="<?= $inputs['subject'] ?? '' ?>" placeholder="Enter a subject">
        <small><?= $errors['subject'] ?? '' ?></small>
    </div>

    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
        <small><?= $errors['message'] ?? '' ?></small>
    </div>

    <label for="nickname" aria-hidden="true" class="user-cannot-see"> Nickname
        <input type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off">
    </label>

    <button type="submit">Send Message</button>
</form>