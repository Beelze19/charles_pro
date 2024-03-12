<?php 
require_once("tcpdf/tcpdf.php");
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('charles jonathan');
$pdf->setTitle('pdf');
$pdf->setSubject('pdf');
$pdf->setKeywords('pdf');

$pdf->setFont('times', '', 11, '', true);

$pdf->AddPage();

$tablepdf = file_get_contents("http://localhost/pdf/tablepdf.php");
$pdf->writeHTMLCell(0, 0, '', '', $tablepdf	, 0, 1, 0, true, '', true);


$pdf->Output('pembayaran.pdf', 'I');


 ?>