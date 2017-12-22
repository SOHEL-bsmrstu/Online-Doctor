<?php
include 'pdf/fpdf.php';
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Output();

?>