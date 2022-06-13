<!--<//?php include('server.php') ?>-->
<?php
    session_start();
    if (isset($_POST['login_admin']))
    {
        $conn = mysqli_connect("localhost","root", "", "hotel_management");
        $sql = "select * from admin where admin_email = '$_POST[email]'";
        $query_run = $conn->query($sql);
        while($row = mysqli_fetch_assoc($query_run))
        {
            if ($row['admin_email'] == $_POST["email"])
            {
                if ($row['admin_mobile'] == $_POST['mobile'])
                {
                    header("location:admin_dashboard.php");
                }
                else{
                    echo "<script>alert('Wrong Credentials')</script>";
                }
            }
            else{
                echo "<script>alert('Wrong Credentials')</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>

<body>

    <form action="login.php" method="post">
        <!--<//?php include('errors.php'); ?>-->
        <label for="name">Name: </label>
        <input type = "text" id="name" name="name" required><br><br>

        <label for="email">Email Id: </label>
        <input type = "email" id="email" name="email"><br><br>

        <label for="mobile">Mobile Number: </label>
        <input type = "number" id="mobile" name="mobile"><br><br>


        <label for="pass">Password: </label>
        <input type = "password" id="pass" name="pass" required><br><br>

        <button type="submit" name="login_admin">Login </button> <br><br>

        <p>Not a user? <a href="register.php">Register</a></p>
    </form>

</body>

</html>