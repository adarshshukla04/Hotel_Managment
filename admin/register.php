<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
</head>

<body>

    <form action="register.php" method="post">
        <?php include('errors.php'); ?>
        <label for="name">Name: </label>
        <input type = "text" id="name" name="name" required><br><br>

        <label for="email">Email Id: </label>
        <input type = "email" id="email" name="email" ><br><br>

        <label for="mobile">Mobile Number: </label>
        <input type = "number" id="mobile" name="mobile" required><br><br>


        <label for="pass">Password: </label>
        <input type = "password" id="pass" name="pass" required><br><br>

        <label for="cpass">Confirm Password: </label>
        <input type = "password" id="cpass" name="cpass" required><br><br>

        <button type="submit" name="register_admin">Register </button> <br><br>

        <p>Already a user? <a href="login.php">Login</a></p>
    </form>

</body>

</html>