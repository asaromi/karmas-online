# FPDF with Barcode for Laravel Framework
FPDF is one of most package to make pdf file in php. Now, the package is supported in newest Laravel Framework (6.x & 7.x)

> $pdf = new PDF_Code128('L','mm',array(65,102));
> $pdf->AddPage();
> $pdf->SetFont('Arial','B',16);
> $pdf->Cell(40,10,'Hello World!');
> 
> dd($pdf->Output('','anu'));

For more documentation you can visit *[FPDF official site](www.fpdf.org)*