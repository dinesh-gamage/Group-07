<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DoctorView extends CI_Controller {
    
    var $page_number;
    var $tmpl;
    var $usr;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('doc_model');
        $this->load->model('indexmodel');
        $this->load->model('calendarmodel');
        $this->session->userdata('doc_session');
    }
    
    
	public function index()
	{
<<<<<<< HEAD
        
=======
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        $data['events'] = $this->calendarmodel->cal();
        $data['patients'] = $this->doc_model->getAllPatients();
        $data['goals'] = $this->doc_model->getAllGoals();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $data['refernces'] = $this->doc_model->get_All_references();
<<<<<<< HEAD
=======
        $patientid = $this->input->post('patientid');
        $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        
        

        $this->load->library("pagination");
        //Set config options
        $config["per_page"] = 1;
        $config['use_page_numbers'] = TRUE;
        $config['base_url'] = "http://localhost/Third_Year_Project/NiceAdmin/Index1/index/";//Link to use for pagination
        $config['uri_segment'] =3;
        //Add bootstrap html to config
        $config = $this -> bs_pagination($config);
        //fix request for records for page number use
        $this->page_number = intval(($this->page_number  == 1 || $this->page_number  == 0) ? 0 : ($this->page_number * $config['per_page']) - $config['per_page']);

        $config['total_rows'] = $this->indexmodel->count_results();
        $searchitem = $this->input->post('searchitem');
        $data['records'] = $this->indexmodel->get_results($config["per_page"], $this->page_number,$searchitem);

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        
        $this->load->library('table');
        $this->load->view('main/doc_header',$data1);
		$this->load->view('doctor/doc_view_home',$data);
        
        if(isset($_POST['pid'])){
            $this->session->set_userdata('current_patient', $_POST['pid']);
        }
	}
    
    public function getPatient()
    {
        $patient_id = $this->input->post('patientid');
<<<<<<< HEAD
=======
        $patientid = $this->input->post('search');
        $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
        $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
        $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
        $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
        $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
<<<<<<< HEAD
=======
        $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        $data['patient_id'] = $this->input->post('patientid');
        $data['patients'] = $this->doc_model->getAllPatients();
        $data['goals'] = $this->doc_model->getAllGoals();
        $data['refernces'] = $this->doc_model->get_All_references();
<<<<<<< HEAD
        $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id);
=======
        $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
        $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
        //$data['getProblem'] = $this->doc_model->get_problem_by_id($patient_id);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
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
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
<<<<<<< HEAD
            $data['patient_id'] = $patient_id;
            $data['successMessage'] = 'Family History added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
=======
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
            $data['successMessage'] = 'Family History added Successfully !';
            
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
<<<<<<< HEAD
            $data['patient_id'] = $patient_id;
=======
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['errorMessage'] = 'Family History added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
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
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
<<<<<<< HEAD
            $data['patient_id'] = $patient_id;
=======
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['successMessage'] = 'Communication Skills added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
<<<<<<< HEAD
            $data['patient_id'] = $patient_id;
=======
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
            $data['patient_id'] = $patient_id;
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['errorMessage'] = 'Communication Skills added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
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
            'toileting' => $this->input->post('toiletting'),
            'independence' => $this->input->post('independence'),
            'personality' => $this->input->post('behavior'),
            'stereotypic_behaviors' => $this->input->post('stereotypic')
            
        );

        $result = $this->doc_model->add_motor_skills($data);
        if ($result == TRUE) {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
<<<<<<< HEAD
=======
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['successMessage'] = 'Mortor Skills added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {

            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
<<<<<<< HEAD
            $data['patient_id'] = $patient_id;
=======
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
            $data['patient_id'] = $patient_id;
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['errorMessage'] = 'Mortor Skills added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
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
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
<<<<<<< HEAD
=======
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['successMessage'] = 'Cognitive and communicatin developing added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
<<<<<<< HEAD
=======
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['errorMessage'] = 'Cognitive and communicatin developing added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
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
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
<<<<<<< HEAD
=======
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['successMessage'] = 'Case notes added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
<<<<<<< HEAD
=======
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['errorMessage'] = 'Case notes added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        }
        
    }
    
    public function bs_pagination($config){
        /* This Application Must Be Used With BootStrap 3 *  */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        return $config;
    }
    //delete patient record in the patient record table
    public function delete(){
       // $delvalue = json_decode(stripslashes($this->input->post('id')));
        $one =$this->input->post('userid');
        foreach ($one  as $userid) {
            $this->indexmodel->del_patient($userid);
        }
        redirect(base_url('Index1'));
    }
    

    
    public function add_goals(){
        $patient_id = $this->input->post('patientid');
        
        
            if(!empty($this->input->post('goal1')))
            {
                    
                $data[] = array(
                  'patient_id' => $this->input->post('patientid') ,
                  'doc_name' => $this->input->post('doc_name') ,
                  'date' => $this->input->post('date') ,
                  'time' => $this->input->post('time') ,
                  'type' => $this->input->post('type1') ,
                  'goal' => $this->input->post('goal1'),
                  'criteria' => $this->input->post('criteria1')
               );
        
            }
            if(!empty($this->input->post('goal2'))){
                
                $data[] = array(
                      'patient_id' => $this->input->post('patientid') ,
                      'doc_name' => $this->input->post('doc_name') ,
                      'date' => $this->input->post('date') ,
                      'time' => $this->input->post('time') ,
                      'type' => $this->input->post('type2') ,
                      'goal' => $this->input->post('goal2'),
                      'criteria' => $this->input->post('criteria2') 
                   );
                   
            }
            if(!empty($this->input->post('goal3'))){
                   
               $data[] = array(
                  'patient_id' => $this->input->post('patientid') ,
                  'doc_name' => $this->input->post('doc_name') ,
                  'date' => $this->input->post('date') ,
                  'time' => $this->input->post('time') ,
                  'type' => $this->input->post('type3') ,
                  'goal' => $this->input->post('goal3'),
                  'criteria' => $this->input->post('criteria3')
               );

            }
        if(!empty($this->input->post('goal4'))){
            $data[] = array(
              'patient_id' => $this->input->post('patientid') ,
              'doc_name' => $this->input->post('doc_name') ,
              'date' => $this->input->post('date') ,
              'time' => $this->input->post('time') ,
              'type' => $this->input->post('type4') ,
              'goal' => $this->input->post('goal4'),
              'criteria' => $this->input->post('criteria4')
           );
        }
        if(!empty($this->input->post('goal5'))){
        
            $data[] = array(
              'patient_id' => $this->input->post('patientid') ,
              'doc_name' => $this->input->post('doc_name') ,
              'date' => $this->input->post('date') ,
              'time' => $this->input->post('time') ,
              'type' => $this->input->post('type5') ,
              'goal' => $this->input->post('goal5'),
              'criteria' => $this->input->post('criteria5') 
           );
        }


        $this->db->insert_batch('goals', $data); 
        
        $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
        $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
        $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
        $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
        $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
        $data['patient_id'] = $patient_id;
<<<<<<< HEAD
=======
        $data['refernces'] = $this->doc_model->get_All_references();
        $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
        $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
        $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
        $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        $data['successMessage'] = 'Goals added Successfully !';
        $data['patients'] = $this->doc_model->getAllPatients();
        $data['goals'] = $this->doc_model->getAllGoals();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
        $this->load->view('doctor/doc_view_patient',$data);

    }
    
    public function add_goal_marks(){
        $patient_id = $this->input->post('patientid');
        $goals = $this->doc_model->getAllGoalsByID($patient_id);
        
        foreach ($goals as $goals):
        
        $sequ = $goals->sequence;
        $goal = $this->input->post('goal'.$sequ);
        $marks = $this->input->post('mark'.$sequ);
        $data[] = array(
            'patient_id' =>  $patient_id,
            'goal' => $goal,
            'marks' => $marks,
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'doc_name' => $this->input->post('doc_name')
            
        );
        endforeach;
        
        $this->db->insert_batch('patient_goal', $data); 
        
        $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
        $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
        $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
        $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
        $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
        $data['patient_id'] = $patient_id;
<<<<<<< HEAD
=======
        $data['refernces'] = $this->doc_model->get_All_references();
        $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
        $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
        $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
        $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
        $data['successMessage'] = 'Marks added Successfully !';
        $data['patients'] = $this->doc_model->getAllPatients();
        $data['goals'] = $this->doc_model->getAllGoals();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
        $this->load->view('doctor/doc_view_patient',$data);
    }
    
    
    public function edit_data(){
        $del = $this->input->post('delete');
        if(isset($del)){
            $id = $this->input->post('id');
            $this->calendarmodel->delete($id);
            redirect(base_url('DoctorView'));
        }else{
            $color = $this->input->post('color');
            $title = $this->input->post('title');
            $id = $this->input->post('id');
            $this->calendarmodel->update_data($id,$color,$title);
            redirect(base_url('DoctorView'));
        }
    }
    public function edit_event(){
        $id = $this->input->post('id');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $title =$this->input->post('title');
        $one = $this->calendarmodel->update_event($id,$start,$end,$title);
        if($one){
            echo true;
        }
//        redirect(base_url('DoctorView'));
        
    }
    public function add_data(){
            $start = $this->input->post('start');
            $end = $this->input->post('end');
            $color = $this->input->post('color');
            $title = $this->input->post('title');
            $doctor = $this->input->post('doctorName');
            $this->calendarmodel->add_data($start,$end,$color,$title,$doctor);
            redirect(base_url('DoctorView'));
    }
    
    public function add_doc_notes(){
        $patient_id = $this->input->post('patientid');
        $data = array(
            'patient_id' => $this->input->post('patientid'),
            'note' => $this->input->post('doc_notes'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'doc_name' => $this->input->post('doc_name')
        );
        $result = $this->doc_model->add_doc_notes($data);
        if ($result == TRUE) {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
<<<<<<< HEAD
=======
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['successMessage'] = 'Note added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
<<<<<<< HEAD
            $data['patient_id'] = $patient_id;
=======
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
            $data['errorMessage'] = 'Note added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        }
        
    }
<<<<<<< HEAD
    public function getGraphData(){
        $this->load->model('graphData');
        if(isset($_POST['graph'])){
            $dates = $this->graphData->getDates();
            foreach($dates as $d){
                $graphRes = $this->graphData->getGraphData($d);
                echo json_encode($graphRes);
                
            }
            
            
            
        }
        
        
    }
   
    
    
=======
    
    public function add_diagnosis(){
        $patient_id = $this->input->post('patientid');
        $data = array(
            'patient_id' => $this->input->post('patientid'),
            'doc_name' => $this->input->post('doctorid'),
            'diagnosis' => $this->input->post('diagnosis'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time')
        );
        
        $result = $this->doc_model->add_diagnosis($data);
        if ($result == TRUE) {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
            $data['successMessage'] = 'Diagnosis added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
            $data['errorMessage'] = 'Diagnosis added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        }
    }
    public function add_problem(){
        $patient_id = $this->input->post('patientid');
        $data = array(
            'doc_name2' => $this->input->post('doctorid'),
            'problem' => $this->input->post('problem'),
            'date2' => $this->input->post('date'),
            'time2' => $this->input->post('time')
        );
        
        $result = $this->doc_model->add_problem($data,$patient_id);
        if ($result == TRUE) {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
            $data['successMessage'] = 'Porblem added Successfully !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        } else {
            
            $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
            $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
            $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
            $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
            $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
            $data['patient_id'] = $patient_id;
            $data['refernces'] = $this->doc_model->get_All_references();
            $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
            $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
            $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
            $patientid = $this->input->post('patientid');
            $data['patientByID'] = $this->doc_model->getPatientById($patientid);
            $data['errorMessage'] = 'Problem added failed !';
            $data['patients'] = $this->doc_model->getAllPatients();
            $data['goals'] = $this->doc_model->getAllGoals();
            $data1['doc_data'] = $this->profilemodel->get_doc_data();
            $this->load->view('main/doc_header',$data1);
            $this->load->view('doctor/doc_view_patient',$data);
        }
    }
    
    
    public function search_doc_view(){
        $patientid = $this->input->post('search');
        $patient_id = $this->input->post('patientid');
        $data['patientByID'] = $this->doc_model->getPatientById($patientid);
        $data['getFamily'] = $this->doc_model->get_family_by_patient_id($patient_id);
        $data['getComm'] = $this->doc_model->get_comm_by_patient_id($patient_id);
        $data['getMotor'] = $this->doc_model->get_mortor_by_patient_id($patient_id);
        $data['getCog'] = $this->doc_model->get_cog_by_patient_id($patient_id);
        $data['getNotes'] = $this->doc_model->get_notes_by_patient_id($patient_id);
        $data['patient_id'] = $patient_id;
        $data['refernces'] = $this->doc_model->get_All_references();
        $data['doc_notes'] = $this->doc_model->get_doc_notes_by_id($patient_id); 
        $data['getDiagnosis'] = $this->doc_model->get_diagnosis_by_id($patient_id);
        $data['goalEvaluation'] = $this->doc_model->get_goal_marks_by_patient_id($patient_id);
        $data['patients'] = $this->doc_model->getAllPatients();
        $data['goals'] = $this->doc_model->getAllGoals();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $this->load->view('main/doc_header',$data1);
        $this->load->view('doctor/doc_view_patient',$data);
        
    }
    
    public function search_doc_home(){
        $patientid = $this->input->post('patientid');
        $data['patientByID'] = $this->doc_model->getPatientById($patientid);
        $data['events'] = $this->calendarmodel->cal();
        $data['patients'] = $this->doc_model->getAllPatients();
        $data['goals'] = $this->doc_model->getAllGoals();
        $data1['doc_data'] = $this->profilemodel->get_doc_data();
        $data['refernces'] = $this->doc_model->get_All_references();
        
        
        

        $this->load->library("pagination");
        //Set config options
        $config["per_page"] = 1;
        $config['use_page_numbers'] = TRUE;
        $config['base_url'] = "http://localhost/Third_Year_Project/NiceAdmin/Index1/index/";//Link to use for pagination
        $config['uri_segment'] =3;
        //Add bootstrap html to config
        $config = $this -> bs_pagination($config);
        //fix request for records for page number use
        $this->page_number = intval(($this->page_number  == 1 || $this->page_number  == 0) ? 0 : ($this->page_number * $config['per_page']) - $config['per_page']);

        $config['total_rows'] = $this->indexmodel->count_results();
        $searchitem = $this->input->post('searchitem');
        $data['records'] = $this->indexmodel->get_results($config["per_page"], $this->page_number,$searchitem);

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        
        $this->load->library('table');
        $this->load->view('main/doc_header',$data1);
		$this->load->view('doctor/doc_view_home',$data);
        
        if(isset($_POST['pid'])){
            $this->session->set_userdata('current_patient', $_POST['pid']);
        }
        
    }
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
    

}
?>
    
 