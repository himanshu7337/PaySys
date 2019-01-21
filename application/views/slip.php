<?php
ob_start();
require('fpdf/fpdf.php');
$newFile  = 'C:\xampp1\htdocs\paysys\fpdf\filename.pdf';
$pdf=new FPDF();
$pdf->Addpage();  
$pdf->SetFont('Arial','B',18);
$pdf->SetFillColor(254,255,156);
$pdf->Rect(0, 0, 210, 297, 'F');

$pdf->Ln();
if($fetch_noofdays->num_rows()>0)
{
foreach($fetch_noofdays->result() as $sal)
{
foreach($fetch_salperday->result() as $sal2)
{
  $col1="Employee ID:\n".$sal->emp_id;
  $col2="Employee Name:\n".$sal->emp_name;
  $col3="Department Name:\n".$sal->dept_name;
  $col4="No.of days:\n".$sal->noofdays;
  $col5="Salary per day:\n".$sal2->salperday;
  $col6="Total Salary:\n".$sal->noofdays*$sal2->salperday;
$pdf->Cell(40,10,'PAYMENT SLIP');
$pdf->Ln();
$pdf->Cell(100,10,$col1,1);
$pdf->Ln();
$pdf->Cell(100,10,$col2,1);
$pdf->Ln();
$pdf->Cell(100,10,$col3,1);
$pdf->Ln();
$pdf->Cell(100,10,$col4,1);
$pdf->Ln();
$pdf->Cell(100,10,$col5,1);
$pdf->Ln();
$pdf->Cell(100,10,$col6,1);

}
}
}//if
else
{
 $pdf->Cell(40,10,'Sorry...No data found...!'); 
}
$pdf->output();
ob_end_flush(); 
?>
