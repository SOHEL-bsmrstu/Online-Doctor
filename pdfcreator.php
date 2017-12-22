<?php
include 'pdf/fpdf.php';
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
$date= Date('d/m/y');
$pdf->Cell(0,10,"Your Prescription ",1,1,'C');
$pdf->Cell(0,10,$date,0,1,'R');
$pdf->Cell(43.33,10," Serial ",1,0);
$pdf->Cell(83.33,10," Medicine Name ",1,0);
$pdf->Cell(63.33,10," how many times per day ",1,1);

 include 'configure/Database.php';
 
 $dataObject=new Database();
                $query="select * from medicine_for_patient";
                $result=$dataObject->select($query);
                $i=0;
                 foreach ($result as $row){
                       $i++;
                       
                       
                       $pdf->Cell(43.33,10, $i ,1,0);
                        $pdf->Cell(83.33,10,$row['m_name'],1,0);
                        $pdf->Cell(63.33,10,$row['per_day'],1,1);
                 
                 }    
          





$pdf->Output();

