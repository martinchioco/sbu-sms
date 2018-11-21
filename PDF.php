<?php
require('PDF/fpdf.php');
//
$pdf = new FPDF('P','mm',array(100,150));
$pdf->AddPage();

$pdf->SetFont('Arial','B',25);
$pdf->Cell(0,20,'Makisushi',1,1,'C');


?>