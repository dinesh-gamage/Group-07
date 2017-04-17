<?php
/**
 * Created by PhpStorm.
 * User: kosala
 * Date: 4/14/2017
 * Time: 8:38 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

    }
    public function newpatient(){
        if($this->input->post('pid')) {
            $result = $this->indexmodel->get_new_patients();

                foreach($result as $newpatient){
                    $res = '
                            <li  >
                                    <a id="newpatient" onclick="loadpatient( '.$newpatient->patient_id.');">
                                        <span class="label label-primary"><i class="icon_profile"></i></span>
                                        '.$newpatient->patien_name.'
                                        <span class="small italic pull-right">5 mins</span>
                                    </a>
                                </li>
                    ';
                    echo $res;
                }

        }
    }

    public function count_new_patient(){
        $result = $this->indexmodel->get_new_patients();
        echo count($result);
    }

}