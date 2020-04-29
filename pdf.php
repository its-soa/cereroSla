<?php
// // Create a new PDF document
// $pdf1 = new Zend_Pdf();

include "vendor/autoload.php";
 
// Load a PDF document from a file
$pdf2 = Zend_Pdf::load('pdf.pdf');

// Update the PDF document
$pdf->save($fileName, true);
// Save document as a new file
$pdf->save($newFileName);
 
// Load a PDF document from a string
