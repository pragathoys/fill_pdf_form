<?php

// Initialize ---
// Include the main TCPDF library
require_once( dirname(__FILE__).'/TCPDF-6.3.5/tcpdf.php');

// create new PDF document with default settings
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// ddisable font subsetting in order to allow users editing the pdf document
$pdf->setFontSubsetting(false);

// set font
$pdf->SetFont('helvetica', '', 12, '', false);

// add a page
$pdf->AddPage();
// ---------

// Create the Form ----

// set default form properties
$pdf->setFormDefaultProp(array('lineWidth'=>1, 'borderStyle'=>'solid', 'fillColor'=>array(255, 255, 180), 'strokeColor'=>array(255, 140, 140)));

// create the Text field with default text
$pdf->Cell(40, 8, 'Sample TextField:');
$pdf->TextField('sample_text', 100, 8 , [] , ['v' => 'placeholder text']);
$pdf->Ln(20);
// ----------

//Close and output the PDF document as a pdf file in the current folder of the script
$pdf->Output( dirname(__FILE__).'/test.pdf', 'F');