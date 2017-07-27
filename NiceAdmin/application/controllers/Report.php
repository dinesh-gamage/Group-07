<?php

/**
* 
*/
class Report extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library("Pdf");
	}

	public function index(){
		$data = array('pname' => $this->input->post('pname'),
						'pgender' => $this->input->post('pgender'),
						'planguage' => $this->input->post('planguage'),
						'page' => $this->input->post('page'),
						'pdob' => $this->input->post('pdob'),
						'pschool' => $this->input->post('pschool'),
						'pguard' => $this->input->post('pguard'),
						'grelation' => $this->input->post('grelation'),
						'gaddress' => $this->input->post('gaddress'),
						'ptelephone' => $this->input->post('ptelephone'),
						'pdivision' => $this->input->post('pdivision'),
						'refer' => $this->input->post('refer'),
						'reg' => $this->input->post('reg'));

		$pdf = new PDF('P','mm','A4');
		$pdf->SetMargins(20,60,10);
		$pdf->AliasNbPages();
		$pdf->AddPage();

		$pdf->Image(base_url().'asserts/images/refletters/head2.png',20,10,200,50);
		$pdf->SetFont('Times','',16);
		$pdf->Ln(3);
		$pdf->Cell(0,10,'General details',0,2,'M');
		$pdf->Ln(3);

		$pdf->SetFont('Times','',12);
		//$pdf->Cell(0,10,'Please be kind enough to see this child/adolescent (boy/girl) with regards to',0,2,'L');
		//$pdf->Cell(45,5,$data['gaddress'],0,1,'L');
		$pdf->Cell(45,5,'Name',0,0,'L');
		$pdf->Cell(6,5,': '. $data['pname'],0,1,'L');
		$pdf->Cell(45,5,'Gender',0,0,'L');
		$pdf->Cell(6,5,': '. $data['pgender'],0,1,'L');
		$pdf->Cell(45,5,'Language',0,0,'L');
		$pdf->Cell(6,5,': '. $data['planguage'],0,1,'L');
		$pdf->Cell(45,5,'Age',0,0,'L');
		$pdf->Cell(6,5,': '. $data['page'],0,1,'L');
		$pdf->Cell(45,5,'Date of Birth',0,0,'L');
		$pdf->Cell(6,5,': '. $data['pdob'],0,1,'L');
		$pdf->Cell(45,5,'School',0,0,'L');
		$pdf->Cell(6,5,': '. $data['pschool'],0,1,'L');


		// $pdf->Cell(0,5,'Gender 												:-		'.$data['pgender'],0,2,'L');
		// $pdf->Cell(0,5,'Language 								:-		'.$data['planguage'],0,2,'L');
		// $pdf->Cell(0,5,'Age 																	:-	'.$data['page'],0,2,'L');
		// $pdf->Cell(0,5,'Date of Birth 			:-		'.$data['pdob'],0,2,'L');
		// $pdf->Cell(0,5,'School 													:-		'.$data['pschool'],0,2,'L');

		$pdf->SetLineWidth(0.8);
		$pdf->Line(20,110,190,110);
		$pdf->Ln(10);


		$pdf->Cell(45,5,"Guardian's name",0,0,'L');
		$pdf->Cell(6,5,': '. $data['pguard'],0,1,'L');
		$pdf->Cell(45,5,"Guardian's relationship",0,0,'L');
		$pdf->Cell(6,5,': '. $data['grelation'],0,1,'L');
		$pdf->Cell(45,5,"Address",0,0,'L');
		$pdf->Cell(6,5,': '. $data['gaddress'],0,1,'L');
		// $pdf->Cell(45,5,'Address',0,0,'L');
		// $pdf->Cell(6,5,': '. $data['paddress'],0,1,'L');
		$pdf->Cell(45,5,'Telephone',0,0,'L');
		$pdf->Cell(6,5,': '. $data['ptelephone'],0,1,'L');
		$pdf->Cell(45,5,'Division',0,0,'L');
		$pdf->Cell(6,5,': '. $data['pdivision'],0,1,'L');

		$pdf->Line(20,145,190,145);
		$pdf->Ln(10);

		$pdf->Cell(45,5,'Refered by',0,0,'L');
		$pdf->Cell(6,5,': '. $data['refer'],0,1,'L');
		$pdf->Cell(45,5,'Registered date',0,0,'L');
		$pdf->Cell(6,5,': '. $data['reg'],0,1,'L');

		$pdf->Output();
	}
}