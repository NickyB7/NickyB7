<?php
    

    $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $lecturer_number = $_REQUEST['lecturer_number'];
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $room_number = $_REQUEST['room_number'];

    $sql = "INSERT INTO lecturer_tbl VALUES ('$lecturer_number', '$first_name', '$last_name', '$room_number')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        
        $message = " Error. \\n The user exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_lecturer.php";
    }
    else{
        $message = "Susses";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_lecturer.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>


