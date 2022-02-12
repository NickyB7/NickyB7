<?php
    

    $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $lecture_number = $_REQUEST['lecture_number'];
    $name = $_REQUEST['name'];
    $starttime = $_REQUEST['starttime'];
    $endtime = $_REQUEST['endtime'];
    $date = $_REQUEST['date'];
    $room_number = $_REQUEST['room_number'];
    $lecturer_number = $_REQUEST['lecturer_number'];

    $sql = "INSERT INTO lecture_tbl VALUES ('$lecture_number', '$name', '$starttime','$endtime', '$date','$room_number', '$lecturer_number')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        
        $message = " Error. \\n The user exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_lecture.php";
    }
    else{
        $message = "Susses";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_lecture.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>




