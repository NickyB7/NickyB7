<?php
    

    $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $student_number = $_REQUEST['student_number'];
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $module_number = $_REQUEST['module_number'];
    $lecturer_number = $_REQUEST['lecturer_number'];

    $sql = "INSERT INTO student_tbl VALUES ('$student_number', '$first_name', '$last_name', '$module_number','$lecturer_number')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        
        $message = " Error. \\n The user exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_student.php";
    }
    else{
        $message = "Susses";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_student.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>


