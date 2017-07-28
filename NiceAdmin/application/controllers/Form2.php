<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form2 extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library("Pdf");
	}

	public function index()
	{
		 
	$data = array('date' => $this->input->post('date'),
					'ref' => $this->input->post('ref'),
					'age' => $this->input->post('age'),
					'clinic' => $this->input->post('clinic'),
					'des' => $this->input->post('des')
					);
        
    $pname = $this->input->post('ref');
    $date = $this->input->post('date');
		

	$pdf = new PDF('P','mm','A4');
	$pdf->SetMargins(30,60,10);
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->Image(base_url().'asserts/images/refletters/head.png',30,0);
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,0,'Date :- '. $data['date'],0,1,'R');
	//$pdf->Ln();

	$pdf->Cell(0,10,'Speech therapist/Occupational therapist/Social Worker ,',0,2,'L');
	$pdf->Ln(-5);
	$pdf->Cell(0,10,'Teaching Hospital Karapitiya,',0,2,'L');
	$pdf->Ln(-5);
	$pdf->Cell(0,10,'Galle',0,2,'L');
	//$pdf->Cell(0,10,'පුාසේශීය,',0,2,'C');

	//body
	//$pdf->Ln(5);
	//$pdf->SetX(50);


	$pdf->Ln(3);
	$pdf->Cell(0,5,'Ref. Name :- '.$data['ref'],0,2,'L');
	$pdf->Cell(0,10,'Age :- '.$data['age'],0,2,'L');                                                 										                                              	

	//$pdf->SetX(40);

	$pdf->Ln(-5);
	$pdf->SetX(30);
	$pdf->Cell(0,15,'Clinic No :- '.$data['clinic'],0,2,'L');

	$pdf->SetX(50);


	//$pdf->SetX(30);
	$pdf->Cell(0,10,'Please be kind enough to see this child/adolescent (boy/girl) with regards to',0,2,'L');
	$pdf->SetX(30);
	$pdf->Ln(-5);
	$pdf->Cell(0,10,''.$data['des'],0,2,'L');

	$pdf->Cell(0,10,'',0,2,'L');

	//$pdf->Cell(0,20,'.......................................',0,2,'L');
	$pdf->Ln(-15);
	$pdf->Cell(0,20,'Thank you',0,2,'L');
	$pdf->Ln(-12);
	$pdf->Cell(0,20,'...............................................',0,2,'L');
	$pdf->Ln(-15);
	$pdf->Cell(0,20,'Consultant/Registar/Medical Officer',0,2,'L');




	//$pdf->Text(10,120,'ksvsv');


	/*
	for($i=1;$i<=5;$i++)
	    $pdf->Cell(0,10,'This is line number '.$i,0,1);*/
    //$path = base_url().'uploads';
    $pdf->Output($this->config->item('file_path').$pname.'_'.$date.'.pdf','F');
	$pdf->Output();
        
        
	$referenceData = array(
        'patient_id' => $this->input->post('patientid'),
        'doc_name' => $this->input->post('doc_name'),
        'date' => $this->input->post('date'),
        'patient_name' => $this->input->post('ref'),
        'age' => $this->input->post('age'),
        'clinic_no' => $this->input->post('clinic'),
        'description' => $this->input->post('des'),
        'path'=> './uploads/recodrs/reference_letters/'.$pname.'_'.$date.'.pdf',
    );
        
        $this->db->insert('reference',$referenceData);
        
	}

	public function getPage(){
		$this->load->view('doctor/doc_view_patient.php');
	}
}
