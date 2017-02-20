<?php
require("fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();

/* Überschrift */
$pdf->SetFont("Helvetica", "B", 11);
$pdf->SetLineWidth(0.4);
$pdf->SetFillColor(100,182,172);
$pdf->SetDrawColor(93,115,126);
$pdf->SetTextColor(255, 255, 255);

$pdf->Cell(65, 10, "Italienisch", "LTR", 0, "C", 1);
$pdf->Cell(30, 10, "Artikel", "LTR", 0, "C", 1);
$pdf->Cell(65, 10, "Deutsch", "LTR", 0, "C", 1);
$pdf->Ln();

/* Tabelle */
$pdf->SetFont("", "");
$pdf->SetLineWidth(0.2);
$pdf->SetTextColor(93,115,126);

while($row = $statement->fetch()) {
	$pdf->Cell(65, 10, $row['word_de'], "LTR", "R", 1);
	$pdf->Cell(30, 10, "", "LTR", "C", 1);
	$pdf->Cell(65, 10, $row['word_it'], "LTR", "R", 1);
	$pdf->Ln();
}

$pdf->Output("artikel.pdf", "D");
?>


