<?php 
session_start();

// initializing variables
$name = "";
$email = "";
$errors = array();

// DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}



// Create Admin database
/*
$sql = "CREATE DATABASE admin";
if ($conn->query($sql) != True){
    echo "Error creating database: ".$conn->error;
    
}
else{
    echo "Database created successfully";
}*/

// sql to create table
/*
$sql = "CREATE TABLE ADMINS(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    admin_name VARCHAR(20) NOT NULL,
    email VARCHAR(30) NOT NULL,
    admin_password VARCHAR(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) != True){
    echo "Error creating the table: ". $conn->error;
}
*/


// Register admin
if (isset($_POST['register_admin'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile    = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password    = mysqli_real_escape_string($conn, $_POST['pass']);
    $con_password    = mysqli_real_escape_string($conn, $_POST['cpass']);

    if ($password != $con_password)
    {
        array_push($errors, "Passwords does not match!");
    }

    // Check is admin has already created his ID
    $user_check_query = "SELECT * FROM admin WHERE admin_email='$email' LIMIT 1";

    $res = $conn->query($user_check_query);
    $user = mysqli_fetch_assoc($res);

    if ($user)
    {
        if($user['email']===email)
        {
            array_push($errors, "Admin already exists");
        }
    }

    // Register admin if no errors
    if(count($errors) == 0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO admin (admin_name, admin_email, admin_mobile, admin_pass) VALUES ('$name', '$email', '$mobile', '$password')";
        $conn->query($sql);
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "You are now logged in";

        header('location: index.php');
    }
}

//Login User
/*
if(isset($_POST['login_admin'])){
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);


    if (count($errors) == 0)
    {
        //$password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT admin_password FROM admin WHERE admin_email='$email' AND admin_name='$name'";
        $res = $conn->query($sql);
        
        $hash = print_r($res, true);
        $verify = password_verify($password, $hash);

        if ($verify){
            $sql = "SELECT * FROM admin WHERE admin_email='$email' AND admin_name='$name'";
            $res = $conn->query($sql);
            if (mysqli_num_rows($res) == 1){
                $_SESSION['name'] = $name;
  	            $_SESSION['success'] = "You are now logged in";
  	            header('location: index.php');
            }
            else
            {
                array_push($errors, "Wrong Credentials");
            }
        }
        else
        {
            array_push($errors, "Wrong Password");
        }
    }

}
*/





















?>