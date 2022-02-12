<?php
    

    $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    

    $lecturer_number = $_REQUEST['lecturer_number'];

   $sql = "DELETE FROM lecturer_tbl WHERE lecturer_number=('$lecturer_number')";
  $dt=mysqli_query($conn , $sql);
   
    if (!$dt){
        
        $message = "The user does not exit. OR. Error The database is not working.\\nTry again.\\n";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "delete_lecturer.php";
    }
    else{
    $message = " Success. \\n User removeed";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "delete_lecturer.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>
