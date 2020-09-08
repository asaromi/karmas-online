# FPDF with Barcode for Laravel Framework
FPDF is one of most package to make pdf file in php. Now, the package is supported in newest Laravel Framework (6.x & 7.x)
The package including barcode class in FPDF

## Example Code
```
$pdf = new PDF_Code128('L','mm',array(65,102));
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
dd($pdf->Output('','anu'));
```

## Contribution
Pull requests are welcome. Please report any issue you find in the issues page.

## License
The package is free software distributed under the terms of the GNU Public license. FPDF is a free PHP class, you may use it for any kind of usage and modify it to suit your

For more documentation you can visit *[FPDF official site](www.fpdf.org)*
