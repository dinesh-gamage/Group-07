<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DoctorView extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('doc_model');
    }
    
    
	public function index()
	{
        $data['patients'] = $this->doc_model->getAllPatients();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
		$this->load->view('doctor/doc_view_home',$data);
	}
    
    public function getPatient()
    {
        $data['allFamily'] = $this->doc_model->get_all_family();
        $data['allComm'] = $this->doc_model->get_all_comm();
        $data['allMotor'] = $this->doc_model->get_all_mortor();
        $data['allCog'] = $this->doc_model->get_all_cog();
        $data['allNotes'] = $this->doc_model->get_all_notes();
        $data['patient_id'] = $this->input->post('patientid');
        $data['patients'] = $this->doc_model->getAllPatients();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
		$this->load->view('doctor/doc_view_patient',$data);
    }
      
    public function add_family_history()
    {
        $patient_id = $this->input->post('patientid');
        $data = array(
            'patient_id' => $this->input->post('patientid'),
            'doc_name' => $this->input->post('doctorid'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'father' => $this->input->post('father'),
            'mother' => $this->input->post('mother'),
            'no_of_sibilings' => $this->input->post('noOfSibilings'),
            'names_of_sibilings' => $this->input->post('namesOfSibilings'),
            'home_situation' => $this->input->post('homeSituation'),
            'presenting_problems' => $this->input->post('presentingProblem'),
            'during_pregnancy' => $this->input->post('duringPregnancy'),
            'at_birth' => $this->input->post('atBirth'),
            'mode_of_dilivery' => $this->input->post('modeOfDelivery'),
            'birth_weight' => $this->input->post('birthWeight'),
            'birth_cry' => $this->input->post('birthCry'),
            'after_birth' => $this->input->post('afterBirth'),
            'relevent_illnesses' => $this->input->post('releventIllnesses'),
            'medications' => $this->input->post('medication'),
            'audiology' => $this->input->post('audiology'),
            'audio_left' => $this->input->post('audioLeft'),
            'audiio_right' => $this->input->post('audioRight'),
            'vision' => $this->input->post('vision'),
            'vision_left ' => $this->input->post('visionLeft'),
            'vision_right' => $this->input->post('visionRight'),
            'related_history_family' => $this->input->post('relatedConditions')
        );

        $result = $this->doc_model->add_family_history($data);
        if ($result == TRUE) {
            
            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['successMessage'] = 'Family History added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['errorMessage'] = 'Family History added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        }
            
    }
    
    public function add_communication_skills()
    {
        
        $patient_id = $this->input->post('patientid');
        $data = array(
            'patient_id' => $this->input->post('patientid'),
            'doc_name' => $this->input->post('doctorid'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'func_comm' => $this->input->post('funcCom'),
            'listening' => $this->input->post('listening'),
            'attetion' => $this->input->post('attention'),
            'sucking' => $this->input->post('sucking'),
            'chewing' => $this->input->post('chewing'),
            'blowing' => $this->input->post('blowing'),
            'strow' => $this->input->post('strow'),
            'drooling' => $this->input->post('drooling'),
            'com_non_facial' => $this->input->post('compreNonVerbalFacial'),
            'com_non_gesture' => $this->input->post('compreNonVerbalGestures'),
            'com_verbal' => $this->input->post('compreVerbal'),
            'expre_non_facial' => $this->input->post('expreNonVerbalFacial'),
            'expre_non_gesture' => $this->input->post('expreNonVerbalGestures'),
            'expre_verbal' => $this->input->post('expressVerbal'),
            'articulation' => $this->input->post('articulation'),
            'intelligibility' => $this->input->post('intelligibility'),
            'phonollogy' => $this->input->post('phonollogy'),
            'sentence ' => $this->input->post('sentences'),
            'word_meaning' => $this->input->post('words'),
            'convertations' => $this->input->post('convertations'),
            'eye_contact' => $this->input->post('eyeContact'),
            'turn_taking' => $this->input->post('turnTaking'),
            'initiating' => $this->input->post('initiating'),
            'appropriate_answer' => $this->input->post('approAnswer'),
            'voice' => $this->input->post('voice'),
            'fluency' => $this->input->post('fluency'),
            'other' => $this->input->post('other'),
            'prognosis' => $this->input->post('prognosis')
        );

        $result = $this->doc_model->add_communication_skills($data);
        if ($result == TRUE) {
            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['successMessage'] = 'Communication Skills added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['errorMessage'] = 'Communication Skills added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        }
        
    }
    
    public function add_motor_skills(){
         
        $patient_id = $this->input->post('patientid');
        $data = array(
            'patient_id' => $this->input->post('patientid'),
            'doc_name' => $this->input->post('doctorid'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'gross' => $this->input->post('gross'),
            'fine' => $this->input->post('fine'),
            'social' => $this->input->post('social'),
            'feeding' => $this->input->post('feeding'),
            'dressing' => $this->input->post('dressing'),
            'toilettig' => $this->input->post('toiletting'),
            'independence' => $this->input->post('independence'),
            'personality' => $this->input->post('behavior'),
            'stereotypic_behaviors' => $this->input->post('stereotypic')
            
        );

        $result = $this->doc_model->add_motor_skills($data);
        if ($result == TRUE) {
            
            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['successMessage'] = 'Mortor Skills added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {

            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['errorMessage'] = 'Mortor Skills added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        }
        
        
    }
    
    public function add_cognitive_skills(){
        
        $patient_id = $this->input->post('patientid');
        $data = array(
            'patient_id' => $this->input->post('patientid'),
            'doc_name' => $this->input->post('doctorid'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'problem_solving' => $this->input->post('problem'),
            'matching' => $this->input->post('maching'),
            'colors' => $this->input->post('colors'),
            'sizes' => $this->input->post('sizes'),
            'sequencing' => $this->input->post('sequencing'),
            'counting' => $this->input->post('counting'),
            'concept' => $this->input->post('concept'),
            'memory' => $this->input->post('memory'),
            'hobbies' => $this->input->post('play'),
            'interaction' => $this->input->post('interaction'),
            'babble' => $this->input->post('babble'),
            'first_word' => $this->input->post('firstWord'),
            'word_together' => $this->input->post('wordTogether'),
            'eppressing_needs' => $this->input->post('expressingNeeds'),
            'school' => $this->input->post('school')
            
        );

        $result = $this->doc_model->add_cognitive_skills($data);
        if ($result == TRUE) {
            
            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['successMessage'] = 'Cognitive and communicatin developing added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['errorMessage'] = 'Cognitive and communicatin developing added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        }
        
    }
    
    public function add_case_notes(){
        
        $patient_id = $this->input->post('patientid');
        $data = array(
            'patient_id' => $this->input->post('patientid'),
            'doc_name' => $this->input->post('doctorid'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'note' => $this->input->post('cese_notes')
            
        );

        $result = $this->doc_model->add_case_notes($data);
        if ($result == TRUE) {
            
            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['successMessage'] = 'Case notes added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['allFamily'] = $this->doc_model->get_all_family();
            $data['allComm'] = $this->doc_model->get_all_comm();
            $data['allMotor'] = $this->doc_model->get_all_mortor();
            $data['allCog'] = $this->doc_model->get_all_cog();
            $data['allNotes'] = $this->doc_model->get_all_notes();
            $data['patient_id'] = $patient_id;
            $data['errorMessage'] = 'Case notes added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        }
        
    }

}
?>
    
 