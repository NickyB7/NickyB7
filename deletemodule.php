<?php
    

    $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    

    $module_number = $_REQUEST['module_number'];

   $sql = "DELETE FROM module_tbl WHERE module_number=('$module_number')";
  $dt=mysqli_query($conn , $sql);
   
    if (!$dt){
        
        $message = "The user does not exit. OR. Error The database is not working.\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "delete_module.php";
    }
    else{
    $message = " Success. \\n User removeed";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "delete_module.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>
