<?php

// include composer packages
include "vendor/autoload.php";

// Create new Landscape PDF
$pdf = new FPDI();

// Reference the PDF you want to use (use relative path)
$pagecount = $pdf->setSourceFile( 'business.pdf' );

// Import the first page from the PDF and add to dynamic PDF
$tpl = $pdf->importPage(1);
$pdf->AddPage();

// Use the imported page as the template
$pdf->useTemplate($tpl);

// // Set the default font to use
$pdf->SetFont('Helvetica');

// // adding a Cell using:
// // $pdf->Cell( $width, $height, $text, $border, $fill, $align);

// PAGE ONE

$pdf->SetFontSize('7'); // set font size
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(131, 163); // set the position of the box
$pdf->Cell(20, 5, 'Olumide shode', 0, 0, 'C'); // add the text, align to Center of cell

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(146, 174);
$pdf->Cell(10, 5, '1 month', 0, 0, 'C');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(33,180);
$pdf->Cell(5, 5, date('d'), 0, 0, 'L');
$pdf->Cell(5, 5, date('M'), 0, 0, 'L');
$pdf->Cell(9, 5, date('y'), 0, 0, 'R');


// PAGE TWO
// // note the reduction in font and different box position

$tpl = $pdf->importPage(2);
$pdf->AddPage();
$pdf->useTemplate($tpl);
$pdf->SetFont('Helvetica');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(40, 78);
$pdf->Cell(10, 5, 'service', 0, 0, 'C');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(112, 78);
$pdf->Cell(10, 5, 'extend', 0, 0, 'C');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(163,84);
$pdf->Cell(5, 5, date('d'), 0, 0, 'L');
$pdf->Cell(5, 5, date('M'), 0, 0, 'L');
$pdf->Cell(9, 5, date('y'), 0, 0, 'R');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(43,90);
$pdf->Cell(5, 5, date('d'), 0, 0, 'L');
$pdf->Cell(5, 5, date('M'), 0, 0, 'L');
$pdf->Cell(9, 5, date('y'), 0, 0, 'R');


$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(90,112);
$pdf->Cell(5, 5, '5000', 0, 0, 'L');


$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(132,112);
$pdf->Cell(5, 5, 'day', 0, 0, 'L');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(166,112);
$pdf->Cell(5, 5, '50,000', 0, 0, 'L');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(154,171);
$pdf->Cell(5, 5, '30,000', 0, 0, 'L');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(56,182);
$pdf->Cell(5, 5, 'xyz', 0, 0, 'L');

//PAGE THREE

$tpl = $pdf->importPage(3);
$pdf->AddPage();
$pdf->useTemplate($tpl);
$pdf->SetFont('Helvetica');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(37,86);
$pdf->Cell(5, 5, '5', 0, 0, 'L');



//PAGE FOUR

$tpl = $pdf->importPage(4);
$pdf->AddPage();
$pdf->useTemplate($tpl);
$pdf->SetFont('Helvetica');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(148,105);
$pdf->Cell(5, 5, date('d'), 0, 0, 'L');
$pdf->Cell(5, 5, date('M'), 0, 0, 'L');
$pdf->Cell(9, 5, date('y'), 0, 0, 'R');

$pdf->SetFontSize('12');
$pdf->SetTextColor(96,96,96);
$pdf->SetXY(148,118);
$pdf->Cell(5, 5, date('d'), 0, 0, 'L');
$pdf->Cell(5, 5, date('M'), 0, 0, 'L');
$pdf->Cell(9, 5, date('y'), 0, 0, 'R');


// render PDF to browser
$pdf->Output();


//TO DOWNLOAD
// $pdf->Output('cerebro_sla_v1.pdf', 'D');