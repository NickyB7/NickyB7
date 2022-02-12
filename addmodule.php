<?php
    

    $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $module_number = $_REQUEST['module_number'];
    $name = $_REQUEST['name'];
    $lecturer_number = $_REQUEST['lecturer_number'];


    $sql = "INSERT INTO module_tbl VALUES ('$module_number', '$name', '$lecturer_number')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        
        $message = " Error. \\n The user exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_module.php";
    }
    else{
        $message = "Susses";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_module.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>


