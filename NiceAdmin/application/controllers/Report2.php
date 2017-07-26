<?php

/**
* 
*/
class Report2 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library("Pdf");
	}

	function index(){
		$data = array('doc_name' => $this->input->post('doc_name'),
						'date' => $this->input->post('date'),
						'time' => $this->input->post('time'));

		$pdf = new PDF('P','mm','A4');
		$pdf->SetMargins(20,60,10);
		$pdf->AliasNbPages();
		$pdf->AddPage();

		$pdf->Image(base_url().'asserts/images/refletters/head2.png',20,10,200,50);
		$pdf->SetFont('Times','',16);
		$pdf->Ln(3);
		$pdf->Cell(0,10,'Diagnosis',0,2,'M');
		$pdf->Ln(3);

		$pdf->SetFont('Times','',12);
		$pdf->Cell(45,5,'Name',0,0,'L');
		$pdf->Cell(6,5,': '. $data['doc_name'],0,1,'L');
		$pdf->Cell(45,5,'Date',0,0,'L');
		$pdf->Cell(6,5,': '. $data['date'],0,1,'L');
		$pdf->Cell(45,5,'Time',0,0,'L');
		$pdf->Cell(6,5,': '. $data['time'],0,1,'L');

		$pdf->Output();
	}
}