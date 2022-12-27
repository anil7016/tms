<?php

require_once('PDF_TextBox.php');

$pdf = new PDF_TextBox();

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
// Logo
$pdf->Image('tms_logo.png', 150, 6, 50);
// Arial bold 15
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(80);
// Title
//$pdf->Cell(30, 10, 'Title', 1, 0, 'C');
// Line break
$pdf->Ln(20);
$pdf->Cell(40, 10, 'Billing Cover Sheet');
$pdf->Ln(10);
$pdf->Cell(10, 10, 'Main Project Information');
//$pdf->SetFont('Arial', 'B', 12);
//$pdf->Line(10,60,200,60);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetXY(12, 60);
$pdf->drawTextBox('Order No.:', 190, 50, 'L', 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(45, 61);
$pdf->drawTextBox('O-00-15204', 0, 0, 'L', 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(12, 70);
$pdf->drawTextBox('Project description:', 0, 0, 'L', 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(12, 75);
$pdf->drawTextBox('Source Language:', 0, 0, 'L', 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(12, 80);
$pdf->drawTextBox('Target Language:', 0, 0, 'L', 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(12, 90);
$pdf->drawTextBox('Request Date:', 0, 0, 'L', 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(12, 95);
$pdf->drawTextBox('Quotation Date:', 0, 0, 'L', 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(12, 100);
$pdf->drawTextBox('Order Date:', 0, 0, 'L', 'L');    
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(45, 100);
$pdf->drawTextBox('06.11.2015 13:23 CET', 0, 0, 'L', 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(12, 105);
$pdf->drawTextBox('Delivery Date:', 0, 0, 'L', 'L');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Ln(10);
$pdf->Cell(20, 0, 'Customer Information');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(12, 125);
$pdf->drawTextBox('Customer:', 190, 30, 'L', 'L');
$pdf->SetXY(45, 125);
$pdf->drawTextBox('[Name1][Name2]', 0, 0, 'L', 'L');
$pdf->SetXY(45, 130);
$pdf->drawTextBox('[ContactName1][ContactName2]', 0, 0, 'L', 'L');
$pdf->SetXY(45, 135);
$pdf->drawTextBox('[Street1][Street2]', 0, 0, 'L', 'L');
$pdf->SetXY(45, 140);
$pdf->drawTextBox('[Postcode][City]', 0, 0, 'L', 'L');
$pdf->SetXY(12, 145);
$pdf->drawTextBox('Phone:', 0, 0, 'L', 'L');
$pdf->SetXY(45, 145);
$pdf->drawTextBox('[ContactTelHome]', 0, 0, 'L', 'L');
$pdf->SetXY(12, 150);
$pdf->drawTextBox('E-Mail:', 0, 0, 'L', 'L');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Ln(10);
$pdf->Cell(20, 0, 'Items & Jobs');
$pdf->Ln(10);
$pdf->Cell(20, 0, 'Items');
$pdf->SetLeftMargin(130);
$pdf->Cell(10, 0,'Delivery date');
$pdf->SetLeftMargin(175);
$pdf->Cell(10, 0,'Price in EUR');
$pdf->SetLeftMargin(10);
$pdf->SetFont('Arial', '', 10);
$pdf->Ln(10);
$pdf->Cell(20, 0, '1.');
$pdf->SetLeftMargin(175);
$pdf->Cell(20, 0, '0.0');
$pdf->SetLeftMargin(10);
$pdf->Ln(10);
$pdf->Cell(20, 0, '2.');
$pdf->SetLeftMargin(15);
$pdf->Ln(10);
$pdf->Cell(20, 0, '0 Hour(s) Glossary Creation at 0.00 EUR');
$pdf->SetLeftMargin(175);
$pdf->Cell(20, 0, '0.0');
$pdf->SetLeftMargin(10);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Ln(10);
$pdf->Cell(20, 0, 'Total Price without TAX');
$pdf->SetLeftMargin(175);
$pdf->Cell(20, 0, '0.0');
$pdf->SetLeftMargin(10);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Ln(10);
$pdf->Cell(20, 0, 'Total Price with TAX');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetLeftMargin(175);
$pdf->Cell(20, 0, '0.0');
$pdf->SetLeftMargin(10);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetLeftMargin(10);
$pdf->Line(10, 230, 200, 230);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Ln(15);
$pdf->Cell(20, 0, 'Jobs');
$pdf->SetFont('Arial', '', 10);
$pdf->Ln(10);
$pdf->Cell(10, 0, 'O-00-15204-BAD-001');
$pdf->SetLeftMargin(80);
$pdf->Cell(10, 0, 'Accounting BeConnected');
$pdf->SetLeftMargin(10);
$pdf->Ln(5);
$pdf->Cell(10, 0, 'Batch Delivery:');
$pdf->SetLeftMargin(170);
$pdf->Cell(10, 0, 'Status: In preparation');
$pdf->SetLeftMargin(10);
$pdf->Ln(10);
$pdf->Cell(10, 0, 'Created on 11.03.2016 by: Manoj Test');
$pdf->Image('footer.png', 0, 275, 210);
$pdf->Output();
?>



