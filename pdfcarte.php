<?php 
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=soujoud','root','');

class myPDF extends FPDF{
    function header(){
        //$this->image('logo.png',10,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'les Cartes',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'Tableau des cartes de fidelite',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'Id',1,0,'C');
        $this->Cell(30,10,'Username',1,0,'C');
        $this->Cell(55,10,'Nom',1,0,'C');
        $this->Cell(30,10,'Prenom',1,0,'C');
        $this->Cell(30,10,'Cin',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('select * from carte');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(20,10,$data->id,1,0,'C');
            $this->Cell(30,10,$data->username,1,0,'C');
            $this->Cell(55,10,$data->nom,1,0,'C');
            $this->Cell(30,10,$data->prenom,1,0,'C');
            $this->Cell(30,10,$data->cin,1,0,'C');
            $this->Ln();
        }
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();