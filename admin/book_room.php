<?php
    session_start();
    if (isset($_POST['book_cust_room'])){
        $conn = mysqli_connect("localhost","root", "", "hotel_management");
        if ($_POST['room_type'] == 'Single Non AC')
        {
            $sql = "update single_non_ac set holder_name='$_POST[h_name]',
            holder_email='$_POST[h_email]', holder_address='$_POST[h_address]',
            holder_mobile='$_POST[h_mobile]', holder_aadhar='$_POST[h_aadhar]',
            child='$_POST[child]', adult='$_POST[adult]',
            in_date='$_POST[check_in]', out_date='$_POST[check_out]', status = 1
            where room_no = '$_POST[room_no]'";
        }
        else if ($_POST['room_type'] == 'Double Non AC')
        {
            $sql = "update double_non_ac set holder_name='$_POST[h_name]',
            holder_email='$_POST[h_email]', holder_address='$_POST[h_address]',
            holder_mobile='$_POST[h_mobile]', holder_aadhar='$_POST[h_aadhar]',
            child='$_POST[child]', adult='$_POST[adult]',
            in_date='$_POST[check_in]', out_date='$_POST[check_out]', status = 1
            where room_no = '$_POST[room_no]'";
        }
        else if ($_POST['room_type'] == 'Single AC')
        {
            $sql = "update single_ac set holder_name='$_POST[h_name]',
            holder_email='$_POST[h_email]', holder_address='$_POST[h_address]',
            holder_mobile='$_POST[h_mobile]', holder_aadhar='$_POST[h_aadhar]',
            child='$_POST[child]', adult='$_POST[adult]',
            in_date='$_POST[check_in]', out_date='$_POST[check_out]', status = 1
            where room_no = '$_POST[room_no]'";
        }
        else if ($_POST['room_type'] == 'Double AC')
        {
            $sql = "update double_ac set holder_name='$_POST[h_name]',
            holder_email='$_POST[h_email]', holder_address='$_POST[h_address]',
            holder_mobile='$_POST[h_mobile]', holder_aadhar='$_POST[h_aadhar]',
            child='$_POST[child]', adult='$_POST[adult]',
            in_date='$_POST[check_in]', out_date='$_POST[check_out]', status = 1
            where room_no = '$_POST[room_no]'";
        }
        $query_run = $conn->query($sql);
        header("location:redirect_page.php");
    }
?>


<!DOCTYPE html>
<html>
<head></head>
<body>
    <form action="book_room.php" method="post">
       <!-- <//?php include('errors.php'); ?> -->
 
        <label for="room_no">Room Number: </label>
        <input type = "text" id="room_no" name="room_no" value="<?php echo $_GET['rn']?>"><br><br>

        <label for="room_type">Room Type: </label>
        <input type = "text" id="room_type" name="room_type" value="<?php 
                if ($_GET['rt'] == 'a') {echo "Single Non AC";}
                else if ($_GET['rt'] == 'b') {echo "Double Non AC";}
                else if ($_GET['rt'] == 'c') {echo "Single AC";}
                else if ($_GET['rt'] == 'd') {echo "Double AC";}
                ?>"><br><br>

       
        <label for="h_name">Name: </label>
        <input type = "text" id="h_name" name="h_name" required><br><br>

        <label for="h_email">Email: </label>
        <input type = "email" id="h_email" name="h_email" ><br><br>

        <label for="h_address">Address: </label>
        <textarea rows="3" cols="40" name="h_address"></textarea><br><br>

        <label for="h_mobile">Mobile Number: </label>
        <input type = "number" id="h_mobile" name="h_mobile" required><br><br>

        <label for="h_aadhar">Aadhar Number: </label>
        <input type = "number" id="h_aadhar" name="h_aadhar" required><br><br>


        <label for="child">Child: </label>
        <input type = "number" id="child" name="child" ><br><br>

        <label for="adult">Adult: </label>
        <input type = "number" id="adult" name="adult" required><br><br>

        <label for="check_in">Check_in Date: </label>
        <input type = "date" id="check_in" name="check_in" required><br><br>

        <label for="check_out">Check_out Date: </label>
        <input type = "date" id="check_out" name="check_out" required><br><br>

        <button type="submit" name="book_cust_room">Book Room </button> <br><br>

        <!-- <p>Already a user? <a href="login.php">Login</a></p> -->
    </form>
</body>
</html>