<?php

/**
* 
*/
class Report3 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library("Pdf");
	}

	function index(){
		$data = array('dad' => $this->input->post('dad'),
						'mom' => $this->input->post('mom'),
						'noSibling' => $this->input->post('noSibling'),
						'nameSibling' => $this->input->post('nameSibling'),
						'home' => $this->input->post('home'),
						'present' => $this->input->post('present'),
						'preg' => $this->input->post('preg'),
						'birth' => $this->input->post('birth'),
						'delivery' => $this->input->post('delivery'),
						'weight' => $this->input->post('weight'),
						'cry' => $this->input->post('cry'),
						'afterBirth' => $this->input->post('afterBirth'),
						'rel_ill' => $this->input->post('rel_ill'),
						'med' => $this->input->post('med'),
						'audiolog' => $this->input->post('audiolog'),
						'aud_left' => $this->input->post('aud_left'),
						'aud_right' => $this->input->post('aud_right'),
						'vision' => $this->input->post('vision'),
						'vision_left' => $this->input->post('vision_left'),
						'vision_right' => $this->input->post('vision_right'),
						'relate_his' => $this->input->post('relate_his'),
						'doc' => $this->input->post('doc'),
						'date' => $this->input->post('date'),
						'time' => $this->input->post('time'));

		$pdf = new PDF('P','mm','A4');
		$pdf->SetMargins(20,60,10);
		$pdf->AliasNbPages();
		$pdf->AddPage();

		$pdf->Image(base_url().'asserts/images/refletters/head2.png',20,10,200,50);
		$pdf->SetFont('Times','',16);
		$pdf->Ln(3);
		$pdf->Cell(0,10,'Family and medical history',0,2,'M');
		$pdf->Ln(3);

		$pdf->SetFont('Times','',12);

		$pdf->Cell(45,5,'Father',0,0,'L');
		$pdf->Cell(6,5,': '. $data['dad'],0,1,'L');
		$pdf->Cell(45,5,'Mother',0,0,'L');
		$pdf->Cell(6,5,': '. $data['mom'],0,1,'L');
		$pdf->Cell(45,5,'No of siblings',0,0,'L');
		$pdf->Cell(6,5,': '. $data['noSibling'],0,1,'L');
		$pdf->Cell(45,5,'Name of siblings',0,0,'L');
		$pdf->Cell(6,5,': '. $data['nameSibling'],0,1,'L');
		$pdf->Cell(45,5,'Home situation',0,0,'L');
		$pdf->Cell(6,5,': '. $data['home'],0,1,'L');
		$pdf->Cell(45,5,'Presenting problem',0,0,'L');
		$pdf->Cell(6,5,': '. $data['present'],0,1,'L');

		$pdf->SetLineWidth(0.8);
		$pdf->Line(20,110,190,110);
		$pdf->Ln(10);

		$pdf->SetFont('Times','',16);
		$pdf->Cell(0,10,'Medical history',0,2,'M');
		$pdf->Ln(3);
		$pdf->SetFont('Times','',12);
		$pdf->Cell(45,5,'During pregnancy',0,0,'L');
		$pdf->Cell(6,5,': '. $data['preg'],0,1,'L');
		$pdf->Cell(45,5,'At birth',0,0,'L');
		$pdf->Cell(6,5,': '. $data['birth'],0,1,'L');
		$pdf->Cell(45,5,'Mode of delivery',0,0,'L');
		$pdf->Cell(6,5,': '. $data['delivery'],0,1,'L');
		$pdf->Cell(45,5,'Birth weight',0,0,'L');
		$pdf->Cell(6,5,': '. $data['weight'],0,1,'L');
		$pdf->Cell(45,5,'Birth cry',0,0,'L');
		$pdf->Cell(6,5,': '. $data['cry'],0,1,'L');
		$pdf->Cell(45,5,'Afetr birth',0,0,'L');
		$pdf->Cell(6,5,': '. $data['afterBirth'],0,1,'L');
		$pdf->Cell(45,5,'Relevant illnesses',0,0,'L');
		$pdf->Cell(6,5,': '. $data['rel_ill'],0,1,'L');
		$pdf->Cell(45,5,'Medications/investigations',0,0,'L');
		$pdf->Cell(6,5,': '. $data['med'],0,1,'L');
		$pdf->Cell(45,5,'Audiology results',0,0,'L');
		$pdf->Cell(6,5,': '. $data['audiolog'],0,1,'L');
		$pdf->Cell(45,5,'Left side',0,0,'L');
		$pdf->Cell(6,5,': '. $data['aud_left'],0,1,'L');
		$pdf->Cell(45,5,'Right side',0,0,'L');
		$pdf->Cell(6,5,': '. $data['aud_right'],0,1,'L');
		$pdf->Cell(45,5,'Vision',0,0,'L');
		$pdf->Cell(6,5,': '. $data['vision'],0,1,'L');
		$pdf->Cell(45,5,'Left side',0,0,'L');
		$pdf->Cell(6,5,': '. $data['vision_left'],0,1,'L');
		$pdf->Cell(45,5,'Right side',0,0,'L');
		$pdf->Cell(6,5,': '. $data['vision_right'],0,1,'L');
		$pdf->Cell(70,5,'History of related conditions in family',0,0,'L');
		$pdf->Cell(6,5,': '. $data['relate_his'],0,1,'L');

		$pdf->SetLineWidth(0.8);
		$pdf->Line(20,110,190,110);
		$pdf->Ln(10);
		$pdf->SetFont('Times','',16);
		$pdf->Cell(0,10,'Details of the doctor',0,2,'M');
		$pdf->Ln(3);
		$pdf->SetFont('Times','',12);

		$pdf->Cell(56,5,$data['doc'],0,0,'L');
		$pdf->Cell(46,5,': '. $data['date'],0,0,'L');
		$pdf->Cell(6,5,': '. $data['time'],0,0,'L');




		



		$pdf->output();
	}
}