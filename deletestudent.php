<?php
    

    $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    

    $student_number = $_REQUEST['student_number'];

   $sql = "DELETE FROM student_tbl WHERE student_number=('$student_number')";
  $dt=mysqli_query($conn , $sql);
   
    if (!$dt){
        
        $message = "The user does not exit. OR. Error The database is not working.\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "delete_student.php";
    }
    else{
    $message = " Success. \\n User removeed";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "delete_student.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>
