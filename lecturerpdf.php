<?php
    
    require_once './fpdf/fpdf.php';
    $conn = mysqli_connect("localhost","root","","kilimani");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());
         } 

    
    $sql = "SELECT * FROM lecturer_tbl";
    $data = mysqli_query($conn,$sql);
    
    

  if (!$data){
        
        $message = " Error. \\n Check your connection to the database.\\n";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "admin.php";
        
    }
    else{
    $pdf = new FPDF('P','mm', 'A4');
    $pdf->SetFont('Arial', 'B','9');
    $pdf->AddPage();
    $pdf->Cell('40','10','','0','5','c');
    $pdf->Cell('40','10','Lecturers in Kilimani School','0','2','c');
    $pdf->cell('30','10','Lecturer Number','1','0','c');
    $pdf->cell('35','10','First Name','1','0','c');
    $pdf->cell('25','10','Last Name','1','0','c');
    $pdf->cell('25','10','Room Number','1','1','c');
    
    $pdf->SetFont('arial', '','7');
    while ($row = mysqli_fetch_assoc($data)) {
       
       $pdf->cell('30','10',$row['lecturer_number'],'1','0','c');
       $pdf->cell('35','10',$row['first_name'],'1','0','c');
       $pdf->cell('25','10',$row['last_name'],'1','0','c');
       $pdf->cell('25','10',$row['room_number'],'1','1','c');
       
    }
    $pdf->Output();
  }
?>

