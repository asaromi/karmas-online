# karmas-online
$pdf = new PDF_Code128('L','mm',array(65,102));
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
dd($pdf->Output('','anu'));