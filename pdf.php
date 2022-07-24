<?php
ob_start();
// include connection page
include('connect.php');
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(20,10,'Sl/No',1,0,'C');
$pdf->Cell(60,10,'First Name',1,0,'C');
$pdf->Cell(60,10,'Last Name',1,0,'C');
$pdf->Cell(30,10,'Mark',1,1,'C');

$sql = "SELECT * FROM crud_tbl";
$result=mysqli_query($conn,$sql);
if($result->num_rows > 0) {
    $i=0;
    while ($row = mysqli_fetch_array($result))
     {
               $i++; 
               $pdf->Cell(20,10,$i,1,0,'C');
               $pdf->Cell(60,10,$row['fname'],1,0,'C');
               $pdf->Cell(60,10,$row['lname'],1,0,'C');
               $pdf->Cell(30,10,$row['mark'],1,1,'C');
            }
        }
        else{
            echo "records not found";
        }
        
$pdf->Output();
ob_end_flush();
?>