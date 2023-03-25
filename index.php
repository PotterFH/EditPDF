<?php

// include composer packages
require_once('fpdf/fpdf.php');
require_once('fpdi/src/autoload.php');



$noPoliza = 10;

// Create new Landscape PDF
$pdf = new \setasign\Fpdi\Fpdi();

// Reference the PDF you want to use (use relative path)
$pagecount = $pdf->setSourceFile( 'pdf.pdf' );
$old_pdf = $pagecount;

// Import the first page from the PDF and add to dynamic PDF
$tpl = $pdf->importPage(1);
$pdf->AddPage();

// Use the imported page as the template
$pdf->useTemplate($tpl);

// Set the default font to use
$pdf->SetFont('Helvetica');

// adding a Cell using:
// $pdf->Cell( $width, $height, $text, $border, $fill, $align);

// First box - the user's Name
$pdf->SetFontSize('15'); // set font size
$pdf->SetXY(150, 10); // set the position of the box
$pdf->Cell(0, 10, 'Poliza No. ' . $noPoliza , 1, 0, 'C' ); // add the text, align to Center of cell

// render PDF to browser
$new_pdf = $pdf->Output();

