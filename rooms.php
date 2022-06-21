<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "hotel_management");
    $sql = "Select count(id) from single_non_ac where status = 1";
    $query_run = $conn->query($sql);
    $row = mysqli_fetch_assoc($query_run);
    if ($row)
    {
        $sql_1 = "update single_non_ac set holder_name=NULL,
        holder_email=NULL, holder_address=NULL, holder_mobile=0,
        holder_aadhar=0, child=NULL, adult=NULL, in_date=NULL, out_date=NULL,
        status=0 where out_date= Convert (Date, SYSDATETIME())";
    }


?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="row">
    <div class = "col-md-12">
        <center><h3>Room Booking Page</h3></center>
    </div>
</div>
<br><br>
<center><h5>Room Type: Single Non-AC Rooms</h5></center>
<div class="row">
    <?php 
        $connect = mysqli_connect("localhost", "root", "", "hotel_management");
        $sql = "Select * from single_non_ac";
        $query_run = $connect->query($sql);
        while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <div class="col-md-2" style="margin-left:50px;">
            <div class="card bg-light" style="width: 300px;">
                <div class="card-header">Room No.: <?php echo $row['room_no'];
                ?></div>
                <div class="card-body">
                    <p class="card-text">Room Status: 
                        <?php
                            if ($row['status']==0){
                                echo "<b>Available</b>";
                            }
                            else{
                                 echo "<b>Already Booked</b>";
                            }
                        ?>
                    </p>
                    <a href="admin/book_room.php?rn=<?php echo $row['room_no']. "&rt=a"?>" class="btn btn-primary <?php if($row["status"]==0) {echo "active";} else{echo "disabled";} ?>">Book </a>

                    
                </div>
            </div>
        </div>
        <?php
        }
        ?>
            

</div>

<br><br>

<center><h5>Room Type: Double Non-AC Rooms</h5></center>
<div class="row">
    <?php 
        $connect = mysqli_connect("localhost", "root", "", "hotel_management");
        $sql = "Select * from double_non_ac";
        $query_run = $connect->query($sql);
        while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <div class="col-md-2" style="margin-left:50px;">
            <div class="card bg-light" style="width: 300px;">
                <div class="card-header">Room No.: <?php echo $row['room_no'];
                ?></div>
                <div class="card-body">
                    <p class="card-text">Room Status: 
                        <?php
                            if ($row['status']==0){
                                echo "<b>Available</b>";
                            }
                            else{
                                 echo "<b>Already Booked</b>";
                            }
                        ?>
                    </p>
                    <a href="admin/book_room.php?rn=<?php echo $row['room_no']. "&rt=a"?>" class="btn btn-primary <?php if($row["status"]==0) {echo "active";} else{echo "disabled";} ?>">Book </a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
            

</div>

<br><br>

<center><h5>Room Type: Single AC Rooms</h5></center>
<div class="row">
    <?php 
        $connect = mysqli_connect("localhost", "root", "", "hotel_management");
        $sql = "Select * from single_ac";
        $query_run = $connect->query($sql);
        while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <div class="col-md-2" style="margin-left:50px;">
            <div class="card bg-light" style="width: 300px;">
                <div class="card-header">Room No.: <?php echo $row['room_no'];
                ?></div>
                <div class="card-body">
                    <p class="card-text">Room Status: 
                        <?php
                            if ($row['status']==0){
                                echo "<b>Available</b>";
                            }
                            else{
                                 echo "<b>Already Booked</b>";
                            }
                        ?>
                    </p>
                    <a href="admin/book_room.php?rn=<?php echo $row['room_no']. "&rt=a"?>" class="btn btn-primary <?php if($row["status"]==0) {echo "active";} else{echo "disabled";} ?>">Book </a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
            

</div>

<br><br>

<center><h5>Room Type: Double AC Rooms</h5></center>
<div class="row">
    <?php 
        $connect = mysqli_connect("localhost", "root", "", "hotel_management");
        $sql = "Select * from double_ac";
        $query_run = $connect->query($sql);
        while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <div class="col-md-2" style="margin-left:50px;">
            <div class="card bg-light" style="width: 300px;">
                <div class="card-header">Room No.: <?php echo $row['room_no'];
                ?></div>
                <div class="card-body">
                    <p class="card-text">Room Status: 
                        <?php
                            if ($row['status']==0){
                                echo "<b>Available</b>";
                            }
                            else{
                                 echo "<b>Already Booked</b>";
                            }
                        ?>
                    </p>
                    <a href="admin/book_room.php?rn=<?php echo $row['room_no']. "&rt=a"?>" class="btn btn-primary <?php if($row["status"]==0) {echo "active";} else{echo "disabled";} ?>">Book </a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
            

</div>

<br><br>

</body>
</html>
