<<?php  ?>
<?php
    

    $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    

    $lecture_number = $_REQUEST['lecture_number'];

   $sql = "DELETE FROM lecture_tbl WHERE lecture_number=('$lecture_number')";
  $dt=mysqli_query($conn , $sql);
   
    if (!$dt){
        
        $message = "The user does not exit. OR. Error The database is not working.\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "delete_lecture.php";
    }
    else{
    $message = " Success. \\n User removeed";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "delete_lecture.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>
