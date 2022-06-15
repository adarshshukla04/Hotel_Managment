<?php
    session_start();
    $conn = mysqli_connect("localhost","root","", "hotel_management");
    if($_GET['rt'] == 'a')
    {
        $sql = "update single_non_ac set holder_name=NULL,
        holder_email=NULL, holder_address=NULL, holder_mobile=0,
        holder_aadhar=0, child=NULL, adult=NULL, in_date=NULL, out_date=NULL,
        status=0 where room_no = '$_GET[rn]'";
    }
    else if($_GET['rt'] == 'b')
    {
        $sql = "update double_non_ac set holder_name=NULL,
        holder_email=NULL, holder_address=NULL, holder_mobile=0,
        holder_aadhar=0, child=NULL, adult=NULL, in_date=NULL, out_date=NULL,
        status=0 where room_no = '$_GET[rn]'";
    }
    else if($_GET['rt'] == 'c')
    {
        $sql = "update single_ac set holder_name=NULL,
        holder_email=NULL, holder_address=NULL, holder_mobile=0,
        holder_aadhar=0, child=NULL, adult=NULL, in_date=NULL, out_date=NULL,
        status=0 where room_no = '$_GET[rn]'";
    }
    else if($_GET['rt'] == 'd')
    {
        $sql = "update double_ac set holder_name=NULL,
        holder_email=NULL, holder_address=NULL, holder_mobile=0,
        holder_aadhar=0, child=NULL, adult=NULL, in_date=NULL, out_date=NULL,
        status=0 where room_no = '$_GET[rn]'";
    }
    $query_run = $conn->query($sql);
    header("location:redirect_page.php")
?>


<!Doctype html>
<html>
<body>
    <h3>Cancle room type.: <?php  if ($_GET['rt'] == 'a') {echo "Single Non AC";}
                else if ($_GET['rt'] == 'b') {echo "Double Non AC";}
                else if ($_GET['rt'] == 'c') {echo "Single AC";}
                else if ($_GET['rt'] == 'd') {echo "Double AC";} ?> </h3>
    <h3><?php echo $_GET['rt'] . "---->" . $_GET['rn']?>

    <h3>Room No.: <?php echo $_GET['rn']?></h3>
</body>
</html>