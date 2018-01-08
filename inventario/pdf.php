<?php
	require 'pdf/fpdf.php';
	$pdf= new FPDF();
	$pdf->Addpage();
	$pdf->Output();
?>