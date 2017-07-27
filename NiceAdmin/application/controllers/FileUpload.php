<?php

/**
* 
*/
class FileUpload extends CI_Controller
{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Upload');
        
    }

	public function do_upload(){
		$img = $_POST['description'];
		$pid = $_POST['pa_id'];  
		if(isset($_FILES["image_file"]["name"]))  
           {  
                $config['upload_path'] = './uploads/';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc';
                $config['max_size'] = 1024 * 8;  
                $this->load->library('upload', $config);  
                if(!$this->upload->do_upload('image_file'))  
                {  
                     echo $this->upload->display_errors();  
                }  
                else  
                {  
                     $data = $this->upload->data();
                     $file_id = $this->Upload->insert_file($pid, 'uploads/'.$data['file_name'], $img);
			            if($file_id)
			            {
			                //$status = "success";
			                echo "File successfully uploaded";
			            }
			            else{
			            	echo "Problem occured. Try again!";
			            }
                     
                     //echo '<img src="'.base_url().'uploads/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';  
                     //echo $img;
                }  
           }  
	}
}