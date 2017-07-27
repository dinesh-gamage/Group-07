<?php

/**
* 
*/
class Upload extends CI_Model
{
	
	public function insert_file($pid, $filename, $title)
    {
        $data = array(
        	'patient_id' => $pid,
            'test_name'      => $title,
            'record_path'         => $filename
        );
        $this->db->insert('checkup', $data);
        //return $this->db->insert_id();
        return true;
    }
}