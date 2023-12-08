<?php
require('./phpfpdf/fpdf.php');

date_default_timezone_set('Asia/Jakarta');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(0, 10, 'Data Calon Siswa SMAN 5 Surabaya', 0, 1, 'C');

        $this->Ln(10);

        $currentTime = date('Y-m-d H:i:s');
        $this->SetFont('Courier', 'I', 10);
        $this->Cell(0, 10, 'Dibuat pada: ' . $currentTime, 0, 1, 'R');
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Halaman ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4');

$pdf->SetXY(10, 40);
$pdf->SetFont('Courier', 'B', 12);

$pdf->Cell(40, 10,'Foto', 1,0, 'C');
$pdf->Cell(40, 10, 'NIS', 1, 0, 'C');
$pdf->Cell(50, 10, 'Nama', 1, 0, 'C');
$pdf->Cell(40, 10, 'Jenis Kelamin', 1, 0, 'C');
$pdf->Cell(40, 10, 'Telepon', 1, 0, 'C');
$pdf->Cell(67, 10, 'Alamat', 1, 1, 'C');

include "connection.php";
$sql = $pdo->prepare("SELECT * FROM siswa ORDER BY nrp");
$sql->execute();

$pdf->SetFont('Courier', '', 10);
while ($data = $sql->fetch()) {
    $imagePath = 'images/'.$data['foto'];
    if(file_exists($imagePath)){
        list($width, $height) = getimagesize($imagePath);

        $aspectRatio = $width / $height;
        
        $maxHeight = 30;
        $maxWidth = 30*$aspectRatio;

        $x = $pdf->GetX();
        $y = $pdf->GetY();

        $pdf->Cell(40, 40, '', 1, 0, 'C');
        $pdf->Image($imagePath, $x+5, $y+5, 30, 30);

        $pdf->SetXY($x + 40, $y);
    }
    else{
        $pdf->Cell(50, 50, 'Tidak Ada Gambar', 1, 0, 'C');
    }
    $pdf->Cell(40, 40, $data['nrp'], 1, 0, 'C');
    $pdf->Cell(50, 40, $data['nama'], 1, 0, 'C');
    $pdf->Cell(40, 40, $data['jenis_kelamin'], 1, 0, 'C');
    $pdf->Cell(40, 40, $data['telp'], 1, 0, 'C');
    $pdf->Cell(67, 40, $data['alamat'], 1, 1, 'L');
}

$filename = 'Data_Siswa.pdf';
$pdf->Output($filename, 'D');